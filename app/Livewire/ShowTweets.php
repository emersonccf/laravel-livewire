<?php

namespace App\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    public string $message =  'Apenas um teste 2';
    #[Title('Criando um novo Tweet')]
    public function render()
    {
        return view('livewire.show-tweets');
    }
}
