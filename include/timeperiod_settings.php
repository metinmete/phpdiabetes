<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatimeperiod = array();
	$tdatatimeperiod[".truncateText"] = true;
	$tdatatimeperiod[".NumberOfChars"] = 80;
	$tdatatimeperiod[".ShortName"] = "timeperiod";
	$tdatatimeperiod[".OwnerID"] = "";
	$tdatatimeperiod[".OriginalTable"] = "timeperiod";

//	field labels
$fieldLabelstimeperiod = array();
$fieldToolTipstimeperiod = array();
$pageTitlestimeperiod = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstimeperiod["English"] = array();
	$fieldToolTipstimeperiod["English"] = array();
	$pageTitlestimeperiod["English"] = array();
	$fieldLabelstimeperiod["English"]["period"] = "Period";
	$fieldToolTipstimeperiod["English"]["period"] = "";
	$fieldLabelstimeperiod["English"]["id"] = "Id";
	$fieldToolTipstimeperiod["English"]["id"] = "";
	$fieldLabelstimeperiod["English"]["hide"] = "Hide";
	$fieldToolTipstimeperiod["English"]["hide"] = "";
	if (count($fieldToolTipstimeperiod["English"]))
		$tdatatimeperiod[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstimeperiod[""] = array();
	$fieldToolTipstimeperiod[""] = array();
	$pageTitlestimeperiod[""] = array();
	$fieldLabelstimeperiod[""]["period"] = "Period";
	$fieldToolTipstimeperiod[""]["period"] = "";
	$fieldLabelstimeperiod[""]["id"] = "Id";
	$fieldToolTipstimeperiod[""]["id"] = "";
	$fieldLabelstimeperiod[""]["hide"] = "Hide";
	$fieldToolTipstimeperiod[""]["hide"] = "";
	if (count($fieldToolTipstimeperiod[""]))
		$tdatatimeperiod[".isUseToolTips"] = true;
}


	$tdatatimeperiod[".NCSearch"] = true;



$tdatatimeperiod[".shortTableName"] = "timeperiod";
$tdatatimeperiod[".nSecOptions"] = 0;
$tdatatimeperiod[".recsPerRowList"] = 1;
$tdatatimeperiod[".recsPerRowPrint"] = 1;
$tdatatimeperiod[".mainTableOwnerID"] = "";
$tdatatimeperiod[".moveNext"] = 1;
$tdatatimeperiod[".entityType"] = 0;

$tdatatimeperiod[".strOriginalTableName"] = "timeperiod";




$tdatatimeperiod[".showAddInPopup"] = false;

$tdatatimeperiod[".showEditInPopup"] = false;

$tdatatimeperiod[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatimeperiod[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatimeperiod[".fieldsForRegister"] = array();

$tdatatimeperiod[".listAjax"] = false;

	$tdatatimeperiod[".audit"] = false;

	$tdatatimeperiod[".locking"] = false;

$tdatatimeperiod[".edit"] = true;
$tdatatimeperiod[".afterEditAction"] = 0;
$tdatatimeperiod[".closePopupAfterEdit"] = 1;
$tdatatimeperiod[".afterEditActionDetTable"] = "";

$tdatatimeperiod[".add"] = true;
$tdatatimeperiod[".afterAddAction"] = 0;
$tdatatimeperiod[".closePopupAfterAdd"] = 1;
$tdatatimeperiod[".afterAddActionDetTable"] = "";

$tdatatimeperiod[".list"] = true;

$tdatatimeperiod[".inlineEdit"] = true;
$tdatatimeperiod[".inlineAdd"] = true;
$tdatatimeperiod[".view"] = true;

$tdatatimeperiod[".import"] = true;

$tdatatimeperiod[".exportTo"] = true;

$tdatatimeperiod[".printFriendly"] = true;

$tdatatimeperiod[".delete"] = true;

$tdatatimeperiod[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatimeperiod[".searchSaving"] = false;
//

if (isMobile()){
	$tdatatimeperiod[".showSearchPanel"] = true;
}
else
	$tdatatimeperiod[".showSearchPanel"] = false;

if (isMobile())
	$tdatatimeperiod[".isUseAjaxSuggest"] = false;
else
	$tdatatimeperiod[".isUseAjaxSuggest"] = true;

$tdatatimeperiod[".rowHighlite"] = true;



$tdatatimeperiod[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatimeperiod[".isUseTimeForSearch"] = false;





$tdatatimeperiod[".allSearchFields"] = array();
$tdatatimeperiod[".filterFields"] = array();
$tdatatimeperiod[".requiredSearchFields"] = array();

$tdatatimeperiod[".allSearchFields"][] = "period";
	$tdatatimeperiod[".allSearchFields"][] = "hide";
	

$tdatatimeperiod[".googleLikeFields"] = array();
$tdatatimeperiod[".googleLikeFields"][] = "id";
$tdatatimeperiod[".googleLikeFields"][] = "period";
$tdatatimeperiod[".googleLikeFields"][] = "hide";


$tdatatimeperiod[".advSearchFields"] = array();
$tdatatimeperiod[".advSearchFields"][] = "period";
$tdatatimeperiod[".advSearchFields"][] = "hide";

$tdatatimeperiod[".tableType"] = "list";

$tdatatimeperiod[".printerPageOrientation"] = 0;
$tdatatimeperiod[".nPrinterPageScale"] = 100;

$tdatatimeperiod[".nPrinterSplitRecords"] = 40;

$tdatatimeperiod[".nPrinterPDFSplitRecords"] = 40;



$tdatatimeperiod[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatatimeperiod[".pageSize"] = 20;

$tdatatimeperiod[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatimeperiod[".strOrderBy"] = $tstrOrderBy;

$tdatatimeperiod[".orderindexes"] = array();

$tdatatimeperiod[".sqlHead"] = "SELECT id,  	period,  	hide";
$tdatatimeperiod[".sqlFrom"] = "FROM timeperiod";
$tdatatimeperiod[".sqlWhereExpr"] = "";
$tdatatimeperiod[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatimeperiod[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatimeperiod[".arrGroupsPerPage"] = $arrGPP;

$tdatatimeperiod[".highlightSearchResults"] = true;

$tableKeystimeperiod = array();
$tableKeystimeperiod[] = "period";
$tdatatimeperiod[".Keys"] = $tableKeystimeperiod;

$tdatatimeperiod[".listFields"] = array();
$tdatatimeperiod[".listFields"][] = "period";
$tdatatimeperiod[".listFields"][] = "hide";

$tdatatimeperiod[".hideMobileList"] = array();


$tdatatimeperiod[".viewFields"] = array();
$tdatatimeperiod[".viewFields"][] = "id";
$tdatatimeperiod[".viewFields"][] = "period";
$tdatatimeperiod[".viewFields"][] = "hide";

$tdatatimeperiod[".addFields"] = array();
$tdatatimeperiod[".addFields"][] = "period";
$tdatatimeperiod[".addFields"][] = "hide";

$tdatatimeperiod[".masterListFields"] = array();
$tdatatimeperiod[".masterListFields"][] = "id";
$tdatatimeperiod[".masterListFields"][] = "period";
$tdatatimeperiod[".masterListFields"][] = "hide";

$tdatatimeperiod[".inlineAddFields"] = array();
$tdatatimeperiod[".inlineAddFields"][] = "period";
$tdatatimeperiod[".inlineAddFields"][] = "hide";

$tdatatimeperiod[".editFields"] = array();
$tdatatimeperiod[".editFields"][] = "id";
$tdatatimeperiod[".editFields"][] = "period";
$tdatatimeperiod[".editFields"][] = "hide";

$tdatatimeperiod[".inlineEditFields"] = array();
$tdatatimeperiod[".inlineEditFields"][] = "period";
$tdatatimeperiod[".inlineEditFields"][] = "hide";

$tdatatimeperiod[".exportFields"] = array();
$tdatatimeperiod[".exportFields"][] = "period";
$tdatatimeperiod[".exportFields"][] = "hide";

$tdatatimeperiod[".importFields"] = array();
$tdatatimeperiod[".importFields"][] = "period";
$tdatatimeperiod[".importFields"][] = "hide";

$tdatatimeperiod[".printFields"] = array();
$tdatatimeperiod[".printFields"][] = "period";
$tdatatimeperiod[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "timeperiod";
	$fdata["Label"] = GetFieldLabel("timeperiod","id");
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








	$tdatatimeperiod["id"] = $fdata;
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "timeperiod";
	$fdata["Label"] = GetFieldLabel("timeperiod","period");
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




	$tdatatimeperiod["period"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "timeperiod";
	$fdata["Label"] = GetFieldLabel("timeperiod","hide");
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




	$tdatatimeperiod["hide"] = $fdata;


$tables_data["timeperiod"]=&$tdatatimeperiod;
$field_labels["timeperiod"] = &$fieldLabelstimeperiod;
$fieldToolTips["timeperiod"] = &$fieldToolTipstimeperiod;
$page_titles["timeperiod"] = &$pageTitlestimeperiod;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["timeperiod"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["timeperiod"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_timeperiod()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	period,  	hide";
$proto0["m_strFrom"] = "FROM timeperiod";
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
	"m_strTable" => "timeperiod",
	"m_srcTableName" => "timeperiod"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "timeperiod";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "period",
	"m_strTable" => "timeperiod",
	"m_srcTableName" => "timeperiod"
));

$proto7["m_sql"] = "period";
$proto7["m_srcTableName"] = "timeperiod";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "timeperiod",
	"m_srcTableName" => "timeperiod"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "timeperiod";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "timeperiod";
$proto12["m_srcTableName"] = "timeperiod";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "period";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "timeperiod";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "timeperiod";
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
$proto0["m_srcTableName"]="timeperiod";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_timeperiod = createSqlQuery_timeperiod();



			

$tdatatimeperiod[".sqlquery"] = $queryData_timeperiod;

$tableEvents["timeperiod"] = new eventsBase;
$tdatatimeperiod[".hasEvents"] = false;

?>