<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="assets/css/layout.css" rel="stylesheet" />
    <link href="assets/css/pages/member-registration.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/../assets/images/favicon.ico"/>
</head>
<body>
    <?php include_once './partial/header.php'; ?>
    <div class="member-registration">
        <div class="container member-registration__container">
            <h2 class="member-registration__title text-center">会員登録</h2>
            <p class="member-registration__desc">
                STORE by UtaTen(R)新規会員登録用フォームとなります。
                <br>
                以下にメールアドレス、ログイン用パスワード（お客様側にて自由に設置ください） を入力頂き「登録」を押してください。
                <br>
                入力頂いたメールアドレス宛に会員登録専用のメールをお送りいたします。
            </p>

            <div class="member-registration__card">
                <div class="member-registration__input-group">
                    <label for="inputEmail" class="member-registration__label form-label">メールアドレス</label>
                    <input type="email" id="inputEmail" name="inputEmail" class="member-registration__input form-control">
                </div>
                <div class="member-registration__input-group">
                    <label for="inputPassword" class="member-registration__label form-label">パスワード</label>
                    <span class="member-registration__info">※8文字以上の英数字をご入力ください</span>
                    <input type="password" id="inputPassword" name="inputPassword" class="member-registration__input form-control">
                </div>
                <div class="member-registration__input-group">
                    <label for="inputPasswordConfirmation" class="member-registration__label form-label">パスワード確認</label>
                    <input type="password" id="inputPasswordConfirmation" name="inputPasswordConfirmation" class="member-registration__input form-control">
                </div>
                <div class="member-registration__input-group">
                    <button class="member-registration__btn" type="submit">登録する</button>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './partial/footer.php'; ?>
    <script src="assets/js/layout.js"></script>
</body>

</html>