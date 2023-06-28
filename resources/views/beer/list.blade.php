逐一コミットして変更の同期を押してのあとにプッシュしてプルリクエスト承認してもらう。
ブランチをメインにマージ
承認してもらったら新しいブランチを作る
これの繰り返し

<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    <title>Beer Shop</title>
    <style>
        .product {
            border: 5px solid #5afef6;
            padding: 60px;
            margin-bottom: 20px;
        }
        .product img {
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

<form action="/login" method="get">
    <button type="submit">ログイン</button>
</form>
@if ($products->count() > 0)
    <table border="1">
        <tr>
            <th>画像</th>
            <th>銘柄</th>
            <th>詳細</th>
            <th>値段</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product->image }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>{{ $product->price }}</td>
            @csrf
            </form>
            </td>
            </tr>
        @endforeach
    </table>
@else
@endif


{{-- <div class="container">
    <div id="product-list">

        // 商品データの配列

        // 商品リストを表示
            foreach ($products as $product) {
                echo "<div class='product'>";
                echo "<img src='images/{$product['image']}' alt='{$product['name']}' />";
                echo "<h3>{$product['name']}</h3>";
                echo "<p>{$product['description']}</p>";
                echo "<p>Price: &#165;{$product['price']}</p>";  // 日本円表記を追加
                echo "</div>";

}
        ?>
    </div>
</div> --}}

</body>
</html>
