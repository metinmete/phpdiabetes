<?php
$dalTablefood_items = array();
$dalTablefood_items["id"] = array("type"=>3,"varname"=>"id");
$dalTablefood_items["item"] = array("type"=>200,"varname"=>"item");
$dalTablefood_items["serve_size"] = array("type"=>200,"varname"=>"serve_size");
$dalTablefood_items["carbs"] = array("type"=>3,"varname"=>"carbs");
$dalTablefood_items["hide"] = array("type"=>16,"varname"=>"hide");
$dalTablefood_items["fav"] = array("type"=>16,"varname"=>"fav");
	$dalTablefood_items["id"]["key"]=true;

$dal_info["diabetes_at_localhost__food_items"] = &$dalTablefood_items;
?>