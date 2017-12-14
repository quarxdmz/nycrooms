<?php
include 'ru_class.php';
$RU = new rentalsUnited();
global $wpdb;

//echo "Property: 5624";
//var_dump($RU->getProperty(1617849));

$properties = $RU->getOwnerProperties(429335);
//var_dump($properties);
$arr[] = $properties;
//var_dump($arr[0]->Properties);
//echo "array count!: " . count($arr[0]->Properties->Property) . "\n";
//echo $arr[0]->Properties->Property[0]->Name . "\n";
//echo $arr[0]->Properties->Property[1]->Name . "\n";
foreach ($arr[0]->Properties->Property as $value) {
	$id = $value->ID;
	$Name = $value->Name;
	$OwnerID = $value->OwnerID;
	$DetailedLocationID = $value->DetailedLocationID;
	$LastMod = $value->LastMod;
	$DateCreated = date("Y-m-d H:i:s");
	$property = $RU->getProperty($value->ID);

	$post_author = 2;
	$post_date = (string) $value->LastMod;
	$post_date_gmt = (string) $value->LastMod;
	$post_content = (string) $value->Name;
	$post_title = (string) $value->Name;
	$post_excerpt = ' ';
	$post_status = 'publish';
	$comment_status = 'closed';
	$ping_status = 'closed';
	$post_password = '';
	$post_name = (string) ru_clean_url($value->Name);
	$to_ping = ' ';
	$pinged = ' ';
	$post_modified = (string) $value->LastMod;
	$post_modified_gmt = (string) $value->LastMod;
	$post_content_filtered = ' ';
	$post_parent = 0;
	$guid = 'http://localhost:8080/wordpress/?post_type=estate_property&#038;p=' . $id;
	$menu_order = 0;
	$post_type = 'estate_property';
	$post_mime_type = ' ';
	$comment_count = 0;

/*
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
echo 'post_mime_type :'		.	$post_mime_type . '\n';
echo 'comment_count :'		.	$comment_count . '\n';
 */

	if (ru_create($id, $Name, $OwnerID, $DetailedLocationID, $LastMod, $DateCreated)) {
		ru_post($post_author, $post_date, $post_date_gmt, $post_content, $post_title, $post_excerpt, $post_status, $comment_status, $ping_status, $post_password, $post_name, $to_ping, $pinged, $post_modified, $post_modified_gmt, $post_content_filtered, $post_parent, $guid, $menu_order, $post_type, $post_mime_type, $comment_count);
	}
	$last_id = $wpdb->get_results("SELECT max(id) as max_id FROM `wp_posts`");
	//echo $last_id[0]->max_id;
	ru_create_property($last_id[0]->max_id, '_wp_attached_file', '2017/12/mde1-1.jpg');
	ru_create_property($last_id[0]->max_id, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1170;s:6:"height";i:900;s:4:"file";s:18:"2017/12/mde1-1.jpg";s:5:"sizes";a:14:{s:9:"thumbnail";a:4:{s:4:"file";s:18:"mde1-1-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:18:"mde1-1-300x231.jpg";s:5:"width";i:300;s:6:"height";i:231;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:18:"mde1-1-768x591.jpg";s:5:"width";i:768;s:6:"height";i:591;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:19:"mde1-1-1024x788.jpg";s:5:"width";i:1024;s:6:"height";i:788;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:18:"mde1-1-250x220.jpg";s:5:"width";i:250;s:6:"height";i:220;s:9:"mime-type";s:10:"image/jpeg";}s:18:"wpestate_blog_unit";a:4:{s:4:"file";s:18:"mde1-1-400x242.jpg";s:5:"width";i:400;s:6:"height";i:242;s:9:"mime-type";s:10:"image/jpeg";}s:19:"wpestate_blog_unit2";a:4:{s:4:"file";s:18:"mde1-1-805x453.jpg";s:5:"width";i:805;s:6:"height";i:453;s:9:"mime-type";s:10:"image/jpeg";}s:21:"wpestate_slider_thumb";a:4:{s:4:"file";s:17:"mde1-1-143x83.jpg";s:5:"width";i:143;s:6:"height";i:83;s:9:"mime-type";s:10:"image/jpeg";}s:26:"wpestate_property_listings";a:4:{s:4:"file";s:18:"mde1-1-400x314.jpg";s:5:"width";i:400;s:6:"height";i:314;s:9:"mime-type";s:10:"image/jpeg";}s:26:"wpestate_property_featured";a:4:{s:4:"file";s:19:"mde1-1-1170x900.jpg";s:5:"width";i:1170;s:6:"height";i:900;s:9:"mime-type";s:10:"image/jpeg";}s:31:"wpestate_property_listings_page";a:4:{s:4:"file";s:18:"mde1-1-240x160.jpg";s:5:"width";i:240;s:6:"height";i:160;s:9:"mime-type";s:10:"image/jpeg";}s:24:"wpestate_property_places";a:4:{s:4:"file";s:18:"mde1-1-600x456.jpg";s:5:"width";i:600;s:6:"height";i:456;s:9:"mime-type";s:10:"image/jpeg";}s:26:"wpestate_property_full_map";a:4:{s:4:"file";s:19:"mde1-1-1170x790.jpg";s:5:"width";i:1170;s:6:"height";i:790;s:9:"mime-type";s:10:"image/jpeg";}s:19:"wpestate_user_thumb";a:4:{s:4:"file";s:16:"mde1-1-60x60.jpg";s:5:"width";i:60;s:6:"height";i:60;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}');

	//ru_create_property($id)
}

function ru_clean_url($property_name) {
	$p_name = explode(" ", $property_name);
	$p_name = str_replace(":", '', $p_name);
	return implode("-", $p_name);
}

function ru_post($post_author, $post_date, $post_date_gmt, $post_content, $post_title, $post_excerpt, $post_status, $comment_status, $ping_status, $post_password, $post_name, $to_ping, $pinged, $post_modified, $post_modified_gmt, $post_content_filtered, $post_parent, $guid, $menu_order, $post_type, $post_mime_type, $comment_count) {
	global $wpdb;
	$table_name = $wpdb->prefix . "posts";
	$wpdb->insert(
		$table_name,
		array('post_author' => $post_author, 'post_date' => $post_date, 'post_date_gmt' => $post_date_gmt, 'post_content' => $post_content, 'post_title' => $post_title, 'post_excerpt' => $post_excerpt, 'post_status' => $post_status, 'comment_status' => $comment_status, 'ping_status' => $ping_status, 'post_password' => $post_password, 'post_name' => $post_name, 'to_ping' => $to_ping, 'pinged' => $pinged, 'post_modified' => $post_modified, 'post_modified_gmt' => $post_modified_gmt, 'post_content_filtered' => $post_content_filtered, 'post_parent' => $post_parent, 'guid' => $guid, 'menu_order' => $menu_order, 'post_type' => $post_type, 'post_mime_type' => $post_mime_type, 'comment_count' => $comment_count),
		array()
	);
	//var_dump(htmlspecialchars( $wpdb->last_query, ENT_QUOTES )) ;
}

function ru_create($id, $Name, $OwnerID, $DetailedLocationID, $LastMod, $DateCreated) {
	$id = htmlentities($id);
	$name = htmlentities($Name);
	$OwnerID = htmlentities($OwnerID);
	$DetailedLocationID = htmlentities($DetailedLocationID);
	$LastMod = htmlentities($Lastmod);

	global $wpdb;
	$table_name = $wpdb->prefix . "ruproperties";

	$rows = $wpdb->get_results("SELECT id from $table_name WHERE id = '" . $id . "'");
	if ($rows == false) {
		$wpdb->insert(
			$table_name, //table
			array('id' => $id, 'name' => $name, 'OwnerID' => $OwnerID, 'DetailedLocationID' => $DetailedLocationID, 'LastMod' => $LastMod, 'DateCreated' => $DateCreated), //data
			array('%s', '%s', '%s', '%s', '%s', '%s') //data format
		);
		return true;
	} else {
		return false;
	}
}

function ru_create_property($id, $meta_key, $meta_value) {
	//creates data in post meta
	global $wpdb;
	$table_name = $wpdb->prefix . "postmeta";
	$wpdb->insert(
		$table_name, //table
		array('post_id' => $id, 'meta_key' => $meta_key, 'meta_value' => $meta_value),
		array('%s', '%s', '%s') //data format
	);
}

/*
INSERT INTO `wp_postmeta` (`post_id`, `meta_key`, `meta_value`) VALUES
(2414, '_wp_attached_file', '2017/12/mde1-1.jpg'),
(2414, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1170;s:6:"height";i:900;s:4:"file";s:18:"2017/12/mde1-1.jpg";s:5:"sizes";a:14:{s:9:"thumbnail";a:4:{s:4:"file";s:18:"mde1-1-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:18:"mde1-1-300x231.jpg";s:5:"width";i:300;s:6:"height";i:231;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:18:"mde1-1-768x591.jpg";s:5:"width";i:768;s:6:"height";i:591;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:19:"mde1-1-1024x788.jpg";s:5:"width";i:1024;s:6:"height";i:788;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:18:"mde1-1-250x220.jpg";s:5:"width";i:250;s:6:"height";i:220;s:9:"mime-type";s:10:"image/jpeg";}s:18:"wpestate_blog_unit";a:4:{s:4:"file";s:18:"mde1-1-400x242.jpg";s:5:"width";i:400;s:6:"height";i:242;s:9:"mime-type";s:10:"image/jpeg";}s:19:"wpestate_blog_unit2";a:4:{s:4:"file";s:18:"mde1-1-805x453.jpg";s:5:"width";i:805;s:6:"height";i:453;s:9:"mime-type";s:10:"image/jpeg";}s:21:"wpestate_slider_thumb";a:4:{s:4:"file";s:17:"mde1-1-143x83.jpg";s:5:"width";i:143;s:6:"height";i:83;s:9:"mime-type";s:10:"image/jpeg";}s:26:"wpestate_property_listings";a:4:{s:4:"file";s:18:"mde1-1-400x314.jpg";s:5:"width";i:400;s:6:"height";i:314;s:9:"mime-type";s:10:"image/jpeg";}s:26:"wpestate_property_featured";a:4:{s:4:"file";s:19:"mde1-1-1170x900.jpg";s:5:"width";i:1170;s:6:"height";i:900;s:9:"mime-type";s:10:"image/jpeg";}s:31:"wpestate_property_listings_page";a:4:{s:4:"file";s:18:"mde1-1-240x160.jpg";s:5:"width";i:240;s:6:"height";i:160;s:9:"mime-type";s:10:"image/jpeg";}s:24:"wpestate_property_places";a:4:{s:4:"file";s:18:"mde1-1-600x456.jpg";s:5:"width";i:600;s:6:"height";i:456;s:9:"mime-type";s:10:"image/jpeg";}s:26:"wpestate_property_full_map";a:4:{s:4:"file";s:19:"mde1-1-1170x790.jpg";s:5:"width";i:1170;s:6:"height";i:790;s:9:"mime-type";s:10:"image/jpeg";}s:19:"wpestate_user_thumb";a:4:{s:4:"file";s:16:"mde1-1-60x60.jpg";s:5:"width";i:60;s:6:"height";i:60;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}')
 */
/*
these are the fields:
IsActive : String
IsArchived : String
CleaningPrice : String
StandardGuests : String
CanSleepMax : String
PropertyTypeID : String
ObjectTypeID : String
Street : String
ZipCode : String
Coordinates->Latitude : String
Coordinates->Longitude : String
ArrivalInstructions->Landlord : String
ArrivalInstructions->Email : String
ArrivalInstructions->Phone : String
ArrivalInstructions->DaysBeforeArrival : String
ArrivalInstructions->PickupService : String
CheckInOut->CheckInFrom : String
CheckInOut->CheckOutUntil : String
Deposit->SecurityDeposit : String
Deposit->AdditionalFees : String
Amenities->Amenity : array
Images->Image : array
CancellationPolicies->CancellationPolicy : array
---------------
table updates on wp_postmeta
meta_key : meta_value
original_author				: 	1
_vc_post_settings			:	a:1:{s:10:"vc_grid_id";a:0:{}}
_edit_lock					:	1511922549:1
_edit_last					:	1
property_address			:	Lapulapu House - address
property_country			:
property_state				:
property_zip				:
property_country			:	United States
property_status				:	normal
prop_featured				:	0
property_price 				:	12345
property_price_before_label		:
property_price_after_label		:
property_taxes		:
security_deposit	:
early_bird_percent	:
early_bird_days		:
cleaning_fee 				: 6789
cleaning_fee_per_day		:	0
city_fee 					:	0
city_fee_per_day			:	0
city_fee_percent			:	0
price_per_weekeend			:	0
min_days_booking			:	0
property_price_per_week		:	0
property_price_per_month	:	0
extra_price_per_guest	:
overload_guest				:	0
checkin_change_over 		:	0
checkin_checkout_change_over :	0
property_size			:	0
property_rooms 			:	0
property_bedrooms		:
property_bathrooms		:
guest_no 				:
embed_video_type		:	vimeo
embed_video_id			:
check-in-hour			:
check-out-hour			:
late-check-in			:
optional-services		:
outdoor-facilities		:
extra-people			:
cancellation 			:
property_latitude 		:	0
property_longitude 		:	0
google_camera_angle 	:	0
page_custom_zoom 		:	16
kitchen 				:	1
internet 				:
smoking_allowed			:
tv 						:	1
wheelchair_accessible 	:
elevator_in_building 	:
indoor_fireplace 		:	1
heating 				:
essentials				:
doorman 				:	1
pool 					:
washer
hot_tub
dryer
gym
free_parking_on_premises
wireless_internet
pets_allowed
family-kid_friendly
suitable_for_events
non_smoking
phone_booth-lines
projectors
bar_-_restaurant
air_conditioner
scanner_-_printer
fax
breakfast_included
property_agent 				:	1
sidebar_option 	right
sidebar_select 	primary-widget-area
slide_template 	default
adv_filter_search_action
adv_filter_search_category
current_adv_filter_city
current_adv_filter_area
_thumbnail_id				: 1030 {this is the thumbnail image in the page}
property_admin_area 	:	New York
pay_status 	:	not paid

 */
?>


