<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


    Route::get('UploadJson', 'UsersTransController@UploadJson')->name('UploadJson');
                    
    Route::any('filterSearch', 'UsersTransController@filterSearch')->name('filterSearch');




