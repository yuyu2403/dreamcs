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
<a href="/cart">買い物カートへ</a><br>
<form action="/beer/list" method="get">
    <input type="text" name="search"
    {{-- value="{{$keyword}}"  --}}
    placeholder="検索したいこと入れてね♡">
    <input type="submit" value="検索">
</form>
<div class="container">
    <div id="contact-list">



        {{-- 商品リストを表示 --}}
            @foreach ($contacts as $contact)
                <div class='contact'>
                <img src="images/{{ $contact->image }}" alt="{{ $contact->image }}" />
                <h3>{{ $contact->name }}</h3>
                <p>{{ $contact->detail }}</p>
                <p>{{ $contact->category }}</p>
                <p>Price: &#165;{{ $contact->detail }}</p>
                </div>
@endforeach


    </div>
</div>

</body>
</html>
