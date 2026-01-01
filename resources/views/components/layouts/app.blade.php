<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Home Page' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="app.css">
@livewireStyles
</head>

<body>
    <nav>
        <a href="/" @class(['active' => request()->is('/')])>Home</a>
        <a href="/hello-world" @class(['active' => request()->is('hello-world')])>HelloWorld</a>
        <a href="/todos" @class(['active' => request()->is('todos')])>Todos</a>
        <a href="/counter" @class(['active' => request()->is('counter')])>Counter</a>
        <a href="/calculator" @class(['active' => request()->is('calculator')])>Calculator</a>
    </nav>

    {{ $slot }}

    @livewireScripts
</body>

</html>
