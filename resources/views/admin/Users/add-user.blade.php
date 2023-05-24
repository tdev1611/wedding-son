@extends('admin.layout.side-bar')
@section('title', 'Thêm thành viên')

@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm thành viên
            </div>
            @if (session('success'))
                <div class="alert alert-success w-50" id="notification"  >
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input class="form-control" type="text" name="name" id="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class=" text-danger "> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class=" text-danger "> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input class="form-control" type="password" name="password" id="password"
                            value="{{ old('password') }}">
                        @error('password')
                            <div class=" text-danger "> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <p> <b>Quyền truy cập</b></p>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="access" id="access1" value="1">
                            <label class="form-check-label" for="access1">
                                admin-- manager
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="access" id="access2" value="2">
                            <label class="form-check-label" for="access2">
                                Khách hàng
                            </label>
                        </div>
                        @error('access')
                            <div class=" text-danger "> {{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
  
     
@endsection
