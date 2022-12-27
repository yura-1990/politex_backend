<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Facultymember extends Model
{

    protected $fillable = [
        'menu_uz',
        'employee_img',
        'employeename_uz',
        'employeename_ru',
        'employeename_en',
        'position_uz',
        'position_ru',
        'position_en',
        'phone',
        'email',
    ];
}
