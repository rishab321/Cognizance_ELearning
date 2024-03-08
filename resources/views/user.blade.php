@extends('layouts.client.master')

@section('content')
    <section id="hero">

        <div class="container">
            <div class="row">
                <section id="pricing" class="pricing section-bg">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>ELearning</h2>
                        </div>

                        <div class="row">
                            @php
                                $categories = App\Models\Category::all();
                            @endphp
                            @foreach ($categories as $category)
                                <div class="col-lg-4 col-md-6 col-12">
                                  <div class="card" style="width: 18rem;">
                                    <img src="{{asset('uploads/category/'.$category->image)}}" 
                                    class="card-img-top" alt="...">
                                    <a href="#" class="btn-buy"></a>
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $category->title }}</h5>
                                      <p class="card-text"></p>
                                      <a href="{{url('login')}}" class="btn btn-primary">Buy Now</a>
                                    </div>
                                  </div>
                                  </div>
                            @endforeach

                        </div>

                    </div>
                </section>

    </section>