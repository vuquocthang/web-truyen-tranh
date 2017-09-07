@extends('admin.base')

@section('title')
    Quảng Cáo - Sửa
@endsection

@section('css')

    <link rel="stylesheet" href="{{ url('public/admin/gentelella') }}/vendors/dropify/dist/css/dropify.min.css">

@endsection

@section('main')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Sửa</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" action="{{ url('admin/quang-cao/sua') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ảnh <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <input required="required" type="file" name="image_link" id="input-file-now" class="form-control col-md-7 col-xs-12 dropify" data-default-file="{{ url('public/image/' . \App\Ads::findOrFail(1)->image_link ) }}"/>
                                </div>
                            </div>



                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                    <button type="submit" class="btn btn-success">Sửa</button>
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
    <script src="{{ url('public/admin/gentelella') }}/vendors/dropify/dist/js/dropify.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.dropify').dropify({
                messages: {
                    'default': 'Upload Ảnh',
                    'replace': 'Chọn Ảnh Khác',
                    'remove':  'Xóa',
                    'error':   'Có Lỗi Xảy Ra!'
                }
            });

        });
    </script>
@endsection

