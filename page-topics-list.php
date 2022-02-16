<?php get_header();?>
<div class="topics">
    <main>
        <ul class="breadcrumb">
            <li><a href="./">トップページ</a></li>
            <li>TOPICS お知らせ</li>
        </ul>
        <section>
            <h2 class="title-01"><span>TOPICS</span>お知らせ</h2>
            <div class="box-size box-side size-800">
                <ul class="topics-list mt40">
                    <?php
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            
            $args = array(
                'post_type' => 'POST',
                'post_status'=>'publish',
                'posts_per_page' => 10,
                'paged' => $paged,
            );
            
            $the_query = new WP_Query($args);
        ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php echo the_permalink()?>">
                            <p><?php echo the_title();?><time><?php echo get_the_date('Y/m/d');?></time></p>
                            <span class="anchor-vm">view more</span>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <div class="pagination-list">
                    <?php echo easy_wp_pagenavigation($the_query); ?>
                </div>
            </div>
        </section>
        <div id="contentsBottom">
            <a href="https://www.ie-miru.jp/cms/yoyaku/garden/events/19844"
                target="_blank">モデルハウスへの<br>予約はこちらから<span>来場予約</span></a>
        </div>
    </main>
</div>
<?php get_footer();?>