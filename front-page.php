<?php
/*
Template Name: トップページ      //ここの記述
*/
?>
<?php get_header(); ?>
<main class="main">
  <div class="top">
    <?php get_template_part('template-parts/page-top-btn'); ?>
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="slide1 swiper-slide">
          <div class="top_text_content">
            <p class="top_text">街の皆さまの笑顔を守る</p>
            <p class="top_text1">アットホームな歯医者さん</p>
          </div>
        </div>
        <div class="slide2 swiper-slide">
          <div class="top_text_content">
            <p class="top_text">街の皆さまの笑顔を守る</p>
            <p class="top_text1">アットホームな歯医者さん</p>
          </div>
        </div>
        <div class="slide3 swiper-slide">
          <div class="top_text_content">
            <p class="top_text">街の皆さまの笑顔を守る</p>
            <p class="top_text1">アットホームな歯医者さん</p>
          </div>
        </div>
      </div>
      <!-- If we need pagination -->

      <!-- If we need navigation buttons -->
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination swiper-pagination-vertical"></div>
    <div class="top-content">
      <div class="top-right">
        <div class="calender-img"><img src="<?php echo get_template_directory_uri() ?>/img/medicalTimeSheet.png" alt="time-sheet"></div>
      </div>
      <div class="top-left">
        <div class="top-news">
          <div class="top-news-head">
            <h4 class="top-news-title">お知らせ<span>NEWS</span></h4>
            <div>
              <a href="<?php echo esc_url(home_url('category/news')); ?>" class="top-news-more">
                過去のお知らせはこちら
              </a>
            </div>
          </div>
          <a class="top-news-left hover-font-blue">
            <div>2021.01.01</div>
            <p class="top-news-txt">
              年末年始の営業時間のお知らせ
            </p>
          </a>
        </div>

      </div>
    </div>
  </div>

  <section class="concept ">
    <div class="concept-inner">
      <div class="concept-content wow fadeIn">
        <div class="concept-title">CONCEPT</div>
        <div class="concept-message message">健康的で素敵な笑顔あふれる
          街づくりを目指して</div>
        <p class="concept-text">私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。
          お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
        <div class="util-btn"><a href="<?php echo esc_url(home_url()); ?>/about/">当院について</a></div>
      </div>
      <div class="concept-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/concept-img1.png" alt="concept-img">
      </div>
    </div>
  </section>

  <section class="recommend">
    <div class="section-inner">
      <div class="section-title">
        <span><img src="<?php echo get_template_directory_uri() ?>/img/title-deco.png" alt="///"></span> 当院の3つのおすすめ <span><img src="<?php echo get_template_directory_uri() ?>/img/title-deco.png" alt="///"></span>
      </div>
      <ul class="recommend-items">
        <li class="recommend-item">
          <div class="recommend-item-title"><img src="<?php echo get_template_directory_uri() ?>/img/recommend-1-title.png" alt="recommend-1-title"></div>
          <div class="recommend-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/recommend-img-01.png" alt="recommend-img-01"></div>
          <p class="recommend-text">歯の治療において、小さな違和感は大きなストレスにつながります。
            私たちは常に快適な歯科医療技術の研究を行っております。</p>
        </li>
        <li class="recommend-item">
          <div class="recommend-item-title"><img src="<?php echo get_template_directory_uri() ?>/img/recommend-2-title.png" alt="recommend-2-title"></div>
          <div class="recommend-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/recommend-img-02.png" alt="recommend-img-02"></div>
          <p class="recommend-text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
        </li>
        <li class="recommend-item">
          <div class="recommend-item-title"><img src="<?php echo get_template_directory_uri() ?>/img/recommend-3-title.png" alt="recommend-3-title"></div>
          <div class="recommend-item-img"><img src="<?php echo get_template_directory_uri() ?>/img/recommend-img-03.png" alt="recommend-img-03"></div>
          <p class="recommend-text">朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
            <span>※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
          </p>
        </li>
      </ul>
    </div>
  </section>

  <section class="announce">
    <div class="announce-bg-top"></div>
    <div class="announce-bg">
      <div class="section-inner">
        <div class="section-title">
          <span>
            <img src="<?php echo get_template_directory_uri() ?>/img/title-deco.png" alt="///"></span> 診療案内 <span><img src="<?php echo get_template_directory_uri() ?>/img/title-deco.png" alt="///">
          </span>
        </div>
        <div class="announce-items">
          <a href="" class="announce-item announce-picture1">
            <div class="announce-bg-content">
              <div class="announce-item-content">
                <p class="announce-item-title">一般診療</p>
                <p class="announce-item-text">虫歯・入れ歯・小児歯科</p>
              </div>
            </div>
          </a>

          <a href="" class="announce-item announce-picture2">
            <div class="announce-bg-content">
              <div class="announce-item-content">
                <p class="announce-item-title">特殊診療</p>
                <p class="announce-item-text">
                  インプラント・ホワイトニング
                  予防歯科・口腔外科・審美歯科</p>
              </div>
            </div>
          </a>
        </div>
        <div class="announce-bottom">
          <p class="announce-bottom-text">
            当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。
            痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br>
            <span>※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
          </p>
        </div>
      </div>
    </div>
    <div class="announce-bottom-bg"></div>
  </section>

  <section class="blog">
    <div class="section-inner">
      <div class="section-title">
        <span>
          <img src="<?php echo get_template_directory_uri() ?>/img/title-deco.png" alt="///"></span> スタッフブログ<span><img src="<?php echo get_template_directory_uri() ?>/img/title-deco.png" alt="///">
        </span>
      </div>
      <?php
      $args = array(
        'post_type' => 'blog',
        'post_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $the_query = new WP_Query($args);
      ?>

      <div class="blog-items">
        <?php if ($the_query->have_posts()) :
          while ($the_query->have_posts()) :
            $the_query->the_post(); ?>
            <div class="blog-item">
              <a href="<?php the_permalink(); ?>" class="blog-item-link">
                <?php
                if ($the_query->current_post < 3) {
                  echo '<span class="newMark">NEW</span>';
                }
                ?>
                <div class="blog-item-img">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                  } else {
                    echo '<img src="<?php echo get_template_directory_uri() ?>/img/stuff-blog-img.png" alt="stuff-blog-img.png">';
                  }
                  ?>
                </div>
                <div class="blog-item-content">
                  <p class="blog-item-category">
                    <?php
                    $terms = get_the_terms('', 'other');
                    if ($terms) {
                      foreach ($terms as $term) {
                        echo $term->name;
                      }
                    }
                    ?>
                  </p>
                  <p class="blog-item-text"><?php the_title(); ?></p>
                  <div class="blog-item-time"><?php the_time('Y.n.j'); ?></div>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <div class="util-btn">
      <a href="<?php echo esc_url(home_url()); ?>/blog/">スタッフブログ一覧はこちら</a>
    </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>