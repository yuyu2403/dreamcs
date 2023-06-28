<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    @foreach ($errors->all() as $error)
<li><span class="error">{{$error}}</span></li>
@endforeach
    <h2>新商品の追加</h2>
<form action="/beer/list" method="GET">
<div>
        <label for="name">商品名</label>
        <input type="text" name="name" id="name"value="{{old('name')}}">
    @if ($errors -> has('name'))
    <span class="error">{{$errors -> first('name')}}</span>
    @endif
</div>
<div>
        <label for="detail">説明・詳細</label>
        <textarea name="detail" id="detail" value="{{old('detail')}}" cols="30" rows="10"></textarea>
    @if ($errors -> has('detail'))
    <span class="error">{{$errors -> first('detail')}}</span>
    @endif
</div>
<div>
        <label for="price">価格</label>
        <input type="text" name="price" id="price"value="{{old('price')}}">
    @if ($errors -> has('price'))
    <span class="error">{{$errors -> first('price')}}</span>
    @endif
</div>

<div>
        <label for="stock">在庫</label>
        <input type="text" name="stock" id="stock" value="{{old('stock')}}">
    @if ($errors -> has('stock'))
    <span class="error">{{$errors -> first('stock')}}</span>
    @endif
</div>

<div>
        <input type="submit" value="送信">
</div>
    @csrf
</form>
</body>
</html>