<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link href="assets/css/layout.css" rel="stylesheet" />
    <link href="assets/css/pages/my-page.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/../assets/images/favicon.ico"/>
</head>
<body>
    <?php include_once './partial/header.php'; ?>
    <div class="my-page">
        <div class="container"> 
            <div class="my-page__inner">
                <h1 class="section-title">マイページ</h1>
                <div class="row justify-content-center">
                    <div class="col-md-9">
                    <div class="my-page__menu">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group__item">
                            <div class="list-group__info">
                                ご注文履歴 
                            </div>
                            <svg class="list-group__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action list-group__item">
                            <div class="list-group__info">
                                当選一覧
                            </div>
                            <svg class="list-group__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="my-page__menu">
                    <h2 class="section-label">
                        お客様情報
                    </h2>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group__item">
                            <div class="list-group__info">
                                住所登録・変更
                            </div>
                            <svg class="list-group__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action list-group__item">
                            <div class="list-group__info">
                                メールアドレス変更
                            </div>
                            <svg class="list-group__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action list-group__item">
                            <div class="list-group__info">
                                パスワード変更
                            </div>
                            <svg class="list-group__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action list-group__item">
                            <div class="list-group__info">
                                チェキチャ端末認証
                            </div>
                            <svg class="list-group__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="my-page__menu">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action list-group__item">
                            <div class="list-group__info">
                                ログアウト
                            </div>
                            <svg class="list-group__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </a>
                    </div>
                </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <?php include_once './partial/footer.php'; ?>
    <script src="assets/js/layout.js"></script>
</body>

</html>