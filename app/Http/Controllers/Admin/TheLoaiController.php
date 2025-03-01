<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TheLoaiController extends Controller
{
    public function themTheLoai()
    {
        return view('Admin.Genres.themtheloai',[
            'title' => 'Thêm thể loại'
        ]);
    }
}
