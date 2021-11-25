<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <p>{{ $content ? $content : "Preview... " }}</p>
    <form method="POST" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content" placeholder="Digite algo... (280 caracteres)">
        @error('content')
        <marquee>{{ $message }}</marquee>
        @enderror
        <span></span>
        <button type="submit">
            Criar Tweet
        </button>
    </form>

    <hr>

    <div>
        @foreach ($tweets as $tweet)
        <div style="border: 1px solid black; margin: 1rem 0; padding: 1rem;">
            <h3>Name: {{ $tweet->user->name }}</h3>
            <p>{{ $tweet->content }}</p>
            <div>
            @if($tweet->likes->count())
                <a style="display:inline-block; padding: .5rem 1rem; background-color: red; color: white; border-radius: 6px; margin-top: 1rem;" href="#" wire:click.prevent="unlike({{ $tweet->id }})">Deslike</a>
            @else 
                <a style="display:inline-block; padding: .5rem 1rem; background-color: #007bff; color: white; border-radius: 6px; margin-top: 1rem;" class="like" href="#" wire:click.prevent="like({{ $tweet->id }})" >Like</a>
            @endif
            </div>
        </div>
        @endforeach
    </div>
    <div class="navigator">{{ $tweets->links() }}</div>
    
</div>
