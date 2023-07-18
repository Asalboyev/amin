@extends('layouts.admin')
@section('title')
Show Product {{ $product->id }}
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
            <h4>category id {{ $product->id }}</h4>
            <div class="card-header-form">
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th> ID
                            <td>{{ $product->id }}</td>
                            </th>
                        </tr>

                        <tr>
                            <th>Name (uz)
                            <td>{{ $product->name_uz }}</td>
                            </th>
                        </tr>
                        <tr>
                            <th>Name (ru)
                            <td>{{ $product->name_ru }}</td>
                            </th>
                        </tr>
                        <tr>
                            <th>Name (en)
                            <td>{{ $product->name_en }}</td>
                            </th>
                        </tr>

                        <tr>
                            <th> Yig'ilgan (UZ)
                            <td>{{$product->assembled_uz}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th> Собран (Ru)
                            <td>{{$product->assembled_ru}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th> Ass embled (EN)
                            <td>{{$product->assembled_en}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th> Guruh qadoqlash turi (UZ)
                            <td>{{$product->Typeofgrouppackaging_uz}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th> Тип групповой упаковки (RU)
                            <td>{{$product->Typeofgrouppackaging_ru}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th> Group packing type (EN)
                            <td>{{$product->Typeofgrouppackaging_en}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th>Paket miqdori (UZ)
                            <td>{{$product->amountinapackage_ru}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th> Количество в упаковке(RU)
                            <td>{{$product->Typeofgrouppackaging_en}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th>Package quantity (EN)
                            <td>{{$product->Typeofgrouppackaging_en}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th>O'yinchoqlar nomlari(UZ)
                            <td>{{$product->namesoftoys_uz}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th>Имена игрушек (RU)
                            <td>{{$product->namesoftoys_uz}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th>Names of toys (EN)
                            <td>{{$product->namesoftoys_en}}</td>

                            </th>
                        </tr>
                        <tr>
                            <th>Sarlavha (UZ)
                            <td>{!!$product->title_uz!!}</td>

                            </th>
                        </tr>
                        <tr>
                            <th>Заголовок (Ru)
                            <td>{!!$product->title_ru!!}</td>

                            </th>
                        </tr>
                        <tr>
                            <th>Title (EN)
                            <td>{!! $product->title_en!!}</td>

                            </th>
                        </tr>
                        <tr>
                            <th> Images
                            <td>
                                @if (!empty($product->images))
                                @foreach ($product->images as $image)
                                <img alt="image" src="{{ asset('site/images/products/' . $image) }}" width="80">
                                @endforeach
                                @endif
                            </td>
                            </th>
                        </tr>

                        <tr>
                            <th> Slug
                            <td>{{ $product->slug }}</td>
                            </th>
                        </tr>
                        <tr>
                            <th> Pазмер игрушки
                            <td>{{ $product->packedsize }}</td>
                            </th>
                        </tr>
                        <tr>
                            <th> Yпакованный размер
                            <td>{{ $product->packedsize }}</td>
                            </th>
                        </tr>


                        <tr>
                            <th> производственный сертификат
                            <td> <img alt="image" src="/site/images/certificate/{{$product->productioncertificate}}" width="70">
                            </td>
                            </th>
                        </tr>
                        <tr>
                            <th>Код продажи selected
                            <td>{{ $product->numberofstars }}</td>

                            </th>
                        </tr>
                        <tr>
                            <th> Created At
                            <td>{{ $product->created_at }}</td>

                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection