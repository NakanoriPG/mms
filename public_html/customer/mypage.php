<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
    <div class="sweets-image">
      <div class="col-md-7 mb-5">
        <p class="fs12 mb-5"><span>ご予約確認は</span><a href="<?= SITE_URL_C; ?>/mypage_reserve.php">こちら</a>から</p>
        <form action="<?= SITE_URL_C; ?>/mypage.php" method="post" id="reseve" class="form">
          <div class="form-group">
            <label>お名前</label>
            <input type="text" name="username" value="" class="form-control">
          </div>
          <div class="form-group">
            <label>お名前（かな）</label>
            <input type="text" name="userkana" value="" class="form-control">
          </div>
          <div class="form-group">
            <label>電話番号</label>
            <input type="text" name="tel" value="" class="form-control">
          </div>
          <div class="form-group">
            <label>メールアドレス</label>
            <input type="text" name="email" value="" class="form-control">
          </div>
          <div class="form-group">
            <label>パスワード</label>
            <input type="password" name="password" class="form-control">
          </div>
          <p class="err"></p>
          <button class="btn">更新</button>
        </form>
        <form class="user-delete" action="<?= SITE_URL_C; ?>/.php">
          <input type="submit" class="btn btn-default" value="退会する">
        </form>
    </div>
  </div>
<?php
require_once(__DIR__ .'/footer.php');
?>