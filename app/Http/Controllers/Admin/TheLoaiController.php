<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Request\TheLoaiRequest;
use App\Http\Service\TheLoai\TheLoaiServiecController;
use Illuminate\Http\Request;

class TheLoaiController extends Controller
{
    protected $theLoaiService;
    public function __construct(TheLoaiServiecController $theLoaiService)
    {
        $this->theLoaiService = $theLoaiService;
    }
    public function themTheLoai()
    {
        return view('Admin.Genres.themtheloai',[
            'title' => 'Thêm thể loại'
        ]);
    }

    public function Post(TheLoaiRequest $request)
    {
        $this->theLoaiService->postTheLoai($request);
        return redirect()->back();
    }
}
