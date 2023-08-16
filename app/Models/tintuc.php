<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;

    protected $table = 'tin_tuc';
    protected $primarykey = 'id';
    protected $dates = ['created_at'];
    protected $fillable = [
        "tieu_de",
        "tieu_de_kd",
        "tom_tat",
        "noi_dung",
        "hinh_anh",
        "tac_gia",
        "tags",
        "luot_xem",
        "id_LT",
        "created_at",
        "updated_at",
    ];
}