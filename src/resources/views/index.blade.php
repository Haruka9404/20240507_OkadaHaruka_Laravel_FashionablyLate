    @extends('layouts.app')

    @section('css')
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    @endsection

    @section('content')
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <a>Contact</a>
        </div>
        <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-content">
                <div class="form__group-content__title">
                <lavel>お名前<span>※</span></lavel>
                </div>
                <div class="form__group-content__input">
                    <input class="form__group-content__input-name" type="text" name="first_name" placeholder="山田" />
                    <input class="form__group-content__input-name" type="text" name="last_name" placeholder="太郎" />
                </div>
            </div>
            <div class="form__error">
                @error('first_name')
                {{ $message }}
                @enderror
            </div>
            <div class="form__error">
                @error('last_name')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__group-content__title">
                <lavel>性別<span>※</span></lavel>
                </div>
                <div class="form__group-content__input">
                    <label><input type="radio" name="gender" value="1" checked />
                    男性</label>
                    <label><input type="radio" name="gender" value="2" />
                    女性</label>
                    <label><input type="radio" name="gender" value="3" />
                    その他</label>
                </div>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__group-content__title">
                <lavel>メールアドレス<span>※</span></lavel>
                </div>
                <div class="form__group-content__input">
                    <input class="form__group-content__input-email" type="email" name="email" placeholder="sample.abc@co.jp">
                </div>
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__group-content__title">
                <lavel>電話番号<span>※</span></lavel>
                </div>
                <div class="form__group-content__input">
                    <input class="form__group-content__input-tel" type="tel1" name="tel1" placeholder="090" />
                    <a>-</a>
                    <input class="form__group-content__input-tel" type="tel2" name="tel2" placeholder="1234" />
                    <a>-</a>
                    <input class="form__group-content__input-tel" type="tel3" name="tel3" placeholder="5678" />
                </div>
            </div>
            <div class="form__error">
                @error('tel*')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__group-content__title">
                <lavel>住所<span>※</span></lavel>
                </div>
                <div class="form__group-content__input">
                    <input class="form__group-content__input-address" type="text" name="address" placeholder="東京都" />
                </div>
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__group-content__title">
                <lavel>建物名</lavel>
                </div>
                <div class="form__group-content__input">
                    <input class="form__group-content__input-building" type="text" name="building" placeholder="ニャンコビル2F" />
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__group-content__title">
                    <lavel>お問い合わせの種類<span>※</span></lavel>
                </div>
                <div class="form__group-content__input">
                    <select class="form__group-content__input-category" name="category_id" >
                        {{-- <option value="">-選択してください-</option> --}}
                        @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}" name="category_id" placeholder="-選択してください-">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form__error">
                @error('category_id')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-content">
                <div class="form__group-content__title">
                <lavel>お問い合わせ内容<span>※</span></lavel>
                </div>
                <div class="form__group-content__input">
                    <textarea class="form__group-content__input-text" name="detail" placeholder="資料をいただきたいです"></textarea>
                </div>
            </div>
            <div class="form__error">
                @error('content')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
    </div>
    @endsection