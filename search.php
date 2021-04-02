<?php
    if (!function_exists('str_contains')) {
        function str_contains(string $haystack, string $needle): bool{
            return '' === $needle || false !== strpos($haystack, $needle);
        }
    }
    session_start();
    $imgs = $_SESSION['imgs'];
    $titles = $_SESSION['titles'];
    $input = $_GET['search'];
    $nums = [];
    $filtered = array_filter($imgs, function($var, $k){
        global $nums, $input;
        if(!str_contains($var, $input)){
            return false;
        }
        array_push($nums, $k);
        return true;
    }, ARRAY_FILTER_USE_BOTH);
?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon"
          type="image/png"
          href="./img/favicon.png">
</head>
<body>
<a href="./contactUs.html"><img src="./img/phone.png" alt="phone" class="phone"></a>
<nav id="nav" class="b">
    <div class="wrap" >
        <a href="index.php"> <img src="./img/logo.png" alt="logo" class="logo"></a>
        <span class="menu" onclick="openMenu()" id="menu">
                <span></span>
                <span id="hover-line"></span>
                <span></span>
            </span>
    </div>
</nav>
<section class="search-content">
    <div class="hamburger" id="ham">
        <div class="close"  onclick="closeMenu()"><div id="first"></div><div id="second"></div></div>
        <ul class="links">
            <li><a href="index.php">Главная</a></li>
            <li><a href="portfolio.php">Порфтолио</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Наши сервисы</a></li>
        </ul>
    </div>
</section>
    <div class="text srch">
        <h2 class="title ">Результат поиска: <b> <?php echo $_GET['search']; ?> </b></h2>
    </div>
    <div class="brands row">
    <?php
        if(isset($_GET['search']) && count($nums)):
            for($i = 0; $i < count($nums); $i++):
            ?>
        <div class="wrap-portfolio srch-wrap">
            <img src="<?php echo $filtered[$nums[$i]]; ?>" alt="development" class="brand">
            <div class="overlay">
                <h3 class="title"><?php echo $titles[$nums[$i]]; ?></h3>
                <a href="#" class="button">Подробнее</a>
            </div>
        </div>
    <?php endfor;
    elseif($_GET['search'] === 'landing'):
        ?>
        <section class="block7 port">
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
        <?php
            else:
                ?>
        <div class="error">
            <?php
                    echo "<h2 class=\"title\">По даному запросу ничего не найдено</h2>";
                echo "<a href='index.php'>Вернутся на главную</a>";
            endif;
            ?>
        </div>
    </div>


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
