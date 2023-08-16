<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluanModel extends Model
{
    use HasFactory;

    protected $table = 'binh_luan';
    protected $primarykey = 'id';
    protected $dates = ['created_at'];
    protected $fillable = [
        "id_user",
        "id_TT",
        "noi_dung",
        "created_at",
        "updated_at",
    ];
}