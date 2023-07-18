@extends('layouts.sit')
@section('title')
@endsection
@section('content')
<section class="main clouds">
    <div class="container">
        <div class="main-content">
            <h1 class="main__title">
                @lang('header.O\'yinchoqlar')
            </h1>
            <div class="main-btns">
                <a href="{{route('catalog')}}" class="btn">
                    @lang('header.Katalogga o\'ting')
                </a>
                <a href="#" class="btn btn-yellow feedback-open">
                    @lang('header.Biz bilan bog\'lanish')
                    {{ session('success') }}
                </a>
            </div>
        </div>
        <div class="main-carousel">
            <div class="main-carousel__circle">
                @foreach($categories_spacial as $category)
                <img src="/site/images/categories/{{$category->images}}" alt="toy">
                @endforeach
            </div>
            <div class="main-carousel__img">
                <img src="" alt="toy">
                <img src="" alt="toy">
            </div>
            <div class="main-carousel__arrows arrows">
                <span class="arrow-left">
                    <img src="img/icons/chevron-left.svg" alt="ico">
                </span>
                <span class="arrow-right">
                    <img src="img/icons/chevron-right.svg" alt="ico">
                </span>
            </div>
        </div>
    </div>
</section>
<!-- CATEGORY -->
<section class="category">
    <div class="container">
        @include('layouts.category')
    </div>
    <div class="category-balloons balloons">
        <img src="img/balloon.svg" alt="balloon">
        <img src="img/balloon.svg" alt="balloon">
    </div>
</section>
<!-- SHOP -->
<section class="shop">
    <div class="container">
        <h2 class="shop__title section-title">
            @lang('header.Kategoriya bo\'yicha xarid qiling')
        </h2>
        <div class="shop-content">
            <div class="shop-carousel owl-carousel">
                @foreach($categories_spacial as $category)
                <a href="{{ route('catalog_products', $category->id) }}" class="shop-carousel__item shop-carousel__item-{{$category->color}}">
                    <div class="shop-carousel__name" style="color: royalblue">
                        {{ $category['name_'.\App::getLocale()]  }}
                    </div>
                    <div class="shop-carousel__img">
                        <img src="/site/images/categories/{{$category->images}}" alt="shop">
                    </div>
                </a>
                @endforeach
            </div>
            <div class="shop-arrows arrows">
                <span class="arrow-left">
                    <img src="img/icons/chevron-left.svg" alt="ico">
                </span>
                <span class="arrow-right">
                    <img src="img/icons/chevron-right.svg" alt="ico">
                </span>
            </div>
        </div>
        <div class="shop-balloon balloons">
            <img src="img/balloon.svg" alt="balloon">
        </div>
    </div>
</section>
<!-- PRODUCTS -->
<section class="products">
    <div class="container">
        <h2 class="products__title section-title">
            @lang('header.Bugungi kunda mashhur')
        </h2>
        <div class="products-wrap">
            @include('layouts.cotalog')

        </div>
        <div class="products-all">
            <a href="{{route('catalog')}}" class="btn">
                @lang('header.Katalog1')
            </a>
        </div>
        <div class="products-balloon balloons">
            <img src="img/balloon.svg" alt="balloon">
            <img src="img/balloon.svg" alt="balloon">
        </div>
        <div class="products-zoom">
            <div class="products-zoom__img">
                <img src="" alt="product">
            </div>
        </div>
    </div>
</section>
<!-- WAR -->
<section class="war">
    <div class="container">
        <div class="war-content">
            <h2 class="war__title section-title">

                @lang('header.Harbiy texnika')
            </h2>
            {{-- {{ route('catalog_products', $category->id) }}--}}
            <a href="" class="war__btn btn btn-white">
                @lang('header.Katalogda ko\'rish')
            </a>
        </div>
        <div class="war__img wow fadeIn" data-wow-delay=".4s">
            <img src="img/war/1.png" alt="toy">
        </div>
        <div class="war-helicopters">
            <img src="img/war/helicopter1.png" alt="helicopter" id="helicopter1">
            <img src="img/war/helicopter2.png" alt="helicopter" id="helicopter2">
        </div>
    </div>
</section>
<!-- GIFT -->
<section class="gift">
    <div class="gift-wrap">
        <h2 class="gift__title section-title">
            @lang('header.index_form')
        </h2>
        <form method="POST" action="{{route('telegram.index_message')}}" enctype="multipart/form-data" class="gift-form">
            @csrf
            <div class="gift-form__wrap">
                <input type="text" name="name" id="name" placeholder="@lang('header.Sizning_ismingiz')" class="form_name wow fadeInUp" data-wow-delay=".4s">
                <input type="phone" name="phone" id="phone" placeholder="@lang('header.Telefon')" class="form_tel wow fadeInUp" data-wow-delay=".6s">
                <button class="btn wow fadeInUp" type="submit" data-wow-delay=".8s">
                    @lang('header.Yuborish')
                    {{ session('success') }}
                </button>
            </div>
            <label for="check" class="gift-form__check">
                <input type="checkbox" name="check" id="check">
                <span>@lang('header.Men shaxsiy')</span>
            </label>
        </form>
    </div>
</section>
<!-- INSTAGRAM -->
<section class="instagram" id="instagram">
    <div class="container">
        <h2 class="instagram__title section-title">
            @lang('header.Bizning instagramimizga')
        </h2>
        <div class="instagram-wrap">
            <a href="#" class="instagram-item wow fadeInUp" target="_blank" rel="nofollow" data-wow-delay=".3s">
                <img src="img/instagram/1.jpg" alt="instagram">
            </a>
            <a href="#" class="instagram-item wow fadeInUp" target="_blank" rel="nofollow" data-wow-delay=".5s">
                <img src="img/instagram/2.jpg" alt="instagram">
            </a>
            <a href="#" class="instagram-item wow fadeInUp" target="_blank" rel="nofollow" data-wow-delay=".7s">
                <img src="img/instagram/3.jpg" alt="instagram">
            </a>
        </div>
    </div>
</section>
<!-- FOOTER -->
@endsection