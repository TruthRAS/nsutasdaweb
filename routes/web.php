<?php

use Illuminate\Support\Facades\Route;
use  App\Models\Job;
use App\Models\annoucement;
use App\Models\mylogic;


Route::get('/', function () {
    return(view('welcome',['anouncements'=>Job::annoucement()],['jobs'=>Job::job()]));
}
    );




    Route::get('about', function () {
        return(view('about',['jobs'=>Job::job()]));
    }
        );


        Route::get('gallery', function () {
            return(view('gallery'));
        }
            );


            Route::get('teusday', function () {
                return(view('teusday',['jobs'=>Job::teusday()]));
            }
                );

    Route::get('wednesday', function () {
         return(view('wednesday',['jobs'=>Job::wednesday()]));
        }
        );
    Route::get('thursday', function () {
          return(view('thursday',['jobs'=>Job::thursday()]));
         }
        );
        Route::get('carouselnew', function () {
            return(view('carouselnew'));
           }
          );
    Route::get('friday', function () {
        return(view('friday',['jobs'=>Job::friday()]));
        }
        );
    Route::get('saturday', function () {
         return(view('saturday',['jobs'=>Job::saturday()]));
         }
         );
         Route::get('sunday', function () {
            return(view('sunday',['jobs'=>Job::sunday()]));
           }
          );
          Route::get('monday', function () {
            return(view('monday',['jobs'=>Job::monday()]));
           }
          );


/*Auth::routes();*/

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
?>