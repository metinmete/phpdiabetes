<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id");
$dalTableusers["first_name"] = array("type"=>200,"varname"=>"first_name");
$dalTableusers["last_name"] = array("type"=>200,"varname"=>"last_name");
$dalTableusers["address1"] = array("type"=>200,"varname"=>"address1");
$dalTableusers["address2"] = array("type"=>200,"varname"=>"address2");
$dalTableusers["address3"] = array("type"=>200,"varname"=>"address3");
$dalTableusers["city"] = array("type"=>200,"varname"=>"city");
$dalTableusers["state"] = array("type"=>200,"varname"=>"state");
$dalTableusers["zip"] = array("type"=>3,"varname"=>"zip");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email");
$dalTableusers["phonetype"] = array("type"=>200,"varname"=>"phonetype");
$dalTableusers["phonenumber"] = array("type"=>200,"varname"=>"phonenumber");
	$dalTableusers["id"]["key"]=true;

$dal_info["diabetes_at_localhost__users"] = &$dalTableusers;
?>