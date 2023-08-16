<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    use HasFactory;

    protected $table = 'the_loai';
    protected $primarykey = 'id';
    protected $dates = ['created_at'];
    protected $fillable = [
        "ten_TL",
        "ten_TL_KD",
        "created_at",
        "updated_at",
    ];
}