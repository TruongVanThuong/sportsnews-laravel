<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\tintuc;
use App\Models\loaitinModel;
use App\Http\Requests\admin\checkRequests;
use Illuminate\Support\Facades\Auth;

class TinTucController extends Controller
{
    public function them_tt()
    {
        $tintuc = tintuc::all();
        return view('admin/tintuc', ['tintuc' => $tintuc]);
    }

    public function them_tt_()
    {
        $t = new tintuc;
        $t->tieu_de = $_POST['tieu_de'];
        $t->tieu_de_kd = Str::slug($t->tieu_de);
        $t->id_LT = $_POST['id_LT'];
        $t->tac_gia = $_POST['tac_gia'];
        $t->tags = $_POST['tags'];
        $t->luot_xem = $_POST['luot_xem'];
        //
        $t->hinh_anh = $_FILES["hinh_anh"]["name"];
        $link = "{{asset('img/news')}}/";
        move_uploaded_file($_FILES["hinh_anh"]["name"], $link . $t->hinh_anh);
        //
        $t->tom_tat = $_POST['tom_tat'];
        $t->noi_dung = $_POST['noi_dung'];

        $t->save();
        // return redirect('admin/tintuc');
        return "oke";
    }

    public function xoa($id)
    {
        $t = tintuc::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->delete();
        return redirect('admin/theloai');
    }

    public function capnhat_tt($id)
    {
        $data_cn = tintuc::find($id);
        $data_lt = loaitinModel::all();
        if ($data_cn == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        return view('admin/tintuc_capnhat', ['data_cn' => $data_cn, 'data_lt' => $data_lt]);
    }

    public function capnhat_tt_($id)
    {
        $t = tintuc::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->tieu_de = $_POST['tieu_de'];
        $t->tieu_de_kd = Str::slug($t->tieu_de);
        $t->id_LT = $_POST['id_LT'];
        $t->tac_gia = $_POST['tac_gia'];
        $t->tags = $_POST['tags'];
        $t->luot_xem = $_POST['luot_xem'];
        //
        $t->hinh_anh = $_FILES["hinh_anh"]["name"];
        $link = "{{asset('img/news')}}/";
        move_uploaded_file($_FILES["hinh_anh"]["name"], $link . $t->hinh_anh);
        //
        $t->tom_tat = $_POST['tom_tat'];
        $t->noi_dung = $_POST['noi_dung'];

        $t->save();
        return redirect('admin/tintuc');
    }
}