<?php
$dalTablemedicationdata = array();
$dalTablemedicationdata["id"] = array("type"=>3,"varname"=>"id");
$dalTablemedicationdata["medication"] = array("type"=>200,"varname"=>"medication");
$dalTablemedicationdata["dose"] = array("type"=>200,"varname"=>"dose");
$dalTablemedicationdata["filled_on"] = array("type"=>7,"varname"=>"filled_on");
$dalTablemedicationdata["refill_due"] = array("type"=>7,"varname"=>"refill_due");
$dalTablemedicationdata["parmacy"] = array("type"=>200,"varname"=>"parmacy");
$dalTablemedicationdata["doctor"] = array("type"=>200,"varname"=>"doctor");
$dalTablemedicationdata["prescrp_no"] = array("type"=>200,"varname"=>"prescrp_no");
$dalTablemedicationdata["hide"] = array("type"=>16,"varname"=>"hide");
	$dalTablemedicationdata["id"]["key"]=true;

$dal_info["diabetes_at_localhost__medicationdata"] = &$dalTablemedicationdata;
?>