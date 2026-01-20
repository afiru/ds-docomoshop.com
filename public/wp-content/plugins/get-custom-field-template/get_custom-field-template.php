<?php
    /*
    Plugin Name: get_custom-field-template
    Plugin URI: なし
    Description: カスタムフィールドテンプレートの値をずれなく取得することができるプラグイン
    Version: 1.0
    Author: 進撃のafiruworks
    Author URI:http://153.126.195.134/afiruworks/
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
function get_custom_field_template($postid, $keys = array(), $matrix = false){
	global $wpdb;
	$query = "SELECT * FROM $wpdb->postmeta WHERE post_id = ". $postid ." ORDER BY meta_id ASC";
	$queryresults = $wpdb->get_results($query, ARRAY_A);
	foreach( $queryresults as $queryresult ){
		$keyname = trim($queryresult['meta_key']);
		if ( $keyname{0} != '_' ) {
			$rows = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->postmeta WHERE post_id = '" . $postid . "' AND meta_key = '" . $queryresult['meta_key'] . "' ORDER BY meta_id ASC");
			if($rows==1 && !$matrix) {
				$results[$queryresult['meta_key']] = $queryresult['meta_value'];
			} else {
				$results[$queryresult['meta_key']][] = $queryresult['meta_value'];
			}
		}
	}
	if(empty($keys) || empty($results)){
		$customs = $results;
	} else {
		foreach($keys as $key){
			if(array_key_exists($key, $results)) $customs[$key] = $results[$key];
		}
	}
	return $customs;
}



//カスタムフィールド画像のurlを出力
function get_thumbs_url($id) {
    $eye_img = wp_get_attachment_image_src( $id,full);
    echo $eye_img[0];
}
//カスタムフィールド画像のurlを出力
function get_thumbs_mini_url($id) {
    $eye_img = wp_get_attachment_image_src( $id,thumbnail);
    echo $eye_img[0];
}
//サムネイル画像のurlを取得
function get_thumbs_url_pass($id) {
    $thumbnail_id = get_post_thumbnail_id($id); 
    $eye_img = wp_get_attachment_image_src( $thumbnail_id,full);
    return $eye_img[0];
}
//サムネイル画像のurlサムネイルurlを取得
function get_thumbs_mini_url_pass($id) {
    $thumbnail_id = get_post_thumbnail_id($id); 
    $eye_img = wp_get_attachment_image_src( $thumbnail_id,thumbnail);
    echo $eye_img[0];
}
?>