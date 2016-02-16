<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsulin = array();
	$tdatainsulin[".truncateText"] = true;
	$tdatainsulin[".NumberOfChars"] = 80;
	$tdatainsulin[".ShortName"] = "insulin";
	$tdatainsulin[".OwnerID"] = "";
	$tdatainsulin[".OriginalTable"] = "insulin";

//	field labels
$fieldLabelsinsulin = array();
$fieldToolTipsinsulin = array();
$pageTitlesinsulin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsulin["English"] = array();
	$fieldToolTipsinsulin["English"] = array();
	$pageTitlesinsulin["English"] = array();
	$fieldLabelsinsulin["English"]["date"] = "Date";
	$fieldToolTipsinsulin["English"]["date"] = "";
	$fieldLabelsinsulin["English"]["time"] = "Time";
	$fieldToolTipsinsulin["English"]["time"] = "";
	$fieldLabelsinsulin["English"]["time_period"] = "Time Period";
	$fieldToolTipsinsulin["English"]["time_period"] = "";
	$fieldLabelsinsulin["English"]["type"] = "Type";
	$fieldToolTipsinsulin["English"]["type"] = "";
	$fieldLabelsinsulin["English"]["doseage"] = "Doseage";
	$fieldToolTipsinsulin["English"]["doseage"] = "";
	$fieldLabelsinsulin["English"]["inject_type"] = "Inject Type";
	$fieldToolTipsinsulin["English"]["inject_type"] = "";
	$fieldLabelsinsulin["English"]["comment"] = "Comment";
	$fieldToolTipsinsulin["English"]["comment"] = "";
	$fieldLabelsinsulin["English"]["id"] = "Id";
	$fieldToolTipsinsulin["English"]["id"] = "";
	if (count($fieldToolTipsinsulin["English"]))
		$tdatainsulin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsulin[""] = array();
	$fieldToolTipsinsulin[""] = array();
	$pageTitlesinsulin[""] = array();
	$fieldLabelsinsulin[""]["date"] = "Date";
	$fieldToolTipsinsulin[""]["date"] = "";
	$fieldLabelsinsulin[""]["time"] = "Time";
	$fieldToolTipsinsulin[""]["time"] = "";
	$fieldLabelsinsulin[""]["time_period"] = "Time Period";
	$fieldToolTipsinsulin[""]["time_period"] = "";
	$fieldLabelsinsulin[""]["type"] = "Type";
	$fieldToolTipsinsulin[""]["type"] = "";
	$fieldLabelsinsulin[""]["doseage"] = "Doseage";
	$fieldToolTipsinsulin[""]["doseage"] = "";
	$fieldLabelsinsulin[""]["inject_type"] = "Inject Type";
	$fieldToolTipsinsulin[""]["inject_type"] = "";
	$fieldLabelsinsulin[""]["comment"] = "Comment";
	$fieldToolTipsinsulin[""]["comment"] = "";
	$fieldLabelsinsulin[""]["id"] = "Id";
	$fieldToolTipsinsulin[""]["id"] = "";
	if (count($fieldToolTipsinsulin[""]))
		$tdatainsulin[".isUseToolTips"] = true;
}


	$tdatainsulin[".NCSearch"] = true;



$tdatainsulin[".shortTableName"] = "insulin";
$tdatainsulin[".nSecOptions"] = 0;
$tdatainsulin[".recsPerRowList"] = 1;
$tdatainsulin[".recsPerRowPrint"] = 1;
$tdatainsulin[".mainTableOwnerID"] = "";
$tdatainsulin[".moveNext"] = 1;
$tdatainsulin[".entityType"] = 0;

$tdatainsulin[".strOriginalTableName"] = "insulin";




$tdatainsulin[".showAddInPopup"] = false;

$tdatainsulin[".showEditInPopup"] = false;

$tdatainsulin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsulin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsulin[".fieldsForRegister"] = array();

$tdatainsulin[".listAjax"] = false;

	$tdatainsulin[".audit"] = false;

	$tdatainsulin[".locking"] = false;


$tdatainsulin[".add"] = true;
$tdatainsulin[".afterAddAction"] = 0;
$tdatainsulin[".closePopupAfterAdd"] = 1;
$tdatainsulin[".afterAddActionDetTable"] = "Detail tables not found!";

$tdatainsulin[".list"] = true;

$tdatainsulin[".inlineAdd"] = true;

$tdatainsulin[".import"] = true;

$tdatainsulin[".exportTo"] = true;

$tdatainsulin[".printFriendly"] = true;


$tdatainsulin[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainsulin[".searchSaving"] = false;
//

if (isMobile()){
	$tdatainsulin[".showSearchPanel"] = true;
}
else
	$tdatainsulin[".showSearchPanel"] = false;

if (isMobile())
	$tdatainsulin[".isUseAjaxSuggest"] = false;
else
	$tdatainsulin[".isUseAjaxSuggest"] = true;

$tdatainsulin[".rowHighlite"] = true;



$tdatainsulin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsulin[".isUseTimeForSearch"] = true;





$tdatainsulin[".allSearchFields"] = array();
$tdatainsulin[".filterFields"] = array();
$tdatainsulin[".requiredSearchFields"] = array();

$tdatainsulin[".allSearchFields"][] = "id";
	$tdatainsulin[".allSearchFields"][] = "date";
	$tdatainsulin[".allSearchFields"][] = "time";
	$tdatainsulin[".allSearchFields"][] = "time_period";
	$tdatainsulin[".allSearchFields"][] = "type";
	$tdatainsulin[".allSearchFields"][] = "doseage";
	$tdatainsulin[".allSearchFields"][] = "inject_type";
	$tdatainsulin[".allSearchFields"][] = "comment";
	

$tdatainsulin[".googleLikeFields"] = array();
$tdatainsulin[".googleLikeFields"][] = "id";
$tdatainsulin[".googleLikeFields"][] = "date";
$tdatainsulin[".googleLikeFields"][] = "time";
$tdatainsulin[".googleLikeFields"][] = "time_period";
$tdatainsulin[".googleLikeFields"][] = "type";
$tdatainsulin[".googleLikeFields"][] = "doseage";
$tdatainsulin[".googleLikeFields"][] = "inject_type";
$tdatainsulin[".googleLikeFields"][] = "comment";


$tdatainsulin[".advSearchFields"] = array();
$tdatainsulin[".advSearchFields"][] = "id";
$tdatainsulin[".advSearchFields"][] = "date";
$tdatainsulin[".advSearchFields"][] = "time";
$tdatainsulin[".advSearchFields"][] = "time_period";
$tdatainsulin[".advSearchFields"][] = "type";
$tdatainsulin[".advSearchFields"][] = "doseage";
$tdatainsulin[".advSearchFields"][] = "inject_type";
$tdatainsulin[".advSearchFields"][] = "comment";

$tdatainsulin[".tableType"] = "list";

$tdatainsulin[".printerPageOrientation"] = 0;
$tdatainsulin[".nPrinterPageScale"] = 100;

$tdatainsulin[".nPrinterSplitRecords"] = 40;

$tdatainsulin[".nPrinterPDFSplitRecords"] = 40;



$tdatainsulin[".geocodingEnabled"] = false;










// view page pdf
$tdatainsulin[".isViewPagePDF"] = true;
$tdatainsulin[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainsulin[".isPrinterPagePDF"] = true;
$tdatainsulin[".nPrinterPagePDFScale"] = 100;


$tdatainsulin[".pageSize"] = 20;

$tdatainsulin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsulin[".strOrderBy"] = $tstrOrderBy;

$tdatainsulin[".orderindexes"] = array();

$tdatainsulin[".sqlHead"] = "SELECT id,  `date`,  `time`,  time_period,  `type`,  doseage,  inject_type,  `comment`";
$tdatainsulin[".sqlFrom"] = "FROM insulin";
$tdatainsulin[".sqlWhereExpr"] = "";
$tdatainsulin[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainsulin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsulin[".arrGroupsPerPage"] = $arrGPP;

$tdatainsulin[".highlightSearchResults"] = true;

$tableKeysinsulin = array();
$tdatainsulin[".Keys"] = $tableKeysinsulin;

$tdatainsulin[".listFields"] = array();
$tdatainsulin[".listFields"][] = "id";
$tdatainsulin[".listFields"][] = "date";
$tdatainsulin[".listFields"][] = "time";
$tdatainsulin[".listFields"][] = "time_period";
$tdatainsulin[".listFields"][] = "type";
$tdatainsulin[".listFields"][] = "doseage";
$tdatainsulin[".listFields"][] = "inject_type";
$tdatainsulin[".listFields"][] = "comment";

$tdatainsulin[".hideMobileList"] = array();


$tdatainsulin[".viewFields"] = array();
$tdatainsulin[".viewFields"][] = "id";
$tdatainsulin[".viewFields"][] = "date";
$tdatainsulin[".viewFields"][] = "time";
$tdatainsulin[".viewFields"][] = "time_period";
$tdatainsulin[".viewFields"][] = "type";
$tdatainsulin[".viewFields"][] = "doseage";
$tdatainsulin[".viewFields"][] = "inject_type";
$tdatainsulin[".viewFields"][] = "comment";

$tdatainsulin[".addFields"] = array();
$tdatainsulin[".addFields"][] = "date";
$tdatainsulin[".addFields"][] = "time";
$tdatainsulin[".addFields"][] = "time_period";
$tdatainsulin[".addFields"][] = "type";
$tdatainsulin[".addFields"][] = "doseage";
$tdatainsulin[".addFields"][] = "inject_type";
$tdatainsulin[".addFields"][] = "comment";

$tdatainsulin[".masterListFields"] = array();
$tdatainsulin[".masterListFields"][] = "id";
$tdatainsulin[".masterListFields"][] = "date";
$tdatainsulin[".masterListFields"][] = "time";
$tdatainsulin[".masterListFields"][] = "time_period";
$tdatainsulin[".masterListFields"][] = "type";
$tdatainsulin[".masterListFields"][] = "doseage";
$tdatainsulin[".masterListFields"][] = "inject_type";
$tdatainsulin[".masterListFields"][] = "comment";

$tdatainsulin[".inlineAddFields"] = array();
$tdatainsulin[".inlineAddFields"][] = "date";
$tdatainsulin[".inlineAddFields"][] = "time";
$tdatainsulin[".inlineAddFields"][] = "time_period";
$tdatainsulin[".inlineAddFields"][] = "type";
$tdatainsulin[".inlineAddFields"][] = "doseage";
$tdatainsulin[".inlineAddFields"][] = "inject_type";
$tdatainsulin[".inlineAddFields"][] = "comment";

$tdatainsulin[".editFields"] = array();
$tdatainsulin[".editFields"][] = "id";
$tdatainsulin[".editFields"][] = "date";
$tdatainsulin[".editFields"][] = "time";
$tdatainsulin[".editFields"][] = "time_period";
$tdatainsulin[".editFields"][] = "type";
$tdatainsulin[".editFields"][] = "doseage";
$tdatainsulin[".editFields"][] = "inject_type";
$tdatainsulin[".editFields"][] = "comment";

$tdatainsulin[".inlineEditFields"] = array();
$tdatainsulin[".inlineEditFields"][] = "id";
$tdatainsulin[".inlineEditFields"][] = "date";
$tdatainsulin[".inlineEditFields"][] = "time";
$tdatainsulin[".inlineEditFields"][] = "time_period";
$tdatainsulin[".inlineEditFields"][] = "type";
$tdatainsulin[".inlineEditFields"][] = "doseage";
$tdatainsulin[".inlineEditFields"][] = "inject_type";
$tdatainsulin[".inlineEditFields"][] = "comment";

$tdatainsulin[".exportFields"] = array();
$tdatainsulin[".exportFields"][] = "id";
$tdatainsulin[".exportFields"][] = "date";
$tdatainsulin[".exportFields"][] = "time";
$tdatainsulin[".exportFields"][] = "time_period";
$tdatainsulin[".exportFields"][] = "type";
$tdatainsulin[".exportFields"][] = "doseage";
$tdatainsulin[".exportFields"][] = "inject_type";
$tdatainsulin[".exportFields"][] = "comment";

$tdatainsulin[".importFields"] = array();
$tdatainsulin[".importFields"][] = "id";
$tdatainsulin[".importFields"][] = "date";
$tdatainsulin[".importFields"][] = "time";
$tdatainsulin[".importFields"][] = "time_period";
$tdatainsulin[".importFields"][] = "type";
$tdatainsulin[".importFields"][] = "doseage";
$tdatainsulin[".importFields"][] = "inject_type";
$tdatainsulin[".importFields"][] = "comment";

$tdatainsulin[".printFields"] = array();
$tdatainsulin[".printFields"][] = "id";
$tdatainsulin[".printFields"][] = "date";
$tdatainsulin[".printFields"][] = "time";
$tdatainsulin[".printFields"][] = "time_period";
$tdatainsulin[".printFields"][] = "type";
$tdatainsulin[".printFields"][] = "doseage";
$tdatainsulin[".printFields"][] = "inject_type";
$tdatainsulin[".printFields"][] = "comment";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "insulin";
	$fdata["Label"] = GetFieldLabel("insulin","id");
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




	$tdatainsulin["id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "insulin";
	$fdata["Label"] = GetFieldLabel("insulin","date");
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

	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatainsulin["date"] = $fdata;
//	time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time";
	$fdata["GoodName"] = "time";
	$fdata["ownerTable"] = "insulin";
	$fdata["Label"] = GetFieldLabel("insulin","time");
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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
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




	$tdatainsulin["time"] = $fdata;
//	time_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time_period";
	$fdata["GoodName"] = "time_period";
	$fdata["ownerTable"] = "insulin";
	$fdata["Label"] = GetFieldLabel("insulin","time_period");
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
	$edata["LookupTable"] = "period_type";
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




	$tdatainsulin["time_period"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "insulin";
	$fdata["Label"] = GetFieldLabel("insulin","type");
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

		$fdata["strField"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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
	$edata["LookupTable"] = "insulin_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type";

	
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




	$tdatainsulin["type"] = $fdata;
//	doseage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "doseage";
	$fdata["GoodName"] = "doseage";
	$fdata["ownerTable"] = "insulin";
	$fdata["Label"] = GetFieldLabel("insulin","doseage");
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

		$fdata["strField"] = "doseage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doseage";

	
	
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




	$tdatainsulin["doseage"] = $fdata;
//	inject_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inject_type";
	$fdata["GoodName"] = "inject_type";
	$fdata["ownerTable"] = "insulin";
	$fdata["Label"] = GetFieldLabel("insulin","inject_type");
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

		$fdata["strField"] = "inject_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inject_type";

	
	
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
	$edata["LookupTable"] = "inject_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type";

	
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




	$tdatainsulin["inject_type"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "insulin";
	$fdata["Label"] = GetFieldLabel("insulin","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`comment`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatainsulin["comment"] = $fdata;


$tables_data["insulin"]=&$tdatainsulin;
$field_labels["insulin"] = &$fieldLabelsinsulin;
$fieldToolTips["insulin"] = &$fieldToolTipsinsulin;
$page_titles["insulin"] = &$pageTitlesinsulin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insulin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["insulin"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insulin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  `date`,  `time`,  time_period,  `type`,  doseage,  inject_type,  `comment`";
$proto0["m_strFrom"] = "FROM insulin";
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
	"m_strTable" => "insulin",
	"m_srcTableName" => "insulin"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "insulin";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "insulin",
	"m_srcTableName" => "insulin"
));

$proto7["m_sql"] = "`date`";
$proto7["m_srcTableName"] = "insulin";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "time",
	"m_strTable" => "insulin",
	"m_srcTableName" => "insulin"
));

$proto9["m_sql"] = "`time`";
$proto9["m_srcTableName"] = "insulin";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "time_period",
	"m_strTable" => "insulin",
	"m_srcTableName" => "insulin"
));

$proto11["m_sql"] = "time_period";
$proto11["m_srcTableName"] = "insulin";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "insulin",
	"m_srcTableName" => "insulin"
));

$proto13["m_sql"] = "`type`";
$proto13["m_srcTableName"] = "insulin";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "doseage",
	"m_strTable" => "insulin",
	"m_srcTableName" => "insulin"
));

$proto15["m_sql"] = "doseage";
$proto15["m_srcTableName"] = "insulin";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "inject_type",
	"m_strTable" => "insulin",
	"m_srcTableName" => "insulin"
));

$proto17["m_sql"] = "inject_type";
$proto17["m_srcTableName"] = "insulin";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "insulin",
	"m_srcTableName" => "insulin"
));

$proto19["m_sql"] = "`comment`";
$proto19["m_srcTableName"] = "insulin";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "insulin";
$proto22["m_srcTableName"] = "insulin";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "date";
$proto22["m_columns"][] = "time";
$proto22["m_columns"][] = "time_period";
$proto22["m_columns"][] = "type";
$proto22["m_columns"][] = "doseage";
$proto22["m_columns"][] = "inject_type";
$proto22["m_columns"][] = "comment";
$proto22["m_columns"][] = "user_id";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "insulin";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "insulin";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="insulin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insulin = createSqlQuery_insulin();



								

$tdatainsulin[".sqlquery"] = $queryData_insulin;

$tableEvents["insulin"] = new eventsBase;
$tdatainsulin[".hasEvents"] = false;

?>