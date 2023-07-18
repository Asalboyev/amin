@extends('layouts.admin')
@section('title')
Category
@endsection
@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ session('success') }}
            </div>
        </div>
        @endif
        <div class="card-header">
            <h4>Categories table</h4>
            <div class="card-header-form">
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Name(UZ)</th>
                            <th>Slug</th>
                            <th>Images</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{ $category->name_uz }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <img alt="image" src="/site/images/categories/{{$category->images}}" width="35">
                            </td>
                            <td>
                                <img alt="image" src="/site/images/icon/{{$category->icon}}" width="35">
                            </td>
                            <td>
                                <form style="display: inline" action="{{ route('admin.categories.destroy',$category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button href="#" class="btn btn-danger" onclick="return confirm('Ochirishni xohlisizmi?')" type="submit">Delete</button>
                                </form>
                                <a href="{{ route('admin.categories.edit',$category->id) }}" class="btn btn-success">Edit</a>
                                <a href="{{ route('admin.categories.show',$category->id) }}" class="btn btn-warning">Show</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
            </nav>
        </div>
    </div>
</div>
@endsection