<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="canonical" href="http://sora-passive.com/">
    <link rel="stylesheet" href="css/default.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.0.7/swiper-bundle.css"
        integrity="sha512-GhBjcwH7EdyN0fn+22WrvyZTIifGgH7YbcpuhdZM/EyrYaIk8brvj0cJ4YhgB9ivxsJRw/o3nEWXdXGHYrLf1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/release/css/page/top/common.css"
        type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/release/style.css" type="text/css">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/release/image/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/release/image/apple-touch-icon.png"
        sizes="180x180">
    <?php wp_head();?>
</head>

<body class="top">
    <header>
        <h1><a href="http://sora-passive.com/"><img
                    src="<?php echo get_template_directory_uri();?>/release/image/ico_logo.svg"
                    alt="SORA Passive design House"></a></h1>
        <nav>
            <dl>
                <dt id="menu"><img src="<?php echo get_template_directory_uri();?>/release/image/btn_menu.svg"
                        alt="MENU"></dt>
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
                <dd id="mhButton"><a href="https://www.ie-miru.jp/cms/yoyaku/garden/events/19844" target="_blank"><img
                            src="<?php echo get_template_directory_uri();?>/release/image/btn_mh_pc.svg"
                            alt="無人モデルハウス来場予約" class="switch"></a></dd>
            </dl>
        </nav>
    </header>
    <main>
        <div id="topFV">
            <figure><img src="<?php echo get_template_directory_uri();?>/release/image/top/img_main.jpg" alt="">
            </figure>
            <p><img src="<?php echo get_template_directory_uri();?>/release/image/top/txt_header.svg"
                    alt="さわやかな風が通り抜け、暖かい日差しが包み込む。自然の力を最大限に活用した、心地いい暮らし"><a href="#topTopics"><img
                        src="<?php echo get_template_directory_uri();?>/release/image/top/btn_scroll.svg"
                        alt="scroll"></a></p>
            <dl>
                <dt id="menu-top"><img src="<?php echo get_template_directory_uri();?>/release/image/btn_menu.svg"
                        alt="MENU">
                </dt>
                <dd id="gNav-top">
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
                    <div class="close"><img src="<?php echo get_template_directory_uri();?>/release/image/btn_close.svg"
                            alt="CLOSE">
                    </div>
                </dd>
                <dd>
                    <ul>
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
                </dd>
                <dd><a href="https://www.ie-miru.jp/cms/yoyaku/garden/events/19844" target="_blank"><img
                            src="<?php echo get_template_directory_uri();?>/release/image/btn_mh_top.svg"
                            alt="無人モデルハウス来場予約"></a></dd>
            </dl>
        </div>
        <section id="topTopicsWrapper">
            <div id="topTopics" class="setAnime inView animation-delay500">
                <h2 class="title-02"><span>TOPICS</span><span>お知らせ</span></h2>
                <ul class="topics-list mt10">
                    <?php
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            
            $args = array(
                'post_type' => 'POST',
                'post_status'=>'publish',
                'posts_per_page' => 3,
                'paged' => $paged,
            );
            
            $the_query = new WP_Query($args);
        ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php echo get_permalink(); ?>">
                            <p><?php echo the_title();?><time><?php echo get_the_date('Y/m/d');?></time></p>
                            <span class="anchor-vm">view more</span>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <figure class="setAnime inView"><img
                    src="<?php echo get_template_directory_uri();?>/release/image/top/img_topics.jpg" alt="">
            </figure>
        </section>
        <section id="topConceptWrapper">
            <div id="topConcept" class="setAnime inView">
                <h2 class="title-02"><span>CONCEPT</span><span>SORAを知る</span></h2>
                <p class="text-align-j mt30">夢の一戸建てを諦めているあなたに。<br>京都の小さな土地に、費用を抑えたちょうどいい広さの住まいを。</p>
                <ul class="mt40">
                    <li class="setAnime inView">
                        <a href="<?php echo get_permalink(get_page_by_path('concept')) ?>">
                            <figure><img
                                    src="<?php echo get_template_directory_uri();?>/release/image/top/img_concept01.jpg"
                                    alt=""></figure>
                            <p>SORA誕生までのお話</p>
                            <span class="anchor-vm">view more</span>
                        </a>
                    </li>
                    <li class="setAnime inView animation-delay500">
                        <a href="<?php echo get_permalink(get_page_by_path('concept')) ?>#performance">
                            <figure><img
                                    src="<?php echo get_template_directory_uri();?>/release/image/top/img_concept02.jpg"
                                    alt=""></figure>
                            <p>SORAの性能</p>
                            <span class="anchor-vm">view more</span>
                        </a>
                    </li>
                </ul>
                <p id="topConceptAnchor" class="setAnime inView"><a
                        href="<?php echo get_permalink(get_page_by_path('concept')) ?>#conceptBottom"
                        class="anchor-01"><span>京都の狭小地に特化した<br class="sp">カタチの住まい</span><span class="anchor-vm">view
                            more</span></a></p>
            </div>
        </section>
        <section id="topProductsWrapper">
            <div id="topProducts" class="setAnime inView">
                <div class="setAnime inView animation-delay500">
                    <h2 class="title-02"><span>PRODUCTS</span><span>SORAのお家</span></h2>
                    <p class="mt40">陽だまりにそよ風がまう<br>3階建て吹き抜けのある家</p>
                    <a href="<?php echo get_permalink(get_page_by_path('products')) ?>" class="mt40"><span
                            class="anchor-vm">view more</span></a>
                </div>
                <figure class="setAnime inViewSp"><img
                        src="<?php echo get_template_directory_uri();?>/release/image/top/img_products.jpg" alt="">
                </figure>
                <ul class="anchor-02">
                    <li class="setAnime inView"><a
                            href="<?php echo get_permalink(get_page_by_path('products')) ?>#layout"><span>LAYOUT</span>間取り</a>
                    </li>
                    <li class="setAnime inView animation-delay500"><a
                            href="<?php echo get_permalink(get_page_by_path('products')) ?>#specs"><span>SPECS</span>建築仕様</a>
                    </li>
                    <li class="setAnime inView animation-delay1000"><a
                            href="<?php echo get_permalink(get_page_by_path('products')) ?>#flow"><span>FLOW</span>SORAのお家が建つまで</a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="topModelHouseWrapper">
            <div id="topModelHouse" class="setAnime inView">
                <div class="setAnime inViewSp">
                    <h2 class="title-02"><span>MODEL HOUSE</span><span>SORAの性能と心地良さを体感</span></h2>
                    <p class="mt40">非対面で自由に見学<br>無人モデルハウス</p>
                    <a href="<?php echo get_permalink(get_page_by_path('model house')) ?>" class="mt40"><span
                            class="anchor-vm">view more</span></a>
                </div>
                <div class="swiper-container setAnime inView animation-delay500">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <figure><img
                                    src="<?php echo get_template_directory_uri();?>/release/image/top/img_gallary01.jpg"
                                    alt=""></figure>
                        </li>
                        <li class="swiper-slide">
                            <figure><img
                                    src="<?php echo get_template_directory_uri();?>/release/image/top/img_gallary02.jpg"
                                    alt=""></figure>
                        </li>
                        <li class="swiper-slide">
                            <figure><img
                                    src="<?php echo get_template_directory_uri();?>/release/image/top/img_gallary03.jpg"
                                    alt=""></figure>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div id="contentsBottom" class="setAnime inView">
            <a href="https://www.ie-miru.jp/cms/yoyaku/garden/events/19844"
                target="_blank">モデルハウスへの<br>予約はこちらから<span>来場予約</span></a>
        </div>
    </main>
</body>

<?php get_footer();?>
<script type="text/javascript" charset="utf-8">
$(window).on("load", function() {
    $('main').append(
        '<div class="cloud cloud-blue plx" data-plxspd="10"><img src="<?php echo get_template_directory_uri();?>/release/image/bg_cloud_blue.png" alt=""></div><div class="cloud cloud-yellow plx" data-plxspd="15"><img src="<?php echo get_template_directory_uri();?>/release/image/bg_cloud_yellow.png" alt=""></div>'
    );
    $('#topTopics').append(
        '<div class="decoration pigeon"><img src="<?php echo get_template_directory_uri();?>/release/image/img_pigeon.png" alt=""></div>'
    );
    $('#topConcept').append(
        '<div class="decoration raindrops"><img src="<?php echo get_template_directory_uri();?>/release/image/img_raindrops.png" alt=""></div>'
    );
    $('#topProducts').find('div').append(
        '<div class="decoration leaf"><img src="<?php echo get_template_directory_uri();?>/release/image/img_leaf.png" alt=""></div>'
    );
    $('.swiper-container').append('<div class="swiper-pagination"></div>');
    var mySwiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        speed: 1000,
        loop: true,
        mousewheel: true,
        keyboard: true,
        autoplay: {
            delay: 4000
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction'
        }
    });
});
</script>