@extends('layouts.admin')
@section('title', 'ニュースの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース新規作成</h2>
                <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">位置情報</label>
                        <div class="col-md-4">緯度
                            <input type="text" class="form-control" name="latitude" value="{{ old('latitude') }}">
                        </div>
                        
                        <div class="col-md-4">経度
                            <input type="text" class="form-control" name="longitude" value="{{ old('longitude') }}">
                        </div>

                    </div>
                    
                    <?php // 09/03　場所の種類（カテゴリー）追加?>
                     <div class="form-group row">
                        <label class="col-md-2">カテゴリー</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="category" value="{{ old('category') }}">
                        </div>
                    </div>
                    
                    
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection