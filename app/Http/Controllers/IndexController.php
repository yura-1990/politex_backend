<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class IndexController extends Controller
{
    public function Index(){
//        Artisan::call('vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"');
        return view('welcome');
    }
}
