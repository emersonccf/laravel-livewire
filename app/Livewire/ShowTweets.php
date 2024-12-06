<?php

namespace App\Livewire;

use App\Models\Tweet;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Exibindo e Criando Tweets')]
class ShowTweets extends Component
{
    use WithPagination;

    public string $content =  'Meu tweet!!!';

    protected $rules = [
        'content' => 'required|min:3|max:255',
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->paginate(5); // consulta com relacionamento otimizada

        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create(){

        $this->validate();

        Tweet::create([
            'content' => $this->content,
            'user_id' => 1
        ]);

        $this->content = '';
    }
}
