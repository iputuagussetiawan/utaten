<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="assets/css/layout.css" rel="stylesheet" />
    <link href="assets/css/pages/login.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/../assets/images/favicon.ico"/>
</head>

<body>
    <?php include_once './partial/header.php'; ?>
    <div class="login">
        <div class="container login__container">
            <h2 class="login__title text-center">ログイン</h2>

            <div class="login__card">
                <div class="login__input-group">
                    <label for="inputEmail" class="login__label form-label">メールアドレス</label>
                    <input type="email" id="inputEmail" name="inputEmail" class="login__input form-control">
                </div>
                <div class="login__input-group">
                    <label for="inputPassword" class="login__label form-label">パスワード</label>
                    <input type="password" id="inputPassword" name="inputPassword" class="login__input form-control">
                </div>
                <div class="login__input-group">
                    <button class="login__btn">登録する</button>
                </div>
                <div class="login__input-group">
                    <a href="/member-registration.php" class="btn login__btn-register">新規会員登録はこちら</a>
                </div>
                <a href="/forgot-password.php" class="login__forget-password text-end">パスワードを忘れた方はこちら</a>
            </div>
        </div>
    </div>
    <?php include_once './partial/footer.php'; ?>
    <script src="assets/js/layout.js"></script>
</body>

</html>