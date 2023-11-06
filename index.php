<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STORE by UtaTen&reg;</title>
    <link href="assets/css/layout.css" rel="stylesheet" />
    <link href="assets/css/pages/home.css" rel="stylesheet" />
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

    <div class="jumbotron">
        <div class="swiper main-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="main-swiper__slide">
                        <a href="/product-detail.php" class="main-swiper__container">
                            <div class="main-swiper__image-container">
                                <img src="assets/images/swiper-1.jpg" alt="" class="main-swiper__image">
                            </div>
                            <div class="main-swiper__info-container">
                                <p class="main-swiper__name">
                                    <span class="main-swiper__type">
                                        [特集]
                                    </span>
                                    チェキチャ付きCD販売サイトSTORE by UtaTen®️とは?
                                </p>
                                <p class="main-swiper__author">
                                    &nbsp;
                                </p>
                                <p class="main-swiper__btn">
                                    詳細はこちら
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-swiper__slide">
                        <a href="/product-detail.php" class="main-swiper__container">
                            <div class="main-swiper__image-container">
                                <img src="assets/images/swiper-2.jpeg" alt="" class="main-swiper__image">
                            </div>
                            <div class="main-swiper__info-container">
                                <p class="main-swiper__name">
                                    <span class="main-swiper__type">
                                        [CD]
                                    </span>
                                    オリジナルアルバム「orbit」リリース記念・オンライントークイベント
                                </p>
                                <p class="main-swiper__author">
                                    ダズビー
                                </p>
                                <p class="main-swiper__btn">
                                    詳細はこちら
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-swiper__slide">
                        <a href="/product-detail.php" class="main-swiper__container">
                            <div class="main-swiper__image-container">
                                <img src="assets/images/swiper-3.jpeg" alt="" class="main-swiper__image">
                            </div>
                            <div class="main-swiper__info-container">
                                <p class="main-swiper__name">
                                    <span class="main-swiper__type">
                                        [BD]
                                    </span>

                                    【通常版Blu-ray】「おそ松さん～魂のたこ焼きパーティーと伝説のお泊り会～」オンラインイベント！＜チェキチャ！＞を使ったトーク＆撮影会！
                                </p>
                                <p class="main-swiper__author">
                                    おそ松さん
                                </p>
                                <p class="main-swiper__btn">
                                    詳細はこちら
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-swiper__slide">
                        <a href="/product-detail.php" class="main-swiper__container">
                            <div class="main-swiper__image-container">
                                <img src="assets/images/swiper-4.jpeg" alt="" class="main-swiper__image">
                            </div>
                            <div class="main-swiper__info-container">
                                <p class="main-swiper__name">
                                    <span class="main-swiper__type">
                                        [CD]
                                    </span>
                                    チェキチャ付きCD販売サイトSTORE by UtaTen®️とは?
                                </p>
                                <p class="main-swiper__author">
                                    中島由貴
                                </p>
                                <p class="main-swiper__btn">
                                    詳細はこちら
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-swiper__navigator">
            <div class="main-swiper__nav-btn main-swiper__prev-btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="main-swiper__prev-icon" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M752.145 0c8.685 0 17.572 3.434 24.237 10.099c13.33 13.33 13.33 35.143 0 48.473L320.126 515.03l449.591 449.591c13.33 13.33 13.33 35.144 0 48.474c-13.33 13.33-35.142 13.33-48.472 0L247.418 539.268c-13.33-13.33-13.33-35.144 0-48.474L727.91 10.1C734.575 3.435 743.46.002 752.146.002z" />
                </svg>
                <span class="main-swiper__prev-text">Prev</span>
            </div>
            <div class="swiper-pagination main-swiper__pagination"></div>
            <div class="main-swiper__nav-btn main-swiper__next-btn">
                <span class="main-swiper__next-text">Next</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="main-swiper__next-icon" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M271.653 1023.192c-8.685 0-17.573-3.432-24.238-10.097c-13.33-13.33-13.33-35.144 0-48.474L703.67 508.163L254.08 58.573c-13.33-13.331-13.33-35.145 0-48.475c13.33-13.33 35.143-13.33 48.473 0L776.38 483.925c13.33 13.33 13.33 35.143 0 48.473l-480.492 480.694c-6.665 6.665-15.551 10.099-24.236 10.099z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container" id="main">
            <div class="intro">
                <div class="intro__text">
                    STORE by UtaTenとは、アーティストと1対1でコミュニケーションが楽しめる、特典会アプリ「チェキチャ」の特典が付いた商品が購入できるお店です。
                </div>
            </div>
            <a href="#" class="chekicha">
                <img src="assets/images/checkica.jpg" alt="" class="chekicha__image">
            </a>
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
                <div class="product-list__more-btn-container text-center">
                    <a href="product-list.php" class="more-btn">
                        商品を全て見る
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include_once './partial/footer.php'; ?>
    <script src="assets/js/layout.js"></script>
</body>

</html>