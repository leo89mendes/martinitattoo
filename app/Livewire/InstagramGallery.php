<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class InstagramGallery extends Component
{
    public $allMedia, $videoMedia, $imgMedia, $status, $saveData;
    public $cat = 'ALL';
    public $result = [];
    public $start = 0;
    public $end = 8;
    public $loaded = 0; 
    public $limit = 24;
    public $loading = false;

    public function mount(){
        $this->fetchData();
    }
    public function loadMore(){
        if($this->loaded < 3)
        {
            $this->start += 8;
            $this->wrapped($this->saveData, $this->start, $this->end);
            $this->loaded+=1;
            $this->dispatch('data-loaded');
        }
    }
    public function wrapped($data, $start, $end){
        $this->allMedia =  array_slice($data, $start, $end);
        $arr = [];
        foreach ($this->allMedia as $k => $v) {
            if($v['media_type'] === 'CAROUSEL_ALBUM')
            {
                $v['carrousel'] = $this->fetchCarrousel($v['id']);
            }
            array_push($arr, $v);
        }
        $this->allMedia = $arr;
        $this->status = 'success';
        array_push($this->result, ...$this->allMedia);
    }
    public function fetchData()
    {
        try {
            $response = Http::withToken(config('services.instagram.token'))
            ->get('https://graph.instagram.com/8535779976491689/media/',[
                'fields' => 'id,media_url,media_type, thumbnail_url',
                'limit' => $this->limit
            ]);
            // Check for a successful response
            if ($response->successful()) {
                $this->saveData = $response->json()['data'];
                $this->wrapped($response->json()['data'], $this->start, $this->end);
            }
        } catch (\Exception $e) {
            $this->status = ['error' => 'An error occurred: ' . $e->getMessage()];
        }
    }

    public function fetchCarrousel($id){
        try {
            $response = Http::withToken(config('services.instagram.token'))
            ->get('https://graph.instagram.com/'. $id .'/children/',[
                'fields' => 'id,media_url,media_type, thumbnail_url',
            ]); // Replace with your API URL
            if ($response->successful()) {
                return $response->json()['data'];
            } else {
                $this->status = ['error' => 'Failed to fetch data.'];
            }
        } catch (\Exception $e) {
            $this->status = ['error' => 'An error occurred: ' . $e->getMessage()];
        }
    }

    public function getCategory($categorie){
        $this->cat = $categorie;
        $this->result = [];
        switch ($categorie) {
            case 'VIDEOS':
                $this->videoMedia = array_filter($this->saveData, function($media) {
                    return $media['media_type'] === 'VIDEO';
                });
                $this->wrapped($this->videoMedia, 0, sizeof($this->videoMedia));
                break;
            case 'IMAGES':
                $this->imgMedia = array_filter($this->saveData, function($media) {
                    return $media['media_type'] === 'CAROUSEL_ALBUM' || $media['media_type'] === 'IMAGE';
                });
                $this->wrapped($this->imgMedia, 0, sizeof($this->imgMedia));
                break;
            default:
                $this->wrapped($this->saveData, 0, sizeof($this->saveData));
                break;
        }
    }

    public function render()
    {
        return view('livewire.instagram-gallery');
    }
}
