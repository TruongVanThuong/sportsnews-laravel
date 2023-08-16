<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Requests\admin\checkRequests;
use Nette\Utils\Random;

class userController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin/user', ['data' => $data]);
    }

    public function them_user()
    {
        $t = new User;
        $t->email = $_POST['email'];
        $t->name = $_POST['name'];
        //
        $t->image = $_FILES["image"]["name"];
        $link = "{{asset('img/news')}}/";
        move_uploaded_file($_FILES["image"]["name"], $link . $t->image);
        //
        $t->id_group = $_POST['id_gr'];
        if ($_POST['pass'] != $_POST['pass_']) {
            return '<script type ="text/JavaScript">alert("Nhap lai mat khau khong dung!");</script>';
        } else {
            $t->password = bcrypt($_POST['pass']);
        }
        //  
        $t->remember_token = Str::random(12);
        $t->created_at = date("Y-m-d h:i:s");
        $t->updated_at = date("Y-m-d h:i:s");
        // var_dump($t);
        $t->save();
        return redirect('admin/user');
    }

    public function xoa_user($id)
    {
        $t = User::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->delete();
        return redirect('admin/user');
    }

    public function capnhat_user($id)
    {
        $data_cn = User::find($id);
        if ($data_cn == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        return view('admin/user_capnhat', ['data_cn' => $data_cn]);
    }


    public function capnhat_user_($id)
    {
        $t = User::find($id);
        if ($t == null)
            return '<script type ="text/JavaScript">alert("loi roi!");</script>';
        $t->email = $_POST['email'];
        $t->name = $_POST['name'];
        //
        $t->image = $_FILES["image"]["name"];
        $link = "{{asset('img/news')}}/";
        move_uploaded_file($_FILES["image"]["name"], $link . $t->image);
        //
        $t->id_group = $_POST['id_gr'];
        if ($_POST['pass'] == $_POST['pass_']) {
            $t->password = bcrypt($_POST['pass']);
        } else {
            return '<script type ="text/JavaScript">alert("Nhap lai mat khau khong dung!");</script>';
        }
        //  
        $t->remember_token = Str::random(12);
        $t->created_at = date("Y-m-d h:i:s");
        $t->save();
        if ($t->save()) {
            return '<script type ="text/JavaScript">
            alert("Nhap lai mat khau khong dung!");
            window.location="' . redirect('admin/user') . '";
            </script>';
        }
        // return redirect('admin/user');
    }
}