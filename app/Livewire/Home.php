<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Banners;
use App\Models\Aboutme;
use App\Models\Category;
use App\Models\Video;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Setting;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home',[
            'banners' => Banners::all(),
            'aboutme' => Aboutme::all(),
            'video' => Video::all(),
            'category' => Category::all(),
            'port' => Portfolio::all(),
            'testimonials' => Testimonial::all(),
            'setting' => Setting::all(),
        ]);
    }
}
