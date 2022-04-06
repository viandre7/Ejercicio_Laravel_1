<?php

// App::setlocale('en');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::resource('portafolio', '\App\Http\Controllers\ProjectController')->names('projects')->parameters(['portafolio' => 'project']);

Route::post('contacto', '\App\Http\Controllers\MessageController@store')->name('messages.store');

Auth::routes([ 'register' => false ]);

// Route::get('/portafolio', '\App\Http\Controllers\ProjectController@index')->name('projects.index');
// Route::get('/portafolio/crear', '\App\Http\Controllers\ProjectController@create')->name('projects.create');
// Route::get('/prtafolio/{project}/editar', '\App\Http\Controllers\ProjectController@edit')->name('projects.edit');
// Route::patch('/prtafolio/{project}', '\App\Http\Controllers\ProjectController@update')->name('projects.update');
// Route::post('/portafolio', '\App\Http\Controllers\ProjectController@store')->name('projects.store');
// Route::get('/portafolio/{project}', '\App\Http\Controllers\ProjectController@show')->name('projects.show');
// Route::delete('/portafolio/{project}', '\App\Http\Controllers\ProjectController@destroy')->name('projects.destroy');


// Route::get('/portfolio', \App\Http\Controllers\portfolioController::class)->name('portfolio');
// Route::resource('/portfolio', '\App\Http\Controllers\portfolioController')->only(['index']);


// Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolioo');


// Route::get('/', function() {
//     $nombre = 'Viviana';
//     // return view('home')->with('nombre', $nombre);
//     // return view('home')->with(['nombre' => $nombre]);
//     // return view('home', ['nombre' => $nombre] );
//     return view('home', compact('nombre'));
// });



// Route::get('/contactenos', function() {
//     return 'Bienvenido a contacto';
// })->name('contacto');

// Route::get('/', function() {
//   echo '<a href="'.route('contacto').'">Contacto 1</a>';
// });

// Route::get('/', function() {
//     return 'Hola desde la raíz';
// });
// Route::get('contacto/{nombre}', function($nombre) {
//     return 'Hola ' .$nombre;
// });
// Route::get('saludo/{nombre?}', function($nombre = 'Invitada') {
//     return 'Hola '.$nombre;
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




