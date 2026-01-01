<?php

use App\Livewire\Calculator;
use App\Livewire\Todos;
use App\Livewire\Counter;
use App\Livewire\Greeter;
use App\Livewire\Welcome;
use App\Livewire\HelloWorld;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);

Route::get('/hello-world', HelloWorld::class);

Route::get('/todos', Todos::class);

Route::get('/counter', Counter::class);

Route::get('/calculator', Calculator::class);

