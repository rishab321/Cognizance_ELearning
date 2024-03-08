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
                                $featured_categories = App\Models\FeaturedCategory::all();
                                //   dd($featured_categories[0]->category);
                                // die;
                            @endphp

                            @foreach ($featured_categories as $fcat)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('uploads/category/'. $fcat->category->image) }}" class="card-img-top" alt="..."> 

                                        <a href="#" class="btn-buy"></a>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $fcat->category->title }}</h5>
                                            <p class="card-text"></p>
                                            <a href="{{ url('/category/'.$fcat->category->slug) }}" class="btn btn-primary">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endsection
