<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="app.css">

        <title>{{ $title ?? 'Home Page' }}</title>
    </head>
    <body>
        <nav>
            <a href="/">Home</a>
            <a href="/hello-world" @class(['active' => request()->is('/hello-world')])>HelloWorld</a>
            <a href="/todos" @class(['active' => request()->is('/todos')])>Todos</a>
            <a href="/counter" @class(['active' => request()->is('/counter')])>Counter</a>
        </nav>

        {{ $slot }}
    </body>
</html>
