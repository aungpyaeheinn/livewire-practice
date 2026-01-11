<?php

use App\Livewire\{
    Welcome,
    HelloWorld,
    Todos,
    Counter,
    Calculator,
    Search
};
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);

$routes = [
    '/hello-world' => HelloWorld::class,
    '/todos'       => Todos::class,
    '/counter'     => Counter::class,
    '/calculator'  => Calculator::class,
    '/search'      => Search::class,
];

foreach ($routes as $uri => $component) {
    Route::get($uri, $component);
}
