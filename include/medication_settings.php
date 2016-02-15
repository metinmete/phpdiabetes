<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamedication = array();
	$tdatamedication[".truncateText"] = true;
	$tdatamedication[".NumberOfChars"] = 80;
	$tdatamedication[".ShortName"] = "medication";
	$tdatamedication[".OwnerID"] = "";
	$tdatamedication[".OriginalTable"] = "medication";

//	field labels
$fieldLabelsmedication = array();
$fieldToolTipsmedication = array();
$pageTitlesmedication = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmedication["English"] = array();
	$fieldToolTipsmedication["English"] = array();
	$pageTitlesmedication["English"] = array();
	$fieldLabelsmedication["English"]["user_id"] = "User Id";
	$fieldToolTipsmedication["English"]["user_id"] = "";
	$fieldLabelsmedication["English"]["date"] = "Date";
	$fieldToolTipsmedication["English"]["date"] = "";
	$fieldLabelsmedication["English"]["time"] = "Time";
	$fieldToolTipsmedication["English"]["time"] = "";
	$fieldLabelsmedication["English"]["time_period"] = "Time Period";
	$fieldToolTipsmedication["English"]["time_period"] = "";
	$fieldLabelsmedication["English"]["medication"] = "Medication";
	$fieldToolTipsmedication["English"]["medication"] = "";
	$fieldLabelsmedication["English"]["dose"] = "Dose";
	$fieldToolTipsmedication["English"]["dose"] = "";
	$fieldLabelsmedication["English"]["no_pills"] = "No Pills";
	$fieldToolTipsmedication["English"]["no_pills"] = "";
	$fieldLabelsmedication["English"]["comments"] = "Comments";
	$fieldToolTipsmedication["English"]["comments"] = "";
	$fieldLabelsmedication["English"]["id"] = "Id";
	$fieldToolTipsmedication["English"]["id"] = "";
	if (count($fieldToolTipsmedication["English"]))
		$tdatamedication[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmedication[""] = array();
	$fieldToolTipsmedication[""] = array();
	$pageTitlesmedication[""] = array();
	$fieldLabelsmedication[""]["user_id"] = "User Id";
	$fieldToolTipsmedication[""]["user_id"] = "";
	$fieldLabelsmedication[""]["date"] = "Date";
	$fieldToolTipsmedication[""]["date"] = "";
	$fieldLabelsmedication[""]["time"] = "Time";
	$fieldToolTipsmedication[""]["time"] = "";
	$fieldLabelsmedication[""]["time_period"] = "Time Period";
	$fieldToolTipsmedication[""]["time_period"] = "";
	$fieldLabelsmedication[""]["medication"] = "Medication";
	$fieldToolTipsmedication[""]["medication"] = "";
	$fieldLabelsmedication[""]["dose"] = "Dose";
	$fieldToolTipsmedication[""]["dose"] = "";
	$fieldLabelsmedication[""]["no_pills"] = "No Pills";
	$fieldToolTipsmedication[""]["no_pills"] = "";
	$fieldLabelsmedication[""]["comments"] = "Comments";
	$fieldToolTipsmedication[""]["comments"] = "";
	$fieldLabelsmedication[""]["id"] = "Id";
	$fieldToolTipsmedication[""]["id"] = "";
	if (count($fieldToolTipsmedication[""]))
		$tdatamedication[".isUseToolTips"] = true;
}


	$tdatamedication[".NCSearch"] = true;



$tdatamedication[".shortTableName"] = "medication";
$tdatamedication[".nSecOptions"] = 0;
$tdatamedication[".recsPerRowList"] = 1;
$tdatamedication[".recsPerRowPrint"] = 1;
$tdatamedication[".mainTableOwnerID"] = "";
$tdatamedication[".moveNext"] = 1;
$tdatamedication[".entityType"] = 0;

$tdatamedication[".strOriginalTableName"] = "medication";




$tdatamedication[".showAddInPopup"] = false;

$tdatamedication[".showEditInPopup"] = false;

$tdatamedication[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamedication[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamedication[".fieldsForRegister"] = array();

$tdatamedication[".listAjax"] = false;

	$tdatamedication[".audit"] = false;

	$tdatamedication[".locking"] = false;

$tdatamedication[".edit"] = true;
$tdatamedication[".afterEditAction"] = 0;
$tdatamedication[".closePopupAfterEdit"] = 1;
$tdatamedication[".afterEditActionDetTable"] = "";

$tdatamedication[".add"] = true;
$tdatamedication[".afterAddAction"] = 0;
$tdatamedication[".closePopupAfterAdd"] = 1;
$tdatamedication[".afterAddActionDetTable"] = "";

$tdatamedication[".list"] = true;

$tdatamedication[".inlineEdit"] = true;
$tdatamedication[".inlineAdd"] = true;
$tdatamedication[".view"] = true;

$tdatamedication[".import"] = true;

$tdatamedication[".exportTo"] = true;

$tdatamedication[".printFriendly"] = true;

$tdatamedication[".delete"] = true;

$tdatamedication[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamedication[".searchSaving"] = false;
//

if (isMobile()){
	$tdatamedication[".showSearchPanel"] = true;
}
else
	$tdatamedication[".showSearchPanel"] = false;

if (isMobile())
	$tdatamedication[".isUseAjaxSuggest"] = false;
else
	$tdatamedication[".isUseAjaxSuggest"] = true;

$tdatamedication[".rowHighlite"] = true;



$tdatamedication[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamedication[".isUseTimeForSearch"] = false;





$tdatamedication[".allSearchFields"] = array();
$tdatamedication[".filterFields"] = array();
$tdatamedication[".requiredSearchFields"] = array();

$tdatamedication[".allSearchFields"][] = "id";
	$tdatamedication[".allSearchFields"][] = "date";
	$tdatamedication[".allSearchFields"][] = "time";
	$tdatamedication[".allSearchFields"][] = "time_period";
	$tdatamedication[".allSearchFields"][] = "medication";
	$tdatamedication[".allSearchFields"][] = "dose";
	$tdatamedication[".allSearchFields"][] = "no_pills";
	$tdatamedication[".allSearchFields"][] = "comments";
	

$tdatamedication[".googleLikeFields"] = array();
$tdatamedication[".googleLikeFields"][] = "id";
$tdatamedication[".googleLikeFields"][] = "user_id";
$tdatamedication[".googleLikeFields"][] = "date";
$tdatamedication[".googleLikeFields"][] = "time";
$tdatamedication[".googleLikeFields"][] = "time_period";
$tdatamedication[".googleLikeFields"][] = "medication";
$tdatamedication[".googleLikeFields"][] = "dose";
$tdatamedication[".googleLikeFields"][] = "no_pills";
$tdatamedication[".googleLikeFields"][] = "comments";


$tdatamedication[".advSearchFields"] = array();
$tdatamedication[".advSearchFields"][] = "id";
$tdatamedication[".advSearchFields"][] = "date";
$tdatamedication[".advSearchFields"][] = "time";
$tdatamedication[".advSearchFields"][] = "time_period";
$tdatamedication[".advSearchFields"][] = "medication";
$tdatamedication[".advSearchFields"][] = "dose";
$tdatamedication[".advSearchFields"][] = "no_pills";
$tdatamedication[".advSearchFields"][] = "comments";

$tdatamedication[".tableType"] = "list";

$tdatamedication[".printerPageOrientation"] = 0;
$tdatamedication[".nPrinterPageScale"] = 100;

$tdatamedication[".nPrinterSplitRecords"] = 40;

$tdatamedication[".nPrinterPDFSplitRecords"] = 40;



$tdatamedication[".geocodingEnabled"] = false;










// view page pdf
$tdatamedication[".isViewPagePDF"] = true;
$tdatamedication[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatamedication[".isPrinterPagePDF"] = true;
$tdatamedication[".nPrinterPagePDFScale"] = 100;


$tdatamedication[".pageSize"] = 20;

$tdatamedication[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamedication[".strOrderBy"] = $tstrOrderBy;

$tdatamedication[".orderindexes"] = array();

$tdatamedication[".sqlHead"] = "SELECT id,  	user_id,  	`date`,  	`time`,  	time_period,  	medication,  	dose,  	no_pills,  	comments";
$tdatamedication[".sqlFrom"] = "FROM medication";
$tdatamedication[".sqlWhereExpr"] = "";
$tdatamedication[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamedication[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamedication[".arrGroupsPerPage"] = $arrGPP;

$tdatamedication[".highlightSearchResults"] = true;

$tableKeysmedication = array();
$tableKeysmedication[] = "user_id";
$tdatamedication[".Keys"] = $tableKeysmedication;

$tdatamedication[".listFields"] = array();
$tdatamedication[".listFields"][] = "id";
$tdatamedication[".listFields"][] = "date";
$tdatamedication[".listFields"][] = "time";
$tdatamedication[".listFields"][] = "time_period";
$tdatamedication[".listFields"][] = "medication";
$tdatamedication[".listFields"][] = "dose";
$tdatamedication[".listFields"][] = "no_pills";
$tdatamedication[".listFields"][] = "comments";

$tdatamedication[".hideMobileList"] = array();


$tdatamedication[".viewFields"] = array();
$tdatamedication[".viewFields"][] = "id";
$tdatamedication[".viewFields"][] = "date";
$tdatamedication[".viewFields"][] = "time";
$tdatamedication[".viewFields"][] = "time_period";
$tdatamedication[".viewFields"][] = "medication";
$tdatamedication[".viewFields"][] = "dose";
$tdatamedication[".viewFields"][] = "no_pills";
$tdatamedication[".viewFields"][] = "comments";

$tdatamedication[".addFields"] = array();
$tdatamedication[".addFields"][] = "date";
$tdatamedication[".addFields"][] = "time";
$tdatamedication[".addFields"][] = "time_period";
$tdatamedication[".addFields"][] = "medication";
$tdatamedication[".addFields"][] = "dose";
$tdatamedication[".addFields"][] = "no_pills";
$tdatamedication[".addFields"][] = "comments";

$tdatamedication[".masterListFields"] = array();
$tdatamedication[".masterListFields"][] = "id";
$tdatamedication[".masterListFields"][] = "user_id";
$tdatamedication[".masterListFields"][] = "date";
$tdatamedication[".masterListFields"][] = "time";
$tdatamedication[".masterListFields"][] = "time_period";
$tdatamedication[".masterListFields"][] = "medication";
$tdatamedication[".masterListFields"][] = "dose";
$tdatamedication[".masterListFields"][] = "no_pills";
$tdatamedication[".masterListFields"][] = "comments";

$tdatamedication[".inlineAddFields"] = array();
$tdatamedication[".inlineAddFields"][] = "date";
$tdatamedication[".inlineAddFields"][] = "time";
$tdatamedication[".inlineAddFields"][] = "time_period";
$tdatamedication[".inlineAddFields"][] = "medication";
$tdatamedication[".inlineAddFields"][] = "dose";
$tdatamedication[".inlineAddFields"][] = "no_pills";
$tdatamedication[".inlineAddFields"][] = "comments";

$tdatamedication[".editFields"] = array();
$tdatamedication[".editFields"][] = "id";
$tdatamedication[".editFields"][] = "date";
$tdatamedication[".editFields"][] = "time";
$tdatamedication[".editFields"][] = "time_period";
$tdatamedication[".editFields"][] = "medication";
$tdatamedication[".editFields"][] = "dose";
$tdatamedication[".editFields"][] = "no_pills";
$tdatamedication[".editFields"][] = "comments";

$tdatamedication[".inlineEditFields"] = array();
$tdatamedication[".inlineEditFields"][] = "id";
$tdatamedication[".inlineEditFields"][] = "date";
$tdatamedication[".inlineEditFields"][] = "time";
$tdatamedication[".inlineEditFields"][] = "time_period";
$tdatamedication[".inlineEditFields"][] = "medication";
$tdatamedication[".inlineEditFields"][] = "dose";
$tdatamedication[".inlineEditFields"][] = "no_pills";
$tdatamedication[".inlineEditFields"][] = "comments";

$tdatamedication[".exportFields"] = array();
$tdatamedication[".exportFields"][] = "id";
$tdatamedication[".exportFields"][] = "date";
$tdatamedication[".exportFields"][] = "time";
$tdatamedication[".exportFields"][] = "time_period";
$tdatamedication[".exportFields"][] = "medication";
$tdatamedication[".exportFields"][] = "dose";
$tdatamedication[".exportFields"][] = "no_pills";
$tdatamedication[".exportFields"][] = "comments";

$tdatamedication[".importFields"] = array();
$tdatamedication[".importFields"][] = "id";
$tdatamedication[".importFields"][] = "date";
$tdatamedication[".importFields"][] = "time";
$tdatamedication[".importFields"][] = "time_period";
$tdatamedication[".importFields"][] = "medication";
$tdatamedication[".importFields"][] = "dose";
$tdatamedication[".importFields"][] = "no_pills";
$tdatamedication[".importFields"][] = "comments";

$tdatamedication[".printFields"] = array();
$tdatamedication[".printFields"][] = "id";
$tdatamedication[".printFields"][] = "date";
$tdatamedication[".printFields"][] = "time";
$tdatamedication[".printFields"][] = "time_period";
$tdatamedication[".printFields"][] = "medication";
$tdatamedication[".printFields"][] = "dose";
$tdatamedication[".printFields"][] = "no_pills";
$tdatamedication[".printFields"][] = "comments";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "medication";
	$fdata["Label"] = GetFieldLabel("medication","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatamedication["id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "medication";
	$fdata["Label"] = GetFieldLabel("medication","user_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatamedication["user_id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "medication";
	$fdata["Label"] = GetFieldLabel("medication","date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatamedication["date"] = $fdata;
//	time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time";
	$fdata["GoodName"] = "time";
	$fdata["ownerTable"] = "medication";
	$fdata["Label"] = GetFieldLabel("medication","time");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`time`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatamedication["time"] = $fdata;
//	time_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_period";
	$fdata["GoodName"] = "time_period";
	$fdata["ownerTable"] = "medication";
	$fdata["Label"] = GetFieldLabel("medication","time_period");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "time_period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "time_period";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "timeperiod";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "period";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "period";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatamedication["time_period"] = $fdata;
//	medication
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "medication";
	$fdata["GoodName"] = "medication";
	$fdata["ownerTable"] = "medication";
	$fdata["Label"] = GetFieldLabel("medication","medication");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "medication";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "medication";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "medicationdata";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "medication";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "medication";

	
	$edata["LookupOrderBy"] = "medication";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatamedication["medication"] = $fdata;
//	dose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dose";
	$fdata["GoodName"] = "dose";
	$fdata["ownerTable"] = "medication";
	$fdata["Label"] = GetFieldLabel("medication","dose");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dose";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dose";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatamedication["dose"] = $fdata;
//	no_pills
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "no_pills";
	$fdata["GoodName"] = "no_pills";
	$fdata["ownerTable"] = "medication";
	$fdata["Label"] = GetFieldLabel("medication","no_pills");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "no_pills";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "no_pills";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatamedication["no_pills"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "medication";
	$fdata["Label"] = GetFieldLabel("medication","comments");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comments";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comments";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatamedication["comments"] = $fdata;


$tables_data["medication"]=&$tdatamedication;
$field_labels["medication"] = &$fieldLabelsmedication;
$fieldToolTips["medication"] = &$fieldToolTipsmedication;
$page_titles["medication"] = &$pageTitlesmedication;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["medication"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["medication"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_medication()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	user_id,  	`date`,  	`time`,  	time_period,  	medication,  	dose,  	no_pills,  	comments";
$proto0["m_strFrom"] = "FROM medication";
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
	"m_strTable" => "medication",
	"m_srcTableName" => "medication"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "medication";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "medication",
	"m_srcTableName" => "medication"
));

$proto7["m_sql"] = "user_id";
$proto7["m_srcTableName"] = "medication";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "medication",
	"m_srcTableName" => "medication"
));

$proto9["m_sql"] = "`date`";
$proto9["m_srcTableName"] = "medication";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "time",
	"m_strTable" => "medication",
	"m_srcTableName" => "medication"
));

$proto11["m_sql"] = "`time`";
$proto11["m_srcTableName"] = "medication";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "time_period",
	"m_strTable" => "medication",
	"m_srcTableName" => "medication"
));

$proto13["m_sql"] = "time_period";
$proto13["m_srcTableName"] = "medication";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "medication",
	"m_strTable" => "medication",
	"m_srcTableName" => "medication"
));

$proto15["m_sql"] = "medication";
$proto15["m_srcTableName"] = "medication";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "dose",
	"m_strTable" => "medication",
	"m_srcTableName" => "medication"
));

$proto17["m_sql"] = "dose";
$proto17["m_srcTableName"] = "medication";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "no_pills",
	"m_strTable" => "medication",
	"m_srcTableName" => "medication"
));

$proto19["m_sql"] = "no_pills";
$proto19["m_srcTableName"] = "medication";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "medication",
	"m_srcTableName" => "medication"
));

$proto21["m_sql"] = "comments";
$proto21["m_srcTableName"] = "medication";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "medication";
$proto24["m_srcTableName"] = "medication";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "user_id";
$proto24["m_columns"][] = "date";
$proto24["m_columns"][] = "time";
$proto24["m_columns"][] = "time_period";
$proto24["m_columns"][] = "medication";
$proto24["m_columns"][] = "dose";
$proto24["m_columns"][] = "no_pills";
$proto24["m_columns"][] = "comments";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "medication";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "medication";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="medication";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_medication = createSqlQuery_medication();



									

$tdatamedication[".sqlquery"] = $queryData_medication;

$tableEvents["medication"] = new eventsBase;
$tdatamedication[".hasEvents"] = false;

?>