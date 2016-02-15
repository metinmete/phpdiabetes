<?php
require_once(getabspath("classes/cipherer.php"));




$tdataUsers_Report = array();
	$tdataUsers_Report[".truncateText"] = true;
	$tdataUsers_Report[".NumberOfChars"] = 80;
	$tdataUsers_Report[".ShortName"] = "Users_Report";
	$tdataUsers_Report[".OwnerID"] = "";
	$tdataUsers_Report[".OriginalTable"] = "users";

//	field labels
$fieldLabelsUsers_Report = array();
$fieldToolTipsUsers_Report = array();
$pageTitlesUsers_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUsers_Report["English"] = array();
	$fieldToolTipsUsers_Report["English"] = array();
	$pageTitlesUsers_Report["English"] = array();
	$fieldLabelsUsers_Report["English"]["id"] = "Id";
	$fieldToolTipsUsers_Report["English"]["id"] = "";
	$fieldLabelsUsers_Report["English"]["first_name"] = "First Name";
	$fieldToolTipsUsers_Report["English"]["first_name"] = "";
	$fieldLabelsUsers_Report["English"]["last_name"] = "Last Name";
	$fieldToolTipsUsers_Report["English"]["last_name"] = "";
	$fieldLabelsUsers_Report["English"]["address1"] = "Address1";
	$fieldToolTipsUsers_Report["English"]["address1"] = "";
	$fieldLabelsUsers_Report["English"]["address2"] = "Address2";
	$fieldToolTipsUsers_Report["English"]["address2"] = "";
	$fieldLabelsUsers_Report["English"]["address3"] = "Address3";
	$fieldToolTipsUsers_Report["English"]["address3"] = "";
	$fieldLabelsUsers_Report["English"]["city"] = "City";
	$fieldToolTipsUsers_Report["English"]["city"] = "";
	$fieldLabelsUsers_Report["English"]["state"] = "State";
	$fieldToolTipsUsers_Report["English"]["state"] = "";
	$fieldLabelsUsers_Report["English"]["zip"] = "Zip";
	$fieldToolTipsUsers_Report["English"]["zip"] = "";
	$fieldLabelsUsers_Report["English"]["email"] = "Email";
	$fieldToolTipsUsers_Report["English"]["email"] = "";
	$fieldLabelsUsers_Report["English"]["phonetype"] = "Phonetype";
	$fieldToolTipsUsers_Report["English"]["phonetype"] = "";
	$fieldLabelsUsers_Report["English"]["phonenumber"] = "Phonenumber";
	$fieldToolTipsUsers_Report["English"]["phonenumber"] = "";
	if (count($fieldToolTipsUsers_Report["English"]))
		$tdataUsers_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsUsers_Report[""] = array();
	$fieldToolTipsUsers_Report[""] = array();
	$pageTitlesUsers_Report[""] = array();
	$fieldLabelsUsers_Report[""]["id"] = "Id";
	$fieldToolTipsUsers_Report[""]["id"] = "";
	$fieldLabelsUsers_Report[""]["first_name"] = "First Name";
	$fieldToolTipsUsers_Report[""]["first_name"] = "";
	$fieldLabelsUsers_Report[""]["last_name"] = "Last Name";
	$fieldToolTipsUsers_Report[""]["last_name"] = "";
	$fieldLabelsUsers_Report[""]["address1"] = "Address1";
	$fieldToolTipsUsers_Report[""]["address1"] = "";
	$fieldLabelsUsers_Report[""]["address2"] = "Address2";
	$fieldToolTipsUsers_Report[""]["address2"] = "";
	$fieldLabelsUsers_Report[""]["address3"] = "Address3";
	$fieldToolTipsUsers_Report[""]["address3"] = "";
	$fieldLabelsUsers_Report[""]["city"] = "City";
	$fieldToolTipsUsers_Report[""]["city"] = "";
	$fieldLabelsUsers_Report[""]["state"] = "State";
	$fieldToolTipsUsers_Report[""]["state"] = "";
	$fieldLabelsUsers_Report[""]["zip"] = "Zip";
	$fieldToolTipsUsers_Report[""]["zip"] = "";
	$fieldLabelsUsers_Report[""]["email"] = "Email";
	$fieldToolTipsUsers_Report[""]["email"] = "";
	$fieldLabelsUsers_Report[""]["phonetype"] = "Phonetype";
	$fieldToolTipsUsers_Report[""]["phonetype"] = "";
	$fieldLabelsUsers_Report[""]["phonenumber"] = "Phonenumber";
	$fieldToolTipsUsers_Report[""]["phonenumber"] = "";
	if (count($fieldToolTipsUsers_Report[""]))
		$tdataUsers_Report[".isUseToolTips"] = true;
}


	$tdataUsers_Report[".NCSearch"] = true;



$tdataUsers_Report[".shortTableName"] = "Users_Report";
$tdataUsers_Report[".nSecOptions"] = 0;
$tdataUsers_Report[".recsPerRowList"] = 1;
$tdataUsers_Report[".recsPerRowPrint"] = 1;
$tdataUsers_Report[".mainTableOwnerID"] = "";
$tdataUsers_Report[".moveNext"] = 1;
$tdataUsers_Report[".entityType"] = 2;

$tdataUsers_Report[".strOriginalTableName"] = "users";




$tdataUsers_Report[".showAddInPopup"] = false;

$tdataUsers_Report[".showEditInPopup"] = false;

$tdataUsers_Report[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUsers_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataUsers_Report[".fieldsForRegister"] = array();

$tdataUsers_Report[".listAjax"] = false;

	$tdataUsers_Report[".audit"] = false;

	$tdataUsers_Report[".locking"] = false;

$tdataUsers_Report[".edit"] = true;
$tdataUsers_Report[".afterEditAction"] = 1;
$tdataUsers_Report[".closePopupAfterEdit"] = 1;
$tdataUsers_Report[".afterEditActionDetTable"] = "";

$tdataUsers_Report[".add"] = true;
$tdataUsers_Report[".afterAddAction"] = 1;
$tdataUsers_Report[".closePopupAfterAdd"] = 1;
$tdataUsers_Report[".afterAddActionDetTable"] = "";

$tdataUsers_Report[".list"] = true;

$tdataUsers_Report[".inlineEdit"] = true;
$tdataUsers_Report[".inlineAdd"] = true;
$tdataUsers_Report[".view"] = true;


$tdataUsers_Report[".exportTo"] = true;

$tdataUsers_Report[".printFriendly"] = true;

$tdataUsers_Report[".delete"] = true;

$tdataUsers_Report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataUsers_Report[".searchSaving"] = false;
//

$tdataUsers_Report[".showSearchPanel"] = true;
		$tdataUsers_Report[".flexibleSearch"] = true;

if (isMobile())
	$tdataUsers_Report[".isUseAjaxSuggest"] = false;
else
	$tdataUsers_Report[".isUseAjaxSuggest"] = true;




$tdataUsers_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUsers_Report[".isUseTimeForSearch"] = false;





$tdataUsers_Report[".allSearchFields"] = array();
$tdataUsers_Report[".filterFields"] = array();
$tdataUsers_Report[".requiredSearchFields"] = array();

$tdataUsers_Report[".allSearchFields"][] = "id";
	$tdataUsers_Report[".allSearchFields"][] = "first_name";
	$tdataUsers_Report[".allSearchFields"][] = "last_name";
	$tdataUsers_Report[".allSearchFields"][] = "address1";
	$tdataUsers_Report[".allSearchFields"][] = "address2";
	$tdataUsers_Report[".allSearchFields"][] = "address3";
	$tdataUsers_Report[".allSearchFields"][] = "city";
	$tdataUsers_Report[".allSearchFields"][] = "state";
	$tdataUsers_Report[".allSearchFields"][] = "zip";
	$tdataUsers_Report[".allSearchFields"][] = "email";
	$tdataUsers_Report[".allSearchFields"][] = "phonetype";
	$tdataUsers_Report[".allSearchFields"][] = "phonenumber";
	

$tdataUsers_Report[".googleLikeFields"] = array();
$tdataUsers_Report[".googleLikeFields"][] = "id";
$tdataUsers_Report[".googleLikeFields"][] = "first_name";
$tdataUsers_Report[".googleLikeFields"][] = "last_name";
$tdataUsers_Report[".googleLikeFields"][] = "address1";
$tdataUsers_Report[".googleLikeFields"][] = "address2";
$tdataUsers_Report[".googleLikeFields"][] = "address3";
$tdataUsers_Report[".googleLikeFields"][] = "city";
$tdataUsers_Report[".googleLikeFields"][] = "state";
$tdataUsers_Report[".googleLikeFields"][] = "zip";
$tdataUsers_Report[".googleLikeFields"][] = "email";
$tdataUsers_Report[".googleLikeFields"][] = "phonetype";
$tdataUsers_Report[".googleLikeFields"][] = "phonenumber";


$tdataUsers_Report[".advSearchFields"] = array();
$tdataUsers_Report[".advSearchFields"][] = "id";
$tdataUsers_Report[".advSearchFields"][] = "first_name";
$tdataUsers_Report[".advSearchFields"][] = "last_name";
$tdataUsers_Report[".advSearchFields"][] = "address1";
$tdataUsers_Report[".advSearchFields"][] = "address2";
$tdataUsers_Report[".advSearchFields"][] = "address3";
$tdataUsers_Report[".advSearchFields"][] = "city";
$tdataUsers_Report[".advSearchFields"][] = "state";
$tdataUsers_Report[".advSearchFields"][] = "zip";
$tdataUsers_Report[".advSearchFields"][] = "email";
$tdataUsers_Report[".advSearchFields"][] = "phonetype";
$tdataUsers_Report[".advSearchFields"][] = "phonenumber";

$tdataUsers_Report[".tableType"] = "report";

$tdataUsers_Report[".printerPageOrientation"] = 0;
$tdataUsers_Report[".nPrinterPageScale"] = 100;

$tdataUsers_Report[".nPrinterSplitRecords"] = 40;

$tdataUsers_Report[".nPrinterPDFSplitRecords"] = 40;



$tdataUsers_Report[".geocodingEnabled"] = false;

//report settings
$tdataUsers_Report[".printReportLayout"] = 6;

$tdataUsers_Report[".reportPrintPartitionType"] = 1;
$tdataUsers_Report[".reportPrintGroupsPerPage"] = 40;
	$tdataUsers_Report[".reportPrintPDFGroupsPerPage"] = 40;
$tdataUsers_Report[".lowGroup"] = 0;



$tdataUsers_Report[".pageSize"] = 20;






$tdataUsers_Report[".repShowDet"] = true;

$tdataUsers_Report[".reportLayout"] = 6;

//end of report settings









// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUsers_Report[".strOrderBy"] = $tstrOrderBy;

$tdataUsers_Report[".orderindexes"] = array();

$tdataUsers_Report[".sqlHead"] = "SELECT id,  	first_name,  	last_name,  	address1,  	address2,  	address3,  	city,  	`state`,  	zip,  	email,  	phonetype,  	phonenumber";
$tdataUsers_Report[".sqlFrom"] = "FROM users";
$tdataUsers_Report[".sqlWhereExpr"] = "";
$tdataUsers_Report[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUsers_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUsers_Report[".arrGroupsPerPage"] = $arrGPP;

$tdataUsers_Report[".highlightSearchResults"] = true;

$tableKeysUsers_Report = array();
$tableKeysUsers_Report[] = "id";
$tdataUsers_Report[".Keys"] = $tableKeysUsers_Report;

$tdataUsers_Report[".listFields"] = array();
$tdataUsers_Report[".listFields"][] = "id";
$tdataUsers_Report[".listFields"][] = "first_name";
$tdataUsers_Report[".listFields"][] = "last_name";
$tdataUsers_Report[".listFields"][] = "address1";
$tdataUsers_Report[".listFields"][] = "address2";
$tdataUsers_Report[".listFields"][] = "address3";
$tdataUsers_Report[".listFields"][] = "city";
$tdataUsers_Report[".listFields"][] = "state";
$tdataUsers_Report[".listFields"][] = "zip";
$tdataUsers_Report[".listFields"][] = "email";
$tdataUsers_Report[".listFields"][] = "phonetype";
$tdataUsers_Report[".listFields"][] = "phonenumber";

$tdataUsers_Report[".hideMobileList"] = array();


$tdataUsers_Report[".viewFields"] = array();
$tdataUsers_Report[".viewFields"][] = "id";
$tdataUsers_Report[".viewFields"][] = "first_name";
$tdataUsers_Report[".viewFields"][] = "last_name";
$tdataUsers_Report[".viewFields"][] = "address1";
$tdataUsers_Report[".viewFields"][] = "address2";
$tdataUsers_Report[".viewFields"][] = "address3";
$tdataUsers_Report[".viewFields"][] = "city";
$tdataUsers_Report[".viewFields"][] = "state";
$tdataUsers_Report[".viewFields"][] = "zip";
$tdataUsers_Report[".viewFields"][] = "email";
$tdataUsers_Report[".viewFields"][] = "phonetype";
$tdataUsers_Report[".viewFields"][] = "phonenumber";

$tdataUsers_Report[".addFields"] = array();
$tdataUsers_Report[".addFields"][] = "first_name";
$tdataUsers_Report[".addFields"][] = "last_name";
$tdataUsers_Report[".addFields"][] = "address1";
$tdataUsers_Report[".addFields"][] = "address2";
$tdataUsers_Report[".addFields"][] = "address3";
$tdataUsers_Report[".addFields"][] = "city";
$tdataUsers_Report[".addFields"][] = "state";
$tdataUsers_Report[".addFields"][] = "zip";
$tdataUsers_Report[".addFields"][] = "email";
$tdataUsers_Report[".addFields"][] = "phonetype";
$tdataUsers_Report[".addFields"][] = "phonenumber";

$tdataUsers_Report[".masterListFields"] = array();
$tdataUsers_Report[".masterListFields"][] = "id";
$tdataUsers_Report[".masterListFields"][] = "first_name";
$tdataUsers_Report[".masterListFields"][] = "last_name";
$tdataUsers_Report[".masterListFields"][] = "address1";
$tdataUsers_Report[".masterListFields"][] = "address2";
$tdataUsers_Report[".masterListFields"][] = "address3";
$tdataUsers_Report[".masterListFields"][] = "city";
$tdataUsers_Report[".masterListFields"][] = "state";
$tdataUsers_Report[".masterListFields"][] = "zip";
$tdataUsers_Report[".masterListFields"][] = "email";
$tdataUsers_Report[".masterListFields"][] = "phonetype";
$tdataUsers_Report[".masterListFields"][] = "phonenumber";

$tdataUsers_Report[".inlineAddFields"] = array();
$tdataUsers_Report[".inlineAddFields"][] = "first_name";
$tdataUsers_Report[".inlineAddFields"][] = "last_name";
$tdataUsers_Report[".inlineAddFields"][] = "address1";
$tdataUsers_Report[".inlineAddFields"][] = "address2";
$tdataUsers_Report[".inlineAddFields"][] = "address3";
$tdataUsers_Report[".inlineAddFields"][] = "city";
$tdataUsers_Report[".inlineAddFields"][] = "state";
$tdataUsers_Report[".inlineAddFields"][] = "zip";
$tdataUsers_Report[".inlineAddFields"][] = "email";
$tdataUsers_Report[".inlineAddFields"][] = "phonetype";
$tdataUsers_Report[".inlineAddFields"][] = "phonenumber";

$tdataUsers_Report[".editFields"] = array();
$tdataUsers_Report[".editFields"][] = "first_name";
$tdataUsers_Report[".editFields"][] = "last_name";
$tdataUsers_Report[".editFields"][] = "address1";
$tdataUsers_Report[".editFields"][] = "address2";
$tdataUsers_Report[".editFields"][] = "address3";
$tdataUsers_Report[".editFields"][] = "city";
$tdataUsers_Report[".editFields"][] = "state";
$tdataUsers_Report[".editFields"][] = "zip";
$tdataUsers_Report[".editFields"][] = "email";
$tdataUsers_Report[".editFields"][] = "phonetype";
$tdataUsers_Report[".editFields"][] = "phonenumber";

$tdataUsers_Report[".inlineEditFields"] = array();
$tdataUsers_Report[".inlineEditFields"][] = "first_name";
$tdataUsers_Report[".inlineEditFields"][] = "last_name";
$tdataUsers_Report[".inlineEditFields"][] = "address1";
$tdataUsers_Report[".inlineEditFields"][] = "address2";
$tdataUsers_Report[".inlineEditFields"][] = "address3";
$tdataUsers_Report[".inlineEditFields"][] = "city";
$tdataUsers_Report[".inlineEditFields"][] = "state";
$tdataUsers_Report[".inlineEditFields"][] = "zip";
$tdataUsers_Report[".inlineEditFields"][] = "email";
$tdataUsers_Report[".inlineEditFields"][] = "phonetype";
$tdataUsers_Report[".inlineEditFields"][] = "phonenumber";

$tdataUsers_Report[".exportFields"] = array();
$tdataUsers_Report[".exportFields"][] = "id";
$tdataUsers_Report[".exportFields"][] = "first_name";
$tdataUsers_Report[".exportFields"][] = "last_name";
$tdataUsers_Report[".exportFields"][] = "address1";
$tdataUsers_Report[".exportFields"][] = "address2";
$tdataUsers_Report[".exportFields"][] = "address3";
$tdataUsers_Report[".exportFields"][] = "city";
$tdataUsers_Report[".exportFields"][] = "state";
$tdataUsers_Report[".exportFields"][] = "zip";
$tdataUsers_Report[".exportFields"][] = "email";
$tdataUsers_Report[".exportFields"][] = "phonetype";
$tdataUsers_Report[".exportFields"][] = "phonenumber";

$tdataUsers_Report[".importFields"] = array();
$tdataUsers_Report[".importFields"][] = "id";
$tdataUsers_Report[".importFields"][] = "first_name";
$tdataUsers_Report[".importFields"][] = "last_name";
$tdataUsers_Report[".importFields"][] = "address1";
$tdataUsers_Report[".importFields"][] = "address2";
$tdataUsers_Report[".importFields"][] = "address3";
$tdataUsers_Report[".importFields"][] = "city";
$tdataUsers_Report[".importFields"][] = "state";
$tdataUsers_Report[".importFields"][] = "zip";
$tdataUsers_Report[".importFields"][] = "email";
$tdataUsers_Report[".importFields"][] = "phonetype";
$tdataUsers_Report[".importFields"][] = "phonenumber";

$tdataUsers_Report[".printFields"] = array();
$tdataUsers_Report[".printFields"][] = "id";
$tdataUsers_Report[".printFields"][] = "first_name";
$tdataUsers_Report[".printFields"][] = "last_name";
$tdataUsers_Report[".printFields"][] = "address1";
$tdataUsers_Report[".printFields"][] = "address2";
$tdataUsers_Report[".printFields"][] = "address3";
$tdataUsers_Report[".printFields"][] = "city";
$tdataUsers_Report[".printFields"][] = "state";
$tdataUsers_Report[".printFields"][] = "zip";
$tdataUsers_Report[".printFields"][] = "email";
$tdataUsers_Report[".printFields"][] = "phonetype";
$tdataUsers_Report[".printFields"][] = "phonenumber";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","id");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["id"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","first_name");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "first_name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["first_name"] = $fdata;
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","last_name");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["last_name"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","address1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address1";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","address2");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address2";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","address3");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address3";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["address3"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","city");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["city"] = $fdata;
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","state");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "state";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`state`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["state"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","zip");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["zip"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","email");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["email"] = $fdata;
//	phonetype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "phonetype";
	$fdata["GoodName"] = "phonetype";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","phonetype");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phonetype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phonetype";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["phonetype"] = $fdata;
//	phonenumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phonenumber";
	$fdata["GoodName"] = "phonenumber";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("Users_Report","phonenumber");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phonenumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phonenumber";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataUsers_Report["phonenumber"] = $fdata;


$tables_data["Users Report"]=&$tdataUsers_Report;
$field_labels["Users_Report"] = &$fieldLabelsUsers_Report;
$fieldToolTips["Users Report"] = &$fieldToolTipsUsers_Report;
$page_titles["Users_Report"] = &$pageTitlesUsers_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Users Report"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Users Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Users_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	first_name,  	last_name,  	address1,  	address2,  	address3,  	city,  	`state`,  	zip,  	email,  	phonetype,  	phonenumber";
$proto0["m_strFrom"] = "FROM users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "Users Report";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto7["m_sql"] = "first_name";
$proto7["m_srcTableName"] = "Users Report";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto9["m_sql"] = "last_name";
$proto9["m_srcTableName"] = "Users Report";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto11["m_sql"] = "address1";
$proto11["m_srcTableName"] = "Users Report";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto13["m_sql"] = "address2";
$proto13["m_srcTableName"] = "Users Report";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto15["m_sql"] = "address3";
$proto15["m_srcTableName"] = "Users Report";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto17["m_sql"] = "city";
$proto17["m_srcTableName"] = "Users Report";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto19["m_sql"] = "`state`";
$proto19["m_srcTableName"] = "Users Report";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "zip",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto21["m_sql"] = "zip";
$proto21["m_srcTableName"] = "Users Report";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto23["m_sql"] = "email";
$proto23["m_srcTableName"] = "Users Report";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "phonetype",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto25["m_sql"] = "phonetype";
$proto25["m_srcTableName"] = "Users Report";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "phonenumber",
	"m_strTable" => "users",
	"m_srcTableName" => "Users Report"
));

$proto27["m_sql"] = "phonenumber";
$proto27["m_srcTableName"] = "Users Report";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "users";
$proto30["m_srcTableName"] = "Users Report";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "first_name";
$proto30["m_columns"][] = "last_name";
$proto30["m_columns"][] = "address1";
$proto30["m_columns"][] = "address2";
$proto30["m_columns"][] = "address3";
$proto30["m_columns"][] = "city";
$proto30["m_columns"][] = "state";
$proto30["m_columns"][] = "zip";
$proto30["m_columns"][] = "email";
$proto30["m_columns"][] = "phonetype";
$proto30["m_columns"][] = "phonenumber";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "users";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "Users Report";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Users Report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Users_Report = createSqlQuery_Users_Report();



												

$tdataUsers_Report[".sqlquery"] = $queryData_Users_Report;

$tableEvents["Users Report"] = new eventsBase;
$tdataUsers_Report[".hasEvents"] = false;

?>