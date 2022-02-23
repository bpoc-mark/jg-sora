<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title();?></title>
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="<?php echo get_site_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri(); ?>/release/image/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/release/image/favicon.ico" />
    <!-- YakuHanJP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css">
    <!-- YakuHanJP -->
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- INSERT HERE SCRIPT FOR ADOBE FONTS -->

    <!-- END ADOBE FONTS -->

    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
    <header>
        <h1><a href="http://sora-passive.com/"><img
                    src="<?php echo get_template_directory_uri();?>/release/image/ico_logo.svg"
                    alt="SORA Passive design House"></a></h1>
        <nav>
            <dl>
                <dt id="menu"><img src="<?php echo get_template_directory_uri();?>/release/image/btn_menu.svg"
                        alt="MENU">
                </dt>
                <dd id="gNav">
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP<span>トップページ</span></a></li>
                        <li><a
                                href="<?php echo get_permalink(get_page_by_path('topics list')) ?>">TOPICS<span>お知らせ</span></a>
                        </li>
                        <li><a
                                href="<?php echo get_permalink(get_page_by_path('concept')) ?>">CONCEPT<span>SORAを知る</span></a>
                        </li>
                        <li><a
                                href="<?php echo get_permalink(get_page_by_path('products')) ?>">PRODUCTS<span>SORAのお家</span></a>
                        </li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('model house')) ?>">MODEL
                                HOUSE<span>モデルハウス</span></a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('about')) ?>">ABOUT<span>会社概要</span></a>
                        </li>
                    </ul>
                    <p><img src="<?php echo get_template_directory_uri();?>/release/image/btn_close.svg" alt="CLOSE">
                    </p>
                </dd>
                <dd id="mhButton"><a href="https://www.ie-miru.jp/cms/yoyaku/garden/events/19666" target="_blank"><img
                            src="<?php echo get_template_directory_uri();?>/release/image/btn_mh_pc.svg"
                            alt="無人モデルハウス来場予約" class="switch"></a></dd>
            </dl>
        </nav>
    </header>
    <div class="page__content">