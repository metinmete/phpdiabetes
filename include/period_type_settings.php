<?php
require_once(getabspath("classes/cipherer.php"));




$tdataperiod_type = array();
	$tdataperiod_type[".truncateText"] = true;
	$tdataperiod_type[".NumberOfChars"] = 80;
	$tdataperiod_type[".ShortName"] = "period_type";
	$tdataperiod_type[".OwnerID"] = "";
	$tdataperiod_type[".OriginalTable"] = "period_type";

//	field labels
$fieldLabelsperiod_type = array();
$fieldToolTipsperiod_type = array();
$pageTitlesperiod_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperiod_type["English"] = array();
	$fieldToolTipsperiod_type["English"] = array();
	$pageTitlesperiod_type["English"] = array();
	$fieldLabelsperiod_type["English"]["period"] = "Period";
	$fieldToolTipsperiod_type["English"]["period"] = "";
	$fieldLabelsperiod_type["English"]["id"] = "Id";
	$fieldToolTipsperiod_type["English"]["id"] = "";
	$fieldLabelsperiod_type["English"]["hide"] = "Hide";
	$fieldToolTipsperiod_type["English"]["hide"] = "";
	if (count($fieldToolTipsperiod_type["English"]))
		$tdataperiod_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsperiod_type[""] = array();
	$fieldToolTipsperiod_type[""] = array();
	$pageTitlesperiod_type[""] = array();
	$fieldLabelsperiod_type[""]["period"] = "Period";
	$fieldToolTipsperiod_type[""]["period"] = "";
	$fieldLabelsperiod_type[""]["id"] = "Id";
	$fieldToolTipsperiod_type[""]["id"] = "";
	$fieldLabelsperiod_type[""]["hide"] = "Hide";
	$fieldToolTipsperiod_type[""]["hide"] = "";
	if (count($fieldToolTipsperiod_type[""]))
		$tdataperiod_type[".isUseToolTips"] = true;
}


	$tdataperiod_type[".NCSearch"] = true;



$tdataperiod_type[".shortTableName"] = "period_type";
$tdataperiod_type[".nSecOptions"] = 0;
$tdataperiod_type[".recsPerRowList"] = 1;
$tdataperiod_type[".recsPerRowPrint"] = 1;
$tdataperiod_type[".mainTableOwnerID"] = "";
$tdataperiod_type[".moveNext"] = 1;
$tdataperiod_type[".entityType"] = 0;

$tdataperiod_type[".strOriginalTableName"] = "period_type";




$tdataperiod_type[".showAddInPopup"] = false;

$tdataperiod_type[".showEditInPopup"] = false;

$tdataperiod_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataperiod_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataperiod_type[".fieldsForRegister"] = array();

$tdataperiod_type[".listAjax"] = false;

	$tdataperiod_type[".audit"] = false;

	$tdataperiod_type[".locking"] = false;

$tdataperiod_type[".edit"] = true;
$tdataperiod_type[".afterEditAction"] = 0;
$tdataperiod_type[".closePopupAfterEdit"] = 1;
$tdataperiod_type[".afterEditActionDetTable"] = "";

$tdataperiod_type[".add"] = true;
$tdataperiod_type[".afterAddAction"] = 0;
$tdataperiod_type[".closePopupAfterAdd"] = 1;
$tdataperiod_type[".afterAddActionDetTable"] = "";

$tdataperiod_type[".list"] = true;

$tdataperiod_type[".inlineEdit"] = true;
$tdataperiod_type[".inlineAdd"] = true;
$tdataperiod_type[".view"] = true;

$tdataperiod_type[".import"] = true;

$tdataperiod_type[".exportTo"] = true;

$tdataperiod_type[".printFriendly"] = true;

$tdataperiod_type[".delete"] = true;

$tdataperiod_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataperiod_type[".searchSaving"] = false;
//

if (isMobile()){
	$tdataperiod_type[".showSearchPanel"] = true;
}
else
	$tdataperiod_type[".showSearchPanel"] = false;

if (isMobile())
	$tdataperiod_type[".isUseAjaxSuggest"] = false;
else
	$tdataperiod_type[".isUseAjaxSuggest"] = true;

$tdataperiod_type[".rowHighlite"] = true;



$tdataperiod_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperiod_type[".isUseTimeForSearch"] = false;





$tdataperiod_type[".allSearchFields"] = array();
$tdataperiod_type[".filterFields"] = array();
$tdataperiod_type[".requiredSearchFields"] = array();

$tdataperiod_type[".allSearchFields"][] = "period";
	$tdataperiod_type[".allSearchFields"][] = "hide";
	

$tdataperiod_type[".googleLikeFields"] = array();
$tdataperiod_type[".googleLikeFields"][] = "id";
$tdataperiod_type[".googleLikeFields"][] = "period";
$tdataperiod_type[".googleLikeFields"][] = "hide";


$tdataperiod_type[".advSearchFields"] = array();
$tdataperiod_type[".advSearchFields"][] = "period";
$tdataperiod_type[".advSearchFields"][] = "hide";

$tdataperiod_type[".tableType"] = "list";

$tdataperiod_type[".printerPageOrientation"] = 0;
$tdataperiod_type[".nPrinterPageScale"] = 100;

$tdataperiod_type[".nPrinterSplitRecords"] = 40;

$tdataperiod_type[".nPrinterPDFSplitRecords"] = 40;



$tdataperiod_type[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataperiod_type[".pageSize"] = 20;

$tdataperiod_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataperiod_type[".strOrderBy"] = $tstrOrderBy;

$tdataperiod_type[".orderindexes"] = array();

$tdataperiod_type[".sqlHead"] = "SELECT id,  	period,  	hide";
$tdataperiod_type[".sqlFrom"] = "FROM period_type";
$tdataperiod_type[".sqlWhereExpr"] = "";
$tdataperiod_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperiod_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperiod_type[".arrGroupsPerPage"] = $arrGPP;

$tdataperiod_type[".highlightSearchResults"] = true;

$tableKeysperiod_type = array();
$tableKeysperiod_type[] = "period";
$tdataperiod_type[".Keys"] = $tableKeysperiod_type;

$tdataperiod_type[".listFields"] = array();
$tdataperiod_type[".listFields"][] = "period";
$tdataperiod_type[".listFields"][] = "hide";

$tdataperiod_type[".hideMobileList"] = array();


$tdataperiod_type[".viewFields"] = array();
$tdataperiod_type[".viewFields"][] = "id";
$tdataperiod_type[".viewFields"][] = "period";
$tdataperiod_type[".viewFields"][] = "hide";

$tdataperiod_type[".addFields"] = array();
$tdataperiod_type[".addFields"][] = "period";
$tdataperiod_type[".addFields"][] = "hide";

$tdataperiod_type[".masterListFields"] = array();
$tdataperiod_type[".masterListFields"][] = "id";
$tdataperiod_type[".masterListFields"][] = "period";
$tdataperiod_type[".masterListFields"][] = "hide";

$tdataperiod_type[".inlineAddFields"] = array();
$tdataperiod_type[".inlineAddFields"][] = "period";
$tdataperiod_type[".inlineAddFields"][] = "hide";

$tdataperiod_type[".editFields"] = array();
$tdataperiod_type[".editFields"][] = "id";
$tdataperiod_type[".editFields"][] = "period";
$tdataperiod_type[".editFields"][] = "hide";

$tdataperiod_type[".inlineEditFields"] = array();
$tdataperiod_type[".inlineEditFields"][] = "period";
$tdataperiod_type[".inlineEditFields"][] = "hide";

$tdataperiod_type[".exportFields"] = array();
$tdataperiod_type[".exportFields"][] = "period";
$tdataperiod_type[".exportFields"][] = "hide";

$tdataperiod_type[".importFields"] = array();
$tdataperiod_type[".importFields"][] = "period";
$tdataperiod_type[".importFields"][] = "hide";

$tdataperiod_type[".printFields"] = array();
$tdataperiod_type[".printFields"][] = "period";
$tdataperiod_type[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "period_type";
	$fdata["Label"] = GetFieldLabel("period_type","id");
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








	$tdataperiod_type["id"] = $fdata;
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "period_type";
	$fdata["Label"] = GetFieldLabel("period_type","period");
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

		$fdata["strField"] = "period";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "period";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataperiod_type["period"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "period_type";
	$fdata["Label"] = GetFieldLabel("period_type","hide");
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




	$tdataperiod_type["hide"] = $fdata;


$tables_data["period_type"]=&$tdataperiod_type;
$field_labels["period_type"] = &$fieldLabelsperiod_type;
$fieldToolTips["period_type"] = &$fieldToolTipsperiod_type;
$page_titles["period_type"] = &$pageTitlesperiod_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["period_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["period_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_period_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	period,  	hide";
$proto0["m_strFrom"] = "FROM period_type";
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
	"m_strTable" => "period_type",
	"m_srcTableName" => "period_type"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "period_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "period",
	"m_strTable" => "period_type",
	"m_srcTableName" => "period_type"
));

$proto7["m_sql"] = "period";
$proto7["m_srcTableName"] = "period_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "period_type",
	"m_srcTableName" => "period_type"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "period_type";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "period_type";
$proto12["m_srcTableName"] = "period_type";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "period";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "period_type";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "period_type";
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
$proto0["m_srcTableName"]="period_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_period_type = createSqlQuery_period_type();



			

$tdataperiod_type[".sqlquery"] = $queryData_period_type;

$tableEvents["period_type"] = new eventsBase;
$tdataperiod_type[".hasEvents"] = false;

?>