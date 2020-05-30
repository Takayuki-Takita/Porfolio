@extends('layouts.front')

@section('title', 'Profileの一覧')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        
        <div class="row">
            <div class="posts col-md-10 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-2">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($post->name, 150) }}
                                </div>
                                <div class="bogenderdy mt-3">
                                    {{ str_limit($post->gender, 1500) }}
                                </div>
                                <div class="hobby mt-3">
                                    {{ str_limit($post->hobby, 1500) }}
                                </div>
                                <div class="introduction mt-3">
                                    {{ str_limit($post->introduction, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-4 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    
@endsection
