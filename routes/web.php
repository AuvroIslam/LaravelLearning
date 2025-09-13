<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['name' => 'Auvro']);
});
Route::get('/ninjas', function () {
    $ninjas=[
        ['name'=>'Auvro', 'skill'=>'Laravel','id'=>1],
        ['name'=>'Oitij', 'skill'=>'Vue','id'=>2]
    ];
    return view('ninjas.index', ['ninjas' => $ninjas]);
});

Route::get('/ninjas/{id}', function ($id) {
  
    return view('ninjas.show', ['id' => $id]);
});


