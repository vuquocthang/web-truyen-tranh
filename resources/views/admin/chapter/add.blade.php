@extends('admin.base')

@section('title')
Chương - Thêm
@endsection

@section('css')
  <script src="{{ url('public/ckeditor/') }}/ckeditor.js"></script>
  <script src="{{ url('public/ckeditor/') }}/samples/js/sample.js"></script>
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
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" action="{{ url('admin/chuong/them') }}" method="post" enctype="multipart/form-data">

              {{ csrf_field() }}

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ten" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Truyện <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="truyen_id">
                    @foreach(DB::table('truyen')->where('status','!=', -1)->get() as $item)
                      <option value="{{ $item->id }}">{{ $item->ten }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nội Dung<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12" >
                    <textarea id="editor" name="noi_dung"></textarea>
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



  <script>
      var editor = CKEDITOR.replace( 'editor' );

      // The "change" event is fired whenever a change is made in the editor.
      editor.on( 'change', function( evt ) {
          // getData() returns CKEditor's HTML content.
          var data = CKEDITOR.instances.editor.getData();

          console.log( 'Total bytes: ' + data );
      });
  </script>
@endsection

