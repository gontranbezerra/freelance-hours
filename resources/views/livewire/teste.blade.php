<div>

    <h1>
        Componente Live Wire
    </h1>

    <br />

    <input type="text" wire:model.live='search' />

    <br />

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>

</div>
