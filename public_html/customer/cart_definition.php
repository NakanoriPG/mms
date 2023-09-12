<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
  <div class="mb-4">
    <p>ご予約を確定いたしました。</p>
  </div>
  <div class="mb-5">
    <p>ご予約の詳細につきましては、</p>
    <p>マイページをご覧ください。</p>
  </div>
  <div class="mb-5">
    <button onclick="location.href='<?= SITE_URL_C; ?>/index.php'">HOMEへ戻る</button>
  </div>
</div>
<?php
require_once(__DIR__ .'/footer.php');
?>