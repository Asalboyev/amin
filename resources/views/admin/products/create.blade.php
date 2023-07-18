@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
@endsection

@section('title')
Create Products
@endsection
@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <form action="{{ route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create Product </h4>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label>Category selected </label>
                    <select class="form-control" name="category_id" id="" required>
                        @foreach ($categories as $category )
                        <option value="{{ $category->id}}">{{ $category->name_uz}}</option>

                        @endforeach

                    </select>
                    @error('category_id')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#uz" role="tab" aria-controls="uz" aria-selected="false">UZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#ru" role="tab" aria-controls="ru" aria-selected="true">RU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#en" role="tab" aria-controls="en" aria-selected="false">EN</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    {{-- UZ      --}}
                    <div class="tab-pane fade" id="uz" role="tabpanel" aria-labelledby="home-tab">
                        <div class="form-group">
                            <label>Name (UZ)</label>
                            <input type="text" class="form-control" name="name_uz" required>
                            @error('name_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Yig'ilgan (UZ)</label>
                            <input type="text" class="form-control" name="assembled_uz" required>
                            @error('assembled_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Guruh qadoqlash turi (UZ)</label>
                            <input type="text" class="form-control" name="Typeofgrouppackaging_uz" required>
                            @error('Typeofgrouppackaging_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Paket miqdori (UZ)</label>
                            <input type="text" class="form-control" name="amountinapackage_uz" required>
                            @error('amountinapackage_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>O'yinchoqlar nomlari(UZ)</label>
                            <input type="text" class="form-control" name="namesoftoys_uz" required>
                            @error('namesoftoys_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sarlavha (UZ)</label>
                            <textarea type="text" class="form-control ckeditor" name="title_uz"></textarea>
                            @error('title_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- RU      --}}
                    <div class="tab-pane fade active show" id="ru" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="form-group">
                            <label>Name (RU)</label>
                            <input type="text" class="form-control" name="name_ru" required>
                            @error('name_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Собран (Ru)</label>
                            <input type="text" class="form-control" name="assembled_ru" required>
                            @error('assembled_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Тип групповой упаковки (RU)</label>
                            <input type="text" class="form-control" name="Typeofgrouppackaging_ru" required>
                            @error('Typeofgrouppackaging_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Cумма пакета (RU)</label>
                            <input type="text" class="form-control" name="amountinapackage_ru" required>
                            @error('amountinapackage_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nменамягкие игрушки(Ru)</label>
                            <input type="text" class="form-control" name="namesoftoys_ru" required>
                            @error('namesoftoys_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Заголовок (RU)</label>
                            <textarea type="text" class="form-control ckeditor" name="title_ru"></textarea>
                            @error('title_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    {{-- EN      --}}
                    <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="form-group">
                            <label>Name (EN)</label>
                            <input type="text" class="form-control" name="name_en" required>
                            @error('name_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ass embled (EN)</label>
                            <input type="text" class="form-control" name="assembled_en" required>
                            @error('assembled_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Group packing type (EN)</label>
                            <input type="text" class="form-control" name="Typeofgrouppackaging_en" required>
                            @error('Typeofgrouppackaging_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Package amount (En)</label>
                            <input type="text" class="form-control" name="amountinapackage_en" required>
                            @error('amountinapackage_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Names of toys(EN)</label>
                            <input type="text" class="form-control" name="namesoftoys_en" required>
                            @error('namesoftoys_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Title (EN)</label>
                            <textarea type="text" class="form-control ckeditor" name="title_en"></textarea>
                            @error('title_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Images</label>
                    <input type="file" name="images[]" multiple required>
                </div>
                <div class="form-group">
                    <label>Pазмер игрушки</label>
                    <input type="text" class="form-control" name="thetoysize">
                </div>
                <div class="form-group">
                    <label>Yпакованный размер</label>
                    <input type="text" class="form-control" name="packedsize" required>
                </div>

                <div class="form-group">
                    <label>icon</label>
                    <input type="file" class="form-control" name="productioncertificate">
                </div>

                <div class="form-group">
                    <label>Код продажи selected </label>
                    <select class="form-control" name="numberofstars" id="" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
    </form>
</div>
@endsection
@section('js')

<script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script src="/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>

<script type="text/javascript">
    CKEDITOR.replace('title_uz', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('title_ru', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('tite_en', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

@endsection