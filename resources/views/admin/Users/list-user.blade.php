@extends('admin.layout.side-bar')
@section('title', 'danh sách thành viên')

@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold d-flex justify-content-between align-items-center w-75">
                <h5 class="m-0 ">Danh sách thành viên</h5>
                <div class="form-search ">
                    {{-- search --}}
                    <form action="" class="d-flex">
                        <input type="search" class="form-control" name="key" value="{{ request()->input('key') }}"
                            placeholder="Tìm tên  hoặc email">
                        <button type="submit" class="btn btn-primary ml-2 ">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
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
                {{-- <div class="analytic">
                    <a href="" class="text-primary"><span class="text-muted">(10)</span></a>
                    <a href="" class="text-primary">Trạng thái 2<span class="text-muted">(5)</span></a>
                </div>
                <div class="form-action form-inline py-3">
                    <select class="form-control mr-1" id="">
                        <option>Chọn</option>
                        <option>Tác vụ 1</option>
                        <option>Tác vụ 2</option>
                    </select>
                    <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
                </div> --}}
                <table class="table table-striped table-checkall">
                    <thead>
                        <tr>
                            {{-- <th>
                                <input type="checkbox" name="checkall">
                            </th> --}}
                            <th scope="col">#</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Quyền</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>


                        @if ($users->count() > 0)
                            @forelse ($users as $user)
                                <tr>
                                    {{-- <td>
                             <input type="checkbox">
                         </td> --}}
                                    <th scope="row">
                                        {{ ($users->currentPage() - 1) * $users->perPage() + $loop->index + 1 }}
                                    </th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->access == 1 ? 'Admin' : 'Khách hàng' }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}"
                                            class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                            data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                class="fa fa-edit"></i></a>
                                        <a onclick=" return confirm('Bạn muốn xóa thành viên?')"
                                            href="{{ route('user.delete', $user->id) }}"
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
                        {{ $users->appends(request()->all())->links() }}


                    </ul>
                </nav>
            </div>
        </div>
    </div>


@endsection

@section('js')
    <script></script>
@endsection
