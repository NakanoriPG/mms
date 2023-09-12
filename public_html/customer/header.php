<?php
require_once(__DIR__ .'/../../config/config.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ホーム</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="https://fonts.googleapis.com/css?family=Charm|M+PLUS+Rounded+1c&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"><!-- スライド -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8bc1904d08.js"></script>
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <header class="sticky-top header">
    <div  class="header__inner">
      <div class="prof-show header-r">
        <nav>
          <ul>
            <il><a class="image" href="<?= SITE_URL_C; ?>/index.php"><img src="img/logo_1.png"></a></il>
            <li><a href="<?= SITE_URL_C; ?>/index.php">HOME</a></li>
            <li><a href="<?= SITE_URL_C; ?>/patsry.php">商品</a></li>
            <li><a href="<?= SITE_URL_C; ?>/index.php#store_headline">店舗情報</a></li>
            <li><a href="<?= SITE_URL_C; ?>/cart.php">カート</a></li>
          </ul>
        </nav>
      </div>
      <div class="header-r">
        <div data-me=""><a href="<?= SITE_URL_C; ?>/signup.php">新規登録</a></div>
        <div><a href="<?= SITE_URL_C; ?>/login.php">ログイン</a></div>
      </div>
    </div>
  </header>