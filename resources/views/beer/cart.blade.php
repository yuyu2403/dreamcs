逐一コミットして変更の同期を押してのあとにプッシュしてプルリクエスト承認してもらう。
ブランチをメインにマージ
承認してもらったら新しいブランチを作る
これの繰り返し

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>カートの中身</title>
    <a href="/list"><button type="button">一覧画面へ</button></a>
    <form action="/login" method="get">
    <button type="submit">ログイン</button>
</head>
<body>
<h2>カートの中身</h2>

    <table>
        <thead>
            <tr>
                <th>商品名</th>
                <th>個数</th>
                <th>価格</th>
                <th>合計金額</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart_items as $cart_item)
                <tr>
                    <td>{{ $cart_item->item->name }}</td>
                    <td>{{ $cart_item->num }}</td>
                    <td>{{ $cart_item->item->price }}</td>
                    <td>{{ $cart_item->num * $cartItem->item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>






</body>

