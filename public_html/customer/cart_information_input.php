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
      </table>
    </div>
    <div class="request-receive mb-5">
      <form action="<?= SITE_URL_C; ?>/cart_check.php" method="post" id="" class="form">
        <p>お受け取り希望日</p>
        <table>
          <tr>
            <th>お日にち</th>
            <td>
              <select>
                <option>日にち選択</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </td>
          </tr>
          <tr>
            <th>備考（３００文字まで）</th>
            <td>
              <textarea name="textarea" class="textarea"></textarea>
            </td>
          </tr>
        </table>
        <button class="mb-5">ご予約へ進む</button>
      </form>
    </div>
  </div>
<?php
require_once(__DIR__ .'/footer.php');
?>