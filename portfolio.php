<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;900&display=swap" rel="stylesheet">
    <link rel="icon"
      type="image/png" 
      href="./img/favicon.png">
</head>
<body>
    <a href="./contactUs.html"><img src="./img/phone.png" alt="phone" class="phone"></a>
    <nav id="nav">
        <div class="wrap">
            <a href="index.php"> <img src="./img/logo.png" alt="logo" class="logo"></a>
            <span class="menu" onclick="openMenu()" id="menu">
                <span></span>
                <span id="hover-line"></span>
                <span></span>                        
            </span>
        </div>
    </nav>
    <section class="hero portfolio">
        <div class="hamburger" id="ham">
            <div class="close"  onclick="closeMenu()"><div id="first"></div><div id="second"></div></div>
            <ul class="links">
                <li><a href="index.php">Главная</a></li>
                <li><a href="portfolio.php">Порфтолио</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Наши сервисы</a></li>
            </ul>
        </div>
        <div class="container">
            
        <div class="text">
             <h1 class="title">Наш портфолио</h1>
             <h3 class="description">Здесь Вы можете увидеть примеры предыдущих наших работ</h3>
             <a href="#" class="button">Посмотреть</a>
        </div>
    </div>
    </section>
    <section class="block1 container" id="mount">
        <div class="text">
            <img src="./img/folder.svg" class="icon" alt="portfolio">
            <h2 class="title">Наше портфолио по дизайну</h2>
            <p class="description">Мы ответственная компания. 7 лет опыта на рынке в сфере дизайна и построении сайтов! Мы дорожим нашей репутацией. Делаем вашу работу так, чтобы вы были довольны.</p>
        </div>
    </section> 
    <section class="block2 port">
        <div class="container">
            <div class="text">
                <img src="./img/www-click.svg" class="icon" alt="portfolio-examples">
                <h2 class="title">Веб портфолио</h2>
            </div>
        </div>

        <div class="brands row">
                    <?php
                        $titles = array("Doersken", "If Form", "Wedler", "Wedler", "Matt Portfolio",
                                        "Basin", "Dovetail", "DeathStar 404 page", "Success Page", "Rooted",
                                        "Solutions", "Tsks 404 Page");
                        $imgs = array("./img/doerksen-style-tile-page.webp", "./img/contact-form.webp",
                            "./img/happy_holidays-page.webp", "./img/userforge-portfolio-page.webp",
                            "./img/mf-portfolio.webp", "./img/basin-page.webp", "./img/dovetail-ui-shot-form.webp",
                            "./img/deathstar_404.webp", "./img/success-page-form.webp", "./img/rooted-form.webp",
                            "./img/solutions-portfolio.webp", "./img/tsks-form-404.webp" );
                    session_start();
                    $_SESSION['imgs'] = $imgs;
                    $_SESSION['titles'] = $titles;
                        for($i = 0; $i < count($titles); $i++):
                            ?>
                        <div class="wrap-portfolio">
                            <img src="<?php echo $imgs[$i]; ?>" alt="development" class="brand">
                            <div class="overlay">
                                <h3 class="title"><?php echo $titles[$i]; ?></h3>
                                <a href="#" class="button">Подробнее</a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </form>
    </section>
    <section class="block7 port">
        <div class="container">
            <div class="text">
                <img src="./img/landing-page.svg" class="icon" alt="services">
                <h2 class="title">лендинг портфолио</h2>
            </div>
        </div>
        <div class="landing-pages row">
            <div class="column">
                <div class="wrap-portfolio">
                    <img src="./img/art-de-pari.jpg" alt="development" class="land-portfolio">
                    <div class="overlay"> 
                        <a href="./img/art-de-pari.jpg" target="_blank" class="loop">
                            &#128269;
                        </a>  
                    </div>  
                </div>
                <div class="wrap-portfolio">
                    <div class="overlay">   
                        <a href="./img/landing1.jpg" target="_blank" class="loop">
                            &#128269;
                        </a>
                    </div>  
                </div>
            </div>
            <div class="column">
                <div class="wrap-portfolio">
                    <img src="./img/autoshiny-diski.ru.jpg" alt="web" class="land-portfolio">
                    <div class="overlay">
                        <a href="./img/autoshiny-diski.ru.jpg" target="_blank" class="loop">
                            &#128269;
                        </a>   
                    </div>  
                </div>
                <div class="wrap-portfolio">
                    <img src="./img/reklamagelru.jpg" alt="graphic" class="land-portfolio">
                    <div class="overlay">   
                        <a href="./img/reklamagelru.jpg" target="_blank" class="loop">
                            &#128269;
                        </a>
                    </div>  
                </div>
            </div>
            <div class="column">
                <div class="wrap-portfolio">
                    <img src="./img/landing-page-ug-region.ru.jpg" alt="graphic" class="land-portfolio">
                    <div class="overlay">  
                        <a href="./img/landing-page-ug-region.ru.jpg" target="_blank" class="loop">
                            &#128269;
                        </a>
                    </div>  
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="column">
                    <a href="index.php"><img class="footer-logo" src="./img/logo.png" alt="footer-logo"></a>
                    <p class="description">Soul Power - это команда профессиональных программистов, дизайнеров и менеджеров, которая сделает дизайн и поместит его на сайт. Мы делаем так, чтобы наш клиент был доволен как ценой, так и сделанной работой.</p>
                    <a href="./aboutUs.html" class="button">Подробнее</a>
                </div>
                <div class="column">
                    <p class="title">Ссылки</p>
                    <ul class="col-list">
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="./services.html">Наши услуги</a></li>
                        <li><a href="portfolio.php">Портфолио</a></li>
                        <li><a href="https://donatepay.eu/">Поддержать проект</a></li>
                        <li><a href="./aboutUs.html">О нас</a></li>
                        <li><a href="https://www.youtube.com/channel/UCueQtyt2CWwlHkjPmOYEjmQ">Наш канал</a></li>
                    </ul>
                </div>
                <div class="column">
                      <p class="title">Контакты</p>
                    <ul class="col-list">
                        <li><p class="description">Свяжитесь с нами по почте или по телефону, мы ждём именно вас.</p></li>
                        <li><a href="tel:+380989724811">+38 098 972-48-11</a></li>
                        <li><a href="mailto:romaniv.roma2013@gmail.com" class="email">romaniv.roma2013@gmail.com</a></li>
                    </ul>
                </div>
                <div class="column">
                    <p class="title">Следовать</p>
                    <ul class="soc-icons">
                        <li><a href="#"><img src="./img/facebook.svg" alt=""></a></li>
                        <li><a href="#"><img src="./img/twitter.svg" alt=""></a></li>
                        <li><a href="#"><img src="./img/google.svg" alt=""></a></li>
                    </ul>
                </div>
              </div>
              <hr>
              <p class="copyright">Soul Power © 2021</p>

        </div>
    </footer>
    <script src="./srcript.js"></script>
</body>
</html>