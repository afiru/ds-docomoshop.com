<?php
/*
Template Name: アクセス
*/
?>
<?php get_header(); ?>
<script>
$('.ggmap').click(function () {
$('.ggmap iframe').css("pointer-events", "auto");
});
</script>
<main>
    <div class="title">
        <div class="title_innner">
            <h2>Access</h2>
            <p>アクセス</p>
        </div>
    </div>
    <div class="pankuzu">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); $costomdate = get_custom_field_template($post->ID);  ?>
    <?php endwhile; // end of the loop. ?>
    <div class="conteners_contact_box">
        <div class="table_box">
            <div class="access_box address_pc">
                <h2><img class="fukuchiyama_title" src="<?php echo get_bloginfo('template_url'); ?>/img/access/fukuchiyama_title.png" alt="" /></h2>
                <ul>
                    <li><img class="fukuchiyama_shop_01" src="<?php echo get_bloginfo('template_url'); ?>/img/access/fukuchiyama_shop_01.png" alt="" /></li>
                    <li><img class="fukuchiyama_shop_02" src="<?php echo get_bloginfo('template_url'); ?>/img/access/fukuchiyama_shop_02.png" alt="" /></li>
                </ul>
                <p class="postal">〒620-0055</p>
                <p class="address">京都府福知山市字篠尾新町1-74-1</p>
                <p class="telephon">TEL：0120-077-347</p>
            </div>
            <div class="map">
                
                <div class="ggmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.2934867401136!2d135.1108810152484!3d35.29868838028535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600002f56b9dd2d3%3A0x49f6054615efd5f0!2z44CSNjIwLTAwNTUg5Lqs6YO95bqc56aP55-l5bGx5biC56-g5bC-5paw55S677yR5LiB55uu77yX77yU4oiS77yR!5e0!3m2!1sja!2sjp!4v1470793477721" width="600" height="450" frameborder="0" style="border:0;"　 allowfullscreen></iframe></div>
            </div>
        </div>
        <div class="table_box">
            <div class="access_box sp_only address_sp">
                <h2><img class="mineyama_title" src="<?php echo get_bloginfo('template_url'); ?>/img/access/mineyama_title.png" alt="" /></h2>
                <ul>
                    <li><img class="mineyama_shop_01" src="<?php echo get_bloginfo('template_url'); ?>/img/access/mineyama_shop_01.png" alt="" /></li>
                    <li><img class="mineyama_shop_02" src="<?php echo get_bloginfo('template_url'); ?>/img/access/mineyama_shop_02.png" alt="" /></li>
                </ul>
                <p class="postal">〒627-0005</p>
                <p class="address">京都府京丹後市峰山町新町荒木ノ1740</p>
                <p class="telephon">TEL：0120-077-248</p>
            </div>
            <div class="map">
                <div class="ggmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.8024638563606!2d135.07960181525678!3d35.60793898021137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5fffbda336e3c59b%3A0x3299cebedc57e915!2z44OJ44Kz44Oi44K344On44OD44OX5bOw5bGx5bqX!5e0!3m2!1sja!2sjp!4v1470793533742" width="600" height="450" frameborder="0" style="border:0;"　 allowfullscreen></iframe></div>
            </div>
            <div class="access_box pc_only address_pc">
                <h2><img class="mineyama_title" src="<?php echo get_bloginfo('template_url'); ?>/img/access/mineyama_title.png" alt="" /></h2>
                <ul>
                    <li><img class="mineyama_shop_01" src="<?php echo get_bloginfo('template_url'); ?>/img/access/mineyama_shop_01.png" alt="" /></li>
                    <li><img class="mineyama_shop_02" src="<?php echo get_bloginfo('template_url'); ?>/img/access/mineyama_shop_02.png" alt="" /></li>
                </ul>
                <p class="postal">〒627-0005</p>
                <p class="address">京都府京丹後市峰山町新町荒木ノ1740</p>
                <p class="telephon">TEL：0120-077-248</p>
            </div>
        </div>
    </div>
    <?php get_footer('inner'); ?>
</main>
<?php get_footer(); ?>