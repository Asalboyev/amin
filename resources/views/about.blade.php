@extends('layouts.sit')
@section('title')
    @lang('header.Kompaniya_haqida')
@endsection
@section('content')
    <!-- OFFER -->
    <!-- About -->
    <section class="offer clouds">
        <div class="container">
            <h1 class="offer__title">
              @lang('header.Kompaniya_haqida')
            </h1>
        </div>
    </section>
    <section class="about">
        <div class="about-balloons balloons">
            <img src="img/balloon.svg" alt="balloon">
            <img src="img/balloon.svg" alt="balloon">
        </div>
        <div class="container">
            <div class="about__text">
        @lang('header.Bugungi kunda')
            </div>
            <div class="about__img">
                <img src="img/about.jpg" alt="about">
            </div>
        </div>
        <!-- CATEGORY -->
        <section class="category">
            <div class="container">

                @include('layouts.category')        </div>
            <div class="category-balloons balloons">
                <img src="img/balloon.svg" alt="balloon">
                <img src="img/balloon.svg" alt="balloon">
            </div>
        </section>
    </section>
@endsection
