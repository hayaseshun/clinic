<?php get_header() ?>
<main class="main">
  <?php get_template_part('template-parts/page-top-btn'); ?>
  <div class="page-top">
    <div class="page-top__wrapper medical-page-top">
      <div class="page-top__content">
        <p class="page-top__content--main">診療案内</p>
        <p class="page-top__content--sub">MEDICAL</p>
      </div>
    </div>
    <?php get_template_part('template-parts/bcn_display'); ?>
  </div>

  <div class="medical-service">
    <div class="section-inner">
      <div class="normal-service-list">
        <p class="normal-service-title">一般診療</p>
        <ul class="service-item-list">
          <?php
          $args = array(
            'post_type' => 'plan',
            'order' => 'ASC',
            'tax_query' => array(
              array(
                'taxonomy' => 'medical_type',
                'field' => 'slug',
                'terms' => 'normal_medical',
              )
            )
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) :
              $the_query->the_post(); ?>
              <li class="service-item">
                <a href="#post-<?php the_ID(); ?>" class="service-item__link">
                  <?php the_title(); ?>
                </a>
              </li>
            <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      </div>

      <div class="special-service-list">
        <p class="special-service-title">特殊診療</p>
        <ul class="service-item-list">
          <?php
          $args = array(
            'post_type' => 'plan',
            'order' => 'ASC',
            'tax_query' => array(
              array(
                'taxonomy' => 'medical_type',
                'field' => 'slug',
                'terms' => 'special_medical',
              )
            )
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) :
              $the_query->the_post(); ?>

              <li class="service-item">
                <a href="#post-<?php the_ID(); ?>" class="service-item__link">
                  <?php the_title(); ?>
                </a>
              </li>
            <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      </div>
    </div>
  </div>

  <section class="normal-service">
    <div class="page-service-bg-top"></div>
    <div class="page-service-bg">
      <div class="section-inner">
        <h2 class="section-title">
          <span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span> 一般診療 <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///">
          </span>
        </h2>

        <div class="page-service-inner">
          <ul class="page-service-items">
            <?php
            $args = array(
              'post_type' => 'plan',
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'medical_type',
                  'field' => 'slug',
                  'terms' => 'normal_medical',
                )
              )
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) :
                $the_query->the_post(); ?>
                <li class="page-service-item" id="post-<?php the_ID(); ?>">
                  <div class="page-service-item__head">
                    <div class="page-service-item__title1"><?php the_title(); ?></div>
                    <div class="page-service-item__title2"><?php the_field('problem'); ?></div>
                  </div>
                  <div class="page-service-item__content">
                    <div class="page-service-item__text">
                      <?php the_field('introduce'); ?>
                    </div>
                    <div class="page-service-item__img">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                      } else {
                        echo  '<img src="<?php echo get_template_directory_uri(); ?>/img/medical-img/medical-content-img1.png" alt="medical-content-img1">';
                      }
                      ?>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="page-service-bottom-bg"></div>
  </section>


  <section class="special-service">
    <div class="page-service-bg-top"></div>
    <div class="page-service-bg">
      <div class="section-inner">
        <h2 class="section-title">
          <span>
            <img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///"></span> 特殊診療 <span><img src="<?php echo get_template_directory_uri(); ?>/img/title-deco.png" alt="///">
          </span>
        </h2>

        <div class="page-service-inner">
          <ul class="page-service-items">
            <?php
            $args = array(
              'post_type' => 'plan',
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'medical_type',
                  'field' => 'slug',
                  'terms' => 'special_medical',
                )
              )
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) :
                $the_query->the_post(); ?>

                <li class="page-service-item" id="post-<?php the_ID(); ?>">
                  <div class="page-service-item__head">
                    <div class="page-service-item__title1"><?php the_title(); ?></div>
                    <div class="page-service-item__title2"><?php the_field('problem'); ?></div>
                  </div>
                  <div class="page-service-item__content">
                    <div class="page-service-item__text">
                      <?php the_field('introduce'); ?>
                    </div>
                    <div class="page-service-item__img">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                      } else {
                        echo  '<img src="<?php echo get_template_directory_uri(); ?>/img/medical-img/medical-content-img1.png" alt="medical-content-img1">';
                      }
                      ?>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="page-service-bottom-bg"></div>
  </section>
</main>

<?php get_footer() ?>