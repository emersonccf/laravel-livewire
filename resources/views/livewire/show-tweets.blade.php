<div>
    Show Tweets!!!
    <p>{{  $message }}</p>
    <input type="text" name="message" id="message" wire:model="message">

    <hr>
    @foreach($tweets as $tweet)
        <p>
            USUÁRIO: {{ $tweet->user->name }} CONTEÚDO: {{ $tweet->content }}
        </p>
    @endforeach

</div>
