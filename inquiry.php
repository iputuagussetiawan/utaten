<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry</title>
    <link href="assets/css/layout.css" rel="stylesheet" />
    <link href="assets/css/pages/inquiry.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/../assets/images/favicon.ico"/>
</head>
<body>
    <?php include_once './partial/header.php'; ?>
    <main>
        <section class="inquiry">
        <?php
            $questionList = [
                [
                    'title'     => "STORE by UtaTen®とは",
                    'description'    => "STORE by UtaTen®は、歌詞・音楽メディアUtaTenが立ち上げたCDなどのメディア販売のサービスです。STORE by UtaTen®でしか得られない特典があります。",
                ],
                [
                    'title'     => "会員登録について",
                    'description'    => "STORE by UtaTen®を利用するには、無料の会員登録が必要となります。<br> 会員登録を行うことで、購入時の手間が軽減されますので、是非事前にお済ましください。<br> 会員登録のページにて空メールを送信していただき、必要情報の入力をお願いいたします。<br>
                    なおメールが届かない場合は、このページのメール設定をご確認ください。<br> ココだけメール＠UtaTenの会員登録と別となります。<br>商品到着前に会員登録を削除された場合は、お届けできません。",
                ],
                [
                    'title'     => "ご購入について",
                    'description'    => '<ul class="cmnTxtList">
                        <li class="cmnTxtList__item">STORE by UtaTen®の商品は、特典の内容違いでアイテム別に分かれております。<br>アイテムの内容、ページの記載内容、数量、発送予定日をご確認いただき、購入をお願いいたします。</li>
                        <li class="cmnTxtList__item">購入が完了すると、お客様のメールアドレスにメールが届きます。<br>※マイページでも購入内容はご確認いただけます。</li>
                        </ul>',
                ],
                [
                    'title'     => "商品の変更やキャンセルについて",
                    'description'    => '決済完了後のキャンセルはできません。<br>
                    各商品やアイテムの販売ページに詳細記載内容や注意事項、本サイトの利用規約をよくご確認いただき、同意の上購入をお願いいたします。',
                ],
                [
                    'title'     => "間違った商品が届いた場合",
                    'description'    => '受け取った商品に問題がある場合は、商品受領後の5営業日以内に下記の問い合わせフォームからご連絡ください。
                    商品に不良があったと弊社が認定した場合は、弊社所定の手続に従い同一の商品と交換します。',
                ],
                [
                    'title'     => "特典のご利用について",
                    'description'    => '<ul>
                        <li>お客様が獲得された特典はお客様ご自身でご利用ください。</li>
                        <li>転売は禁止とさせていただきます。</li>
                        <li>特典のご利用については、購入ページにある実施日時や説明をお読みください。<br>また以下のページにて特典のお受け取り方法を説明しております。<br><a href="https://utaten.com/specialArticle/index/4026">https://utaten.com/specialArticle/index/4026</a></li>
                    </ul>',
                ],

                [
                    'title'     => "配送について",
                    'description'    => '<ul>
                    <li>配送は日本国内に限らせていただきます。<br>Shipment ; Japan Domestic Only</li>
                    <li>当社指定の配送会社からヤマト運輸、佐川急便を使って送られます。</li>
                    <li>送料は商品購入ページをご覧ください。</li>
                    <li>配達日時の指定はできません。</li>
                    <li>ご自宅以外の住所を書かれた場合、配送できない場合がございます。</li>
                    </ul>',
                ],
                [
                    'title'     => "お支払い方法について",
                    'description'    => 'お支払い方法は、クレジットカードと、各種携帯電話キャリアでの支払い（ドコモ払い、auかんたん決済、ソフトバンクまとめて支払い/ワイモバイルまとめて支払い）、LINEのモバイル送金・決済サービス(LINE Pay)がご利用になれます。
                    ご利用になれるクレジットカードは、JCB・VISA・MASTARのブランドカードです。
                    プリペイドタイプやデビッドタイプのクレジットカード、バンドルカードはご利用になれません。
                    LINE Payで決済が完了されると、LINEアプリにプッシュ通知が届きます。
                    なお、決済履歴はLINE Payにてご確認頂くことができます。
                    STORE by UtaTenでの決済は、同一サービスのココだけメールとして明細に反映されます。',
                ],
                [
                    'title'     => "クレジットカードがご利用できない",
                    'description'    => 'お客様とカード会社とのお支払いや契約状況をご確認ください。
                    例えば、先月の引き落としが残高不足となっているなどです。
                    弊社ではお客様のカード番号やその契約状況はわかりませんので、カード会社への問い合わせをお願いいたします。
                    本人認証サービスに登録済みのクレジットカードのみ使用可能です。',
                ],
                [
                    'title'     => "メールが届かない場合",
                    'description'    => 'お客様のメールアプリの設定や学習状況によっては、メールが迷惑メールフォルダやゴミ箱に振り分けられる場合がありますのでご確認ください。
                    お客様が迷惑メールの設定をされていなくても、ある日突然、ご契約の通信キャリアによってメールがフィルタリングされる場合があります。
                    その場合はこのページにある「utaten.com」のドメイン指定受信設定をお試しください。<div class="domainCopyBox">
                    <p>※タップ・クリックで簡単にコピーできます。</p>
                    <input class="domainCopy" type="text" value="utaten.com" readonly="">
                  </div> <p>なお、次のメールアドレスについてはメールサービス会社のフィルターにより、メールがお手元に届かないことがありますので、別のアドレスの使用をお勧めいたします。</p>
                  <ul class="cmnTxtList">
                        <li class="cmnTxtList__item">icloud.com</li>
                        <li class="cmnTxtList__item">mac.com</li>
                        <li class="cmnTxtList__item">me.com</li>
                    </ul>
                    <p>メールが迷惑メールに分類されてしまったり、届かない場合は、メール指定受信（各社により呼び名は若干異なります）をお試しください。</p>
                    <ul class="cmnTxtList">
                        <li class="cmnTxtList__item">
                        <a href="https://www.nttdocomo.co.jp/info/spam_mail/domain/">【docomo】指定受信設定はこちら</a>
                        </li>
                        <li class="cmnTxtList__item">
                        <a href="https://www.au.com/support/service/mobile/trouble/mail/email/filter/">【au(@ezweb.ne.jp)】受信リスト設定はこちら</a>
                        </li>
                        <li class="cmnTxtList__item">
                        <a href="https://www.softbank.jp/mobile/support/mail/antispam/mms/whiteblack/">【SoftBank】Eメール受信許可リスト設定はこちら</a>
                        </li>
                        <li class="cmnTxtList__item">
                        <p>【Gmail】フィルタ設定</p>
                        <ol class="cmnTxtList_ol">
                            <li class="cmnTxtList__item">Gmailにログインし、Gmailトップページ右上の【設定】をクリックする。</li>
                            <li class="cmnTxtList__item">クイック設定下にある【すべての設定を表示】をクリックする。</li>
                            <li class="cmnTxtList__item">【フィルタとブロック中のアドレス】をクリックする。</li>
                            <li class="cmnTxtList__item">フィルタの条件で【From】の項目に、【utaten.com】を入力し「フィルタ」作成ボタンをクリックする。</li>
                            <li class="cmnTxtList__item">【迷惑メールにしない】にチェックを押し、【フィルタを作成】ボタンをクリックし完了。</li>
                        </ol>
                        </li>
                    </ul>
                    ',
                ],
                
            ]
            ?>
            <div class="container">
                <h1 class="inquiry__title">
                    よくある質問・お問い合わせ
                </h1>
                <p class="inquiry__description">
                    先に、以下「よくある質問」をご確認の上、お問い合わせください。
                </p>
                <div class="accordion accordion-custom" id="accordionPanelsStayOpenExample">
                    <?php
                        $questionNumber=1;
                        foreach ($questionList as $question) :
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $questionNumber?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $questionNumber?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?php echo $questionNumber?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                </svg>
                                <?= $question["title"] ?>
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapse<?php echo $questionNumber?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?php echo $questionNumber?>">
                            <div class="accordion-body">
                                <?= $question["description"] ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        $questionNumber++;
                        endforeach;
                    ?>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h1 class="inquiry__title">
                        お問い合わせはこちら
                        </h1>
                        <p class="inquiry__description text-danger">※チェキチャに関するお問い合わせは、チェキチャアプリのマイページからご連絡ください。</p>
                        <div class="card-form">
                            <div class="card-form__input-group">
                                <label for="customerName" class="card-form__label form-label">お客様のお名前<br>※必須</label>
                                <input type="text" name="customerName" id="customerName" class="card-form__input form-control">
                            </div>
                            <div class="card-form__input-group">
                                <label for="customerEmail" class="card-form__label form-label">メールアドレス<br>※必須</label>
                                <input type="email" name="customerEmail" id="customerEmail" class="card-form__input form-control">
                            </div>
                            <div class="card-form__input-group">
                                <label for="customerSubject" class="card-form__label form-label">お問い合わせ対象のアーティスト</label>
                                <input type="text" name="customerSubject" id="customerSubject" class="card-form__input form-control">
                            </div>
                            <div class="card-form__input-group">
                                <label for="orderQTY" class="card-form__label form-label">注文番号</label>
                                <input type="text" name="orderQTY" id="orderQTY" class="card-form__input form-control">
                            </div>
                            <div class="card-form__input-group">
                                <label for="orderQTY" class="card-form__label form-label">お問い合わせの内容<br>※必須</label>
                                <textarea name="customerQuestion" id="customerQuestion" class="card-form__input form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="card-form__input-group">
                                <button class="card-form__btn" type="submit">確認画面へ</button>
                            </div>
                        </div>
                        <div class="card-info mt-3 mb-5">
                            <div class="card-info__inner">
                                <div class="card-info__content">
                                    <h3 class="card-info__title">メールが届かない方へ</h3>
                                    <p>※メールアドレスは正確にご入力ください。</p>
                                    <p>※ご入力されたメールアドレスが間違っている場合、弊社からの回答を差し上げることができません。</p>
                                    <p>※また下記の様なメールアドレスは正常にお問い合わせを受信できない場合がございます。予めご了承ください。</p>
                                    <ul>
                                        <li>記号をメールアドレスの先頭や@マークの直前に使用</li>
                                        <li>記号を2文字以上連続で使用</li>
                                        <li>極端に長すぎるメールアドレス</li>
                                    </ul>
                                </div>
                                <div class="card-info__content">
                                    <h3 class="card-info__title">受付時間・ご返信について</h3>
                                    <p>受付時間：平日10:00～17:30</p>
                                    <p>(土日祝、夏季休業期間、年末年始休業期間を除く)</p>
                                    <p>受付休業日や時間外にいただいた問い合わせについてはお時間を頂戴いたします。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once './partial/footer.php'; ?>
    <script src="assets/js/layout.js"></script>
</body>
</html>