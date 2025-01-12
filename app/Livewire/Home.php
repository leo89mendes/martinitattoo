<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Banners;
use App\Models\Aboutme;
use App\Models\Video;
use App\Models\Testimonial;
use App\Models\Setting;
use App\Models\Portfolio;

class Home extends Component
{
    public $result = [];
    public function mount(){
        $this->result = Portfolio::get()->toArray();
    }
    public function render()
    {
        return view('livewire.home',[
            'banners' => Banners::all(),
            'aboutme' => Aboutme::all(),
            'video' => Video::all(),
            'portfolio' => Portfolio::all(),
            'testimonials' => Testimonial::all(),
            'setting' => Setting::all(),
        ]);
    }
}
