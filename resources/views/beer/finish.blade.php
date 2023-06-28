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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .top-right {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .top-left {
            position: absolute;
            top: 50px;
            left: 20px;
        }

        .top-center {
            position: absolute;
            top: 600px;
            left: 720px;
        }
    </style>
</head>

<body>
     <div class="top-right">
        <a href="/cart"><img src="/images/cart.png" alt="買い物カートの画像"></a>
    </div>

    <div class="top-left">
    <button class="btn btn-outline-success me-2" type="button">一覧画面へ</button>
    </div>

    <div class="top-center">
    <button class="btn btn-sm btn-outline-secondary" type="button">トップページに戻る</button>
    </div>


 <div class="centered">

<h2>購入完了しました。お楽しみに！！</h2>


<nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start">

</form>
</nav>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>


