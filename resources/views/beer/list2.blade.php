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
<div class="container">
    <div id="product-list">
        <?php
        // 商品データの配列
        $products = [
            [
                'name' => 'キリン 一番搾り生ビール',
                'description' => 'アルコール成分: 5% 原材料: 麦芽（外国製造又は国内製造（5%未満））、ホップ カロリー:40kcal/100ml',
                'price' => 280,
                'image' => 'itibannshibori.jpg',
            ],
            [
                'name' => 'サッポロ 生ビール黒ラベル★',
                'description' => 'アルコール成分: 5% 原材料:麦芽（外国製造又は国内製造（5%未満））、ホップ、米、コーン、スターチ カロリー:40kcal/100ml',
                'price' => 245,
                'image' => 'kuroraberu.jpg',
            ],
            [
                'name' => 'ヱビスビール',
                'description' => 'アルコール成分: 5% 原材料:麦芽（外国製造又は国内製造（5%未満））、ホップ カロリー:42kcal/100ml',
                'price' => 370,
                'image' => 'ebisu.jpg',
            ],
            [
                'name' => 'ザ・プレミアム・モルツ',
                'description' => 'アルコール成分: 5.5% 原材料:麦芽（外国製造又は国内製造）、ホップ カロリー:47kcal/100ml',
                'price' => 420,
                'image' => 'puremoru.jpg',
            ],
            [
                'name' => 'アサヒ スーパードライ',
                'description' => 'アルコール成分: 5% 原材料:麦芽（外国製造又は国内製造（５%未満））、ホップ、米、コーン、スターチ カロリー:42kcal/100ml',
                'price' => 280,
                'image' => 'supadora.jpg',
            ],
            [
                'name' => 'クラフトビール ジュゴン',
                'description' => 'アルコール成分: 6% 原材料:麦芽（外国製造又は国内製造（５%未満））、ホップ、米、スターチ カロリー:43kcal/100ml',
                'price' => 770,
                'image' => 'jyugon.jpg',
            ]
        ];


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
</div>

</body>
</html>
