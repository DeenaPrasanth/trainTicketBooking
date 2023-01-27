<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Train;
class Counter extends Component
{
    public $train;

    public function render()
    {
        return view('livewire.counter',[
            'train' => $this->train
        ]);
    }

    public function mount()
    {
        $this->mountComponent();
    }

    public function mountComponent() {
            
            $this->train = Train::where('status', 1)->get();
               
     
    }

   

    
}
