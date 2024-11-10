<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'img', 'btn_text', 'link', 'img_mobile'];

    protected $casts = [
        'img' => 'json'
    ];
}
