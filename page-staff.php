<?php get_header() ?>
<main class="main">
<?php get_template_part('template-parts/page-top-btn'); ?>
  <div class="page-top">
    <div class="page-top__wrapper stuff-page-top">
      <div class="page-top__content">
        <p class="page-top__content--main">スタッフ紹介</p>
        <p class="page-top__content--sub">STAFF</p>
      </div>
    </div>
    <p class="page-top-bread">
      <?php bcn_display(); ?>
    </p>
  </div>

  <section class="stuff-director" id="stuff-director">
    <div class="section-inner">
      <h2 class="section-title">
        <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span> 院長の挨拶 <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span>
      </h2>

      <div class="stuff-director-inner">
        <div class="stuff-director-content">
          <div class="stuff-director-content__introduction">
            <div class="stuff-director-content__message">気軽に相談できる<br>
              街の歯医者さんでありたい。</div>
            <div class="stuff-director-content__text">当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。<br><br>

              「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</div>
            <p class="stuff-director-content__name">みなみ歯科クリニック<br>院長 南 俊雄</p>
          </div>
          <div class="stuff-director-sp-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/stuff-img/staff1-img.png" alt="">
          </div>

          <ul class="stuff-director-career-items">
            <li class="stuff-director-career-item">
              <div class="stuff-director-career-item__title">経歴</div>
              <div class="stuff-director-career-item__list">
                <div class="stuff-director-career-item__list1">2004年</div>
                <div class="stuff-director-career-item__list2">東京医科歯科大学歯学部 卒業</div>
              </div>
              <div class="stuff-director-career-item__list">
                <div class="stuff-director-career-item__list1">2008年</div>
                <div class="stuff-director-career-item__list2">東京歯科大学歯学研究科大学院修了
                  <br> 博士(歯学)取得</div>
              </div>
              <div class="stuff-director-career-item__list">
                <div class="stuff-director-career-item__list1">2012年</div>
                <div class="stuff-director-career-item__list2">みなみ歯科クリニック 開院</div>
              </div>
            </li>
            <li class="stuff-director-career-item">
              <div class="stuff-director-career-item__title">資格</div>
              <div class="stuff-director-career-item__list">歯科医師臨床研修指導歯科医</div>
              <div class="stuff-director-career-item__list">博士(歯学)</div>
              <div class="stuff-director-career-item__list">衛生検査技師</div>
            </li>
          </ul>
        </div>
        <div class="stuff-director-pc-img"><img src="<?php echo get_template_directory_uri(); ?>/img/stuff-img/staff1-img.png" alt="staff1-img"></div>
      </div>
    </div>
  </section>

  <!-- Slider main container -->
  <div class="swiper2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper swiper-wrapper2">
      <!-- Slides -->
      <div class="swiper-slide swiper-slide2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/stuff-img/staff-slider1.png" alt="stuff-slider1">
      </div>
      <div class="swiper-slide swiper-slide2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/stuff-img/staff-slider2.png" alt="stuff-slider2">
      </div>
      <div class="swiper-slide swiper-slide2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/stuff-img/staff-slider3.png" alt="stuff-slider3">
      </div>
      <div class="swiper-slide swiper-slide2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/stuff-img/staff-slider4.png" alt="stuff-slider4">
      </div>
      <div class="swiper-slide swiper-slide2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/stuff-img/staff-slider5.png" alt="stuff-slider5">
      </div>
    </div>
  </div>

  <section class="stuff-introduction" id="stuff-introduction">
    <div class="section-inner">
      <h2 class="section-title">
        <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span> スタッフ紹介 <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span>
      </h2>
      <div class="stuff-introduction-inner">
        <div class="stuff-introduction-list">
          <div class="stuff-introduction-list-title">歯科衛生士</div>
          <div class="stuff-introduction-items">
            <?php
            $args = array(
              'post_type' => 'staffs',
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'staff_position',
                  'field' => 'slug',
                  'terms' => 'dental_hygienist'
                )
              )
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
              <?php
              while ($the_query->have_posts()) :
                $the_query->the_post();
              ?>
                <div class="stuff-introduction-item">
                  <div class="stuff-introduction-item__img">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('large');
                    } else {
                      echo ' <img src="<?php echo get_template_directory_uri(); ?>/img/stuff-img/staff2.png" alt="staff-2-img">';
                    }
                    ?>
                  </div>
                  <p class="stuff-introduction-item__name">歯科衛生士<span><?php the_title(); ?></span></p>
                  <table class="stuff-introduction-item__contents">
                    <tr>
                      <th>出身地</th>
                      <td><?php the_field('birthplace'); ?></td>
                    </tr>
                    <tr>
                      <th>趣味</th>
                      <td><?php the_field('hobby'); ?></td>
                    </tr>
                    <tr>
                      <th>好きな食べ物</th>
                      <td><?php the_field('favorite-food'); ?></td>
                    </tr>
                  </table>
                </div>
              <?php endwhile; ?>
          </div>
        <?php endif; ?>
        </div>

        <div class="stuff-introduction-list">
          <div class="stuff-introduction-list-title">歯科助手</div>
          <div class="stuff-introduction-items">
            <?php
            $args = array(
              'post_type' => 'staffs',
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'staff_position',
                  'field' => 'slug',
                  'terms' => 'dental_assistant'
                )
              )
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
              <?php
              while ($the_query->have_posts()) :
                $the_query->the_post();
              ?>

                <div class="stuff-introduction-item">
                  <div class="stuff-introduction-item__img">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('large');
                    } else {
                      echo ' <img src="<?php echo get_template_directory_uri(); ?>/img/stuff-img/staff2.png" alt="staff-2-img">';
                    }
                    ?>
                  </div>
                  <p class="stuff-introduction-item__name">歯科衛生士<span><?php the_title(); ?></span></p>
                  <table class="stuff-introduction-item__contents">
                    <tr>
                      <th>出身地</th>
                      <td><?php the_field('birthplace'); ?></td>
                    </tr>
                    <tr>
                      <th>趣味</th>
                      <td><?php the_field('hobby'); ?></td>
                    </tr>
                    <tr>
                      <th>好きな食べ物</th>
                      <td><?php the_field('favorite-food'); ?></td>
                    </tr>
                  </table>
                </div>
              <?php endwhile; ?>
          </div>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>