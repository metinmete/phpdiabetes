<?php
$dalTablelabtest = array();
$dalTablelabtest["id"] = array("type"=>3,"varname"=>"id");
$dalTablelabtest["user_id"] = array("type"=>3,"varname"=>"user_id");
$dalTablelabtest["date"] = array("type"=>7,"varname"=>"date");
$dalTablelabtest["type"] = array("type"=>200,"varname"=>"type");
$dalTablelabtest["result"] = array("type"=>200,"varname"=>"result");
$dalTablelabtest["unit"] = array("type"=>200,"varname"=>"unit");
$dalTablelabtest["range"] = array("type"=>200,"varname"=>"range");
$dalTablelabtest["comments"] = array("type"=>201,"varname"=>"comments");
	$dalTablelabtest["id"]["key"]=true;

$dal_info["diabetes_at_localhost__labtest"] = &$dalTablelabtest;
?>