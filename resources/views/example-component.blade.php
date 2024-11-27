<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Example</title>
    @livewireStyles
</head>
<body>
<h1>Welcome to Laravel Livewire</h1>

<!-- Livewire komponentini chaqirish -->
@livewire('example-component')

@livewireScripts
</body>
</html>


<div>
    <h2>{{ $message }}</h2>
    <button wire:click="$set('message', 'Yangi xabar!')">Xabarni o'zgartirish</button>
</div>
