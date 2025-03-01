@extends('admin.Home.main')

@section('content')
    <h1 class="mb-4">{{$title}}</h1>

    <!-- Thống kê nhanh -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-center p-4">
                <div class="card-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h5 class="card-title">Tổng người dùng</h5>
                <p class="card-text">1,234</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-4">
                <div class="card-icon">
                    <i class="fas fa-music"></i>
                </div>
                <h5 class="card-title">Tổng bài hát</h5>
                <p class="card-text">567</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-4">
                <div class="card-icon">
                    <i class="fas fa-headphones"></i>
                </div>
                <h5 class="card-title">Lượt nghe</h5>
                <p class="card-text">89,012</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center p-4">
                <div class="card-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h5 class="card-title">Doanh thu</h5>
                <p class="card-text">$12,345</p>
            </div>
        </div>
    </div>

    <!-- Bảng dữ liệu -->
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <h5 class="card-title mb-4">Danh sách bài hát mới nhất</h5>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên bài hát</th>
                        <th>Nghệ sĩ</th>
                        <th>Lượt nghe</th>
                        <th>Ngày đăng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bài hát 1</td>
                        <td>Nghệ sĩ A</td>
                        <td>1,234</td>
                        <td>2023-10-01</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bài hát 2</td>
                        <td>Nghệ sĩ B</td>
                        <td>987</td>
                        <td>2023-10-02</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bài hát 3</td>
                        <td>Nghệ sĩ C</td>
                        <td>567</td>
                        <td>2023-10-03</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
