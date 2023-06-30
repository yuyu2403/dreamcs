<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css2?family=Cherry+Swash&display=swap' rel= "stylesheet">

        <title>カートの中身</title>
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
                <form action="/dashboard">
                    <button type="submit">ログイン</button>
                </form>
            </form>
            <div class="centered">
                <h2>カートの中身</h2>



                <div class="top-right">
                    <a href="/cart">
                        <img src="/images/cart.png" alt="買い物カートの画像" style="border-radius: 50%; width: 130px; height: 130px;">
                    </a>
                </div>


                <table border='1'>
                    <thead>
                        <tr>
                            <th style="color: white;">商品名</th>
                            <th style="color: white;">個数</th>
                            <th style="color: white;">価格</th>
                            <th style="color: white;">合計金額</th>
                            <th style="color: white;">削除</th>
                            <th style="color: white;">数量変更</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart_items as $cart_item)
                            <tr>
                                <td style="color: white;">{{ $cart_item->item->name }}</td>
                                <td style="color: white;">{{ $cart_item->num }}</td>
                                <td style="color: white;">{{ $cart_item->item->price }}</td>
                                <td style="color: white;">{{ $cart_item->num * $cart_item->item->price }}</td>
                                <td>
                                    <form action="/cart/delete/{{ $cart_item->id }}" method="POST">
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                        <button type="submit">削除</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="/cart/edit/{{ $cart_item->id }}" method="POST">
                                        @csrf
                                        {{-- @method('EDIT') --}}
                                        <input type="number" name="num" value="{{ $cart_item->num }}" min="1" max='99'>
                                        <button type="submit">変更</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    <footer class="d-flex justify-content-center align-items-center mt-auto text-white-50">
                        <p style="font-size: 24px;">Yuusuke/Syouma/Arisa/Jinichiro </p>
                    </footer>






        </body>
    </head>
</html>
