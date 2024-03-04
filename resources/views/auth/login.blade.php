@extends('layouts.client.master')

@section('content')
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">

            </div>
            <h2>Login</h2>

            <div class="row" data-aos="fade-in">

                {{-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch"> --}}
                <form method="POST" action="{{ route('login') }}" role="form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="name">{{ __('Email Address') }}</label>
                            <input type="email" input id="email" class="form-control" name="email"
                                placeholder="Enter Your Email" id="email" required>
                            @error('email')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name">{{ __('Password') }}</label>
                        <input type="password" input id="password" class="form-control" name="password"
                            placeholder="Enter Your password" id="subject" required>
                    </div>
                    <div class="text-center"> <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button></div>
                </form>
            </div>

        </div>

        </div>
    </section>
@endsection
