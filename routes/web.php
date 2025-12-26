<?php

use App\Livewire\Todos;
use App\Livewire\Counter;
use App\Livewire\HelloWorld;
use Illuminate\Support\Facades\Route;

Route::get('/', HelloWorld::class);

Route::get('/todos', Todos::class);

Route::get('/counter', Counter::class);


