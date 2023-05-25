@extends('admin.layout.side-bar')
@section('title', 'Chỉnh sửa Thông tin ')
@section('content')
    <style>
        #image_show {
            width: 100px;
            height: 100px;
            border: 2px solid tan;


        }
    </style>
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Thêm bài viết
            </div>
            @if (session('success'))
                <div class="alert alert-success w-50" id="notification">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('personal.update', $personal->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên - biệt danh</label>
                        <input class="form-control w-50" type="text" name="name" id="name"
                            value="{{ $personal->name }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Tên ảnh</label>
                        <input class="form-control w-50" type="text" name="slug" id="slug"
                            value="{{ $personal->slug }}">
                        @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="desc">Nội dung giới thiệu</label>
                        <textarea name="desc" class="form-control" id="desc" cols="30" rows="5">{{ $personal->desc }}</textarea>
                        @error('desc')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group ">

                        <label for="file">Upload ảnh</label>
                        <input type="file" name="file" id="file" class="form-control w-25">
                        @error('file')
                            <p class="text-danger"> {{ $message }}</p>
                        @enderror

                        <div class="mt-3">
                            <img class="" id="image_show" src="{{ url($personal->images) }}" alt="hiển thị ảnh">
                        </div>

                    </div>
                    <div class="form-group">
                        @if ($personal->status == 1)
                            <label for="">Trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                    value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Công khai
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                    value="2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Chờ duyệt
                                </label>
                            </div>
                        @else
                            <label for="">Trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                    value="1" >
                                <label class="form-check-label" for="exampleRadios1">
                                    Công khai
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                    value="2" checked>
                                <label class="form-check-label" for="exampleRadios2">
                                    Chờ duyệt
                                </label>
                            </div>
                        @endif

                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        $(document).ready(function() {
            $('#file').change(function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                    var imageSrc = e.target.result;
                    $('#image_show').attr('src', imageSrc);
                };
                reader.readAsDataURL(file);
            });
        });
    </script>
    <script>
        $('input#name').keyup(function(event) {
            var title, slug;
            //Lấy text từ thẻ input title 
            title = $(this).val();

            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấus
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
                '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”

            $('input#slug').val(slug)
        })
    </script>
@endsection
