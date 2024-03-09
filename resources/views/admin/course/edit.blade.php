@extends('layouts.admin.master')

@section('title', 'Courses-Elearning')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Course</h1>
        <a href="{{ url('admin/courses') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> View All Course</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('admin/course/update/' . $course->id) }}" method="post" class="card shadow rounded p-3"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="md-3">
                        <label for="">Category Title</label>
                        <input class="form-control" type="text" name="title" value="{{ $course->title }}">
                    </div>
                    <div class="md-3">
                        <label for="">Category Description</label>
                        <input class="form-control" type="text" name="description" value="{{ $course->description }}">
                    </div>
                    <div class="md-3">
                        <label for="">Slug</label>
                        <input class="form-control" type="text" name="slug" value="{{ $course->slug }}">
                    </div>
                    <div class="row md-3">
                        <label for="">Category Thumbnail</label>
                        <div class="col-md-6">
                            <input class="form-control" type="file" name="image" value="{{ $course->image }}">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('uploads/category/' . $course->image) }}" alt="" height="50">
                        </div>
                    </div>

                    <div class="md-3">
                        <label for="">Meta Category Title</label>
                        <input class="form-control" type="text" name="meta_title" value="{{ $course->meta_title }}">
                    </div>
                    <div class="md-3">
                        <label for="">Meta Category Description</label>
                        <input class="form-control" type="text" name="meta_description"
                            value="{{ $course->meta_description }}">
                    </div>
                    <div class="md-3">
                        <label for="">price</label>
                        <input class="form-control" type="text" name="price"
                            value="{{ $course->price }}">
                    </div>
                    <div class="md-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
