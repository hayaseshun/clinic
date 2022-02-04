<aside id="secondary">
  <div class="side-clinic">
    <div class="side-head">
      <div class="side-head-img">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <g id="sidebar-icon_1" transform="translate(-305 -7172.777)">
            <g id="icon-02" transform="translate(305 7172.777)">
              <rect id="長方形_23373" data-name="長方形 23373" width="24" height="24" fill="#393939" opacity="0" />
              <path id="hospital" d="M5.368,10.232V8.555a.5.5,0,0,1,.5-.5H7.548a.5.5,0,0,1,.5.5v1.677a.5.5,0,0,1-.5.5H5.871A.5.5,0,0,1,5.368,10.232Zm5.871.5h1.677a.5.5,0,0,0,.5-.5V8.555a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,10.735ZM8.051,14.258V12.58a.5.5,0,0,0-.5-.5H5.871a.5.5,0,0,0-.5.5v1.677a.5.5,0,0,0,.5.5H7.548A.5.5,0,0,0,8.051,14.258Zm3.187.5h1.677a.5.5,0,0,0,.5-.5V12.58a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,14.761Zm7.548,5.2v1.51H0v-1.51a.5.5,0,0,1,.5-.5h.818V3.566a.95.95,0,0,1,1.006-.882H6.039V1.006A1.006,1.006,0,0,1,7.045,0h4.7a1.006,1.006,0,0,1,1.006,1.006V2.684h3.711a.95.95,0,0,1,1.006.882V19.458h.818A.5.5,0,0,1,18.787,19.961ZM3.334,19.416H8.051v-2.81a.5.5,0,0,1,.5-.5h1.677a.5.5,0,0,1,.5.5v2.81h4.718V4.7h-2.7V5.7A1.006,1.006,0,0,1,11.742,6.71h-4.7A1.006,1.006,0,0,1,6.039,5.7V4.7h-2.7ZM11.155,2.684h-1.09V1.594a.252.252,0,0,0-.252-.252H8.974a.252.252,0,0,0-.252.252v1.09H7.632a.252.252,0,0,0-.252.252v.839a.252.252,0,0,0,.252.252h1.09v1.09a.252.252,0,0,0,.252.252h.839a.252.252,0,0,0,.252-.252V4.026h1.09a.252.252,0,0,0,.252-.252V2.935A.252.252,0,0,0,11.155,2.684Z" transform="translate(3 1)" fill="#393939" />
            </g>
            <rect id="長方形_23334" data-name="長方形 23334" width="24" height="24" transform="translate(305 7172.777)" fill="none" />
          </g>
        </svg>
      </div>
      <div class="side-head-title">
        クリニックの紹介
      </div>
    </div>
    <div class="side-clinic__img"><img src="<?php echo get_template_directory_uri(); ?>/img/archive-img/sidebar-img_1.png" alt=""></div>
    <div class="side-clinic__content">
      <p class="side-clinic__content-title">みなみ歯科クリニック</p>
      <p class="side-clinic__content-text">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
      <a href="<?php echo esc_url(home_url()); ?>/about/" class="side-clinic__content-link">当院について</a>
    </div>
  </div>

  <div class="side-blog-container">
    <div class="side-head">
      <div class="side-head-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-03.png" alt="">
      </div>
      <div class="side-head-title">新着記事</div>
    </div>


    <?php
    if (have_posts()) :
    ?>

      <div class="side-blog-items">
        <?php
        while (have_posts()) :
          the_post();
        ?>
          <div class="side-blog-item">
            <a href="<?php the_permalink(); ?>" class="side-blog-item__link">
              <div class="side-blog-item__img">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large');
                } else {
                  echo '<img src="<?php echo get_template_directory_uri() ?>/img/stuff-blog-img.png" alt="stuff-blog-img.png">';
                }
                ?>
              </div>
              <div class="side-blog-item__right">
                <p class="side-blog-item__tag">お知らせ</p>
                <p class="side-blog-item__title">
                  <?php
                  $word_count = '22'; //表示する文字数
                  $post_title = get_the_title(); //タイトル取得
                  $post_title_count = mb_strlen($post_title); //タイトルの文字数取得
                  $post_title = mb_substr($post_title, 0, $word_count); //タイトルの頭16文字取得
                  echo $post_title; //タイトル表示
                  if ($post_title_count > $word_count) { //表示文字数がタイトル文字数より多い場合
                    echo '…'; //三点リーダ表示
                  }
                  ?>
                </p>
                <p class="side-blog-item__time"><?php the_time('Y,n,j'); ?></p>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="side-category-container">
    <div class="side-head">
      <div class="side-head-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/archive-img/sidebar-icon.png" alt="">
      </div>
      <div class="side-head-title">カテゴリー</div>
    </div>
    <ul class="side-category-items">
      <li class="side-category-item">
        <a href="" class="side-category-item__link">
          テキストテキスト
        </a>
      </li>
      <li class="side-category-item">
        <a href="" class="side-category-item__link">
          テキストテキスト
        </a>
      </li>
      <li class="side-category-item">
        <a href="" class="side-category-item__link">
          テキストテキスト
        </a>
      </li>
      <li class="side-category-item">
        <a href="" class="side-category-item__link">
          テキストテキスト
        </a>
      </li>
    </ul>
  </div>
</aside>