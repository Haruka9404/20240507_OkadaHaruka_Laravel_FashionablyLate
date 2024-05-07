    @extends('layouts.app')

    @section('css')
        <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    @endsection

    @section('content')
    <?php print_r($contact) ?>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/thanks" method="POST">
      @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="first_name" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                <input type="last_name" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                {{-- <input type="text" name="content" value="{{ $contact['content'] }}" readonly /> --}}
                {{-- <?php echo nl2br($contact['first_name'].$contact['last_name']); ?> --}}
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <input type="gender" name="gender" value="{{ $contact['gender'] }}" readonly/>
                {{-- <?php echo nl2br($contact['gender']); ?> --}}
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly/>
                {{-- <?php echo nl2br($contact['email']); ?> --}}
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel1" name="tel1" value="{{ $contact['tel1'] }}" readonly/>
                <input type="tel2" name="tel2" value="{{ $contact['tel2'] }}" readonly/>
                <input type="tel3" name="tel3" value="{{ $contact['tel3'] }}" readonly/>
                {{-- <?php echo nl2br($contact['tel1'].$contact['tel2'].$contact['tel3']); ?> --}}
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="address" name="address" value="{{ $contact['address'] }}" readonly/>
                {{-- <?php echo nl2br($contact['address']); ?> --}}
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="building" name="building" value="{{ $contact['building'] }}" readonly/>
                {{-- <?php echo nl2br($contact['building']); ?> --}}
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                <input type="category_id" name="category_id" value="{{ $contact['category_id'] }}" readonly/>
                {{-- <?php echo nl2br($contact['category_id']); ?> --}}
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                {{-- <?php echo nl2br($contact['detail']); ?> --}}
                <input class="confirm-table__textbox" type="detail" name="detail" value="{{ $contact['detail'] }}" readonly/>
              </td>
            </tr>

          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <button class="form__button-return" type="button" onClick="history.back()">修正</button>
        </div>
      </form>
    </div>
    @endsection