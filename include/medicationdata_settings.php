<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamedicationdata = array();
	$tdatamedicationdata[".truncateText"] = true;
	$tdatamedicationdata[".NumberOfChars"] = 80;
	$tdatamedicationdata[".ShortName"] = "medicationdata";
	$tdatamedicationdata[".OwnerID"] = "";
	$tdatamedicationdata[".OriginalTable"] = "medicationdata";

//	field labels
$fieldLabelsmedicationdata = array();
$fieldToolTipsmedicationdata = array();
$pageTitlesmedicationdata = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmedicationdata["English"] = array();
	$fieldToolTipsmedicationdata["English"] = array();
	$pageTitlesmedicationdata["English"] = array();
	$fieldLabelsmedicationdata["English"]["medication"] = "Medication";
	$fieldToolTipsmedicationdata["English"]["medication"] = "";
	$fieldLabelsmedicationdata["English"]["dose"] = "Dose";
	$fieldToolTipsmedicationdata["English"]["dose"] = "";
	$fieldLabelsmedicationdata["English"]["filled_on"] = "Filled On";
	$fieldToolTipsmedicationdata["English"]["filled_on"] = "";
	$fieldLabelsmedicationdata["English"]["refill_due"] = "Refill Due";
	$fieldToolTipsmedicationdata["English"]["refill_due"] = "";
	$fieldLabelsmedicationdata["English"]["parmacy"] = "Parmacy";
	$fieldToolTipsmedicationdata["English"]["parmacy"] = "";
	$fieldLabelsmedicationdata["English"]["doctor"] = "Doctor";
	$fieldToolTipsmedicationdata["English"]["doctor"] = "";
	$fieldLabelsmedicationdata["English"]["prescrp_no"] = "Prescrp No";
	$fieldToolTipsmedicationdata["English"]["prescrp_no"] = "";
	$fieldLabelsmedicationdata["English"]["id"] = "Id";
	$fieldToolTipsmedicationdata["English"]["id"] = "";
	$fieldLabelsmedicationdata["English"]["hide"] = "Hide";
	$fieldToolTipsmedicationdata["English"]["hide"] = "";
	if (count($fieldToolTipsmedicationdata["English"]))
		$tdatamedicationdata[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmedicationdata[""] = array();
	$fieldToolTipsmedicationdata[""] = array();
	$pageTitlesmedicationdata[""] = array();
	$fieldLabelsmedicationdata[""]["medication"] = "Medication";
	$fieldToolTipsmedicationdata[""]["medication"] = "";
	$fieldLabelsmedicationdata[""]["dose"] = "Dose";
	$fieldToolTipsmedicationdata[""]["dose"] = "";
	$fieldLabelsmedicationdata[""]["filled_on"] = "Filled On";
	$fieldToolTipsmedicationdata[""]["filled_on"] = "";
	$fieldLabelsmedicationdata[""]["refill_due"] = "Refill Due";
	$fieldToolTipsmedicationdata[""]["refill_due"] = "";
	$fieldLabelsmedicationdata[""]["parmacy"] = "Parmacy";
	$fieldToolTipsmedicationdata[""]["parmacy"] = "";
	$fieldLabelsmedicationdata[""]["doctor"] = "Doctor";
	$fieldToolTipsmedicationdata[""]["doctor"] = "";
	$fieldLabelsmedicationdata[""]["prescrp_no"] = "Prescrp No";
	$fieldToolTipsmedicationdata[""]["prescrp_no"] = "";
	$fieldLabelsmedicationdata[""]["id"] = "Id";
	$fieldToolTipsmedicationdata[""]["id"] = "";
	$fieldLabelsmedicationdata[""]["hide"] = "Hide";
	$fieldToolTipsmedicationdata[""]["hide"] = "";
	if (count($fieldToolTipsmedicationdata[""]))
		$tdatamedicationdata[".isUseToolTips"] = true;
}


	$tdatamedicationdata[".NCSearch"] = true;



$tdatamedicationdata[".shortTableName"] = "medicationdata";
$tdatamedicationdata[".nSecOptions"] = 0;
$tdatamedicationdata[".recsPerRowList"] = 1;
$tdatamedicationdata[".recsPerRowPrint"] = 1;
$tdatamedicationdata[".mainTableOwnerID"] = "";
$tdatamedicationdata[".moveNext"] = 1;
$tdatamedicationdata[".entityType"] = 0;

$tdatamedicationdata[".strOriginalTableName"] = "medicationdata";




$tdatamedicationdata[".showAddInPopup"] = false;

$tdatamedicationdata[".showEditInPopup"] = false;

$tdatamedicationdata[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamedicationdata[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamedicationdata[".fieldsForRegister"] = array();

$tdatamedicationdata[".listAjax"] = false;

	$tdatamedicationdata[".audit"] = false;

	$tdatamedicationdata[".locking"] = false;

$tdatamedicationdata[".edit"] = true;
$tdatamedicationdata[".afterEditAction"] = 0;
$tdatamedicationdata[".closePopupAfterEdit"] = 1;
$tdatamedicationdata[".afterEditActionDetTable"] = "";

$tdatamedicationdata[".add"] = true;
$tdatamedicationdata[".afterAddAction"] = 0;
$tdatamedicationdata[".closePopupAfterAdd"] = 1;
$tdatamedicationdata[".afterAddActionDetTable"] = "";

$tdatamedicationdata[".list"] = true;

$tdatamedicationdata[".inlineEdit"] = true;
$tdatamedicationdata[".inlineAdd"] = true;
$tdatamedicationdata[".view"] = true;

$tdatamedicationdata[".import"] = true;

$tdatamedicationdata[".exportTo"] = true;

$tdatamedicationdata[".printFriendly"] = true;

$tdatamedicationdata[".delete"] = true;

$tdatamedicationdata[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamedicationdata[".searchSaving"] = false;
//

if (isMobile()){
	$tdatamedicationdata[".showSearchPanel"] = true;
}
else
	$tdatamedicationdata[".showSearchPanel"] = false;

if (isMobile())
	$tdatamedicationdata[".isUseAjaxSuggest"] = false;
else
	$tdatamedicationdata[".isUseAjaxSuggest"] = true;

$tdatamedicationdata[".rowHighlite"] = true;



$tdatamedicationdata[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamedicationdata[".isUseTimeForSearch"] = false;





$tdatamedicationdata[".allSearchFields"] = array();
$tdatamedicationdata[".filterFields"] = array();
$tdatamedicationdata[".requiredSearchFields"] = array();

$tdatamedicationdata[".allSearchFields"][] = "medication";
	$tdatamedicationdata[".allSearchFields"][] = "dose";
	$tdatamedicationdata[".allSearchFields"][] = "filled_on";
	$tdatamedicationdata[".allSearchFields"][] = "refill_due";
	$tdatamedicationdata[".allSearchFields"][] = "parmacy";
	$tdatamedicationdata[".allSearchFields"][] = "doctor";
	$tdatamedicationdata[".allSearchFields"][] = "prescrp_no";
	$tdatamedicationdata[".allSearchFields"][] = "hide";
	

$tdatamedicationdata[".googleLikeFields"] = array();
$tdatamedicationdata[".googleLikeFields"][] = "id";
$tdatamedicationdata[".googleLikeFields"][] = "medication";
$tdatamedicationdata[".googleLikeFields"][] = "dose";
$tdatamedicationdata[".googleLikeFields"][] = "filled_on";
$tdatamedicationdata[".googleLikeFields"][] = "refill_due";
$tdatamedicationdata[".googleLikeFields"][] = "parmacy";
$tdatamedicationdata[".googleLikeFields"][] = "doctor";
$tdatamedicationdata[".googleLikeFields"][] = "prescrp_no";
$tdatamedicationdata[".googleLikeFields"][] = "hide";


$tdatamedicationdata[".advSearchFields"] = array();
$tdatamedicationdata[".advSearchFields"][] = "medication";
$tdatamedicationdata[".advSearchFields"][] = "dose";
$tdatamedicationdata[".advSearchFields"][] = "filled_on";
$tdatamedicationdata[".advSearchFields"][] = "refill_due";
$tdatamedicationdata[".advSearchFields"][] = "parmacy";
$tdatamedicationdata[".advSearchFields"][] = "doctor";
$tdatamedicationdata[".advSearchFields"][] = "prescrp_no";
$tdatamedicationdata[".advSearchFields"][] = "hide";

$tdatamedicationdata[".tableType"] = "list";

$tdatamedicationdata[".printerPageOrientation"] = 0;
$tdatamedicationdata[".nPrinterPageScale"] = 100;

$tdatamedicationdata[".nPrinterSplitRecords"] = 40;

$tdatamedicationdata[".nPrinterPDFSplitRecords"] = 40;



$tdatamedicationdata[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatamedicationdata[".pageSize"] = 20;

$tdatamedicationdata[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamedicationdata[".strOrderBy"] = $tstrOrderBy;

$tdatamedicationdata[".orderindexes"] = array();

$tdatamedicationdata[".sqlHead"] = "SELECT id,  	medication,  	dose,  	filled_on,  	refill_due,  	parmacy,  	doctor,  	prescrp_no,  	hide";
$tdatamedicationdata[".sqlFrom"] = "FROM medicationdata";
$tdatamedicationdata[".sqlWhereExpr"] = "";
$tdatamedicationdata[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamedicationdata[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamedicationdata[".arrGroupsPerPage"] = $arrGPP;

$tdatamedicationdata[".highlightSearchResults"] = true;

$tableKeysmedicationdata = array();
$tableKeysmedicationdata[] = "id";
$tdatamedicationdata[".Keys"] = $tableKeysmedicationdata;

$tdatamedicationdata[".listFields"] = array();
$tdatamedicationdata[".listFields"][] = "medication";
$tdatamedicationdata[".listFields"][] = "dose";
$tdatamedicationdata[".listFields"][] = "filled_on";
$tdatamedicationdata[".listFields"][] = "refill_due";
$tdatamedicationdata[".listFields"][] = "parmacy";
$tdatamedicationdata[".listFields"][] = "doctor";
$tdatamedicationdata[".listFields"][] = "prescrp_no";
$tdatamedicationdata[".listFields"][] = "hide";

$tdatamedicationdata[".hideMobileList"] = array();


$tdatamedicationdata[".viewFields"] = array();
$tdatamedicationdata[".viewFields"][] = "id";
$tdatamedicationdata[".viewFields"][] = "medication";
$tdatamedicationdata[".viewFields"][] = "dose";
$tdatamedicationdata[".viewFields"][] = "filled_on";
$tdatamedicationdata[".viewFields"][] = "refill_due";
$tdatamedicationdata[".viewFields"][] = "parmacy";
$tdatamedicationdata[".viewFields"][] = "doctor";
$tdatamedicationdata[".viewFields"][] = "prescrp_no";
$tdatamedicationdata[".viewFields"][] = "hide";

$tdatamedicationdata[".addFields"] = array();
$tdatamedicationdata[".addFields"][] = "medication";
$tdatamedicationdata[".addFields"][] = "dose";
$tdatamedicationdata[".addFields"][] = "filled_on";
$tdatamedicationdata[".addFields"][] = "refill_due";
$tdatamedicationdata[".addFields"][] = "parmacy";
$tdatamedicationdata[".addFields"][] = "doctor";
$tdatamedicationdata[".addFields"][] = "prescrp_no";
$tdatamedicationdata[".addFields"][] = "hide";

$tdatamedicationdata[".masterListFields"] = array();
$tdatamedicationdata[".masterListFields"][] = "id";
$tdatamedicationdata[".masterListFields"][] = "medication";
$tdatamedicationdata[".masterListFields"][] = "dose";
$tdatamedicationdata[".masterListFields"][] = "filled_on";
$tdatamedicationdata[".masterListFields"][] = "refill_due";
$tdatamedicationdata[".masterListFields"][] = "parmacy";
$tdatamedicationdata[".masterListFields"][] = "doctor";
$tdatamedicationdata[".masterListFields"][] = "prescrp_no";
$tdatamedicationdata[".masterListFields"][] = "hide";

$tdatamedicationdata[".inlineAddFields"] = array();
$tdatamedicationdata[".inlineAddFields"][] = "medication";
$tdatamedicationdata[".inlineAddFields"][] = "dose";
$tdatamedicationdata[".inlineAddFields"][] = "filled_on";
$tdatamedicationdata[".inlineAddFields"][] = "refill_due";
$tdatamedicationdata[".inlineAddFields"][] = "parmacy";
$tdatamedicationdata[".inlineAddFields"][] = "doctor";
$tdatamedicationdata[".inlineAddFields"][] = "prescrp_no";
$tdatamedicationdata[".inlineAddFields"][] = "hide";

$tdatamedicationdata[".editFields"] = array();
$tdatamedicationdata[".editFields"][] = "id";
$tdatamedicationdata[".editFields"][] = "medication";
$tdatamedicationdata[".editFields"][] = "dose";
$tdatamedicationdata[".editFields"][] = "filled_on";
$tdatamedicationdata[".editFields"][] = "refill_due";
$tdatamedicationdata[".editFields"][] = "parmacy";
$tdatamedicationdata[".editFields"][] = "doctor";
$tdatamedicationdata[".editFields"][] = "prescrp_no";
$tdatamedicationdata[".editFields"][] = "hide";

$tdatamedicationdata[".inlineEditFields"] = array();
$tdatamedicationdata[".inlineEditFields"][] = "medication";
$tdatamedicationdata[".inlineEditFields"][] = "dose";
$tdatamedicationdata[".inlineEditFields"][] = "filled_on";
$tdatamedicationdata[".inlineEditFields"][] = "refill_due";
$tdatamedicationdata[".inlineEditFields"][] = "parmacy";
$tdatamedicationdata[".inlineEditFields"][] = "doctor";
$tdatamedicationdata[".inlineEditFields"][] = "prescrp_no";
$tdatamedicationdata[".inlineEditFields"][] = "hide";

$tdatamedicationdata[".exportFields"] = array();
$tdatamedicationdata[".exportFields"][] = "medication";
$tdatamedicationdata[".exportFields"][] = "dose";
$tdatamedicationdata[".exportFields"][] = "filled_on";
$tdatamedicationdata[".exportFields"][] = "refill_due";
$tdatamedicationdata[".exportFields"][] = "parmacy";
$tdatamedicationdata[".exportFields"][] = "doctor";
$tdatamedicationdata[".exportFields"][] = "prescrp_no";
$tdatamedicationdata[".exportFields"][] = "hide";

$tdatamedicationdata[".importFields"] = array();
$tdatamedicationdata[".importFields"][] = "medication";
$tdatamedicationdata[".importFields"][] = "dose";
$tdatamedicationdata[".importFields"][] = "filled_on";
$tdatamedicationdata[".importFields"][] = "refill_due";
$tdatamedicationdata[".importFields"][] = "parmacy";
$tdatamedicationdata[".importFields"][] = "doctor";
$tdatamedicationdata[".importFields"][] = "prescrp_no";
$tdatamedicationdata[".importFields"][] = "hide";

$tdatamedicationdata[".printFields"] = array();
$tdatamedicationdata[".printFields"][] = "medication";
$tdatamedicationdata[".printFields"][] = "dose";
$tdatamedicationdata[".printFields"][] = "filled_on";
$tdatamedicationdata[".printFields"][] = "refill_due";
$tdatamedicationdata[".printFields"][] = "parmacy";
$tdatamedicationdata[".printFields"][] = "doctor";
$tdatamedicationdata[".printFields"][] = "prescrp_no";
$tdatamedicationdata[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "medicationdata";
	$fdata["Label"] = GetFieldLabel("medicationdata","id");
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








	$tdatamedicationdata["id"] = $fdata;
//	medication
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "medication";
	$fdata["GoodName"] = "medication";
	$fdata["ownerTable"] = "medicationdata";
	$fdata["Label"] = GetFieldLabel("medicationdata","medication");
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




	$tdatamedicationdata["medication"] = $fdata;
//	dose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dose";
	$fdata["GoodName"] = "dose";
	$fdata["ownerTable"] = "medicationdata";
	$fdata["Label"] = GetFieldLabel("medicationdata","dose");
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




	$tdatamedicationdata["dose"] = $fdata;
//	filled_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "filled_on";
	$fdata["GoodName"] = "filled_on";
	$fdata["ownerTable"] = "medicationdata";
	$fdata["Label"] = GetFieldLabel("medicationdata","filled_on");
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




	$tdatamedicationdata["filled_on"] = $fdata;
//	refill_due
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "refill_due";
	$fdata["GoodName"] = "refill_due";
	$fdata["ownerTable"] = "medicationdata";
	$fdata["Label"] = GetFieldLabel("medicationdata","refill_due");
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




	$tdatamedicationdata["refill_due"] = $fdata;
//	parmacy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "parmacy";
	$fdata["GoodName"] = "parmacy";
	$fdata["ownerTable"] = "medicationdata";
	$fdata["Label"] = GetFieldLabel("medicationdata","parmacy");
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




	$tdatamedicationdata["parmacy"] = $fdata;
//	doctor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "doctor";
	$fdata["GoodName"] = "doctor";
	$fdata["ownerTable"] = "medicationdata";
	$fdata["Label"] = GetFieldLabel("medicationdata","doctor");
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




	$tdatamedicationdata["doctor"] = $fdata;
//	prescrp_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "prescrp_no";
	$fdata["GoodName"] = "prescrp_no";
	$fdata["ownerTable"] = "medicationdata";
	$fdata["Label"] = GetFieldLabel("medicationdata","prescrp_no");
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




	$tdatamedicationdata["prescrp_no"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "medicationdata";
	$fdata["Label"] = GetFieldLabel("medicationdata","hide");
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




	$tdatamedicationdata["hide"] = $fdata;


$tables_data["medicationdata"]=&$tdatamedicationdata;
$field_labels["medicationdata"] = &$fieldLabelsmedicationdata;
$fieldToolTips["medicationdata"] = &$fieldToolTipsmedicationdata;
$page_titles["medicationdata"] = &$pageTitlesmedicationdata;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["medicationdata"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["medicationdata"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_medicationdata()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	medication,  	dose,  	filled_on,  	refill_due,  	parmacy,  	doctor,  	prescrp_no,  	hide";
$proto0["m_strFrom"] = "FROM medicationdata";
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
	"m_strTable" => "medicationdata",
	"m_srcTableName" => "medicationdata"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "medicationdata";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "medication",
	"m_strTable" => "medicationdata",
	"m_srcTableName" => "medicationdata"
));

$proto7["m_sql"] = "medication";
$proto7["m_srcTableName"] = "medicationdata";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "dose",
	"m_strTable" => "medicationdata",
	"m_srcTableName" => "medicationdata"
));

$proto9["m_sql"] = "dose";
$proto9["m_srcTableName"] = "medicationdata";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "filled_on",
	"m_strTable" => "medicationdata",
	"m_srcTableName" => "medicationdata"
));

$proto11["m_sql"] = "filled_on";
$proto11["m_srcTableName"] = "medicationdata";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "refill_due",
	"m_strTable" => "medicationdata",
	"m_srcTableName" => "medicationdata"
));

$proto13["m_sql"] = "refill_due";
$proto13["m_srcTableName"] = "medicationdata";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "parmacy",
	"m_strTable" => "medicationdata",
	"m_srcTableName" => "medicationdata"
));

$proto15["m_sql"] = "parmacy";
$proto15["m_srcTableName"] = "medicationdata";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "doctor",
	"m_strTable" => "medicationdata",
	"m_srcTableName" => "medicationdata"
));

$proto17["m_sql"] = "doctor";
$proto17["m_srcTableName"] = "medicationdata";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "prescrp_no",
	"m_strTable" => "medicationdata",
	"m_srcTableName" => "medicationdata"
));

$proto19["m_sql"] = "prescrp_no";
$proto19["m_srcTableName"] = "medicationdata";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "medicationdata",
	"m_srcTableName" => "medicationdata"
));

$proto21["m_sql"] = "hide";
$proto21["m_srcTableName"] = "medicationdata";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "medicationdata";
$proto24["m_srcTableName"] = "medicationdata";
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
$proto23["m_sql"] = "medicationdata";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "medicationdata";
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
$proto0["m_srcTableName"]="medicationdata";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_medicationdata = createSqlQuery_medicationdata();



									

$tdatamedicationdata[".sqlquery"] = $queryData_medicationdata;

$tableEvents["medicationdata"] = new eventsBase;
$tdatamedicationdata[".hasEvents"] = false;

?>