<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital@1&family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <title>login</title>
</head>
<body>
    <!-- <form class="form" method="POST" action="{{ route('user.login') }}">
        @csrf
        <input type="text" id="email" name="email" placeholder="email">
        <input type="password" id="password" name="password" placeholder="password">
        <button>login</button>
    </form> -->

<div class="signin__body">
    <div class="signin__body__container">
        <div class="signin__title">війти
            <div class="line"></div>
            @if($errors->any())
                <div class="alert__of__errors">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form class="signin__form" method="POST" action="{{ route('user.login') }}">
            @csrf
            <div class="signin__container">
                <div class="signin__container__inner">
                    <input type="text" placeholder="Пошта" name="email" id="email">
                    <input type="password" placeholder="Пароль" name="password" id="password">
                </div>
            </div>
            <button class="btn__signin" name="sign-in" id="sign-in" type="submit">Війти</button>
        </form>   
    </div>
</div>

    <script src="js/droplist.js"></script>
</body>
</html>