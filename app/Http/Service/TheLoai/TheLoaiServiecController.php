<?php

namespace App\Http\Service\TheLoai;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Genres;

class TheLoaiServiecController extends Controller
{
    public function postTheLoai($request)
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
            Genres::create([
                'tentheloai'=>$request->tentheloai,
                'anh'=>$pathanh,
                'mota'=> strip_tags($request->mota),
                'active'=>$request->active,
                'create_at'=>'created_at'
            ]);
            Session::flash('success','Thêm thể loại thành công');
        }catch (\Exception $exception){
            Session::flash('error','Thêm thất bại!'.$exception->getMessage());
            return false;
        }
        return true;
    }
}
