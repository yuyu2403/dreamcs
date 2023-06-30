<!DOCTYPE html>
<html>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css2?family=Cherry+Swash&display=swap' rel= "stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


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


            .search-form-003 {
                display: flex;
                justify-content: space-between;
                align-items: center;
                overflow: hidden;
                border: 2px solid #ffffff;
                border-radius: 30px;
                margin-top: 35px;
            }

            .search-form-003 input {
                width: 1600px;
                height: 45px;
                padding: 5px 40px;
                border: none;
                box-sizing: border-box;
                font-size: 1em;
                outline: none;
                background-color: transparent;
                color: white;
            }

            .search-form-003 input::placeholder{
                color: #fefbfb;
            }

            .search-form-003 button {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 50px;
                height: 45px;
                border: none;
                background-color: transparent;
                cursor: pointer;
            }

            .search-form-003 button::after {
                width: 20px;
                height: 20px;
                background-image: url('data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2024%2024%22%3E%20%3Cpath%20d%3D%22M23.7%2020.8%2019%2016.1c-.2-.2-.5-.3-.8-.3h-.8c1.3-1.7%202-3.7%202-6C19.5%204.4%2015.1%200%209.7%200S0%204.4%200%209.7s4.4%209.7%209.7%209.7c2.3%200%204.3-.8%206-2v.8c0%20.3.1.6.3.8l4.7%204.7c.4.4%201.2.4%201.6%200l1.3-1.3c.5-.5.5-1.2.1-1.6zm-14-5.1c-3.3%200-6-2.7-6-6s2.7-6%206-6%206%202.7%206%206-2.6%206-6%206z%22%20fill%3D%22%23fefbfb%22%3E%3C%2Fpath%3E%20%3C%2Fsvg%3E');
                background-repeat: no-repeat;
                content: '';
            }
            /* .container {
                background-image: url("/images/beer1.jpg");
                background-size: cover;
                background-position: center;
            } */
            .carousel-control-prev,
            .carousel-control-next {
            background-color: transparent;
            border: none;
            outline: none;
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
            background-image: none;
            }
            .carousel-indicators {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            }

            .carousel-indicators button {
            width: 10px;
            height: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
            border-radius: 50%;
            margin: 0 5px;
            padding: 0;
            transition: background-color 0.3s ease;
            }

            .carousel-indicators button.active {
            background-color: rgba(255, 255, 255, 1);
            }



        </style>

    </head>

    <body>
        <header class="mb-auto">

            <div>
            <h1>Dream Catchears</h1>
            </div>
            <h2>{{Auth::user()->name}}さん、ようこそ！</h2>
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





     <form action="/beer/list" method="get" class="search-form-003">
    <label>
        <input type="text" placeholder="検索したいこと入れてね♡">
    </label>
    <button type="submit" class="btn btn-primary" aria-label="検索"></button>
</form>






<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/ebisu.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="jyugon.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/puremoru.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"><</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">></span>
  </button>
</div>


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
                                            </span>
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
