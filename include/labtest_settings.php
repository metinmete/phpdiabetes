<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalabtest = array();
	$tdatalabtest[".truncateText"] = true;
	$tdatalabtest[".NumberOfChars"] = 80;
	$tdatalabtest[".ShortName"] = "labtest";
	$tdatalabtest[".OwnerID"] = "";
	$tdatalabtest[".OriginalTable"] = "labtest";

//	field labels
$fieldLabelslabtest = array();
$fieldToolTipslabtest = array();
$pageTitleslabtest = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslabtest["English"] = array();
	$fieldToolTipslabtest["English"] = array();
	$pageTitleslabtest["English"] = array();
	$fieldLabelslabtest["English"]["user_id"] = "User Id";
	$fieldToolTipslabtest["English"]["user_id"] = "";
	$fieldLabelslabtest["English"]["date"] = "Date";
	$fieldToolTipslabtest["English"]["date"] = "";
	$fieldLabelslabtest["English"]["type"] = "Type";
	$fieldToolTipslabtest["English"]["type"] = "";
	$fieldLabelslabtest["English"]["result"] = "Result";
	$fieldToolTipslabtest["English"]["result"] = "";
	$fieldLabelslabtest["English"]["unit"] = "Unit";
	$fieldToolTipslabtest["English"]["unit"] = "";
	$fieldLabelslabtest["English"]["range"] = "Range";
	$fieldToolTipslabtest["English"]["range"] = "";
	$fieldLabelslabtest["English"]["comments"] = "Comments";
	$fieldToolTipslabtest["English"]["comments"] = "";
	$fieldLabelslabtest["English"]["id"] = "Id";
	$fieldToolTipslabtest["English"]["id"] = "";
	if (count($fieldToolTipslabtest["English"]))
		$tdatalabtest[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslabtest[""] = array();
	$fieldToolTipslabtest[""] = array();
	$pageTitleslabtest[""] = array();
	$fieldLabelslabtest[""]["user_id"] = "User Id";
	$fieldToolTipslabtest[""]["user_id"] = "";
	$fieldLabelslabtest[""]["date"] = "Date";
	$fieldToolTipslabtest[""]["date"] = "";
	$fieldLabelslabtest[""]["type"] = "Type";
	$fieldToolTipslabtest[""]["type"] = "";
	$fieldLabelslabtest[""]["result"] = "Result";
	$fieldToolTipslabtest[""]["result"] = "";
	$fieldLabelslabtest[""]["unit"] = "Unit";
	$fieldToolTipslabtest[""]["unit"] = "";
	$fieldLabelslabtest[""]["range"] = "Range";
	$fieldToolTipslabtest[""]["range"] = "";
	$fieldLabelslabtest[""]["comments"] = "Comments";
	$fieldToolTipslabtest[""]["comments"] = "";
	$fieldLabelslabtest[""]["id"] = "Id";
	$fieldToolTipslabtest[""]["id"] = "";
	if (count($fieldToolTipslabtest[""]))
		$tdatalabtest[".isUseToolTips"] = true;
}


	$tdatalabtest[".NCSearch"] = true;



$tdatalabtest[".shortTableName"] = "labtest";
$tdatalabtest[".nSecOptions"] = 0;
$tdatalabtest[".recsPerRowList"] = 1;
$tdatalabtest[".recsPerRowPrint"] = 1;
$tdatalabtest[".mainTableOwnerID"] = "";
$tdatalabtest[".moveNext"] = 1;
$tdatalabtest[".entityType"] = 0;

$tdatalabtest[".strOriginalTableName"] = "labtest";




$tdatalabtest[".showAddInPopup"] = false;

$tdatalabtest[".showEditInPopup"] = false;

$tdatalabtest[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalabtest[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalabtest[".fieldsForRegister"] = array();

$tdatalabtest[".listAjax"] = false;

	$tdatalabtest[".audit"] = false;

	$tdatalabtest[".locking"] = false;

$tdatalabtest[".edit"] = true;
$tdatalabtest[".afterEditAction"] = 0;
$tdatalabtest[".closePopupAfterEdit"] = 1;
$tdatalabtest[".afterEditActionDetTable"] = "";

$tdatalabtest[".add"] = true;
$tdatalabtest[".afterAddAction"] = 0;
$tdatalabtest[".closePopupAfterAdd"] = 1;
$tdatalabtest[".afterAddActionDetTable"] = "";

$tdatalabtest[".list"] = true;

$tdatalabtest[".inlineEdit"] = true;
$tdatalabtest[".inlineAdd"] = true;
$tdatalabtest[".view"] = true;

$tdatalabtest[".import"] = true;

$tdatalabtest[".exportTo"] = true;

$tdatalabtest[".printFriendly"] = true;

$tdatalabtest[".delete"] = true;

$tdatalabtest[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalabtest[".searchSaving"] = false;
//

if (isMobile()){
	$tdatalabtest[".showSearchPanel"] = true;
}
else
	$tdatalabtest[".showSearchPanel"] = false;

if (isMobile())
	$tdatalabtest[".isUseAjaxSuggest"] = false;
else
	$tdatalabtest[".isUseAjaxSuggest"] = true;

$tdatalabtest[".rowHighlite"] = true;



$tdatalabtest[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalabtest[".isUseTimeForSearch"] = false;





$tdatalabtest[".allSearchFields"] = array();
$tdatalabtest[".filterFields"] = array();
$tdatalabtest[".requiredSearchFields"] = array();

$tdatalabtest[".allSearchFields"][] = "id";
	$tdatalabtest[".allSearchFields"][] = "date";
	$tdatalabtest[".allSearchFields"][] = "type";
	$tdatalabtest[".allSearchFields"][] = "result";
	$tdatalabtest[".allSearchFields"][] = "unit";
	$tdatalabtest[".allSearchFields"][] = "range";
	$tdatalabtest[".allSearchFields"][] = "comments";
	

$tdatalabtest[".googleLikeFields"] = array();
$tdatalabtest[".googleLikeFields"][] = "id";
$tdatalabtest[".googleLikeFields"][] = "user_id";
$tdatalabtest[".googleLikeFields"][] = "date";
$tdatalabtest[".googleLikeFields"][] = "type";
$tdatalabtest[".googleLikeFields"][] = "result";
$tdatalabtest[".googleLikeFields"][] = "unit";
$tdatalabtest[".googleLikeFields"][] = "range";
$tdatalabtest[".googleLikeFields"][] = "comments";


$tdatalabtest[".advSearchFields"] = array();
$tdatalabtest[".advSearchFields"][] = "id";
$tdatalabtest[".advSearchFields"][] = "date";
$tdatalabtest[".advSearchFields"][] = "type";
$tdatalabtest[".advSearchFields"][] = "result";
$tdatalabtest[".advSearchFields"][] = "unit";
$tdatalabtest[".advSearchFields"][] = "range";
$tdatalabtest[".advSearchFields"][] = "comments";

$tdatalabtest[".tableType"] = "list";

$tdatalabtest[".printerPageOrientation"] = 0;
$tdatalabtest[".nPrinterPageScale"] = 100;

$tdatalabtest[".nPrinterSplitRecords"] = 40;

$tdatalabtest[".nPrinterPDFSplitRecords"] = 40;



$tdatalabtest[".geocodingEnabled"] = false;










// view page pdf
$tdatalabtest[".isViewPagePDF"] = true;
$tdatalabtest[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalabtest[".isPrinterPagePDF"] = true;
$tdatalabtest[".nPrinterPagePDFScale"] = 100;


$tdatalabtest[".pageSize"] = 20;

$tdatalabtest[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalabtest[".strOrderBy"] = $tstrOrderBy;

$tdatalabtest[".orderindexes"] = array();

$tdatalabtest[".sqlHead"] = "SELECT id,  	user_id,  	`date`,  	`type`,  	`result`,  	unit,  	`range`,  	comments";
$tdatalabtest[".sqlFrom"] = "FROM labtest";
$tdatalabtest[".sqlWhereExpr"] = "";
$tdatalabtest[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalabtest[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalabtest[".arrGroupsPerPage"] = $arrGPP;

$tdatalabtest[".highlightSearchResults"] = true;

$tableKeyslabtest = array();
$tableKeyslabtest[] = "user_id";
$tdatalabtest[".Keys"] = $tableKeyslabtest;

$tdatalabtest[".listFields"] = array();
$tdatalabtest[".listFields"][] = "id";
$tdatalabtest[".listFields"][] = "date";
$tdatalabtest[".listFields"][] = "type";
$tdatalabtest[".listFields"][] = "result";
$tdatalabtest[".listFields"][] = "unit";
$tdatalabtest[".listFields"][] = "range";
$tdatalabtest[".listFields"][] = "comments";

$tdatalabtest[".hideMobileList"] = array();


$tdatalabtest[".viewFields"] = array();
$tdatalabtest[".viewFields"][] = "id";
$tdatalabtest[".viewFields"][] = "date";
$tdatalabtest[".viewFields"][] = "type";
$tdatalabtest[".viewFields"][] = "result";
$tdatalabtest[".viewFields"][] = "unit";
$tdatalabtest[".viewFields"][] = "range";
$tdatalabtest[".viewFields"][] = "comments";

$tdatalabtest[".addFields"] = array();
$tdatalabtest[".addFields"][] = "date";
$tdatalabtest[".addFields"][] = "type";
$tdatalabtest[".addFields"][] = "result";
$tdatalabtest[".addFields"][] = "unit";
$tdatalabtest[".addFields"][] = "range";
$tdatalabtest[".addFields"][] = "comments";

$tdatalabtest[".masterListFields"] = array();
$tdatalabtest[".masterListFields"][] = "id";
$tdatalabtest[".masterListFields"][] = "user_id";
$tdatalabtest[".masterListFields"][] = "date";
$tdatalabtest[".masterListFields"][] = "type";
$tdatalabtest[".masterListFields"][] = "result";
$tdatalabtest[".masterListFields"][] = "unit";
$tdatalabtest[".masterListFields"][] = "range";
$tdatalabtest[".masterListFields"][] = "comments";

$tdatalabtest[".inlineAddFields"] = array();
$tdatalabtest[".inlineAddFields"][] = "date";
$tdatalabtest[".inlineAddFields"][] = "type";
$tdatalabtest[".inlineAddFields"][] = "result";
$tdatalabtest[".inlineAddFields"][] = "unit";
$tdatalabtest[".inlineAddFields"][] = "range";
$tdatalabtest[".inlineAddFields"][] = "comments";

$tdatalabtest[".editFields"] = array();
$tdatalabtest[".editFields"][] = "id";
$tdatalabtest[".editFields"][] = "date";
$tdatalabtest[".editFields"][] = "type";
$tdatalabtest[".editFields"][] = "result";
$tdatalabtest[".editFields"][] = "unit";
$tdatalabtest[".editFields"][] = "range";
$tdatalabtest[".editFields"][] = "comments";

$tdatalabtest[".inlineEditFields"] = array();
$tdatalabtest[".inlineEditFields"][] = "id";
$tdatalabtest[".inlineEditFields"][] = "date";
$tdatalabtest[".inlineEditFields"][] = "type";
$tdatalabtest[".inlineEditFields"][] = "result";
$tdatalabtest[".inlineEditFields"][] = "unit";
$tdatalabtest[".inlineEditFields"][] = "range";
$tdatalabtest[".inlineEditFields"][] = "comments";

$tdatalabtest[".exportFields"] = array();
$tdatalabtest[".exportFields"][] = "id";
$tdatalabtest[".exportFields"][] = "date";
$tdatalabtest[".exportFields"][] = "type";
$tdatalabtest[".exportFields"][] = "result";
$tdatalabtest[".exportFields"][] = "unit";
$tdatalabtest[".exportFields"][] = "range";
$tdatalabtest[".exportFields"][] = "comments";

$tdatalabtest[".importFields"] = array();
$tdatalabtest[".importFields"][] = "id";
$tdatalabtest[".importFields"][] = "date";
$tdatalabtest[".importFields"][] = "type";
$tdatalabtest[".importFields"][] = "result";
$tdatalabtest[".importFields"][] = "unit";
$tdatalabtest[".importFields"][] = "range";
$tdatalabtest[".importFields"][] = "comments";

$tdatalabtest[".printFields"] = array();
$tdatalabtest[".printFields"][] = "id";
$tdatalabtest[".printFields"][] = "date";
$tdatalabtest[".printFields"][] = "type";
$tdatalabtest[".printFields"][] = "result";
$tdatalabtest[".printFields"][] = "unit";
$tdatalabtest[".printFields"][] = "range";
$tdatalabtest[".printFields"][] = "comments";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "labtest";
	$fdata["Label"] = GetFieldLabel("labtest","id");
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




	$tdatalabtest["id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "labtest";
	$fdata["Label"] = GetFieldLabel("labtest","user_id");
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








	$tdatalabtest["user_id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "labtest";
	$fdata["Label"] = GetFieldLabel("labtest","date");
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




	$tdatalabtest["date"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "labtest";
	$fdata["Label"] = GetFieldLabel("labtest","type");
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
	$edata["LookupTable"] = "test_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "item";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "item";

	
	$edata["LookupOrderBy"] = "item";

	
	
	
	

	
	
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




	$tdatalabtest["type"] = $fdata;
//	result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "result";
	$fdata["GoodName"] = "result";
	$fdata["ownerTable"] = "labtest";
	$fdata["Label"] = GetFieldLabel("labtest","result");
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

		$fdata["strField"] = "result";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`result`";

	
	
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




	$tdatalabtest["result"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "labtest";
	$fdata["Label"] = GetFieldLabel("labtest","unit");
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

		$fdata["strField"] = "unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatalabtest["unit"] = $fdata;
//	range
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "range";
	$fdata["GoodName"] = "range";
	$fdata["ownerTable"] = "labtest";
	$fdata["Label"] = GetFieldLabel("labtest","range");
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

		$fdata["strField"] = "range";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`range`";

	
	
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




	$tdatalabtest["range"] = $fdata;
//	comments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "comments";
	$fdata["GoodName"] = "comments";
	$fdata["ownerTable"] = "labtest";
	$fdata["Label"] = GetFieldLabel("labtest","comments");
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




	$tdatalabtest["comments"] = $fdata;


$tables_data["labtest"]=&$tdatalabtest;
$field_labels["labtest"] = &$fieldLabelslabtest;
$fieldToolTips["labtest"] = &$fieldToolTipslabtest;
$page_titles["labtest"] = &$pageTitleslabtest;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["labtest"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["labtest"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_labtest()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	user_id,  	`date`,  	`type`,  	`result`,  	unit,  	`range`,  	comments";
$proto0["m_strFrom"] = "FROM labtest";
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
	"m_strTable" => "labtest",
	"m_srcTableName" => "labtest"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "labtest";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "labtest",
	"m_srcTableName" => "labtest"
));

$proto7["m_sql"] = "user_id";
$proto7["m_srcTableName"] = "labtest";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "labtest",
	"m_srcTableName" => "labtest"
));

$proto9["m_sql"] = "`date`";
$proto9["m_srcTableName"] = "labtest";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "labtest",
	"m_srcTableName" => "labtest"
));

$proto11["m_sql"] = "`type`";
$proto11["m_srcTableName"] = "labtest";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "result",
	"m_strTable" => "labtest",
	"m_srcTableName" => "labtest"
));

$proto13["m_sql"] = "`result`";
$proto13["m_srcTableName"] = "labtest";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "labtest",
	"m_srcTableName" => "labtest"
));

$proto15["m_sql"] = "unit";
$proto15["m_srcTableName"] = "labtest";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "range",
	"m_strTable" => "labtest",
	"m_srcTableName" => "labtest"
));

$proto17["m_sql"] = "`range`";
$proto17["m_srcTableName"] = "labtest";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "comments",
	"m_strTable" => "labtest",
	"m_srcTableName" => "labtest"
));

$proto19["m_sql"] = "comments";
$proto19["m_srcTableName"] = "labtest";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "labtest";
$proto22["m_srcTableName"] = "labtest";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "user_id";
$proto22["m_columns"][] = "date";
$proto22["m_columns"][] = "type";
$proto22["m_columns"][] = "result";
$proto22["m_columns"][] = "unit";
$proto22["m_columns"][] = "range";
$proto22["m_columns"][] = "comments";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "labtest";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "labtest";
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
$proto0["m_srcTableName"]="labtest";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_labtest = createSqlQuery_labtest();



								

$tdatalabtest[".sqlquery"] = $queryData_labtest;

$tableEvents["labtest"] = new eventsBase;
$tdatalabtest[".hasEvents"] = false;

?>