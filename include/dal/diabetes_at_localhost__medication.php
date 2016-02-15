<?php
$dalTablemedication = array();
$dalTablemedication["id"] = array("type"=>3,"varname"=>"id");
$dalTablemedication["user_id"] = array("type"=>3,"varname"=>"user_id");
$dalTablemedication["date"] = array("type"=>7,"varname"=>"date");
$dalTablemedication["time"] = array("type"=>134,"varname"=>"time");
$dalTablemedication["time_period"] = array("type"=>200,"varname"=>"time_period");
$dalTablemedication["medication"] = array("type"=>200,"varname"=>"medication");
$dalTablemedication["dose"] = array("type"=>200,"varname"=>"dose");
$dalTablemedication["no_pills"] = array("type"=>3,"varname"=>"no_pills");
$dalTablemedication["comments"] = array("type"=>200,"varname"=>"comments");
	$dalTablemedication["id"]["key"]=true;

$dal_info["diabetes_at_localhost__medication"] = &$dalTablemedication;
?>