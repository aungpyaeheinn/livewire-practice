<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Home Page' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class="bg-white text-gray-900 transition-colors duration-300 dark:bg-gray-900 dark:text-gray-100">

    <nav class="p-4 flex items-center space-x-4">

        <a href="/" @class(['active' => request()->is('/')])>Home</a>
        <a href="/hello-world" @class(['active' => request()->is('hello-world')])>HelloWorld</a>
        <a href="/todos" @class(['active' => request()->is('todos')])>Todos</a>
        <a href="/counter" @class(['active' => request()->is('counter')])>Counter</a>
        <a href="/calculator" @class(['active' => request()->is('calculator')])>Calculator</a>
        <a href="/search" @class(['active' => request()->is('search')])>Search</a>

        <button id="theme-toggle" class="px-3 py-1 border rounded flex items-center gap-2 cursor-pointer">
            <i class="fas fa-moon"></i>
        </button>
    </nav>

    {{ $slot }}

    @livewireScripts

    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;

        const updateBtn = () => {
            const icon = themeToggle.querySelector('i');
            const text = themeToggle.querySelector('span');
            if (html.classList.contains('dark')) {
                icon.className = 'fas fa-sun';
                //text.textContent = 'Switch to Light';
            } else {
                icon.className = 'fas fa-moon';
                //text.textContent = 'Switch to Dark';
            }
        };

        // Run on page load to set button state
        updateBtn();

        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
            updateBtn();
        });
    </script>
</body>

</html>