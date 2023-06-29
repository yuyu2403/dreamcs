<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注文確認画面</title>

    <a href="/list"><button type="button">一覧画面へ</button></a>
    <a href="/cart"><img src="/images/cart.png" alt="買い物カートの画像"></a><form action="/beer/list" method="get">

</head>
<body>
<p>注文内容確認</p>

<ul>
@foreach ($items as $item)
    <li>
        品名：
        <p>{{ $item['name'] }}</p>
    </li>
    <li>
        価格：
        <p>{{ $item['price'] }}</p>
    </li>
    <li>
        数量：
        <p>{{ $item['num'] }}</p>
    </li>
    @endforeach
    <li>
            個数の合計：
            <p>{{ $totalQuantity }}</p>
        </li>
        <li>
            合計金額：
            <p>{{ $totalPrice }}</p>
        </li>
    <li>
        住所：
        <p>{{$request->adress}}</p>
    </li>
    <li>
        メールアドレス：
        <p>{{$request->email}}</p>
    </li>
</ul>

<form action="" method="post">
<input type="hidden" name="name" value="{{$request->name}}">
<input type="hidden" name="price" value="{{$request->price}}">
<input type="hidden" name="num" value="{{$request->num}}">
<input type="hidden" name="adress" value="{{$request->adress}}">
<input type="hidden" name="point" value="{{$request->email}}">
<div>
<button class="btn btn-primary" type="submit" name="back" >
   <i class="fa-solid fa-caret-left"></i>戻る
</button>

</div>
<div>
    <button class="btn btn-primary" type="submit" name="send">
            送信
            <i class="fa-solid fa-caret-right"></i>
    </button>
</div>
@csrf
</form>
</body>
</html>
