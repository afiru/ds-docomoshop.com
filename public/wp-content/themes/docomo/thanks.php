<?php
/*
Template Name: お問合せ(送信完了)
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
    <div class="conteners_contact_box">
        <p>
            お問い合せ頂きまして、誠にありがとうございました。<br>
            お問い合せ内容を担当者に送信致しました。
        </p>
        <p>
            お問い合せ内容をご登録いただいたメールアドレスに自動返信致しましたので、ご確認下さい。<br>
            担当者より改めてご連絡をさせていただきますので、今しばらくお待ちください。<br>
            尚、ご返信のメールが2日以上経っても届かない場合は、メールが弊社に届いていない場合がございますので再度ご連絡頂けますよう、宜しくお願い申し上げます。
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

    <?php get_footer('inner'); ?>
</main>
<?php get_footer(); ?>