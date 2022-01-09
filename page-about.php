<?php get_header() ?>
<main class="main">
<?php get_template_part('template-parts/page-top-btn'); ?>
  <div class="page-top">
    <div class="page-top-wrapper about-page-top">
      <div class="page-top-content">
        <p class="page-top-content-main">当院について</p>
        <p class="page-top-content-sub">ABOUT OUR CLINIC</p>
      </div>
    </div>
    <?php  get_template_part('template-parts/bcn_display'); ?>
  </div>

  <section class="policy-feature" id="policy-feature">
    <div class="section-title">
      <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span> ポリシーと特徴 <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span>
    </div>
    <div class="policy-inner">
      <div class="policy-content">
        <div class="policy-title">POLICY</div>
        <div class="policy-message">コミュニケーションから始まる最適な医療提供</div>
        <p class="policy-text">当院ではまず患者様から詳しくお話を伺います。
難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。<br><br>

「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。</p>
      </div>
      <div class="policy-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/feature_1.png" alt="">
      </div>
    </div>

    <div class="feature-inner">
      <div class="feature-content">
        <div class="feature-title">FEATURE</div>
        <div class="feature-message">「医療技術の追求」と<br> 「通いやすさ」</div>
        <p class="feature-text">歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。
          また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。<br><br>

          朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。</p>
      </div>

      <div class="feature-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/feature_2.png" alt="feature_2">
      </div>
    </div>
  </section>

  <section class="gallery" id="hospital-gallery">
    <div class="section-inner">
      <div class="section-title">
        <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span> 院内の様子 <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span>
      </div>
      <div class="gallery-items">
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/img/about-img/about-gallery-img-1.png" alt="about-gallery-img-1"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/img/about-img/about-gallery-img-2.png" alt="about-gallery-img-2"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/img/about-img/about-gallery-img-3.png" alt="about-gallery-img-3"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/img/about-img/about-gallery-img-4.png" alt="about-gallery-img-4"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/img/about-img/about-gallery-img-5.png" alt="about-gallery-img-5"></div>
        <div class="gallery-item"><img src="<?php echo get_template_directory_uri(); ?>/img/about-img/about-gallery-img-6.png" alt="about-gallery-img-6"></div>
      </div>
    </div>
  </section>
  <?php get_footer() ?>