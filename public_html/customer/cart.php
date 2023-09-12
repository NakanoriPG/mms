<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
    <div class="mb-4">
      <p>誠に恐縮ですが、お一人様10個までとさせていただきます。</p>
      <p>10個以上のご予約はお電話にて受付いたします。</p>
    </div>
    <div class="sweets-image col-md-12">
     <table class="mb-5">
      <tr>
        <th>商品</th>
        <th>品名</th>
        <th>価格</th>
        <th>個数</th>
        <th>小計</th>
        <th>削除</th>
      </tr>
      <tr>
        <td><img src="img/suites-1280.jpg"  width="200px"></td>
        <td>チョコレートケーキ</td>
        <td>560円</td>
        <td>3個</td>
        <td>1680円</td>
        <td><button>削除</button></td>
      </tr>
      <tr>
        <th colspan="3"></th>
        <th></th>
        <th colspan="2">合計　1680円</th>
      </tr>
     </table>
    </div>
    <div class="mb-5">
      <p>ご予約の際に関して注意事項</p>
      <p>・キャンセルの場合は当日午前中までご連絡ください。</p>
    </div>
    <button onclick="location.href='<?= SITE_URL_C; ?>/cart_information_input.php'" class="mb-5">ご予約へ進む</button>
  </div><?php
require_once(__DIR__ .'/footer.php');
?>