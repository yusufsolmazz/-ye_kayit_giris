<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Giriş Yap</title>
</head>
<body>

<div class="login">
    <div class="login-screen">
        <div class="app-title">
            <h1>Giriş Yap</h1>
        </div>
        <form action="islem.php" method="post">
        <div class="login-form">
            <div class="control-group">
                <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                <label class="login-field-icon fui-user" for="login-name"></label>
            </div>
            <div class="control-group">
                <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                <label class="login-field-icon fui-user" for="login-pass"></label>
            </div>
            <button href="index.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</a></button>
        </div>
        </form>
        <a href="kayit.php"><button class="btn btn-primary btn-large btn-block">Kayıt Ol</button></a>
    </div>
</div>
    
</body>
</html>