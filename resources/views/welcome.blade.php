<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>Regal Tour Bukhara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon.ico"> --}}

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="#000" name="msapplication-TileColor">
    <meta content="#000" name="theme-color">

    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
                k, a)
        })
        (window, document, "script", "../mc.yandex.ru/metrika/tag.js", "ym");

        ym(64713664, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/64713664" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="header__top">
                        <div class="tel">
                            <a href="tel:0000000000">+998 97 722 66 56</a>
                        </div>
                        <div class="email">
                            <a href="mailto:bbiznestg@gmail.com">bbiznestg@gmail.com</a>
                        </div>
                        <div class="socials">
                            <a href="#" class="a facebook"></a>
                            <a href="#" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="#" class="a twitter"></a>
                        </div>
                    </div>
                    <div class="header__bottom">
                        <a href="" class="logo" style="font-weight: bold">Regal Tour</a>
                        <div class="menu" id="js-menu">
                            <div class="close"></div>
                            <div class="scroll">
                                <a class="current">Home</a>
                                <div class="scroll_wrap">
                                    <ul>
                                        <li><a href="" class="active">Home</a></li>
                                        <li class="dropdown_li">
                                            <a href="#">
                                                <span>Фотогалерея</span>
                                            </a>
                                        </li>
                                        <li class="dropdown_li">
                                            <a href="">
                                                <span>Популярные место</span>
                                            </a>
                                        </li>
                                        <li><a href="">Страны</a></li>
                                        <li class="dropdown_li">
                                            <a href="">
                                                <span>Контакты</span>
                                            </a>
                                        </li>
                                        <li class="dropdown_li">
                                            <a href="">
                                                <span>Блог</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bottom">
                                    <div class="tel">
                                        <a href="tel:+11235678910">+1 1235 6789 10</a>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:info@hellodigi.ru">info@hellodigi.ru</a>
                                    </div>
                                    <div class="socials">
                                        <div class="links">
                                            <a href="#" class="fb"></a>
                                            <a href="#" class="instagram"></a>
                                            <a href="#" class="pinterest"></a>
                                            <a href="#" class="twitter"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_link" id="search_link"></div>
                        <div class="mobile_btn" id="mobile_btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="homepage_slider">
            <div class="slider-container">
                <div class="slider-control left inactive"></div>
                <div class="slider-control right"></div>
                <ul class="slider-pagi"></ul>
                <div class="slider">

                    @foreach ($banners as $item)
                        <div
                            @if ($loop->index == 0) class="slide slide-{{ $loop->index }} active"
                            @else
                                class="slide slide-{{ $loop->index }}" @endif>
                            <div class="slide__bg" style="background-image: url({{ $item->photo }});"></div>
                            <div class="slide__content">
                                <div class="slide__text">
                                    <h2 class="slide__text-heading">{{ $item->name_ru }}</h2>
                                    <p class="slide__text-desc">
                                        {{ $item->description_ru }}
                                    </p>
                                    <div class="slide__controls">
                                        <a href="" class="btn">Забронировать тур</a>
                                        <a href="" class="btn btn__choose_tour">Фотогалерея</a>
                                        <a class="arrow next"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="most_popular">
                <span>
                    Самое популярное место в этом году
                </span>
            </div>

        </div>
        <div class="most_popular__section mainpage-slider">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="top_part">
                        <div class="top_part_left">
                            <p class="section_subtitle">POPULARLY</p>
                            <h2 class="section_title">
                                Самый популярный <br> места отдыха
                            </h2>
                        </div>
                        <div class="top_part_right">
                            <a href="" class="btn">
                                <span>Все</span>
                            </a>
                            <div class="controls" id="most_popular__arrows">
                                <div class="arrow prev"></div>
                                <div class="arrow next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="most_popular__section__slider" id="most_popular__slider">

                        @foreach ($popularies as $pop)
                            <a class="slider_item" style="background-image: url({{ $pop->photo }})">
                                <div class="slider_item__content">
                                    <div class="rating">
                                        <div class="stars">
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star"></div>
                                        </div>
                                        <div class="reviews_count">
                                            ({{ $pop->rew }} - туристы)
                                        </div>
                                    </div>
                                    <h3 class="title">
                                        {{ $pop->name_ru }} | {{ $pop->country->price }}
                                    </h3>
                                    <p class="description">
                                        {{ $pop->description_ru }}
                                    </p>
                                    <div class="days">
                                        <span>{{ $pop->country->days }} дней</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="popular_destination__section mainpage-slider">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="top_part">
                        <div class="top_part_left">
                            <div class="section_subtitle">
                                TOP CITIES
                            </div>
                            <h2 class="section_title">
                                Популярные Городы
                            </h2>
                        </div>
                        <div class="top_part_right">
                            <a href="" class="btn">
                                <span>Все</span>
                            </a>
                            <div class="controls" id="popular_destination__arrows">
                                <div class="arrow prev"></div>
                                <div class="arrow next"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section_content">
                        <div class="popular_destination__slider" id="popular_destination__slider">

                            @foreach ($destinations as $des)
                                <div class="slide_item">
                                    <a href="" class="slide_item_img">
                                        <div class="sq_parent">
                                            <div class="sq_wrap">
                                                <div class="sq_content"
                                                    style="background-image: url({{$des->photo}})">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="slide_item_content">
                                        <h3 class="slide_title">
                                            {{$des->name_ru}}
                                        </h3>
                                        <p class="slide_text">
                                            {{$des->description_ru}}
                                        </p>
                                    </a>
                                    <div class="slide_footer">
                                        <div class="hours">15 Городы</div>
                                        <div class="tours_link">
                                            <a href="">Все</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="top_destination mainpage-slider">
            <div class="section_heading">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="section_subtitle">
                            TOP COUNTRIES
                        </div>
                        <h2 class="section_title">
                            Популярные Страны
                        </h2>
                    </div>
                </div>
            </div>
            <div class="section_content popular_destination__content">
                <div class="wrap">
                    <div class="wrap_float">
                        
                        @foreach ($countries as $con)
                        <a href="" class="item">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content image" style="background-image: url({{$con->photo}})">
                                    </div>
                                    <span>{{$con->name_ru}}</span>
                                </div>
                            </div>
                        </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="blog blog-section last-section" style="background-image: url(assets/img/home.jpg);">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="top_part">
                        <div class="section_subtitle">
                            BLOG
                        </div>
                        <h2 class="section_title">
                            Туризм в Узбекистане
                        </h2>
                        <div class="section_description">
                            Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit
                            sit amet non magna. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor
                        </div>
                    </div>
                    <div class="section_content">
                        <a href="" class="blog_item">
                            <div class="blog_item_img">
                                <img src="assets/img/articles/ar1.jpg" alt="">
                            </div>
                            <div class="blog_item_date">
                                JUNE 6/2019 | UNCATEGORIZED
                            </div>
                            <h3 class="blog_item_title">
                                Pack wisely before traveling
                            </h3>
                            <p class="blog_item_text">
                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                of spring which I enjoy with my whole heart.
                            </p>
                        </a>
                        <a href="" class="blog_item">
                            <div class="blog_item_img">
                                <img src="assets/img/articles/ar2.jpg" alt="">
                            </div>
                            <div class="blog_item_date">
                                JUNE 6/2019 | UNCATEGORIZED
                            </div>
                            <h3 class="blog_item_title">
                                Pack wisely before traveling
                            </h3>
                            <p class="blog_item_text">
                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                                of spring which I enjoy with my whole heart.
                            </p>
                        </a>
                    </div>
                    <div class="show-more">
                        <a href="" class="btn">
                            <span>Все</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer_top">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="footer_head_mobile">
                            <div class="logo">Regal Tour</div>
                            <div class="text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.
                            </div>
                        </div>
                        <div class="footer_top_menu">
                            <ul>
                                <li><a href="" class="active">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Tour List</a></li>
                                <li><a href="">Destinations</a></li>
                                <li><a href="">Date & Pricing</a></li>
                                <li><a href="">Blog</a></li>
                            </ul>
                        </div>
                        <div class="socials">
                            <a href="#" class="a facebook"></a>
                            <a href="#" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="#" class="a twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_center">
                <div class="wrap">
                    <div class="wrap_float">
                        <div class="footer_center_left">
                            <a href="" class="logo">Regal Tour</a>
                            <div class="text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.
                            </div>
                        </div>
                        <div class="footer_center_menu">
                            <ul>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Family Friendly Tours</a></li>
                                <li><a href="#">Outdoor Activites</a></li>
                                <li><a href="#">Relaxation Tours</a></li>
                                <li><a href="#">City Tours</a></li>
                                <li><a href="#">Holiday & Seasonal Tours</a></li>
                                <li><a href="#">Cultural & Thematic Tours</a></li>
                                <li><a href="#">Wild & Adventure Tours</a></li>
                            </ul>
                        </div>
                        <div class="footer_center_right">
                            <div class="_title">CONTACTS</div>
                            <div class="text">
                                <p>Address: <b>Uzbekisan, Bukhara, Kagan city</b> </p>
                                <p>Phone: <a href="#">+99897 722 66 56</a></p>
                                <p><a href="#">bbiznestg@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="mobile_socials">
                            <a href="#" class="a facebook"></a>
                            <a href="#" class="a instagram"></a>
                            <a href="#" class="a pinterest"></a>
                            <a href="#" class="a twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                Copyright 2020 <a href="#">hellodigi.ru</a> | All Right Reserved
            </div>
        </div>
    </div>

    <div class="search_form" id="search_form">
        <div class="wrap">
            <div class="wrap_float">
                <input type="text" class="input" placeholder="Search...">
                <button type="submit" class="submit"></button>
                <div class="close"></div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>


    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRlMuSMnjgxj3pYTV1twDBQuay-TjgmZ8&amp;callback=initMap">
    </script>
    <script defer src="js/jquery.min.js"></script>
    <script defer src="js/jquery-ui.min.js"></script>
    <script defer src="js/slick.min.js"></script>
    <script defer src="js/jquery.arcticmodal.min.js"></script>
    <script defer src="js/lightgallery.js"></script>
    <script defer src="js/spincrement.min.js"></script>
    <script defer src="js/scripts.min.js"></script>
</body>

<!-- Mirrored from lavella.hellodigi.ru/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2023 19:16:24 GMT -->

</html>
