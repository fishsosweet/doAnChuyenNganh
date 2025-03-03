<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class NgheSiRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'tennghesi'=>"required",
            'ngaysinh'=>"required",
            'gioitinh'=>"required",
            'quoctich'=>"required",
            'anh'=>"required",
        ];
    }
    public function messages()
    {
        return [
            "tennghesi.required" => "Vui lòng nhập tên nghệ sĩ",
            "ngaysinh.required" => "Vui lòng nhập ngày sinh",
            "gioitinh.required" => "Vui lòng nhập giới  tính",
            "quoctich.required" => "Vui lòng nhập quốc tịch",
            "anh.required" => "Vui lòng nhập ảnh",
        ];
    }
    public function authorize(): bool
    {
        return true;
    }
}
