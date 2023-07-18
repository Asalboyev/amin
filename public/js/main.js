$(window).on('load', () => {

    let rootFont = parseInt($(':root').css('font-size'))


    $('.preloader').delay(500).fadeOut(800)

    //________MENU__________

    $('.header-mobile').click(() => {
        $('.mobile-menu').addClass('active')
    })

    $('.mobile-menu__close').click(() => {
        $('.mobile-menu').removeClass('active')
    })

    //_________FEEDBACK__________

    $('.feedback-open').click(e => {
        e.preventDefault()
        $('.feedback').fadeIn(600); 
    })




    $('.feedback').click(e => {
        let div = $(".feedback-content")
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.feedback').fadeOut(600)
        }
    })



    //_________MAIN__________

    const container = $('.main-carousel__circle')
    const numImages = $('.main-carousel__circle img').length
    const containerWidth = container.width()
    const containerHeight = container.height()
    const imgWidth = $('.main-carousel__circle img').width()
    const imgHeight = $('.main-carousel__circle img').height()
    
    const diagonal = Math.sqrt(containerWidth * containerWidth + containerHeight * containerHeight)
    const radius = (diagonal / 2 - Math.max(imgWidth, imgHeight) / 2) * .9
    
    $('.main-carousel__circle img').each((index, item) => {
        const angle = (2 * Math.PI) / numImages * index
        const posX = containerWidth / 2 + radius * Math.cos(angle) - imgWidth / 2
        const posY = containerHeight / 2 + radius * Math.sin(angle) - imgHeight / 2
        $(item).css('left', posX + 'px')
        $(item).css('top', posY + 'px')
    })

    let currentImage = 0
    let rotateAngle = 360/numImages
    let lastIndex = numImages - 1

    let changeImage = () => {
        let currentIndex
        if(currentImage >= numImages) {
            currentIndex = currentImage % numImages
        } else if(currentImage < 0) {
            currentIndex = currentImage % numImages * (-1)
        } else {
            currentIndex = currentImage
        }
        container.css('transform', `rotate(${rotateAngle * currentImage}deg)`)
        $('.main-carousel__circle img').css('transform', `rotate(${-rotateAngle * currentImage}deg)`)

        $('.main-carousel__img img').eq(0).css({
            opacity: '0',
            transition: 'none',
            transform: 'scale(0)'
        })

        $('.main-carousel__img img').eq(1).css({
            transition: 'none',
            opacity: '1',
        })

        $('.main-carousel__img img').eq(1).attr('src', $('.main-carousel__circle img').eq(lastIndex).attr('src'))
        setTimeout(() => {
            $('.main-carousel__img img').eq(0).attr('src', $('.main-carousel__circle img').eq(currentIndex).attr('src'))
            $('.main-carousel__img img').eq(0).css({
                opacity: '1',
                transform: 'scale(1)',
                transition: '.4s all',
            })
        }, 100)

        setTimeout(() => {
            $('.main-carousel__img img').eq(1).css({
                opacity: '0',
                transition: '.4s all',
            })
        }, 200)
        

        lastIndex = currentIndex
    }

    changeImage()

    $('.main-carousel__arrows .arrow-right').click(function() {
        currentImage++
        changeImage()
    })

    $('.main-carousel__arrows .arrow-left').click(function() {
        currentImage--
        changeImage()
    })




    //_________SHOP__________


    $('.shop-carousel').owlCarousel({
        dots: false,
        nav: false,
        smartSpeed: 700,
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        margin: rootFont*1.5,
        responsive: {
            0: {
                items: 1,
                stagePadding: rootFont*2,
                margin: rootFont,
            },

            500: {
                items: 2,
            },
    
            992: {
                items: 3,
            },
        }

    })

    $('.shop-arrows .arrow-left').click(() => {
        $('.shop-carousel').trigger('prev.owl.carousel', [700]);
    })
    
    $('.shop-arrows .arrow-right').click(() => {
        $('.shop-carousel').trigger('next.owl.carousel', [700]);  
    })



    //_________PRODUCTS__________

    $('.products-item__zoom').click(function(e) {
        e.preventDefault()
        let img = $(this).parents('.products-item').find('.products-item__img img ').attr('src')
        $('.products-zoom__img img ').attr('src', img)
        $('.products-zoom').fadeIn(600)
    })


    $('.products-zoom').click(e => {
        let div = $('.products-zoom__img')
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.products-zoom').fadeOut(600)
        }
    })



    $('.product-carousel').owlCarousel({
        dots: false,
        nav: false,
        smartSpeed: 700,
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        margin: rootFont*1.5,
        responsive: {
            0: {
                items: 2,
                margin: rootFont,
            },
    
            992: {
                items: 4,
            },
        }
    })

    $('.product-arrows .arrow-left').click(() => {
        $('.product-carousel').trigger('prev.owl.carousel', [700]);
    })
    
    $('.product-arrows .arrow-right').click(() => {
        $('.product-carousel').trigger('next.owl.carousel', [700]);  
    })


    let showProduct = (index) => {
        let img = $('.product-gallery__thumb').eq(index).find('img').attr('src')
        $('.product-gallery__img img').attr('src', img)
    }

    showProduct(0)

    $('.product-gallery__thumb').click(function() {
        let index = $(this).index()
        showProduct(index)
    })

    $('.product-desc__btn').click(function() {
        $(this).toggleClass('active')
        $('.product-desc__main').slideToggle(500)
    })


    //_____________MAP________________

    ymaps.ready(init);
    function init() {
        var myMap = new ymaps.Map("map", {
            center: [41.26718911400398, 69.18868093863472],
            zoom: 13,
        }, {
            searchControlProvider: 'yandex#search'
        },
    );
    myMap.geoObjects
    .add(new ymaps.Placemark([41.26718911400398, 69.18868093863472], {
    }, {
        iconLayout: 'default#image',
        iconImageHref: 'img/icons/marker.svg',
        iconImageSize: [40, 55],
    }))
    }


    //_____________INPUTMASK__________


    $('.form_tel').inputmask("+\\9\\98 99 999 99 99")

    $('.form_name').on('keydown', function(e) {
        const key = e.key;
        if (!/^[a-zA-Zа-яА-Я\s]*$/.test(key)) {
            e.preventDefault();
        }
    })


    
    //__________WOW____________


    new WOW({
        offset: 50,
        mobile: false, 
    }).init();



    //_______PARALLAX_______

    let parallax = function(event) {

        const x1 = (window.innerWidth - event.pageX ) / 90;
        const y1 = (window.innerHeight - event.pageY) / 90;

        const x2 = -(window.innerWidth - event.pageX) / 140;
        const y2 = -(window.innerHeight - event.pageY) / 140;

        $('#helicopter1').css('transform', `translateX(${x1}px) translateY(${y1}px)`)
        $('#helicopter2').css('transform', `translateX(${x2}px) translateY(${y2}px)`)
    }

    $('body').on('mousemove', parallax)
    

    let scrollTop = $(window).scrollTop()

    
    $(window).on('scroll', function() {
        let windowHeight = $(window).height()
        scrollTop = $(window).scrollTop()

        $('.balloons img').each(function() {
            let cardOffset = $(this).offset().top
            
            if (scrollTop + windowHeight > cardOffset) {
                let parallaxValue = (scrollTop + windowHeight - cardOffset) / 7
                $(this).css('transform', 'translateY(-' + parallaxValue + 'px)')
            }
        })
    })



})