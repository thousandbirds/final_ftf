<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital@1&family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <title>register</title>
</head>
<body>
    <!-- <form class="form" method="POST" action="{{ route('user.register') }}">
        @csrf
        <input type="text" id="name" name="name" placeholder="name">
        <input type="text" id="email" name="email" placeholder="email">
        <input type="password" id="password" name="password" placeholder="password">
        <button>register</button>
    </form> -->

<div class="signup__page">
    <div class="signup__page__container">
        <p class="contact__form__title">Реєстраційна<br>Форма</p>
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
        <form class="signup__page__form" method="POST" action="{{ route('user.register') }}">
            @csrf
            <div class="signup__page__form__container">
                <div class="signup__page__form__container__inner">
                    <div class="signup__page__form__container__inner__left">
                        <input type="text" name="name" id="name" placeholder="Ім'я *">
                        <input type="text" name="surname" id="surname" placeholder="Прізвище *">
                        <input type="number" placeholder="Вік" name="age" id="age">
                        <input type="password" placeholder="Пароль" name="password" id="password">
                        <input type="text" name="email" id="email" placeholder="Електрона пошта *">
                    </div>
                </div>
                <div class="signup__page__container__accept">
                    <input class="accept" type="checkbox" name="item1" id="item1">
                    <label class="signup__page__accept" for="item1">* Я ознайомився(-лася) з Загальними положеннями й умовами та Політикою конфіденційності та приймаю їх.</label>   
                </div>
                <button class="signup__page__btn__submit" type="submit">Зареєструватися</button>
            </div>
        </form>
    </div>
</div>



    <script src="js/droplist.js"></script>
</body>
</html>