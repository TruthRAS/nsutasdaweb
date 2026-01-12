<?php

use Illuminate\Support\Facades\Route;
use  App\Models\Job;




Route::get('/', function () {
    return view('welcome', [
       // 'anouncements' => Job::annoucement(),
        //'jobs' => Job::job(),
    ]);
});




    Route::get('about', function () {
        return(view('about',[
            //'jobs'=>Job::job()
            ]));
    }
        );


        Route::get('gallery', function () {
            return(view('gallery'));
        }
            );


        Route::get('carouselnew', function () {
            return(view('carouselnew'));
           }
          );


/*Auth::routes();*/

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
