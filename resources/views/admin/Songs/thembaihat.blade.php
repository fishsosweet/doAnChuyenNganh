@extends('admin.Home.main')
@section('content')
    <div class="content" style="position: relative;left:-220px">
        <h1 class="mb-4">{{$title}}</h1>

        <!-- Form thêm bài hát -->
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf <!-- Bảo vệ form khỏi CSRF attacks -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="ten_bai_hat" class="form-label">Tên bài hát</label>
                        <input type="text" class="form-control" id="tenbaihat" name="tenbaihat">
                    </div>
                    <div class="mb-3">
                        <label for="nghe_si" class="form-label">Nghệ sĩ</label>
                        <input type="text" class="form-control" id="nghesi" name="nghesi" >
                    </div>
                    <div class="mb-3">
                        <label for="the_loai" class="form-label">Thể loại</label>
                        <select class="form-select" id="theloai" name="theloai" >
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Hip-Hop">Hip-Hop</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kích Hoạt</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                            <label for="active" class="custom-control-label">Có</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                            <label for="no_active" class="custom-control-label">Không</label>
                        </div>
                        <div class="mb-3" style="position: relative;top: 10px">
                            <label for="created_at" class="form-label">Ngày tạo</label>
                            <input type="datetime-local" class="form-control" name="created_at" id="created_at">
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="position: relative;left: 60px">
                    <div class="mb-3">
                        <label for="anh_bia" class="form-label">Ảnh bìa</label>
                        <input type="file" class="form-control" id="anh" name="anh" accept="image/*">
                        <div id="image_show">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="file_nhac" class="form-label">File nhạc</label>
                        <input type="file" class="form-control" id="filenhac" name="filenhac" accept="audio/*">
                    </div>
                    <div class="mb-3">
                        <label for="mo_ta" class="form-label">Mô tả</label>

                        <textarea class="form-control" name="mota" id="mota" rows="3" placeholder="Enter content"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px">Thêm bài hát</button>
        </form>



    </div>
@endsection
