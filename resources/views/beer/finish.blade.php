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
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <style>
        body{
            background-color: #373c45;
        }
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* 垂直方向に要素を配置するために追加 */
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
        h2{
            color: white;
            font-family: "Nico Moji"
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">TOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        {{-- <a class="nav-link active" aria-current="page" href="#">TOP</a> --}}
      </div>
    </div>
</div>
    </nav>


    <div class="top-right">
        <a href="/cart">
            <img src="/images/cart.png" alt="買い物カートの画像" style="border-radius: 50%; width: 100px; height: 100px;">
        </a>
    </div>

    <div class="centered">
        <h2>こうにゅうかんりょうしました。おたのしみに！！</h2>
    </div>

    <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-start">
        </form>
    </nav>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
