@extends('layouts.sit')
@section('title')
Product{{ $product['namesoftoys_'.\App::getLocale()]  }}
@endsection
@section('content')
<!-- OFFER -->
<section class="offer clouds offer-product">
	<div class="container">
		<h1 class="offer__title">
			Коляска для кукол
		</h1>
	</div>
</section>
<!-- PRODUCT -->
<section class="product">
	<div class="about-balloons balloons">
		<img src="/img/balloon.svg" alt="balloon">
		<img src="/img/balloon.svg" alt="balloon">
	</div>
	<div class="container">
		<div class="product-wrap">
			<div class="product-main">
				<div class="product-gallery">
					<div class="product-gallery__thumbs">
						<div class="product-gallery__thumb">
							@if (!empty($product['images']) && count($product['images']) > 0)
							@php($firstImage = $product['images'][0])
							<img alt="image" src="{{ asset('site/images/products/' . $firstImage) }}" width="35">
							@endif
						</div>
						<div class="product-gallery__thumb">
							@if (!empty($product['images']) && count($product['images']) > 1)
							@php($firstImage = $product['images'][1])
							<img alt="image" src="{{ asset('site/images/products/' . $firstImage) }}" width="35">
							@endif
						</div>
						<div class="product-gallery__thumb">
							@if (!empty($product['images']) && count($product['images']) > 2)
							@php($firstImage = $product['images'][2])
							<img alt="image" src="{{ asset('site/images/products/' . $firstImage) }}" width="35">
							@endif
						</div>
						<div class="product-gallery__thumb">
							@if (!empty($product['images']) && count($product['images']) > 3)
							@php($firstImage = $product['images'][3])
							<img alt="image" src="{{ asset('site/images/products/' . $firstImage) }}" width="35">
							@endif
						</div>
					</div>
					<div class="product-gallery__img">
						<img src="" alt="product">
					</div>
				</div>
				<div class="product-desc">
					<div class="product-desc__btn">
						<span>@lang('header.Tavsif')</span>
						<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="21" cy="21" r="21" transform="matrix(-1 0 0 1 42 0)" fill="white" />
							<path d="M28.9181 24.0508L22.3981 17.5308C21.6281 16.7608 20.3681 16.7608 19.5981 17.5308L13.0781 24.0508" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
					<div class="product-desc__main">
						<div class="product-desc__item">
							<div>@lang('header.O\'yinchoqlarning nomlari')</div>
							<div> {{ $product['namesoftoys_'.\App::getLocale()]  }}</div>
						</div>
						<div class="product-desc__item">
							<div>@lang('header.sotuvchi kodi')</div>
							<div>{{$product->vendorcode}}</div>
						</div>
						<div class="product-desc__text">
							{!! $product['title_'.\App::getLocale()] !!}
						</div>
					</div>
				</div>
			</div>
			<div class="product-info">
				<div class="product-info__title">
					{{ $product['name_'.\App::getLocale()]  }}
				</div>
				<ul class="product-info__list">
					<li class="product-info__item">
						<div>
							@lang('header.Yig\'ilgan o\'yinchoq o\'lchami')
						</div>
						<div>
							{{$product->thetoysize}}
						</div>
					</li>
					<li class="product-info__item">
						<div>
							@lang('header.Qadoqlash turi')
						</div>
						<div>
							-
						</div>
					</li>
					<li class="product-info__item">
						<div>
							@lang('header.Paket hajmi')
						</div>
						<div>
							{{$product->packedsize}}
						</div>
					</li>
					<li class="product-info__item">
						<div>
							@lang('header.Guruh qadoqlash turi')
						</div>
						<div>
							{{ $product['Typeofgrouppackaging_'.\App::getLocale()]  }}
						</div>
					</li>
					<li class="product-info__item">
						<div>
							@lang('header.Paketdagi miqdor')
						</div>
						<div>
							{{ $product['amountinapackage_'.\App::getLocale()]  }}

						</div>
					</li>
					<li class="product-info__item">
						<div>
							@lang('header.Ishlab chiqarish sertifikati')
						</div>
						<div>
							<a href="/site/images/certificate/{{ $product->productioncertificate}}" download class="btn">
								<img src="/img/icons/download.svg" alt="ico">
								<span>@lang('header.Yuklab olish')</span>
							</a>
						</div>
					</li>
				</ul>
				<div class="product-info__text">
					@lang('header.Texnik xususyatlar')
				</div>
				<div class="product-info__btn">
					<a href="#" class="btn">
						<img src="/img/icons/basket.svg" alt="ico">
						<span>@lang('header.Ro\'yxatdan o\'chirilish')</span>
					</a>
				</div>
			</div>
		</div>
		<div class="product-more">
			<div class="product-more__title">
				@lang('header.Shunga o\'xshash mahsulotlar')
			</div>
			<div class="product-carousel owl-carousel">
				@include('layouts.cotalog')
			</div>
			<div class="product-arrows arrows">
				<span class="arrow-left">
					<img src="/img/icons/chevron-left.svg" alt="ico">
				</span>
				<span class="arrow-right">
					<img src="/img/icons/chevron-right.svg" alt="ico">
				</span>
			</div>
		</div>
		<div class="products-zoom">
			<div class="products-zoom__img">
				<img src="" alt="product">
			</div>
		</div>
	</div>
</section>


<!-- FOOTER -->
@endsection