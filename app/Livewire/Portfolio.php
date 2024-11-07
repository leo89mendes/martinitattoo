<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Portfolio as Port;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Portfolio extends Component
{    

    public $portfa;

    public $category;

    public $active;

    public $col;

    public function mount()
    {
        $this->portfa = Port::all()->take(8);

        $this->active = 0;

        $this->category = DB::table('categories')
        ->select('categories.name', 'categories.id')
        ->join('portfolios', 'categories.id', 'portfolios.categorie_id')->groupBy('categories.id')->get();
       if($this->portfa->count() > 4)
       {
            $this->col = 3;
       }else{
            $this->col = $this->portfa->count();
       }
        
    }

    public function render()
    {
        return view('livewire.portfolio');
    }

    public function getCategory ($id){
        
        $this->active = $id == 'all' ? 0 : $id;

        $this->portfa = $id == 'all' ? Port::all()->take(8) : Port::whereIn('categorie_id', [$id])->take(8)->get();
        
        if($this->portfa->count() > 4)
       {
            $this->col = 3;
       }else{
            $this->col = $this->portfa->count();
       }
    }
}
