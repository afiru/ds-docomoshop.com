


<?php get_header(); ?>
<main>
    <div class="title">
        <div class="title_innner">
            <h2>Topics</h2>
            <p>トピックス</p>
        </div>
    </div>
    
    <div class="pankuzu">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); $costomdate = get_custom_field_template($post->ID); $cat = get_the_category();   ?>
    <div class="conteners_contact_box">
        <h2>
        <img class="pc_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_<?php echo $cat[0]->slug; ?>.png">
        <img class="sp_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_<?php echo $cat[0]->slug; ?>_sp.png">
        </h2>
        <div class="hukuchiyama baces">
            <p><?php echo get_the_date('Y.m.d',$post->ID); ?></p>
            <h2 class="single_title"><?php echo get_the_title($post->ID); ?></h2>
            <div class="contents">
                <?php the_content(); ?>
            </div>
        </div><!--<div class="hukuchiyama">-->
    </div>
    <div class="back_to_top">
        <a href="<?php echo home_url('/topics/'); ?><?php echo $cat[0]->slug; ?>/">一覧へ戻る</a>
    </div>
    <?php endwhile; // end of the loop. ?>
    <div class="pagers">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>
</main>
<?php get_footer(); ?>