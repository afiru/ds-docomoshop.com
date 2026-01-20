<?php get_header(); ?>
<main>
    <div class="indexwaku">
        <div class="tops">
            <div class="slaider">
                <?php if (function_exists('meteor_slideshow')) {
                    meteor_slideshow();
                } ?>
            </div>
            <div class="menus">
                <ul>
                    <li>
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_hukuchiyama_product.png" alt="福知山店の各種ご予約">
                    </li>
                    <li>
                        <a href="https://www.nttdocomo.co.jp/product/select/index.html?id=0601601246400&ds=1" title="福知山店の商品予約" target="_blank">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_hukuchiyama_product_yoyaku_off.png" alt="福知山店の商品予約">
                        </a>
                    </li>
                    <!--<li>
                        <a href="http://wb.goku.ne.jp/DSfukuchiyamaHtmlResult/WaitingResultPagePC.htm" title="順番予約" target="_blank">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_hukuchiyama_product_yoyaku_junban_off.png" alt="福知山店の順番予約">
                        </a>
                    </li>-->
                    <li>
                        <a href="https://www.nttdocomo.co.jp/support/procedure/reserve_shop/" title="来店予約" target="_blank">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_hukuchiyama_product_yoyaku_raiten_off.png" alt="福知山店の来店予約">
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_mineyama_product.png" alt="福知山店の各種ご予約">
                    </li>
                    <li>
                        <a href="https://www.nttdocomo.co.jp/product/select/index.html?id=0601601246500&ds=1" title="峰山店の商品予約" target="_blank">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_hukuchiyama_product_yoyaku_off.png" alt="峰山店の商品予約">
                        </a>
                    </li>
                    <!--<li>
                        <a href="http://wb.goku.ne.jp/DSmineyamaHtmlResult/WaitingResultPagePC.htm" title="峰山店の順番予約" target="_blank">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_hukuchiyama_product_yoyaku_junban_off.png" alt="福知山店の順番予約">
                        </a>
                    </li>-->
                    <li>
                        <a href="https://www.nttdocomo.co.jp/support/procedure/reserve_shop/" title="峰山店の来店予約" target="_blank">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_hukuchiyama_product_yoyaku_raiten_off.png" alt="峰山店の来店予約">
                        </a>
                    </li>
                </ul>
            </div>
            <!--<div class="menus">-->
        </div>
        <!--<div class="tops">-->
        <img class="make_you_happy pc_only" src="<?php echo get_bloginfo('template_url'); ?>/img/index/title_make_you_happy.png">
        <img class="make_you_happysp sp_only" src="<?php echo get_bloginfo('template_url'); ?>/img/index/title_make_you_happy_sp.png">
    </div>
    <!--<div class="indexwaku">-->

    <section class="campaign">
        <h2><img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/index/title_campaign.png"></h2>
        <ul>
            <li>
                <a href="https://www.nttdocomo.co.jp/charge/promotion/gigaho_gigalite/" title="ギガ放題" target="_blank">
                    <img class="" src="http://ds-docomoshop.com/wp-content/uploads/2024/05/imgpsh_fullsize_anim.png" alt="ニュードコモ">
                </a>
            </li>
            <li>
                <a href="https://www.nttdocomo.co.jp/service/d_payment/?icid=CRP_menu_to_CRP_SER_d_payment" title="ドコモ光パック" target="_blank">
                    <img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/index/bunner_campaign_02_off.png" alt="ドコモ光パック">
                </a>
            </li>
            <li>
                <a href="http://d-card.jp/st/" title="ポイントカード" target="_blank">
                    <img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/index/bunner_campaign_03_off.png" alt="ポイントカード">
                </a>
            </li>
            <li>
                <a href="https://dmarket.docomo.ne.jp/" title="dメニュー" target="_blank">
                    <img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/index/bunner_campaign_04_off.png" alt="dメニュー">
                </a>
            </li>
        </ul>
    </section>
    <!--<section class="campaign">-->
    <section class="recruit">
        <h2><img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/index/title_recruit.png" alt="dメニュー"></h2>
        <ul>
            <li class="left"><img class="mini" src="<?php echo get_bloginfo('template_url'); ?>/img/index/bunner_recruit_01.png" alt="スタッフ紹介の画像"></li>
            <li class="rgiht prefari">
                <h2><img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/index/title_recruit_staff.png" alt="スタッフ紹介"></h2>
                <p>ドコモショップ福知山店・峰山店で<br>働くスタッフを紹介します。</p>
                <a href="<?php echo home_url('/staff/'); ?>">
                    <img class="links" src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_recruit_staff_off.png">
                </a>
            </li>
        </ul>
        <?php if (is_mobile_cheange()): ?>
            <ul class="sp_only">
                <li class="rgiht"><img class="mini" src="<?php echo get_bloginfo('template_url'); ?>/img/index/bunner_recruit_02.png" alt="スタッフ紹介の画像"></li>
                <li class="left prefari">
                    <h2><img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/index/title_recruit_recruit.png" alt="募集要項"></h2>
                    <p>ドコモショップ福知山店・峰山店の<br>募集要項、待遇についてご紹介します。</p>
                    <a href="<?php echo home_url('/recruit/'); ?>">
                        <img class="links sp_only" src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_recruit_requirements_off.png">
                    </a>
                </li>
            </ul>
        <?php else: ?>
            <ul class="pc_only">
                <li class="left prefari">
                    <h2><img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/index/title_recruit_recruit.png" alt="募集要項"></h2>
                    <p>ドコモショップ福知山店・峰山店の<br>募集要項、待遇についてご紹介します。</p>
                    <a href="<?php echo home_url('/recruit/'); ?>">
                        <img class="links pc_only" src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_recruit_requirements_off.png">
                    </a>
                </li>
                <li class="rgiht"><img class="<?php if (is_mobile_cheange()) {
                                                } else {
                                                    echo 'box';
                                                } ?>" src="<?php echo get_bloginfo('template_url'); ?>/img/index/bunner_recruit_02.png" alt="スタッフ紹介の画像"></li>
            </ul>
        <?php endif; ?>


        <ul>
            <li class="left"><img class="mini" src="<?php echo get_bloginfo('template_url'); ?>/img/index/bunner_recruit_03.png"></li>
            <li class="rgiht prefari">
                <h2><img class="" src="<?php echo get_bloginfo('template_url'); ?>/img/index/title_recruit_entry.png"></h2>
                <p>ドコモショップ福知山店・峰山店への<br>エントリーをご希望の方</p>
                <a href="<?php echo home_url('/entry/'); ?>">
                    <img class="links" src="<?php echo get_bloginfo('template_url'); ?>/img/index/botton_recruit_recruit_entry_off.png">
                </a>
            </li>
        </ul>
    </section>
</main>
<?php get_footer(); ?>