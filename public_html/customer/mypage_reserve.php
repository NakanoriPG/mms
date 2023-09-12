<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
    <div class="mb-5">
      <p>ご予約者情報</p>
      <table>
        <tr>
          <th>受取予定日</th>
          <th>商品名</th>
          <th>合計料金</th>
          <th>予約受付日</th>
        </tr>
        <tr>
          <th>10月30日</th>
          <th>チョコレートケーキ</th>
          <th>1680円</th>
          <th>
            <p>2022/10/6</p>
            <p>21:51</p>
          </th>
        </tr>
      </table>
    </div>
    <div>
      <a href="<?= SITE_URL_C; ?>/mypage.php" class="btn">戻る</a>
    </div>
<?php
require_once(__DIR__ .'/footer.php');
?>