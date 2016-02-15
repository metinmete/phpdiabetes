<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainject_type = array();
	$tdatainject_type[".truncateText"] = true;
	$tdatainject_type[".NumberOfChars"] = 80;
	$tdatainject_type[".ShortName"] = "inject_type";
	$tdatainject_type[".OwnerID"] = "";
	$tdatainject_type[".OriginalTable"] = "inject_type";

//	field labels
$fieldLabelsinject_type = array();
$fieldToolTipsinject_type = array();
$pageTitlesinject_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinject_type["English"] = array();
	$fieldToolTipsinject_type["English"] = array();
	$pageTitlesinject_type["English"] = array();
	$fieldLabelsinject_type["English"]["id"] = "Id";
	$fieldToolTipsinject_type["English"]["id"] = "";
	$fieldLabelsinject_type["English"]["type"] = "Type";
	$fieldToolTipsinject_type["English"]["type"] = "";
	$fieldLabelsinject_type["English"]["hide"] = "Hide";
	$fieldToolTipsinject_type["English"]["hide"] = "";
	if (count($fieldToolTipsinject_type["English"]))
		$tdatainject_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinject_type[""] = array();
	$fieldToolTipsinject_type[""] = array();
	$pageTitlesinject_type[""] = array();
	$fieldLabelsinject_type[""]["id"] = "Id";
	$fieldToolTipsinject_type[""]["id"] = "";
	$fieldLabelsinject_type[""]["type"] = "Type";
	$fieldToolTipsinject_type[""]["type"] = "";
	$fieldLabelsinject_type[""]["hide"] = "Hide";
	$fieldToolTipsinject_type[""]["hide"] = "";
	if (count($fieldToolTipsinject_type[""]))
		$tdatainject_type[".isUseToolTips"] = true;
}


	$tdatainject_type[".NCSearch"] = true;



$tdatainject_type[".shortTableName"] = "inject_type";
$tdatainject_type[".nSecOptions"] = 0;
$tdatainject_type[".recsPerRowList"] = 1;
$tdatainject_type[".recsPerRowPrint"] = 1;
$tdatainject_type[".mainTableOwnerID"] = "";
$tdatainject_type[".moveNext"] = 1;
$tdatainject_type[".entityType"] = 0;

$tdatainject_type[".strOriginalTableName"] = "inject_type";




$tdatainject_type[".showAddInPopup"] = false;

$tdatainject_type[".showEditInPopup"] = false;

$tdatainject_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainject_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainject_type[".fieldsForRegister"] = array();

$tdatainject_type[".listAjax"] = false;

	$tdatainject_type[".audit"] = false;

	$tdatainject_type[".locking"] = false;

$tdatainject_type[".edit"] = true;
$tdatainject_type[".afterEditAction"] = 1;
$tdatainject_type[".closePopupAfterEdit"] = 1;
$tdatainject_type[".afterEditActionDetTable"] = "";

$tdatainject_type[".add"] = true;
$tdatainject_type[".afterAddAction"] = 1;
$tdatainject_type[".closePopupAfterAdd"] = 1;
$tdatainject_type[".afterAddActionDetTable"] = "";

$tdatainject_type[".list"] = true;

$tdatainject_type[".inlineEdit"] = true;
$tdatainject_type[".inlineAdd"] = true;
$tdatainject_type[".view"] = true;

$tdatainject_type[".import"] = true;

$tdatainject_type[".exportTo"] = true;

$tdatainject_type[".printFriendly"] = true;

$tdatainject_type[".delete"] = true;

$tdatainject_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainject_type[".searchSaving"] = false;
//

$tdatainject_type[".showSearchPanel"] = true;
		$tdatainject_type[".flexibleSearch"] = true;

if (isMobile())
	$tdatainject_type[".isUseAjaxSuggest"] = false;
else
	$tdatainject_type[".isUseAjaxSuggest"] = true;

$tdatainject_type[".rowHighlite"] = true;



$tdatainject_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainject_type[".isUseTimeForSearch"] = false;





$tdatainject_type[".allSearchFields"] = array();
$tdatainject_type[".filterFields"] = array();
$tdatainject_type[".requiredSearchFields"] = array();

$tdatainject_type[".allSearchFields"][] = "id";
	$tdatainject_type[".allSearchFields"][] = "type";
	$tdatainject_type[".allSearchFields"][] = "hide";
	

$tdatainject_type[".googleLikeFields"] = array();
$tdatainject_type[".googleLikeFields"][] = "id";
$tdatainject_type[".googleLikeFields"][] = "type";
$tdatainject_type[".googleLikeFields"][] = "hide";


$tdatainject_type[".advSearchFields"] = array();
$tdatainject_type[".advSearchFields"][] = "id";
$tdatainject_type[".advSearchFields"][] = "type";
$tdatainject_type[".advSearchFields"][] = "hide";

$tdatainject_type[".tableType"] = "list";

$tdatainject_type[".printerPageOrientation"] = 0;
$tdatainject_type[".nPrinterPageScale"] = 100;

$tdatainject_type[".nPrinterSplitRecords"] = 40;

$tdatainject_type[".nPrinterPDFSplitRecords"] = 40;



$tdatainject_type[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatainject_type[".pageSize"] = 20;

$tdatainject_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainject_type[".strOrderBy"] = $tstrOrderBy;

$tdatainject_type[".orderindexes"] = array();

$tdatainject_type[".sqlHead"] = "SELECT id,  	`type`,  	hide";
$tdatainject_type[".sqlFrom"] = "FROM inject_type";
$tdatainject_type[".sqlWhereExpr"] = "";
$tdatainject_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainject_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainject_type[".arrGroupsPerPage"] = $arrGPP;

$tdatainject_type[".highlightSearchResults"] = true;

$tableKeysinject_type = array();
$tableKeysinject_type[] = "id";
$tdatainject_type[".Keys"] = $tableKeysinject_type;

$tdatainject_type[".listFields"] = array();
$tdatainject_type[".listFields"][] = "id";
$tdatainject_type[".listFields"][] = "type";
$tdatainject_type[".listFields"][] = "hide";

$tdatainject_type[".hideMobileList"] = array();


$tdatainject_type[".viewFields"] = array();
$tdatainject_type[".viewFields"][] = "id";
$tdatainject_type[".viewFields"][] = "type";
$tdatainject_type[".viewFields"][] = "hide";

$tdatainject_type[".addFields"] = array();
$tdatainject_type[".addFields"][] = "type";
$tdatainject_type[".addFields"][] = "hide";

$tdatainject_type[".masterListFields"] = array();
$tdatainject_type[".masterListFields"][] = "id";
$tdatainject_type[".masterListFields"][] = "type";
$tdatainject_type[".masterListFields"][] = "hide";

$tdatainject_type[".inlineAddFields"] = array();
$tdatainject_type[".inlineAddFields"][] = "type";
$tdatainject_type[".inlineAddFields"][] = "hide";

$tdatainject_type[".editFields"] = array();
$tdatainject_type[".editFields"][] = "type";
$tdatainject_type[".editFields"][] = "hide";

$tdatainject_type[".inlineEditFields"] = array();
$tdatainject_type[".inlineEditFields"][] = "type";
$tdatainject_type[".inlineEditFields"][] = "hide";

$tdatainject_type[".exportFields"] = array();
$tdatainject_type[".exportFields"][] = "id";
$tdatainject_type[".exportFields"][] = "type";
$tdatainject_type[".exportFields"][] = "hide";

$tdatainject_type[".importFields"] = array();
$tdatainject_type[".importFields"][] = "id";
$tdatainject_type[".importFields"][] = "type";
$tdatainject_type[".importFields"][] = "hide";

$tdatainject_type[".printFields"] = array();
$tdatainject_type[".printFields"][] = "id";
$tdatainject_type[".printFields"][] = "type";
$tdatainject_type[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "inject_type";
	$fdata["Label"] = GetFieldLabel("inject_type","id");
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




	$tdatainject_type["id"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "inject_type";
	$fdata["Label"] = GetFieldLabel("inject_type","type");
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




	$tdatainject_type["type"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "inject_type";
	$fdata["Label"] = GetFieldLabel("inject_type","hide");
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




	$tdatainject_type["hide"] = $fdata;


$tables_data["inject_type"]=&$tdatainject_type;
$field_labels["inject_type"] = &$fieldLabelsinject_type;
$fieldToolTips["inject_type"] = &$fieldToolTipsinject_type;
$page_titles["inject_type"] = &$pageTitlesinject_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inject_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inject_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inject_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`type`,  	hide";
$proto0["m_strFrom"] = "FROM inject_type";
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
	"m_strTable" => "inject_type",
	"m_srcTableName" => "inject_type"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "inject_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "inject_type",
	"m_srcTableName" => "inject_type"
));

$proto7["m_sql"] = "`type`";
$proto7["m_srcTableName"] = "inject_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "inject_type",
	"m_srcTableName" => "inject_type"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "inject_type";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "inject_type";
$proto12["m_srcTableName"] = "inject_type";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "type";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "inject_type";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "inject_type";
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
$proto0["m_srcTableName"]="inject_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inject_type = createSqlQuery_inject_type();



			

$tdatainject_type[".sqlquery"] = $queryData_inject_type;

$tableEvents["inject_type"] = new eventsBase;
$tdatainject_type[".hasEvents"] = false;

?>