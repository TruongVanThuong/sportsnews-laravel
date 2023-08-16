<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\theloai;
use App\Http\Requests\admin\checkRequests;

class TheLoaiController extends Controller
{
    public function index()
    {
        $data = theloai::all();
        return view('admin/theloai', ['data' => $data]);
    }

    public function them_tl()
    {
        $t = new theloai;
        $t->ten_TL = $_POST['ten_TL'];
        $t->ten_TL_KD = Str::slug($t->ten_TL);
        $t->created_at = date("Y-m-d h:i:s");
        $t->updated_at = date("Y-m-d h:i:s");
        var_dump($t);
        $t->save();

        return redirect('admin/theloai');
    }

    public function xoa($id)
    {
        $t = theloai::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->delete();
        return redirect('admin/theloai');
    }

    public function capnhat_tl($id)
    {
        $data_cn = theloai::find($id);
        if ($data_cn == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        return view('admin/theloai_capnhat', ['data_cn' => $data_cn]);
    }

    public function capnhat_tl_($id)
    {
        $t = theloai::find($id);
        var_dump($t->ten_TL);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->ten_TL = $_POST['ten_TL'];
        $t->ten_TL_KD = Str::slug($t->ten_TL);
        $t->created_at = date("Y-m-d h:i:s");
        $t->save();
        return redirect('admin/theloai');
    }
}