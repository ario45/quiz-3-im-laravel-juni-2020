<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel{
    public static function get_all(){
        $items = DB::table('artikel')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::table('artikel')->save($data);
        return $new_item;
    }
}