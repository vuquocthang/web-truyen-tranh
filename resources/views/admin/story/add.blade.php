@extends('admin.base')

@section('title')
Truyện - Thêm
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
            <h2>Thêm</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" action="{{ url('admin/truyen/them') }}" method="post" enctype="multipart/form-data">

              {{ csrf_field() }}

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ten" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Thể Loại <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="the_loai_id">
                    @foreach(DB::table('the_loai')->where('status','!=', -1)->get() as $item)
                      <option value="{{ $item->id }}">{{ $item->ten }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Thể Loại <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12" >







                      <div class="mutliSelect">
                        <ul>
                          @foreach(\App\Category::where('status', '!=' ,-1)->get() as $item)
                          <li>
                            <input type="checkbox" name="the_loai_ids[]" value="{{ $item->id }}"  > {{ $item->ten }}
                          </li>
                          @endforeach

                        </ul>
                      </div>



                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên Khác <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ten_khac" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nhóm Dịch <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="nhom_dich" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tình Trạng <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="tinh_trang"  class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nguồn <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="nguon" class="form-control col-md-7 col-xs-12">
                </div>
              </div>



              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ảnh <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12" >
                  <input type="file" name="image_link" required="required" id="input-file-now" class="form-control col-md-7 col-xs-12 dropify" />
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

  <script>
      $(".dropdown dt a").on('click', function() {
          $(".dropdown dd ul").slideToggle('fast');
      });

      $(".dropdown dd ul li a").on('click', function() {
          $(".dropdown dd ul").hide();
      });

      function getSelectedValue(id) {
          return $("#" + id).find("dt a span.value").html();
      }

      $(document).bind('click', function(e) {
          var $clicked = $(e.target);
          if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
      });

      $('.mutliSelect input[type="checkbox"]').on('click', function() {

          var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
              title = $(this).val() + ",";

          if ($(this).is(':checked')) {
              var html = '<span title="' + title + '">' + title + '</span>';
              $('.multiSel').append(html);
              $(".hida").hide();
          } else {
              $('span[title="' + title + '"]').remove();
              var ret = $(".hida");
              $('.dropdown dt a').append(ret);

          }
      });
  </script>
@endsection

