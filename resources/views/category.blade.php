@extends('base')

@section('top-hot')

@endsection


@section('left')
    <div class="col-md-8">
        <h2 class="org-title">Thể loại: {{ $category->ten }}</h2>
        <div class="comic-list-page">
            <table class="comic-list-table table table-striped">
                <thead>
                <tr>
                    <th style="width: 10%;">#</th>
                    <th style="width: 45%;">Tên truyện</th>
                    <th style="width: 25%;">Mới nhất</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Story::where('the_loai_id' , $category->id)->get() as $key => $value  )
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><a href="{{ url('truyen/' . $value->slug . '.html' ) }}"> {{ $value->ten }} </a></td>
                    <td><a href="{{ url('truyen/' . $value->slug . '/' . \App\Chapter::where('truyen_id', $value->id)->orderBy('ngay_them', "DESC")->first()->slug . '.html' ) }}">
                            {{ \App\Chapter::where('truyen_id', $value->id)->orderBy('ngay_them', "DESC")->first()->ten }}
                        </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection


@section('right')
    @parent
@endsection