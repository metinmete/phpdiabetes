<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsulin_type = array();
	$tdatainsulin_type[".truncateText"] = true;
	$tdatainsulin_type[".NumberOfChars"] = 80;
	$tdatainsulin_type[".ShortName"] = "insulin_type";
	$tdatainsulin_type[".OwnerID"] = "";
	$tdatainsulin_type[".OriginalTable"] = "insulin_type";

//	field labels
$fieldLabelsinsulin_type = array();
$fieldToolTipsinsulin_type = array();
$pageTitlesinsulin_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsulin_type["English"] = array();
	$fieldToolTipsinsulin_type["English"] = array();
	$pageTitlesinsulin_type["English"] = array();
	$fieldLabelsinsulin_type["English"]["type"] = "Type";
	$fieldToolTipsinsulin_type["English"]["type"] = "";
	$fieldLabelsinsulin_type["English"]["id"] = "Id";
	$fieldToolTipsinsulin_type["English"]["id"] = "";
	$fieldLabelsinsulin_type["English"]["hide"] = "Hide";
	$fieldToolTipsinsulin_type["English"]["hide"] = "";
	if (count($fieldToolTipsinsulin_type["English"]))
		$tdatainsulin_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsulin_type[""] = array();
	$fieldToolTipsinsulin_type[""] = array();
	$pageTitlesinsulin_type[""] = array();
	$fieldLabelsinsulin_type[""]["type"] = "Type";
	$fieldToolTipsinsulin_type[""]["type"] = "";
	$fieldLabelsinsulin_type[""]["id"] = "Id";
	$fieldToolTipsinsulin_type[""]["id"] = "";
	$fieldLabelsinsulin_type[""]["hide"] = "Hide";
	$fieldToolTipsinsulin_type[""]["hide"] = "";
	if (count($fieldToolTipsinsulin_type[""]))
		$tdatainsulin_type[".isUseToolTips"] = true;
}


	$tdatainsulin_type[".NCSearch"] = true;



$tdatainsulin_type[".shortTableName"] = "insulin_type";
$tdatainsulin_type[".nSecOptions"] = 0;
$tdatainsulin_type[".recsPerRowList"] = 1;
$tdatainsulin_type[".recsPerRowPrint"] = 1;
$tdatainsulin_type[".mainTableOwnerID"] = "";
$tdatainsulin_type[".moveNext"] = 1;
$tdatainsulin_type[".entityType"] = 0;

$tdatainsulin_type[".strOriginalTableName"] = "insulin_type";




$tdatainsulin_type[".showAddInPopup"] = false;

$tdatainsulin_type[".showEditInPopup"] = false;

$tdatainsulin_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsulin_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsulin_type[".fieldsForRegister"] = array();

$tdatainsulin_type[".listAjax"] = false;

	$tdatainsulin_type[".audit"] = false;

	$tdatainsulin_type[".locking"] = false;

$tdatainsulin_type[".edit"] = true;
$tdatainsulin_type[".afterEditAction"] = 0;
$tdatainsulin_type[".closePopupAfterEdit"] = 1;
$tdatainsulin_type[".afterEditActionDetTable"] = "";

$tdatainsulin_type[".add"] = true;
$tdatainsulin_type[".afterAddAction"] = 0;
$tdatainsulin_type[".closePopupAfterAdd"] = 1;
$tdatainsulin_type[".afterAddActionDetTable"] = "";

$tdatainsulin_type[".list"] = true;

$tdatainsulin_type[".inlineEdit"] = true;
$tdatainsulin_type[".inlineAdd"] = true;
$tdatainsulin_type[".view"] = true;

$tdatainsulin_type[".import"] = true;

$tdatainsulin_type[".exportTo"] = true;

$tdatainsulin_type[".printFriendly"] = true;

$tdatainsulin_type[".delete"] = true;

$tdatainsulin_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainsulin_type[".searchSaving"] = false;
//

if (isMobile()){
	$tdatainsulin_type[".showSearchPanel"] = true;
}
else
	$tdatainsulin_type[".showSearchPanel"] = false;

if (isMobile())
	$tdatainsulin_type[".isUseAjaxSuggest"] = false;
else
	$tdatainsulin_type[".isUseAjaxSuggest"] = true;

$tdatainsulin_type[".rowHighlite"] = true;



$tdatainsulin_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsulin_type[".isUseTimeForSearch"] = false;





$tdatainsulin_type[".allSearchFields"] = array();
$tdatainsulin_type[".filterFields"] = array();
$tdatainsulin_type[".requiredSearchFields"] = array();

$tdatainsulin_type[".allSearchFields"][] = "type";
	$tdatainsulin_type[".allSearchFields"][] = "hide";
	

$tdatainsulin_type[".googleLikeFields"] = array();
$tdatainsulin_type[".googleLikeFields"][] = "id";
$tdatainsulin_type[".googleLikeFields"][] = "type";
$tdatainsulin_type[".googleLikeFields"][] = "hide";


$tdatainsulin_type[".advSearchFields"] = array();
$tdatainsulin_type[".advSearchFields"][] = "type";
$tdatainsulin_type[".advSearchFields"][] = "hide";

$tdatainsulin_type[".tableType"] = "list";

$tdatainsulin_type[".printerPageOrientation"] = 0;
$tdatainsulin_type[".nPrinterPageScale"] = 100;

$tdatainsulin_type[".nPrinterSplitRecords"] = 40;

$tdatainsulin_type[".nPrinterPDFSplitRecords"] = 40;



$tdatainsulin_type[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatainsulin_type[".pageSize"] = 20;

$tdatainsulin_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsulin_type[".strOrderBy"] = $tstrOrderBy;

$tdatainsulin_type[".orderindexes"] = array();

$tdatainsulin_type[".sqlHead"] = "SELECT id,  	`type`,  	hide";
$tdatainsulin_type[".sqlFrom"] = "FROM insulin_type";
$tdatainsulin_type[".sqlWhereExpr"] = "";
$tdatainsulin_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainsulin_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsulin_type[".arrGroupsPerPage"] = $arrGPP;

$tdatainsulin_type[".highlightSearchResults"] = true;

$tableKeysinsulin_type = array();
$tableKeysinsulin_type[] = "id";
$tdatainsulin_type[".Keys"] = $tableKeysinsulin_type;

$tdatainsulin_type[".listFields"] = array();
$tdatainsulin_type[".listFields"][] = "type";
$tdatainsulin_type[".listFields"][] = "hide";

$tdatainsulin_type[".hideMobileList"] = array();


$tdatainsulin_type[".viewFields"] = array();
$tdatainsulin_type[".viewFields"][] = "id";
$tdatainsulin_type[".viewFields"][] = "type";
$tdatainsulin_type[".viewFields"][] = "hide";

$tdatainsulin_type[".addFields"] = array();
$tdatainsulin_type[".addFields"][] = "type";
$tdatainsulin_type[".addFields"][] = "hide";

$tdatainsulin_type[".masterListFields"] = array();
$tdatainsulin_type[".masterListFields"][] = "id";
$tdatainsulin_type[".masterListFields"][] = "type";
$tdatainsulin_type[".masterListFields"][] = "hide";

$tdatainsulin_type[".inlineAddFields"] = array();
$tdatainsulin_type[".inlineAddFields"][] = "type";
$tdatainsulin_type[".inlineAddFields"][] = "hide";

$tdatainsulin_type[".editFields"] = array();
$tdatainsulin_type[".editFields"][] = "id";
$tdatainsulin_type[".editFields"][] = "type";
$tdatainsulin_type[".editFields"][] = "hide";

$tdatainsulin_type[".inlineEditFields"] = array();
$tdatainsulin_type[".inlineEditFields"][] = "type";
$tdatainsulin_type[".inlineEditFields"][] = "hide";

$tdatainsulin_type[".exportFields"] = array();
$tdatainsulin_type[".exportFields"][] = "type";
$tdatainsulin_type[".exportFields"][] = "hide";

$tdatainsulin_type[".importFields"] = array();
$tdatainsulin_type[".importFields"][] = "type";
$tdatainsulin_type[".importFields"][] = "hide";

$tdatainsulin_type[".printFields"] = array();
$tdatainsulin_type[".printFields"][] = "type";
$tdatainsulin_type[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "insulin_type";
	$fdata["Label"] = GetFieldLabel("insulin_type","id");
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








	$tdatainsulin_type["id"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "insulin_type";
	$fdata["Label"] = GetFieldLabel("insulin_type","type");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

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




	$tdatainsulin_type["type"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "insulin_type";
	$fdata["Label"] = GetFieldLabel("insulin_type","hide");
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




	$tdatainsulin_type["hide"] = $fdata;


$tables_data["insulin_type"]=&$tdatainsulin_type;
$field_labels["insulin_type"] = &$fieldLabelsinsulin_type;
$fieldToolTips["insulin_type"] = &$fieldToolTipsinsulin_type;
$page_titles["insulin_type"] = &$pageTitlesinsulin_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insulin_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["insulin_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insulin_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`type`,  	hide";
$proto0["m_strFrom"] = "FROM insulin_type";
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
	"m_strTable" => "insulin_type",
	"m_srcTableName" => "insulin_type"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "insulin_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "insulin_type",
	"m_srcTableName" => "insulin_type"
));

$proto7["m_sql"] = "`type`";
$proto7["m_srcTableName"] = "insulin_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "insulin_type",
	"m_srcTableName" => "insulin_type"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "insulin_type";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "insulin_type";
$proto12["m_srcTableName"] = "insulin_type";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "type";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "insulin_type";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "insulin_type";
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
$proto0["m_srcTableName"]="insulin_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insulin_type = createSqlQuery_insulin_type();



			

$tdatainsulin_type[".sqlquery"] = $queryData_insulin_type;

$tableEvents["insulin_type"] = new eventsBase;
$tdatainsulin_type[".hasEvents"] = false;

?>