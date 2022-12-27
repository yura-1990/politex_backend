<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Facultydirector extends Model
{

    protected $fillable = [
        'menu_uz',
        'director_img',
        'directorname_uz',
        'directorname_ru',
        'directorname_en',
        'position_uz',
        'position_ru',
        'position_en',
        'degree_uz',
        'degree_ru',
        'degree_en',
        'acceptance_uz',
        'acceptance_ru',
        'acceptance_en',
        'phone',
        'email',
    ];

}
