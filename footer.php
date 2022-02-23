        </div>
        <footer>
            <div id="footerInfo">
                <p><a href="http://sora-passive.com/"><img
                            src="<?php echo get_template_directory_uri();?>/release/image/ico_logo.svg"
                            alt="SORA Passive design House"></a>
                </p>
                <dl>
                    <dt>garDEN 株式会社</dt>
                    <dd><span>〒603-8214</span><span>京都市北区紫野雲林院町35-4</span></dd>
                    <dd><a href="tel:0754945558"><img
                                src="<?php echo get_template_directory_uri();?>/release/image/btn_tell.svg"
                                alt="TELL:075-494-5558"></a></dd>
                </dl>
            </div>
            <ul id="footerNavi">
                <li><a href="<?php echo get_permalink(get_page_by_path('topics list')) ?>">お知らせ</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('concept')) ?>">SORAを知る</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('products')) ?>">SORAのお家</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('model house')) ?>">モデルハウス</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('about')) ?>">会社概要</a></li>
                <li><a href="https://www.ie-miru.jp/cms/yoyaku/garden/events/19666" target="_blank">来場予約</a></li>
            </ul>
            <p><small>&copy;2022 garDEN Inc.</small>Created by <a href="https://jeengross.jp/"
                    target="_blank">jeengross</a></p>
        </footer>
        <!-- INSERT SCRIPTS HERE -->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <!-- END OF SCRIPTS -->
        <?php wp_footer(); ?>
        </body>

        </html>