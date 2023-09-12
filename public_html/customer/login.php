<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
  <div class="sweets-image">
    <div class="col-md-7 mb-5">
      <form action="<?= SITE_URL_C; ?>/mypage.php" method="post" id="login" class="form">
        <div class="form-group">
          <label>メールアドレス</label>
          <input type="text" name="email" value="" class="form-control">
        </div>
        <div class="form-group">
          <label>パスワード</label>
          <input type="password" name="password" class="form-control">
        </div>
        <p class="err"></p>
        <button class="btn">ログイン</button>
      </form>
      <p class="fs12"><span>新規登録は</span><a href="<?= SITE_URL_C; ?>/signup.php">こちら</a>から</p>
    </div>
  </div>
</div>
<?php
require_once(__DIR__ .'/footer.php');
?>