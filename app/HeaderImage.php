<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderImage extends Model
{
    protected $fillable = ['image'];
    protected $table = 'header_image';

    public static function image(Request $request)
    {
        $folder = date('Y-m-d');
        $path = $request->file('image')->store("headerImage/{$folder}");
        return $path;
    }
}
