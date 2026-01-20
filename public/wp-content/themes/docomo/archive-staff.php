<?php get_header(); ?>
<main>
    <div class="title">
        <div class="title_innner">
            <h2>Recruit</h2>
            <p>求人情報（スタッフ紹介）</p>
        </div>
    </div>
    
    <div class="pankuzu">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
    <div class="conteners_contact_box">
        <h2>
        <img class="pc_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_hukuchiyama.png">
        <img class="sp_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_hukuchiyama_sp.png">
        </h2>
        <div class="hukuchiyama baces">
            <?php $cat = get_term_by( 'slug' , 'hukuchiyama_staff' , 'staff-info' );  ?>
            <?php
                $args = array(
                         'posts_per_page' => 8,
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                         'post_type' => 'staff',
                         'staff-info' => 'hukuchiyama_staff',  // 非推奨のため 'tax_query' を使ってください
                         'post_status' => 'publish'
                );
            ?>
            <?php $posts =  get_posts( $args );  ?>
            <?php foreach($posts as $post): $costomdate = get_custom_field_template($post->ID); ?>
            <section class="innerclass">
                <div class="thumbs">
                    <img src="<?php echo get_thumbs_url_pass($post->ID); ?>">
                </div>
                <div class="preflist">
                    <h2><?php echo get_the_title($post->ID); ?><span class="kana"><?php echo $costomdate['staff_kana']; ?></span></h2>
                    <p class="yakusyoku">
                        入社年：<?php echo $costomdate['staff_year']; ?>　
                        <?php if(!empty($costomdate['staff_p'])): ?>
                        役職：<?php echo $costomdate['staff_p']; ?>　
                        <?php endif; ?>
                        資格：<?php echo $costomdate['staff_shikaku']; ?>
                    </p>
                    <section class="situgioutou">
                        <h3>Q1.ここで働くキッカケは?</h3>
                        <p><?php echo nl2br($costomdate['staff_kikkake']); ?></p>
                    </section>
                    <section class="situgioutou">
                        <h3>Q2.趣味は何ですか?</h3>
                        <p><?php echo nl2br($costomdate['staff_syumi']); ?></p>
                    </section>
                    <section class="situgioutou">
                        <h3>Q3.休日はどのように過ごしていますか?</h3>
                        <p><?php echo nl2br($costomdate['staff_kyuzitu']); ?></p>
                    </section>
                    <section class="bottons">
                        <p><?php echo nl2br($costomdate['staff_etc']); ?></p>
                    </section>
                </div>
            </section>
            <?php endforeach; ?>
        </div><!--<div class="hukuchiyama">-->
        <ul class="bottonist">
            <li>
                <a href="<?php echo home_url('/recruit/'); ?>">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/botton_bosyoukou_off.png">
                </a>
            </li>
            <li>
                <a href="<?php echo home_url('/entry/'); ?>">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/botton_entry_off.png">
                </a>
            </li>
        </ul>
    </div>
    
    <div class="conteners_contact_box">
        <h2>
        <img class="pc_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_mineyama.png">
        <img class="sp_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_mineyama_sp.png">
        </h2>
        <div class="hukuchiyama baces">
            <?php $cat = get_term_by( 'slug' , 'mineyama_staff' , 'staff-info' );  ?>
            <?php
                $args = array(
                         'posts_per_page' => 8,
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                         'post_type' => 'staff',
                         'staff-info' => 'mineyama_staff',  // 非推奨のため 'tax_query' を使ってください
                         'post_status' => 'publish'
                );
            ?>
            <?php $posts =  get_posts( $args );  ?>
            <?php foreach($posts as $post): $costomdate = get_custom_field_template($post->ID); ?>
            <section class="innerclass">
                <div class="thumbs">
                    <img src="<?php echo get_thumbs_url_pass($post->ID); ?>">
                </div>
                <div class="preflist">
                    <h2><?php echo get_the_title($post->ID); ?><span class="kana"><?php echo $costomdate['staff_kana']; ?></span></h2>
                    <p class="yakusyoku">
                        入社年：<?php echo $costomdate['staff_year']; ?>　
                        <?php if(!empty($costomdate['staff_p'])): ?>
                        役職：<?php echo $costomdate['staff_p']; ?>　
                        <?php endif; ?>
                        資格：<?php echo $costomdate['staff_shikaku']; ?>
                    </p>
                    <section class="situgioutou">
                        <h3>Q1.ここで働くキッカケは?</h3>
                        <p><?php echo nl2br($costomdate['staff_kikkake']); ?></p>
                    </section>
                    <section class="situgioutou">
                        <h3>Q2.趣味は何ですか?</h3>
                        <p><?php echo nl2br($costomdate['staff_syumi']); ?></p>
                    </section>
                    <section class="situgioutou">
                        <h3>Q3.休日はどのように過ごしていますか?</h3>
                        <p><?php echo nl2br($costomdate['staff_kyuzitu']); ?></p>
                    </section>
                    <section class="bottons">
                        <p><?php echo nl2br($costomdate['staff_etc']); ?></p>
                    </section>
                </div>
            </section>
            <?php endforeach; ?>
        </div><!--<div class="hukuchiyama">-->
        <ul class="bottonist">
            <li>
                <a href="<?php echo home_url('/recruit/'); ?>">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/botton_bosyoukou_off.png">
                </a>
            </li>
            <li>
                <a href="<?php echo home_url('/entry/'); ?>">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/botton_entry_off.png">
                </a>
            </li>
        </ul>
    </div>
</main>
<?php get_footer(); ?>