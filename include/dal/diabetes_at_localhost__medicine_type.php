<?php
$dalTablemedicine_type = array();
$dalTablemedicine_type["id"] = array("type"=>3,"varname"=>"id");
$dalTablemedicine_type["medication"] = array("type"=>200,"varname"=>"medication");
$dalTablemedicine_type["dose"] = array("type"=>200,"varname"=>"dose");
$dalTablemedicine_type["filled_on"] = array("type"=>7,"varname"=>"filled_on");
$dalTablemedicine_type["refill_due"] = array("type"=>7,"varname"=>"refill_due");
$dalTablemedicine_type["parmacy"] = array("type"=>200,"varname"=>"parmacy");
$dalTablemedicine_type["doctor"] = array("type"=>200,"varname"=>"doctor");
$dalTablemedicine_type["prescrp_no"] = array("type"=>200,"varname"=>"prescrp_no");
$dalTablemedicine_type["hide"] = array("type"=>16,"varname"=>"hide");
	$dalTablemedicine_type["id"]["key"]=true;

$dal_info["diabetes_at_localhost__medicine_type"] = &$dalTablemedicine_type;
?>