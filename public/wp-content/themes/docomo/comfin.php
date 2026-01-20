<?php
/*
Template Name: お問合せ(確認)
*/
?>
<?php get_header(); ?>
<main>
    <div class="title">
        <div class="title_innner">
            <h2>Form</h2>
            <p>応募フォーム</p>
        </div>
    </div>
    <div class="pankuzu">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
    <div class="otoiawase_pref">
        <p>
            応募の際は以下の必須項目へご入力いただき、「個人情報取り扱い」にご同意の上、「確認画面へ進む」ボタンを押して下さい。
            応募に対するご回答はメールもしくはお電話でご連絡いたします。
        </p>
    </div>
    <div class="max_box">
        <p class="">
            <span class="info">お電話でも受付致します。</span>
            <span class="tel">
                <?php if(is_mobile_cheange()): ?>
                <a href="tel:080-1503-1665">080-1503-1665</a>
                <?php else: ?>
                080-1503-1665
                <?php endif; ?>                
            </span>
            <span class="info2">採用担当　本田</span>
        </p>
    </div>
    <div class="conteners_contact_box">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); $costomdate = get_custom_field_template($post->ID);  ?>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
    </div>
    <?php get_footer('inner'); ?>
</main>
<?php get_footer(); ?>