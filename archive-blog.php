<?php get_header() ?>
<main class="main">
<?php get_template_part('template-parts/page-top-btn'); ?>
  <div class="page-top">
    <div class="page-top__wrapper blog-page-top">
      <div class="page-top__content">
        <p class="page-top__content--main">スタッフ ブログ</p>
        <p class="page-top__content--sub">STAFF BLOG</p>
      </div>
    </div>
    <?php  get_template_part('template-parts/bcn_display'); ?>
  </div>


  <div class="archive">
    <div class="archive-content">
      <div class="archive-inner">
        <?php
        if (have_posts()) :
        ?>
          <div class="archive-items">
            <?php
            while (have_posts()) :
              the_post();
            ?>
              <div class="archive-item">
                <a href="<?php the_permalink(); ?>" class="archive-item__link">
                  <div class="archive-item__img">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('large');
                    } else {
                      echo '<img src="<?php echo get_template_directory_uri(); ?>/img/stuff-blog-img.png" alt="stuff-blog-img">';
                    }
                    ?>
                  </div>
                  <div class="archive-item__right">
                    <p class="archive-item__category">
                      <?php 
                      $terms = get_the_terms('','other');
                      if($terms) {
                        foreach($terms as $term){
                          echo $term->name;
                        }
                      }
                      ?>
                    </p>
                    <p class="archive-item__title">
                      <?php
                      the_title();
                      ?>
                    </p>
                    <p class="archive-item__time">
                      <?php
                      the_time('Y.n.j'); ?>
                    </p>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php get_template_part('template-parts/pagination'); ?>
      </div>
      <?php get_sidebar() ?>
    </div>
  </div>
</main>
<?php get_footer() ?>