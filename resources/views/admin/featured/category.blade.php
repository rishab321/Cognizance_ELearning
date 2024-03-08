@extends('layouts.admin.master')

@section('title', 'Dasboard-Elearning')

@section('content')

    <div class="container py-3">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                      <form action="{{url('/admin/featured/categories/store')}}" method="post" class="d-flex">
                        @csrf
                        <select name="category_id" class="form-control me-3">
                            @foreach ($categories as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>

@endsection
