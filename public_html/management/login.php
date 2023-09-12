<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
  <div class="management_form">
    <form action="<?= SITE_URL_M; ?>/management.php" method="post" id="login" class="form">
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
  </div>
</div>
<?php
require_once(__DIR__ .'/footer.php');
?>