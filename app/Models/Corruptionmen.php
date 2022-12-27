<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Corruptionsector;

class Corruptionmen extends Model
{



    public function corruptionsectors()
    {
        return $this->hasMany(Corruptionsector::class, 'menu_uz', 'menu_uz');
    }
}
