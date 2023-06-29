<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    <title>Beer Shop</title>
    <style>
        .contact {
            border: 5px solid #5afef6;
            padding: 60px;
            margin-bottom: 20px;
        }
        .contact img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<a href="/list">一覧画面へ</a><br>
<a href="/cart"><img src="/images/cart.png" alt="買い物カートの画像"></a><form action="/beer/list" method="get">
<form action="/list" method="get">
    <input type="text" name="search"
    {{-- value="{{$keyword}}"  --}}
    placeholder="検索したいこと入れてね♡">
    <input type="submit" value="検索">
</form>
<div class="container">
    <div id="contact-list">



        {{-- 商品リストを表示 --}}
        @foreach ($items as $item)
            <form action="/cart" method="GET">
                <div class='item'>
                {{-- <img src="{{ $item->filepath }}" width="200"> --}}
                <img src='". asset("{{$item->filepath}}"). "' width='200'>;
                <h3>{{ $item->name }}</h3>
                <p>{{ $item->detail }}</p>
                <p>{{$item->category->name}}</p>
                <p>Price: &#165;{{ $item->price }}</p>
                <input type="submit" value="購入">

                @if ($item->stock<0)
                現在、売り切れです。
                @endif

                @csrf
                </form>
                </div>
        @endforeach
    </div>
</div>

</body>
</html>
