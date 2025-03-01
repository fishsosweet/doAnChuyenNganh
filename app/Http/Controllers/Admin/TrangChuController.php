<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TrangChuController extends Controller
{
    public function trangChuAdmin()
    {
        return view('admin.Home.trangchu',[
            'title' => 'Trang chủ '
        ]);
    }
}
