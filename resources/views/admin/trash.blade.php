@extends('layouts.admin.master')

@section('title', 'Trash -Elearning')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">  Trash  <i class="fas fa-trash"></i> </h1>
        <a href="{{ url('admin/categories') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i></a>
    </div>
    <div class="container">          
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
        <div class="row">
            <div class="col-md-12">
                <div class="p-3 card shadow rounded">
                    <table id="categoryTable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Deleted_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach ($categories as $category)
                                <td>{{ $category->title }}</td>
                                <td><img src="{{ asset('uploads/category/'. $category->image) }}" alt=""
                                        height="32"></td>
                                        <td>{{ $category->deleted_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ url('admin/trash/delete/'. $category->id) }}"onclick="return confirm('Are you sure want to delete this category permanently?')"
                                        class="btn btn-danger"><i class="fas fa-trash"></i>
                                    </a>
                                    <a href="{{ url('admin/trash/restore/' . $category->id) }}"onclick="return confirm('Are you sure want to restore?')" class="btn btn-info"><i
                                            class="fas fa-trash-restore"></i></a>
                                </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('custom_scripts')
    <script>
        new DataTable('#example');
    </script>
@endsection
