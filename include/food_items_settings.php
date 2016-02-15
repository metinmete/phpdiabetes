<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafood_items = array();
	$tdatafood_items[".truncateText"] = true;
	$tdatafood_items[".NumberOfChars"] = 80;
	$tdatafood_items[".ShortName"] = "food_items";
	$tdatafood_items[".OwnerID"] = "";
	$tdatafood_items[".OriginalTable"] = "food_items";

//	field labels
$fieldLabelsfood_items = array();
$fieldToolTipsfood_items = array();
$pageTitlesfood_items = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfood_items["English"] = array();
	$fieldToolTipsfood_items["English"] = array();
	$pageTitlesfood_items["English"] = array();
	$fieldLabelsfood_items["English"]["id"] = "Id";
	$fieldToolTipsfood_items["English"]["id"] = "";
	$fieldLabelsfood_items["English"]["item"] = "Item";
	$fieldToolTipsfood_items["English"]["item"] = "";
	$fieldLabelsfood_items["English"]["serve_size"] = "Serve Size";
	$fieldToolTipsfood_items["English"]["serve_size"] = "";
	$fieldLabelsfood_items["English"]["carbs"] = "Carbs";
	$fieldToolTipsfood_items["English"]["carbs"] = "";
	$fieldLabelsfood_items["English"]["hide"] = "Hide";
	$fieldToolTipsfood_items["English"]["hide"] = "";
	$fieldLabelsfood_items["English"]["fav"] = "Fav";
	$fieldToolTipsfood_items["English"]["fav"] = "";
	if (count($fieldToolTipsfood_items["English"]))
		$tdatafood_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfood_items[""] = array();
	$fieldToolTipsfood_items[""] = array();
	$pageTitlesfood_items[""] = array();
	$fieldLabelsfood_items[""]["id"] = "Id";
	$fieldToolTipsfood_items[""]["id"] = "";
	$fieldLabelsfood_items[""]["item"] = "Item";
	$fieldToolTipsfood_items[""]["item"] = "";
	$fieldLabelsfood_items[""]["serve_size"] = "Serve Size";
	$fieldToolTipsfood_items[""]["serve_size"] = "";
	$fieldLabelsfood_items[""]["carbs"] = "Carbs";
	$fieldToolTipsfood_items[""]["carbs"] = "";
	$fieldLabelsfood_items[""]["hide"] = "Hide";
	$fieldToolTipsfood_items[""]["hide"] = "";
	$fieldLabelsfood_items[""]["fav"] = "Fav";
	$fieldToolTipsfood_items[""]["fav"] = "";
	if (count($fieldToolTipsfood_items[""]))
		$tdatafood_items[".isUseToolTips"] = true;
}


	$tdatafood_items[".NCSearch"] = true;



$tdatafood_items[".shortTableName"] = "food_items";
$tdatafood_items[".nSecOptions"] = 0;
$tdatafood_items[".recsPerRowList"] = 1;
$tdatafood_items[".recsPerRowPrint"] = 1;
$tdatafood_items[".mainTableOwnerID"] = "";
$tdatafood_items[".moveNext"] = 1;
$tdatafood_items[".entityType"] = 0;

$tdatafood_items[".strOriginalTableName"] = "food_items";




$tdatafood_items[".showAddInPopup"] = false;

$tdatafood_items[".showEditInPopup"] = false;

$tdatafood_items[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafood_items[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafood_items[".fieldsForRegister"] = array();

$tdatafood_items[".listAjax"] = false;

	$tdatafood_items[".audit"] = false;

	$tdatafood_items[".locking"] = false;

$tdatafood_items[".edit"] = true;
$tdatafood_items[".afterEditAction"] = 1;
$tdatafood_items[".closePopupAfterEdit"] = 1;
$tdatafood_items[".afterEditActionDetTable"] = "";

$tdatafood_items[".add"] = true;
$tdatafood_items[".afterAddAction"] = 1;
$tdatafood_items[".closePopupAfterAdd"] = 1;
$tdatafood_items[".afterAddActionDetTable"] = "";

$tdatafood_items[".list"] = true;

$tdatafood_items[".inlineEdit"] = true;
$tdatafood_items[".inlineAdd"] = true;
$tdatafood_items[".view"] = true;

$tdatafood_items[".import"] = true;

$tdatafood_items[".exportTo"] = true;

$tdatafood_items[".printFriendly"] = true;

$tdatafood_items[".delete"] = true;

$tdatafood_items[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafood_items[".searchSaving"] = false;
//

$tdatafood_items[".showSearchPanel"] = true;
		$tdatafood_items[".flexibleSearch"] = true;

if (isMobile())
	$tdatafood_items[".isUseAjaxSuggest"] = false;
else
	$tdatafood_items[".isUseAjaxSuggest"] = true;

$tdatafood_items[".rowHighlite"] = true;



$tdatafood_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafood_items[".isUseTimeForSearch"] = false;





$tdatafood_items[".allSearchFields"] = array();
$tdatafood_items[".filterFields"] = array();
$tdatafood_items[".requiredSearchFields"] = array();

$tdatafood_items[".allSearchFields"][] = "id";
	$tdatafood_items[".allSearchFields"][] = "item";
	$tdatafood_items[".allSearchFields"][] = "serve_size";
	$tdatafood_items[".allSearchFields"][] = "carbs";
	$tdatafood_items[".allSearchFields"][] = "hide";
	$tdatafood_items[".allSearchFields"][] = "fav";
	

$tdatafood_items[".googleLikeFields"] = array();
$tdatafood_items[".googleLikeFields"][] = "id";
$tdatafood_items[".googleLikeFields"][] = "item";
$tdatafood_items[".googleLikeFields"][] = "serve_size";
$tdatafood_items[".googleLikeFields"][] = "carbs";
$tdatafood_items[".googleLikeFields"][] = "hide";
$tdatafood_items[".googleLikeFields"][] = "fav";


$tdatafood_items[".advSearchFields"] = array();
$tdatafood_items[".advSearchFields"][] = "id";
$tdatafood_items[".advSearchFields"][] = "item";
$tdatafood_items[".advSearchFields"][] = "serve_size";
$tdatafood_items[".advSearchFields"][] = "carbs";
$tdatafood_items[".advSearchFields"][] = "hide";
$tdatafood_items[".advSearchFields"][] = "fav";

$tdatafood_items[".tableType"] = "list";

$tdatafood_items[".printerPageOrientation"] = 0;
$tdatafood_items[".nPrinterPageScale"] = 100;

$tdatafood_items[".nPrinterSplitRecords"] = 40;

$tdatafood_items[".nPrinterPDFSplitRecords"] = 40;



$tdatafood_items[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatafood_items[".pageSize"] = 20;

$tdatafood_items[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafood_items[".strOrderBy"] = $tstrOrderBy;

$tdatafood_items[".orderindexes"] = array();

$tdatafood_items[".sqlHead"] = "SELECT id,  	item,  	serve_size,  	carbs,  	hide,  	fav";
$tdatafood_items[".sqlFrom"] = "FROM food_items";
$tdatafood_items[".sqlWhereExpr"] = "";
$tdatafood_items[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafood_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafood_items[".arrGroupsPerPage"] = $arrGPP;

$tdatafood_items[".highlightSearchResults"] = true;

$tableKeysfood_items = array();
$tableKeysfood_items[] = "id";
$tdatafood_items[".Keys"] = $tableKeysfood_items;

$tdatafood_items[".listFields"] = array();
$tdatafood_items[".listFields"][] = "id";
$tdatafood_items[".listFields"][] = "item";
$tdatafood_items[".listFields"][] = "serve_size";
$tdatafood_items[".listFields"][] = "carbs";
$tdatafood_items[".listFields"][] = "hide";
$tdatafood_items[".listFields"][] = "fav";

$tdatafood_items[".hideMobileList"] = array();


$tdatafood_items[".viewFields"] = array();
$tdatafood_items[".viewFields"][] = "id";
$tdatafood_items[".viewFields"][] = "item";
$tdatafood_items[".viewFields"][] = "serve_size";
$tdatafood_items[".viewFields"][] = "carbs";
$tdatafood_items[".viewFields"][] = "hide";
$tdatafood_items[".viewFields"][] = "fav";

$tdatafood_items[".addFields"] = array();
$tdatafood_items[".addFields"][] = "item";
$tdatafood_items[".addFields"][] = "serve_size";
$tdatafood_items[".addFields"][] = "carbs";
$tdatafood_items[".addFields"][] = "hide";
$tdatafood_items[".addFields"][] = "fav";

$tdatafood_items[".masterListFields"] = array();
$tdatafood_items[".masterListFields"][] = "id";
$tdatafood_items[".masterListFields"][] = "item";
$tdatafood_items[".masterListFields"][] = "serve_size";
$tdatafood_items[".masterListFields"][] = "carbs";
$tdatafood_items[".masterListFields"][] = "hide";
$tdatafood_items[".masterListFields"][] = "fav";

$tdatafood_items[".inlineAddFields"] = array();
$tdatafood_items[".inlineAddFields"][] = "item";
$tdatafood_items[".inlineAddFields"][] = "serve_size";
$tdatafood_items[".inlineAddFields"][] = "carbs";
$tdatafood_items[".inlineAddFields"][] = "hide";
$tdatafood_items[".inlineAddFields"][] = "fav";

$tdatafood_items[".editFields"] = array();
$tdatafood_items[".editFields"][] = "item";
$tdatafood_items[".editFields"][] = "serve_size";
$tdatafood_items[".editFields"][] = "carbs";
$tdatafood_items[".editFields"][] = "hide";
$tdatafood_items[".editFields"][] = "fav";

$tdatafood_items[".inlineEditFields"] = array();
$tdatafood_items[".inlineEditFields"][] = "item";
$tdatafood_items[".inlineEditFields"][] = "serve_size";
$tdatafood_items[".inlineEditFields"][] = "carbs";
$tdatafood_items[".inlineEditFields"][] = "hide";
$tdatafood_items[".inlineEditFields"][] = "fav";

$tdatafood_items[".exportFields"] = array();
$tdatafood_items[".exportFields"][] = "id";
$tdatafood_items[".exportFields"][] = "item";
$tdatafood_items[".exportFields"][] = "serve_size";
$tdatafood_items[".exportFields"][] = "carbs";
$tdatafood_items[".exportFields"][] = "hide";
$tdatafood_items[".exportFields"][] = "fav";

$tdatafood_items[".importFields"] = array();
$tdatafood_items[".importFields"][] = "id";
$tdatafood_items[".importFields"][] = "item";
$tdatafood_items[".importFields"][] = "serve_size";
$tdatafood_items[".importFields"][] = "carbs";
$tdatafood_items[".importFields"][] = "hide";
$tdatafood_items[".importFields"][] = "fav";

$tdatafood_items[".printFields"] = array();
$tdatafood_items[".printFields"][] = "id";
$tdatafood_items[".printFields"][] = "item";
$tdatafood_items[".printFields"][] = "serve_size";
$tdatafood_items[".printFields"][] = "carbs";
$tdatafood_items[".printFields"][] = "hide";
$tdatafood_items[".printFields"][] = "fav";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "food_items";
	$fdata["Label"] = GetFieldLabel("food_items","id");
	$fdata["FieldType"] = 3;

	
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




	$tdatafood_items["id"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "food_items";
	$fdata["Label"] = GetFieldLabel("food_items","item");
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

		$fdata["strField"] = "item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item";

	
	
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




	$tdatafood_items["item"] = $fdata;
//	serve_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "serve_size";
	$fdata["GoodName"] = "serve_size";
	$fdata["ownerTable"] = "food_items";
	$fdata["Label"] = GetFieldLabel("food_items","serve_size");
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

		$fdata["strField"] = "serve_size";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "serve_size";

	
	
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




	$tdatafood_items["serve_size"] = $fdata;
//	carbs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "carbs";
	$fdata["GoodName"] = "carbs";
	$fdata["ownerTable"] = "food_items";
	$fdata["Label"] = GetFieldLabel("food_items","carbs");
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




	$tdatafood_items["carbs"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "food_items";
	$fdata["Label"] = GetFieldLabel("food_items","hide");
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

		$fdata["strField"] = "hide";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hide";

	
	
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




	$tdatafood_items["hide"] = $fdata;
//	fav
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fav";
	$fdata["GoodName"] = "fav";
	$fdata["ownerTable"] = "food_items";
	$fdata["Label"] = GetFieldLabel("food_items","fav");
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

		$fdata["strField"] = "fav";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fav";

	
	
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




	$tdatafood_items["fav"] = $fdata;


$tables_data["food_items"]=&$tdatafood_items;
$field_labels["food_items"] = &$fieldLabelsfood_items;
$fieldToolTips["food_items"] = &$fieldToolTipsfood_items;
$page_titles["food_items"] = &$pageTitlesfood_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["food_items"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["food_items"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_food_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	item,  	serve_size,  	carbs,  	hide,  	fav";
$proto0["m_strFrom"] = "FROM food_items";
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
	"m_strTable" => "food_items",
	"m_srcTableName" => "food_items"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "food_items";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "food_items",
	"m_srcTableName" => "food_items"
));

$proto7["m_sql"] = "item";
$proto7["m_srcTableName"] = "food_items";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "serve_size",
	"m_strTable" => "food_items",
	"m_srcTableName" => "food_items"
));

$proto9["m_sql"] = "serve_size";
$proto9["m_srcTableName"] = "food_items";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "carbs",
	"m_strTable" => "food_items",
	"m_srcTableName" => "food_items"
));

$proto11["m_sql"] = "carbs";
$proto11["m_srcTableName"] = "food_items";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "food_items",
	"m_srcTableName" => "food_items"
));

$proto13["m_sql"] = "hide";
$proto13["m_srcTableName"] = "food_items";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "fav",
	"m_strTable" => "food_items",
	"m_srcTableName" => "food_items"
));

$proto15["m_sql"] = "fav";
$proto15["m_srcTableName"] = "food_items";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "food_items";
$proto18["m_srcTableName"] = "food_items";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "item";
$proto18["m_columns"][] = "serve_size";
$proto18["m_columns"][] = "carbs";
$proto18["m_columns"][] = "hide";
$proto18["m_columns"][] = "fav";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "food_items";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "food_items";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="food_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_food_items = createSqlQuery_food_items();



						

$tdatafood_items[".sqlquery"] = $queryData_food_items;

$tableEvents["food_items"] = new eventsBase;
$tdatafood_items[".hasEvents"] = false;

?>