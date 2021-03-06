@extends('admin.base')

@section('title')
    Admin - Danh Sách
@endsection

@section('main')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Danh Sách Admin</h2>

                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>Username</th>
                                <th>Password</th>
                                <th>Hành Động</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Admin::all() as $item)
                                <tr>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->password }}</td>

                                    <td>
                                        <a class="btn btn-danger" href="{{ url('admin/group-admin/xoa/' . $item->id ) }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
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