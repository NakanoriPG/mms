<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
  <button class="mb-3" type="button" onclick="location.href='<?= SITE_URL_M; ?>/management.php'">戻る</button>
  <p class="top_ttl">商品管理</p>
  <div>
    <input type="checkbox" checked>ホームページに表示する
  </div>
  <div>
    <form action="<?= SITE_URL_M; ?>/.php" method="post" enctype="multipart/form-data">
      <table class="mb-5">
        <tr>
          <th>商品名</th>
          <td><input type="text" name=""><span class="err">&emsp;</span></td>
        </tr>
        <tr>
          <th>金額</th>
          <td>
            <input type="text">
            <span class="err">&emsp;</span>
          </td>
        </tr>
        <tr>
          <th>サイズ</th>
          <td>
            <input type="text">
            <span class="err">&emsp;</span>
          </td>
        </tr>
        <tr>
          <th>説明文</th>
          <td>
            <textarea></textarea>
            <span class="err">&emsp;</span>
          </td>
        </tr>
        <tr>
          <th>メイン画像</th>
          <td>
            <input type="file">
            <span class="err">&emsp;</span>
          </td>
        </tr>
        <tr>
          <th>サブ画像1</th>
          <td>
            <input type="file">
            <span class="err">&emsp;</span>
          </td>
        </tr>
        <tr>
          <th>サブ画像2</th>
          <td>
            <input type="file">
            <span class="err">&emsp;</span>
          </td>
        </tr>
      </table>
      <div class="mb-5"><a href="#">デモ画面</a></div>
      <input class="mb-5" type="submit" value="登録する">
    </form>
  </div>
</div>
<?php
require_once(__DIR__ .'/footer.php');
?>