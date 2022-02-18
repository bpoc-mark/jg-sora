<?php get_header();?>
<div class="topics">
    <main>
        <ul class="breadcrumb">
            <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
        </ul>
        <section>
            <h2 class="title-01"><span>TOPICS</span>お知らせ</h2>
            <article class="topics-detail">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="topics-detail-header">
                    <h1><?php echo the_title();?></h1>
                    <time><?php echo get_the_date('Y/m/d');?></time>
                </div>
                <div class="topics-detail-article">
                    <p><?php echo the_content();?></p>
                </div>
                <?php endwhile; ?>
            </article>
            <div class="topics-detail-pagination">
                <ul class="pagination-detail">
                    <li>
                        <div>
                            <?php previous_post_link('%link', '<span>PREV</span> タイトル名が入ります。タイトル名が入ります。タイトル名が入ります。') ?>
                        </div>
                    </li>
                    <li>
                        <div>
                            <?php next_post_link('%link', '<span>NEXT</span> タイトル名が入ります。タイトル名が入ります。タイトル名が入ります。 ') ?>
                        </div>
                    </li>
                </ul>
                <?php else : endif; ?>
                <p class="anchor-03 back"><a
                        href="<?php echo get_permalink(get_page_by_path('topics list')) ?>"><span>BACK</span>一覧に戻る</a>
                </p>
            </div>
        </section>
        <div id="contentsBottom">
            <a href="https://www.ie-miru.jp/cms/yoyaku/garden/events/19844"
                target="_blank">モデルハウスへの<br>予約はこちらから<span>来場予約</span></a>
        </div>
    </main>
</div>
<?php get_footer();?>