    @extends('layouts.app')

    @section('css')
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @endsection

    @section('content')
    <ul class="header-nav">
    @if (Auth::check())
        <li class="header-nav__item">
            <form action="/logout" method="post">
            @csrf
                <button class="header-nav__button">ログアウト</button>
            </form>
        </li>
    @endif
    </ul>

    <div class="content">
        <div class="content__title">
            <h2>Admin</h2>
        </div>

    <div class="content">
        <div class="content__search">
            <form class="content__search__form" action=" ~ " method=" ~ ">
            @csrf
                <input type="text" name="name" placeholder="テスト太郎" />
                <input type="text" name="name" placeholder="テスト太郎" />
                <input type="text" name="name" placeholder="テスト太郎" />
                <input type="text" name="name" placeholder="テスト太郎" />
                <button class="content__card__search-button" type="submit">検索</button>
                <button class="content__card__reset-button" type="submit">リセット</button>
            </form>
        </div>

    <div class="contact-table">
        <table class="contact-table__inner">
            <tr class="contact-table__row">
                <div class="contact-table__header">
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                </div>
            </tr>
            {{-- @foreach ($contacts as $contact)
            <tr class="contact-table__row">
                <td class="contact-table__item">
                    <form class="update-form" action="~" method="post">
                    @method('PATCH') @csrf
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text" name="content" value="{{ $contact['content'] }}"/>
                            <input type="hidden" name="id" value="{{ $todo['id'] }}" />
                        </div>
                        <div class="detail-form__button">
                            <button class="detail-form__button-submit" type="submit">詳細</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach --}}
        </table>
    </div>
    @endsection