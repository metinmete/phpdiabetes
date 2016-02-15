<?php
$dalTablereadings = array();
$dalTablereadings["id"] = array("type"=>3,"varname"=>"id");
$dalTablereadings["read_date"] = array("type"=>7,"varname"=>"read_date");
$dalTablereadings["read_time"] = array("type"=>134,"varname"=>"read_time");
$dalTablereadings["time_period"] = array("type"=>200,"varname"=>"time_period");
$dalTablereadings["glucose_value"] = array("type"=>3,"varname"=>"glucose_value");
$dalTablereadings["sample_site"] = array("type"=>200,"varname"=>"sample_site");
$dalTablereadings["last_meal"] = array("type"=>3,"varname"=>"last_meal");
$dalTablereadings["comment"] = array("type"=>201,"varname"=>"comment");
$dalTablereadings["user_id"] = array("type"=>3,"varname"=>"user_id");
	$dalTablereadings["id"]["key"]=true;

$dal_info["diabetes_at_localhost__readings"] = &$dalTablereadings;
?>