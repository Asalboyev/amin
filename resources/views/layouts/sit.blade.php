<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('title') Amin</title>

    <meta name="description" content="">

    <!-- Facebook -->
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="/img/meta.jpg">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="/img/meta.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="/img/meta.jpg">
</head>
<body>

<!-- FORM-DONE-->

<div class="form-done">
    <div class="feedback-content">
        <div class="feedback__title">
@lang('header.Ilova'){{--            @lang('header.about_deep1')--}}
        </div>
        <div class="feedback-done">
            <div class="feedback__img">
                <img src="/img/icons/done.svg" alt="ico">
            </div>
            <div class="feedback-done__text">
@lang('header.Sizning so\'rovingiz qabul qilindi. Tez orada siz bilan bog\'lanamiz')
            </div>
        </div>
    </div>
</div>


<!-- PRELOADER -->

<div class="preloader">
    <div class="preloader__logo">
        <img src="/img/logo.svg" alt="Amin">
    </div>
</div>

<!-- FEEDBACK -->

<div class="feedback">
    <div class="feedback-content">
        <div class="feedback__title">
            @lang('header.Ilova')
        </div>
        <div class="feedback-wrap">
            <div class="feedback__text">
            @lang('header.Kontakt ma\'lumotlaringizni')
            </div>

                <form class="feedback-form" method="POST" action="{{route('telegram.send_message')}}" enctype="multipart/form-data">
                    @csrf
                <input type="text" name="name" id="name" placeholder="@lang('header.Sizning_ismingiz')" class="form_name">
                <input type="tel"  name="phone" id="phone" placeholder="@lang('header.Telefon')" class="form_tel">
                <button class="btn" type="submit">
                    @lang('header.Yuborish')
                </button>
                </form>


            <div class="feedback__advice">
            @lang('header.Men_shaxsiy')
            </div>
        </div>
        <div class="feedback-done">
            <div class="feedback__img">
                <img src="/img/icons/done.svg" alt="ico">
            </div>
            <div class="feedback-done__text">
                @lang('header.Sizning so\'rovingiz');
            </div>
        </div>
    </div>
</div>
<!-- MOBILE-MENU -->
<div class="mobile-menu">
    <div class="mobile-menu__wrap">
        <div class="mobile-menu__head">
            <div class="mobile-menu__close">
                <img src="/img/icons/close.svg" alt="ico">
            </div>
            <a href="{{route('index')}}" class="mobile-menu__logo">
                <img src="/img/logo.svg" alt="Amin">
            </a>
            <a href="tel:+9999" class="mobile-menu__call">
                <img src="/img/icons/call-red.svg" alt="ico">
            </a>
        </div>
        <ul class="mobile-menu__list">
            <li>
                <a href="{{route('about')}}">
                   @lang('header.Kompaniya_haqida')
                </a>
            </li>
            <li>
                <a href="{{route('catalog')}}">
                    @lang('header.Katalog')
                </a>
            </li>
            <li>
                <a href="/#instagram" target="_blank" rel="nofollow">
                    @lang('header.Biz_instagramdamiz')
                </a>
            </li>
            <li>
                <a href="#contactl">
                    @lang('header.Kontaktlar')
                </a>
            </li>
        </ul>
        <ul class="header-social">
            <li>
                <a href="#" target="_blank" rel="nofollow">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.5 10.5C20.5 5 16 0.5 10.5 0.5C5 0.5 0.5 5 0.5 10.5C0.5 15.5 4.125 19.625 8.875 20.375V13.375H6.375V10.5H8.875V8.25C8.875 5.75 10.375 4.375 12.625 4.375C13.75 4.375 14.875 4.625 14.875 4.625V7.125H13.625C12.375 7.125 12 7.875 12 8.625V10.5H14.75L14.25 13.375H11.875V20.5C16.875 19.75 20.5 15.5 20.5 10.5Z" fill="currentColor"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" target="_blank" rel="nofollow">
                    <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.8749 7.13537C7.24359 4.79631 10.8236 3.25426 12.6148 2.50922C17.7292 0.381975 18.7919 0.0124503 19.4846 0.000118295C19.6369 -0.00243528 19.9776 0.0353203 20.1982 0.214361C20.3845 0.36554 20.4358 0.569761 20.4603 0.713095C20.4848 0.856429 20.5154 1.18295 20.4911 1.43808C20.214 4.35012 19.0147 11.4169 18.4046 14.6784C18.1465 16.0585 17.6382 16.5212 17.1461 16.5665C16.0766 16.6649 15.2645 15.8597 14.2287 15.1807C12.6078 14.1182 11.6921 13.4568 10.1188 12.42C8.30053 11.2218 9.47923 10.5633 10.5154 9.48699C10.7866 9.20533 15.4987 4.91933 15.5899 4.53052C15.6013 4.48189 15.6119 4.30063 15.5042 4.20492C15.3965 4.10921 15.2376 4.14194 15.1229 4.16797C14.9604 4.20487 12.371 5.91634 7.35486 9.30237C6.61988 9.80707 5.95416 10.053 5.3577 10.0401C4.70015 10.0259 3.43528 9.66829 2.49498 9.36264C1.34166 8.98774 0.425027 8.78953 0.504845 8.15284C0.546419 7.82121 1.0031 7.48205 1.8749 7.13537Z" fill="currentColor"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" target="_blank" rel="nofollow">
                    <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.875 2.125C13.625 2.125 14 2.125 15.125 2.125C16.125 2.125 16.625 2.375 17 2.5C17.5 2.75 17.875 2.875 18.25 3.25C18.625 3.625 18.875 4 19 4.5C19.125 4.875 19.25 5.375 19.375 6.375C19.375 7.5 19.375 7.75 19.375 10.625C19.375 13.5 19.375 13.75 19.375 14.875C19.375 15.875 19.125 16.375 19 16.75C18.75 17.25 18.625 17.625 18.25 18C17.875 18.375 17.5 18.625 17 18.75C16.625 18.875 16.125 19 15.125 19.125C14 19.125 13.75 19.125 10.875 19.125C8 19.125 7.75 19.125 6.625 19.125C5.625 19.125 5.125 18.875 4.75 18.75C4.25 18.5 3.875 18.375 3.5 18C3.125 17.625 2.875 17.25 2.75 16.75C2.625 16.375 2.5 15.875 2.375 14.875C2.375 13.75 2.375 13.5 2.375 10.625C2.375 7.75 2.375 7.5 2.375 6.375C2.375 5.375 2.625 4.875 2.75 4.5C3 4 3.125 3.625 3.5 3.25C3.875 2.875 4.25 2.625 4.75 2.5C5.125 2.375 5.625 2.25 6.625 2.125C7.75 2.125 8.125 2.125 10.875 2.125ZM10.875 0.25C8 0.25 7.75 0.25 6.625 0.25C5.5 0.25 4.75 0.500001 4.125 0.750001C3.5 1 2.875 1.375 2.25 2C1.625 2.625 1.375 3.125 1 3.875C0.750001 4.5 0.625 5.25 0.5 6.375C0.5 7.5 0.5 7.875 0.5 10.625C0.5 13.5 0.5 13.75 0.5 14.875C0.5 16 0.750001 16.75 1 17.375C1.25 18 1.625 18.625 2.25 19.25C2.875 19.875 3.375 20.125 4.125 20.5C4.75 20.75 5.5 20.875 6.625 21C7.75 21 8.125 21 10.875 21C13.625 21 14 21 15.125 21C16.25 21 17 20.75 17.625 20.5C18.25 20.25 18.875 19.875 19.5 19.25C20.125 18.625 20.375 18.125 20.75 17.375C21 16.75 21.125 16 21.25 14.875C21.25 13.75 21.25 13.375 21.25 10.625C21.25 7.875 21.25 7.5 21.25 6.375C21.25 5.25 21 4.5 20.75 3.875C20.5 3.25 20.125 2.625 19.5 2C18.875 1.375 18.375 1.125 17.625 0.750001C17 0.500001 16.25 0.375 15.125 0.25C14 0.25 13.75 0.25 10.875 0.25Z" fill="currentColor"/>
                        <path d="M10.875 5.25C7.875 5.25 5.5 7.625 5.5 10.625C5.5 13.625 7.875 16 10.875 16C13.875 16 16.25 13.625 16.25 10.625C16.25 7.625 13.875 5.25 10.875 5.25ZM10.875 14.125C9 14.125 7.375 12.625 7.375 10.625C7.375 8.75 8.875 7.125 10.875 7.125C12.75 7.125 14.375 8.625 14.375 10.625C14.375 12.5 12.75 14.125 10.875 14.125Z" fill="currentColor"/>
                        <path d="M16.375 6.375C17.0654 6.375 17.625 5.81536 17.625 5.125C17.625 4.43464 17.0654 3.875 16.375 3.875C15.6846 3.875 15.125 4.43464 15.125 5.125C15.125 5.81536 15.6846 6.375 16.375 6.375Z" fill="currentColor"/>
                    </svg>
                </a>
            </li>
        </ul>
        @php($langs = ['ru' => 'RU', 'uz' => 'UZ', 'en' => 'EN'])
        <div class="mobile-menu__lang">
            @foreach($langs as $key=>$lang)
                <a href="/lang/{{ $key }}" @if (\App::getLocale() == $key) style="color: #98cb00" class="current" @endif>{{ $lang }}</a>
            @endforeach
        </div>
        <div class="mobile-menu__nova">
            <a href="https://www.novastudio.uz/" class="mobile-menu__nova" target="_blank" rel="nofollow">
                created by NovaS
            </a>
        </div>
    </div>
</div>
<!-- HEADER -->

<header class="header">
    <div class="header-top">
        <div class="container">
            <a href="{{route('index')}}" class="header__logo">
                <img src="/img/logo.svg" alt="Amin">
            </a>
        </div>
    </div>
    <div class="header-bot">
        <div class="container">
            <div class="header-mobile">
                <img src="/img/icons/menu.svg" alt="ico">
            </div>
            <ul class="header-menu">
                <li class="header-menu__item">
                    <a href="{{route('about')}}" class="header-menu__link">
                        @lang('header.Kompaniya_haqida')
                    </a>
                </li>
                <li class="header-menu__item">
                    <a href="{{route('catalog')}}" class="header-menu__link">
                        @lang('header.Katalog')
                    </a>
                </li>
                <li class="header-menu__item">
                    <a href="/#instagram" class="header-menu__link" target="_blank" rel="nofollow">
                        @lang('header.Biz_instagramdamiz')
                    </a>
                </li>
                <li class="header-menu__item">
                    <a href="#contact" class="header-menu__link">
                        @lang('header.Kontaktlar')
                    </a>
                </li>
            </ul>
            <div class="header-wrap">
                <div class="header-lang">
                    @php($langs = ['ru' => 'Русский', 'uz' => 'O’zbek', 'en' => 'English'])
                    <div class="header-lang__btn">
                        @foreach($langs as $key=>$lang)
                            @if (\App::getLocale() == $key)
                                <img src="/img/{{ $key }}.jpg" alt="ico">
                                <div>
                                    {{ $lang }}
                                </div>
                                <img src="/img/icons/chevron-down.svg" alt="ico">
                            @endif
                        @endforeach
                    </div>

                    <div class="header-lang__list">
                        @foreach($langs as $key=>$lang)
                            <a href="/lang/{{ $key }}" @if (\App::getLocale() == $key) class="current" @endif>{{ $lang }}</a>
                        @endforeach

                    </div>
                </div>
                <ul class="header-social">
                    <li>
                        <a href="#" target="_blank" rel="nofollow">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.5 10.5C20.5 5 16 0.5 10.5 0.5C5 0.5 0.5 5 0.5 10.5C0.5 15.5 4.125 19.625 8.875 20.375V13.375H6.375V10.5H8.875V8.25C8.875 5.75 10.375 4.375 12.625 4.375C13.75 4.375 14.875 4.625 14.875 4.625V7.125H13.625C12.375 7.125 12 7.875 12 8.625V10.5H14.75L14.25 13.375H11.875V20.5C16.875 19.75 20.5 15.5 20.5 10.5Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="nofollow">
                            <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.8749 7.13537C7.24359 4.79631 10.8236 3.25426 12.6148 2.50922C17.7292 0.381975 18.7919 0.0124503 19.4846 0.000118295C19.6369 -0.00243528 19.9776 0.0353203 20.1982 0.214361C20.3845 0.36554 20.4358 0.569761 20.4603 0.713095C20.4848 0.856429 20.5154 1.18295 20.4911 1.43808C20.214 4.35012 19.0147 11.4169 18.4046 14.6784C18.1465 16.0585 17.6382 16.5212 17.1461 16.5665C16.0766 16.6649 15.2645 15.8597 14.2287 15.1807C12.6078 14.1182 11.6921 13.4568 10.1188 12.42C8.30053 11.2218 9.47923 10.5633 10.5154 9.48699C10.7866 9.20533 15.4987 4.91933 15.5899 4.53052C15.6013 4.48189 15.6119 4.30063 15.5042 4.20492C15.3965 4.10921 15.2376 4.14194 15.1229 4.16797C14.9604 4.20487 12.371 5.91634 7.35486 9.30237C6.61988 9.80707 5.95416 10.053 5.3577 10.0401C4.70015 10.0259 3.43528 9.66829 2.49498 9.36264C1.34166 8.98774 0.425027 8.78953 0.504845 8.15284C0.546419 7.82121 1.0031 7.48205 1.8749 7.13537Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="nofollow">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.875 2.125C13.625 2.125 14 2.125 15.125 2.125C16.125 2.125 16.625 2.375 17 2.5C17.5 2.75 17.875 2.875 18.25 3.25C18.625 3.625 18.875 4 19 4.5C19.125 4.875 19.25 5.375 19.375 6.375C19.375 7.5 19.375 7.75 19.375 10.625C19.375 13.5 19.375 13.75 19.375 14.875C19.375 15.875 19.125 16.375 19 16.75C18.75 17.25 18.625 17.625 18.25 18C17.875 18.375 17.5 18.625 17 18.75C16.625 18.875 16.125 19 15.125 19.125C14 19.125 13.75 19.125 10.875 19.125C8 19.125 7.75 19.125 6.625 19.125C5.625 19.125 5.125 18.875 4.75 18.75C4.25 18.5 3.875 18.375 3.5 18C3.125 17.625 2.875 17.25 2.75 16.75C2.625 16.375 2.5 15.875 2.375 14.875C2.375 13.75 2.375 13.5 2.375 10.625C2.375 7.75 2.375 7.5 2.375 6.375C2.375 5.375 2.625 4.875 2.75 4.5C3 4 3.125 3.625 3.5 3.25C3.875 2.875 4.25 2.625 4.75 2.5C5.125 2.375 5.625 2.25 6.625 2.125C7.75 2.125 8.125 2.125 10.875 2.125ZM10.875 0.25C8 0.25 7.75 0.25 6.625 0.25C5.5 0.25 4.75 0.500001 4.125 0.750001C3.5 1 2.875 1.375 2.25 2C1.625 2.625 1.375 3.125 1 3.875C0.750001 4.5 0.625 5.25 0.5 6.375C0.5 7.5 0.5 7.875 0.5 10.625C0.5 13.5 0.5 13.75 0.5 14.875C0.5 16 0.750001 16.75 1 17.375C1.25 18 1.625 18.625 2.25 19.25C2.875 19.875 3.375 20.125 4.125 20.5C4.75 20.75 5.5 20.875 6.625 21C7.75 21 8.125 21 10.875 21C13.625 21 14 21 15.125 21C16.25 21 17 20.75 17.625 20.5C18.25 20.25 18.875 19.875 19.5 19.25C20.125 18.625 20.375 18.125 20.75 17.375C21 16.75 21.125 16 21.25 14.875C21.25 13.75 21.25 13.375 21.25 10.625C21.25 7.875 21.25 7.5 21.25 6.375C21.25 5.25 21 4.5 20.75 3.875C20.5 3.25 20.125 2.625 19.5 2C18.875 1.375 18.375 1.125 17.625 0.750001C17 0.500001 16.25 0.375 15.125 0.25C14 0.25 13.75 0.25 10.875 0.25Z" fill="currentColor"/>
                                <path d="M10.875 5.25C7.875 5.25 5.5 7.625 5.5 10.625C5.5 13.625 7.875 16 10.875 16C13.875 16 16.25 13.625 16.25 10.625C16.25 7.625 13.875 5.25 10.875 5.25ZM10.875 14.125C9 14.125 7.375 12.625 7.375 10.625C7.375 8.75 8.875 7.125 10.875 7.125C12.75 7.125 14.375 8.625 14.375 10.625C14.375 12.5 12.75 14.125 10.875 14.125Z" fill="currentColor"/>
                                <path d="M16.375 6.375C17.0654 6.375 17.625 5.81536 17.625 5.125C17.625 4.43464 17.0654 3.875 16.375 3.875C15.6846 3.875 15.125 4.43464 15.125 5.125C15.125 5.81536 15.6846 6.375 16.375 6.375Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <a href="tel:+9999" class="header-call">
                    <div class="header-call__img">
                        <img src="/img/icons/call.svg" alt="ico">
                    </div>
                    <div class="header-call__text">
                        <div>@lang('header.Bizga_qo\'ng\'iroq_qiling')</div>
                        <p>
                            + 998 90 123 45 67
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="header-clouds">
        <div class="container">
            <img src="/img/cloud1.png" alt="clouds">
        </div>
    </div>
</header>
@yield('content')
<div class="footer-pattern"></div>
<footer class="footer" id="contact">
    <div class="footer-main">
        <div class="container">
            <div class="footer-info">
                <h2 class="footer__title section-title">
                    @lang('header.Kontaktlar')
                </h2>
                <div class="footer-info__wrap">
                    <div class="footer-info__item wow fadeInLeft" data-wow-delay=".4s">
                        <div class="footer-info__ico">
                            <img src="/img/icons/pin.svg" alt="ico">
                        </div>
                        <div class="footer-info__text">
                            <div>@lang('hader.address')</div>
                            <p>@lang('header.Chilonzor tumani')</p>
                        </div>
                    </div>
                    <div class="footer-info__item wow fadeInLeft" data-wow-delay=".5s">
                        <div class="footer-info__ico">
                            <img src="/img/icons/time.svg" alt="ico">
                        </div>
                        <div class="footer-info__text">
                            <div>@lang('header.ish vaqti')</div>
                            <p>09:00 - 18:00 @lang('Dushanba_Juma')</p>
                        </div>
                    </div>
                    <div class="footer-info__item wow fadeInLeft" data-wow-delay=".6s">
                        <div class="footer-info__ico">
                            <img src="/img/icons/tel.svg" alt="ico">
                        </div>
                        <div class="footer-info__text">
                            <div>@lang('header.Telefon')</div>
                            <p><a href="tel:+998713214543">+998 71 321 45 43</a></p>
                        </div>
                    </div>
                    <ul class="footer-info__social wow fadeInLeft" data-wow-delay=".7s">
                        <li>
                            <a href="#" target="_blank" rel="nofollow">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.5 10.5C20.5 5 16 0.5 10.5 0.5C5 0.5 0.5 5 0.5 10.5C0.5 15.5 4.125 19.625 8.875 20.375V13.375H6.375V10.5H8.875V8.25C8.875 5.75 10.375 4.375 12.625 4.375C13.75 4.375 14.875 4.625 14.875 4.625V7.125H13.625C12.375 7.125 12 7.875 12 8.625V10.5H14.75L14.25 13.375H11.875V20.5C16.875 19.75 20.5 15.5 20.5 10.5Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="nofollow">
                                <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.8749 7.13537C7.24359 4.79631 10.8236 3.25426 12.6148 2.50922C17.7292 0.381975 18.7919 0.0124503 19.4846 0.000118295C19.6369 -0.00243528 19.9776 0.0353203 20.1982 0.214361C20.3845 0.36554 20.4358 0.569761 20.4603 0.713095C20.4848 0.856429 20.5154 1.18295 20.4911 1.43808C20.214 4.35012 19.0147 11.4169 18.4046 14.6784C18.1465 16.0585 17.6382 16.5212 17.1461 16.5665C16.0766 16.6649 15.2645 15.8597 14.2287 15.1807C12.6078 14.1182 11.6921 13.4568 10.1188 12.42C8.30053 11.2218 9.47923 10.5633 10.5154 9.48699C10.7866 9.20533 15.4987 4.91933 15.5899 4.53052C15.6013 4.48189 15.6119 4.30063 15.5042 4.20492C15.3965 4.10921 15.2376 4.14194 15.1229 4.16797C14.9604 4.20487 12.371 5.91634 7.35486 9.30237C6.61988 9.80707 5.95416 10.053 5.3577 10.0401C4.70015 10.0259 3.43528 9.66829 2.49498 9.36264C1.34166 8.98774 0.425027 8.78953 0.504845 8.15284C0.546419 7.82121 1.0031 7.48205 1.8749 7.13537Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="nofollow">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.875 2.125C13.625 2.125 14 2.125 15.125 2.125C16.125 2.125 16.625 2.375 17 2.5C17.5 2.75 17.875 2.875 18.25 3.25C18.625 3.625 18.875 4 19 4.5C19.125 4.875 19.25 5.375 19.375 6.375C19.375 7.5 19.375 7.75 19.375 10.625C19.375 13.5 19.375 13.75 19.375 14.875C19.375 15.875 19.125 16.375 19 16.75C18.75 17.25 18.625 17.625 18.25 18C17.875 18.375 17.5 18.625 17 18.75C16.625 18.875 16.125 19 15.125 19.125C14 19.125 13.75 19.125 10.875 19.125C8 19.125 7.75 19.125 6.625 19.125C5.625 19.125 5.125 18.875 4.75 18.75C4.25 18.5 3.875 18.375 3.5 18C3.125 17.625 2.875 17.25 2.75 16.75C2.625 16.375 2.5 15.875 2.375 14.875C2.375 13.75 2.375 13.5 2.375 10.625C2.375 7.75 2.375 7.5 2.375 6.375C2.375 5.375 2.625 4.875 2.75 4.5C3 4 3.125 3.625 3.5 3.25C3.875 2.875 4.25 2.625 4.75 2.5C5.125 2.375 5.625 2.25 6.625 2.125C7.75 2.125 8.125 2.125 10.875 2.125ZM10.875 0.25C8 0.25 7.75 0.25 6.625 0.25C5.5 0.25 4.75 0.500001 4.125 0.750001C3.5 1 2.875 1.375 2.25 2C1.625 2.625 1.375 3.125 1 3.875C0.750001 4.5 0.625 5.25 0.5 6.375C0.5 7.5 0.5 7.875 0.5 10.625C0.5 13.5 0.5 13.75 0.5 14.875C0.5 16 0.750001 16.75 1 17.375C1.25 18 1.625 18.625 2.25 19.25C2.875 19.875 3.375 20.125 4.125 20.5C4.75 20.75 5.5 20.875 6.625 21C7.75 21 8.125 21 10.875 21C13.625 21 14 21 15.125 21C16.25 21 17 20.75 17.625 20.5C18.25 20.25 18.875 19.875 19.5 19.25C20.125 18.625 20.375 18.125 20.75 17.375C21 16.75 21.125 16 21.25 14.875C21.25 13.75 21.25 13.375 21.25 10.625C21.25 7.875 21.25 7.5 21.25 6.375C21.25 5.25 21 4.5 20.75 3.875C20.5 3.25 20.125 2.625 19.5 2C18.875 1.375 18.375 1.125 17.625 0.750001C17 0.500001 16.25 0.375 15.125 0.25C14 0.25 13.75 0.25 10.875 0.25Z" fill="currentColor"/>
                                    <path d="M10.875 5.25C7.875 5.25 5.5 7.625 5.5 10.625C5.5 13.625 7.875 16 10.875 16C13.875 16 16.25 13.625 16.25 10.625C16.25 7.625 13.875 5.25 10.875 5.25ZM10.875 14.125C9 14.125 7.375 12.625 7.375 10.625C7.375 8.75 8.875 7.125 10.875 7.125C12.75 7.125 14.375 8.625 14.375 10.625C14.375 12.5 12.75 14.125 10.875 14.125Z" fill="currentColor"/>
                                    <path d="M16.375 6.375C17.0654 6.375 17.625 5.81536 17.625 5.125C17.625 4.43464 17.0654 3.875 16.375 3.875C15.6846 3.875 15.125 4.43464 15.125 5.125C15.125 5.81536 15.6846 6.375 16.375 6.375Z" fill="currentColor"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-map">
                <div id="map"></div>
            </div>
        </div>
    </div>
    <div class="footer-bot">
        <div class="container">
            <div class="footer-copy">
                @lang('header.Amin Toys')
            </div>
            <a href="https://www.novastudio.uz/" class="footer-nova" target="_blank" rel="nofollow">created by NovaS</a>
        </div>
    </div>
</footer>
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/jquery.inputmask.min.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/wow.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="/js/main.js"></script>
</body>
</html>
