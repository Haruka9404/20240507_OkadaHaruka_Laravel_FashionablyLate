<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>FashionablyLate</title>
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <?php print_r($contact) ?>
        <div class="thanks-content">
            <div class="thanks-content__text">
                Thank you
            </div>
        </div>
        <div class="thanks-content__message">
            <h2>お問い合わせありがとうございました</h2>
        </div>
            <button class="thanks-content__button-submit" type="submit">
                <a class="header-nav__link" href="/">HOME</a>
            </button>
    </main>
</body>
</html>