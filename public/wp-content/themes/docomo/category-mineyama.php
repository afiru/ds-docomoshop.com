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
    <div class="conteners_contact_box">
        <h2>
        <img class="pc_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_mineyama.png">
        <img class="sp_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_mineyama_sp.png">
        </h2>
        <div class="hukuchiyama baces">
            <ul>
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); $costomdate = get_custom_field_template($post->ID);  ?>
                    <li class="mintyou">
                        <a href="<?php echo get_the_permalink($post->ID); ?>">
                            <p>
                                <span class="tenponame">峰山店</span>
                                <?php echo get_the_date('Y.m.d',$post->ID); ?>
                            </p>
                            <p>
                                <?php echo get_the_title($post->ID); ?>
                            </p>
                        </a>
                    </li>
                <?php endwhile; // end of the loop. ?>
            </ul>
        </div><!--<div class="hukuchiyama">-->
    </div>
    <div class="pagers">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>
</main>
<?php get_footer(); ?>