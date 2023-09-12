<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
    <div class="mb-5">
      <p>ご予約内容</p>
      <div>
      <table>
        <tr>
          <th>画像</th>
          <th>品名</th>
          <th>価格</th>
          <th>個数</th>
          <th>小計</th>
        </tr>
        <tr>
          <td><img src="img/suites-1280.jpg" width="180px"></td>
          <td>チョコレートケーキ</td>
          <td>560円</td>
          <td>3個</td>
          <td>1680円</td>
        </tr>
        <tr>
          <th colspan="3">商品合計</th>
          <th colspan="2">合計　1680円</th>
        </tr>
      </table>
      </div>
    </div>
    <div class="mb-5">
      <p>ご予約者情報</p>
      <table>
        <tr>
          <th>お名前</th>
          <td><p>山本　太郎</p></td>
        </tr>
        <tr>
          <th>お名前（かな）</th>
          <td><p>やまもと　たろう</p></td>
        </tr>
        <tr>
          <th>電話番号</th>
          <td><p>×××-××××-××××</p></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><p>××××××××＠yohoo.co.jp</p></td>
        </tr>
        <tr>
          <th>お日にち</th>
          <td><p>10月31日</p></td>
        </tr>
        <tr>
          <th>備考</th>
          <td><p>チョコプレートに「ハッピーハロウィン」と書いてください</p></td>
        </tr>
      </table>
    </div>
    <div class="mb-5">
      <button onclick="location.href='<?= SITE_URL_C; ?>/cart_information_input.php'">内容修正</button>
      <button onclick="location.href='<?= SITE_URL_C; ?>/cart_definition.php'">予約確定</button>
    </div>
<?php
require_once(__DIR__ .'/footer.php');
?>