<?php

namespace App\Http\Controllers;

use Livewire\Component;

class ExampleComponent extends Component
{
    public $message = 'Salom, Livewire!';

    public function render()
    {
        return view('livewire.example-component');
    }
}
