<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Player1;

Route::get('add', [Player1::class, 'add']); 
Route::get('/', [Player1::class, 'welcome'])->name('welcome');

// Route::get('/employer', [Player1::class, 'index'])->name('employer.index');
// Route::get('/employer/add', [Player1::class, 'add'])->name('employer.add');
// Route::post('/employer/store', [Player1::class, 'store'])->name('employer.store');
// Route::get('/employer/edit/{id}', [Player1::class, 'edit'])->name('employer.edit');
// Route::post('/employer/update/{id}', [Player1::class, 'update'])->name('employer.update');
// Route::post('/employer/destroy/{id}', [Player1::class, 'destroy'])->name('employer.destroy');
// Route::post('/employer/search', [Player1::class, 'search'])->name('employer.search');
// Route::get('/template', [Player1::class, 'template'])->name('template');
// Route::post('/employee/update', [Player1::class, 'update'])->name('employee.update');