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
    <title>注文確認画面</title>
</head>
<body>
<p>注文内容確認</p>

<ul>
    <li>
        品名：
        <p>{{$request->name}}</p>
    </li>
    <li>
        価格：
        <p>{{$request->tel}}</p>
    </li>
    <li>
        数量：
        <p>{{$request->address}}</p>
    </li>
    <li>
        住所：
        <p>{{$request->point}}</p>
    </li>
    <li>
        メールアドレス：
        <p>{{$request->point}}</p>
    </li>
</ul>

<form action="" method="post">
<input type="hidden" name="name" value="{{$request->name}}">
<input type="hidden" name="tel" value="{{$request->tel}}">
<input type="hidden" name="address" value="{{$request->address}}">
<input type="hidden" name="point" value="{{$request->point}}">
<input type="hidden" name="point" value="{{$request->point}}">
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
