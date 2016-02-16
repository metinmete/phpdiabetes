<?php
require_once(getabspath("classes/cipherer.php"));




$tdataReadings_Chart = array();
	$tdataReadings_Chart[".ShortName"] = "Readings_Chart";
	$tdataReadings_Chart[".OwnerID"] = "";
	$tdataReadings_Chart[".OriginalTable"] = "readings";

//	field labels
$fieldLabelsReadings_Chart = array();
$fieldToolTipsReadings_Chart = array();
$pageTitlesReadings_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReadings_Chart["English"] = array();
	$fieldToolTipsReadings_Chart["English"] = array();
	$pageTitlesReadings_Chart["English"] = array();
	$fieldLabelsReadings_Chart["English"]["read_date"] = "Read Date";
	$fieldToolTipsReadings_Chart["English"]["read_date"] = "";
	$fieldLabelsReadings_Chart["English"]["read_time"] = "Read Time";
	$fieldToolTipsReadings_Chart["English"]["read_time"] = "";
	$fieldLabelsReadings_Chart["English"]["glucose_value"] = "Glucose Value";
	$fieldToolTipsReadings_Chart["English"]["glucose_value"] = "";
	$fieldLabelsReadings_Chart["English"]["id"] = "Id";
	$fieldToolTipsReadings_Chart["English"]["id"] = "";
	$fieldLabelsReadings_Chart["English"]["time_period"] = "Time Period";
	$fieldToolTipsReadings_Chart["English"]["time_period"] = "";
	$fieldLabelsReadings_Chart["English"]["sample_site"] = "Sample Site";
	$fieldToolTipsReadings_Chart["English"]["sample_site"] = "";
	$fieldLabelsReadings_Chart["English"]["last_meal"] = "Last Meal";
	$fieldToolTipsReadings_Chart["English"]["last_meal"] = "";
	$fieldLabelsReadings_Chart["English"]["comment"] = "Comment";
	$fieldToolTipsReadings_Chart["English"]["comment"] = "";
	if (count($fieldToolTipsReadings_Chart["English"]))
		$tdataReadings_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsReadings_Chart[""] = array();
	$fieldToolTipsReadings_Chart[""] = array();
	$pageTitlesReadings_Chart[""] = array();
	$fieldLabelsReadings_Chart[""]["read_date"] = "Read Date";
	$fieldToolTipsReadings_Chart[""]["read_date"] = "";
	$fieldLabelsReadings_Chart[""]["read_time"] = "Read Time";
	$fieldToolTipsReadings_Chart[""]["read_time"] = "";
	$fieldLabelsReadings_Chart[""]["glucose_value"] = "Glucose Value";
	$fieldToolTipsReadings_Chart[""]["glucose_value"] = "";
	$fieldLabelsReadings_Chart[""]["id"] = "Id";
	$fieldToolTipsReadings_Chart[""]["id"] = "";
	$fieldLabelsReadings_Chart[""]["time_period"] = "Time Period";
	$fieldToolTipsReadings_Chart[""]["time_period"] = "";
	$fieldLabelsReadings_Chart[""]["sample_site"] = "Sample Site";
	$fieldToolTipsReadings_Chart[""]["sample_site"] = "";
	$fieldLabelsReadings_Chart[""]["last_meal"] = "Last Meal";
	$fieldToolTipsReadings_Chart[""]["last_meal"] = "";
	$fieldLabelsReadings_Chart[""]["comment"] = "Comment";
	$fieldToolTipsReadings_Chart[""]["comment"] = "";
	if (count($fieldToolTipsReadings_Chart[""]))
		$tdataReadings_Chart[".isUseToolTips"] = true;
}


	$tdataReadings_Chart[".NCSearch"] = true;

	$tdataReadings_Chart[".ChartRefreshTime"] = 0;


$tdataReadings_Chart[".shortTableName"] = "Readings_Chart";
$tdataReadings_Chart[".nSecOptions"] = 0;
$tdataReadings_Chart[".recsPerRowList"] = 1;
$tdataReadings_Chart[".recsPerRowPrint"] = 1;
$tdataReadings_Chart[".mainTableOwnerID"] = "";
$tdataReadings_Chart[".moveNext"] = 1;
$tdataReadings_Chart[".entityType"] = 3;

$tdataReadings_Chart[".strOriginalTableName"] = "readings";




$tdataReadings_Chart[".showAddInPopup"] = false;

$tdataReadings_Chart[".showEditInPopup"] = false;

$tdataReadings_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataReadings_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataReadings_Chart[".fieldsForRegister"] = array();

$tdataReadings_Chart[".listAjax"] = false;

	$tdataReadings_Chart[".audit"] = false;

	$tdataReadings_Chart[".locking"] = false;


$tdataReadings_Chart[".add"] = true;
$tdataReadings_Chart[".afterAddAction"] = 1;
$tdataReadings_Chart[".closePopupAfterAdd"] = 1;
$tdataReadings_Chart[".afterAddActionDetTable"] = "";

$tdataReadings_Chart[".list"] = true;

$tdataReadings_Chart[".inlineAdd"] = true;





$tdataReadings_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataReadings_Chart[".searchSaving"] = false;
//

$tdataReadings_Chart[".showSearchPanel"] = true;
		$tdataReadings_Chart[".flexibleSearch"] = true;

if (isMobile())
	$tdataReadings_Chart[".isUseAjaxSuggest"] = false;
else
	$tdataReadings_Chart[".isUseAjaxSuggest"] = true;




$tdataReadings_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReadings_Chart[".isUseTimeForSearch"] = true;





$tdataReadings_Chart[".allSearchFields"] = array();
$tdataReadings_Chart[".filterFields"] = array();
$tdataReadings_Chart[".requiredSearchFields"] = array();

$tdataReadings_Chart[".allSearchFields"][] = "time_period";
	$tdataReadings_Chart[".allSearchFields"][] = "sample_site";
	$tdataReadings_Chart[".allSearchFields"][] = "last_meal";
	$tdataReadings_Chart[".allSearchFields"][] = "comment";
	

$tdataReadings_Chart[".googleLikeFields"] = array();
$tdataReadings_Chart[".googleLikeFields"][] = "read_date";
$tdataReadings_Chart[".googleLikeFields"][] = "read_time";
$tdataReadings_Chart[".googleLikeFields"][] = "glucose_value";
$tdataReadings_Chart[".googleLikeFields"][] = "id";
$tdataReadings_Chart[".googleLikeFields"][] = "time_period";
$tdataReadings_Chart[".googleLikeFields"][] = "sample_site";
$tdataReadings_Chart[".googleLikeFields"][] = "last_meal";
$tdataReadings_Chart[".googleLikeFields"][] = "comment";


$tdataReadings_Chart[".advSearchFields"] = array();
$tdataReadings_Chart[".advSearchFields"][] = "time_period";
$tdataReadings_Chart[".advSearchFields"][] = "sample_site";
$tdataReadings_Chart[".advSearchFields"][] = "last_meal";
$tdataReadings_Chart[".advSearchFields"][] = "comment";

$tdataReadings_Chart[".tableType"] = "chart";

$tdataReadings_Chart[".printerPageOrientation"] = 0;
$tdataReadings_Chart[".nPrinterPageScale"] = 100;

$tdataReadings_Chart[".nPrinterSplitRecords"] = 40;

$tdataReadings_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdataReadings_Chart[".geocodingEnabled"] = false;



// chart settings
$tdataReadings_Chart[".chartType"] = "Line";
// end of chart settings







// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY read_date DESC, read_time DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReadings_Chart[".strOrderBy"] = $tstrOrderBy;

$tdataReadings_Chart[".orderindexes"] = array();
$tdataReadings_Chart[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "read_date");
$tdataReadings_Chart[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "read_time");

$tdataReadings_Chart[".sqlHead"] = "SELECT read_date,  read_time,  glucose_value,  id,  time_period,  sample_site,  last_meal,  `comment`";
$tdataReadings_Chart[".sqlFrom"] = "FROM readings";
$tdataReadings_Chart[".sqlWhereExpr"] = "";
$tdataReadings_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReadings_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReadings_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdataReadings_Chart[".highlightSearchResults"] = true;

$tableKeysReadings_Chart = array();
$tdataReadings_Chart[".Keys"] = $tableKeysReadings_Chart;

$tdataReadings_Chart[".listFields"] = array();
$tdataReadings_Chart[".listFields"][] = "read_date";
$tdataReadings_Chart[".listFields"][] = "read_time";
$tdataReadings_Chart[".listFields"][] = "glucose_value";
$tdataReadings_Chart[".listFields"][] = "id";
$tdataReadings_Chart[".listFields"][] = "time_period";
$tdataReadings_Chart[".listFields"][] = "sample_site";
$tdataReadings_Chart[".listFields"][] = "last_meal";
$tdataReadings_Chart[".listFields"][] = "comment";

$tdataReadings_Chart[".hideMobileList"] = array();


$tdataReadings_Chart[".viewFields"] = array();
$tdataReadings_Chart[".viewFields"][] = "read_date";
$tdataReadings_Chart[".viewFields"][] = "read_time";
$tdataReadings_Chart[".viewFields"][] = "glucose_value";
$tdataReadings_Chart[".viewFields"][] = "id";
$tdataReadings_Chart[".viewFields"][] = "time_period";
$tdataReadings_Chart[".viewFields"][] = "sample_site";
$tdataReadings_Chart[".viewFields"][] = "last_meal";
$tdataReadings_Chart[".viewFields"][] = "comment";

$tdataReadings_Chart[".addFields"] = array();
$tdataReadings_Chart[".addFields"][] = "read_date";
$tdataReadings_Chart[".addFields"][] = "read_time";
$tdataReadings_Chart[".addFields"][] = "glucose_value";
$tdataReadings_Chart[".addFields"][] = "time_period";
$tdataReadings_Chart[".addFields"][] = "sample_site";
$tdataReadings_Chart[".addFields"][] = "last_meal";
$tdataReadings_Chart[".addFields"][] = "comment";

$tdataReadings_Chart[".masterListFields"] = array();
$tdataReadings_Chart[".masterListFields"][] = "read_date";
$tdataReadings_Chart[".masterListFields"][] = "read_time";
$tdataReadings_Chart[".masterListFields"][] = "glucose_value";
$tdataReadings_Chart[".masterListFields"][] = "id";
$tdataReadings_Chart[".masterListFields"][] = "time_period";
$tdataReadings_Chart[".masterListFields"][] = "sample_site";
$tdataReadings_Chart[".masterListFields"][] = "last_meal";
$tdataReadings_Chart[".masterListFields"][] = "comment";

$tdataReadings_Chart[".inlineAddFields"] = array();
$tdataReadings_Chart[".inlineAddFields"][] = "read_date";
$tdataReadings_Chart[".inlineAddFields"][] = "read_time";
$tdataReadings_Chart[".inlineAddFields"][] = "glucose_value";
$tdataReadings_Chart[".inlineAddFields"][] = "time_period";
$tdataReadings_Chart[".inlineAddFields"][] = "sample_site";
$tdataReadings_Chart[".inlineAddFields"][] = "last_meal";
$tdataReadings_Chart[".inlineAddFields"][] = "comment";

$tdataReadings_Chart[".editFields"] = array();
$tdataReadings_Chart[".editFields"][] = "read_date";
$tdataReadings_Chart[".editFields"][] = "read_time";
$tdataReadings_Chart[".editFields"][] = "glucose_value";
$tdataReadings_Chart[".editFields"][] = "time_period";
$tdataReadings_Chart[".editFields"][] = "sample_site";
$tdataReadings_Chart[".editFields"][] = "last_meal";
$tdataReadings_Chart[".editFields"][] = "comment";

$tdataReadings_Chart[".inlineEditFields"] = array();
$tdataReadings_Chart[".inlineEditFields"][] = "read_date";
$tdataReadings_Chart[".inlineEditFields"][] = "read_time";
$tdataReadings_Chart[".inlineEditFields"][] = "glucose_value";
$tdataReadings_Chart[".inlineEditFields"][] = "time_period";
$tdataReadings_Chart[".inlineEditFields"][] = "sample_site";
$tdataReadings_Chart[".inlineEditFields"][] = "last_meal";
$tdataReadings_Chart[".inlineEditFields"][] = "comment";

$tdataReadings_Chart[".exportFields"] = array();
$tdataReadings_Chart[".exportFields"][] = "read_date";
$tdataReadings_Chart[".exportFields"][] = "read_time";
$tdataReadings_Chart[".exportFields"][] = "glucose_value";
$tdataReadings_Chart[".exportFields"][] = "id";
$tdataReadings_Chart[".exportFields"][] = "time_period";
$tdataReadings_Chart[".exportFields"][] = "sample_site";
$tdataReadings_Chart[".exportFields"][] = "last_meal";
$tdataReadings_Chart[".exportFields"][] = "comment";

$tdataReadings_Chart[".importFields"] = array();
$tdataReadings_Chart[".importFields"][] = "read_date";
$tdataReadings_Chart[".importFields"][] = "read_time";
$tdataReadings_Chart[".importFields"][] = "glucose_value";
$tdataReadings_Chart[".importFields"][] = "id";
$tdataReadings_Chart[".importFields"][] = "time_period";
$tdataReadings_Chart[".importFields"][] = "sample_site";
$tdataReadings_Chart[".importFields"][] = "last_meal";
$tdataReadings_Chart[".importFields"][] = "comment";

$tdataReadings_Chart[".printFields"] = array();
$tdataReadings_Chart[".printFields"][] = "read_date";
$tdataReadings_Chart[".printFields"][] = "read_time";
$tdataReadings_Chart[".printFields"][] = "glucose_value";
$tdataReadings_Chart[".printFields"][] = "id";
$tdataReadings_Chart[".printFields"][] = "time_period";
$tdataReadings_Chart[".printFields"][] = "sample_site";
$tdataReadings_Chart[".printFields"][] = "last_meal";
$tdataReadings_Chart[".printFields"][] = "comment";

//	read_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "read_date";
	$fdata["GoodName"] = "read_date";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("Readings_Chart","read_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "read_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "read_date";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataReadings_Chart["read_date"] = $fdata;
//	read_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "read_time";
	$fdata["GoodName"] = "read_time";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("Readings_Chart","read_time");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "read_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "read_time";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataReadings_Chart["read_time"] = $fdata;
//	glucose_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "glucose_value";
	$fdata["GoodName"] = "glucose_value";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("Readings_Chart","glucose_value");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "glucose_value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "glucose_value";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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








	$tdataReadings_Chart["glucose_value"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("Readings_Chart","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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








	$tdataReadings_Chart["id"] = $fdata;
//	time_period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_period";
	$fdata["GoodName"] = "time_period";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("Readings_Chart","time_period");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataReadings_Chart["time_period"] = $fdata;
//	sample_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sample_site";
	$fdata["GoodName"] = "sample_site";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("Readings_Chart","sample_site");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataReadings_Chart["sample_site"] = $fdata;
//	last_meal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "last_meal";
	$fdata["GoodName"] = "last_meal";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("Readings_Chart","last_meal");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataReadings_Chart["last_meal"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "readings";
	$fdata["Label"] = GetFieldLabel("Readings_Chart","comment");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataReadings_Chart["comment"] = $fdata;

	$tdataReadings_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Readings Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">glucose_value</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataReadings_Chart[".chartXml"] .= '</attr>';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">read_time</attr>
	</attr>';
	$tdataReadings_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdataReadings_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("Glucose Readings").'</attr>
<attr value="foot">'.xmlencode("Date").'</attr>
<attr value="y_axis_label">'.xmlencode("glucose_value").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">9DE7FF</attr>
<attr value="color72">9DE7FF</attr>
<attr value="color81">DDF2FF</attr>
<attr value="color82">DDF2FF</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>
<attr value="cscroll">false</attr>
<attr value="maxbarscroll">10</attr>';
$tdataReadings_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">read_date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Readings_Chart","read_date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">read_time</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Readings_Chart","read_time")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">glucose_value</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Readings_Chart","glucose_value")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Readings_Chart","id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">time_period</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Readings_Chart","time_period")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">sample_site</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Readings_Chart","sample_site")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="6">
		<attr value="name">last_meal</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Readings_Chart","last_meal")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataReadings_Chart[".chartXml"] .= '<attr value="7">
		<attr value="name">comment</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Readings_Chart","comment")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataReadings_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Readings Chart</attr>
<attr value="short_table_name">Readings_Chart</attr>
</attr>

</chart>';

$tables_data["Readings Chart"]=&$tdataReadings_Chart;
$field_labels["Readings_Chart"] = &$fieldLabelsReadings_Chart;
$fieldToolTips["Readings Chart"] = &$fieldToolTipsReadings_Chart;
$page_titles["Readings_Chart"] = &$pageTitlesReadings_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Readings Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Readings Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Readings_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "read_date,  read_time,  glucose_value,  id,  time_period,  sample_site,  last_meal,  `comment`";
$proto0["m_strFrom"] = "FROM readings";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY read_date DESC, read_time DESC";
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
	"m_strName" => "read_date",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto5["m_sql"] = "read_date";
$proto5["m_srcTableName"] = "Readings Chart";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "read_time",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto7["m_sql"] = "read_time";
$proto7["m_srcTableName"] = "Readings Chart";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "glucose_value",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto9["m_sql"] = "glucose_value";
$proto9["m_srcTableName"] = "Readings Chart";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto11["m_sql"] = "id";
$proto11["m_srcTableName"] = "Readings Chart";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "time_period",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto13["m_sql"] = "time_period";
$proto13["m_srcTableName"] = "Readings Chart";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sample_site",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto15["m_sql"] = "sample_site";
$proto15["m_srcTableName"] = "Readings Chart";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "last_meal",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto17["m_sql"] = "last_meal";
$proto17["m_srcTableName"] = "Readings Chart";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto19["m_sql"] = "`comment`";
$proto19["m_srcTableName"] = "Readings Chart";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "readings";
$proto22["m_srcTableName"] = "Readings Chart";
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
$proto21["m_srcTableName"] = "Readings Chart";
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
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "read_date",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 0;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "read_time",
	"m_strTable" => "readings",
	"m_srcTableName" => "Readings Chart"
));

$proto27["m_column"]=$obj;
$proto27["m_bAsc"] = 0;
$proto27["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto27);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Readings Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Readings_Chart = createSqlQuery_Readings_Chart();



								

$tdataReadings_Chart[".sqlquery"] = $queryData_Readings_Chart;

$tableEvents["Readings Chart"] = new eventsBase;
$tdataReadings_Chart[".hasEvents"] = false;

?>