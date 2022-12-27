<?php

namespace App\Traits;

trait Localization{

    public static function column($col){
        $defaultLang = $col.'_'.app()->getLocale();
        return "$defaultLang as $col";
//        return $defaultLang;
    }
}
?>
