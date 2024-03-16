@extends('layouts.client.master')

@section('title', $category->title . ' - ELearning')   
{{-- <h1>Category page</h1> --}}

@section('content') 
    <div  class="container">
        <div style="margin-top: 80px" class="row">
            <div class="form-group col-md-12">
                    <form action="{{ url('/search') }}" method="post"
                        class="d-flex align-items-center bg-white rounded p-2 shadow-sm">
                        @csrf
                        <input type="text" name="title" class="form-control me-3" placeholder="Search a course...">
                        <label for="">Free</label>
                        <input type="checkbox" name="free" class="me-3">
                        <label for="">Paid</label>
                        <input type="checkbox" name="paid" class="me-3">
                        <button class="btn btn-primary">Search</button>
                    </form>
                </div>
                {{-- <div class="col-md-12"> --}}
                @foreach ($courses as $fcat)
                    <div class="col-lg-4 col-md-6 col-12">
                    <div class="card" style="width: 18rem; ">
                        <img src="{{ asset('uploads/course/' . $fcat->image) }}" class="card-img-top" alt="...">
                        <a href="#" class="btn-buy"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $fcat->title }}</h5>
                            <p class="card-text"></p>
                            <a href="{{ url('/category/'.$fcat->category->slug.'/'. $fcat->slug ) }}" class="btn btn-primary">Buy Now</a>
                             {{-- @php
                            dd($category->courses()); 
                            die;
                            @endphp  --}}
                        </div>
                    </div>
                </div>
            @endforeach
         </div>
     </div>
  </div>
</div>
    
@endsection
