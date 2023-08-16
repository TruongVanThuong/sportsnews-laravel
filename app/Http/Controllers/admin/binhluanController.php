<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\loaitinModel;
use App\Models\theloai;
use App\Models\binhluanModel;
use App\Models\tintuc;
use App\Http\Requests\admin\checkRequests;

class binhluanController extends Controller
{
    public function index()
    {
        $data_bl = binhluanModel::all();
        return view('admin/binhluan', ['data_bl' => $data_bl]);
    }



    public function xoa($id)
    {
        $t = binhluanModel::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->delete();
        return redirect('admin/binhluan');
    }

}