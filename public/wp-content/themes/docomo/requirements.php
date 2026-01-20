<?php
/*
Template Name: 募集要項
*/
?>
<?php get_header(); ?>
<main>
    <div class="title">
        <div class="title_innner">
            <h2>Recruit</h2>
            <p>募集要項</p>
        </div>
    </div>
    <div class="pankuzu">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); $costomdate = get_custom_field_template($post->ID);  ?>
    <?php endwhile; // end of the loop. ?>
    <div class="conteners_contact_box">
        <h2>
            <img class="pc_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_hukuchiyama.png">
            <img class="sp_only" src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/title_requirements_hukuchiyama_sp.png">
        </h2>
        <p>
            【正社員募集】ドコモショップ福知山店　店舗スタッフ<br>
            ドコモ資格取得で知識を身につけ給料UP！休日や仕事帰りに皆で遊びに行く仲の良さも魅力の一つです!!<br>
            ★職場は20代～30代のスタッフさんが多数活躍中。<br>
            ★和気あいあいとした雰囲気ですよ！ <br>
            ★資格を取ると手当が支給されます。資格取得が楽しみですね♪
        </p>
        <table>
            <?php foreach($costomdate['hukuchiyama_komoku'] as $key=>$val): ?>
            <tr>
                <th><?php echo $val; ?></th>
                <td><?php echo nl2br($costomdate['hukuchiyama_pref'][$key]); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <ul class="bottonist">
            <li>
                <a href="<?php echo home_url('/staff/'); ?>">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/botton_staff_off.png">
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
        <p>
            【正社員募集】ドコモショップ峰山店　店舗スタッフ<br>
            ドコモ資格取得で知識を身につけ給料UP！休日や仕事帰りに皆で遊びに行く仲の良さも魅力の一つです!!<br>
            ★職場は20代～30代のスタッフさんが多数活躍中。<br>
            ★和気あいあいとした雰囲気ですよ！ <br>
            ★資格を取ると手当が支給されます。資格取得が楽しみですね♪
        </p>
        <table>
            <?php foreach($costomdate['mineyama_komoku'] as $key=>$val): ?>
            <tr>
                <th><?php echo $val; ?></th>
                <td><?php echo nl2br($costomdate['mineyama_pref'][$key]); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <ul class="bottonist">
            <li>
                <a href="<?php echo home_url('/staff/'); ?>">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/botton_staff_off.png">
                </a>
            </li>
            <li>
                <a href="<?php echo home_url('/entry/'); ?>">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/requirements/botton_entry_off.png">
                </a>
            </li>
        </ul>
    </div>
    <?php get_footer('inner'); ?>
</main>
<?php get_footer(); ?>