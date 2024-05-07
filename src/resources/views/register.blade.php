    @extends('layouts.app')

    @section('css')
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @endsection

    @section('content')
    @if (session('message'))
        <div class="register__alert--success">{{ session('message') }}</div>
    @endif
    {{-- @if ($errors->any())
        <div class="register__alert--danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif --}}

    <div class="list">
            <nav class="nav">
                <ul class="nav__content">
                    <li class="nav__content-item">
                        <a class="nav__content-item__link" href="/login">login</a>
                    </li>
                    <li class="nav__content-item">
                        <a class="nav__content-item__link" href="/">contact</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="content">
            <div class="content__title">
                <p>Register</p>
            </div>
            <div class="content__inner">
                <div class="content__card">
                    <form class="content__card__create" action="/register" method="post">
                    @csrf
                        <div class="content__card__content">
                            <div class="content__card__content-title">
                                <p>お名前</p>
                            </div>
                            <div class="content__card__textbox">
	                            <input type="text" name="name" value="{{ old('name') }}" placeholder="テスト太郎" />
                            </div>
                            <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
            </div>
                            <div class="content__card__content-title">
                                <p>メールアドレス</p>
                            </div>
                            <div class="content__card__textbox">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="sample.abc@co.jp" />
                            </div>
                            <div class="form__error">
        @error('email')
        {{ $message }}
        @enderror
        </div>
                            <div class="content__card__content-title">
                                <p>パスワード</p>
                            </div>
                            <div class="content__card__textbox">
	                            <input type="password" name="password" placeholder="Sample0123" />
                            </div>
                            <div class="form__error">
        @error('password')
        {{ $message }}
        @enderror
        </div>
                            {{-- <div class="content__card__content-title">
                                <p>確認用パスワード</p>
                            </div>
                            <div class="content__card__textbox">
	                            <input type="password" name="password" placeholder="Sample0123" />
                            </div> --}}
                            <div class="content__card__content-submit">
                                <button class="content__card__content-button" type="submit">登録</button>
                            </div>
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection