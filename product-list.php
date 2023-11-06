<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="assets/css/layout.css" rel="stylesheet" />
    <link href="assets/css/pages/product-list.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/../assets/images/favicon.ico"/>
</head>

<body>
    <?php include_once './partial/header.php'; ?>
    <?php
    $productList = [
        [
            'image'     => "product-image-1.jpeg",
            'status'    => "販売中！",
            'type'      => "DVD",
            'name'      => "【通常版DVD】「おそ松さん～魂のたこ焼きパーティーと伝説のお泊り会～」オンラインイベント！＜チェキチャ！＞を使ったトーク＆撮影会！",
            'author'    => "おそ松さん",
            'date'      => "",
            'price'     => "8,800",
        ],
        [
            'image'     => "product-image-1.jpeg",
            'status'    => "販売中！",
            'type'      => "BD",
            'name'      => "【通常版Blu-ray】「おそ松さん～魂のたこ焼きパーティーと伝説のお泊り会～」オンラインイベント！＜チェキチャ！＞を使ったトーク＆撮影会！",
            'author'    => "おそ松さん",
            'date'      => "",
            'price'     => "9,900",
        ],
        [
            'image'     => "product-image-2.jpeg",
            'status'    => "販売中！",
            'type'      => "CD",
            'name'      => "オリジナルアルバム「orbit」リリース記念・オンライントークイベント",
            'author'    => "ダズビー",
            'date'      => "",
            'price'     => "3,850",
        ],
        [
            'image'     => "product-image-3.jpeg",
            'status'    => "販売中！",
            'type'      => "CD",
            'name'      => "【第2弾】「霞の向こうへ」リリース記念・オンライントークイベント",
            'author'    => "中島由貴",
            'date'      => "",
            'price'     => "2,200",
        ],
        [
            'image'     => "product-image-3.jpeg",
            'status'    => "販売終了",
            'type'      => "CD",
            'name'      => "「霞の向こうへ」リリース記念・オンライントークイベント",
            'date'      => "販売終了",
            'author'    => "中島由貴",
            'price'     => "2,200",
        ],
        [
            'image'     => "product-image-4.jpeg",
            'status'    => "販売終了",
            'type'      => "CD",
            'name'      => "【第2弾】ニューシングル「NANAKORO!」リリース記念オンラインイベント",
            'date'      => "販売終了",
            'author'    => "BMK",
            'price'     => "3,300",
        ],
        [
            'image'     => "product-image-5.jpeg",
            'status'    => "販売終了",
            'type'      => "CD",
            'name'      => "【バグちゃん初回限定盤】NEWシングル「バグちゃん」＆「星屑レクイエム」リリース記念 オンライントークイベント",
            'date'      => "販売終了",
            'author'    => "なすお☆",
            'price'     => "1,980",
        ],
        [
            'image'     => "product-image-6.jpeg",
            'status'    => "販売終了",
            'type'      => "CD",
            'name'      => "【星屑レクイエム初回限定盤】NEWシングル「バグちゃん」＆「星屑レクイエム」リリース記念 オンライントークイベント",
            'date'      => "販売終了",
            'author'    => "なすお☆",
            'price'     => "1,980",
        ],
        [
            'image'     => "product-image-7.jpeg",
            'status'    => "販売終了",
            'type'      => "CD",
            'name'      => " ニューシングル「NANAKORO!」リリース記念オンラインイベント",
            'date'      => "販売終了",
            'author'    => "BMK",
            'price'     => "3,300",
        ],
        [
            'image'     => "product-image-8.jpeg",
            'status'    => "販売終了",
            'type'      => "CD",
            'name'      => "【60秒セット】円神、5th Single「Dreamland」発売記念 1:1 オンライントーク会",
            'date'      => "販売終了",
            'author'    => "円神",
            'price'     => "2,800",
        ],
    ]
    ?>

    <div class="product-list-all">
        <div class="product-list">
            <h2 class="product-list__title">商品一覧</h2>
            <div class="row product-list__row gy-0">
                <?php
                foreach ($productList as $product) :
                ?>
                    <div class="product-list__item col-md-6 col-lg-6">
                        <div class="product-list__card-container">
                            <a href="./product-detail.php" class="product-list__link">
                                <div class="product-list__card">
                                    <div class="<?php if ($product["status"] == "販売中！") : ?>product-list__sale-ribbon<?php else : ?>product-list__end-sale-ribbon<?php endif; ?>">
                                        <p class="product-list__status">
                                            <?= $product["status"] ?>
                                        </p>
                                    </div>
                                    <div class="product-list__image-container">
                                        <img src="assets/images/<?= $product["image"] ?>" alt="" class="product-list__image">
                                    </div>
                                    <div class="product-list__info-container">
                                        <p class="product-list__benefit">
                                            チェキチャ特典コード付き！
                                        </p>
                                        <p class="product-list__name">
                                            <span class="product-list__type">[ <?= $product["type"] ?> ]</span>
                                            <?= $product["name"] ?>
                                        </p>
                                        <p class="product-list__author">
                                            <?= $product["author"] ?>
                                        </p>
                                        <p class="product-list__date">
                                            <?= $product["date"] ?>
                                        </p>
                                        <p class="product-list__price">
                                            <?= $product["price"] ?>円 <span class="product-list__price-info">(税込)</span>
                                        </p>
                                        <p class="product-list__btn">
                                            詳細はこちら
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
        <nav aria-label="Page navigation example" class="product-list-all__pagination">

            <div class="d-flex product-list-all__navigator-wrap">
                <div class="d-flex product-list-all__navigator-left">
                    <div class="product-list-all__first-container">
                        <a class="product-list-all__first product-list-all__link-disabled" href="#">First</a>
                    </div>
                    <div class="product-list-all__prev-container product-list-all__disabled">
                        <a class="page-link product-list-all__prev product-list-all__link-disabled" href="#">Prev</a>
                    </div>
                </div>
                <div class="d-flex product-list-all__navigator-right">
                    <div class="product-list-all__next-container">
                        <a class="page-link product-list-all__next" href="#">Next</a>
                    </div>
                    <div class="product-list-all__last-container">
                        <a class="product-list-all__last" href="#">Last</a>
                    </div>
                </div>
            </div>

            <ul class="pagination align-items-center justify-content-center product-list-all__pagination-wrap">
                <li class="page-item disabled"><a class="page-link product-list-all__pagination-number product-list-all__link-disabled" href="#">1</a></li>
                <li class="page-item"><a class="page-link product-list-all__pagination-number" href="#">2</a></li>
                <li class="page-item"><a class="page-link product-list-all__pagination-number" href="#">3</a></li>
                <li class="page-item"><a class="page-link product-list-all__pagination-number" href="#">4</a></li>
                <li class="page-item"><a class="page-link product-list-all__pagination-number" href="#">5</a></li>
            </ul>
        </nav>
    </div>
    <?php include_once './partial/footer.php'; ?>
    <script src="assets/js/layout.js"></script>
</body>

</html>