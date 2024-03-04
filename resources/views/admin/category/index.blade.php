@extends('layouts.admin.master')

@section('title', 'Dasboard-Elearning')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
        <a href="{{ url('admin/category/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Create Category</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif                
                @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{session('error')}}
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
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                    <td>{{ $category->title }}</td>
                                    <td><img src="{{asset('uploads/category/'.$category->image )}}" alt="" height="32"></td>
                                    <td>{{ $category->created_at->format('d/m/Y') }}</td>
                                    <td>
                                    <a href="{{url('admin/category/delete/'.$category->id )}}"onclick="return confirm('Are you sure want to delete this category?')" 
                                        class="btn btn-danger"><i class="fas fa-trash"></i>
                                    </a>
                                        <a href="{{url('admin/category/edit/'.$category->id)}}" class="btn btn-info"><i class="fas fa-pen"></i></a>
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
