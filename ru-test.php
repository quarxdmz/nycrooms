<?php
	include 'ru_class.php';
	$RU = new rentalsUnited();

	$properties = $RU->getOwnerProperties(429335);
	$arr[] = $properties;
function ru-test(){
	foreach ($arr[0]->Properties->Property as $value){
		$post_author 		= 2
		$post_date 			= $value->LastMod;
		$post_date_gmt		= $value->LastMod;
		$post_content 		= $value->Name;
		$post_title 		= $value->Name;
		$post_excerpt 		= '';
		$post_status 		= 'publish';		
		$comment_status 	= 'closed';
		$ping_status 		= 'closed';
		$post_password 		= '';
		$post_name 			= 'cordova-house';
		$to_ping			= ''; 
		$pinged				= '';	
		$post_modified 		= $value->LastMod;
		$post_modified_gmt	= $value->LastMod;
		$post_content_filtered = '';
		$post_parent 		= 0;
		$guid 				= 'http://localhost:8080/wordpress/?post_type=estate_property&#038;p=2004';
		$menu_order			= 0;
		$post_type 			= 'estate_property';
		$post_mime 			= '';
		$comment_count 		= 0;
	

		echo 'post_author :' 		.	$post_author . '\n';
		echo 'post_date :' 			.	$post_date . '\n';
		echo 'post_date_gmt :'		.	$post_date_gmt . '\n';
		echo 'post_content :' 		.	$post_content . '\n';
		echo 'post_title :'			.	$post_title . '\n';
		echo 'post_excerpt :'		.	$post_excerpt . '\n';
		echo 'post_status :'		.	$post_status . '\n';
		echo 'comment_status'		.	$comment_status . '\n';
		echo 'ping_status :'		.	$ping_status . '\n';
		echo 'post_password :'		.	$post_password . '\n';
		echo 'post_name :'			.	$post_name . '\n';
		echo 'to_ping :'			.	$to_ping . '\n';
		echo 'pinged :'				.	$pinged . '\n';
		echo 'post_modified :'		.	$post_modified . '\n';
		echo 'post_modified_gmt :'	.	$post_modified_gmt . '\n';
		echo 'post_content_filtered	:' .$post_content_filtered . '\n';
		echo 'post_parent :'		.	$post_parent . '\n';
		echo 'guid :'				.	$guid . '\n';
		echo 'menu_order :'			.	$menu_order . '\n';
		echo 'post_type :'			.	$post_type . '\n';
		echo 'post_mime :'			.	$post_mime . '\n';
		echo 'comment_count :'		.	$comment_count . '\n';
	}
}

/*
	INSERT INTO `wp_posts` 
		(	`post_author`, 
			`post_date`, 
			`post_date_gmt`, 
			`post_content`, 
			`post_title`, 
			`post_excerpt`, 
			`post_status`, 
			`comment_status`, 
			`ping_status`, 
			`post_password`, 
			`post_name`, 
			`to_ping`, 
			`pinged`, 
			`post_modified`, 
			`post_modified_gmt`, 
			`post_content_filtered`, 
			`post_parent`, 
			`guid`, 
			`menu_order`, 
			`post_type`, 
			`post_mime_type`, 
			`comment_count`) 
	VALUES
		(
			$post_author . 				", " . 
			$post_date . 				", " .	//	'2017-11-29 10:12:58'
			$post_date_gmt . 			", " .	//	'2017-11-29 10:12:58'
			$post_content . 			", " .  //	'Cordova House - Description / Body'
			$post_title .				", " . 	//	'Cordova House'
			$post_excerpt .				", " . 	//	''
			$post_status .				", " . 	//	'publish'
			$comment_status .			", " . 	//	'closed'
			$ping_status .				", " . 	//	'closed'
			$post_password .			", " . 	//	''
			$post_name . 				", " .	//	'cordova-house' 
			$to_ping .					", " .	// 
			$pinged . 					", " .	//
			$post_modified .			", " . 	//	'2017-11-29 13:22:53' 
			$post_modified_gmt .		", " .	//	'2017-11-29 05:22:53', 
			$post_content_filtered .	", " .	//	'' 
			$post_parent .				", " .	//	0 : if it is a parent item or $ID
			$guid . 					", " .	//	p = $ID  --- 'http://localhost:8080/wordpress/?post_type=estate_property&#038;p=2004', 
			$menu_order.				", " .	//	0
			$post_type . 				", " . 	//	'estate_property', 
			$post_mime_type .			", " . 	//	''
			$comment_count . 			", " .	// 0
		);
*/
?>