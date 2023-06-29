<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注文完了画面</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css2?family=Cherry+Swash&display=swap' rel= "stylesheet">

    <title>Beer Shop</title>
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
            top: 35px;
            right: 50px;
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

        h1{
            color: white;
            font-family: "Cherry Swash";
        }
        .navbar{
            height: 80px;
        }
        .navbar-brand:hover {
            text-decoration: none;
            border-bottom: 5px solid #373c45;
        }
    </style>
</head>

<body>
<header class="mb-auto">

    <div>
      <h1>Dream Catchears</h1>
    </div>
  </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

    <a class="navbar-brand" href="#">TOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
</div>
    </nav>


    <div class="top-right">
        <a href="/cart">
            <img src="/images/cart.png" alt="買い物カートの画像" style="border-radius: 50%; width: 130px; height: 130px;">
        </a>
    </div>

    <div class="centered">
        <h2>こうにゅうかんりょうしました。おたのしみに！！</h2>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<footer class="d-flex justify-content-center align-items-center mt-auto text-white-50">
    <p style="font-size: 24px;">Yuusuke/Syouma/Arisa/Jinichiro </p>
  </footer>
</body>
</html>
