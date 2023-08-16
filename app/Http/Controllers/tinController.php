<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\tintuc;
use App\Models\loaitinModel;
use App\Models\theloai;
use App\Models\binhluanModel;
use App\Http\Requests\admin\checkRequests;

class tinController extends Controller
{
    public function index()
    {
        $theloai = theloai::all();
        $loaitin = loaitinModel::all();
        $tintuc = tintuc::where('id', '>', 1)->limit(7)->get();
        $tintuc_max = tintuc::where('id', '>', 1)->limit(4)->max('id');
        $tintuc_1 = tintuc::find(1);
        $tintuc_bn = tintuc::where('id_LT', '>', 24)->get();
        // var_dump($tintuc_max);
        return view(
            'index',
            [
                'tintuc' => $tintuc,
                'loaitin' => $loaitin,
                'tintuc_1' => $tintuc_1,
                'tintuc_bn' => $tintuc_bn,
            ]
        );
    }

    public function loaitin($id)
    {
        $tintuc = tintuc::where('id_LT', $id)->get();
        $tintuc_1 = tintuc::where('id_LT', $id)->first();
        $loaitin = loaitinModel::all();
        // var_dump($tintuc);
        return view(
            'loaitin',
            [
                'tintuc' => $tintuc,
                'loaitin' => $loaitin,
                'tintuc_1' => $tintuc_1
            ]
        );
    }

    public function cttin($id)
    {
        $tintuc = tintuc::where('id', $id)->first();
        $loaitin = loaitinModel::all();
        return view(
            'chitiettin',
            [
                'tintuc' => $tintuc,
                'loaitin' => $loaitin
            ]
        );
    }

// public function them_bl(checkRequests $request)
// {
//     $t = new binhluanModel;
//     $t->id_user = $_POST['id_user'];
//     $t->id_TT = $_POST['id_TT'];
//     $t->noi_dung = $_POST['noi_dung'];
//     $t->created_at = date("Y-m-d h:i:s");
//     $t->updated_at = date("Y-m-d h:i:s");

//     $t->save();
//     return redirect($request);
// }

}