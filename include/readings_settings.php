<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareadings = array();
	$tdatareadings[".ShortName"] = "readings";
	$tdatareadings[".OwnerID"] = "";
	$tdatareadings[".OriginalTable"] = "readings";

//	field labels
$fieldLabelsreadings = array();
$fieldToolTipsreadings = array();
$pageTitlesreadings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreadings["English"] = array();
	$fieldToolTipsreadings["English"] = array();
	$pageTitlesreadings["English"] = array();
	$fieldLabelsreadings["English"]["read_time"] = "Time";
	$fieldToolTipsreadings["English"]["read_time"] = "";
	$fieldLabelsreadings["English"]["time_period"] = "Time Period";
	$fieldToolTipsreadings["English"]["time_period"] = "";
	$fieldLabelsreadings["English"]["glucose_value"] = "Glucose Value";
	$fieldToolTipsreadings["English"]["glucose_value"] = "";
	$fieldLabelsreadings["English"]["sample_site"] = "Sample Site";
	$fieldToolTipsreadings["English"]["sample_site"] = "";
	$fieldLabelsreadings["English"]["last_meal"] = "Time from Last Meal";
	$fieldToolTipsreadings["English"]["last_meal"] = "";
	$fieldLabelsreadings["English"]["comment"] = "Comment";
	$fieldToolTipsreadings["English"]["comment"] = "";
	$fieldLabelsreadings["English"]["id"] = "Id";
	$fieldToolTipsreadings["English"]["id"] = "";
	$fieldLabelsreadings["English"]["read_date"] = "Date";
	$fieldToolTipsreadings["English"]["read_date"] = "";
	if (count($fieldToolTipsreadings["English"]))
		$tdatareadings[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreadings[""] = array();
	$fieldToolTipsreadings[""] = array();
	$pageTitlesreadings[""] = array();
	$fieldLabelsreadings[""]["id"] = "Id";
	$fieldToolTipsreadings[""]["id"] = "";
	$fieldLabelsreadings[""]["read_date"] = "Read Date";
	$fieldToolTipsreadings[""]["read_date"] = "";
	if (count($fieldToolTipsreadings[""]))
		$tdatareadings[".isUseToolTips"] = true;
}


	$tdatareadings[".NCSearch"] = true;



$tdatareadings[".shortTableName"] = "readings";
$tdatareadings[".nSecOptions"] = 0;
$tdatareadings[".recsPerRowList"] = 1;
$tdatareadings[".recsPerRowPrint"] = 1;
$tdatareadings[".mainTableOwnerID"] = "";
$tdatareadings[".moveNext"] = 1;
$tdatareadings[".entityType"] = 0;

$tdatareadings[".strOriginalTableName"] = "readings";




$tdatareadings[".showAddInPopup"] = false;

$tdatareadings[".showEditInPopup"] = false;

$tdatareadings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareadings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareadings[".fieldsForRegister"] = array();

$tdatareadings[".listAjax"] = false;

	$tdatareadings[".audit"] = false;

	$tdatareadings[".locking"] = false;

$tdatareadings[".edit"] = true;
$tdatareadings[".afterEditAction"] = 0;
$tdatareadings[".closePopupAfterEdit"] = 1;
$tdatareadings[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatareadings[".add"] = true;
$tdatareadings[".afterAddAction"] = 0;
$tdatareadings[".closePopupAfterAdd"] = 1;
$tdatareadings[".afterAddActionDetTable"] = "";

$tdatareadings[".list"] = true;

$tdatareadings[".inlineEdit"] = true;
$tdatareadings[".inlineAdd"] = true;
$tdatareadings[".view"] = true;

$tdatareadings[".import"] = true;

$tdatareadings[".exportTo"] = true;

$tdatareadings[".printFriendly"] = true;

$tdatareadings[".delete"] = true;

$tdatareadings[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareadings[".searchSaving"] = false;
//

if (isMobile()){
	$tdatareadings[".showSearchPanel"] = true;
}
else
	$tdatareadings[".showSearchPanel"] = false;

if (isMobile())
	$tdatareadings[".isUseAjaxSuggest"] = false;
else
	$tdatareadings[".isUseAjaxSuggest"] = true;

$tdatareadings[".rowHighlite"] = true;



$tdatareadings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareadings[".isUseTimeForSearch"] = true;





$tdatareadings[".allSearchFields"] = array();
$tdatareadings[".filterFields"] = array();
$tdatareadings[".requiredSearchFields"] = array();

$tdatareadings[".allSearchFields"][] = "read_date";
	$tdatareadings[".allSearchFields"][] = "read_time";
	$tdatareadings[".allSearchFields"][] = "time_period";
	$tdatareadings[".allSearchFields"][] = "glucose_value";
	$tdatareadings[".allSearchFields"][] = "sample_site";
	$tdatareadings[".allSearchFields"][] = "last_meal";
	$tdatareadings[".allSearchFields"][] = "comment";
	

$tdatareadings[".googleLikeFields"] = array();
$tdatareadings[".googleLikeFields"][] = "id";
$tdatareadings[".googleLikeFields"][] = "read_date";
$tdatareadings[".googleLikeFields"][] = "read_time";
$tdatareadings[".googleLikeFields"][] = "time_period";
$tdatareadings[".googleLikeFields"][] = "glucose_value";
$tdatareadings[".googleLikeFields"][] = "sample_site";
$tdatareadings[".googleLikeFields"][] = "last_meal";
$tdatareadings[".googleLikeFields"][] = "comment";


$tdatareadings[".advSearchFields"] = array();
$tdatareadings[".advSearchFields"][] = "read_date";
$tdatareadings[".advSearchFields"][] = "read_time";
$tdatareadings[".advSearchFields"][] = "time_period";
$tdatareadings[".advSearchFields"][] = "glucose_value";
$tdatareadings[".advSearchFields"][] = "sample_site";
$tdatareadings[".advSearchFields"][] = "last_meal";
$tdatareadings[".advSearchFields"][] = "comment";

$tdatareadings[".tableType"] = "list";

$tdatareadings[".printerPageOrientation"] = 0;
$tdatareadings[".nPrinterPageScale"] = 100;

$tdatareadings[".nPrinterSplitRecords"] = 40;

$tdatareadings[".nPrinterPDFSplitRecords"] = 40;



$tdatareadings[".geocodingEnabled"] = false;










// view page pdf
$tdatareadings[".isViewPagePDF"] = true;
$tdatareadings[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatareadings[".isPrinterPagePDF"] = true;
$tdatareadings[".nPrinterPagePDFScale"] = 100;


$tdatareadings[".pageSize"] = 20;

$tdatareadings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareadings[".strOrderBy"] = $tstrOrderBy;

$tdatareadings[".orderindexes"] = array();

$tdatareadings[".sqlHead"] = "SELECT id,  read_date,  read_time,  time_period,  glucose_value,  sample_site,  last_meal,  `comment`";
$tdatareadings[".sqlFrom"] = "FROM readings";
$tdatareadings[".sqlWhereExpr"] = "";
$tdatareadings[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareadings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareadings[".arrGroupsPerPage"] = $arrGPP;

$tdatareadings[".highlightSearchResults"] = true;

$tableKeysreadings = array();
$tableKeysreadings[] = "id";
$tdatareadings[".Keys"] = $tableKeysreadings;

$tdatareadings[".listFields"] = array();
$tdatareadings[".listFields"][] = "read_date";
$tdatareadings[".listFields"][] = "read_time";
$tdatareadings[".listFields"][] = "time_period";
$tdatareadings[".listFields"][] = "glucose_value";
$tdatareadings[".listFields"][] = "sample_site";
$tdatareadings[".listFields"][] = "last_meal";
$tdatareadings[".listFields"][] = "comment";

$tdatareadings[".hideMobileList"] = array();


$tdatareadings[".viewFields"] = array();
$tdatareadings[".viewFields"][] = "read_date";
$tdatareadings[".viewFields"][] = "read_time";
$tdatareadings[".viewFields"][] = "time_period";
$tdatareadings[".viewFields"][] = "glucose_value";
$tdatareadings[".viewFields"][] = "sample_site";
$tdatareadings[".viewFields"][] = "last_meal";
$tdatareadings[".viewFields"][] = "comment";

$tdatareadings[".addFields"] = array();
$tdatareadings[".addFields"][] = "read_date";
$tdatareadings[".addFields"][] = "read_time";
$tdatareadings[".addFields"][] = "time_period";
$tdatareadings[".addFields"][] = "glucose_value";
$tdatareadings[".addFields"][] = "sample_site";
$tdatareadings[".addFields"][] = "last_meal";
$tdatareadings[".addFields"][] = "comment";

$tdatareadings[".masterListFields"] = array();
$tdatareadings[".masterListFields"][] = "id";
$tdatareadings[".masterListFields"][] = "read_date";
$tdatareadings[".masterListFields"][] = "read_time";
$tdatareadings[".masterListFields"][] = "time_period";
$tdatareadings[".masterListFields"][] = "glucose_value";
$tdatareadings[".masterListFields"][] = "sample_site";
$tdatareadings[".masterListFields"][] = "last_meal";
$tdatareadings[".masterListFields"][] = "comment";

$tdatareadings[".inlineAddFields"] = array();
$tdatareadings[".inlineAddFields"][] = "read_date";
$tdatareadings[".inlineAddFields"][] = "read_time";
$tdatareadings[".inlineAddFields"][] = "time_period";
$tdatareadings[".inlineAddFields"][] = "glucose_value";
$tdatareadings[".inlineAddFields"][] = "sample_site";
$tdatareadings[".inlineAddFields"][] = "last_meal";
$tdatareadings[".inlineAddFields"][] = "comment";

$tdatareadings[".editFields"] = array();
$tdatareadings[".editFields"][] = "read_date";
$tdatareadings[".editFields"][] = "read_time";
$tdatareadings[".editFields"][] = "time_period";
$tdatareadings[".editFields"][] = "glucose_value";
$tdatareadings[".editFields"][] = "sample_site";
$tdatareadings[".editFields"][] = "last_meal";
$tdatareadings[".editFields"][] = "comment";

$tdatareadings[".inlineEditFields"] = array();
$tdatareadings[".inlineEditFields"][] = "read_date";
$tdatareadings[".inlineEditFields"][] = "read_time";
$tdatareadings[".inlineEditFields"][] = "time_period";
$tdatareadings[".inlineEditFields"][] = "glucose_value";
$tdatareadings[".inlineEditFields"][] = "sample_site";
$tdatareadings[".inlineEditFields"][] = "last_meal";
$tdatareadings[".inlineEditFields"][] = "comment";

$tdatareadings[".exportFields"] = array();
$tdatareadings[".exportFields"][] = "read_date";
$tdatareadings[".exportFields"][] = "read_time";
$tdatareadings[".exportFields"][] = "time_period";
$tdatareadings[".exportFields"][] = "glucose_value";
$tdatareadings[".exportFields"][] = "sample_site";
$tdatareadings[".exportFields"][] = "last_meal";
$tdatareadings[".exportFields"][] = "comment";

$tdatareadings[".importFields"] = array();
$tdatareadings[".importFields"][] = "read_date";
$tdatareadings[".importFields"][] = "read_time";
$tdatareadings[".importFields"][] = "time_period";
$tdatareadings[".importFields"][] = "glucose_value";
$tdatareadings[".importFields"][] = "sample_site";
$tdatareadings[".importFields"][] = "last_meal";
$tdatareadings[".importFields"][] = "comment";

$tdatareadings[".printFields"] = array();
$tdatareadings[".printFields"][] = "read_date";
$tdatareadings[".printFields"][] = "read_time";
$tdatareadings[".printFields"][] = "time_period";
$tdatareadings[".printFields"][] = "glucose_value";
$tdatareadings[".printFields"][] = "sample_site";
$tdatareadings[".printFields"][] = "last_meal";
$tdatareadings[".printFields"][] = "comment";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("readings","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
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








	$tdatareadings["id"] = $fdata;
//	read_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "read_date";
	$fdata["GoodName"] = "read_date";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("readings","read_date");
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

		$fdata["strField"] = "read_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "read_date";

	
	
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




	$tdatareadings["read_date"] = $fdata;
//	read_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "read_time";
	$fdata["GoodName"] = "read_time";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("readings","read_time");
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

		$fdata["strField"] = "read_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "read_time";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
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




	$tdatareadings["read_time"] = $fdata;
//	time_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time_period";
	$fdata["GoodName"] = "time_period";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("readings","time_period");
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

	
	
	
	
	
	
		$edata["controlWidth"] = 114;

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




	$tdatareadings["time_period"] = $fdata;
//	glucose_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "glucose_value";
	$fdata["GoodName"] = "glucose_value";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("readings","glucose_value");
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

		$fdata["strField"] = "glucose_value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "glucose_value";

	
	
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




	$tdatareadings["glucose_value"] = $fdata;
//	sample_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sample_site";
	$fdata["GoodName"] = "sample_site";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("readings","sample_site");
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

		$fdata["strField"] = "sample_site";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sample_site";

	
	
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
	$edata["LookupTable"] = "site_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "site";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "site";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 124;

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




	$tdatareadings["sample_site"] = $fdata;
//	last_meal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "last_meal";
	$fdata["GoodName"] = "last_meal";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("readings","last_meal");
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

		$fdata["strField"] = "last_meal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_meal";

	
	
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
	$edata["LookupValues"][] = "0:00";
	$edata["LookupValues"][] = "0:15";
	$edata["LookupValues"][] = "0:30";
	$edata["LookupValues"][] = "0:45";
	$edata["LookupValues"][] = "1:00";
	$edata["LookupValues"][] = "1:15";
	$edata["LookupValues"][] = "1:30";
	$edata["LookupValues"][] = "1:45";
	$edata["LookupValues"][] = "2:00";
	$edata["LookupValues"][] = "2:15";
	$edata["LookupValues"][] = "2:30";
	$edata["LookupValues"][] = "2:45";
	$edata["LookupValues"][] = "3:00";
	$edata["LookupValues"][] = "3:15";
	$edata["LookupValues"][] = "3:30";
	$edata["LookupValues"][] = "3:45";
	$edata["LookupValues"][] = "4:00";
	$edata["LookupValues"][] = ">4:00";

	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 114;

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




	$tdatareadings["last_meal"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("readings","comment");
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

	
	
	
				$edata["nRows"] = 11;
			$edata["nCols"] = 104;

	
	
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




	$tdatareadings["comment"] = $fdata;


$tables_data["readings"]=&$tdatareadings;
$field_labels["readings"] = &$fieldLabelsreadings;
$fieldToolTips["readings"] = &$fieldToolTipsreadings;
$page_titles["readings"] = &$pageTitlesreadings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["readings"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["readings"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_readings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  read_date,  read_time,  time_period,  glucose_value,  sample_site,  last_meal,  `comment`";
$proto0["m_strFrom"] = "FROM readings";
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
	"m_strTable" => "readings",
	"m_srcTableName" => "readings"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "readings";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "read_date",
	"m_strTable" => "readings",
	"m_srcTableName" => "readings"
));

$proto7["m_sql"] = "read_date";
$proto7["m_srcTableName"] = "readings";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "read_time",
	"m_strTable" => "readings",
	"m_srcTableName" => "readings"
));

$proto9["m_sql"] = "read_time";
$proto9["m_srcTableName"] = "readings";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "time_period",
	"m_strTable" => "readings",
	"m_srcTableName" => "readings"
));

$proto11["m_sql"] = "time_period";
$proto11["m_srcTableName"] = "readings";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "glucose_value",
	"m_strTable" => "readings",
	"m_srcTableName" => "readings"
));

$proto13["m_sql"] = "glucose_value";
$proto13["m_srcTableName"] = "readings";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sample_site",
	"m_strTable" => "readings",
	"m_srcTableName" => "readings"
));

$proto15["m_sql"] = "sample_site";
$proto15["m_srcTableName"] = "readings";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "last_meal",
	"m_strTable" => "readings",
	"m_srcTableName" => "readings"
));

$proto17["m_sql"] = "last_meal";
$proto17["m_srcTableName"] = "readings";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "readings",
	"m_srcTableName" => "readings"
));

$proto19["m_sql"] = "`comment`";
$proto19["m_srcTableName"] = "readings";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "readings";
$proto22["m_srcTableName"] = "readings";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "read_date";
$proto22["m_columns"][] = "read_time";
$proto22["m_columns"][] = "time_period";
$proto22["m_columns"][] = "glucose_value";
$proto22["m_columns"][] = "sample_site";
$proto22["m_columns"][] = "last_meal";
$proto22["m_columns"][] = "comment";
$proto22["m_columns"][] = "user_id";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "readings";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "readings";
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
$proto0["m_srcTableName"]="readings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_readings = createSqlQuery_readings();



								

$tdatareadings[".sqlquery"] = $queryData_readings;

$tableEvents["readings"] = new eventsBase;
$tdatareadings[".hasEvents"] = false;

?>