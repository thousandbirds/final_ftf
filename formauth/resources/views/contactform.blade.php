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
    <title>Контактна форма</title>
</head>
<body>
<div class="second__page">
    <div class="second__page__container">
        <p class="contact__form__title">Контактна<br>Форма</p>
        <div class="line"></div>
        @include('inc.successmessage')
        @if($errors->any())
            <div class="alert__of__errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="second__page__form" action="{{ route('contact-form-aplly') }}" method="post">
            @csrf
            <div class="second__page__form__container">
                <div class="second__page__form__container__inner">
                    <div class="second__page__form__container__inner__left">
                        <input type="text" name="name" id="name" placeholder="Ім'я *">
                        <input type="text" name="surname" id="surname" placeholder="Прізвище *">
                        <input type="text" name="email" id="email" placeholder="Електрона пошта *">
                        <input type="text" name="number" id="number" placeholder="Номер телефону *">
                    </div>
                    <div class="second__page__form__container__inner__right">
                        <textarea name="description" placeholder="Повідомлення *"></textarea>
                         <div class="second__page__form__container__inner__right__droplist">
                            <p>Чим ми можемо допомогти?</p>
                            <select name="drop_list" id="type">
                                <option name="Business" value="Business">Бізнес</option>
                                <option name="Сourses" value="Сourses">Курси IT академії</option>
                                <option name="School" value="School">Мовна школа</option>
                                <option name="Cooperation" value="Cooperation">Співпраця</option>
                                <option name="Check" value="Check">Перевірка працевлаштування</option>
                                <option name="Сareer" value="Сareer">Кар'єрні можливості</option>
                            </select>
                         </div>
                    </div>
                </div>
                <div class="second__page__container__accept">
                    <input class="accept" type="checkbox" name="item1" id="item1">
                    <label class="second__page__accept" for="item1">* Я ознайомився(-лася) з Загальними положеннями й умовами та Політикою конфіденційності та приймаю їх.</label>   
                </div>
                <button class="second__page__btn__submit" type="submit">Надіслати повідомлення</button>
            </div>
        </form>
    </div>
</div>   
</body>
</html>
