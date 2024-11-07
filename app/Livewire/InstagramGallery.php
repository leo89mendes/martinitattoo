<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class InstagramGallery extends Component
{
    public $allMedia, $videoMedia, $imgMedia, $status, $result;

    public $cat = 'ALL';

    public function mount(){
        $this->fetchData();
    }

    public function fetchData()
    {
        try {
            $response = Http::withToken('IGQWRPNndCMDFMWWlnVzVKTl9qbWNUSmhyZA1ZAuX3BTejVxNzRycjNpLXdnNHlLY09sRlQyTUpOSHVabkk0bkFiOHFnazVNdjd0OUd4MC1BYXpERGVmUThaQk4xUEM5MlB1RFd6ZAmN2aFRvaENPVUdLN04xM3ZAwN3cZD')
            ->get('https://graph.instagram.com/8535779976491689/media/',[
                'fields' => 'id,media_url,media_type, thumbnail_url',
                'limit' => 20
            ]);
            // Check for a successful response
            if ($response->successful()) {
                //Filter out only video media
                $this->allMedia = $response->json()['data'];
                $arr = [];
                foreach ($this->allMedia as $k => $v) {
                    if($v['media_type'] === 'CAROUSEL_ALBUM')
                    {
                        $v['carrousel'] = $this->fetchCarrousel($v['id']);
                    }
                    array_push($arr, $v);
                }
                $this->allMedia = $arr;
                $this->videoMedia = array_filter($this->allMedia, function($media) {
                    return $media['media_type'] === 'VIDEO';
                });
                $this->videoMedia = array_values($this->videoMedia); // Re-index the array
                $this->imgMedia = array_filter($this->allMedia, function($media) {
                    return $media['media_type'] === 'CAROUSEL_ALBUM' || $media['media_type'] === 'IMAGE';
                });
                $this->status = 'succes';
                $this->result = $this->allMedia;
            }
        } catch (\Exception $e) {
            $this->status = ['error' => 'An error occurred: ' . $e->getMessage()];
        }
    }

    public function fetchCarrousel($id){
        try {
            $response = Http::withToken('IGQWRPNndCMDFMWWlnVzVKTl9qbWNUSmhyZA1ZAuX3BTejVxNzRycjNpLXdnNHlLY09sRlQyTUpOSHVabkk0bkFiOHFnazVNdjd0OUd4MC1BYXpERGVmUThaQk4xUEM5MlB1RFd6ZAmN2aFRvaENPVUdLN04xM3ZAwN3cZD')
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
        switch ($categorie) {
            case 'VIDEOS':
                $this->result = $this->videoMedia;
                break;
            case 'IMAGES':
                $this->result = $this->imgMedia;
                break;
            default:
                $this->result = $this->allMedia;
                break;
        }
    }

    public function render()
    {
        return view('livewire.instagram-gallery');
    }
}
