<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
  <div class="sweets-image">
    <div class="col-md-7 mb-5">
      <form action="<?= SITE_URL_C; ?>/mypage.php" method="post" id="signup" class="form">
        <div class="form-group">
          <label>お名前</label>
          <input type="text" name="username" value="" class="form-control">
          <p class "err"></p>
        </div>
        <div class="form-group">
          <label>お名前（かな）</label>
          <input type="text" name="userkana" value="" class="form-control">
          <p class "err"></p>
        </div>
        <div class="form-group">
          <label>電話番号</label>
          <input type="text" name="tel" value="" class="form-control">
          <p class "err"></p>
        </div>
        <div class="form-group">
          <label>メールアドレス</label>
          <input type="text" name="email" value="" class="form-control">
          <p class "err"></p>
        </div>
        <div class="form-group">
          <label>パスワード</label>
          <input type="password" name="password" class="form-control">
          <p class "err"></p>
        </div>
        <p class="err"></p>
        <button class="btn">登録</button>
      </form>
    </div>
  </div>
</div>
<?php
require_once(__DIR__ .'/footer.php');
?>