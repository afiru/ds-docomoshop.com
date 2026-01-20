<?php
/*
Template Name: プライバシーポリシー
*/
?>
<?php get_header(); ?>
<main>
    <div class="title">
        <div class="title_innner">
            <h2>Privacy Policy</h2>
            <p>個人情報保護方針</p>
        </div>
    </div>
    <div class="pankuzu">
        <?php if(function_exists('bcn_display')) { bcn_display(); }?>
    </div>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); $costomdate = get_custom_field_template($post->ID);  ?>
    <?php endwhile; // end of the loop. ?>
    <div class="conteners_contact_box">
        <p>
            ドコモショップ福知山店・峰山店（以下、「当サイト」）は、各種サービスのご提供にあたり、お客様の個人情報をお預かりしております。<br>
            当サイトは、個人情報に関する法令を遵守し、個人情報の適切な取り扱いを実現致します。
        </p>
        <section class="preflist">
            <div class="tables">1.</div>
            <div class="prefs">
                <h2>個人情報の取得について </h2>
                <p>当サイトは、偽りその他不正の手段によらず適正に個人情報を取得致します。</p>
            </div>
        </section>
        <section class="preflist">
            <div class="tables">2.</div>
            <div class="prefs">
                <h2>個人情報の利用について</h2>
                <p>
                    当サイトは、個人情報を以下の利用目的の達成に必要な範囲内で、利用致します。 <br>
                    以下に定めのない目的で個人情報を利用する場合、あらかじめご本人の同意を得た上で行ないます。 <br>
                    （１）　お問い合せに対する回答
                </p>
            </div>
        </section>
        <section class="preflist">
            <div class="tables">3.</div>
            <div class="prefs">
                <h2>個人情報の安全管理について </h2>
                <p>
                    当サイトは、取り扱う個人情報の漏洩、滅失またはき損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講じます。
                </p>
            </div>
        </section>
        <section class="preflist">
            <div class="tables">4.</div>
            <div class="prefs">
                <h2>個人情報の委託について </h2>
                <p>
                    当サイトは、個人情報の取り扱いの全部または一部を第三者に委託する場合は、当該第三者について厳正な調査を行い、取り扱いを委託された個人情報の安全管理が図られるよう当該第三者に対する必要かつ適切な監督を行います。
                </p>
            </div>
        </section>
        <section class="preflist">
            <div class="tables">5.</div>
            <div class="prefs">
                <h2>個人情報の第三者提供について</h2>
                <p>
                    当サイトは、個人情報保護法等の法令に定めのある場合を除き、個人情報をあらかじめご本人の同意を得ることなく、第三者に提供致しません。
                </p>
            </div>
        </section>
        <section class="preflist">
            <div class="tables">6.</div>
            <div class="prefs">
                <h2>個人情報の開示・訂正等について </h2>
                <p>
                    当サイトは、ご本人から自己の個人情報についての開示の請求がある場合、速やかに開示を致します。 <br>
                    その際、ご本人であることが確認できない場合には、開示に応じません。 <br>
                    個人情報の内容に誤りがあり、ご本人から訂正・追加・削除の請求がある場合、調査の上、速やかにこれらの請求に対応致します。 <br>
                    その際、ご本人であることが確認できない場合には、これらの請求に応じません。<br>
                    当サイトの個人情報の取り扱いにつきまして、上記の請求・お問い合わせ等ございましたら、下記までご連絡くださいますようお願い申し上げます。 <br>
                    【連絡先】<br>
                    ・福知山店 〒620-0055　京都府福知山市字篠尾新町1-74-1　TEL： 0120-077-347 <br>
                    ・峰山店 〒627-0005　京都府京丹後市峰山町新町荒木ノ1740　TEL： 0120-077-248
                </p>
            </div>
        </section>
        <section class="preflist">
            <div class="tables">7.</div>
            <div class="prefs">
                <h2>組織・体制</h2>
                <p>
                    当サイトは、 責任者名を個人情報管理責任者とし、個人情報の適正な管理及び継続的な改善を実施致します。
                </p>
            </div>
        </section>
        <section class="preflist">
            <div class="tables">8.</div>
            <div class="prefs">
                <h2>本方針の変更</h2>
                <p>
                    本方針の内容は変更されることがあります。変更後の本方針については、当サイトが別途定める場合を除いて、当サイトに掲載した時から効力を生じるものとします。
                </p>
            </div>
        </section>
    </div>
    <?php get_footer('inner'); ?>
</main>
<?php get_footer(); ?>