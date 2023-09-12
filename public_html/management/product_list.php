<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
  <button class="mb-3" type="button" onclick="location.href='<?= SITE_URL_M; ?>/management.php'">戻る</button>
  <div class="top_ttl">商品一覧</div>
  <div class="pastry_cell mb-5">
    <a href="<?= SITE_URL_M; ?>/pastry_control.php">
      <img src="./img/suites-1280.jpg">
      <div>
        <p>ホームページ表示中</p>
        <p>商品名</p>
        <p>チョコレートケーキ</p>
        <p>商品説明</p>
        <p>text text text text text text text text text text text text text text text</p>
      </div>
    </a>
  </div>
  <div class="pastry_cell">
    <a href="<?= SITE_URL_M; ?>/pastry_control.php">
      <img src="./img/suites-1280.jpg">
      <div>
        <p>ホームページ非表示中</p>
        <p>商品名</p>
        <p>チョコレートケーキ</p>
        <p>商品説明</p>
        <p>text text text text text text text text text text text text text text text</p>
      </div>
    </a>
  </div>

</div>
<?php
require_once(__DIR__ .'/footer.php');
?>