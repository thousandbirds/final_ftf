<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital@1&family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <title>Про нас</title>
</head>
<body>
<div class="aboutus__body">
    <header class="header">
        <a href="/"><img src="img/logo.png" alt=""></a>
    </header>
    <div class="aboutus__container">
        <div class="aboutus__container__block">
            <div class="aboutus__container__title">про <br> компанію</div>
            <!-- <div class="aboutus__container__line"></div> -->
        </div>
        <div class="aboutus__container__wrapp">
            <div class="aboutus__container__line"></div>
            <div class="aboutus__container__text">FOR THE FUTURE — це провідна ІТ- <br> компанія, 
                що займається <br> консалтингом та надає послуги у <br> сфері цифрових технологій. 
                Ми <br> забезпечуємо інноваційність, <br> якість і швидкість, 
                яких очікують <br> наші клієнти та їх користувачі.
            </div>
        </div>
    </div>
</div>
<div class="aboutus__info">
    <div id="counter" class="aboutus__info__container">
        <p class="aboutus__info__projects">понад</p>
        <p data-num="1000" class="aboutus__info__projects num1000 counter">1000</p> <!--id="out-1"-->
        <p class="aboutus__info__projects">проектів</p>
    </div>
    <div class="aboutus__info__container">
        <p data-num="500" class="aboutus__info__workers num500 counter">500</p> <!--id="out-2" -->
        <p class="aboutus__info__workers">працівників</p>
    </div>
    <div class="aboutus__contact">
        <div class="aboutus__contact__container">
            <div class="aboutus__contact__text">дізнайтеся<br>більше</div>
            <a href="/contactform"><input class="aboutus__contact__btn" type="submit" value="передзвоніть мені"></a>  
        </div>
    </div>
</div> 

<footer>
    <div class="footer__container">
        <div class="footer__container__contact">
            <div class="footer__container__contact__title">Контакти</div>
            <div class="under__line"></div>
            <div class="hq__container">
                <div class="hq__usa">
                    <div class="hq__usa__name">hq у сша</div>
                    <div class="hq__usa__list">
                        <div class="list__item">201 W 5th Street Suite 1550<br>Austin, TX 78701</div>
                        <div class="list__item">+1-512-516-8880</div>
                        <div class="list__item">Безкоштовний номер:<br>866-687-3588</div>
                    </div>
                </div>
                <div class="hq__europe">
                    <div class="hq__ukraine__name">hq у європі</div>
                    <div class="hq__ukraine__list">
                        <div class="list__item">вул. Садова, 2д<br>м. Львів, Україна 79021</div>
                        <div class="list__item">+380-32-240-9999</div>
                        <div class="list__item">Безкоштовний номер:<br>0-8006-0-8006</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__container__popular">
            <div class="footer__container__popular__title">Популярне</div>
            <div class="under__line"></div>
            <div class="footer__container__list">
                <a href="/aboutus" target="_blank">
                    <div class="list__item">Про нас</div>
                </a> 
                <a href="#service">
                    <div class="list__item">Послуги</div>
                </a>
                <a href="/contactform" target="_blank">
                    <div class="list__item">Контактна форма</div>
                </a>
            </div>
            <div class="footer__container__socnet">
                <div class="socnet__title">Наші соціальні мережі</div>
                <div class="socnet__box">
                    <a href="https://www.instagram.com/accounts/login/"  target="_blank">
                        <div class="footer__icon"><i class="fab fa-instagram"></i></div>
                    </a>
                    <a href="https://www.youtube.com/" target="_blank">
                        <div class="footer__icon"><i class="fab fa-youtube"></i></div>
                    </a>
                    <a href="https://www.facebook.com/"  target="_blank">
                        <div class="footer__icon"><i class="fab fa-facebook-square"></i></div>
                    </a>
                    <a href="https://twitter.com/"  target="_blank">
                        <div class="footer__icon"><i class="fab fa-twitter-square"></i></div>
                    </a>
                    <a href="https://www.linkedin.com/login/ru" target="_blank">
                        <div class="footer__icon"><i class="fab fa-linkedin"></i></div>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="author">Made with hate by Takaki Satohiro</div>
</footer> 

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="jquery.waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>

<script src="/js/droplist.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/jquery.spincrement.min.js"></script>

</body>
</html>
