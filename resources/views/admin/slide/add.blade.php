@extends('admin.base')

@section('title')
    Slide - Thêm
@endsection

@section('css')
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
                        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" action="{{ url('admin/slide/them') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Chọn Truyện Và Chương <span class="required">*</span>
                                </label>



                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_group form-control" name="value">
                                        @foreach(\App\Story::where('status','!=', -1 )->get() as $item)
                                        <optgroup label="{{ $item->ten }}">
                                            @foreach(\App\Chapter::where('truyen_id', $item->id)->where('status', '!=', -1)->get() as $chapter)
                                            <option value="{{ $item->id . '-' . $chapter->id }}">{{ $chapter->ten }}</option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>
                                </div>
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
@endsection

