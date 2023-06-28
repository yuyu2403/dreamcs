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
    <title>注文完了画面</title>

    <a href="/list"><button type="button">一覧画面へ</button></a><br>
    <a href="/cart"><img src="/images/cart.png" alt="買い物カートの画像"></a><form action="/beer/list" method="get">
</head>
<body>
<h2>購入完了しました。お楽しみに！！</h2>
<a href="/list">トップページへ戻る</a>
</body>
</html>
