@extends('layouts.admin')
@section('title')
Create Category
@endsection
@section('content')
<div class="col-12 col-md-1 col-lg-12">
    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create Category</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name (UZ)</label>
                    <input type="text" class="form-control" required name="name_uz" @error('name_uz') is-invalid @enderror>
                    @error('name_uz')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Name (RU)</label>
                    <input type="text" class="form-control" name="name_ru" required>
                </div>
                <div class="form-group">
                    <label>Name (EN)</label>
                    <input type="text" class="form-control" name="name_en" required>
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <input type="file" class="form-control" name="images">
                </div>
                <div class="form-group">
                    <label>icon</label>
                    <input type="file" class="form-control" name="icon">
                </div>
                <div class="form-group">
                    <label>Tags selected </label>
                    <select name="color" class="form-control select2">
                        <option value="blue">Blue</option>
                        <option value="red">Red</option>
                        <option value="yellow">Yellow</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="control-label">Muxummi ?</div>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" value="1" name="spacial" class="custom-switch-input">
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