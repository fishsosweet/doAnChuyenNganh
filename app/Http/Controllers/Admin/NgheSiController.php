<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Request\NgheSiRequest;
use App\Http\Service\NgheSi\NgheSiServiceController;

class NgheSiController extends Controller
{
    protected $NgheSiService;

    public function __construct(NgheSiServiceController $NgheSiService)
    {
        $this->NgheSiService = $NgheSiService;
    }
    public function themNgheSi()
    {
            return view('admin.Singers.themnghesi',[
            'title' =>'Thêm nghệ sĩ'
        ]);
    }

    public function Post(NgheSiRequest $request)
    {
        $this->NgheSiService->postNgheSi($request);
        return redirect()->back();
    }
}
