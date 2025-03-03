<?php

namespace App\Http\Service\NgheSi;

use App\Http\Controllers\Controller;
use App\Models\Singers;
use Illuminate\Support\Facades\Session;

class NgheSiServiceController extends Controller
{
    public function postNgheSi($request)
    {
        try {
            $pathanh='';
            if($request->hasFile('anh') && $request->file('anh')->isValid()){
                $nameimage = $request->file('anh')->getClientOriginalName();
                $path='uploads/'.date("Y/m/d");
                $request->file('anh')->storeAs('public/'.$path,$nameimage);
                $pathanh=$path.'/'.$nameimage;
            }
            else{
                Session::flash('error','Thêm thất bại!');
            }
            Singers::create([
                'tennghesi' => $request->tennghesi,
                'mota' => $request->mota,
                'ngaysinh' => $request->ngaysinh,
                'gioitinh' => $request->gioitinh,
                'quoctich' => $request->quoctich,
                'anh' => $pathanh,
                'create_at'=>$request->create_at
            ]);
            Session::flash('success','Thêm nghệ sĩ thành công');
        }catch (\Exception $exception){
            Session::flash('error','Thêm thất bại!'.$exception->getMessage());
            return false;
        }
        return true;
    }
}
