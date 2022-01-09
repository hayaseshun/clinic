<?php get_header() ?>
<main class="main">
  <div class="page-top">
    <div class="page-top-wrapper contact-page-top">
      <div class="page-top-content">
        <p class="page-top-content-main">スタッフ ブログ</p>
        <p class="page-top-content-sub">STAFF BLOG</p>
      </div>
    </div>
    <?php  get_template_part('template-parts/bcn_display'); ?>
  </div>
  <div class="contact-message form-message">
    お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>
    以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>
    また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
    <span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
  </div>

  <section class="contact">
    <div class="contact-inner">
      <div class="section-title">
        <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span> お問い合わせフォーム <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span>
      </div>
      <div class="contact-form form">
        <?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"] '); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>