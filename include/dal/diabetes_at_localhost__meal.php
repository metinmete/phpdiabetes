<?php
$dalTablemeal = array();
$dalTablemeal["id"] = array("type"=>3,"varname"=>"id");
$dalTablemeal["user_id"] = array("type"=>3,"varname"=>"user_id");
$dalTablemeal["date"] = array("type"=>7,"varname"=>"date");
$dalTablemeal["time"] = array("type"=>134,"varname"=>"time");
$dalTablemeal["meal"] = array("type"=>200,"varname"=>"meal");
$dalTablemeal["food_item"] = array("type"=>200,"varname"=>"food_item");
$dalTablemeal["svgs"] = array("type"=>14,"varname"=>"svgs");
$dalTablemeal["carbs"] = array("type"=>3,"varname"=>"carbs");
$dalTablemeal["totalcarbs"] = array("type"=>5,"varname"=>"totalcarbs");
$dalTablemeal["favorite"] = array("type"=>16,"varname"=>"favorite");
$dalTablemeal["comment"] = array("type"=>201,"varname"=>"comment");
	$dalTablemeal["id"]["key"]=true;

$dal_info["diabetes_at_localhost__meal"] = &$dalTablemeal;
?>