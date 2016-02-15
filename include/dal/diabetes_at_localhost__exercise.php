<?php
$dalTableexercise = array();
$dalTableexercise["id"] = array("type"=>3,"varname"=>"id");
$dalTableexercise["user_id"] = array("type"=>3,"varname"=>"user_id");
$dalTableexercise["date"] = array("type"=>7,"varname"=>"date");
$dalTableexercise["time"] = array("type"=>134,"varname"=>"time");
$dalTableexercise["time_period"] = array("type"=>200,"varname"=>"time_period");
$dalTableexercise["type"] = array("type"=>200,"varname"=>"type");
$dalTableexercise["duration"] = array("type"=>200,"varname"=>"duration");
$dalTableexercise["intensity"] = array("type"=>200,"varname"=>"intensity");
$dalTableexercise["comment"] = array("type"=>201,"varname"=>"comment");
	$dalTableexercise["id"]["key"]=true;

$dal_info["diabetes_at_localhost__exercise"] = &$dalTableexercise;
?>