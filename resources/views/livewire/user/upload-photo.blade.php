<div>
    <h1>Atualizar imagem do perfil</h1>
    <form action="" method="POST" wire:submit.prevent="storagePhoto">
        @error('photo')
            <span style="color: red; display: block;">{{ $message }}</span>
        @enderror
        <input type="file" wire:model="photo">
        <button type="submit" style="display: block; padding: .5rem 1rem; border-radius: 6px; background-color: #6875f5; margin-top: 1rem; color: white;">Enviar</button>
    </form>
</div>
