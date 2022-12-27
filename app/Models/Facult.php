<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Facult extends Model
{
    protected $table = 'facults';

    protected $fillable = [
        'id',
	    'img',
        'menu_uz',
        'menu_ru',
        'menu_en',
        'iconka'
    ];
    public function Facultabout(){
        return $this->hasMany(Facultyabout::class, 'menu_uz', 'menu_uz');
    }
    public function Faclutydirector(){
        return $this->hasMany(Faclutydirector::class, 'menu_uz', 'menu_uz');
    }
    public function Facultymember(){
        return $this->hasMany(Facultymember::class, 'menu_uz', 'menu_uz');
    }
}
