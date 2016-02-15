<?php
require_once(getabspath("classes/cipherer.php"));




$tdataexercise_types = array();
	$tdataexercise_types[".truncateText"] = true;
	$tdataexercise_types[".NumberOfChars"] = 80;
	$tdataexercise_types[".ShortName"] = "exercise_types";
	$tdataexercise_types[".OwnerID"] = "";
	$tdataexercise_types[".OriginalTable"] = "exercise_types";

//	field labels
$fieldLabelsexercise_types = array();
$fieldToolTipsexercise_types = array();
$pageTitlesexercise_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsexercise_types["English"] = array();
	$fieldToolTipsexercise_types["English"] = array();
	$pageTitlesexercise_types["English"] = array();
	$fieldLabelsexercise_types["English"]["id"] = "Id";
	$fieldToolTipsexercise_types["English"]["id"] = "";
	$fieldLabelsexercise_types["English"]["item"] = "Item";
	$fieldToolTipsexercise_types["English"]["item"] = "";
	$fieldLabelsexercise_types["English"]["hide"] = "Hide";
	$fieldToolTipsexercise_types["English"]["hide"] = "";
	if (count($fieldToolTipsexercise_types["English"]))
		$tdataexercise_types[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsexercise_types[""] = array();
	$fieldToolTipsexercise_types[""] = array();
	$pageTitlesexercise_types[""] = array();
	$fieldLabelsexercise_types[""]["id"] = "Id";
	$fieldToolTipsexercise_types[""]["id"] = "";
	$fieldLabelsexercise_types[""]["item"] = "Item";
	$fieldToolTipsexercise_types[""]["item"] = "";
	$fieldLabelsexercise_types[""]["hide"] = "Hide";
	$fieldToolTipsexercise_types[""]["hide"] = "";
	if (count($fieldToolTipsexercise_types[""]))
		$tdataexercise_types[".isUseToolTips"] = true;
}


	$tdataexercise_types[".NCSearch"] = true;



$tdataexercise_types[".shortTableName"] = "exercise_types";
$tdataexercise_types[".nSecOptions"] = 0;
$tdataexercise_types[".recsPerRowList"] = 1;
$tdataexercise_types[".recsPerRowPrint"] = 1;
$tdataexercise_types[".mainTableOwnerID"] = "";
$tdataexercise_types[".moveNext"] = 1;
$tdataexercise_types[".entityType"] = 0;

$tdataexercise_types[".strOriginalTableName"] = "exercise_types";




$tdataexercise_types[".showAddInPopup"] = false;

$tdataexercise_types[".showEditInPopup"] = false;

$tdataexercise_types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataexercise_types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataexercise_types[".fieldsForRegister"] = array();

$tdataexercise_types[".listAjax"] = false;

	$tdataexercise_types[".audit"] = false;

	$tdataexercise_types[".locking"] = false;

$tdataexercise_types[".edit"] = true;
$tdataexercise_types[".afterEditAction"] = 1;
$tdataexercise_types[".closePopupAfterEdit"] = 1;
$tdataexercise_types[".afterEditActionDetTable"] = "";

$tdataexercise_types[".add"] = true;
$tdataexercise_types[".afterAddAction"] = 1;
$tdataexercise_types[".closePopupAfterAdd"] = 1;
$tdataexercise_types[".afterAddActionDetTable"] = "";

$tdataexercise_types[".list"] = true;

$tdataexercise_types[".inlineEdit"] = true;
$tdataexercise_types[".inlineAdd"] = true;
$tdataexercise_types[".view"] = true;

$tdataexercise_types[".import"] = true;

$tdataexercise_types[".exportTo"] = true;

$tdataexercise_types[".printFriendly"] = true;

$tdataexercise_types[".delete"] = true;

$tdataexercise_types[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataexercise_types[".searchSaving"] = false;
//

$tdataexercise_types[".showSearchPanel"] = true;
		$tdataexercise_types[".flexibleSearch"] = true;

if (isMobile())
	$tdataexercise_types[".isUseAjaxSuggest"] = false;
else
	$tdataexercise_types[".isUseAjaxSuggest"] = true;

$tdataexercise_types[".rowHighlite"] = true;



$tdataexercise_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexercise_types[".isUseTimeForSearch"] = false;





$tdataexercise_types[".allSearchFields"] = array();
$tdataexercise_types[".filterFields"] = array();
$tdataexercise_types[".requiredSearchFields"] = array();

$tdataexercise_types[".allSearchFields"][] = "id";
	$tdataexercise_types[".allSearchFields"][] = "item";
	$tdataexercise_types[".allSearchFields"][] = "hide";
	

$tdataexercise_types[".googleLikeFields"] = array();
$tdataexercise_types[".googleLikeFields"][] = "id";
$tdataexercise_types[".googleLikeFields"][] = "item";
$tdataexercise_types[".googleLikeFields"][] = "hide";


$tdataexercise_types[".advSearchFields"] = array();
$tdataexercise_types[".advSearchFields"][] = "id";
$tdataexercise_types[".advSearchFields"][] = "item";
$tdataexercise_types[".advSearchFields"][] = "hide";

$tdataexercise_types[".tableType"] = "list";

$tdataexercise_types[".printerPageOrientation"] = 0;
$tdataexercise_types[".nPrinterPageScale"] = 100;

$tdataexercise_types[".nPrinterSplitRecords"] = 40;

$tdataexercise_types[".nPrinterPDFSplitRecords"] = 40;



$tdataexercise_types[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataexercise_types[".pageSize"] = 20;

$tdataexercise_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexercise_types[".strOrderBy"] = $tstrOrderBy;

$tdataexercise_types[".orderindexes"] = array();

$tdataexercise_types[".sqlHead"] = "SELECT id,  	item,  	hide";
$tdataexercise_types[".sqlFrom"] = "FROM exercise_types";
$tdataexercise_types[".sqlWhereExpr"] = "";
$tdataexercise_types[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexercise_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexercise_types[".arrGroupsPerPage"] = $arrGPP;

$tdataexercise_types[".highlightSearchResults"] = true;

$tableKeysexercise_types = array();
$tableKeysexercise_types[] = "id";
$tdataexercise_types[".Keys"] = $tableKeysexercise_types;

$tdataexercise_types[".listFields"] = array();
$tdataexercise_types[".listFields"][] = "id";
$tdataexercise_types[".listFields"][] = "item";
$tdataexercise_types[".listFields"][] = "hide";

$tdataexercise_types[".hideMobileList"] = array();


$tdataexercise_types[".viewFields"] = array();
$tdataexercise_types[".viewFields"][] = "id";
$tdataexercise_types[".viewFields"][] = "item";
$tdataexercise_types[".viewFields"][] = "hide";

$tdataexercise_types[".addFields"] = array();
$tdataexercise_types[".addFields"][] = "item";
$tdataexercise_types[".addFields"][] = "hide";

$tdataexercise_types[".masterListFields"] = array();
$tdataexercise_types[".masterListFields"][] = "id";
$tdataexercise_types[".masterListFields"][] = "item";
$tdataexercise_types[".masterListFields"][] = "hide";

$tdataexercise_types[".inlineAddFields"] = array();
$tdataexercise_types[".inlineAddFields"][] = "item";
$tdataexercise_types[".inlineAddFields"][] = "hide";

$tdataexercise_types[".editFields"] = array();
$tdataexercise_types[".editFields"][] = "item";
$tdataexercise_types[".editFields"][] = "hide";

$tdataexercise_types[".inlineEditFields"] = array();
$tdataexercise_types[".inlineEditFields"][] = "item";
$tdataexercise_types[".inlineEditFields"][] = "hide";

$tdataexercise_types[".exportFields"] = array();
$tdataexercise_types[".exportFields"][] = "id";
$tdataexercise_types[".exportFields"][] = "item";
$tdataexercise_types[".exportFields"][] = "hide";

$tdataexercise_types[".importFields"] = array();
$tdataexercise_types[".importFields"][] = "id";
$tdataexercise_types[".importFields"][] = "item";
$tdataexercise_types[".importFields"][] = "hide";

$tdataexercise_types[".printFields"] = array();
$tdataexercise_types[".printFields"][] = "id";
$tdataexercise_types[".printFields"][] = "item";
$tdataexercise_types[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "exercise_types";
	$fdata["Label"] = GetFieldLabel("exercise_types","id");
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




	$tdataexercise_types["id"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "exercise_types";
	$fdata["Label"] = GetFieldLabel("exercise_types","item");
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




	$tdataexercise_types["item"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "exercise_types";
	$fdata["Label"] = GetFieldLabel("exercise_types","hide");
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




	$tdataexercise_types["hide"] = $fdata;


$tables_data["exercise_types"]=&$tdataexercise_types;
$field_labels["exercise_types"] = &$fieldLabelsexercise_types;
$fieldToolTips["exercise_types"] = &$fieldToolTipsexercise_types;
$page_titles["exercise_types"] = &$pageTitlesexercise_types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exercise_types"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["exercise_types"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exercise_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	item,  	hide";
$proto0["m_strFrom"] = "FROM exercise_types";
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
	"m_strTable" => "exercise_types",
	"m_srcTableName" => "exercise_types"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "exercise_types";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "exercise_types",
	"m_srcTableName" => "exercise_types"
));

$proto7["m_sql"] = "item";
$proto7["m_srcTableName"] = "exercise_types";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "exercise_types",
	"m_srcTableName" => "exercise_types"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "exercise_types";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "exercise_types";
$proto12["m_srcTableName"] = "exercise_types";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "item";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "exercise_types";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "exercise_types";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="exercise_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exercise_types = createSqlQuery_exercise_types();



			

$tdataexercise_types[".sqlquery"] = $queryData_exercise_types;

$tableEvents["exercise_types"] = new eventsBase;
$tdataexercise_types[".hasEvents"] = false;

?>