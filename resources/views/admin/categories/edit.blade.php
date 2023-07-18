@extends('layouts.admin')
@section('title')
Update Category
@endsection
@section('content')
<div class="col-12 col-md-1 col-lg-12">
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Update Category</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name (UZ)</label>
                    <input type="text" class="form-control" name="name_uz" value="{{$category->name_uz }}">
                </div>
                <div class="form-group">
                    <label>Name (RU)</label>
                    <input type="text" class="form-control" name="name_ru" value="{{$category->name_ru }}">
                </div>
                <div class="form-group">
                    <label>Name (RU)</label>
                    <input type="text" class="form-control" name="name_en" value="{{$category->name_en }}">
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{$category->slug }}">
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <input type="file" class="form-control" name="images" value="{{$category->images }}">
                </div>
                <div class="form-group">
                    <label>icon</label>
                    <input type="file" class="form-control" name="icon" value="{{$category->icon }}">
                </div>
                <div class="form-group">
                    <label>Tags selected </label>
                    <select name="color" class="form-control select2">
                        <option value="{{$category->color }}" selected="false" disabled="disabled">{{$category->color }}</option>
                        <option value="blue">Blue</option>
                        <option value="red">Red</option>
                        <option value="yellow">Yellow</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="control-label">Spacial ?</div>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" value="1" {{ $category->Spacial == 1 ? 'checked' : '' }} name="spacial" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection