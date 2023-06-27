逐一コミットして変更の同期を押してのあとにプッシュしてプルリクエスト承認してもらう。
ブランチをメインにマージ
承認してもらったら新しいブランチを作る
これの繰り返し

<!DOCTYPE html>
<html>
<head>

<a href="/list">一覧画面へ</a><br>
<a href="/cart">買い物カートへ</a><br>
<form action="/beer/list" method="get">
    <input type="text" name="search" value="検索">
</form>

    <title>Beer Shop</title>
    <style>
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        .product img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Beer Shop</h1>
    </header>

    <div id="product-list">
        <?php
        // 商品データの配列
        $products = [
            [
                'name' => 'Beer 1',
                'description' => 'Description of Beer 1',
                'price' => 9.99,
                'image' => 'itibannshibori.jpg',
            ],
            [
                'name' => 'Beer 2',
                'description' => 'Description of Beer 2',
                'price' => 19.99,
                'image' => 'kuroraberu.jpg',
            ],
            [
                'name' => 'Beer 3',
                'description' => 'Description of Beer 3',
                'price' => 29.99,
                'image' => 'ebisu.jpg',
            ],
            [
                'name' => 'Beer 4',
                'description' => 'Description of Beer 4',
                'price' => 29.99,
                'image' => 'puremoru.jpg',
            ],
            [
                'name' => 'Beer 5',
                'description' => 'Description of Beer 5',
                'price' => 29.99,
                'image' => 'supadora.jpg',
            ],
            [
                'name' => 'Beer 6',
                'description' => 'Description of Beer 6',
                'price' => 29.99,
                'image' => 'jyugon.jpg',
            ]
        ];


        // 商品リストを表示
        foreach ($products as $product) {
            echo "<div class='product'>";
            echo "<img src='images/{$product['image']}' alt='{$product['name']}' />";
            echo "<h3>{$product['name']}</h3>";
            echo "<p>{$product['description']}</p>";
            echo "<p>Price: {$product['price']}</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
