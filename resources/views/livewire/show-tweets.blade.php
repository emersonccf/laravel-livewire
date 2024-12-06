<div>
    Show Tweets!!!
    <p>{{  $content }}</p>
    <form action="" method="post" wire:submit.prevent="create">

        <input type="text" name="content" id="content" placeholder="Digite seu tweet..." wire:model="content">
        @error('content') {{ $message }}  @enderror

        <button type="submit">Criar Tweet</button>
    </form>

    <hr>
    @foreach($tweets as $tweet)
        <p>
            USUÁRIO: {{ $tweet->user->name }} CONTEÚDO: {{ $tweet->content }}
        </p>
    @endforeach

</div>
