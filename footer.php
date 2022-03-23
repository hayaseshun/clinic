<footer class="footer">
  <div class="section-inner">
    <div class="footer-contact">
      <div class="footer-left">
        <div class="footer-logo"><img src="<?php echo get_template_directory_uri() ?>/img/logo-clinic.png" alt="logo"></div>
        <div class="footer-adores">〒166-0001 東京都杉並区阿佐谷北7-3-1</div>
        <div class="footer-tel">
          <a href="" class="footer-tel-link">
            <img src="<?php echo get_template_directory_uri() ?>/img/tel-icon.png" alt="icon-tel">
            <p>(年中無休 AM9:00〜PM22:00)</p>
          </a>
        </div>
        <div class="footer-btn-inner">
          <a href="<?php echo esc_url(home_url()) ?>/reserve/" class="footer-reservation-btn footer-btn">WEB予約</a>
          <a href="<?php echo esc_url(home_url()) ?>/contact/" class="footer-contact-btn footer-btn">お問い合わせ</a>
        </div>
        <div class="footer-calender">
          <img src="<?php echo get_template_directory_uri() ?>/img/medicalTimeSheet.png" alt="time-sheet">
        </div>
      </div>

      <div class="footer-right">
        <div class="iframe-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.74779853328!2d139.74324421519992!3d35.65858483882126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K-44Ov44O8!5e0!3m2!1sja!2sjp!4v1637469997377!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>

    <div class="footer-links">
      <ul class="footer-link-items">
        <li class="footer-link-item">
          <a href="<?php echo home_url('/'); ?>" class="footer-link-item-title">TOP</a>
        </li>

        <li class="footer-link-item">
          <a href="<?php echo esc_url(home_url()); ?>/about/" class="footer-link-item-title">当院について</a>
          <div class="footer-item-list">
            <a href="<?php echo esc_url(home_url()); ?>/about/#policy-feature" class="footer-link-list-item">ポリシーと特徴</a>
            <a href="<?php echo esc_url(home_url()); ?>/about/#hospital-gallery" class="footer-link-list-item">当院の様子</a>
          </div>
        </li>

        <li class="footer-link-item">
          <a href="<?php echo esc_url(home_url()); ?>/staff/" class="footer-link-item-title">スタッフ紹介</a>
          <div class="footer-item-list">
            <a href="<?php echo esc_url(home_url()); ?>/staff/#stuff-director" class="footer-link-list-item">院長のあいさつ</a>
            <a href="<?php echo esc_url(home_url()); ?>/staff/#stuff-introduction" class="footer-link-list-item">スタッフ</a>
            <a href="<?php echo esc_url(home_url()); ?>/blog/" class="footer-link-list-item">スタッフブログ</a>
          </div>

        </li>
        <li class="footer-link-item">
          <a href="<?php echo esc_url(home_url()); ?>/medical/" class="footer-link-item-title">診療内容</a>
          <div class="footer-announce-item-list">
            <div class="footer-item-list1">
              <a href="<?php echo esc_url(home_url()); ?>/medical/" class="footer-link-list-item">一般歯科</a>
              <a href="<?php echo esc_url(home_url()); ?>/medical/" class="footer-link-list-item">小児歯科</a>
              <a href="<?php echo esc_url(home_url()); ?>/medical/" class="footer-link-list-item">予防歯科</a>
              <a href="<?php echo esc_url(home_url()); ?>/medical/" class="footer-link-list-item">入れ歯</a>
            </div>
            <div class="footer-item-list-2">
              <a href="<?php echo esc_url(home_url()); ?>/medical/" class="footer-link-list-item">矯正歯科</a>
              <a href="<?php echo esc_url(home_url()); ?>/medical/" class="footer-link-list-item">ホワイトニング</a>
              <a href="<?php echo esc_url(home_url()); ?>/medical/" class="footer-link-list-item">口腔外科</a>
              <a href="<?php echo esc_url(home_url()); ?>/medical/" class="footer-link-list-item">レーザー治療</a>
            </div>
          </div>
        </li>

        <li class="footer-link-item">
          <a href="" class="footer-link-item-title">お問い合わせ</a>
          <div class="footer-item-list">
            <a href="<?php echo esc_url(home_url()) ?>/contact/" class="footer-link-list-item">お問い合わせフォーム</a>
            <a href="<?php echo esc_url(home_url()) ?>/reserve/" class="footer-link-list-item">WEB予約</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <small class="copy-right">©︎2020-2021 みなみ歯科クリニック</small>
  </div>
  <div class="nav-bottom">
    <div class="nav-bottom-left">
      <div class="nav-bottom-tel">
        <img src="<?php echo get_template_directory_uri() ?>/img/tel-icon-sp.png" alt="icon_tel">
      </div>
      <p class="nav-bottom-time">(年中無休 AM9:00〜PM22:00)</p>
    </div>
    <div class="nav-bottom-right">
      <a class="nav-bottom-btn" href="<?php echo esc_url(home_url("reserve")); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/nav-bottom-icon.png" alt="nav-bottom-icon">
      </a>
    </div>
  </div>

</footer>


<div class="scroll-top">
  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/btn-top.png" alt="to-top-btn"></a>
</div>

<?php wp_footer() ?>
</body>

</html>