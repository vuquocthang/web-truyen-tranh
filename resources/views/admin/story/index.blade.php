@extends('admin.base')

@section('title')
Truyện - Danh Sách
@endsection

@section('main')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh Sách Truyện</h2>

                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>Tên</th>
                                <th>Thể Loại</th>
                                <th>Tên Khác</th>
                                <th>Nhóm Dịch</th>
                                <th>Tình Trạng</th>
                                <th>Nguồn</th>
                                <th>Ảnh</th>
                                <th>Hành Động</th>
                                <th>Hành Động</th>
                                <th>Hành Động</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Story::where('status', '!=', -1)->get() as $item)

                                <tr>
                                    <td>{{ $item->ten }}</td>
                                    <td>{{ \App\Category::findOrFail($item->the_loai_id)->ten }}</td>
                                    <td>{{ $item->ten_khac }}</td>
                                    <td>{{ $item->nhom_dich }}</td>
                                    <td>{{ $item->tinh_trang }}</td>
                                    <td>{{ $item->nguon }}</td>
                                    <td>
                                        <img width="150px" src="{{ url('public/image/' . $item->image_link) }}">
                                    </td>
                                    <td><a class="btn btn-info" href="{{ url('admin/truyen/sua/' . $item->id ) }}">Sửa</a></td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('admin/truyen/trang-thai/' . $item->id ) }}">
                                            {{ $item->status == 1 ? "Khóa" : "Mở Khóa" }}
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ url('admin/truyen/xoa/' . $item->id ) }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                                            Xóa
                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                        <!--
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">

                                </div>
                            </div>

                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">

                                    <div class="btn-group">
                                        <button onclick="location.href='http://google.com';" class="btn btn-success" type="button">Trước</button>
                                        <button class="btn btn-success" type="button">5</button>
                                        <button class="btn btn-success" type="button">6</button>
                                        <button class="btn btn-success" type="button">7</button>
                                        <button class="btn btn-success" type="button">Sau</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection