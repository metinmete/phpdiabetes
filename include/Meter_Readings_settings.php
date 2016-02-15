<?php
require_once(getabspath("classes/cipherer.php"));



$tdataMeter_Readings = array();
$tdataMeter_Readings[".ShortName"] = "Meter_Readings";

//	field labels
$fieldLabelsMeter_Readings = array();
$pageTitlesMeter_Readings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMeter_Readings["English"] = array();
	$fieldLabelsMeter_Readings["English"]["readings_read_date"] = "Date";
	$fieldLabelsMeter_Readings["English"]["readings_read_time"] = "Time";
	$fieldLabelsMeter_Readings["English"]["readings_time_period"] = "Time Period";
	$fieldLabelsMeter_Readings["English"]["readings_glucose_value"] = "Glucose Value";
	$fieldLabelsMeter_Readings["English"]["readings_sample_site"] = "Sample Site";
	$fieldLabelsMeter_Readings["English"]["readings_last_meal"] = "Time from Last Meal";
	$fieldLabelsMeter_Readings["English"]["readings_comment"] = "Comment";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMeter_Readings[""] = array();
}

//	search fields
$tdataMeter_Readings[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"readings", "field"=>"read_date" );
$tdataMeter_Readings[".searchFields"]["readings_read_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"readings", "field"=>"read_time" );
$tdataMeter_Readings[".searchFields"]["readings_read_time"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"readings", "field"=>"time_period" );
$tdataMeter_Readings[".searchFields"]["readings_time_period"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"readings", "field"=>"glucose_value" );
$tdataMeter_Readings[".searchFields"]["readings_glucose_value"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"readings", "field"=>"sample_site" );
$tdataMeter_Readings[".searchFields"]["readings_sample_site"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"readings", "field"=>"last_meal" );
$tdataMeter_Readings[".searchFields"]["readings_last_meal"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"readings", "field"=>"comment" );
$tdataMeter_Readings[".searchFields"]["readings_comment"] = $dashField;

// all search fields
$tdataMeter_Readings[".allSearchFields"] = array();
$tdataMeter_Readings[".allSearchFields"][] = "readings_read_date";
$tdataMeter_Readings[".allSearchFields"][] = "readings_read_time";
$tdataMeter_Readings[".allSearchFields"][] = "readings_time_period";
$tdataMeter_Readings[".allSearchFields"][] = "readings_glucose_value";
$tdataMeter_Readings[".allSearchFields"][] = "readings_sample_site";
$tdataMeter_Readings[".allSearchFields"][] = "readings_last_meal";
$tdataMeter_Readings[".allSearchFields"][] = "readings_comment";

// good like search fields
$tdataMeter_Readings[".googleLikeFields"] = array();
$tdataMeter_Readings[".googleLikeFields"][] = "readings_read_date";
$tdataMeter_Readings[".googleLikeFields"][] = "readings_read_time";
$tdataMeter_Readings[".googleLikeFields"][] = "readings_time_period";
$tdataMeter_Readings[".googleLikeFields"][] = "readings_glucose_value";
$tdataMeter_Readings[".googleLikeFields"][] = "readings_sample_site";
$tdataMeter_Readings[".googleLikeFields"][] = "readings_last_meal";
$tdataMeter_Readings[".googleLikeFields"][] = "readings_comment";

$tdataMeter_Readings[".dashElements"] = array();

	$dbelement = array( "elementName" => "readings_list", "table" => "readings", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";

					$dbelement["inlineAdd"] = 1 > 0;
	$dbelement["inlineEdit"] = 1 > 0;
	$dbelement["deleteRecord"] = 1 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;


	$tdataMeter_Readings[".dashElements"][] = $dbelement;

$tdataMeter_Readings[".shortTableName"] = "Meter_Readings";
$tdataMeter_Readings[".entityType"] = 4;


$tableEvents["Meter Readings"] = new eventsBase;
$tdataMeter_Readings[".hasEvents"] = false;


$tdataMeter_Readings[".tableType"] = "dashboard";



$tdataMeter_Readings[".addPageEvents"] = false;

$tables_data["Meter Readings"]=&$tdataMeter_Readings;
$field_labels["Meter_Readings"] = &$fieldLabelsMeter_Readings;
$page_titles["Meter_Readings"] = &$pageTitlesMeter_Readings;

?>