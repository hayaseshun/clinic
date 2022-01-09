<?php get_header() ?>
<main class="main">
  <div class="page-top">
    <div class="page-top-wrapper blog-page-top">
      <div class="page-top-content">
        <p class="page-top-content-main">スタッフ ブログ</p>
        <p class="page-top-content-sub">STAFF BLOG</p>
      </div>
    </div>
    <?php  get_template_part('template-parts/bcn_display'); ?>



    <div class="single-container">
      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>
          <div class="single-main-container">
            <h1 class="single-main-title"><?php the_title(); ?></h1>
            <div class="single-time-category">
              <div class="single-time">
                <span><img src="<?php echo get_template_directory_uri(); ?>/img/single-img/icon-time.png" alt=""></span>
            <?php the_time('Y,n,j'); ?>
            </div>
              <div class="single-category">カテゴリ1</div>
            </div>
            <p class="main-title-text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<a href="">リンクが入ります。</a> テキストが入ります。テキストが入ります。テキストが入ります。<br>
              <br>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <h2 class="single-main-title2">
              見出し2見出し2見出し2見出し2
            </h2>
            <div class="main-title2-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/single-img/single-squer.png" alt="">
            </div>
            <h3 class="single-main-title3">
              見出し3見出し3見出し3見出し3
            </h3>
            <p class="main-title-text3">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <h4 class="single-main-title4">
              見出し4見出し4見出し4見出し4
            </h4>
            <p class="main-title-text4">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <ul class="single_main_list">
              <li>・リスト1</li>
              <li>・リスト1</li>
              <li>・リスト1</li>
            </ul>

            <div class="page-entry-nav">
              <a href="" class="page-entry-before">前の記事</a>
              <a href="" class="page-entry-all">記事一覧</a>
              <a href="" class="page-entry-after">次の記事</a>
            </div>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>
          <?php get_sidebar() ?>
    </div>

  </div>

</main>

<?php get_footer() ?>