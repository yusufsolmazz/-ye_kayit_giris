<?php

ob_start();
session_start();

require 'config.php';

if (isset($_POST["kayit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_again = $_POST['password_again'];

    if (!$username || !$password || !$password_again) {
        echo "Boş Alan Bırakmayınız";
    }elseif ($password != $password_again) {
        echo "Şifreler Birbiriyle Uyuşmuyor";
    }else {
        // VERİTABANI KAYIT İŞLEMİ
        $sorgu = $db->prepare("INSERT INTO kullanici SET user_name=?, user_pass=?");
        $ekle = $sorgu->execute(array($username,$password));

        if ($ekle) {
            echo "Kayıt Başarıyla Gerçekleşti Yönlendiriliyorsunuz...";
            header('Refresh:3; index.php');
        }else {
            echo "Bir Şeyler Ters Gitti Tekrar Deneyin.!";
        }
    }
}


if (isset($_POST["giris"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username || !$password) {
        echo "Boş Alan Bırakmayın";
    }else {
        $kullanici_sor = $db->prepare("SELECT * FROM kullanici WHERE user_name =? || user_pass=?");
        $kullanici_sor->execute(array($username,$password));

        echo $say = $kullanici_sor->rowCount();
        if ($say==1) {
            $_SESSION["username"]=$username;
            echo "Başarıyla Giriş Yaptınız, Yönlendiriliyorsunuz...";
            header("Refresh:3; welcome.php");
        }else {
            echo "Bir Şeyler Ters Gitti Tekrar Dene.!";
        }
    }
}





?>