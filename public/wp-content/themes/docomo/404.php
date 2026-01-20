<?php get_header(); ?>
<main>
    <div class="title">
        <div class="title_innner">
            <h2>404</h2>
            <p>お探しのページはないようです。</p>
        </div>
    </div>
    
    <div class="pankuzu">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
    <div class="conteners_contact_box">
        <p>お探しのページを検索いたしましたが、ございませんでした。</p>
        
        <div class="back_to_top">
            <a href="<?php echo home_url('/'); ?>">TOPページへ戻る</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>