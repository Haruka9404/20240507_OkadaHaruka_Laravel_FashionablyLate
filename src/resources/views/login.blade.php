    @extends('layouts.app')

    @section('css')
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @endsection

    @section('content')
    @if (session('message'))
        <div class="login__alert--success">{{ session('message') }}</div>
    @endif
    @if ($errors->any())
        <div class="login__alert--danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="list">
        <nav class="nav">
            <ul class="nav__content">
                <li class="nav__content-item">
                    <a class="nav__content-item__link" href="/register">register</a>
                </li>
                <li class="nav__content-item">
                    <a class="nav__content-item__link" href="/">contact</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="content">
        <div class="content__title">
            <p>Login</p>
        </div>
        <div class="content__inner">
            <div class="content__card">
                <form class="content__card__form" action="/login" method="post">
                @csrf
                    <div class="content__card__content">
                        <div class="content__card__content-title">
                            <lavel>メールアドレス</lavel>
                        </div>
                        <div class="content__card__textbox">
	                        <input type="email" name="email" value="{{ old('email') }}" placeholder="sample.abc@co.jp" />
                        </div>
                        <div class="content__card__content-title">
                            <lavel>パスワード</lavel>
                        </div>
                        <div class="content__card__textbox">
                            <input type="password" name="password" placeholder="Sample0123" />
                        </div>
                        <div class="content__card__content-submit">
                            <button class="content__card__content-button" type="submit">ログイン</button>
                        </div>
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection