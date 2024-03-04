@extends('layouts.client.master')

@section('content')
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        
      </div>
      <h2>Contact</h2>

      <div class="row" data-aos="fade-in">

        {{-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch"> --}}
          <form method="POST" action="{{ route('register') }}" role="form" >
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" name="name"  placeholder="Enter Your Name" class="form-control" id="name" required>
                @error('name')
                <small class="text-danger">
                  {{ $message }}
                </small>
                @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="name">{{ __('Email Address') }}</label>
                <input type="email" input id="email" class="form-control" name="email" placeholder="Enter Your Email" id="email" required>
                  @error('email')
                  <small class="text-danger">
                    {{ $message }}
                  </small>
                  @enderror
              </div>              
            </div>
            <div class="form-group">
              <label for="name">{{ __('Password') }}</label>
              <input type="password" input id="password" class="form-control" name="password" placeholder="Enter Your password" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">{{ __('Confirm Password') }}</label>
              <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Your password" id="subject" required>
            </div>
            <div class="text-center"> <button type="submit" class="btn btn-primary">
              {{ __('Register') }}
          </button></div>
          </form>
        </div>

      </div>

    </div>
  </section>      
  @endsection
