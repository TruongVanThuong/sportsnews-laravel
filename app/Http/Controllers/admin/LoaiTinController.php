<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\loaitinModel;
use App\Models\theloai;
use App\Http\Requests\admin\checkRequests;

class LoaiTinController extends Controller
{
    public function index()
    {
        $data_lt = loaitinModel::all();
        $data_tl = theloai::all();
        return view('admin/loaitin', ['data_lt' => $data_lt, 'data_tl' => $data_tl]);
    }

    public function them_lt()
    {
        $t = new loaitinModel;
        $t->id_TL = $_POST['id_TL'];
        $t->ten_LT = $_POST['ten_LT'];
        $t->ten_LT_KD = Str::slug($t->ten_LT);
        $t->created_at = date("Y-m-d h:i:s");
        $t->updated_at = date("Y-m-d h:i:s");

        $t->save();
        return redirect('admin/loaitin');
    }

    public function xoa($id)
    {
        $t = loaitinModel::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->delete();
        return redirect('admin/loaitin');
    }

    public function capnhat_lt($id)
    {
        $data_cn = loaitinModel::find($id);
        $data_tl = theloai::all();
        if ($data_cn == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        return view('admin/loaitin_capnhat', ['data_cn' => $data_cn, 'data_tl' => $data_tl]);
    }

    public function capnhat_lt_($id)
    {
        $t = loaitinModel::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->id_TL = $_POST['id_TL'];
        $t->ten_LT = $_POST['ten_LT'];
        $t->ten_LT_KD = Str::slug($t->ten_LT);
        $t->created_at = date("Y-m-d h:i:s");
        $t->save();
        return redirect('admin/loaitin');
    }
}