<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <p>{{ $infoName ? "Dinamic: - {$infoName} -" : "Static: - - - "}}</p>
    <input type="text" name="name" id="name" wire:model="infoName" placeholder="Digite algo">

    <hr>

    <div>
        @foreach ($tweets as $tweet)
        <div style="border: 1px solid black; margin: 1rem 0; padding: 1rem;">
            <h3>Name: {{ $tweet->user->name }}</h3>
            <p>{{ $tweet->content }}</p>
            </div>
        @endforeach
        </div>
</div>
