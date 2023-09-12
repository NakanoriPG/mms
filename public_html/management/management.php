<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
  <div class="management_form">
    <div class="mb-5">
      <p class="mb-3">商品管理</p>
      <div class="mb-3">
        <p>予約一覧</p>
        <div><a href="<?= SITE_URL_M; ?>/pastry_reservation_calendar.php">・商品予約一覧</a></div>
      </div>
      <div class="mb-3">
        <p>管理画面</p>
        <div><a href="<?= SITE_URL_M; ?>/pastry_control.php">・商品管理</a></div>
        <div><a href="<?= SITE_URL_M; ?>/product_list.php">・登録一覧</a></div>
      </div>
    </div>
  </div>
</div>
<?php
require_once(__DIR__ .'/footer.php');
?>