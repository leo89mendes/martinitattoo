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

    public function mount()
    {
        $this->portfa = Port::all();

        $this->category = DB::table('categories')
            ->select('categories.name', 'categories.id')
            ->join('portfolios', 'categories.id', 'portfolios.categorie_id')->groupBy('categories.id')->get();
    }

    public function render()
    {
        
        return view('livewire.portfolio');
    }

    public function getCategory ($id){
        if($id != 'all')
            $this->portfa = Port::where('categorie_id', $id)->take(7)->get();
        else
            $this->portfa = Port::take(7)->get();
    }
}
