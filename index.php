<?php
    session_start();
    $titles = array("Doersken", "If Form", "Wedler", "Wedler", "Matt Portfolio",
                 "Basin", "Dovetail", "DeathStar 404 page", "Success Page", "Rooted",
                 "Solutions", "Tsks 404 Page");
    $imgs = array("./img/doerksen-style-tile-page.webp", "./img/contact-form.webp",
                 "./img/happy_holidays-page.webp", "./img/userforge-portfolio-page.webp",
                 "./img/mf-portfolio.webp", "./img/basin-page.webp", "./img/dovetail-ui-shot-form.webp",
                 "./img/deathstar_404.webp", "./img/success-page-form.webp", "./img/rooted-form.webp",
                 "./img/solutions-portfolio.webp", "./img/tsks-form-404.webp" );
    $_SESSION['imgs'] = $imgs;
    $_SESSION['titles'] = $titles;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soul Power</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" 
      type="image/png" 
      href="./img/favicon.png">
</head>
<body>
    <?php
        if(isset($_COOKIE['name'])):
            echo " <div class=\"modal\">
                        Добро пожаловать, ". $_COOKIE['name'] .
                    "</div>";

        ?>


    <?php endif; ?>
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
        <section class="hero">
            <div class="hamburger" id="ham">
                <div class="close"  onclick="closeMenu()"><div id="first"></div><div id="second"></div></div>
                <ul class="links">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="portfolio.php">Порфтолио</a></li>
                    <li><a href="./aboutUs.html">О нас</a></li>
                    <li><a href="./services.html">Наши сервисы</a></li>
                </ul>
            </div>
            <div class="container">
                
            <div class="text">
                 <h1 class="title">Дизайн Приходит к тем кто ждёт</h1>
                 <h3 class="description">Привет! Тебе нужен сайт? Тогда скорей жми на кнопку!</h3>
                 <a href="./aboutUs.html" class="button">Узнать больше</a>
            </div>
            <div class="arrow" ><a href="#mount"><img src="./img/arrow2.png" alt="arrowDown"></a></div>
        </div>
        </section>
        <section class="block1 container" id="mount">
                <div class="text">
                    <img src="./img/buildings.svg" class="icon" alt="company">
                    <h2 class="title">Soul Power</h2>
                    <p class="description">Мы ответственная компания. 7 лет опыта на рынке в сфере дизайна и построении сайтов! Мы дорожим нашей репутацией. Делаем вашу работу так, чтобы вы были довольны.</p>
                </div>
        </section> 
        <section class="block2">
            <div class="container">
                <div class="text">
                    <img src="./img/tool-box.svg" class="icon" alt="services">
                    <h2 class="title">Наши Сервисы</h2>
                    <p class="description">Мы занимаемся дизайном, кодом и переносим ваш сайт на хост. Так же мы предлагаем ваши услуги с гибкими и удобными макетами. Вы можете выбрать свои любимые макеты и элементы для оформления с неограниченными возможностями</p>
                </div>
                <div class="services">
                    <div class="service">
                        <div class="text">
                            <img src="./img/graphic.png" alt="graphic design">
                            <p class="title">Графический Дизайн</p>
                            <p class="description">Изучаем сферу продукта и делаем дизайн по заданному шаблону.</p>
                        </div>
                        <div class="skills">
                            <p class="name">Ps</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="235"></meter>
                            <p class="name">Ai</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="247"></meter>
                            <p class="name">Id</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="220"></meter>
                        </div>
                    </div>
                    <div class="service">
                        <div class="text">
                            <img src="./img/web.png" alt="web design">
                            <p class="title">Веб Дизайн</p>
                            <p class="description">Делаем уникальный дизайн с нуля для любой сферы бизнеса,  </p>
                        </div>
                        <div class="skills">
                            <p class="name">Ui</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="240"></meter>
                            <p class="name">Ux</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="223"></meter>
                            <p class="name">Responsive</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="230"></meter>
                        </div>
                    </div>
                    <div class="service">
                        <div class="text">
                            <img src="./img/wdevelopment.png" alt="web development">
                            <p class="title">Веб Разработка</p>
                            <p class="description">Создаём сайт, пишем код, загружаем на хостинг и настраиваем </p>
                        </div>
                        <div class="skills">
                            <p class="name">Html</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="250"></meter>
                            <p class="name">Css</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="245"></meter>
                            <p class="name">Js</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="230"></meter>
                        </div>
                    </div>
                    
                    <div class="service">
                        <div class="text">
                            <img src="./img/adevelopment.png" alt="app development">
                            <p class="title">Разработка Приложений</p>
                            <p class="description">Разрабатываем веб приложения, с учетом проведенного анализа и пожеланий клиента.</p>
                        </div>
                        <div class="skills">
                            <p class="name">C++</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="210"></meter>
                            <p class="name">Java</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="220"></meter>
                            <p class="name">Swift</p>
                            <meter  min="110" low="0" high="100" max="250" optimum="0" value="200"></meter>
                        </div>
                    </div>    
                </div>
                

            </div>
            
        </section>
        <section class="block3">
                <div class="completed container">
                    <div class="box">
                        <div class="text">
                            <div class="description numscroller" data-min='1' data-max='694' data-delay='5' data-increment='3'>694</div>
                            <p class="name">Сделанных дизайнов</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            <div class="description numscroller" data-min='1' data-max='324' data-delay='5' data-increment='3'>324</div>
                            <p class="name">Проделанных страниц</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            <div class="description numscroller" data-min='1' data-max='134' data-delay='5' data-increment='2'>134</div>
                            <p class="name">Написанных кодов</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            <div class="description numscroller" data-min='1' data-max='27' data-delay='1' data-increment='1'>27</div>
                            <p class="name">Законченных приложений</p>
                        </div>
                    </div>
            </div> 
        </section>
        <section class="block4">
            <div class="container">
                <div class="text">
                    <img src="./img/portfolio.svg" class="icon" alt="services">
                    <h2 class="title">Наш портфолио</h2>
                    <p class="description">Наше портфолио славится множествами качественными работами. Наши клиенты являются большими компаниями на мировом рынке.</p>
                </div>
            </div>
            <form class="search-form" method="get" action="search.php">
                <label for="search">Поиск по макету:</label>
                <div class="wr">

                    <div class="search">
                        <input list="search" type="search" class="searchTerm" placeholder="Что ищите?" name="search">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            <div class="brands row">
                <?php
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
            <datalist id="search">
                <option value="landing">
                <option value="404">
                <option value="form">
                <option value="portfolio">
                <option value="page">
            </datalist>
            <div class="but-portfolio">
                <a href="portfolio.php" class="button"> Больше Портфолио</a>
            </div>

        </section>
        <section class="block6">
            <div class="video">
                <a href="https://www.youtube.com/channel/UCueQtyt2CWwlHkjPmOYEjmQ" class="button">Наш Ютуб канал</a>
            </div>
        </section>
        <section class="block7 container">
            <div class="text">
                <img src="./img/teamwork.svg" class="icon" alt="services">
                <h2 class="title">Наша команда</h2>
                <p class="description">7 лет подряд наша команда прилагает все усилия, чтобы усовершенствовать наше решения, превращая решения в гибкий сайт или приложение для любых организаций.</p>
            </div>
            <div class="team">
                <div class="crew">
                    <img class="crew-photo" src="./img/team1.png" alt="">
                    <div class="crew-info">
                        <h2 class="title">Роман</h2>
                        <p class="description">дизайнер</p>
                        <div class="soc-icons">
                           <a href=""><img src="./img/96x96-Circle-80-TW.png" alt=""></a> 
                            <a href=""><img src="./img/96x96-Circle-80-FB.png" alt=""></a>
                            <a href=""><img src="./img/96x96-Circle-80-LI.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="crew">
                    <img class="crew-photo" src="./img/team2.png" alt="">
                    <div class="crew-info">
                        <h2 class="title">Марина</h2>
                        <p class="description">менеджер</p>
                        <div class="soc-icons">
                           <a href=""><img src="./img/96x96-Circle-77-TW.png" alt=""></a> 
                            <a href=""><img src="./img/96x96-Circle-77-FB.png" alt=""></a>
                            <a href=""><img src="./img/96x96-Circle-77-LI.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="crew">
                    <img class="crew-photo" src="./img/team3.png" alt="">
                    <div class="crew-info">
                        <h2 class="title">Едвард</h2>
                        <p class="description">верстальщик</p>
                        <div class="soc-icons">
                           <a href=""><img src="./img/96x96-Circle-64-TW.png" alt=""></a> 
                            <a href=""><img src="./img/96x96-Circle-64-FB.png" alt=""></a>
                            <a href=""><img src="./img/96x96-Circle-64-LI.png" alt=""></a>
                        </div>
                    </div>
                </div> 
                <div class="crew">
                    <img class="crew-photo" src="./img/team4.png" alt="">
                    <div class="crew-info">
                        <h2 class="title">Дарья</h2>
                        <p class="description">программист</p>
                        <div class="soc-icons">
                           <a href=""><img src="./img/96x96-Circle-67-TW.png" alt=""></a> 
                            <a href=""><img src="./img/96x96-Circle-67-FB.png" alt=""></a>
                            <a href=""><img src="./img/96x96-Circle-67-LI.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block8">
            <div class="container">
                <form action="confirm.php" method="post" class="contact-form">
                    <h2 class="title">Заказать услугу</h2>
                    <input name="userName" type="text" placeholder="Как к вам обращатся?" required>
                    <div class="row">
                        <input name="email" class="column" type="email" placeholder="Email" required>
                        <input name="phone" class="column" type="tel" placeholder="Номер телефона">
                    </div>
                    <div class="choice">
                        <h4 class="title">Услуга:</h4>
                        <label>
                            <input type="radio" name="service" id="">
                            <span>Лендинг</span>
                        </label>
                        <label> 
                            <input type="radio" name="service" id="">
                            <span> Веб-сайт</span>
                        </label>
                        <label>
                            <input type="radio" name="service" id="">
                            <span>Веб-приложение</span>
                        </label>
                    </div>
                    <textarea name="message" class="message" type="text" placeholder="Cообщение...(не обязательно)"></textarea><br>
                    <button name="submit" class="button"><span>Отправить</span></button>

                </form>
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
        <script src="./jquery.min.js"></script>
        <script src="./numscroller-1.0.js"></script>
      <script src="./srcript.js"></script>
    </body>
</html>