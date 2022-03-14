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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>

<body>
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
                                <li><a href="index.php" class="fix-nav__link">Главная</a></li>
                                <li><a href="about.php" class="fix-nav__link">О нас</a></li>
                                <li><a href="products.php" class="fix-nav__link">Продукты</a></li>
                                <li><a href="blog.php" class="fix-nav__link">Блог</a></li>
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
    <header>
        <div class="header header-product">
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
                                                <li class="active"> <a href="index.php">Главная</a> </li>
                                                <li><a href="about.php">О нас</a></li>
                                                <li><a href="contact.php">Контакты</a></li>
                                                <li> <a href="blog.php">Блог</a> </li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-about-content">

        </div>
    </header>
    <main>
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
                            <div class="col-12">
                                <form action="contact.php" method="post" class="main_form">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input placeholder=" " class="name form-control" type="text" name="Name" required>
                                            <label class="contact-label" for="name">Имя</label>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input placeholder=" " class="mail form-control" type="email" name="Email" required>
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
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="iframe-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6039.466245930355!2d69.286495!3d40.811858!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb10064add99b5275!2zNDDCsDQ4JzQyLjciTiA2OcKwMTcnMTEuNCJF!5e0!3m2!1sru!2s!4v1644231342449!5m2!1sru!2s"
                                    width="100%" height="400" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                                <a href="https://goo.gl/maps/eHuBekRG4vwPzUVt8" class="map-description">Юридический адрес и адрес Переработки 1: Узбекистан,
                                    Ташкентская область, Букинский район, Каракуйли, Бешкапа МФЙ </a>
                                    </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                <div class="iframe-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6077.103884225236!2d70.607563!3d40.396622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x438549c750ddc833!2zNDDCsDIzJzQ3LjgiTiA3MMKwMzYnMjcuMiJF!5e0!3m2!1sru!2s!4v1644295908319!5m2!1sru!2s"
                                    width="100%" height="400" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>

                                <a href="https://goo.gl/maps/RVArDoEv33MjAj7t9" class="map-description">Адрес Переработки 2: Узбекистан, Ферганская область,
                                    Бешарыкский район, Янги Бахмал МФЙ</a>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>
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
                                <li><i class="far fa-chevron-down"></i> <a href="/">Главная</a> </li>
                                <li><i class="far fa-chevron-down"></i> <a href="about.php">О нас</a> </li>
                                <li><i class="far fa-chevron-down"></i> <a href="contact.php">Продукты</a> </li>
                                <li><i class="far fa-chevron-down"></i> <a href="blog.php">Блог</a> </li>
                                <!-- <li><i class="far fa-chevron-down"></i> <a href="#">Что то</a> </li> -->
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

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>