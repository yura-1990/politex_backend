<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Facultyabout extends Model
{

    protected $fillable = [
        'img',
        'menu_uz',
        'text_uz',
        'text_ru',
        'text_en',
        'iconka'
    ];
}
