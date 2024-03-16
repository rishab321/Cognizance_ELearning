@extends('layouts.client.master')

@section('title', $course->title . ' - ELearning')

@section('content')
<div  class="container pt-5">
    <div class="row py-5">
        <div class="col-md-12">
            <h1>{{$course->title}}</h1>
            <img height="250" src="{{asset('uploads/course/'.$course->image)}}" alt="">
            <p>{{$course->description}}</p>
            <h3 class="text-danger">{{$course->price}}</h3>
            <p>
                <a href="{{url('/')}}" class="btn btn-warning">Subscribe</a>
            </p>
        </div>
     </div>
 </div>
</div>
@endsection
