<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="assets/css/layout.css" rel="stylesheet" />
    <link href="assets/css/pages/login.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/../assets/images/favicon.ico"/>
</head>

<body>
    <?php include_once './partial/header.php'; ?>
    <div class="login">
        <div class="container login__container">
            <h2 class="login__title text-center">パスワード再設定</h2>
            <p class="login__description">メールアドレスを入力して「パスワード再発行」ボタンを押してください。
自動的にメールが届きますので、メールに記載のURLをクリックし、パスワードを再設定してください。
※有効期限は24時間です。</p>
            <div class="login__card">
                <div class="login__input-group">
                    <label for="inputEmail" class="login__label form-label">メールアドレス</label>
                    <input type="email" id="inputEmail" name="inputEmail" class="login__input form-control">
                </div>
                <div class="login__input-group">
                    <button class="login__btn">パスワード再発行</button>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './partial/footer.php'; ?>
    <script src="assets/js/layout.js"></script>
</body>

</html>