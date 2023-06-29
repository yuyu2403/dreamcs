<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新商品登録確認画面</title>

    <a href="/list"><button type="button">一覧画面へ</button></a>
    <a href="/cart"><img src="/images/cart.png" alt="買い物カートの画像"></a>

</head>
<body>
<p>新商品確認</p>

<ul>
    <li>
        商品名：
        <p>{{$request->name}}</p>
    </li>
    <li>
        説明・詳細：
        <p>{{$request->detail}}</p>
    </li>
    <li>
        価格：
        <p>{{$request->price}}</p>
    </li>
    <li>
        在庫：
        <p>{{$request->stock}}</p>
    </li>
<li>
        カテゴリー：
        <p>{{$category->name}}</p>
    </li>
    <li>
        ビール画像：
        {{-- <img src='". asset("{{$file_path}}"). "' width='300'>; --}}
        <img src="{{ $image }}" width='300'>;

    </div>

</li>
</ul>

<form action="/addcomplete" method="post" enctype="multipart/form-data">


    <input type="hidden" name="name" value="{{$request->name}}">
    <input type="hidden" name="detail" value="{{$request->detail}}">
    <input type="hidden" name="price" value="{{$request->price}}">
    <input type="hidden" name="stock" value="{{$request->stock}}">
    <input type="hidden" name="category_id" value="{{$request->category_id}}">
    <input type="hidden" name="image" value="{{ $newImageName }}">
{{-- <input type="hidden" name="image" value="{{$request->image}}"> --}}
{{-- <input type="hidden" name="image" value="{{$file_path}}"> --}}
{{-- <input type="hidden" name="image" value="{{$request->image->getClientOriginalName()}}"> --}}
{{-- <input type="hidden" name="image" value="{{$file_path}}"> --}}

<div>
<button class="btn btn-primary" type="submit" name="back" >
<i class="fa-solid fa-caret-left"></i>戻る</button>

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
