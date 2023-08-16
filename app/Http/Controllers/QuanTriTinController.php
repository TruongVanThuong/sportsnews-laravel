<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuanTriTinController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth');
    }
    function index()
    {
        echo "<h1>DANH SÁCH TIN</h1>";
    }
}