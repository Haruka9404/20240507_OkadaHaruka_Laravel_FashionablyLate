<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Top page</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
            FashionablyLate
            </a>
        </div>
        <div class="header__list">
            <nav class="header-nav">
                <ul class="header-nav__content">
                    <li class="header-nav__content-item">
                        <a class="header-nav__content-item__link" href="/login">login</a>
                    </li>
                    <li class="header-nav__content-item">
                        <a class="header-nav__content-item__link" href="/">contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
    @yield('content')
    </main>

    <footer>

    </footer>
</body>

</html>