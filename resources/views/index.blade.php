<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Студия рекламы KOLOSOK</title>
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/icon" sizes="any">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<body class="load-script" id="hideAll">
<nav class="navigation-top-menu-block">
    <div class="navigation-top-menu container-ExLg">
        <div class="menu-first_block">
            <a class="menu-logo-site" href="{{ route('main_page') }}"><img class="menu-logo-site__style" src="{{ asset('img/Kolosok_Logo.png') }}" height="50px"></a>
        </div>

        <div class="menu-second_block">
            <div class="menu_second-lvl__btn">
                <a href="#services_block" class="menu-btn-style menu-btn-style-1">Услуги</a>
                <a href="#our-works_block" class="menu-btn-style menu-btn-style-2">Наши работы</a>
                <a href="#trust-company_block" class="menu-btn-style menu-btn-style-3">Нам доверяют</a>
                <a href="#contact_block" class="menu-btn-style menu-btn-style-4">Контакты</a>
            </div>
        </div>

        <div class="menu-third_block">
            <a href="tel:+73519495252" class="contact-number">+7 3519 49-52-52</a>
            <a href="mailto:info@kolosmgn.ru" class="contact-email">info@kolosmgn.ru</a>
            <a href="#contact-form" class="btn_order_a_call_style-btn">заказать звонок</a>
        </div>

        <div class="menu-four_block">
            <div id="burger-icon">
                <span></span>
            </div>
        </div>
    </div>
</nav>

<main>
    <section class="c-section">
        <div class="c-hero-full-height">
            <div class="c-hero_photo">
                <img class="background-img" src="{{ asset('img/background-main-page.jpg') }}">
                <a class="scroll-down" aria-label="Scroll to content" href="#services_block">
                    <svg width="16" height="46" viewBox="0 0 16 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.8339 36.4667L8.92883 42.1303L8.92883 -3.09091e-07L7.2913 -3.8067e-07L7.29129 42.1064L1.36143 36.4667L0.195311 37.5899L8.11006 45.1174L16 37.5899L14.8339 36.4667Z" fill="white"></path>
                    </svg>
                </a>
            </div>
            <div class="c-hero_container">
                <div class="container-ExLg">
                    <div class="slogan-legend">С 2014 года мы разрабатываем дизайн и изготавливаем различные виды полиграфической продукции, брендированной сувенирной продукции и мерча для продвижения Вашего бизнеса. А также производим и монтируем таблички, баннеры и вывески.</div>
                    <div class="logo-site-company">
                        <img class="logo-mod" src="{{ asset('img/Kolosok_Logo2.png') }}" height="230px" alt="KOLOSok">
                    </div>
                    <div class="slogan-company">
                        Лучшие решения для Вашего бизнеса!
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="block-services" id="services_block">
        <div class="container-ExLg">
            <div class="heading-div slogan-services">
                Предоставляемые нами услуги
            </div>
            <div class="printing-services title-div" data-aos="fade-right" data-aos-once="true">
                <div class="block-content-wrap">
                    <div class="square-div-style square-1">
                        <div class="square-first-lvl">
                            <div class="title-content">Оперативная <b>полиграфия</b></div>
                            <div class="square-div__content">
                                Визитки, листовки, брошюры, буклеты, открытки, каталоги, плакаты, блокноты, наклейки, календари
                            </div>
                        </div>
                        <div class="square-second-lvl">
                            <img class="square-img-front" src="{{ asset('img/services_photo/1-poligraph.png') }}">
                        </div>
                    </div>
                    <div class="square-div-style square-2">
                        <div class="square-first-lvl">
                            <div class="title-content"><b>Брендированная</b> продукция</div>
                            <div class="square-div__content">
                                Ежедневники, ручки, пакеты, браслеты, электроника, одежда, текстиль, корпоративные подарочные наборы, награды, зонты, спортивные товары
                            </div>
                        </div>
                        <div class="square-second-lvl">
                            <img class="square-img-front" src="{{ asset('img/services_photo/2-combo.png') }}">
                        </div>
                    </div>
                    <div class="square-div-style square-3">
                        <div class="square-first-lvl">
                            <div class="title-content">Наружная <b>реклама</b></div>
                            <div class="square-div__content">
                                Вывески, баннеры, панель-кроншейн, таблички, стенды, штендеры, картины на холсте
                            </div>
                        </div>
                        <div class="square-second-lvl">
                            <img class="square-img-front" src="{{ asset('img/services_photo/3-viveska.png') }}">
                        </div>
                    </div>
                    <div class="square-div-style square-4">
                        <div class="square-first-lvl">
                            <div class="title-content"><b>Дизайн</b> и верстка</div>
                            <div class="square-div__content">
                                Фирменный стиль
                            </div>
                        </div>
                        <div class="square-second-lvl">
                            <img class="square-img-front" src="{{ asset('img/services_photo/4-verstka.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-once="true">
            <div class="block-content-wrap">
                <div class="technology-services">
                    <ul>
                        <li>Цифровая печать</li>
                        <li>Офсетная печать</li>
                        <li>Шелкография</li>
                    </ul>

                    <ul>
                        <li>Широкоформатная печать</li>
                        <li>Лазерная гравировка</li>
                        <li>Тампопечать</li>
                    </ul>

                    <ul>
                        <li>УФ печать</li>
                        <li>Постпечатная обработка</li>
                        <li>Ризография</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="block-our_works container" id="our-works_block">
        <div class="heading-div our_work-slogan">
            Наши работы
        </div>
        <div class="block-our-works_style" id="slider-our_works">
            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/1_combo.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/25_viveska_mgtu.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/3_otkritka.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/4_jurnal_metallurg.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/5_bottle.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/6_braslet2.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/7_brelok.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/8_braslet.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/9_flagok.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/10_combo2.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/11_jurnal.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/12_kalendar.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/13_kaska.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/14_konvert.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/15_korobka.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/16_kepka.jpg') }}">
            </div>

            <div  class="our_work-slider">
                <img class="our_works_photo" src="{{ asset('img/our_works/17_konvert_HB.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/18_paket.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/19_menu.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/20_paket_boots.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/21_tablicka.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/22_snow_toys.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/23_symka.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/24_tablichka_42.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/26_viveska_vesta.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/2_snachok.jpg') }}">
            </div>

            <div>
                <img class="our_works_photo" src="{{ asset('img/our_works/27_viveska.jpg') }}">
            </div>
        </div>
    </div>
    <div class="order_application_form">
        <div class="block-trust_us container" id="trust-company_block">
            <div class="heading-div trust-slogan">
                Нам доверяют
            </div>
            <div class="block-trust_us_company-style" id="slider-logo">
                <div class="block-trust_us_company-style">
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/MMK.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/Metalurg.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/MZ.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/CMM.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/MAGNITOSTROY.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/MEK.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/BFM.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/UMK.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/MTK.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/MGTU.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/MGN.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/PRITACHENIE.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/I_WOMAN.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/TAMARA.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/VEKTOR.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/CDEK.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/DNS.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/FABRICANT.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/FITNES_FORMULA.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/FOMA.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/TV_IN.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/VIVI.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/ELLE_PARFUM.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/PN.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/PRIVE_MODA.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/LOXITAN.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/MILANO.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/FACT.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/RIO_LUXE.png') }}">
                </div>

                <div>
                    <img class="trust_company_photo" src="{{ asset('img/trusting companies/KING_POTATO.png') }}">
                </div>
            </div>
        </div>
        <div class="block-form-and-map" id="contact-form" data-aos="fade-up" data-aos-once="true" data-aos-delay="1000" data-aos-offset="0">
            <div class="ya-map" style="position:relative;overflow:hidden; width: 50%;">
                <iframe src="https://yandex.ru/map-widget/v1/-/CCUvnGSF2C" style="position:relative; width: 100%; height: 100%; border: 0"></iframe>
            </div>
            <form action="{{ route('storeMessage') }}" id="form-orders" class="from-content-flex" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="title-div-form">
                    <div class="heading-div buy_slogan">
                        Оставьте заявку уже сейчас!
                    </div>
                    Заполните форму и мы свяжемся с Вами!
                </div>
                <div class="form-first-level">
                    <label for="user_name" class="label-form-username">
                        <input class="form-input-username" id="user_name" type="text" name="name" placeholder="Ваше имя*" required>
                    </label>
                    <label class="label-form-useremail">
                        <input class="form-input-email" type="text" name="phone" placeholder="Ваша почта или телефон*" required>
                    </label>
                </div>
                <div class="form-second-level">
                    <label class="label-form-userphone">
                        <textarea class="form-input-textarea" name="text_message" placeholder="Текст сообщения* (не более 255 символов)"></textarea>
                    </label>

                    <input name="theme" type="hidden" style="display: none" class="form-input_theme" value='Новая заявка с Сайта! Дата: <?php
                    date_default_timezone_set("UTC");
                        $time = time();
                        $offset = 3;
                        $time += 5 * 3600;
                        echo date("d-m-Y H:i", $time);
                    ?>'>

                    <input id="label-form-file" type="file" name="file[]" class="form-input-file" multiple>
                    <label for="label-form-file" class="form-btn-style" title="Нажмите, чтобы добавить файл!">
                        <span class="form-file-text">Выберите файл</span>
                    </label>
                </div>
                <button type="submit" class="form-submit_btn">Оставить заявку</button>
            </form>
        </div>
        <div class="block-contacts" id="contact_block">
            <div class="container">
                <div class="logo-contact-center">
                    <img class="logo-filter-contact" src="{{ asset('img/Kolosok_Logo-graphite.png') }}" height="50px">
                </div>
                <div class="square-div-style__contact" data-aos="fade-up" data-aos-once="true">
                    <a href="tel:+73519495252" class="square-div-style__contact-block">
                        <div class="square-div-style__contact-block_ico">
                            <img src="{{ asset('img/contact_photo/contact-call.png') }}" width="40px" alt="Телефон">
                        </div>
                        <div class="square-div-style__contact-block_contact">
                            +7 3519 49-52-52
                        </div>
                    </a>
                    <a href="https://yandex.ru/maps/235/magnitogorsk/?ll=58.987794%2C53.419002&mode=poi&poi%5Bpoint%5D=58.987835%2C53.418860&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1710645700&z=19.72" target="_blank" class="square-div-style__contact-block">
                        <div class="square-div-style__contact-block_ico">
                            <img src="{{ asset('img/contact_photo/contact-map.png') }}" width="40px" alt="Карта">
                        </div>
                        <div class="square-div-style__contact-block_contact">
                            г. Магнитогорск, ул. Горького, 26
                        </div>
                    </a>
                    <a href="mailto:info@kolosmgn.ru" class="square-div-style__contact-block">
                        <div class="square-div-style__contact-block_ico">
                            <img src="{{ asset('img/contact_photo/contact-mail.png') }}" width="40px" alt="Почта">
                        </div>
                        <div class="square-div-style__contact-block_contact">
                            info@kolosmgn.ru
                        </div>
                    </a>
                    <div class="square-div-style__social-page">
                        <a href="https://vk.com/kolosokmgn" target="_blank"  class="square-div-style__contact-block">
                            <div class="square-div-style__contact-block_ico">
                                <img src="{{ asset('img/contact_photo/contact-vk.png') }}" width="40px" alt="Вконтакте">
                            </div>
                        </a>
                    </div>
                    <div class="square-div-style__social-page">
                        <a href="https://api.whatsapp.com/send?phone=79090967723" target="_blank"  class="square-div-style__contact-block">
                            <div class="square-div-style__contact-block_ico">
                                <img src="{{ asset('img/contact_photo/contact-whatsapp.png') }}" width="40px" alt="WhatsApp">
                            </div>
                        </a>
                    </div>
                    <div class="square-div-style__social-page">
                        <a href="viber://chat?number=+79090967723" target="_blank"  class="square-div-style__contact-block">
                            <div class="square-div-style__contact-block_ico">
                                <img src="{{ asset('img/contact_photo/contact-viber.png') }}" width="40px" alt="Viber">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="footer-block">
    <div class="footer-block__content container">
        © 2013-<?php echo date('Y'); ?> KOLOSOK. Все права защищены.
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#hideAll").removeClass("load-script");

        $('#slider-our_works').slick({
            ots: false,
            arrows: true,
            infinite: true,
            speed: 2000,
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 10000,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('#slider-logo').slick({
            rows: 2,
            dots: false,
            arrows: true,
            infinite: true,
            speed: 2000,
            slidesToShow: 6,
            slidesToScroll: 6,
            autoplay: true,
            autoplaySpeed: 8000,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });

        $(function() {
            $('#burger-icon').click(function(){
                $(this).toggleClass('open');
            });
        });

        let header = $('.navigation-top-menu'),
            scrollPrev = 0;
        $(window).scroll(function() {
            let scrolled = $(window).scrollTop();
            /*Скрытие шапки при скроллинге*/
            if ( scrolled > 150 && scrolled > scrollPrev ) {
                $('.navigation-top-menu-block').css('transform', 'translateY(-400%)');
            } else {
                $('.navigation-top-menu-block').css('transform', 'translateY(0%)');
            }
            scrollPrev = scrolled;
        });

        /*Скрипт ссылки-якоря*/
        $('a[href^="#"]').click(function(){
            let anchor = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(anchor).offset().top
            }, 1000);
        });

        jQuery.validator.addMethod("noSpace", function(value, element) {
            return value == '' || value.trim().length != 0;
        });
        jQuery.validator.addMethod("notnumbers", function(value, element) {
            return /^[а-яА-ЯёЁa-zA-Z]+$/.test(value);
        });
        jQuery.validator.addMethod("email_phone", function(value, element) {
            return /^([a-zA-Z0-9+])/.test(value);
        });
        jQuery.validator.addMethod('filesize', function (value, element,param) {

            var size=element.files[0].size;

            size=size/1024;
            size=Math.round(size);
            return this.optional(element) || size <=param ;

        }, );

        $("#form-orders").validate({
            errorClass: "error fail-alert",
            validClass: "valid success-alert",
            rules: {
                name : {
                    required: true,
                    minlength: 2,
                    maxlength: 50,
                    noSpace: true,
                    notnumbers: true,
                },
                phone: {
                    required: true,
                    minlength: 5,
                    maxlength: 50,
                    noSpace: true,
                    email_phone: true,
                },
                text_message:{
                    required: false,
                    maxlength: 255,
                }
            },
            messages : {
                name: {
                    minlength: "*Имя должно состоять не менее 2 символов",
                    maxlength: "*Имя должно состоять не более 50 символов",
                    required: "*Имя должно быть указано обязательно",
                    noSpace: "*Имя должно состоять не менее 2 символов",
                    notnumbers: "*Имя не должно содержать цифры и пробелов"
                },
                phone: {
                    minlength: "*Номер телефона или почта должны состоять не менее 5 символов",
                    maxlength: "*Номер телефона или почта должны состоять не более 50 символов",
                    required: "*Номер телефона или почта должны быть указаны обязательно",
                    noSpace: "*Номер телефона или почта должны состоять не менее 5 символов",
                    email_phone: "*При вводе почты, она не должна содержать кириллицу"
                },
                text_message: {
                    maxlength: "*Текст сообщения должен состоять не более 255 символов",
                }
            }
        });
        $('input[name=file\\[\\]]').rules('add', {
            required: true,
            extension: "jpg|jpeg|png|gif|svg|doc|docx|txt|pdf|pdfx|xlsx|xls|csv",
            filesize: 11000,
            messages: {
                required: "Обязательно закрепите файл",
                filesize : 'Файл должен быть размером не более 11МБ',
                extension: 'Прикрепите файлы с расширениями: jpg, .jpeg, .png, .gif, .svg, .doc, .docx, .txt, .pdf, .pdfx, .xlsx, .xls, .csv'
            }
        });


        AOS.init({
            offset: 100,
            duration: 500,
            easing: 'ease-in-quad',
            delay: 50,
        });
    });
</script>
</body>
</html>
