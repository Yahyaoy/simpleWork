@extends('layout2')

@section('content')
{{--@section('header')--}}
{{--@endsection--}}
    <!-- Start Header -->

    <!-- End Landing -->
    <!-- Start Articles -->
    <div class="articles" id="articles">
        <h2 class="main-title">Articles</h2>
        <div class="container">
            @foreach($articles as $article)
            <div class="box">
                <div class="content">
                    <h3><a href="/article/{{$article->id}}">{{$article->title}}</a></h3>
                    <p>{{$article->except}}</p>
                </div>
            </div>
            @endforeach
         </div>
     </div>
    <div class="spikes"></div>
    <!-- End Articles -->

@endsection
