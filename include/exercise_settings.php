<?php
require_once(getabspath("classes/cipherer.php"));




$tdataexercise = array();
	$tdataexercise[".truncateText"] = true;
	$tdataexercise[".NumberOfChars"] = 80;
	$tdataexercise[".ShortName"] = "exercise";
	$tdataexercise[".OwnerID"] = "";
	$tdataexercise[".OriginalTable"] = "exercise";

//	field labels
$fieldLabelsexercise = array();
$fieldToolTipsexercise = array();
$pageTitlesexercise = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsexercise["English"] = array();
	$fieldToolTipsexercise["English"] = array();
	$pageTitlesexercise["English"] = array();
	$fieldLabelsexercise["English"]["date"] = "Date";
	$fieldToolTipsexercise["English"]["date"] = "";
	$fieldLabelsexercise["English"]["time"] = "Time";
	$fieldToolTipsexercise["English"]["time"] = "";
	$fieldLabelsexercise["English"]["type"] = "Type";
	$fieldToolTipsexercise["English"]["type"] = "";
	$fieldLabelsexercise["English"]["duration"] = "Duration";
	$fieldToolTipsexercise["English"]["duration"] = "";
	$fieldLabelsexercise["English"]["intensity"] = "Intensity";
	$fieldToolTipsexercise["English"]["intensity"] = "";
	$fieldLabelsexercise["English"]["id"] = "Id";
	$fieldToolTipsexercise["English"]["id"] = "";
	$fieldLabelsexercise["English"]["user_id"] = "User Id";
	$fieldToolTipsexercise["English"]["user_id"] = "";
	$fieldLabelsexercise["English"]["time_period"] = "Time Period";
	$fieldToolTipsexercise["English"]["time_period"] = "";
	$fieldLabelsexercise["English"]["comment"] = "Comment";
	$fieldToolTipsexercise["English"]["comment"] = "";
	if (count($fieldToolTipsexercise["English"]))
		$tdataexercise[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsexercise[""] = array();
	$fieldToolTipsexercise[""] = array();
	$pageTitlesexercise[""] = array();
	$fieldLabelsexercise[""]["date"] = "Date";
	$fieldToolTipsexercise[""]["date"] = "";
	$fieldLabelsexercise[""]["time"] = "Time";
	$fieldToolTipsexercise[""]["time"] = "";
	$fieldLabelsexercise[""]["type"] = "Type";
	$fieldToolTipsexercise[""]["type"] = "";
	$fieldLabelsexercise[""]["duration"] = "Duration";
	$fieldToolTipsexercise[""]["duration"] = "";
	$fieldLabelsexercise[""]["intensity"] = "Intensity";
	$fieldToolTipsexercise[""]["intensity"] = "";
	$fieldLabelsexercise[""]["id"] = "Id";
	$fieldToolTipsexercise[""]["id"] = "";
	$fieldLabelsexercise[""]["user_id"] = "User Id";
	$fieldToolTipsexercise[""]["user_id"] = "";
	$fieldLabelsexercise[""]["time_period"] = "Time Period";
	$fieldToolTipsexercise[""]["time_period"] = "";
	$fieldLabelsexercise[""]["comment"] = "Comment";
	$fieldToolTipsexercise[""]["comment"] = "";
	if (count($fieldToolTipsexercise[""]))
		$tdataexercise[".isUseToolTips"] = true;
}


	$tdataexercise[".NCSearch"] = true;



$tdataexercise[".shortTableName"] = "exercise";
$tdataexercise[".nSecOptions"] = 0;
$tdataexercise[".recsPerRowList"] = 1;
$tdataexercise[".recsPerRowPrint"] = 1;
$tdataexercise[".mainTableOwnerID"] = "";
$tdataexercise[".moveNext"] = 1;
$tdataexercise[".entityType"] = 0;

$tdataexercise[".strOriginalTableName"] = "exercise";




$tdataexercise[".showAddInPopup"] = false;

$tdataexercise[".showEditInPopup"] = false;

$tdataexercise[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataexercise[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataexercise[".fieldsForRegister"] = array();

$tdataexercise[".listAjax"] = false;

	$tdataexercise[".audit"] = false;

	$tdataexercise[".locking"] = false;

$tdataexercise[".edit"] = true;
$tdataexercise[".afterEditAction"] = 0;
$tdataexercise[".closePopupAfterEdit"] = 1;
$tdataexercise[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataexercise[".add"] = true;
$tdataexercise[".afterAddAction"] = 0;
$tdataexercise[".closePopupAfterAdd"] = 1;
$tdataexercise[".afterAddActionDetTable"] = "";

$tdataexercise[".list"] = true;

$tdataexercise[".inlineEdit"] = true;
$tdataexercise[".inlineAdd"] = true;
$tdataexercise[".copy"] = true;
$tdataexercise[".view"] = true;

$tdataexercise[".import"] = true;

$tdataexercise[".exportTo"] = true;

$tdataexercise[".printFriendly"] = true;

$tdataexercise[".delete"] = true;

$tdataexercise[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataexercise[".searchSaving"] = false;
//

if (isMobile()){
	$tdataexercise[".showSearchPanel"] = true;
}
else
	$tdataexercise[".showSearchPanel"] = false;

if (isMobile())
	$tdataexercise[".isUseAjaxSuggest"] = false;
else
	$tdataexercise[".isUseAjaxSuggest"] = true;

$tdataexercise[".rowHighlite"] = true;



$tdataexercise[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexercise[".isUseTimeForSearch"] = true;





$tdataexercise[".allSearchFields"] = array();
$tdataexercise[".filterFields"] = array();
$tdataexercise[".requiredSearchFields"] = array();

$tdataexercise[".allSearchFields"][] = "id";
	$tdataexercise[".allSearchFields"][] = "date";
	$tdataexercise[".allSearchFields"][] = "time";
	$tdataexercise[".allSearchFields"][] = "time_period";
	$tdataexercise[".allSearchFields"][] = "type";
	$tdataexercise[".allSearchFields"][] = "duration";
	$tdataexercise[".allSearchFields"][] = "intensity";
	$tdataexercise[".allSearchFields"][] = "comment";
	

$tdataexercise[".googleLikeFields"] = array();
$tdataexercise[".googleLikeFields"][] = "id";
$tdataexercise[".googleLikeFields"][] = "user_id";
$tdataexercise[".googleLikeFields"][] = "date";
$tdataexercise[".googleLikeFields"][] = "time";
$tdataexercise[".googleLikeFields"][] = "time_period";
$tdataexercise[".googleLikeFields"][] = "type";
$tdataexercise[".googleLikeFields"][] = "duration";
$tdataexercise[".googleLikeFields"][] = "intensity";
$tdataexercise[".googleLikeFields"][] = "comment";


$tdataexercise[".advSearchFields"] = array();
$tdataexercise[".advSearchFields"][] = "id";
$tdataexercise[".advSearchFields"][] = "date";
$tdataexercise[".advSearchFields"][] = "time";
$tdataexercise[".advSearchFields"][] = "time_period";
$tdataexercise[".advSearchFields"][] = "type";
$tdataexercise[".advSearchFields"][] = "duration";
$tdataexercise[".advSearchFields"][] = "intensity";
$tdataexercise[".advSearchFields"][] = "comment";

$tdataexercise[".tableType"] = "list";

$tdataexercise[".printerPageOrientation"] = 0;
$tdataexercise[".nPrinterPageScale"] = 100;

$tdataexercise[".nPrinterSplitRecords"] = 40;

$tdataexercise[".nPrinterPDFSplitRecords"] = 40;



$tdataexercise[".geocodingEnabled"] = false;










// view page pdf
$tdataexercise[".isViewPagePDF"] = true;
$tdataexercise[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataexercise[".isPrinterPagePDF"] = true;
$tdataexercise[".nPrinterPagePDFScale"] = 100;


$tdataexercise[".pageSize"] = 20;

$tdataexercise[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexercise[".strOrderBy"] = $tstrOrderBy;

$tdataexercise[".orderindexes"] = array();

$tdataexercise[".sqlHead"] = "SELECT id,  	user_id,  	`date`,  	`time`,  	time_period,  	`type`,  	duration,  	intensity,  	`comment`";
$tdataexercise[".sqlFrom"] = "FROM exercise";
$tdataexercise[".sqlWhereExpr"] = "";
$tdataexercise[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexercise[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexercise[".arrGroupsPerPage"] = $arrGPP;

$tdataexercise[".highlightSearchResults"] = true;

$tableKeysexercise = array();
$tableKeysexercise[] = "user_id";
$tdataexercise[".Keys"] = $tableKeysexercise;

$tdataexercise[".listFields"] = array();
$tdataexercise[".listFields"][] = "id";
$tdataexercise[".listFields"][] = "date";
$tdataexercise[".listFields"][] = "time";
$tdataexercise[".listFields"][] = "time_period";
$tdataexercise[".listFields"][] = "type";
$tdataexercise[".listFields"][] = "duration";
$tdataexercise[".listFields"][] = "intensity";
$tdataexercise[".listFields"][] = "comment";

$tdataexercise[".hideMobileList"] = array();


$tdataexercise[".viewFields"] = array();
$tdataexercise[".viewFields"][] = "id";
$tdataexercise[".viewFields"][] = "date";
$tdataexercise[".viewFields"][] = "time";
$tdataexercise[".viewFields"][] = "time_period";
$tdataexercise[".viewFields"][] = "type";
$tdataexercise[".viewFields"][] = "duration";
$tdataexercise[".viewFields"][] = "intensity";
$tdataexercise[".viewFields"][] = "comment";

$tdataexercise[".addFields"] = array();
$tdataexercise[".addFields"][] = "date";
$tdataexercise[".addFields"][] = "time";
$tdataexercise[".addFields"][] = "time_period";
$tdataexercise[".addFields"][] = "type";
$tdataexercise[".addFields"][] = "duration";
$tdataexercise[".addFields"][] = "intensity";
$tdataexercise[".addFields"][] = "comment";

$tdataexercise[".masterListFields"] = array();
$tdataexercise[".masterListFields"][] = "id";
$tdataexercise[".masterListFields"][] = "user_id";
$tdataexercise[".masterListFields"][] = "date";
$tdataexercise[".masterListFields"][] = "time";
$tdataexercise[".masterListFields"][] = "time_period";
$tdataexercise[".masterListFields"][] = "type";
$tdataexercise[".masterListFields"][] = "duration";
$tdataexercise[".masterListFields"][] = "intensity";
$tdataexercise[".masterListFields"][] = "comment";

$tdataexercise[".inlineAddFields"] = array();
$tdataexercise[".inlineAddFields"][] = "date";
$tdataexercise[".inlineAddFields"][] = "time";
$tdataexercise[".inlineAddFields"][] = "time_period";
$tdataexercise[".inlineAddFields"][] = "type";
$tdataexercise[".inlineAddFields"][] = "duration";
$tdataexercise[".inlineAddFields"][] = "intensity";
$tdataexercise[".inlineAddFields"][] = "comment";

$tdataexercise[".editFields"] = array();
$tdataexercise[".editFields"][] = "id";
$tdataexercise[".editFields"][] = "date";
$tdataexercise[".editFields"][] = "time";
$tdataexercise[".editFields"][] = "time_period";
$tdataexercise[".editFields"][] = "type";
$tdataexercise[".editFields"][] = "duration";
$tdataexercise[".editFields"][] = "intensity";
$tdataexercise[".editFields"][] = "comment";

$tdataexercise[".inlineEditFields"] = array();
$tdataexercise[".inlineEditFields"][] = "id";
$tdataexercise[".inlineEditFields"][] = "date";
$tdataexercise[".inlineEditFields"][] = "time";
$tdataexercise[".inlineEditFields"][] = "time_period";
$tdataexercise[".inlineEditFields"][] = "type";
$tdataexercise[".inlineEditFields"][] = "duration";
$tdataexercise[".inlineEditFields"][] = "intensity";
$tdataexercise[".inlineEditFields"][] = "comment";

$tdataexercise[".exportFields"] = array();
$tdataexercise[".exportFields"][] = "id";
$tdataexercise[".exportFields"][] = "date";
$tdataexercise[".exportFields"][] = "time";
$tdataexercise[".exportFields"][] = "time_period";
$tdataexercise[".exportFields"][] = "type";
$tdataexercise[".exportFields"][] = "duration";
$tdataexercise[".exportFields"][] = "intensity";
$tdataexercise[".exportFields"][] = "comment";

$tdataexercise[".importFields"] = array();
$tdataexercise[".importFields"][] = "id";
$tdataexercise[".importFields"][] = "date";
$tdataexercise[".importFields"][] = "time";
$tdataexercise[".importFields"][] = "time_period";
$tdataexercise[".importFields"][] = "type";
$tdataexercise[".importFields"][] = "duration";
$tdataexercise[".importFields"][] = "intensity";
$tdataexercise[".importFields"][] = "comment";

$tdataexercise[".printFields"] = array();
$tdataexercise[".printFields"][] = "id";
$tdataexercise[".printFields"][] = "date";
$tdataexercise[".printFields"][] = "time";
$tdataexercise[".printFields"][] = "time_period";
$tdataexercise[".printFields"][] = "type";
$tdataexercise[".printFields"][] = "duration";
$tdataexercise[".printFields"][] = "intensity";
$tdataexercise[".printFields"][] = "comment";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "exercise";
	$fdata["Label"] = GetFieldLabel("exercise","id");
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




	$tdataexercise["id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "exercise";
	$fdata["Label"] = GetFieldLabel("exercise","user_id");
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








	$tdataexercise["user_id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "exercise";
	$fdata["Label"] = GetFieldLabel("exercise","date");
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




	$tdataexercise["date"] = $fdata;
//	time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time";
	$fdata["GoodName"] = "time";
	$fdata["ownerTable"] = "exercise";
	$fdata["Label"] = GetFieldLabel("exercise","time");
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




	$tdataexercise["time"] = $fdata;
//	time_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_period";
	$fdata["GoodName"] = "time_period";
	$fdata["ownerTable"] = "exercise";
	$fdata["Label"] = GetFieldLabel("exercise","time_period");
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




	$tdataexercise["time_period"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "exercise";
	$fdata["Label"] = GetFieldLabel("exercise","type");
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "None";
	$edata["LookupValues"][] = "Low";
	$edata["LookupValues"][] = "Medium";
	$edata["LookupValues"][] = "High";

	
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




	$tdataexercise["type"] = $fdata;
//	duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "duration";
	$fdata["GoodName"] = "duration";
	$fdata["ownerTable"] = "exercise";
	$fdata["Label"] = GetFieldLabel("exercise","duration");
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

		$fdata["strField"] = "duration";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "duration";

	
	
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

	$edata = array("EditFormat" => "Time");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataexercise["duration"] = $fdata;
//	intensity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "intensity";
	$fdata["GoodName"] = "intensity";
	$fdata["ownerTable"] = "exercise";
	$fdata["Label"] = GetFieldLabel("exercise","intensity");
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

		$fdata["strField"] = "intensity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "intensity";

	
	
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




	$tdataexercise["intensity"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "exercise";
	$fdata["Label"] = GetFieldLabel("exercise","comment");
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




	$tdataexercise["comment"] = $fdata;


$tables_data["exercise"]=&$tdataexercise;
$field_labels["exercise"] = &$fieldLabelsexercise;
$fieldToolTips["exercise"] = &$fieldToolTipsexercise;
$page_titles["exercise"] = &$pageTitlesexercise;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exercise"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["exercise"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exercise()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	user_id,  	`date`,  	`time`,  	time_period,  	`type`,  	duration,  	intensity,  	`comment`";
$proto0["m_strFrom"] = "FROM exercise";
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
	"m_strTable" => "exercise",
	"m_srcTableName" => "exercise"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "exercise";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "exercise",
	"m_srcTableName" => "exercise"
));

$proto7["m_sql"] = "user_id";
$proto7["m_srcTableName"] = "exercise";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "exercise",
	"m_srcTableName" => "exercise"
));

$proto9["m_sql"] = "`date`";
$proto9["m_srcTableName"] = "exercise";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "time",
	"m_strTable" => "exercise",
	"m_srcTableName" => "exercise"
));

$proto11["m_sql"] = "`time`";
$proto11["m_srcTableName"] = "exercise";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "time_period",
	"m_strTable" => "exercise",
	"m_srcTableName" => "exercise"
));

$proto13["m_sql"] = "time_period";
$proto13["m_srcTableName"] = "exercise";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "exercise",
	"m_srcTableName" => "exercise"
));

$proto15["m_sql"] = "`type`";
$proto15["m_srcTableName"] = "exercise";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "duration",
	"m_strTable" => "exercise",
	"m_srcTableName" => "exercise"
));

$proto17["m_sql"] = "duration";
$proto17["m_srcTableName"] = "exercise";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "intensity",
	"m_strTable" => "exercise",
	"m_srcTableName" => "exercise"
));

$proto19["m_sql"] = "intensity";
$proto19["m_srcTableName"] = "exercise";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "exercise",
	"m_srcTableName" => "exercise"
));

$proto21["m_sql"] = "`comment`";
$proto21["m_srcTableName"] = "exercise";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "exercise";
$proto24["m_srcTableName"] = "exercise";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "user_id";
$proto24["m_columns"][] = "date";
$proto24["m_columns"][] = "time";
$proto24["m_columns"][] = "time_period";
$proto24["m_columns"][] = "type";
$proto24["m_columns"][] = "duration";
$proto24["m_columns"][] = "intensity";
$proto24["m_columns"][] = "comment";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "exercise";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "exercise";
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
$proto0["m_srcTableName"]="exercise";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exercise = createSqlQuery_exercise();



									

$tdataexercise[".sqlquery"] = $queryData_exercise;

$tableEvents["exercise"] = new eventsBase;
$tdataexercise[".hasEvents"] = false;

?>