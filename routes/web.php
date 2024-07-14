<?php

use App\Livewire\Gallery;
use Illuminate\Support\Facades\Route;

Route::get('/', Gallery::class)->name('gallery');
