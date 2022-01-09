<?php

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array());
  wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper.css', array(), '1.0.0', 'all');
  wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper.js', array(), '1.0.0', true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');




/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');


add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
function add_class_on_link($item_output, $item)
{
  return preg_replace('/(<a.*?)/', '$1' . " class='header-nav-item-link'", $item_output);
}

add_action( 'wp_nav_menu_objects', function( $sorted_menu_items, $args ) {
	foreach ( $sorted_menu_items as $sorted_menu_item ) {
		if ( 'blog' == $sorted_menu_item->object && $sorted_menu_item->current) {
			$sorted_menu_item->classes[] = 'current_page_item';
		}
	}
	return $sorted_menu_items;
}, 10, 2 );


