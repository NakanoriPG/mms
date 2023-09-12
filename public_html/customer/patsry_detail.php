<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper">
    <div class="sweets-image-detail">
      <div class="col-md-7">
        <div class=" imgarea">
          <img src="img/suites-1280.jpg">
        </div>
        <div class="sweets-image-detail">
          <div class="col-md-3 imgarea">
            <img src="img/suites-1280.jpg">
          </div>
          <div class="col-md-3 imgarea">
            <img src="img/suites-1280.jpg">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <p class="mb-4">チョコレートケーキ</p>
        <p class="col-md-9 mb-2">560円（税込）</p>
        <div class="sweets-image-detail">
          <div class="col-md-9">
            <form method="post">
              <select name="size" class="form-control mb-2">
                <option selected>サイズ選択</option>
                <option>4号</option>
                <option>5号</option>
                <option>6号</option>
              </select>
              <select name="nam" class="form-control">
                <option selected>個数</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
            <div class="d-flex align-items-end">
              <button type="button">かごへ</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-12 mb-5">
      <p>商品説明</p>
      <p>チョコレートムースの中にベリーのジャムをいれ、外側をチョコでコーティング</p>
    </div>
  </div>
<?php
require_once(__DIR__ .'/footer.php');
?>