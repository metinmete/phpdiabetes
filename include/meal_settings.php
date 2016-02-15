<?php
require_once(getabspath("classes/cipherer.php"));




$tdatameal = array();
	$tdatameal[".truncateText"] = true;
	$tdatameal[".NumberOfChars"] = 80;
	$tdatameal[".ShortName"] = "meal";
	$tdatameal[".OwnerID"] = "";
	$tdatameal[".OriginalTable"] = "meal";

//	field labels
$fieldLabelsmeal = array();
$fieldToolTipsmeal = array();
$pageTitlesmeal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmeal["English"] = array();
	$fieldToolTipsmeal["English"] = array();
	$pageTitlesmeal["English"] = array();
	$fieldLabelsmeal["English"]["user_id"] = "User Id";
	$fieldToolTipsmeal["English"]["user_id"] = "";
	$fieldLabelsmeal["English"]["date"] = "Date";
	$fieldToolTipsmeal["English"]["date"] = "";
	$fieldLabelsmeal["English"]["time"] = "Time";
	$fieldToolTipsmeal["English"]["time"] = "";
	$fieldLabelsmeal["English"]["meal"] = "Meal";
	$fieldToolTipsmeal["English"]["meal"] = "";
	$fieldLabelsmeal["English"]["food_item"] = "Food Item";
	$fieldToolTipsmeal["English"]["food_item"] = "";
	$fieldLabelsmeal["English"]["svgs"] = "Svgs";
	$fieldToolTipsmeal["English"]["svgs"] = "";
	$fieldLabelsmeal["English"]["carbs"] = "Carbs";
	$fieldToolTipsmeal["English"]["carbs"] = "";
	$fieldLabelsmeal["English"]["totalcarbs"] = "Totalcarbs";
	$fieldToolTipsmeal["English"]["totalcarbs"] = "";
	$fieldLabelsmeal["English"]["favorite"] = "Favorite";
	$fieldToolTipsmeal["English"]["favorite"] = "";
	$fieldLabelsmeal["English"]["comment"] = "Comment";
	$fieldToolTipsmeal["English"]["comment"] = "";
	$fieldLabelsmeal["English"]["id"] = "Id";
	$fieldToolTipsmeal["English"]["id"] = "";
	if (count($fieldToolTipsmeal["English"]))
		$tdatameal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmeal[""] = array();
	$fieldToolTipsmeal[""] = array();
	$pageTitlesmeal[""] = array();
	$fieldLabelsmeal[""]["user_id"] = "User Id";
	$fieldToolTipsmeal[""]["user_id"] = "";
	$fieldLabelsmeal[""]["date"] = "Date";
	$fieldToolTipsmeal[""]["date"] = "";
	$fieldLabelsmeal[""]["time"] = "Time";
	$fieldToolTipsmeal[""]["time"] = "";
	$fieldLabelsmeal[""]["meal"] = "Meal";
	$fieldToolTipsmeal[""]["meal"] = "";
	$fieldLabelsmeal[""]["food_item"] = "Food Item";
	$fieldToolTipsmeal[""]["food_item"] = "";
	$fieldLabelsmeal[""]["svgs"] = "Svgs";
	$fieldToolTipsmeal[""]["svgs"] = "";
	$fieldLabelsmeal[""]["carbs"] = "Carbs";
	$fieldToolTipsmeal[""]["carbs"] = "";
	$fieldLabelsmeal[""]["totalcarbs"] = "Totalcarbs";
	$fieldToolTipsmeal[""]["totalcarbs"] = "";
	$fieldLabelsmeal[""]["favorite"] = "Favorite";
	$fieldToolTipsmeal[""]["favorite"] = "";
	$fieldLabelsmeal[""]["comment"] = "Comment";
	$fieldToolTipsmeal[""]["comment"] = "";
	$fieldLabelsmeal[""]["id"] = "Id";
	$fieldToolTipsmeal[""]["id"] = "";
	if (count($fieldToolTipsmeal[""]))
		$tdatameal[".isUseToolTips"] = true;
}


	$tdatameal[".NCSearch"] = true;



$tdatameal[".shortTableName"] = "meal";
$tdatameal[".nSecOptions"] = 0;
$tdatameal[".recsPerRowList"] = 1;
$tdatameal[".recsPerRowPrint"] = 1;
$tdatameal[".mainTableOwnerID"] = "";
$tdatameal[".moveNext"] = 1;
$tdatameal[".entityType"] = 0;

$tdatameal[".strOriginalTableName"] = "meal";




$tdatameal[".showAddInPopup"] = false;

$tdatameal[".showEditInPopup"] = false;

$tdatameal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatameal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatameal[".fieldsForRegister"] = array();

$tdatameal[".listAjax"] = false;

	$tdatameal[".audit"] = false;

	$tdatameal[".locking"] = false;

$tdatameal[".edit"] = true;
$tdatameal[".afterEditAction"] = 0;
$tdatameal[".closePopupAfterEdit"] = 1;
$tdatameal[".afterEditActionDetTable"] = "";

$tdatameal[".add"] = true;
$tdatameal[".afterAddAction"] = 0;
$tdatameal[".closePopupAfterAdd"] = 1;
$tdatameal[".afterAddActionDetTable"] = "";

$tdatameal[".list"] = true;

$tdatameal[".inlineEdit"] = true;
$tdatameal[".inlineAdd"] = true;
$tdatameal[".view"] = true;

$tdatameal[".import"] = true;

$tdatameal[".exportTo"] = true;

$tdatameal[".printFriendly"] = true;

$tdatameal[".delete"] = true;

$tdatameal[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatameal[".searchSaving"] = false;
//

if (isMobile()){
	$tdatameal[".showSearchPanel"] = true;
}
else
	$tdatameal[".showSearchPanel"] = false;

if (isMobile())
	$tdatameal[".isUseAjaxSuggest"] = false;
else
	$tdatameal[".isUseAjaxSuggest"] = true;

$tdatameal[".rowHighlite"] = true;



$tdatameal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatameal[".isUseTimeForSearch"] = false;





$tdatameal[".allSearchFields"] = array();
$tdatameal[".filterFields"] = array();
$tdatameal[".requiredSearchFields"] = array();

$tdatameal[".allSearchFields"][] = "id";
	$tdatameal[".allSearchFields"][] = "date";
	$tdatameal[".allSearchFields"][] = "time";
	$tdatameal[".allSearchFields"][] = "meal";
	$tdatameal[".allSearchFields"][] = "food_item";
	$tdatameal[".allSearchFields"][] = "svgs";
	$tdatameal[".allSearchFields"][] = "carbs";
	$tdatameal[".allSearchFields"][] = "totalcarbs";
	$tdatameal[".allSearchFields"][] = "favorite";
	$tdatameal[".allSearchFields"][] = "comment";
	

$tdatameal[".googleLikeFields"] = array();
$tdatameal[".googleLikeFields"][] = "id";
$tdatameal[".googleLikeFields"][] = "user_id";
$tdatameal[".googleLikeFields"][] = "date";
$tdatameal[".googleLikeFields"][] = "time";
$tdatameal[".googleLikeFields"][] = "meal";
$tdatameal[".googleLikeFields"][] = "food_item";
$tdatameal[".googleLikeFields"][] = "svgs";
$tdatameal[".googleLikeFields"][] = "carbs";
$tdatameal[".googleLikeFields"][] = "totalcarbs";
$tdatameal[".googleLikeFields"][] = "favorite";
$tdatameal[".googleLikeFields"][] = "comment";


$tdatameal[".advSearchFields"] = array();
$tdatameal[".advSearchFields"][] = "id";
$tdatameal[".advSearchFields"][] = "date";
$tdatameal[".advSearchFields"][] = "time";
$tdatameal[".advSearchFields"][] = "meal";
$tdatameal[".advSearchFields"][] = "food_item";
$tdatameal[".advSearchFields"][] = "svgs";
$tdatameal[".advSearchFields"][] = "carbs";
$tdatameal[".advSearchFields"][] = "totalcarbs";
$tdatameal[".advSearchFields"][] = "favorite";
$tdatameal[".advSearchFields"][] = "comment";

$tdatameal[".tableType"] = "list";

$tdatameal[".printerPageOrientation"] = 0;
$tdatameal[".nPrinterPageScale"] = 100;

$tdatameal[".nPrinterSplitRecords"] = 40;

$tdatameal[".nPrinterPDFSplitRecords"] = 40;



$tdatameal[".geocodingEnabled"] = false;










// view page pdf
$tdatameal[".isViewPagePDF"] = true;
$tdatameal[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatameal[".isPrinterPagePDF"] = true;
$tdatameal[".nPrinterPagePDFScale"] = 100;


$tdatameal[".pageSize"] = 20;

$tdatameal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatameal[".strOrderBy"] = $tstrOrderBy;

$tdatameal[".orderindexes"] = array();

$tdatameal[".sqlHead"] = "SELECT id,  	user_id,  	`date`,  	`time`,  	meal,  	food_item,  	svgs,  	carbs,  	totalcarbs,  	favorite,  	`comment`";
$tdatameal[".sqlFrom"] = "FROM meal";
$tdatameal[".sqlWhereExpr"] = "";
$tdatameal[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatameal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatameal[".arrGroupsPerPage"] = $arrGPP;

$tdatameal[".highlightSearchResults"] = true;

$tableKeysmeal = array();
$tableKeysmeal[] = "user_id";
$tdatameal[".Keys"] = $tableKeysmeal;

$tdatameal[".listFields"] = array();
$tdatameal[".listFields"][] = "id";
$tdatameal[".listFields"][] = "date";
$tdatameal[".listFields"][] = "time";
$tdatameal[".listFields"][] = "meal";
$tdatameal[".listFields"][] = "food_item";
$tdatameal[".listFields"][] = "svgs";
$tdatameal[".listFields"][] = "carbs";
$tdatameal[".listFields"][] = "totalcarbs";
$tdatameal[".listFields"][] = "favorite";
$tdatameal[".listFields"][] = "comment";

$tdatameal[".hideMobileList"] = array();


$tdatameal[".viewFields"] = array();
$tdatameal[".viewFields"][] = "id";
$tdatameal[".viewFields"][] = "date";
$tdatameal[".viewFields"][] = "time";
$tdatameal[".viewFields"][] = "meal";
$tdatameal[".viewFields"][] = "food_item";
$tdatameal[".viewFields"][] = "svgs";
$tdatameal[".viewFields"][] = "carbs";
$tdatameal[".viewFields"][] = "totalcarbs";
$tdatameal[".viewFields"][] = "favorite";
$tdatameal[".viewFields"][] = "comment";

$tdatameal[".addFields"] = array();
$tdatameal[".addFields"][] = "date";
$tdatameal[".addFields"][] = "time";
$tdatameal[".addFields"][] = "meal";
$tdatameal[".addFields"][] = "food_item";
$tdatameal[".addFields"][] = "svgs";
$tdatameal[".addFields"][] = "carbs";
$tdatameal[".addFields"][] = "totalcarbs";
$tdatameal[".addFields"][] = "favorite";
$tdatameal[".addFields"][] = "comment";

$tdatameal[".masterListFields"] = array();
$tdatameal[".masterListFields"][] = "id";
$tdatameal[".masterListFields"][] = "user_id";
$tdatameal[".masterListFields"][] = "date";
$tdatameal[".masterListFields"][] = "time";
$tdatameal[".masterListFields"][] = "meal";
$tdatameal[".masterListFields"][] = "food_item";
$tdatameal[".masterListFields"][] = "svgs";
$tdatameal[".masterListFields"][] = "carbs";
$tdatameal[".masterListFields"][] = "totalcarbs";
$tdatameal[".masterListFields"][] = "favorite";
$tdatameal[".masterListFields"][] = "comment";

$tdatameal[".inlineAddFields"] = array();
$tdatameal[".inlineAddFields"][] = "date";
$tdatameal[".inlineAddFields"][] = "time";
$tdatameal[".inlineAddFields"][] = "meal";
$tdatameal[".inlineAddFields"][] = "food_item";
$tdatameal[".inlineAddFields"][] = "svgs";
$tdatameal[".inlineAddFields"][] = "carbs";
$tdatameal[".inlineAddFields"][] = "totalcarbs";
$tdatameal[".inlineAddFields"][] = "favorite";
$tdatameal[".inlineAddFields"][] = "comment";

$tdatameal[".editFields"] = array();
$tdatameal[".editFields"][] = "id";
$tdatameal[".editFields"][] = "date";
$tdatameal[".editFields"][] = "time";
$tdatameal[".editFields"][] = "meal";
$tdatameal[".editFields"][] = "food_item";
$tdatameal[".editFields"][] = "svgs";
$tdatameal[".editFields"][] = "carbs";
$tdatameal[".editFields"][] = "totalcarbs";
$tdatameal[".editFields"][] = "favorite";
$tdatameal[".editFields"][] = "comment";

$tdatameal[".inlineEditFields"] = array();
$tdatameal[".inlineEditFields"][] = "id";
$tdatameal[".inlineEditFields"][] = "date";
$tdatameal[".inlineEditFields"][] = "time";
$tdatameal[".inlineEditFields"][] = "meal";
$tdatameal[".inlineEditFields"][] = "food_item";
$tdatameal[".inlineEditFields"][] = "svgs";
$tdatameal[".inlineEditFields"][] = "carbs";
$tdatameal[".inlineEditFields"][] = "totalcarbs";
$tdatameal[".inlineEditFields"][] = "favorite";
$tdatameal[".inlineEditFields"][] = "comment";

$tdatameal[".exportFields"] = array();
$tdatameal[".exportFields"][] = "id";
$tdatameal[".exportFields"][] = "date";
$tdatameal[".exportFields"][] = "time";
$tdatameal[".exportFields"][] = "meal";
$tdatameal[".exportFields"][] = "food_item";
$tdatameal[".exportFields"][] = "svgs";
$tdatameal[".exportFields"][] = "carbs";
$tdatameal[".exportFields"][] = "totalcarbs";
$tdatameal[".exportFields"][] = "favorite";
$tdatameal[".exportFields"][] = "comment";

$tdatameal[".importFields"] = array();
$tdatameal[".importFields"][] = "id";
$tdatameal[".importFields"][] = "date";
$tdatameal[".importFields"][] = "time";
$tdatameal[".importFields"][] = "meal";
$tdatameal[".importFields"][] = "food_item";
$tdatameal[".importFields"][] = "svgs";
$tdatameal[".importFields"][] = "carbs";
$tdatameal[".importFields"][] = "totalcarbs";
$tdatameal[".importFields"][] = "favorite";
$tdatameal[".importFields"][] = "comment";

$tdatameal[".printFields"] = array();
$tdatameal[".printFields"][] = "id";
$tdatameal[".printFields"][] = "date";
$tdatameal[".printFields"][] = "time";
$tdatameal[".printFields"][] = "meal";
$tdatameal[".printFields"][] = "food_item";
$tdatameal[".printFields"][] = "svgs";
$tdatameal[".printFields"][] = "carbs";
$tdatameal[".printFields"][] = "totalcarbs";
$tdatameal[".printFields"][] = "favorite";
$tdatameal[".printFields"][] = "comment";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","id");
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




	$tdatameal["id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","user_id");
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








	$tdatameal["user_id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","date");
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




	$tdatameal["date"] = $fdata;
//	time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time";
	$fdata["GoodName"] = "time";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","time");
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




	$tdatameal["time"] = $fdata;
//	meal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "meal";
	$fdata["GoodName"] = "meal";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","meal");
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

		$fdata["strField"] = "meal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meal";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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




	$tdatameal["meal"] = $fdata;
//	food_item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "food_item";
	$fdata["GoodName"] = "food_item";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","food_item");
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

		$fdata["strField"] = "food_item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "food_item";

	
	
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




	$tdatameal["food_item"] = $fdata;
//	svgs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "svgs";
	$fdata["GoodName"] = "svgs";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","svgs");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "svgs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "svgs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdatameal["svgs"] = $fdata;
//	carbs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "carbs";
	$fdata["GoodName"] = "carbs";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","carbs");
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

		$fdata["strField"] = "carbs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carbs";

	
	
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




	$tdatameal["carbs"] = $fdata;
//	totalcarbs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "totalcarbs";
	$fdata["GoodName"] = "totalcarbs";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","totalcarbs");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "totalcarbs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "totalcarbs";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdatameal["totalcarbs"] = $fdata;
//	favorite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "favorite";
	$fdata["GoodName"] = "favorite";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","favorite");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "favorite";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "favorite";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatameal["favorite"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "meal";
	$fdata["Label"] = GetFieldLabel("meal","comment");
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




	$tdatameal["comment"] = $fdata;


$tables_data["meal"]=&$tdatameal;
$field_labels["meal"] = &$fieldLabelsmeal;
$fieldToolTips["meal"] = &$fieldToolTipsmeal;
$page_titles["meal"] = &$pageTitlesmeal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["meal"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["meal"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_meal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	user_id,  	`date`,  	`time`,  	meal,  	food_item,  	svgs,  	carbs,  	totalcarbs,  	favorite,  	`comment`";
$proto0["m_strFrom"] = "FROM meal";
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
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "meal";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto7["m_sql"] = "user_id";
$proto7["m_srcTableName"] = "meal";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto9["m_sql"] = "`date`";
$proto9["m_srcTableName"] = "meal";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "time",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto11["m_sql"] = "`time`";
$proto11["m_srcTableName"] = "meal";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "meal",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto13["m_sql"] = "meal";
$proto13["m_srcTableName"] = "meal";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "food_item",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto15["m_sql"] = "food_item";
$proto15["m_srcTableName"] = "meal";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "svgs",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto17["m_sql"] = "svgs";
$proto17["m_srcTableName"] = "meal";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "carbs",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto19["m_sql"] = "carbs";
$proto19["m_srcTableName"] = "meal";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "totalcarbs",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto21["m_sql"] = "totalcarbs";
$proto21["m_srcTableName"] = "meal";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "favorite",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto23["m_sql"] = "favorite";
$proto23["m_srcTableName"] = "meal";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "meal",
	"m_srcTableName" => "meal"
));

$proto25["m_sql"] = "`comment`";
$proto25["m_srcTableName"] = "meal";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "meal";
$proto28["m_srcTableName"] = "meal";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id";
$proto28["m_columns"][] = "user_id";
$proto28["m_columns"][] = "date";
$proto28["m_columns"][] = "time";
$proto28["m_columns"][] = "meal";
$proto28["m_columns"][] = "food_item";
$proto28["m_columns"][] = "svgs";
$proto28["m_columns"][] = "carbs";
$proto28["m_columns"][] = "totalcarbs";
$proto28["m_columns"][] = "favorite";
$proto28["m_columns"][] = "comment";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "meal";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "meal";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="meal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_meal = createSqlQuery_meal();



											

$tdatameal[".sqlquery"] = $queryData_meal;

$tableEvents["meal"] = new eventsBase;
$tdatameal[".hasEvents"] = false;

?>