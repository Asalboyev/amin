@extends('layouts.admin')
@section('title')
Show Category {{ $category->id }}
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
            <h4>category id {{ $category->id }}</h4>
            <div class="card-header-form">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th> ID
                            <td>{{ $category->id }}</td>
                            </th>
                        </tr>

                        <tr>
                            <th>Name (uz)
                            <td>{{ $category->name_uz }}</td>
                            </th>
                        </tr>
                        <tr>
                            <th>Name (ru)
                            <td>{{ $category->name_ru }}</td>
                            </th>
                        </tr>
                        <tr>
                            <th>Name (en)
                            <td>{{ $category->name_en }}</td>
                            </th>
                        </tr>

                        <tr>
                            <th> Slug
                            <td>{{ $category->slug }}</td>

                            </th>
                        </tr>
                        <tr>
                            <th> color
                            <td>
                                {{ $category->color }}
                            </td>
                            </th>
                        </tr>
                        <tr>
                            <th> color
                            <td>
                                {{ $category->spacial }}
                            </td>
                            </th>
                        </tr>

                        <tr>
                            <th> Icon
                            <td> <img alt="image" src="/site/images/categories/{{$category->icon}}" width="70">
                            </td>
                            </th>
                        </tr>
                        <tr>
                            <th> Images
                            <td> <img alt="image" src="/site/images/categories/{{$category->images}}" width="70">
                            </td>
                            </th>
                        </tr>
                        <tr>
                            <th> Created At
                            <td>{{ $category->created_at }}</td>

                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection