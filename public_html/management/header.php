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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <!-- カレンダー -->
  <link rel='stylesheet' href='/css/main.css'>
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <header class="sticky-top header">
    <div  class="header__inner">
      <div class="prof-show header-r">
        <nav>
          <ul>
            <il><a class="image" href="<?= SITE_URL_M; ?>/index.php"><img src="img/logo_1.png"></a></il>
            <li><a href="<?= SITE_URL_M; ?>/management.php">HOME</a></li>
            <li><a href="<?= SITE_URL_M; ?>/pastry_reservation_calendar.php">予約一覧</a></li>
            <li><a href="<?= SITE_URL_M; ?>/pastry_control.php">商品管理</a></li>
            <li><a href="<?= SITE_URL_M; ?>/login.php">ログイン</a></li>
            <!-- URL未修正 -->
          </ul>
        </nav>
      </div>
    </div>
  </header>