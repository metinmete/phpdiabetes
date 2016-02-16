<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamedicine_type = array();
	$tdatamedicine_type[".truncateText"] = true;
	$tdatamedicine_type[".NumberOfChars"] = 80;
	$tdatamedicine_type[".ShortName"] = "medicine_type";
	$tdatamedicine_type[".OwnerID"] = "";
	$tdatamedicine_type[".OriginalTable"] = "medicine_type";

//	field labels
$fieldLabelsmedicine_type = array();
$fieldToolTipsmedicine_type = array();
$pageTitlesmedicine_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmedicine_type["English"] = array();
	$fieldToolTipsmedicine_type["English"] = array();
	$pageTitlesmedicine_type["English"] = array();
	$fieldLabelsmedicine_type["English"]["medication"] = "Medication";
	$fieldToolTipsmedicine_type["English"]["medication"] = "";
	$fieldLabelsmedicine_type["English"]["dose"] = "Dose";
	$fieldToolTipsmedicine_type["English"]["dose"] = "";
	$fieldLabelsmedicine_type["English"]["filled_on"] = "Filled On";
	$fieldToolTipsmedicine_type["English"]["filled_on"] = "";
	$fieldLabelsmedicine_type["English"]["refill_due"] = "Refill Due";
	$fieldToolTipsmedicine_type["English"]["refill_due"] = "";
	$fieldLabelsmedicine_type["English"]["parmacy"] = "Parmacy";
	$fieldToolTipsmedicine_type["English"]["parmacy"] = "";
	$fieldLabelsmedicine_type["English"]["doctor"] = "Doctor";
	$fieldToolTipsmedicine_type["English"]["doctor"] = "";
	$fieldLabelsmedicine_type["English"]["prescrp_no"] = "Prescrp No";
	$fieldToolTipsmedicine_type["English"]["prescrp_no"] = "";
	$fieldLabelsmedicine_type["English"]["id"] = "Id";
	$fieldToolTipsmedicine_type["English"]["id"] = "";
	$fieldLabelsmedicine_type["English"]["hide"] = "Hide";
	$fieldToolTipsmedicine_type["English"]["hide"] = "";
	if (count($fieldToolTipsmedicine_type["English"]))
		$tdatamedicine_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmedicine_type[""] = array();
	$fieldToolTipsmedicine_type[""] = array();
	$pageTitlesmedicine_type[""] = array();
	$fieldLabelsmedicine_type[""]["medication"] = "Medication";
	$fieldToolTipsmedicine_type[""]["medication"] = "";
	$fieldLabelsmedicine_type[""]["dose"] = "Dose";
	$fieldToolTipsmedicine_type[""]["dose"] = "";
	$fieldLabelsmedicine_type[""]["filled_on"] = "Filled On";
	$fieldToolTipsmedicine_type[""]["filled_on"] = "";
	$fieldLabelsmedicine_type[""]["refill_due"] = "Refill Due";
	$fieldToolTipsmedicine_type[""]["refill_due"] = "";
	$fieldLabelsmedicine_type[""]["parmacy"] = "Parmacy";
	$fieldToolTipsmedicine_type[""]["parmacy"] = "";
	$fieldLabelsmedicine_type[""]["doctor"] = "Doctor";
	$fieldToolTipsmedicine_type[""]["doctor"] = "";
	$fieldLabelsmedicine_type[""]["prescrp_no"] = "Prescrp No";
	$fieldToolTipsmedicine_type[""]["prescrp_no"] = "";
	$fieldLabelsmedicine_type[""]["id"] = "Id";
	$fieldToolTipsmedicine_type[""]["id"] = "";
	$fieldLabelsmedicine_type[""]["hide"] = "Hide";
	$fieldToolTipsmedicine_type[""]["hide"] = "";
	if (count($fieldToolTipsmedicine_type[""]))
		$tdatamedicine_type[".isUseToolTips"] = true;
}


	$tdatamedicine_type[".NCSearch"] = true;



$tdatamedicine_type[".shortTableName"] = "medicine_type";
$tdatamedicine_type[".nSecOptions"] = 0;
$tdatamedicine_type[".recsPerRowList"] = 1;
$tdatamedicine_type[".recsPerRowPrint"] = 1;
$tdatamedicine_type[".mainTableOwnerID"] = "";
$tdatamedicine_type[".moveNext"] = 1;
$tdatamedicine_type[".entityType"] = 0;

$tdatamedicine_type[".strOriginalTableName"] = "medicine_type";




$tdatamedicine_type[".showAddInPopup"] = false;

$tdatamedicine_type[".showEditInPopup"] = false;

$tdatamedicine_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamedicine_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamedicine_type[".fieldsForRegister"] = array();

$tdatamedicine_type[".listAjax"] = false;

	$tdatamedicine_type[".audit"] = false;

	$tdatamedicine_type[".locking"] = false;

$tdatamedicine_type[".edit"] = true;
$tdatamedicine_type[".afterEditAction"] = 0;
$tdatamedicine_type[".closePopupAfterEdit"] = 1;
$tdatamedicine_type[".afterEditActionDetTable"] = "";

$tdatamedicine_type[".add"] = true;
$tdatamedicine_type[".afterAddAction"] = 0;
$tdatamedicine_type[".closePopupAfterAdd"] = 1;
$tdatamedicine_type[".afterAddActionDetTable"] = "";

$tdatamedicine_type[".list"] = true;

$tdatamedicine_type[".inlineEdit"] = true;
$tdatamedicine_type[".inlineAdd"] = true;
$tdatamedicine_type[".view"] = true;

$tdatamedicine_type[".import"] = true;

$tdatamedicine_type[".exportTo"] = true;

$tdatamedicine_type[".printFriendly"] = true;

$tdatamedicine_type[".delete"] = true;

$tdatamedicine_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamedicine_type[".searchSaving"] = false;
//

if (isMobile()){
	$tdatamedicine_type[".showSearchPanel"] = true;
}
else
	$tdatamedicine_type[".showSearchPanel"] = false;

if (isMobile())
	$tdatamedicine_type[".isUseAjaxSuggest"] = false;
else
	$tdatamedicine_type[".isUseAjaxSuggest"] = true;

$tdatamedicine_type[".rowHighlite"] = true;



$tdatamedicine_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamedicine_type[".isUseTimeForSearch"] = false;





$tdatamedicine_type[".allSearchFields"] = array();
$tdatamedicine_type[".filterFields"] = array();
$tdatamedicine_type[".requiredSearchFields"] = array();

$tdatamedicine_type[".allSearchFields"][] = "medication";
	$tdatamedicine_type[".allSearchFields"][] = "dose";
	$tdatamedicine_type[".allSearchFields"][] = "filled_on";
	$tdatamedicine_type[".allSearchFields"][] = "refill_due";
	$tdatamedicine_type[".allSearchFields"][] = "parmacy";
	$tdatamedicine_type[".allSearchFields"][] = "doctor";
	$tdatamedicine_type[".allSearchFields"][] = "prescrp_no";
	$tdatamedicine_type[".allSearchFields"][] = "hide";
	

$tdatamedicine_type[".googleLikeFields"] = array();
$tdatamedicine_type[".googleLikeFields"][] = "id";
$tdatamedicine_type[".googleLikeFields"][] = "medication";
$tdatamedicine_type[".googleLikeFields"][] = "dose";
$tdatamedicine_type[".googleLikeFields"][] = "filled_on";
$tdatamedicine_type[".googleLikeFields"][] = "refill_due";
$tdatamedicine_type[".googleLikeFields"][] = "parmacy";
$tdatamedicine_type[".googleLikeFields"][] = "doctor";
$tdatamedicine_type[".googleLikeFields"][] = "prescrp_no";
$tdatamedicine_type[".googleLikeFields"][] = "hide";


$tdatamedicine_type[".advSearchFields"] = array();
$tdatamedicine_type[".advSearchFields"][] = "medication";
$tdatamedicine_type[".advSearchFields"][] = "dose";
$tdatamedicine_type[".advSearchFields"][] = "filled_on";
$tdatamedicine_type[".advSearchFields"][] = "refill_due";
$tdatamedicine_type[".advSearchFields"][] = "parmacy";
$tdatamedicine_type[".advSearchFields"][] = "doctor";
$tdatamedicine_type[".advSearchFields"][] = "prescrp_no";
$tdatamedicine_type[".advSearchFields"][] = "hide";

$tdatamedicine_type[".tableType"] = "list";

$tdatamedicine_type[".printerPageOrientation"] = 0;
$tdatamedicine_type[".nPrinterPageScale"] = 100;

$tdatamedicine_type[".nPrinterSplitRecords"] = 40;

$tdatamedicine_type[".nPrinterPDFSplitRecords"] = 40;



$tdatamedicine_type[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatamedicine_type[".pageSize"] = 20;

$tdatamedicine_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamedicine_type[".strOrderBy"] = $tstrOrderBy;

$tdatamedicine_type[".orderindexes"] = array();

$tdatamedicine_type[".sqlHead"] = "SELECT id,  	medication,  	dose,  	filled_on,  	refill_due,  	parmacy,  	doctor,  	prescrp_no,  	hide";
$tdatamedicine_type[".sqlFrom"] = "FROM medicine_type";
$tdatamedicine_type[".sqlWhereExpr"] = "";
$tdatamedicine_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamedicine_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamedicine_type[".arrGroupsPerPage"] = $arrGPP;

$tdatamedicine_type[".highlightSearchResults"] = true;

$tableKeysmedicine_type = array();
$tableKeysmedicine_type[] = "id";
$tdatamedicine_type[".Keys"] = $tableKeysmedicine_type;

$tdatamedicine_type[".listFields"] = array();
$tdatamedicine_type[".listFields"][] = "medication";
$tdatamedicine_type[".listFields"][] = "dose";
$tdatamedicine_type[".listFields"][] = "filled_on";
$tdatamedicine_type[".listFields"][] = "refill_due";
$tdatamedicine_type[".listFields"][] = "parmacy";
$tdatamedicine_type[".listFields"][] = "doctor";
$tdatamedicine_type[".listFields"][] = "prescrp_no";
$tdatamedicine_type[".listFields"][] = "hide";

$tdatamedicine_type[".hideMobileList"] = array();


$tdatamedicine_type[".viewFields"] = array();
$tdatamedicine_type[".viewFields"][] = "id";
$tdatamedicine_type[".viewFields"][] = "medication";
$tdatamedicine_type[".viewFields"][] = "dose";
$tdatamedicine_type[".viewFields"][] = "filled_on";
$tdatamedicine_type[".viewFields"][] = "refill_due";
$tdatamedicine_type[".viewFields"][] = "parmacy";
$tdatamedicine_type[".viewFields"][] = "doctor";
$tdatamedicine_type[".viewFields"][] = "prescrp_no";
$tdatamedicine_type[".viewFields"][] = "hide";

$tdatamedicine_type[".addFields"] = array();
$tdatamedicine_type[".addFields"][] = "medication";
$tdatamedicine_type[".addFields"][] = "dose";
$tdatamedicine_type[".addFields"][] = "filled_on";
$tdatamedicine_type[".addFields"][] = "refill_due";
$tdatamedicine_type[".addFields"][] = "parmacy";
$tdatamedicine_type[".addFields"][] = "doctor";
$tdatamedicine_type[".addFields"][] = "prescrp_no";
$tdatamedicine_type[".addFields"][] = "hide";

$tdatamedicine_type[".masterListFields"] = array();
$tdatamedicine_type[".masterListFields"][] = "id";
$tdatamedicine_type[".masterListFields"][] = "medication";
$tdatamedicine_type[".masterListFields"][] = "dose";
$tdatamedicine_type[".masterListFields"][] = "filled_on";
$tdatamedicine_type[".masterListFields"][] = "refill_due";
$tdatamedicine_type[".masterListFields"][] = "parmacy";
$tdatamedicine_type[".masterListFields"][] = "doctor";
$tdatamedicine_type[".masterListFields"][] = "prescrp_no";
$tdatamedicine_type[".masterListFields"][] = "hide";

$tdatamedicine_type[".inlineAddFields"] = array();
$tdatamedicine_type[".inlineAddFields"][] = "medication";
$tdatamedicine_type[".inlineAddFields"][] = "dose";
$tdatamedicine_type[".inlineAddFields"][] = "filled_on";
$tdatamedicine_type[".inlineAddFields"][] = "refill_due";
$tdatamedicine_type[".inlineAddFields"][] = "parmacy";
$tdatamedicine_type[".inlineAddFields"][] = "doctor";
$tdatamedicine_type[".inlineAddFields"][] = "prescrp_no";
$tdatamedicine_type[".inlineAddFields"][] = "hide";

$tdatamedicine_type[".editFields"] = array();
$tdatamedicine_type[".editFields"][] = "id";
$tdatamedicine_type[".editFields"][] = "medication";
$tdatamedicine_type[".editFields"][] = "dose";
$tdatamedicine_type[".editFields"][] = "filled_on";
$tdatamedicine_type[".editFields"][] = "refill_due";
$tdatamedicine_type[".editFields"][] = "parmacy";
$tdatamedicine_type[".editFields"][] = "doctor";
$tdatamedicine_type[".editFields"][] = "prescrp_no";
$tdatamedicine_type[".editFields"][] = "hide";

$tdatamedicine_type[".inlineEditFields"] = array();
$tdatamedicine_type[".inlineEditFields"][] = "medication";
$tdatamedicine_type[".inlineEditFields"][] = "dose";
$tdatamedicine_type[".inlineEditFields"][] = "filled_on";
$tdatamedicine_type[".inlineEditFields"][] = "refill_due";
$tdatamedicine_type[".inlineEditFields"][] = "parmacy";
$tdatamedicine_type[".inlineEditFields"][] = "doctor";
$tdatamedicine_type[".inlineEditFields"][] = "prescrp_no";
$tdatamedicine_type[".inlineEditFields"][] = "hide";

$tdatamedicine_type[".exportFields"] = array();
$tdatamedicine_type[".exportFields"][] = "medication";
$tdatamedicine_type[".exportFields"][] = "dose";
$tdatamedicine_type[".exportFields"][] = "filled_on";
$tdatamedicine_type[".exportFields"][] = "refill_due";
$tdatamedicine_type[".exportFields"][] = "parmacy";
$tdatamedicine_type[".exportFields"][] = "doctor";
$tdatamedicine_type[".exportFields"][] = "prescrp_no";
$tdatamedicine_type[".exportFields"][] = "hide";

$tdatamedicine_type[".importFields"] = array();
$tdatamedicine_type[".importFields"][] = "medication";
$tdatamedicine_type[".importFields"][] = "dose";
$tdatamedicine_type[".importFields"][] = "filled_on";
$tdatamedicine_type[".importFields"][] = "refill_due";
$tdatamedicine_type[".importFields"][] = "parmacy";
$tdatamedicine_type[".importFields"][] = "doctor";
$tdatamedicine_type[".importFields"][] = "prescrp_no";
$tdatamedicine_type[".importFields"][] = "hide";

$tdatamedicine_type[".printFields"] = array();
$tdatamedicine_type[".printFields"][] = "medication";
$tdatamedicine_type[".printFields"][] = "dose";
$tdatamedicine_type[".printFields"][] = "filled_on";
$tdatamedicine_type[".printFields"][] = "refill_due";
$tdatamedicine_type[".printFields"][] = "parmacy";
$tdatamedicine_type[".printFields"][] = "doctor";
$tdatamedicine_type[".printFields"][] = "prescrp_no";
$tdatamedicine_type[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "medicine_type";
	$fdata["Label"] = GetFieldLabel("medicine_type","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

	
	
	
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








	$tdatamedicine_type["id"] = $fdata;
//	medication
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "medication";
	$fdata["GoodName"] = "medication";
	$fdata["ownerTable"] = "medicine_type";
	$fdata["Label"] = GetFieldLabel("medicine_type","medication");
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




	$tdatamedicine_type["medication"] = $fdata;
//	dose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dose";
	$fdata["GoodName"] = "dose";
	$fdata["ownerTable"] = "medicine_type";
	$fdata["Label"] = GetFieldLabel("medicine_type","dose");
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




	$tdatamedicine_type["dose"] = $fdata;
//	filled_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "filled_on";
	$fdata["GoodName"] = "filled_on";
	$fdata["ownerTable"] = "medicine_type";
	$fdata["Label"] = GetFieldLabel("medicine_type","filled_on");
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

		$fdata["strField"] = "filled_on";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filled_on";

	
	
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




	$tdatamedicine_type["filled_on"] = $fdata;
//	refill_due
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "refill_due";
	$fdata["GoodName"] = "refill_due";
	$fdata["ownerTable"] = "medicine_type";
	$fdata["Label"] = GetFieldLabel("medicine_type","refill_due");
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

		$fdata["strField"] = "refill_due";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "refill_due";

	
	
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




	$tdatamedicine_type["refill_due"] = $fdata;
//	parmacy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "parmacy";
	$fdata["GoodName"] = "parmacy";
	$fdata["ownerTable"] = "medicine_type";
	$fdata["Label"] = GetFieldLabel("medicine_type","parmacy");
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

		$fdata["strField"] = "parmacy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parmacy";

	
	
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




	$tdatamedicine_type["parmacy"] = $fdata;
//	doctor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "doctor";
	$fdata["GoodName"] = "doctor";
	$fdata["ownerTable"] = "medicine_type";
	$fdata["Label"] = GetFieldLabel("medicine_type","doctor");
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

		$fdata["strField"] = "doctor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doctor";

	
	
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




	$tdatamedicine_type["doctor"] = $fdata;
//	prescrp_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "prescrp_no";
	$fdata["GoodName"] = "prescrp_no";
	$fdata["ownerTable"] = "medicine_type";
	$fdata["Label"] = GetFieldLabel("medicine_type","prescrp_no");
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

		$fdata["strField"] = "prescrp_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prescrp_no";

	
	
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




	$tdatamedicine_type["prescrp_no"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "medicine_type";
	$fdata["Label"] = GetFieldLabel("medicine_type","hide");
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




	$tdatamedicine_type["hide"] = $fdata;


$tables_data["medicine_type"]=&$tdatamedicine_type;
$field_labels["medicine_type"] = &$fieldLabelsmedicine_type;
$fieldToolTips["medicine_type"] = &$fieldToolTipsmedicine_type;
$page_titles["medicine_type"] = &$pageTitlesmedicine_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["medicine_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["medicine_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_medicine_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	medication,  	dose,  	filled_on,  	refill_due,  	parmacy,  	doctor,  	prescrp_no,  	hide";
$proto0["m_strFrom"] = "FROM medicine_type";
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
	"m_strTable" => "medicine_type",
	"m_srcTableName" => "medicine_type"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "medicine_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "medication",
	"m_strTable" => "medicine_type",
	"m_srcTableName" => "medicine_type"
));

$proto7["m_sql"] = "medication";
$proto7["m_srcTableName"] = "medicine_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "dose",
	"m_strTable" => "medicine_type",
	"m_srcTableName" => "medicine_type"
));

$proto9["m_sql"] = "dose";
$proto9["m_srcTableName"] = "medicine_type";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "filled_on",
	"m_strTable" => "medicine_type",
	"m_srcTableName" => "medicine_type"
));

$proto11["m_sql"] = "filled_on";
$proto11["m_srcTableName"] = "medicine_type";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "refill_due",
	"m_strTable" => "medicine_type",
	"m_srcTableName" => "medicine_type"
));

$proto13["m_sql"] = "refill_due";
$proto13["m_srcTableName"] = "medicine_type";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "parmacy",
	"m_strTable" => "medicine_type",
	"m_srcTableName" => "medicine_type"
));

$proto15["m_sql"] = "parmacy";
$proto15["m_srcTableName"] = "medicine_type";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "doctor",
	"m_strTable" => "medicine_type",
	"m_srcTableName" => "medicine_type"
));

$proto17["m_sql"] = "doctor";
$proto17["m_srcTableName"] = "medicine_type";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "prescrp_no",
	"m_strTable" => "medicine_type",
	"m_srcTableName" => "medicine_type"
));

$proto19["m_sql"] = "prescrp_no";
$proto19["m_srcTableName"] = "medicine_type";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "medicine_type",
	"m_srcTableName" => "medicine_type"
));

$proto21["m_sql"] = "hide";
$proto21["m_srcTableName"] = "medicine_type";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "medicine_type";
$proto24["m_srcTableName"] = "medicine_type";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "medication";
$proto24["m_columns"][] = "dose";
$proto24["m_columns"][] = "filled_on";
$proto24["m_columns"][] = "refill_due";
$proto24["m_columns"][] = "parmacy";
$proto24["m_columns"][] = "doctor";
$proto24["m_columns"][] = "prescrp_no";
$proto24["m_columns"][] = "hide";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "medicine_type";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "medicine_type";
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
$proto0["m_srcTableName"]="medicine_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_medicine_type = createSqlQuery_medicine_type();



									

$tdatamedicine_type[".sqlquery"] = $queryData_medicine_type;

$tableEvents["medicine_type"] = new eventsBase;
$tdatamedicine_type[".hasEvents"] = false;

?>