<?php
require_once(__DIR__ .'/header.php');
?>
<div class="wrapper-body">
  <div>
    <ul class="slider" id="js-slider">
      <li><img src="img/cake-1_1280.jpg" alt=""></li>
      <li><img src="img/cake-2_1280.jpg" alt=""></li>
      <li><img src="img/cake-3_1280.jpg" alt=""></li>
    </ul>
    <div class="dots"></div>
      <!--/slider-->
  </div>
  <div class="wrapper">
    <h1 class="headline">SATSUKIについて</h1>
    <div class="sweets-image">
      <div class="col-md-4 imgarea">
        <img src="img/apple-pie_1280.jpg">
        <div class="text_wap">
          <div>チョコへのこだわり</div>
          <p>美味しさの秘密は素材にあります。世界でも愛されているヴァローナ製のチョコレートを使用。口どけよく香り豊かなチョコレートに心躍ります。</p>
        </div>
      </div>
      <div class="col-md-4 imgarea">
        <img src="img/table_1280.jpg">
        <div class="text_wap">
          <div>季節の素材</div>
          <p>季節に合わせてフレッシュな果物を使用。期間限定の商品をご用意しております。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <h2 class="headline">プティガトー</h2>
    <div class="sweets-image">
      <div class="col-md-3 imgarea">
        <img src="img/suites-1280.jpg">
        <div>チョコレートケーキ</div>
        <p>チョコレートムースの中にベリーのジャムをいれ、外側をチョコでコーティング</p>
      </div>
      <div class="col-md-3 imgarea">
        <img src="img/suites-1280.jpg">
        <div>チョコレートケーキ</div>
        <p>チョコレートムースの中にベリーのジャムをいれ、外側をチョコでコーティング</p>
      </div>
      <div class="col-md-3 imgarea">
        <img src="img/suites-1280.jpg">
        <div>チョコレートケーキ</div>
        <p>チョコレートムースの中にベリーのジャムをいれ、外側をチョコでコーティング</p>
      </div>
      <div class="col-md-3 imgarea">
        <img src="img/suites-1280.jpg">
        <div>チョコレートケーキ</div>
        <p>チョコレートムースの中にベリーのジャムをいれ、外側をチョコでコーティング</p>
      </div>
    </div>
  </div>
  <div>
    <a href="<?= SITE_URL_C; ?>/patsry.php" class="file-btn btn">more</a>
  </div>
  <div id="store_headline">
    <h3>店舗情報</h3>
    <div class="sweets-image">
      <div class="imgarea col-md-4">
        <img src="img/stralsund_1280.jpg">
      </div>
      <div class="col-md-4">
        <p>店名</p>
        <p>住所:texttexttexttexttext</p>
        <p>電話番号:texttexttexttexttext</p>
        <p>営業時間:texttexttexttexttext</p>
        <p>定休日:texttexttexttexttext</p>
        <p>席数:text</p>
      </div>
    </div>
  </div>
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d891.8789566956895!2d139.90083108111006!3d35.78459231732819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601884fc9e7daa09%3A0x69dd1692ac336e85!2z5p2-5oi46aeF!5e0!3m2!1sja!2sjp!4v1670758290796!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!--自作のJS-->
  <script src="js/customer_mms.js"></script>
<?php
require_once(__DIR__ .'/footer.php');
?>
