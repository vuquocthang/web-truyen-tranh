@extends('admin.base')

@section('title')
    Admin - Thêm
@endsection



@section('main')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" action="{{ url('admin/group-admin/them') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('username') ? 'item bad' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" value="{{ old('username') }}" name="username" required="required" class="form-control col-md-7 col-xs-12">
                                </div>

                                <div class="alert">{{ $errors->first('username') }}</div>
                            </div>

                            <div class="form-group {{ $errors->has('password') ? 'item bad' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="first-name" name="password" required="required" class="form-control col-md-7 col-xs-12">
                                </div>

                                <div class="alert">{{ $errors->first('password') }}</div>
                            </div>

                            <div class="form-group {{ $errors->has('confirm_password') ? 'item bad' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nhập lại password <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="first-name" name="confirm_password" required="required" class="form-control col-md-7 col-xs-12">
                                </div>

                                <div class="alert">{{ $errors->first('confirm_password') }}</div>

                            </div>









                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                    <button type="submit" class="btn btn-success">Thêm</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ url('public/admin/gentelella') }}/vendors/validator/validator.js"></script>
@endsection



