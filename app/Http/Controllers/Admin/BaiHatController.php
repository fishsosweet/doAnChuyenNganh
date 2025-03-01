<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BaiHatController extends Controller
{
    public function themBaiHat()
    {
        return view('Admin.Songs.thembaihat',[
            'title'=>'Thêm bài hát'
        ]);
    }
}
