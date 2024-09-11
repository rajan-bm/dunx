<?php /**
 * 
 * Custom Post Types
 * 
 */

//Post Type Name : FAQ
add_action('init', 'faq_register_post_type');
function faq_register_post_type() {
    register_post_type('faq', array(
        'labels' => array(
           'name' => 'よくある質問',
           'add_new' => '新規良くある質問を追加',
           'edit_item' => '良くある質問を編集',
           'new_item' => '新規良くある質問',
           'view_item' => '良くある質問を見る',
           'search_items' => '良くある質問を検索',
           'not_found' => '良くある質問はありません',
           'not_found_in_trash' => 'ゴミ箱内に良くある質問が見つかりませんでした。',
           'add_new_item' => '新規良くある質問を追加',
        ),
        'supports' => array(
           'title', 'editor',  
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-chat',
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => false,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
    ));
}

// FAQ category
function create_faq_category() {
    $labels = array(
        'name' => 'よくある質問 Category',
        'singular_name' => 'よくある質問 Category',
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'faq/category' ),
    );
    register_taxonomy( 'faq_category', array( 'faq' ), $args );
}
add_action( 'init', 'create_faq_category', 0 );


//Post Type Name : NEWS
add_action('init', 'news_register_post_type');
function news_register_post_type() {
    register_post_type('news', array(
        'labels' => array(
           'name' => 'ニュース',
           'add_new' => '新規ニュースを追加',
           'edit_item' => 'ニュースを編集',
           'new_item' => '新規ニュース',
           'view_item' => 'ニュースを見る',
           'search_items' => 'ニュースを検索',
           'not_found' => 'ニュースはありません',
           'not_found_in_trash' => 'ゴミ箱内にニュースが見つかりませんでした。',
           'add_new_item' => '新規ニュースを追加',
        ),
        'supports' => array(
           'title', 'editor',  
        ),
        'menu_position' => 6,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'public' => true,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => false,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
    ));
}

// Register news Type taxonomy
function register_news_category2_taxonomy() {
    $labels = array(
        'name' => 'ニュース Type',
        'singular_name' => 'ニュース Type',
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'news/type'),
    );
    register_taxonomy('news_category2', array('news'), $args);
}
add_action('init', 'register_news_category2_taxonomy', 0);

// Register news Category taxonomy
function register_news_category_taxonomy() {
    $labels = array(
        'name' => 'ニュース Category',
        'singular_name' => 'ニュース Category',
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'news/category'),
    );
    register_taxonomy('news_category', array('news'), $args);
}
add_action('init', 'register_news_category_taxonomy', 0);


//Post Type Name : CASE STUDY
add_action('init', 'case_study_register_post_type');
function case_study_register_post_type() {
    register_post_type('case_study', array(
        'labels' => array(
           'name' => 'ケーススタディ',
           'add_new' => '新規ケーススタディを追加',
           'edit_item' => 'ケーススタディを編集',
           'new_item' => '新規ケーススタディ',
           'view_item' => 'ケーススタディを見る',
           'search_items' => 'ケーススタディを検索',
           'not_found' => 'ケーススタディはありません',
           'not_found_in_trash' => 'ゴミ箱内にケーススタディが見つかりませんでした。',
           'add_new_item' => '新規ケーススタディを追加',
        ),
        'supports' => array(
           'title', 'thumbnail',
        ),
        'menu_position' => 7,
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-aside',
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => false,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
    ));
}