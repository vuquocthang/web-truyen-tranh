@extends('admin.base')

@section('title')
Chương - Danh Sách
@endsection

@section('main')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh Sách Chương</h2>

                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>Tên</th>
                                <th>Truyện</th>
                                <th>Hành Động</th>
                                <th>Hành Động</th>
                                <th>Hành Động</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Chapter::where('status', '!=', -1 )->get() as $item)
                                <tr>
                                    <td>{{ $item->ten }}</td>
                                    <td>{{ \App\Story::findOrFail($item->truyen_id)->ten }}</td>
                                    <td><a class="btn btn-info" href="{{ url('admin/chuong/sua/' . $item->id ) }}">Sửa</a></td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('admin/chuong/trang-thai/' . $item->id ) }}">
                                            {{ $item->status == 1 ? "Khóa" : "Mở Khóa" }}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ url('admin/chuong/xoa/' . $item->id ) }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                                            Xóa
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection