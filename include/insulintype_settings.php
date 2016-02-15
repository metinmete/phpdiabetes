<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsulintype = array();
	$tdatainsulintype[".truncateText"] = true;
	$tdatainsulintype[".NumberOfChars"] = 80;
	$tdatainsulintype[".ShortName"] = "insulintype";
	$tdatainsulintype[".OwnerID"] = "";
	$tdatainsulintype[".OriginalTable"] = "insulintype";

//	field labels
$fieldLabelsinsulintype = array();
$fieldToolTipsinsulintype = array();
$pageTitlesinsulintype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsulintype["English"] = array();
	$fieldToolTipsinsulintype["English"] = array();
	$pageTitlesinsulintype["English"] = array();
	$fieldLabelsinsulintype["English"]["type"] = "Type";
	$fieldToolTipsinsulintype["English"]["type"] = "";
	$fieldLabelsinsulintype["English"]["id"] = "Id";
	$fieldToolTipsinsulintype["English"]["id"] = "";
	$fieldLabelsinsulintype["English"]["hide"] = "Hide";
	$fieldToolTipsinsulintype["English"]["hide"] = "";
	if (count($fieldToolTipsinsulintype["English"]))
		$tdatainsulintype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsulintype[""] = array();
	$fieldToolTipsinsulintype[""] = array();
	$pageTitlesinsulintype[""] = array();
	$fieldLabelsinsulintype[""]["type"] = "Type";
	$fieldToolTipsinsulintype[""]["type"] = "";
	$fieldLabelsinsulintype[""]["id"] = "Id";
	$fieldToolTipsinsulintype[""]["id"] = "";
	$fieldLabelsinsulintype[""]["hide"] = "Hide";
	$fieldToolTipsinsulintype[""]["hide"] = "";
	if (count($fieldToolTipsinsulintype[""]))
		$tdatainsulintype[".isUseToolTips"] = true;
}


	$tdatainsulintype[".NCSearch"] = true;



$tdatainsulintype[".shortTableName"] = "insulintype";
$tdatainsulintype[".nSecOptions"] = 0;
$tdatainsulintype[".recsPerRowList"] = 1;
$tdatainsulintype[".recsPerRowPrint"] = 1;
$tdatainsulintype[".mainTableOwnerID"] = "";
$tdatainsulintype[".moveNext"] = 1;
$tdatainsulintype[".entityType"] = 0;

$tdatainsulintype[".strOriginalTableName"] = "insulintype";




$tdatainsulintype[".showAddInPopup"] = false;

$tdatainsulintype[".showEditInPopup"] = false;

$tdatainsulintype[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsulintype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsulintype[".fieldsForRegister"] = array();

$tdatainsulintype[".listAjax"] = false;

	$tdatainsulintype[".audit"] = false;

	$tdatainsulintype[".locking"] = false;

$tdatainsulintype[".edit"] = true;
$tdatainsulintype[".afterEditAction"] = 0;
$tdatainsulintype[".closePopupAfterEdit"] = 1;
$tdatainsulintype[".afterEditActionDetTable"] = "";

$tdatainsulintype[".add"] = true;
$tdatainsulintype[".afterAddAction"] = 0;
$tdatainsulintype[".closePopupAfterAdd"] = 1;
$tdatainsulintype[".afterAddActionDetTable"] = "";

$tdatainsulintype[".list"] = true;

$tdatainsulintype[".inlineEdit"] = true;
$tdatainsulintype[".inlineAdd"] = true;
$tdatainsulintype[".view"] = true;

$tdatainsulintype[".import"] = true;

$tdatainsulintype[".exportTo"] = true;

$tdatainsulintype[".printFriendly"] = true;

$tdatainsulintype[".delete"] = true;

$tdatainsulintype[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainsulintype[".searchSaving"] = false;
//

if (isMobile()){
	$tdatainsulintype[".showSearchPanel"] = true;
}
else
	$tdatainsulintype[".showSearchPanel"] = false;

if (isMobile())
	$tdatainsulintype[".isUseAjaxSuggest"] = false;
else
	$tdatainsulintype[".isUseAjaxSuggest"] = true;

$tdatainsulintype[".rowHighlite"] = true;



$tdatainsulintype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsulintype[".isUseTimeForSearch"] = false;





$tdatainsulintype[".allSearchFields"] = array();
$tdatainsulintype[".filterFields"] = array();
$tdatainsulintype[".requiredSearchFields"] = array();

$tdatainsulintype[".allSearchFields"][] = "type";
	$tdatainsulintype[".allSearchFields"][] = "hide";
	

$tdatainsulintype[".googleLikeFields"] = array();
$tdatainsulintype[".googleLikeFields"][] = "id";
$tdatainsulintype[".googleLikeFields"][] = "type";
$tdatainsulintype[".googleLikeFields"][] = "hide";


$tdatainsulintype[".advSearchFields"] = array();
$tdatainsulintype[".advSearchFields"][] = "type";
$tdatainsulintype[".advSearchFields"][] = "hide";

$tdatainsulintype[".tableType"] = "list";

$tdatainsulintype[".printerPageOrientation"] = 0;
$tdatainsulintype[".nPrinterPageScale"] = 100;

$tdatainsulintype[".nPrinterSplitRecords"] = 40;

$tdatainsulintype[".nPrinterPDFSplitRecords"] = 40;



$tdatainsulintype[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatainsulintype[".pageSize"] = 20;

$tdatainsulintype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsulintype[".strOrderBy"] = $tstrOrderBy;

$tdatainsulintype[".orderindexes"] = array();

$tdatainsulintype[".sqlHead"] = "SELECT id,  	`type`,  	hide";
$tdatainsulintype[".sqlFrom"] = "FROM insulintype";
$tdatainsulintype[".sqlWhereExpr"] = "";
$tdatainsulintype[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainsulintype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsulintype[".arrGroupsPerPage"] = $arrGPP;

$tdatainsulintype[".highlightSearchResults"] = true;

$tableKeysinsulintype = array();
$tableKeysinsulintype[] = "id";
$tdatainsulintype[".Keys"] = $tableKeysinsulintype;

$tdatainsulintype[".listFields"] = array();
$tdatainsulintype[".listFields"][] = "type";
$tdatainsulintype[".listFields"][] = "hide";

$tdatainsulintype[".hideMobileList"] = array();


$tdatainsulintype[".viewFields"] = array();
$tdatainsulintype[".viewFields"][] = "id";
$tdatainsulintype[".viewFields"][] = "type";
$tdatainsulintype[".viewFields"][] = "hide";

$tdatainsulintype[".addFields"] = array();
$tdatainsulintype[".addFields"][] = "type";
$tdatainsulintype[".addFields"][] = "hide";

$tdatainsulintype[".masterListFields"] = array();
$tdatainsulintype[".masterListFields"][] = "id";
$tdatainsulintype[".masterListFields"][] = "type";
$tdatainsulintype[".masterListFields"][] = "hide";

$tdatainsulintype[".inlineAddFields"] = array();
$tdatainsulintype[".inlineAddFields"][] = "type";
$tdatainsulintype[".inlineAddFields"][] = "hide";

$tdatainsulintype[".editFields"] = array();
$tdatainsulintype[".editFields"][] = "id";
$tdatainsulintype[".editFields"][] = "type";
$tdatainsulintype[".editFields"][] = "hide";

$tdatainsulintype[".inlineEditFields"] = array();
$tdatainsulintype[".inlineEditFields"][] = "type";
$tdatainsulintype[".inlineEditFields"][] = "hide";

$tdatainsulintype[".exportFields"] = array();
$tdatainsulintype[".exportFields"][] = "type";
$tdatainsulintype[".exportFields"][] = "hide";

$tdatainsulintype[".importFields"] = array();
$tdatainsulintype[".importFields"][] = "type";
$tdatainsulintype[".importFields"][] = "hide";

$tdatainsulintype[".printFields"] = array();
$tdatainsulintype[".printFields"][] = "type";
$tdatainsulintype[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "insulintype";
	$fdata["Label"] = GetFieldLabel("insulintype","id");
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








	$tdatainsulintype["id"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "insulintype";
	$fdata["Label"] = GetFieldLabel("insulintype","type");
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




	$tdatainsulintype["type"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "insulintype";
	$fdata["Label"] = GetFieldLabel("insulintype","hide");
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




	$tdatainsulintype["hide"] = $fdata;


$tables_data["insulintype"]=&$tdatainsulintype;
$field_labels["insulintype"] = &$fieldLabelsinsulintype;
$fieldToolTips["insulintype"] = &$fieldToolTipsinsulintype;
$page_titles["insulintype"] = &$pageTitlesinsulintype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insulintype"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["insulintype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insulintype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`type`,  	hide";
$proto0["m_strFrom"] = "FROM insulintype";
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
	"m_strTable" => "insulintype",
	"m_srcTableName" => "insulintype"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "insulintype";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "insulintype",
	"m_srcTableName" => "insulintype"
));

$proto7["m_sql"] = "`type`";
$proto7["m_srcTableName"] = "insulintype";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "insulintype",
	"m_srcTableName" => "insulintype"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "insulintype";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "insulintype";
$proto12["m_srcTableName"] = "insulintype";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "type";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "insulintype";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "insulintype";
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
$proto0["m_srcTableName"]="insulintype";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insulintype = createSqlQuery_insulintype();



			

$tdatainsulintype[".sqlquery"] = $queryData_insulintype;

$tableEvents["insulintype"] = new eventsBase;
$tdatainsulintype[".hasEvents"] = false;

?>