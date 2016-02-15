<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDashboard["English"] = array();
	$fieldLabelsDashboard["English"]["readings_read_date"] = "Date";
	$fieldLabelsDashboard["English"]["readings_read_time"] = "Time";
	$fieldLabelsDashboard["English"]["readings_time_period"] = "Time Period";
	$fieldLabelsDashboard["English"]["readings_glucose_value"] = "Glucose Value";
	$fieldLabelsDashboard["English"]["readings_sample_site"] = "Sample Site";
	$fieldLabelsDashboard["English"]["readings_last_meal"] = "Time from Last Meal";
	$fieldLabelsDashboard["English"]["readings_comment"] = "Comment";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();

// all search fields
$tdataDashboard[".allSearchFields"] = array();

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "readings_list", "table" => "readings", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";

					$dbelement["inlineAdd"] = 1 > 0;
	$dbelement["inlineEdit"] = 1 > 0;
	$dbelement["deleteRecord"] = 1 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;


	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;


$tableEvents["Dashboard"] = new eventsBase;
$tdataDashboard[".hasEvents"] = false;


$tdataDashboard[".tableType"] = "dashboard";



$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>