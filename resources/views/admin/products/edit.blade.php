@extends('layouts.admin')
@section('title')
Update Product
@endsection
@section('content')
<div class="col-12 col-md-1 col-lg-12">
    <form action="{{ route('admin.products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Create Product </h4>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label>Category selected </label>
                    <select class="form-control" name="category_id" id="">
                        @foreach ($categories as $category )
                        <option {{ $product->category_id==$category->id ? 'selected' : '' }} value="{{$category->id}}">{{ $category->name_uz}}</option>

                        @endforeach
                    </select>
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
                            <input type="text" class="form-control" name="name_uz" required value="{{$product->name_uz}}">
                            @error('name_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Yig'ilgan (UZ)</label>
                            <input type="text" class="form-control" name="assembled_uz" required value="{{$product->assembled_uz}}">
                            @error('assembled_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Guruh qadoqlash turi (UZ)</label>
                            <input type="text" class="form-control" name="Typeofgrouppackaging_uz" required value="{{$product->Typeofgrouppackaging_uz}}">
                            @error('Typeofgrouppackaging_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Paket miqdori (UZ)</label>
                            <input type="text" class="form-control" name="amountinapackage_uz" required value="{{$product->amountinapackage_uz}}">
                            @error('amountinapackage_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>O'yinchoqlar nomlari(UZ)</label>
                            <input type="text" class="form-control" name="namesoftoys_uz" required value="{{$product->namesoftoys_uz}}">
                            @error('namesoftoys_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sarlavha (UZ)</label>
                            <textarea type="text" class="form-control ckeditor" name="title_uz" {!! $product->title_uz!!}></textarea>
                            @error('title_uz')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- RU      --}}
                    <div class="tab-pane fade active show" id="ru" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="form-group">
                            <label>Name (RU)</label>
                            <input type="text" class="form-control" name="name_ru" required value="{{$product->name_ru}}">
                            @error('name_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Собран (Ru)</label>
                            <input type="text" class="form-control" name="assembled_ru" required value="{{$product->assembled_ru}}">
                            @error('assembled_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Тип групповой упаковки (RU)</label>
                            <input type="text" class="form-control" name="Typeofgrouppackaging_ru" value="{{$product->Typeofgrouppackaging_ru}}">
                            @error('Typeofgrouppackaging_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Cумма пакета (RU)</label>
                            <input type="text" class="form-control" name="amountinapackage_ru" required value="{{$product->amountinapackage_ru}}">
                            @error('amountinapackage_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nменамягкие игрушки(Ru)</label>
                            <input type="text" class="form-control" name="namesoftoys_ru" required value="{{$product->namesoftoys_ru}}">
                            @error('namesoftoys_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Заголовок (RU)</label>
                            <textarea type="text" class="form-control ckeditor" name="title_ru" {!! $product->title_ru!!}></textarea>
                            @error('title_ru')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- EN      --}}
                    <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="form-group">
                            <label>Name (EN)</label>
                            <input type="text" class="form-control" name="name_en" required value="{{$product->name_en}}">
                            @error('name_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ass embled (EN)</label>
                            <input type="text" class="form-control" name="assembled_en" required value="{{$product->assembled_en}}">
                            @error('assembled_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Group packing type (EN)</label>
                            <input type="text" class="form-control" name="Typeofgrouppackaging_en" required value="{{$product->Typeofgrouppackaging_en}}">
                            @error('Typeofgrouppackaging_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Package amount (En)</label>
                            <input type="text" class="form-control" name="amountinapackage_en" required value="{{$product->amountinapackage_en}}">
                            @error('amountinapackage_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Names of toys(EN)</label>
                            <input type="text" class="form-control" name="namesoftoys_en" required value="{{$product->namesoftoys_en}}">
                            @error('namesoftoys_en')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Title (EN)</label>
                            <textarea type="text" class="form-control ckeditor" name="title_en" {!! $product->title_en!!}></textarea>
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
                    <input type="file" name="images[]" multiple>
                </div>
                <div class="form-group">
                    <label>Pазмер игрушки</label>
                    <input type="text" class="form-control" name="packedsize" required value="{{$product->packedsize}}">
                </div>
                <div class="form-group">
                    <label>Yпакованный размер</label>
                    <input type="text" class="form-control" name="packedsize" required value="{{$product->packedsize}}">
                </div>

                <div class="form-group">
                    <label>производственный сертификат</label>
                    <input type="file" class="form-control" name="productioncertificate">
                </div>

                <div class="form-group">
                    <label>Код продажи selected </label>
                    <select class="form-control" name="numberofstars" id="" required>
                        <option value="{{$product->numberofstars }}" selected="false" disabled="disabled">{{$product->numberofstars }}</option>
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