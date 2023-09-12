<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
  <button class="mb-3" type="button" onclick="location.href='<?= SITE_URL_M; ?>/management.php'">管理画面に戻る</button>
  <div class="management_form">
    <div>
      <p>商品予約詳細</p>
      <div class="wrapper-body">
        <p><span>・チョコレートケーキ</span><spam>：2件</spam></p>
        <p><span>・チーズケーキ</span><span>：1件</span></p>
        <p><span>・アップルパイ</span><span>：1件</span></p>
      </div>
    </div>
    <div>
      <table class="table-bordered mb-2">
        <tr>
          <th colspan="3">お客様名</th>
        </tr>
        <tr>
        <td colspan="3">山田　太郎</td>
        </tr>
        <tr>
          <th colspan="3">電話番号</th>
        </tr>
        <tr>
          <td colspan="3">○○○○○○○○</td>
        </tr>
          <th>品名</th>
          <th>個数</th>
          <th>小計</th>
        </tr>
        <tr>
          <td>チョコレートケーキ</td>
          <td>○個</td>
          <td>○○円</td>
        </tr>
        <tr>
          <th>品名</th>
          <th>個数</th>
          <th>小計</th>
        </tr>
        <tr>
          <td>チーズケーキ</td>
          <td>○個</td>
          <td>○○円</td>
        </tr>
        <tr>
          <th colspan="3">合計金額</th>
        </tr>
        <tr>
          <td colspan="3">○○○○円</td>
        </tr>
      </table>
      <table class="table-bordered mb-5">
        <tr>
          <th>備考</th>
        </tr>
        <tr>
          <td></td>
        </tr>
      </table>
    </div>
    <div>
      <table class="table-bordered mb-2">
        <tr>
          <th colspan="3">お客様名</th>
        </tr>
        <tr>
        <td colspan="3">山田　次郎</td>
        </tr>
        <tr>
          <th colspan="3">電話番号</th>
        </tr>
        <tr>
          <td colspan="3">○○○○○○○○</td>
        </tr>
        <tr>
          <th>品名</th>
          <th>個数</th>
          <th>小計</th>
        </tr>
        <tr>
          <td>チョコレートケーキ</td>
          <td>○個</td>
          <td>○○円</td>
        </tr>
        <tr>
          <th>品名</th>
          <th>個数</th>
          <th>小計</th>
        </tr>
        <tr>
          <td>アップルパイ</td>
          <td>○個</td>
          <td>○○円</td>
        </tr>
        <tr>
          <th colspan="3">合計金額</th>
        </tr>
        <tr>
          <td colspan="3">○○○○円</td>
        </tr>
      </table>
      <table class="table-bordered mb-5">
        <tr>
          <th>備考</th>
        </tr>
        <tr>
          <td></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<?php
require_once(__DIR__ .'/footer.php');
?>