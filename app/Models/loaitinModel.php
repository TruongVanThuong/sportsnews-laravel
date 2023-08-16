<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaitinModel extends Model
{
    use HasFactory;

    protected $table = 'loai_tin';
    protected $primarykey = 'id';
    protected $dates = ['created_at'];
    protected $fillable = [
        "id_TL",
        "ten_LT",
        "ten_LT_KD",
        "created_at",
        "updated_at",
    ];
}