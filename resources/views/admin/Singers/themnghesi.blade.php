@extends('admin.Home.main')
@section('content')
    <div class="content" style="position: relative;left:-220px">
        <h1 class="mb-4">{{$title}}</h1>

        <!-- Form thêm bài hát -->
        <form action="{{route('postNgheSi')}}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Bảo vệ form khỏi CSRF attacks -->
            <div class="row">
                <div class="col-md-6">

                    <div class="mb-3">
                        <label for="nghe_si" class="form-label">Nghệ sĩ</label>
                        <input type="text" class="form-control" id="tennghesi" name="tennghesi" >
                    </div>
                    <div class="mb-3">
                        <label for="ngaysinh" class="form-label">Ngày sinh</label>
                        <input type="datetime-local" class="form-control" name="ngaysinh" id="ngaysinh">
                    </div>
                    <div class="mb-3">
                        <label for="gioitinh" class="form-label">Giới tính</label>
                        <select class="form-select" id="gioitinh" name="gioitinh" >
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="mb-3">

                        <div class="mb-3" style="position: relative;top: 10px">
                            <label for="created_at" class="form-label">Ngày tạo</label>
                            <input type="datetime-local" class="form-control" name="created_at" id="created_at">
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="position: relative;left: 60px">
                    <div class="mb-3">
                        <label for="anh" class="form-label">Ảnh</label>
                        <input type="file" class="form-control" id="anh" name="anh" accept="image/*">
                        <div id="image_show">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="quoctich" class="form-label">Quốc tịch</label>
                        <input type="text" class="form-control" id="quoctich" name="quoctich" >
                    </div>
                    <div class="mb-3">
                        <label for="mo_ta" class="form-label">Mô tả</label>

                        <textarea class="form-control" name="mota" id="mota" rows="3" placeholder="Enter content"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px">Thêm nghệ sĩ</button>
        </form>



    </div>
@endsection
