<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>架空クリニックサイト</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500&display=swap" rel="stylesheet">
s  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header-inner">
      <div class="header-nav-contain">
        <div class="header-icon">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="logo"></a>
        </div>
        <!-- スマホドロワー -->
        <div class="drawer-icon">
          <div class="drawer-icon-bars">
            <div class="drawer-icon-bar1"></div>
            <div class="drawer-icon-bar2"></div>
            <div class="drawer-icon-bar3"></div>
          </div>
        </div>
        <div class="drawer-content">
          <div class="drawer_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/drawer-img/logo-drawer.png" alt="アイコン">
          </div>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'drawer',
              'container' => false,
              'menu_class' => 'drawer-content-items',
            )
          );
          ?>
          <div class="nav-bottom drawer-content-bottom">
            <div class="nav-bottom-left">
              <div class="nav-bottom-tel">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon_tel.png" alt="icon_tel">
                <span>03-1234-5678</span>
              </div>
              <p class="nav-bottom-time">(年中無休 AM9:00〜PM22:00)</p>
            </div>
            <div class="nav-bottom-right">
              <a class="nav-bottom-btn" href="<?php echo esc_url(home_url("reserve")); ?>">
                <div> <svg xmlns="http://www.w3.org/2000/svg" width="48.858" height="28.613" viewBox="0 0 48.858 28.613">
                    <defs>
                      <style>
                        .a {
                          fill: #fff;
                        }
                      </style>
                    </defs>
                    <g transform="translate(0 -190.769)">
                      <path class="a" d="M11.716,0H2.068A2.068,2.068,0,0,0,0,2.068V19.986a2.068,2.068,0,0,0,2.068,2.068h9.649a2.068,2.068,0,0,0,2.068-2.068V2.068A2.068,2.068,0,0,0,11.716,0ZM6.892,20.675A1.378,1.378,0,1,1,8.27,19.3,1.377,1.377,0,0,1,6.892,20.675Zm4.824-4.652a.518.518,0,0,1-.517.517H2.584a.518.518,0,0,1-.517-.517V2.584a.518.518,0,0,1,.517-.517H11.2a.518.518,0,0,1,.517.517Z" transform="translate(35.074 197.328)" />
                      <path class="a" d="M29.507,0H2.682A2.683,2.683,0,0,0,0,2.682V20.565a2.683,2.683,0,0,0,2.682,2.682h10.73l-.894,2.682H8.494a1.341,1.341,0,1,0,0,2.682h15.2a1.341,1.341,0,1,0,0-2.682H19.671l-.894-2.682h10.73a2.683,2.683,0,0,0,2.682-2.682V2.682A2.683,2.683,0,0,0,29.507,0Zm-.894,19.671H3.577V3.577H28.613Z" transform="translate(0 190.769)" />
                    </g>
                  </svg>
                </div>
                <p class="nav-bottom-btn-text">WEB予約<br>
                  <span>はこちら</span>
                </p>
              </a>
            </div>
          </div>
        </div>
        <div class="drawer-background"></div>
        <!-- /スマホドロワー -->
        <div class="header-nav-contain-right">
          <div class="header-nav-items">
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'global',
                'container' => false,
                'menu_class' => 'header-nav',
                'add_a_class' => 'header-nav-item-link' // aタグへclass追加
              )
            );
            ?>
          </div><!-- header-nav-items -->
          <div class="header-nav-address-contain">
            <div class="header-nav-address">〒166-0001 東京都杉並区阿佐谷北7-3-1</div>
            <div class="header-nav-right-contain">
              <div class="header-nav-tel-icon"><img src="<?php echo get_template_directory_uri() ?>/img/icon_tel.png" alt="icon_tel"></div>
              <div class="header-nav-tel">03-1234-5678</div>
            </div>
          </div>
        </div><!-- /header-nav-contain-right -->
      </div><!-- header-nav-contain -->
    </div><!-- /header-inner -->
  </header>