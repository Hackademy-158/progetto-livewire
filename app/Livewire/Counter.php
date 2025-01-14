<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    //! dichiariamo gli attributi
    public $value = 0;
    public $five = 5;

    //! funzione per incrementare il contatore
    public function increment(){
        $this->value++;
    }
    
    public function decrement(){
        $this->value--;
    }

    /* public function incrementByNumber(){
        $this->value += $this->five;
    } */

    public function incrementByNumber($number){
        $this->value += $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
