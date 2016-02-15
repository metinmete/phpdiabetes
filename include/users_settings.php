<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers = array();
	$tdatausers[".ShortName"] = "users";
	$tdatausers[".OwnerID"] = "";
	$tdatausers[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusers = array();
$fieldToolTipsusers = array();
$pageTitlesusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers["English"] = array();
	$fieldToolTipsusers["English"] = array();
	$pageTitlesusers["English"] = array();
	$fieldLabelsusers["English"]["first_name"] = "First Name";
	$fieldToolTipsusers["English"]["first_name"] = "";
	$fieldLabelsusers["English"]["last_name"] = "Last Name";
	$fieldToolTipsusers["English"]["last_name"] = "";
	$fieldLabelsusers["English"]["address1"] = "Address1";
	$fieldToolTipsusers["English"]["address1"] = "";
	$fieldLabelsusers["English"]["address2"] = "Address2";
	$fieldToolTipsusers["English"]["address2"] = "";
	$fieldLabelsusers["English"]["address3"] = "Address3";
	$fieldToolTipsusers["English"]["address3"] = "";
	$fieldLabelsusers["English"]["city"] = "City";
	$fieldToolTipsusers["English"]["city"] = "";
	$fieldLabelsusers["English"]["state"] = "State";
	$fieldToolTipsusers["English"]["state"] = "";
	$fieldLabelsusers["English"]["zip"] = "Zip";
	$fieldToolTipsusers["English"]["zip"] = "";
	$fieldLabelsusers["English"]["email"] = "Email";
	$fieldToolTipsusers["English"]["email"] = "";
	$fieldLabelsusers["English"]["phonetype"] = "Phonetype";
	$fieldToolTipsusers["English"]["phonetype"] = "";
	$fieldLabelsusers["English"]["phonenumber"] = "Phonenumber";
	$fieldToolTipsusers["English"]["phonenumber"] = "";
	$fieldLabelsusers["English"]["id"] = "Id";
	$fieldToolTipsusers["English"]["id"] = "";
	if (count($fieldToolTipsusers["English"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers[""] = array();
	$fieldToolTipsusers[""] = array();
	$pageTitlesusers[""] = array();
	$fieldLabelsusers[""]["first_name"] = "First Name";
	$fieldToolTipsusers[""]["first_name"] = "";
	$fieldLabelsusers[""]["last_name"] = "Last Name";
	$fieldToolTipsusers[""]["last_name"] = "";
	$fieldLabelsusers[""]["address1"] = "Address1";
	$fieldToolTipsusers[""]["address1"] = "";
	$fieldLabelsusers[""]["address2"] = "Address2";
	$fieldToolTipsusers[""]["address2"] = "";
	$fieldLabelsusers[""]["address3"] = "Address3";
	$fieldToolTipsusers[""]["address3"] = "";
	$fieldLabelsusers[""]["city"] = "City";
	$fieldToolTipsusers[""]["city"] = "";
	$fieldLabelsusers[""]["state"] = "State";
	$fieldToolTipsusers[""]["state"] = "";
	$fieldLabelsusers[""]["zip"] = "Zip";
	$fieldToolTipsusers[""]["zip"] = "";
	$fieldLabelsusers[""]["email"] = "Email";
	$fieldToolTipsusers[""]["email"] = "";
	$fieldLabelsusers[""]["phonetype"] = "Phonetype";
	$fieldToolTipsusers[""]["phonetype"] = "";
	$fieldLabelsusers[""]["phonenumber"] = "Phonenumber";
	$fieldToolTipsusers[""]["phonenumber"] = "";
	$fieldLabelsusers[""]["id"] = "Id";
	$fieldToolTipsusers[""]["id"] = "";
	if (count($fieldToolTipsusers[""]))
		$tdatausers[".isUseToolTips"] = true;
}


	$tdatausers[".NCSearch"] = true;



$tdatausers[".shortTableName"] = "users";
$tdatausers[".nSecOptions"] = 0;
$tdatausers[".recsPerRowList"] = 1;
$tdatausers[".recsPerRowPrint"] = 1;
$tdatausers[".mainTableOwnerID"] = "";
$tdatausers[".moveNext"] = 1;
$tdatausers[".entityType"] = 0;

$tdatausers[".strOriginalTableName"] = "users";




$tdatausers[".showAddInPopup"] = false;

$tdatausers[".showEditInPopup"] = false;

$tdatausers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers[".fieldsForRegister"] = array();

$tdatausers[".listAjax"] = false;

	$tdatausers[".audit"] = false;

	$tdatausers[".locking"] = false;

$tdatausers[".edit"] = true;
$tdatausers[".afterEditAction"] = 0;
$tdatausers[".closePopupAfterEdit"] = 1;
$tdatausers[".afterEditActionDetTable"] = "";

$tdatausers[".add"] = true;
$tdatausers[".afterAddAction"] = 0;
$tdatausers[".closePopupAfterAdd"] = 1;
$tdatausers[".afterAddActionDetTable"] = "";

$tdatausers[".list"] = true;

$tdatausers[".inlineEdit"] = true;
$tdatausers[".inlineAdd"] = true;
$tdatausers[".view"] = true;

$tdatausers[".import"] = true;

$tdatausers[".exportTo"] = true;

$tdatausers[".printFriendly"] = true;

$tdatausers[".delete"] = true;

$tdatausers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatausers[".searchSaving"] = false;
//

if (isMobile()){
	$tdatausers[".showSearchPanel"] = true;
}
else
	$tdatausers[".showSearchPanel"] = false;

if (isMobile())
	$tdatausers[".isUseAjaxSuggest"] = false;
else
	$tdatausers[".isUseAjaxSuggest"] = true;

$tdatausers[".rowHighlite"] = true;



$tdatausers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers[".isUseTimeForSearch"] = false;





$tdatausers[".allSearchFields"] = array();
$tdatausers[".filterFields"] = array();
$tdatausers[".requiredSearchFields"] = array();

$tdatausers[".allSearchFields"][] = "id";
	$tdatausers[".allSearchFields"][] = "first_name";
	$tdatausers[".allSearchFields"][] = "last_name";
	$tdatausers[".allSearchFields"][] = "address1";
	$tdatausers[".allSearchFields"][] = "address2";
	$tdatausers[".allSearchFields"][] = "address3";
	$tdatausers[".allSearchFields"][] = "city";
	$tdatausers[".allSearchFields"][] = "state";
	$tdatausers[".allSearchFields"][] = "zip";
	$tdatausers[".allSearchFields"][] = "email";
	$tdatausers[".allSearchFields"][] = "phonetype";
	$tdatausers[".allSearchFields"][] = "phonenumber";
	

$tdatausers[".googleLikeFields"] = array();
$tdatausers[".googleLikeFields"][] = "id";
$tdatausers[".googleLikeFields"][] = "first_name";
$tdatausers[".googleLikeFields"][] = "last_name";
$tdatausers[".googleLikeFields"][] = "address1";
$tdatausers[".googleLikeFields"][] = "address2";
$tdatausers[".googleLikeFields"][] = "address3";
$tdatausers[".googleLikeFields"][] = "city";
$tdatausers[".googleLikeFields"][] = "state";
$tdatausers[".googleLikeFields"][] = "zip";
$tdatausers[".googleLikeFields"][] = "email";
$tdatausers[".googleLikeFields"][] = "phonetype";
$tdatausers[".googleLikeFields"][] = "phonenumber";


$tdatausers[".advSearchFields"] = array();
$tdatausers[".advSearchFields"][] = "id";
$tdatausers[".advSearchFields"][] = "first_name";
$tdatausers[".advSearchFields"][] = "last_name";
$tdatausers[".advSearchFields"][] = "address1";
$tdatausers[".advSearchFields"][] = "address2";
$tdatausers[".advSearchFields"][] = "address3";
$tdatausers[".advSearchFields"][] = "city";
$tdatausers[".advSearchFields"][] = "state";
$tdatausers[".advSearchFields"][] = "zip";
$tdatausers[".advSearchFields"][] = "email";
$tdatausers[".advSearchFields"][] = "phonetype";
$tdatausers[".advSearchFields"][] = "phonenumber";

$tdatausers[".tableType"] = "list";

$tdatausers[".printerPageOrientation"] = 0;
$tdatausers[".nPrinterPageScale"] = 100;

$tdatausers[".nPrinterSplitRecords"] = 40;

$tdatausers[".nPrinterPDFSplitRecords"] = 40;



$tdatausers[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatausers[".pageSize"] = 20;

$tdatausers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers[".strOrderBy"] = $tstrOrderBy;

$tdatausers[".orderindexes"] = array();

$tdatausers[".sqlHead"] = "SELECT id,  	first_name,  	last_name,  	address1,  	address2,  	address3,  	city,  	`state`,  	zip,  	email,  	phonetype,  	phonenumber";
$tdatausers[".sqlFrom"] = "FROM users";
$tdatausers[".sqlWhereExpr"] = "";
$tdatausers[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers[".arrGroupsPerPage"] = $arrGPP;

$tdatausers[".highlightSearchResults"] = true;

$tableKeysusers = array();
$tableKeysusers[] = "id";
$tdatausers[".Keys"] = $tableKeysusers;

$tdatausers[".listFields"] = array();
$tdatausers[".listFields"][] = "id";
$tdatausers[".listFields"][] = "first_name";
$tdatausers[".listFields"][] = "last_name";
$tdatausers[".listFields"][] = "address1";
$tdatausers[".listFields"][] = "address2";
$tdatausers[".listFields"][] = "address3";
$tdatausers[".listFields"][] = "city";
$tdatausers[".listFields"][] = "state";
$tdatausers[".listFields"][] = "zip";
$tdatausers[".listFields"][] = "email";
$tdatausers[".listFields"][] = "phonetype";
$tdatausers[".listFields"][] = "phonenumber";

$tdatausers[".hideMobileList"] = array();


$tdatausers[".viewFields"] = array();
$tdatausers[".viewFields"][] = "id";
$tdatausers[".viewFields"][] = "first_name";
$tdatausers[".viewFields"][] = "last_name";
$tdatausers[".viewFields"][] = "address1";
$tdatausers[".viewFields"][] = "address2";
$tdatausers[".viewFields"][] = "address3";
$tdatausers[".viewFields"][] = "city";
$tdatausers[".viewFields"][] = "state";
$tdatausers[".viewFields"][] = "zip";
$tdatausers[".viewFields"][] = "email";
$tdatausers[".viewFields"][] = "phonetype";
$tdatausers[".viewFields"][] = "phonenumber";

$tdatausers[".addFields"] = array();
$tdatausers[".addFields"][] = "id";
$tdatausers[".addFields"][] = "first_name";
$tdatausers[".addFields"][] = "last_name";
$tdatausers[".addFields"][] = "address1";
$tdatausers[".addFields"][] = "address2";
$tdatausers[".addFields"][] = "address3";
$tdatausers[".addFields"][] = "city";
$tdatausers[".addFields"][] = "state";
$tdatausers[".addFields"][] = "zip";
$tdatausers[".addFields"][] = "email";
$tdatausers[".addFields"][] = "phonetype";
$tdatausers[".addFields"][] = "phonenumber";

$tdatausers[".masterListFields"] = array();
$tdatausers[".masterListFields"][] = "id";
$tdatausers[".masterListFields"][] = "first_name";
$tdatausers[".masterListFields"][] = "last_name";
$tdatausers[".masterListFields"][] = "address1";
$tdatausers[".masterListFields"][] = "address2";
$tdatausers[".masterListFields"][] = "address3";
$tdatausers[".masterListFields"][] = "city";
$tdatausers[".masterListFields"][] = "state";
$tdatausers[".masterListFields"][] = "zip";
$tdatausers[".masterListFields"][] = "email";
$tdatausers[".masterListFields"][] = "phonetype";
$tdatausers[".masterListFields"][] = "phonenumber";

$tdatausers[".inlineAddFields"] = array();
$tdatausers[".inlineAddFields"][] = "id";
$tdatausers[".inlineAddFields"][] = "first_name";
$tdatausers[".inlineAddFields"][] = "last_name";
$tdatausers[".inlineAddFields"][] = "address1";
$tdatausers[".inlineAddFields"][] = "address2";
$tdatausers[".inlineAddFields"][] = "address3";
$tdatausers[".inlineAddFields"][] = "city";
$tdatausers[".inlineAddFields"][] = "state";
$tdatausers[".inlineAddFields"][] = "zip";
$tdatausers[".inlineAddFields"][] = "email";
$tdatausers[".inlineAddFields"][] = "phonetype";
$tdatausers[".inlineAddFields"][] = "phonenumber";

$tdatausers[".editFields"] = array();
$tdatausers[".editFields"][] = "id";
$tdatausers[".editFields"][] = "first_name";
$tdatausers[".editFields"][] = "last_name";
$tdatausers[".editFields"][] = "address1";
$tdatausers[".editFields"][] = "address2";
$tdatausers[".editFields"][] = "address3";
$tdatausers[".editFields"][] = "city";
$tdatausers[".editFields"][] = "state";
$tdatausers[".editFields"][] = "zip";
$tdatausers[".editFields"][] = "email";
$tdatausers[".editFields"][] = "phonetype";
$tdatausers[".editFields"][] = "phonenumber";

$tdatausers[".inlineEditFields"] = array();
$tdatausers[".inlineEditFields"][] = "id";
$tdatausers[".inlineEditFields"][] = "first_name";
$tdatausers[".inlineEditFields"][] = "last_name";
$tdatausers[".inlineEditFields"][] = "address1";
$tdatausers[".inlineEditFields"][] = "address2";
$tdatausers[".inlineEditFields"][] = "address3";
$tdatausers[".inlineEditFields"][] = "city";
$tdatausers[".inlineEditFields"][] = "state";
$tdatausers[".inlineEditFields"][] = "zip";
$tdatausers[".inlineEditFields"][] = "email";
$tdatausers[".inlineEditFields"][] = "phonetype";
$tdatausers[".inlineEditFields"][] = "phonenumber";

$tdatausers[".exportFields"] = array();
$tdatausers[".exportFields"][] = "id";
$tdatausers[".exportFields"][] = "first_name";
$tdatausers[".exportFields"][] = "last_name";
$tdatausers[".exportFields"][] = "address1";
$tdatausers[".exportFields"][] = "address2";
$tdatausers[".exportFields"][] = "address3";
$tdatausers[".exportFields"][] = "city";
$tdatausers[".exportFields"][] = "state";
$tdatausers[".exportFields"][] = "zip";
$tdatausers[".exportFields"][] = "email";
$tdatausers[".exportFields"][] = "phonetype";
$tdatausers[".exportFields"][] = "phonenumber";

$tdatausers[".importFields"] = array();
$tdatausers[".importFields"][] = "id";
$tdatausers[".importFields"][] = "first_name";
$tdatausers[".importFields"][] = "last_name";
$tdatausers[".importFields"][] = "address1";
$tdatausers[".importFields"][] = "address2";
$tdatausers[".importFields"][] = "address3";
$tdatausers[".importFields"][] = "city";
$tdatausers[".importFields"][] = "state";
$tdatausers[".importFields"][] = "zip";
$tdatausers[".importFields"][] = "email";
$tdatausers[".importFields"][] = "phonetype";
$tdatausers[".importFields"][] = "phonenumber";

$tdatausers[".printFields"] = array();
$tdatausers[".printFields"][] = "id";
$tdatausers[".printFields"][] = "first_name";
$tdatausers[".printFields"][] = "last_name";
$tdatausers[".printFields"][] = "address1";
$tdatausers[".printFields"][] = "address2";
$tdatausers[".printFields"][] = "address3";
$tdatausers[".printFields"][] = "city";
$tdatausers[".printFields"][] = "state";
$tdatausers[".printFields"][] = "zip";
$tdatausers[".printFields"][] = "email";
$tdatausers[".printFields"][] = "phonetype";
$tdatausers[".printFields"][] = "phonenumber";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

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




	$tdatausers["id"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","first_name");
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

		$fdata["strField"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "first_name";

	
	
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




	$tdatausers["first_name"] = $fdata;
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","last_name");
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

		$fdata["strField"] = "last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
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




	$tdatausers["last_name"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","address1");
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

		$fdata["strField"] = "address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address1";

	
	
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




	$tdatausers["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","address2");
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

		$fdata["strField"] = "address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address2";

	
	
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




	$tdatausers["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","address3");
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

		$fdata["strField"] = "address3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address3";

	
	
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




	$tdatausers["address3"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","city");
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

		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
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




	$tdatausers["city"] = $fdata;
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","state");
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

		$fdata["strField"] = "state";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`state`";

	
	
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




	$tdatausers["state"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","zip");
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

		$fdata["strField"] = "zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip";

	
	
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




	$tdatausers["zip"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","email");
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

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

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




	$tdatausers["email"] = $fdata;
//	phonetype
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "phonetype";
	$fdata["GoodName"] = "phonetype";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","phonetype");
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

		$fdata["strField"] = "phonetype";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phonetype";

	
	
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




	$tdatausers["phonetype"] = $fdata;
//	phonenumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phonenumber";
	$fdata["GoodName"] = "phonenumber";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","phonenumber");
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

		$fdata["strField"] = "phonenumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phonenumber";

	
	
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




	$tdatausers["phonenumber"] = $fdata;


$tables_data["users"]=&$tdatausers;
$field_labels["users"] = &$fieldLabelsusers;
$fieldToolTips["users"] = &$fieldToolTipsusers;
$page_titles["users"] = &$pageTitlesusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users"] = array();
//	insulin
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="insulin";
		$detailsParam["dOriginalTable"] = "insulin";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "insulin";
	$detailsParam["dCaptionTable"] = GetTableCaption("insulin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user_id";
//	readings
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="readings";
		$detailsParam["dOriginalTable"] = "readings";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "readings";
	$detailsParam["dCaptionTable"] = GetTableCaption("readings");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user_id";
//	meal
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="meal";
		$detailsParam["dOriginalTable"] = "meal";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "meal";
	$detailsParam["dCaptionTable"] = GetTableCaption("meal");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user_id";
//	exercise
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="exercise";
		$detailsParam["dOriginalTable"] = "exercise";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "exercise";
	$detailsParam["dCaptionTable"] = GetTableCaption("exercise");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user_id";
//	medication
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="medication";
		$detailsParam["dOriginalTable"] = "medication";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "medication";
	$detailsParam["dCaptionTable"] = GetTableCaption("medication");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user_id";
//	labtest
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="labtest";
		$detailsParam["dOriginalTable"] = "labtest";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "labtest";
	$detailsParam["dCaptionTable"] = GetTableCaption("labtest");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = 0;
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["users"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["users"][$dIndex]["detailKeys"][]="user_id";

// tables which are master tables for current table (detail)
$masterTablesData["users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	first_name,  	last_name,  	address1,  	address2,  	address3,  	city,  	`state`,  	zip,  	email,  	phonetype,  	phonenumber";
$proto0["m_strFrom"] = "FROM users";
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
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "users";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto7["m_sql"] = "first_name";
$proto7["m_srcTableName"] = "users";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto9["m_sql"] = "last_name";
$proto9["m_srcTableName"] = "users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto11["m_sql"] = "address1";
$proto11["m_srcTableName"] = "users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto13["m_sql"] = "address2";
$proto13["m_srcTableName"] = "users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto15["m_sql"] = "address3";
$proto15["m_srcTableName"] = "users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto17["m_sql"] = "city";
$proto17["m_srcTableName"] = "users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto19["m_sql"] = "`state`";
$proto19["m_srcTableName"] = "users";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "zip",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto21["m_sql"] = "zip";
$proto21["m_srcTableName"] = "users";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto23["m_sql"] = "email";
$proto23["m_srcTableName"] = "users";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "phonetype",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto25["m_sql"] = "phonetype";
$proto25["m_srcTableName"] = "users";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "phonenumber",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto27["m_sql"] = "phonenumber";
$proto27["m_srcTableName"] = "users";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "users";
$proto30["m_srcTableName"] = "users";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "first_name";
$proto30["m_columns"][] = "last_name";
$proto30["m_columns"][] = "address1";
$proto30["m_columns"][] = "address2";
$proto30["m_columns"][] = "address3";
$proto30["m_columns"][] = "city";
$proto30["m_columns"][] = "state";
$proto30["m_columns"][] = "zip";
$proto30["m_columns"][] = "email";
$proto30["m_columns"][] = "phonetype";
$proto30["m_columns"][] = "phonenumber";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "users";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "users";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users = createSqlQuery_users();



												

$tdatausers[".sqlquery"] = $queryData_users;

$tableEvents["users"] = new eventsBase;
$tdatausers[".hasEvents"] = false;

?>