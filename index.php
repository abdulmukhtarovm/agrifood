<?php

    $con = mysqli_connect("localhost", "root", "", "agrifood");

    if(!$con){
        die("Connection Error");
    }

    if(isset($_POST['send'])){
        if(empty($_POST['Name']) || empty($_POST['Email']) || empty($_POST['Phone']) || empty($_POST['Message']) ){
            echo "<script>alert('Please in the Blanks')</script>";
        }
        else{
            $UserName = $_POST['Name'];
            $UserEmail = $_POST['Email'];
            $UserPhone = $_POST['Phone'];
            $UserMessage = $_POST['Message'];

            $query = "insert into contact (Name, Email, Phone, Message) values('$UserName', '$UserEmail', '$UserPhone', '$UserMessage')";
            $result = mysqli_query($con,$query);

            if($result){
                echo "<script>alert('Спасибо')</script>";
            }
            else{
                echo "<script>alert('Please Check Your Query')</script>";
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Agrifood</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">
</head>

<body class="main-layout ">
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="lds-spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- end loader -->
    <!-- fixed navbar start -->
    <div class="fixed-navbar">
        <nav class="fixed-navbar__nav">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-6 logo_section">
                        <div class="logo">
                            <a href="index.php"><img class="w-100" src="img/logo-word.png" alt="#"></a>
                        </div>
                    </div>
                    <div class="burger pr-4 ml-auto d-flex d-lg-none">
                        <div class="burger1"></div>
                        <div class="burger2"></div>
                        <div class="burger3"></div>
                    </div>
                    <div class="col-9">
                        <div class="fixed-nav-list d-flex justify-content-end">
                            <ul class="d-flex">
                                <li><a href="about.php" class="fix-nav__link">О нас</a></li>
                                <li><a href="products.php" class="fix-nav__link">Продукты</a></li>
                                <li><a href="gallery.php" class="fix-nav__link">Галерея</a></li>
                                <li><a href="contact.php" class="fix-nav__link">Контакты</a></li>
                                <li><a href="https://goo.gl/maps/wZo4YTdY6nd5z76y6"
                                        class="location_icon_bottum_tt_link"><i class="fas fa-map-marker-alt"></i> Наш
                                        адрес</a></li>
                                <li><a href="mailto:agrifooduz@gmail.com" class="location_icon_bottum_tt_link"><i
                                            class="fas fa-envelope"></i> agrifooduz@gmail.com</a></li>
                                <li><a href="tel:+998946647600" class="location_icon_bottum_tt_link"><i
                                            class="fas fa-phone-alt"></i> +998946647600</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </div>
    <!-- fixed navbar end -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="img/logo-word.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><a href="https://goo.gl/maps/wZo4YTdY6nd5z76y6"
                                        class="location_icon_bottum_tt_link"><i class="fas fa-map-marker-alt"></i> Наш
                                        адрес</a></li>
                                <li><a href="mailto:agrifooduz@gmail.com" class="location_icon_bottum_tt_link"><i
                                            class="fas fa-envelope"></i> agrifooduz@gmail.com</a></li>
                                <li><a href="tel:+998946647600" class="location_icon_bottum_tt_link"><i
                                            class="fas fa-phone-alt"></i> +998946647600</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-8 location_icon_bottum">
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li> <a href="about.php">О нас</a> </li>
                                                <li><a href="products.php">Продукты</a></li>
                                                <li class="active"> <a href="index.php">Галерея</a> </li>
                                                <li><a href="contact.php">Контакты</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="images/search_icon.png"></button>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <main>
        <!-- end header -->

        <section class="slider_section">
            <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="img/home/banner.jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <h1>AGRI FOOD</h1>
                                <!-- <span>FARMING COMPANY</span> -->
                                <!-- <p>Мы не экономим на качестве перевозки и на условиях хранения, так как считаем своей
                                    основной целью распространение круп и семян в их неизменном качестве.</p> -->
                                <a class="moreaboutus" href="about.php">О нас</a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="img/home/banner.jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <h1>AGRI FOOD</h1>
                                <!-- <span>FARMING COMPANY</span> -->
                                <!-- <p>Мы не экономим на качестве перевозки и на условиях хранения, так как считаем своей
                                    основной целью распространение круп и семян в их неизменном качестве.</p> -->
                                <a class="moreaboutus" href="#about">О нас</a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide" src="img/home/banner.jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <h1>AGRI FOOD</h1>
                                <!-- <span>FARMING COMPANY</span> -->
                                <!-- <p>Мы не экономим на качестве перевозки и на условиях хранения, так как считаем своей
                                    основной целью распространение круп и семян в их неизменном качестве.</p> -->
                                <a class="moreaboutus" href="#about">О нас</a>

                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </section>
         <!-- product -->
         <div id="product" class="product">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Наш<span class="black"> каталог</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="product_box">
                                    <figure><img src="img/home/product-blog-card1.jpg" alt="#" />
                                        <h3>Маш нешлифованный</h3>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="product_box">
                                    <figure><img src="img/home/product-blog-card2.jpg" alt="#" />
                                        <h3>Маш шлифованный</h3>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="product_box">
                                    <figure><img src="img/home/product-blog-card3.jpg" alt="#" />
                                        <h3>Фасоль «Чёрный глаз»</h3>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="product_box">
                                    <figure><img src="img/home/product-blog-card6.jpg" alt="#" />
                                        <h3>Нут</h3>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="product_box">
                                    <figure><img src="img/home/product-blog-card4.jpg" alt="#" />
                                        <h3>Фасоль Кидни</h3>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="product_box">
                                    <figure><img src="img/home/product-blog-card5.jpg" alt="#" />
                                        <h3>Кунжут</h3>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->
        <!-- for_box -->
        <div class="for_box_bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="for_box">
                            <i><img src="img/icon/for-box1.png" alt="#" /></i>
                            <span>100+</span>
                            <h3>Специалистов</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="for_box">
                            <i><img src="img/icon/for-box2.png" alt="#" /></i>
                            <span>230+</span>
                            <h3>Скотов</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="for_box">
                            <i><img src="img/icon/for-box3.png" alt="#" /></i>
                            <span>5+</span>
                            <h3>Ферм</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                        <div class="for_box">
                            <i><img src="img/icon/for-box4.png" alt="#" /></i>
                            <span>40+</span>
                            <h3>Единицы техники</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end for_box -->
        <!-- offer -->
        <div class="offer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Наши<span class="black"> преимущества</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer-bg">
                <div class="container">
                    <div class="row">
                        <div class="h-100 col-xl-3 col-lg-3 col-md-3 col-sm-12 ">
                            <div class="offer_box">
                                <h3>Широкий ассортимент</h3>
                                <figure><img src="img/home/plus-blog-card1.png" alt="img" /></figure>
                                <p>100% натуральные и безопасные продукты. Никаких генных модификаций Никаких
                                    посторонних
                                    препаратов Только здоровая почва и правильный уход.</p>

                            </div>
                        </div>
                        <div class="h-100 col-xl-3 col-lg-3 col-md-3 col-sm-12 ">
                            <div class="offer_box">
                                <h3>Неизменное <br> качество</h3>
                                <figure><img src="img/home/plus-blog-card2.png" alt="img" /></figure>
                                <p>Наши специалисты контролируют условия хранения продуктов на всех этапах, и не
                                    допустят к
                                    отправке продукт не соответствующий заявленному качеству.</p>
                            </div>
                        </div>
                        <div class="h-100 col-xl-3 col-lg-3 col-md-3 col-sm-12 ">
                            <div class="offer_box">
                                <h3>Проверенное сотрудничество </h3>
                                <figure><img src="img/home/plus-blog-card3.png" alt="img" /></figure>
                                <p>Мы сотрудничаем только с теми компаниями, которые успели зарекомендовать себя на
                                    рынке
                                    международных перевозок.</p>
                            </div>
                        </div>
                        <div class="h-100 col-xl-3 col-lg-3 col-md-3 col-sm-12 ">
                            <div class="offer_box">
                                <h3>Современные технологии</h3>
                                <figure><img src="img/home/plus-blog-card4.png" alt="img" /></figure>
                                <p>Мы используем  самые современные технологии переработки бобовых культур</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a class="read-more">Смотреть больше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end offer -->

      
         <!-- about -->
         <div id="about" class="about">
            <div class="container">
                <div class="row">

                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-l2">
                        <div class="about_box">
                            <h2>О нашей компании<br><span class="black"> AGRIFOOD</span></h2>
                            <p class="about_box-description">AGRIFOOD, основанная в 2019 году, на сегодняшний день стал одним из основных экспортеров
                                бобовой продукции в Узбекистане. На наших современных и высококачественно оборудованных
                                производственных мощностях в Ферганских и Ташкентских областях, мы перерабатываем
                                широкий ассортимент бобовой продукции в соответствии с последними стандартами.</p>

                            <button type="button" class="btn btn-primary about-more-btn" data-toggle="modal"
                                data-target="#MoreAbout">
                                Прочитать дальше
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="MoreAbout" tabindex="-1" role="dialog"
                                aria-labelledby="MoreAboutLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="MoreAboutLabel">Подробно о нашей компании</h5>
                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button> -->
                                        </div>
                                        <div class="modal-body">
                                            <p class="first-text">
                                                <span>AGRIFOOD</span>, основанная в 2019 году, на сегодняшний день стал
                                                одним из основных
                                                экспортеров бобовой продукции в Узбекистане. На наших современных и
                                                высококачественно оборудованных производственных мощностях в Ферганских
                                                и
                                                Ташкентских областях, мы перерабатываем широкий ассортимент бобовой
                                                продукции в соответствии с последними стандартами. Наша специализации
                                                это
                                                предоставления качественной бобовой продукции по всему миру.
                                            </p>
                                            <p class="second-text">
                                                <span>AGRIFOOD</span> ведет активную деятельность и принимает лучшие
                                                решения чтобы
                                                удовлетворить все требования клиента. Эти решения являются результатом
                                                тесного общения с нашими заказчиками, начиная от очистки и калибровки
                                                продукции, заканчивая доставкой до места назначения.
                                            </p>
                                            <p class="third-text">
                                                AGRIFOOD является запатентованным брендом следующих компаний:</p>
                                            <ul>
                                                <li>ООО “AGRIFOOD EXPORT”</li>
                                                <li>OOO “JINJU TRADE”</li>
                                            </ul>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Закрыть</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-l2">
                        <div class="about_img">
                            <iframe width="665" height="577" src="https://www.youtube.com/embed/RTzBmkGICR8"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen=""></iframe>
                            <!-- <figure><img src="img/logo.png" alt="img" /></figure> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about -->
        <!-- clients -->
        <!-- <div class="testimonial clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Отзывы</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="clients_red">
            <div class="container">
                <div class="testimonial_slider carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                        <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                        <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="testomonial_section">

                                <div class="full testimonial_cont text_align_center cross_layout">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                            <div class="testomonial_img">
                                                <i><img src="./img/testimonials/testimonial-person.jpg"
                                                        alt="#" /></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                            <div class="cross_inner">
                                                <h3>Abdulloh Ikasimov<br><span class="ornage_color">kOkO agency</span>
                                                </h3>
                                                <p><i class="far fa-quote-left"></i> ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                    ullamco
                                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                    dolor
                                                    in reprehenderit in voluptate velit
                                                    <i class="far fa-quote-right"></i>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item active">

                            <div class="testomonial_section">
                                <div class="full center">
                                </div>
                                <div class="full testimonial_cont text_align_center cross_layout">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                            <div class="testomonial_img">
                                                <i><img src="./img/testimonials/testimonial-person.jpg"
                                                        alt="#" /></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                            <div class="cross_inner">
                                                <h3>Abdulloh Ikasimov<br><span class="ornage_color">kOkO agency</span>
                                                </h3>
                                                <p><i class="far fa-quote-left"></i> ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                    ullamco
                                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                    dolor
                                                    in reprehenderit in voluptate velit
                                                    <i class="far fa-quote-right"></i>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="carousel-item">

                            <div class="testomonial_section">
                                <div class="full center">
                                </div>
                                <div class="full testimonial_cont text_align_center cross_layout">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                            <div class="testomonial_img">
                                                <i><img src="./img/testimonials/testimonial-person.jpg"
                                                        alt="#" /></i>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                            <div class="cross_inner">
                                                <h3>Abdulloh Ikasimov<br><span class="ornage_color">kOkO agency</span>
                                                </h3>
                                                <p><i class="far fa-quote-left"></i> ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore
                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                    ullamco
                                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                    dolor
                                                    in reprehenderit in voluptate velit
                                                    <i class="far fa-quote-right"></i>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- end clients -->
        <!-- contact -->

        <div id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Наши <span class="black">контакты</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-0">
                    <div class="map_section">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <form action="index.php" method="post" class="main_form">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input placeholder=" " class="name form-control" type="text" name="Name" required>
                                            <label class="contact-label" for="name">Имя</label>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input placeholder=" " class="mail form-control" type="text" name="Email" required>
                                            <label class="contact-label" for="mail">Почта</label>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input placeholder=" " class="phone form-control" type="text" name="Phone" required>
                                            <label class="contact-label" for="phone">Номер телефона</label>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <textarea placeholder=" " class="message textarea" type="text"
                                                name="Message" required></textarea><label class="contact-label"
                                                for="message">Сообщение</label>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button class="send" name="send" type="submit">Отправить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-h400">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5041.016221766904!2d69.28287583745825!3d41.300026640485676!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8ad3b3ca9859%3A0x3530aca5157b3d9!2zMSwgNCBTb2RpcSBBemltb3Yga28nY2hhc2ksINCi0L7RiNC60LXQvdGCLCDQo9C30LHQtdC60LjRgdGC0LDQvQ!5e0!3m2!1sru!2sus!4v1643263650216!5m2!1sru!2sus"
                                    width="100%" height="100%" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- end contact -->
    </main>

    <!-- footer -->
    <footer>
        <div class="footer top_layer ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 sm-display-none">
                        <div class="address">
                            <a href="index.php"> <img width="210" src="img/logo.png" alt="logo" /></a>
                            <h2>Высокое качество продукта</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 sm-display-none">
                        <div class="address">
                            <h3>Быстрые ссылки</h3>
                            <ul class="Links_footer">
                                <li><i class="far fa-chevron-down"></i> <a href="index.php">Главная</a> </li>
                                <li><i class="far fa-chevron-down"></i> <a href="about.php">О нас</a> </li>
                                <li><i class="far fa-chevron-down"></i> <a href="products.php">Продукты</a> </li>
                                <li><i class="far fa-chevron-down"></i> <a href="gallery.php">Блог</a> </li>
                                <li><i class="far fa-chevron-down"></i> <a href="contact.php">Контакты</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Связи с нами</h3>
                            <ul class="loca">
                                <li>
                                    <a href="mailto:agrifooduz@gmail.com"><i
                                            class="fas fa-envelope"></i>agrifooduz@gmail.com</a>
                                </li>
                                <li>
                                    <a href="tel:+998946647600"><i class="fas fa-phone-alt"></i>+998946647600</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Наши адреса</h3>
                            <ul class="loca">
                                <li>
                                    <a href="https://goo.gl/maps/wZo4YTdY6nd5z76y6"><i style="transform: translate(5px 25px);"
                                            class="fas fa-map-marker-alt"></i> Узбекистан, Ташкентская область,
                                        Букинский район, Каракуйли, Бешкапа МФЙ </a>
                                </li>
                                <li style="font-size: 14px;">
                                    <a href="https://goo.gl/maps/RVArDoEv33MjAj7t9"><i style="transform: translate(5px 25px);"
                                            class="fas fa-map-marker-alt"></i> Узбекистан, Ферганская область, Бешарыкский район, Янги Бахмал МФЙ</a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <p>© 2022 Разработано в <a href="http://kokoagency.uz/">kokoagency</a></p>

            </div>
        </div>
    </footer>
    <!-- <div class="scrollup"> -->
    <a class="scrollup" href="#">
        <i class="far fa-chevron-up"></i>
    </a>
    <!-- </div> -->
    <!-- end footer -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function () {

                $(this).addClass('transition');
            }, function () {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script src="./js/main.js"></script>
</body>

</html>