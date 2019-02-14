<?php
	add_theme_support('post-thumbnails');
	//
	function add_webinfo_fields() {
		add_meta_box( 'ewbinfo_setting', 'ライブ情報', 'insert_webinfo_fields', 'post', 'normal');
	}
	add_action('admin_menu', 'add_webinfo_fields');
	//
	function insert_webinfo_fields() {
		global $post;
		echo '日時 <input type="text" name="webinfo_date" value="'.get_post_meta($post->ID, 'webinfo_date', true).'" size="50" />　<br>';
		echo '場所： <input type="text" name="webinfo_place" value="'.get_post_meta($post->ID, 'webinfo_place', true).'" size="50" /><br>';
		echo 'ライブ名 <input type="text" name="webinfo_name" value="'.get_post_meta($post->ID, 'webinfo_name', true).'" size="50" /><br>';
	}
	//
	function save_webinfo_fields( $post_id ) {
		if(!empty($_POST['webinfo_date'])){ 
			update_post_meta($post_id, 'webinfo_date', $_POST['webinfo_date'] );
		}else{
			delete_post_meta($post_id, 'webinfo_date');
		}
		if(!empty($_POST['webinfo_place'])){ 
			update_post_meta($post_id, 'webinfo_place', $_POST['webinfo_place'] );
		}else{
			delete_post_meta($post_id, 'webinfo_place');
		}
		if(!empty($_POST['webinfo_name'])){
			update_post_meta($post_id, 'webinfo_name', $_POST['webinfo_name'] );
		}else{
			delete_post_meta($post_id, 'webinfo_name');
		}
	}
	add_action('save_post', 'save_webinfo_fields');
?>