<!DOCTYPE html>
<html>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css2?family=Cherry+Swash&display=swap' rel= "stylesheet">



        <title>Beer Shop</title>
        <style>
            body{
                background-color: #373c45;
            }
            /* .contact {
                border: 5px solid #5afef6;
                padding: 60px;
                margin-bottom: 20px;
            } */
            .contact img {
                width: 200px;
                height: 200px;
                object-fit: cover;
                margin-bottom: 50px;
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

                <a class="navbar-brand" href="/list">TOP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <div class="top-right">
            <a href="/cart">
                <img src="/images/cart.png" alt="買い物カートの画像" style="border-radius: 50%; width: 130px; height: 130px;">
            </a>
        </div>




        <div class="d-flex align-items-center">
            <form action="/list" method="get" style="margin-right: 10px;">
                <div style="display: flex;">
                    <input type="text" name="search" placeholder="検索したいこと入れてね♡">
                    <input type="submit" value="検索">
                </div>
            </form>

        </div>
            {{-- value="{{$keyword}}"  --}}


        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div id="contact-list">

                            {{-- 商品リストを表示 --}}
                            @foreach ($all_items as $item)
                                <form action="/add_cart" method="post">
                                        <div class='item' style="text-align: left;">
                                            <img src="/img/{{$item->id}}/{{$item->filepath}}" width='300'>;
                                            <h3 style="color: white;">{{ $item->name }}</h3>
                                            <p style="color: white;">{{ $item->detail }}</p>
                                            <p style="color: white;">{{$item->category->name}}</p>
                                            <p style="color: white;">Price: &#165;{{ $item->price }}</p>

                                            <div style="display: flex; justify-content: flex-end;">
                                                <input type="submit" name="add_cart" value="カートに追加する" style="font-size: 15px; padding: 15px 50px;">
                                                <input type="hidden" name="add_cart_beer" value="{{$item->id}}">
                                            </div>
                                            @if ($item->stock<=0)
                                                <p style="color: white;">現在、売り切れです。</p>
                                            @endif

                                            @csrf
                                        </div>

                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <footer class="d-flex justify-content-end align-items-center mt-auto text-white-50">
                <p style="font-size: 24px;">Yuusuke/Syouma/Arisa/Jinichiro </p>
            </footer>

    </body>
</html>
