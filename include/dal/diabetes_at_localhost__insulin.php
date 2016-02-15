<?php
$dalTableinsulin = array();
$dalTableinsulin["id"] = array("type"=>3,"varname"=>"id");
$dalTableinsulin["date"] = array("type"=>7,"varname"=>"date");
$dalTableinsulin["time"] = array("type"=>134,"varname"=>"time");
$dalTableinsulin["time_period"] = array("type"=>200,"varname"=>"time_period");
$dalTableinsulin["type"] = array("type"=>200,"varname"=>"type");
$dalTableinsulin["doseage"] = array("type"=>3,"varname"=>"doseage");
$dalTableinsulin["inject_type"] = array("type"=>200,"varname"=>"inject_type");
$dalTableinsulin["comment"] = array("type"=>201,"varname"=>"comment");
$dalTableinsulin["user_id"] = array("type"=>3,"varname"=>"user_id");
	$dalTableinsulin["id"]["key"]=true;

$dal_info["diabetes_at_localhost__insulin"] = &$dalTableinsulin;
?>