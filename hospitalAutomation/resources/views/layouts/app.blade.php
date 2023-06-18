<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="@yield('css')">
    <link rel="stylesheet" href="@yield('css2')">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>@yield('title')</title>

</head>
<body>

<header>

    <div class="navbar">
        <div class="logo">
            <a href="/">
                <img src="https://upload.wikimedia.org/wikipedia/tr/archive/9/9e/20200316220122%21Saglikbakanligi_logo.png" width="100" height="100"  alt="logo">
            </a>
        </div>
        <ul class="nav_links">
            <li><a href="/">Anasayfa</a></li>
            <li><a href="#">Hakkımızda</a>
                <ul>
                    <li><a href="about">Bilgilendirme</a></li>
                    <li><a href="doctors">Hekimlerimiz</a></li>
                    <li><a href="boardOfDirector">Yönetim Kurulu</a></li>
                </ul>
            <li><a href="login">Giriş Yap</a></li>

            <li><a href="authLogin">Yetkili Giriş</a></li>

        </ul>
    </div>
    @yield('header')
</header>
@yield('body')


</body>
</html>
