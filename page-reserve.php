<?php get_header() ?>
<main class="main">
  <div class="page-top">
    <div class="page-top__wrapper contact-page-top">
      <div class="page-top__content">
        <p class="page-top__content--main">WEB予約</p>
        <p class="page-top__content--sub">RESERVE</p>
      </div>
    </div>
    <?php get_template_part('template-parts/bcn_display'); ?>
  </div>

  <div class="reserve-message-container form-message">
    <div class="reserve-tel">
      <p class="reserve-message-title">お電話でのご予約/ご相談</p>
      <div class="reserve-tel-icon-content">
        <div class="reserve-tel-img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-tel.png" alt="icon-tel"></div>
        <p class="reserve-tel-time">(年中無休 AM9:00〜PM22:00)</p>
      </div>
      <p class="reserve-tel-message">
        お急ぎの方は電話での連絡がスムーズです。<br>
        混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
        あらかじめご了承ください。
      </p>
    </div>
    <div class="reserve-mail">
      <p class="reserve-message-title">メールでのご予約/ご相談</p>
      <p class="reserve-mail-message">
        【ご予約に関しての注意点】<br>
        メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
        ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
      </p>
    </div>
  </div>

  <section class="reserve">
    <div class="reserve-inner">
      <h2 class="section-title">
        <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span> 予約フォーム <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span>
      </h2>
    </div>
    <div class="reserve-form form">
      <?php echo do_shortcode('[contact-form-7 id="181" title="予約"]')
      ?>
    </ｄ>
  </section>

</main>

<?php get_footer() ?>