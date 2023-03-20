@extends('layout2')

@section('content')
    <!-- Start Features -->
    <div class="features" id="features">
        <h2 class="main-title">Features</h2>
        <div class="container">
                <div class="box quality">
                <h2 style="padding-top: 20px">{{$articles->title}}</h2>
                <p>{{$articles->body}}</p>
            </div>
        </div>
    </div>
    <!-- End Features -->
@endsection
