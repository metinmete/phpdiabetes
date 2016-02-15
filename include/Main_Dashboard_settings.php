<?php
require_once(getabspath("classes/cipherer.php"));



$tdataMain_Dashboard = array();
$tdataMain_Dashboard[".ShortName"] = "Main_Dashboard";

//	field labels
$fieldLabelsMain_Dashboard = array();
$pageTitlesMain_Dashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMain_Dashboard["English"] = array();
	$fieldLabelsMain_Dashboard["English"]["users_id"] = "Id";
	$fieldLabelsMain_Dashboard["English"]["users_first_name"] = "First Name";
	$fieldLabelsMain_Dashboard["English"]["users_last_name"] = "Last Name";
	$fieldLabelsMain_Dashboard["English"]["users_address1"] = "Address1";
	$fieldLabelsMain_Dashboard["English"]["users_address2"] = "Address2";
	$fieldLabelsMain_Dashboard["English"]["users_address3"] = "Address3";
	$fieldLabelsMain_Dashboard["English"]["users_city"] = "City";
	$fieldLabelsMain_Dashboard["English"]["users_state"] = "State";
	$fieldLabelsMain_Dashboard["English"]["users_zip"] = "Zip";
	$fieldLabelsMain_Dashboard["English"]["users_email"] = "Email";
	$fieldLabelsMain_Dashboard["English"]["users_phonetype"] = "Phonetype";
	$fieldLabelsMain_Dashboard["English"]["users_phonenumber"] = "Phonenumber";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMain_Dashboard[""] = array();
}

//	search fields
$tdataMain_Dashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"id" );
$tdataMain_Dashboard[".searchFields"]["users_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"first_name" );
$tdataMain_Dashboard[".searchFields"]["users_first_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"last_name" );
$tdataMain_Dashboard[".searchFields"]["users_last_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"address1" );
$tdataMain_Dashboard[".searchFields"]["users_address1"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"address2" );
$tdataMain_Dashboard[".searchFields"]["users_address2"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"address3" );
$tdataMain_Dashboard[".searchFields"]["users_address3"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"city" );
$tdataMain_Dashboard[".searchFields"]["users_city"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"state" );
$tdataMain_Dashboard[".searchFields"]["users_state"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"zip" );
$tdataMain_Dashboard[".searchFields"]["users_zip"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"email" );
$tdataMain_Dashboard[".searchFields"]["users_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"phonetype" );
$tdataMain_Dashboard[".searchFields"]["users_phonetype"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"users", "field"=>"phonenumber" );
$tdataMain_Dashboard[".searchFields"]["users_phonenumber"] = $dashField;

// all search fields
$tdataMain_Dashboard[".allSearchFields"] = array();
$tdataMain_Dashboard[".allSearchFields"][] = "users_id";
$tdataMain_Dashboard[".allSearchFields"][] = "users_first_name";
$tdataMain_Dashboard[".allSearchFields"][] = "users_last_name";
$tdataMain_Dashboard[".allSearchFields"][] = "users_address1";
$tdataMain_Dashboard[".allSearchFields"][] = "users_address2";
$tdataMain_Dashboard[".allSearchFields"][] = "users_address3";
$tdataMain_Dashboard[".allSearchFields"][] = "users_city";
$tdataMain_Dashboard[".allSearchFields"][] = "users_state";
$tdataMain_Dashboard[".allSearchFields"][] = "users_zip";
$tdataMain_Dashboard[".allSearchFields"][] = "users_email";
$tdataMain_Dashboard[".allSearchFields"][] = "users_phonetype";
$tdataMain_Dashboard[".allSearchFields"][] = "users_phonenumber";

// good like search fields
$tdataMain_Dashboard[".googleLikeFields"] = array();
$tdataMain_Dashboard[".googleLikeFields"][] = "users_id";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_first_name";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_last_name";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_address1";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_address2";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_address3";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_city";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_state";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_zip";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_email";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_phonetype";
$tdataMain_Dashboard[".googleLikeFields"][] = "users_phonenumber";

$tdataMain_Dashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "users_list", "table" => "users", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 1 > 0;

	$dbelement["popupAdd"] = 1 > 0;
	$dbelement["popupEdit"] = 1 > 0;
	$dbelement["popupView"] = 0 > 0;


	$tdataMain_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "users_list1", "table" => "users", "type" => 0);
	$dbelement["cellName"] = "cell_1_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 1 > 0;


	$tdataMain_Dashboard[".dashElements"][] = $dbelement;

$tdataMain_Dashboard[".shortTableName"] = "Main_Dashboard";
$tdataMain_Dashboard[".entityType"] = 4;


$tableEvents["Main Dashboard"] = new eventsBase;
$tdataMain_Dashboard[".hasEvents"] = false;


$tdataMain_Dashboard[".tableType"] = "dashboard";



$tdataMain_Dashboard[".addPageEvents"] = false;

$tables_data["Main Dashboard"]=&$tdataMain_Dashboard;
$field_labels["Main_Dashboard"] = &$fieldLabelsMain_Dashboard;
$page_titles["Main_Dashboard"] = &$pageTitlesMain_Dashboard;

?>