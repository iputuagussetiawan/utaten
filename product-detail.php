<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link href="assets/css/layout.css" rel="stylesheet" />
    <link href="assets/css/pages/product-detail.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/../assets/images/favicon.ico"/>
</head>

<body>
    <?php include_once './partial/header.php'; ?>

    <section class="product-detail">
        <div class="container product-detail__container">
            <div class="row product-detail__row">
                <div class="col-12">
                    <div class="product-detail__name-info-container">
                        <p class="product-detail__author-top">
                            おそ松さん
                        </p>
                        <p class="product-detail__name-top">
                            <span class="product-detail__type">[ DVD ]</span>
                            【通常版DVD】「おそ松さん～魂のたこ焼きパーティーと伝説のお泊り会～」オンラインイベント！＜チェキチャ！＞を使ったトーク＆撮影会！
                        </p>
                        <p class="product-detail__date-top">
                            公開日：<span class="product-detail__date-value">2023/10/27 18:00</span>
                        </p>
                    </div>
                </div>
                <div class="col-5 col-md-5 col-lg-5">
                    <div class="product-detail__image-container">
                        <img src="assets/images/product-detail-1.jpeg" alt="" class="product-detail__image">
                    </div>
                </div>
                <div class="col-7 col-md-7 col-lg-7">
                    <div class="product-detail__info-container">
                        <p class="product-detail__author">
                            おそ松さん
                        </p>
                        <p class="product-detail__name">
                            <span class="product-detail__type">[ DVD ]</span>
                            【通常版DVD】「おそ松さん～魂のたこ焼きパーティーと伝説のお泊り会～」オンラインイベント！＜チェキチャ！＞を使ったトーク＆撮影会！
                        </p>
                        <p class="product-detail__date">
                            公開日：<span class="product-detail__date-value">2023/10/27 18:00</span>
                        </p>
                        <p class="product-detail__benefit">
                            チェキチャ！シリアルコード付き！
                        </p>
                        <br>
                        <p class="product-detail__price-label">
                            販売価格：
                        </p>
                        <p class="product-detail__price">
                            8,800円 <span class="product-detail__price-info">(税込)</span>
                        </p>
                        <p class="product-detail__point-info">
                            ※1会計につき10点まで
                        </p>
                        <p class="product-detail__fee-label">
                            梱包送料 ：
                        </p>
                        <p class="product-detail__fee-value">
                            880円
                        </p>
                        <p class="product-detail__fee-text">
                            (税抜価格800円)
                        </p>
                        <div class="product-detail__start-sales">
                            <p class="product-detail__start-sales-label">
                                販売開始
                            </p>
                            <p class="product-detail__start-sales-value">
                                2023/10/28 12:00
                            </p>
                        </div>
                        <div class="product-detail__end-sales">
                            <p class="product-detail__end-sales-label">
                                販売終了
                            </p>
                            <p class="product-detail__end-sales-value">
                                各イベント当日の実施1時間前まで
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lottery">
        <div class="container">
            <div class="lottery__inner">
                <h2 class="lottery__title">こちらの商品は抽選販売になります</h2>
                <button type="submit" class="lottery__button">以下のアイテム一覧からご応募ください</button>
                <dl class="lottery__dateDetail">
                    <dt>※応募期間</dt>
                    <dd>2024/03/03 13:45 〜 2024/03/09 13:45</dd>
                </dl>
                <dl class="lottery__dateDetail">
                    <dt>※当選発表日</dt>
                    <dd>2024/03/11 13:45</dd>
                </dl>

                <div class="lottery__content">

                    <p class="lottery__content-title">【抽選商品に関して】</p>
                    <ul>
                        <li>必ずしも応募数分が当たるとは限りません。</li>
                        <li>当選数分の商品を指定期限内までにご購入いただくこととなります。</li>
                        <li>当選時に数量の増減は一切いたしかねます。</li>
                    </ul>
                </div>

                <div class="lottery__links">
                    <h3 class="lottery__link-title">
                        ＜この商品はシリアルコード転売防止対策商品となります＞  
                    </h3>
                    <ul>
                        <li><a href="">こちらの商品の購入はお客様のイベント時に使うスマートフォンで購入ください。</a></li>
                        <li><a href="">事前に「チェキチャ！」アプリをインストールを頂いた上で購入頂く必要があります。</a></li>
                        <li><a class="text-red" href="">こちらからご利用の端末を認証してください。</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="product-item">
        <div class="product-item__container">
            <h2 class="product-item__title text-center">アイテム一覧</h2>

            <div class="product-item__select-date">
                <p class="product-item__select-date-label text-center">
                    ご希望のチェキチャ開始日時を選択してください
                </p>
                <div class="product-item__form-select-group">
                    <label for="select-date" class="d-none">Select Date</label>
                    <select name="select-date" id="selectDate" class="product-item__form-select form-select">
                        <option value="" disabled>ご希望のチェキチャ開始日時を選択してください</option>
                        <option value="2023-12-17 13:00:00" selected>12月17日(日)13:00〜</option>
                        <option value="2023-12-17 14:00:00">12月17日(日)14:00〜</option>
                        <option value="2023-12-17 15:00:00">12月17日(日)15:00〜</option>
                        <option value="2023-12-17 16:00:00">12月17日(日)16:00〜</option>
                        <option value="2023-12-17 17:00:00">12月17日(日)17:00〜</option>
                        <option value="2023-12-17 18:00:00">12月17日(日)18:00〜</option>
                    </select>
                </div>
                <p class="product-item__select-limit-label text-center">
                    購入時に2ショット撮影かメンバーのみのソロショット撮影かをお選びください。
                </p>
            </div>

            <div class="product-item-list">
                <div class="container product-item-list__container">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-4 product-item-list__card-container">
                            <div class="product-item-list__card">
                                <div class="product-item-list__image-container">
                                    <img src="assets/images/product-item-iamge-1.jpeg" alt="" class="product-item-list__image">
                                </div>
                                <div class="product-item-list__text-container">
                                    <div class="product-item-list__info-container">
                                        <p class="product-item-list__name">
                                            【12/17(日)13:00〜】「おそ松・チェキチャID１つ付き」
                                        </p>
                                    </div>
                                    <div class="product-item-list__cart-box">
                                        <div class="product-item-list__cart-container">
                                            <div class="product-item-list__shot-select-container">
                                                <select name="productShot" id="productShot" class="product-item-list__shot-select form-select">
                                                    <option value="solo_shot" selected>ソロショット</option>
                                                    <option value="two_shots">ツーショット</option>
                                                </select>
                                            </div>
                                            <div class="product-item-list__quantity-select-container">
                                                <select name="productQuantity" id="productQuantity" class="product-item-list__quantity-select form-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="product-item-list__btn-container">
                                            <button type="submit" class="product-item-list__cart-btn">カートに入れる</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-item-detail">
        <div class="container product-item-detail__container">
            <h2 class="product-item-detail__title text-center">アイテム詳細</h2>

            <div class="product-item-detail__intro-container">
                <p class="product-item-detail__subtitle">おそ松さんと1対1対で2ショorソロショが撮れる！</p>
                <p class="product-item-detail__intro">
                    「おそ松さん～魂のたこ焼きパーティーと伝説のお泊り会～」の通常版Blu-ray＆DVDが11月24日(金)に発売することを記念して、1対1の特典会アプリ・チェキチャを使用したオンラインイベントの開催が決定しました。
                </p>
                <p class="product-item-detail__intro">
                    音楽メディアUtaTenが提供するECサイトSTORE by UtaTen(R)にて、対象商品をご購入頂いたお客様には、1対1でおそ松さんのメンバーいずれかとお客様で2ショットorソロショットを撮影し、その場でデジタルフォトデータがもらえる特典会アプリ「チェキチャ！」の参加専用シリアルコードが付いてきます。
                </p>
                <p class="product-item-detail__intro">
                    さらに、デジタルフォトデータに加え、<span class="product-item-detail__intro--orange">「6つ子集合チェキ（1種）」</span> 現物もプレゼント決定！
                </p>
                <p class="product-item-detail__intro">
                    その他、ご利用方法などを必ず<a href="" class="product-item-detail__intro--link-red">コチラの特典会マニュアル</a>をご確認くださいますよう、お願いします。
                </p>
                <p class="product-item-detail__intro">
                    <span class="product-item-detail__intro--red-bg">※こちらの商品は【通常版DVD】となりますので、ご購入の際ご注意ください。</span>
                </p>
                <p class="product-item-detail__intro">
                    <span class="product-item-detail__intro--red-bg">ご購入時にお客様のご希望で2ショットか、ソロショットのどちらか1つを選択できます。</span>
                </p>

                <p class="product-item-detail__intro-title">
                    ●販売期間●
                </p>
                <p class="product-item-detail__intro-date">
                    10月28日(土)12時00分～各イベント実施時間の1時間前まで
                </p>
                <p class="product-item-detail__intro">
                    商品発送：商品は順次発送させて頂きます。
                    <br>
                    ※Blu-ray＆DVDの発送スケジュールについては、諸事情等により予告なく変更する場合がございます。
                    <br>
                    ※先着順での販売となります。
                    <br>
                    ※各販売商品数に限りがございます。商品が無くなり次第終了となりますので予めご了承下さい。
                </p>

                <p class="product-item-detail__intro-title">
                    ●日本国外への発送について●
                </p>
                <p class="product-item-detail__intro">
                    ※日本国外への発送を希望される方は、転送サービスをご検討ください。 なお、海外に発送される場合の荷物の破損や紛失など全ての問い合わせやサポートはSTORE by UtaTenでは対応できません。
                    <br>
                    ・・転送サービス（例）・・
                    <br>
                    <a href="" class="product-item-detail__intro--link-red">https://www.tenso.com/en</a>
                    <br>
                    <a href="" class="product-item-detail__intro--link-red">https://www.baggageforward.co.jp/en/</a>
                </p>
                <p class="product-item-detail__intro">
                    <span class="product-item-detail__intro--red-bg">ご購入時にお客様のご希望で2ショットか、ソロショットのどちらか1つを選択できます。</span>
                    <br>
                    本イベントはスマートフォン専用アプリ「チェキチャ！」を使用します。
                    <br>
                    一部の機種には対応していない場合がございます。またパソコンではご利用できません。
                    <br>
                    対応OS：iOS 11以上、 Android 5.0以上
                    <br>
                    上記のOSを搭載したタブレットでもご利用が可能です。
                </p>
                <p class="product-item-detail__intro">
                    購入前にチェキチャアプリがインストールできるかをご確認ください。
                    <br>
                    購入後に、ご参加頂けなかった場合でも振替等の対応は致しかねますので、予めご了承下さい。
                </p>
                <p class="product-item-detail__intro">
                    <a href="" class="product-item-detail__intro--link-red">▷アプリのインストールはこちら</a>
                </p>

                <p class="product-item-detail__intro-title">
                    ●対象商品●
                </p>
                <p class="product-item-detail__intro">
                    2023年11月24日（金）発売
                    <br>
                    「おそ松さん～魂のたこ焼きパーティーと伝説のお泊り会～」
                    <br>
                    【通常版DVD】
                    <br>
                    品番：EYBA-14021
                    <br>
                    価格：¥8,800(税込)
                    <br>
                    JAN:4580055360213
                    <br>
                    <span class="product-item-detail__intro--orange">「6つ子集合チェキ（1種）」付属</span>
                </p>
                <p class="product-item-detail__intro">
                    ※購入時に梱包発送費が別途必要となります。(料金：880円(税込)　対象：日本国内のみ)
                </p>
                <p class="product-item-detail__intro">
                    【イベントに関して購入規定】
                    <br>
                    <span class="product-item-detail__intro--red-bg">
                        ・1会計につき10点まで購入可能
                    </span>
                    <br>
                    ※対象商品を1点お買い上げ毎に、チェキチャに1回参加できます。
                    <br>
                    ※1回の決済につき、送料880円(税込)が別途必要となります。
                    <br>
                    ※商品の発送は、イベント後、準備が出来次第、発送させていただきます。
                    <br>
                    ※お支払い方法は、クレジットカードと、各種携帯電話キャリアでの支払い（ドコモ払い、auかんたん決済、ソフトバンクまとめて支払い/ワイモバイルまとめて支払い）、LINE Payがご利用になれます。
                    <br>
                    ご利用になれるクレジットカードは、JCB・VISA・MasterCardのブランドカードです。
                    <br>
                    プリペイドタイプやデビッドタイプのクレジットカード、バンドルカードはご利用になれません。
                    <br>
                    ※購入後、購入した特典会専用のシリアルコードをメールにてお送りいたしますので、チェキチャ！（アプリ内）の該当イベントに対してそのシリアルコードを入力しイベントへご参加ください。
                    <br>
                    ※シリアルコードは購入後メールとマイページにて確認ができます。
                </p>

                <p class="product-item-detail__intro-title">
                    ●特典会実施概要●
                </p>
                <p class="product-item-detail__intro">
                    チェキチャ実施日時
                    <br>
                    ※アプリケーションチェキチャ！の「Artist」カテゴリにて、イベントの前日の8時00分に表示されます。
                    <br>
                    <span class="product-item-detail__intro--red-bg">
                        ※衣装は、パジャマを予定しております。
                    </span>
                    <br>
                    <span class="product-item-detail__intro-date--bold">12月17日(日)</span>
                    <br>
                    ■第1部【おそ松（約60秒）】
                    <br>
                    実施時間：13時00分～13時30分
                    <br>
                    シリアルコード入力期間：12月16日(土)8時00分～12月17日(日)12時15分
                    <br>
                    並び順の確定(抽選式)：12月17日(日)12時30分
                    <br>
                    （チェキチャ待機画面にて順番が表示されます）
                    <br>
                </p>

                <p class="product-item-detail__intro">
                    ■第2部【カラ松（約60秒）】
                    <br>
                    実施時間：14時00分～14時30分
                    <br>
                    シリアルコード入力期間：12月16日(土)8時00分～12月17日(日)13時15分
                    <br>
                    並び順の確定(抽選式)：12月17日(日)13時30分
                    <br>
                    （チェキチャ待機画面にて順番が表示されます）
                </p>

                <p class="product-item-detail__intro">
                    ■第3部【チョロ松（約60秒）】
                    <br>
                    実施時間：15時00分～15時30分
                    <br>
                    シリアルコード入力期間：12月16日(土)8時00分～12月17日(日)14時15分
                    <br>
                    並び順の確定(抽選式)：12月17日(日)14時30分
                    <br>
                    （チェキチャ待機画面にて順番が表示されます）
                </p>

                <p class="product-item-detail__intro">
                    ■第4部【一松（約60秒）】
                    <br>
                    実施時間：16時00分～16時30分
                    <br>
                    シリアルコード入力期間：12月16日(土)8時00分～12月17日(日)15時15分
                    <br>
                    並び順の確定(抽選式)：12月17日(日)15時30分
                    <br>
                    （チェキチャ待機画面にて順番が表示されます）
                </p>

                <p class="product-item-detail__intro">
                    ■第5部【十四松（約60秒）】
                    <br>
                    実施時間：17時00分～17時30分
                    <br>
                    シリアルコード入力期間：12月16日(土)8時00分～12月17日(日)16時15分
                    <br>
                    並び順の確定(抽選式)：12月17日(日)16時30分
                    <br>
                    （チェキチャ待機画面にて順番が表示されます）
                </p>

                <p class="product-item-detail__intro">
                    ■第6部【トド松（約60秒）】
                    <br>
                    実施時間：18時00分～18時30分
                    <br>
                    シリアルコード入力期間：12月16日(土)8時00分～12月17日(日)17時15分
                    <br>
                    並び順の確定(抽選式)：12月17日17時30分
                    <br>
                    （チェキチャ待機画面にて順番が表示されます）
                </p>

                <p class="product-item-detail__intro">
                    ※シリアルコード入力期間内に必ず入力を完了してください。
                    <br>
                    ※シリアルコードの入力期間を過ぎますと、参加無効となります。
                    <br>
                    ※ご購入頂いたイベントの参加順に関しては、イベント実施時間の30分前に抽選にて順番が発表されます。
                </p>

                <p class="product-item-detail__intro">
                    <span class="product-item-detail__intro--bold">■ポーズリクエスト！■</span>
                    <br>
                    同イベントではポーズリクエストができるので、必ず下記3つの中からお選びいただきチェキチャ！の待機画面の聞きたいことに記載してください。
                    <br>
                    ※詳しい内容はマニュアルをご参照ください。
                </p>
                <ul class="product-item-detail__intro-list--orange">
                    <li>ピース</li>
                    <li>ハート</li>
                    <li>シェ―</li>
                </ul>

                <p class="product-item-detail__intro-title">
                    ●購入および特典会ご利用のご注意●
                </p>
                <p class="product-item-detail__intro">
                    ※キャラクターの声でセリフを言って欲しいなどのご要望は対応できかねますので、予めご了承ください。
                    <br>
                    <span class="product-item-detail__intro--red-bg">※アーカイブは2023年12月20日（水）23時59分まで残りますが、閲覧には別途費用がかかります。プレミアム会員も同様です。</span>
                    <br>
                <ul class="product-item-detail__intro-list">
                    <li>購入後、日付や時間の変更は出来かねます。</li>
                    <li>購入された商品の返品はできませんが不良品があった場合は良品へと交換させていただきます。</li>
                    <li>お客様が獲得された特典はお客様ご自身でご利用ください。また、複数人での使用は禁止です。わかり次第、終了となります。13歳</li>
                </ul>
                未満の方は、必ず保護者の方とご一緒に参加いただきますようお願い致します。未成年の方は、事前に保護者の方の了承を得てからご参加下さい。
                <ul class="product-item-detail__intro-list">
                    <li>イベント時に身分証明を確認させていただく場合がございますので、チェキチャを行う際予め身分証のご用意をお願い致します。</li>
                    <li>特典券の転売は禁止とさせていただきます。譲渡・転売・賃与などの行為も禁止とさせていただき、禁止行為が発覚した場合は、特典券（チェキチャシリアルコード）を無効にいたします。</li>
                    <li>不適切な行為や発言が見受けられた場合、運営側より強制的に終了とさせて頂き、その場合の返金に関しても一切致しかねますのでご注意ください。</li>
                    <li>配達時に長期のご不在などの理由でお届けできず弊社倉庫に戻った場合、出荷時には改めて送料をご負担いただきます。また保管期間は180日とさせていただきますので、保管期間内にサポート窓口へご連絡の上、必ずお受け取りをお願いいたします。</li>
                </ul>
                </p>

                <p class="product-item-detail__intro-title">
                    ●チェキチャ！についての注意事項●
                </p>
                <ul class="product-item-detail__intro-list">
                    <li>チェキチャ！は通信を使ってお楽しみ頂くサービスとなっております。万が一お客様の通信環境が理由により本サービスをお楽しみいただけなかった場合、特典券のやり直しは基本的には致しかねます。参加時には通信状態及び環境には十分ご注意下さい。</li>
                    <li>最適な推奨環境はwi-fiではなく大手キャリアの4G回線です。また速度制限や格安SIMケータイ会社により速度が出ない端末ではお楽しみいただけません。</li>
                    <li><span class="product-item-detail__intro--red-bg">必ず、チェキチャ実施45分前のシリアルコード受付締切までにシリアルコードを入力ください。受付締切を過ぎて使用ができなくなったシリアルコードの補填は致しません。また、その際の振替や商品の返品・返金は出来かねます。</span></li>
                    <li>お客様の順番が過ぎてから入出・待機いただきましてもイベントにはご参加いただけません。イベント開始後、必ずお客様の順番までにログインと待機をお願い致します。</li>
                    <li>チェキチャ中の録音・画面録画・スクリーンショットは禁止です。また録音・撮影行為を発見した場合は強制的に終了とさせて頂きます。</li>
                    <li>実施中に着信が来た事により、停止した分の補償はお受けできません。</li>
                    <li>配信中は、全て自動録画されています。</li>
                </ul>
                <p class="product-item-detail__intro">
                    <span class="product-item-detail__intro--red-bg">※サインの記載はございません。</span>
                </p>

                <p class="product-item-detail__intro-title">
                    ●チェキチャ！についての注意事項●
                </p>
                <ul class="product-item-detail__intro-list">
                    <li>お客様は、アプリをダウンロードして事前に無料会員登録をお済ませください。指定日時になりましたら、チェキチャ特典券(チェキチャ シリアルコードの番号)を入力し、ご予約ください。なおチェキチャ シリアルコードは購入した回と異なる回ではご利用になれません。</li>
                    <li>シリアルコードが入力できるチェキチャ予定は、<span class="product-item-detail__intro--red-bg">12月16日(土)8時00分</span>からチェキチャアプリ内に表示されます。</li>
                </ul>
                <p class="product-item-detail__intro">
                    ※実施中にスマートフォンの落下や充電切れ、着信などお客様の都合により通信が一時的に停止した場合などの補償はいたしかねます。
                </p>

                <p class="product-item-detail__intro-title">
                    ●「おそ松さん」アーティスト情報●
                </p>
                <p class="product-item-detail__intro">
                    TVアニメ「おそ松さん」は、赤塚不二夫の名作ギャグ漫画「おそ松くん」を原作とし、主人公である6つ子たちがクズでニートというダメな大人になった姿を描いた作品。2015年10月～2016年3月までTVアニメ第1期を放送、2017年10月～2018年3月まで第2期を放送、2019年3月15日には劇場版「えいがのおそ松さん」を公開し、2020年10月～2021年3月までテレビ東京ほかにてTVシリーズ第3期が放送されました。2022年7月より6周年記念作品第1弾新作アニメ 「おそ松さん～ヒピポ族と輝く果実～」、2023年7月より第2弾「おそ松さん～魂のたこ焼きパーティーと伝説のお泊り会～」が全国の劇場にて期間限定公開され、11月24日にはBlu-ray＆DVDが発売決定！
                </p>
            </div>
        </div>
    </section>

    <section class="register-banner">
        <div class="register-banner__container">
            <p class="register-banner__label">
                ＼ 以下より会員登録をお願いします ／
            </p>
            <div class="register-banner__btn-container">
                <a href="#" target="_blank" class="register-banner__btn">
                    会員登録する
                </a>
            </div>
        </div>
    </section>
    <?php include_once './partial/footer.php'; ?>
    <script src="assets/js/layout.js"></script>
</body>

</html>