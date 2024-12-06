<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;

#[Title('Exibindo Tweets')]
class ShowTweets extends Component
{
    public string $message =  'Apenas um teste 2';
    public function render()
    {
        $tweets = Tweet::with('user')->get(); // consulta com relacionamento otimizada

        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }
}
