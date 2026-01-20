<?php
    /*
    Plugin Name: スマホの出しわけを行うプラグイン
    Plugin URI: なし
    Description: スマホの出しわけを行うプラグインis_mobile_cheange()とif文を使えば、スマホとの出しわけをすることができます。
    Version: 1.0
    Author: 進撃のafiruworks
    Author URI:プラグイン作者の URI
    License: afiruworks
    */
    /*  Copyright 2016 afiruworks (email : afiru.pain@gmail.com)

        This program is free software; you can redistribute it and/or modify
        it under the terms of the GNU General Public License, version 2, as
         published by the Free Software Foundation.

        This program is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.

        You should have received a copy of the GNU General Public License
        along with this program; if not, write to the Free Software
        Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    */
?>
<?php

//スマホ表示分岐
function is_mobile_cheange(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser

    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
?>