@extends('admin.layout.side-bar')
@section('title', 'danh sách thông tin')

@section('content')
<style>
    img {
        height: 100px;
        width: 100px;
    }
</style>
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold d-flex justify-content-between align-items-center w-100">
                <h5 class="m-0 ">Danh sách thông tin</h5>
               
            </div>
            <div class="ml-3">
                @if (session('success'))
                    <div id="notification" class='alert alert-success w-25'>
                        {{ session('success') }}
                    </div>
                @endif
                {{-- ---required    --}}

                @if (session('required'))
                    <span class="text-danger"> {{ session('required') }}</span>
                @endif
            </div>
            <div class="card-body">

                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>

                            <th scope="col">Tên-biệt danh</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">giới thiệu</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>


                        @if ($personal->count() > 0)
                            @forelse ($personal as $user)
                                <tr>

                                   
                                    <td>{{ $user->name }}</td>
                                    <td><img src="{{ url($user->images) }}" alt=""></td>
                                    <td>{{ $user->desc }}</td>
                                    <td>{{ $user->status == 1 ? 'Hiển thị' : 'Ẩn' }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td class="d-flex " style="margin-top: 31px;">
                                        <a href="{{ route('personal.edit', $user->id) }}"
                                            class="btn btn-success btn-sm rounded-0 text-white mr-2" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa fa-edit"></i></a>
                                        <a onclick=" return confirm('Bạn muốn xóa thông tin?')"
                                            href="{{ route('personal.delete', $user->id) }}"
                                            class="btn btn-danger btn-sm rounded-0 text-white" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"
                                                id="trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <p>No users</p>
                            @endforelse
                        @else
                            <td colspan="6">Không có thành viên nào !</td>
                        @endif

                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{ $personal->appends(request()->all())->links() }}


                    </ul>
                </nav>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script></script>
@endsection
