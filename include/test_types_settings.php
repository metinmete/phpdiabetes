<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatest_types = array();
	$tdatatest_types[".truncateText"] = true;
	$tdatatest_types[".NumberOfChars"] = 80;
	$tdatatest_types[".ShortName"] = "test_types";
	$tdatatest_types[".OwnerID"] = "";
	$tdatatest_types[".OriginalTable"] = "test_types";

//	field labels
$fieldLabelstest_types = array();
$fieldToolTipstest_types = array();
$pageTitlestest_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstest_types["English"] = array();
	$fieldToolTipstest_types["English"] = array();
	$pageTitlestest_types["English"] = array();
	$fieldLabelstest_types["English"]["id"] = "Id";
	$fieldToolTipstest_types["English"]["id"] = "";
	$fieldLabelstest_types["English"]["item"] = "Item";
	$fieldToolTipstest_types["English"]["item"] = "";
	$fieldLabelstest_types["English"]["hide"] = "Hide";
	$fieldToolTipstest_types["English"]["hide"] = "";
	if (count($fieldToolTipstest_types["English"]))
		$tdatatest_types[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstest_types[""] = array();
	$fieldToolTipstest_types[""] = array();
	$pageTitlestest_types[""] = array();
	$fieldLabelstest_types[""]["id"] = "Id";
	$fieldToolTipstest_types[""]["id"] = "";
	$fieldLabelstest_types[""]["item"] = "Item";
	$fieldToolTipstest_types[""]["item"] = "";
	$fieldLabelstest_types[""]["hide"] = "Hide";
	$fieldToolTipstest_types[""]["hide"] = "";
	if (count($fieldToolTipstest_types[""]))
		$tdatatest_types[".isUseToolTips"] = true;
}


	$tdatatest_types[".NCSearch"] = true;



$tdatatest_types[".shortTableName"] = "test_types";
$tdatatest_types[".nSecOptions"] = 0;
$tdatatest_types[".recsPerRowList"] = 1;
$tdatatest_types[".recsPerRowPrint"] = 1;
$tdatatest_types[".mainTableOwnerID"] = "";
$tdatatest_types[".moveNext"] = 1;
$tdatatest_types[".entityType"] = 0;

$tdatatest_types[".strOriginalTableName"] = "test_types";




$tdatatest_types[".showAddInPopup"] = false;

$tdatatest_types[".showEditInPopup"] = false;

$tdatatest_types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatest_types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatest_types[".fieldsForRegister"] = array();

$tdatatest_types[".listAjax"] = false;

	$tdatatest_types[".audit"] = false;

	$tdatatest_types[".locking"] = false;

$tdatatest_types[".edit"] = true;
$tdatatest_types[".afterEditAction"] = 1;
$tdatatest_types[".closePopupAfterEdit"] = 1;
$tdatatest_types[".afterEditActionDetTable"] = "";

$tdatatest_types[".add"] = true;
$tdatatest_types[".afterAddAction"] = 1;
$tdatatest_types[".closePopupAfterAdd"] = 1;
$tdatatest_types[".afterAddActionDetTable"] = "";

$tdatatest_types[".list"] = true;

$tdatatest_types[".inlineEdit"] = true;
$tdatatest_types[".inlineAdd"] = true;
$tdatatest_types[".view"] = true;

$tdatatest_types[".import"] = true;

$tdatatest_types[".exportTo"] = true;

$tdatatest_types[".printFriendly"] = true;

$tdatatest_types[".delete"] = true;

$tdatatest_types[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatest_types[".searchSaving"] = false;
//

$tdatatest_types[".showSearchPanel"] = true;
		$tdatatest_types[".flexibleSearch"] = true;

if (isMobile())
	$tdatatest_types[".isUseAjaxSuggest"] = false;
else
	$tdatatest_types[".isUseAjaxSuggest"] = true;

$tdatatest_types[".rowHighlite"] = true;



$tdatatest_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatest_types[".isUseTimeForSearch"] = false;





$tdatatest_types[".allSearchFields"] = array();
$tdatatest_types[".filterFields"] = array();
$tdatatest_types[".requiredSearchFields"] = array();

$tdatatest_types[".allSearchFields"][] = "id";
	$tdatatest_types[".allSearchFields"][] = "item";
	$tdatatest_types[".allSearchFields"][] = "hide";
	

$tdatatest_types[".googleLikeFields"] = array();
$tdatatest_types[".googleLikeFields"][] = "id";
$tdatatest_types[".googleLikeFields"][] = "item";
$tdatatest_types[".googleLikeFields"][] = "hide";


$tdatatest_types[".advSearchFields"] = array();
$tdatatest_types[".advSearchFields"][] = "id";
$tdatatest_types[".advSearchFields"][] = "item";
$tdatatest_types[".advSearchFields"][] = "hide";

$tdatatest_types[".tableType"] = "list";

$tdatatest_types[".printerPageOrientation"] = 0;
$tdatatest_types[".nPrinterPageScale"] = 100;

$tdatatest_types[".nPrinterSplitRecords"] = 40;

$tdatatest_types[".nPrinterPDFSplitRecords"] = 40;



$tdatatest_types[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatatest_types[".pageSize"] = 20;

$tdatatest_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatest_types[".strOrderBy"] = $tstrOrderBy;

$tdatatest_types[".orderindexes"] = array();

$tdatatest_types[".sqlHead"] = "SELECT id,  	item,  	hide";
$tdatatest_types[".sqlFrom"] = "FROM test_types";
$tdatatest_types[".sqlWhereExpr"] = "";
$tdatatest_types[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatest_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatest_types[".arrGroupsPerPage"] = $arrGPP;

$tdatatest_types[".highlightSearchResults"] = true;

$tableKeystest_types = array();
$tableKeystest_types[] = "id";
$tdatatest_types[".Keys"] = $tableKeystest_types;

$tdatatest_types[".listFields"] = array();
$tdatatest_types[".listFields"][] = "id";
$tdatatest_types[".listFields"][] = "item";
$tdatatest_types[".listFields"][] = "hide";

$tdatatest_types[".hideMobileList"] = array();


$tdatatest_types[".viewFields"] = array();
$tdatatest_types[".viewFields"][] = "id";
$tdatatest_types[".viewFields"][] = "item";
$tdatatest_types[".viewFields"][] = "hide";

$tdatatest_types[".addFields"] = array();
$tdatatest_types[".addFields"][] = "item";
$tdatatest_types[".addFields"][] = "hide";

$tdatatest_types[".masterListFields"] = array();
$tdatatest_types[".masterListFields"][] = "id";
$tdatatest_types[".masterListFields"][] = "item";
$tdatatest_types[".masterListFields"][] = "hide";

$tdatatest_types[".inlineAddFields"] = array();
$tdatatest_types[".inlineAddFields"][] = "item";
$tdatatest_types[".inlineAddFields"][] = "hide";

$tdatatest_types[".editFields"] = array();
$tdatatest_types[".editFields"][] = "item";
$tdatatest_types[".editFields"][] = "hide";

$tdatatest_types[".inlineEditFields"] = array();
$tdatatest_types[".inlineEditFields"][] = "item";
$tdatatest_types[".inlineEditFields"][] = "hide";

$tdatatest_types[".exportFields"] = array();
$tdatatest_types[".exportFields"][] = "id";
$tdatatest_types[".exportFields"][] = "item";
$tdatatest_types[".exportFields"][] = "hide";

$tdatatest_types[".importFields"] = array();
$tdatatest_types[".importFields"][] = "id";
$tdatatest_types[".importFields"][] = "item";
$tdatatest_types[".importFields"][] = "hide";

$tdatatest_types[".printFields"] = array();
$tdatatest_types[".printFields"][] = "id";
$tdatatest_types[".printFields"][] = "item";
$tdatatest_types[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "test_types";
	$fdata["Label"] = GetFieldLabel("test_types","id");
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




	$tdatatest_types["id"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "test_types";
	$fdata["Label"] = GetFieldLabel("test_types","item");
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




	$tdatatest_types["item"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "test_types";
	$fdata["Label"] = GetFieldLabel("test_types","hide");
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




	$tdatatest_types["hide"] = $fdata;


$tables_data["test_types"]=&$tdatatest_types;
$field_labels["test_types"] = &$fieldLabelstest_types;
$fieldToolTips["test_types"] = &$fieldToolTipstest_types;
$page_titles["test_types"] = &$pageTitlestest_types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["test_types"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["test_types"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_test_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	item,  	hide";
$proto0["m_strFrom"] = "FROM test_types";
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
	"m_strTable" => "test_types",
	"m_srcTableName" => "test_types"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "test_types";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "test_types",
	"m_srcTableName" => "test_types"
));

$proto7["m_sql"] = "item";
$proto7["m_srcTableName"] = "test_types";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "test_types",
	"m_srcTableName" => "test_types"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "test_types";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "test_types";
$proto12["m_srcTableName"] = "test_types";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "item";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "test_types";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "test_types";
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
$proto0["m_srcTableName"]="test_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_test_types = createSqlQuery_test_types();



			

$tdatatest_types[".sqlquery"] = $queryData_test_types;

$tableEvents["test_types"] = new eventsBase;
$tdatatest_types[".hasEvents"] = false;

?>