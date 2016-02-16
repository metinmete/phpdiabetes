<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasite_type = array();
	$tdatasite_type[".truncateText"] = true;
	$tdatasite_type[".NumberOfChars"] = 80;
	$tdatasite_type[".ShortName"] = "site_type";
	$tdatasite_type[".OwnerID"] = "";
	$tdatasite_type[".OriginalTable"] = "site_type";

//	field labels
$fieldLabelssite_type = array();
$fieldToolTipssite_type = array();
$pageTitlessite_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssite_type["English"] = array();
	$fieldToolTipssite_type["English"] = array();
	$pageTitlessite_type["English"] = array();
	$fieldLabelssite_type["English"]["site"] = "Site";
	$fieldToolTipssite_type["English"]["site"] = "";
	$fieldLabelssite_type["English"]["id"] = "Id";
	$fieldToolTipssite_type["English"]["id"] = "";
	$fieldLabelssite_type["English"]["hide"] = "Hide";
	$fieldToolTipssite_type["English"]["hide"] = "";
	if (count($fieldToolTipssite_type["English"]))
		$tdatasite_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssite_type[""] = array();
	$fieldToolTipssite_type[""] = array();
	$pageTitlessite_type[""] = array();
	$fieldLabelssite_type[""]["site"] = "Site";
	$fieldToolTipssite_type[""]["site"] = "";
	$fieldLabelssite_type[""]["id"] = "Id";
	$fieldToolTipssite_type[""]["id"] = "";
	$fieldLabelssite_type[""]["hide"] = "Hide";
	$fieldToolTipssite_type[""]["hide"] = "";
	if (count($fieldToolTipssite_type[""]))
		$tdatasite_type[".isUseToolTips"] = true;
}


	$tdatasite_type[".NCSearch"] = true;



$tdatasite_type[".shortTableName"] = "site_type";
$tdatasite_type[".nSecOptions"] = 0;
$tdatasite_type[".recsPerRowList"] = 1;
$tdatasite_type[".recsPerRowPrint"] = 1;
$tdatasite_type[".mainTableOwnerID"] = "";
$tdatasite_type[".moveNext"] = 1;
$tdatasite_type[".entityType"] = 0;

$tdatasite_type[".strOriginalTableName"] = "site_type";




$tdatasite_type[".showAddInPopup"] = false;

$tdatasite_type[".showEditInPopup"] = false;

$tdatasite_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasite_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasite_type[".fieldsForRegister"] = array();

$tdatasite_type[".listAjax"] = false;

	$tdatasite_type[".audit"] = false;

	$tdatasite_type[".locking"] = false;

$tdatasite_type[".edit"] = true;
$tdatasite_type[".afterEditAction"] = 0;
$tdatasite_type[".closePopupAfterEdit"] = 1;
$tdatasite_type[".afterEditActionDetTable"] = "";

$tdatasite_type[".add"] = true;
$tdatasite_type[".afterAddAction"] = 0;
$tdatasite_type[".closePopupAfterAdd"] = 1;
$tdatasite_type[".afterAddActionDetTable"] = "";

$tdatasite_type[".list"] = true;

$tdatasite_type[".inlineEdit"] = true;
$tdatasite_type[".inlineAdd"] = true;
$tdatasite_type[".copy"] = true;
$tdatasite_type[".view"] = true;

$tdatasite_type[".import"] = true;

$tdatasite_type[".exportTo"] = true;

$tdatasite_type[".printFriendly"] = true;

$tdatasite_type[".delete"] = true;

$tdatasite_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasite_type[".searchSaving"] = false;
//

if (isMobile()){
	$tdatasite_type[".showSearchPanel"] = true;
}
else
	$tdatasite_type[".showSearchPanel"] = false;

if (isMobile())
	$tdatasite_type[".isUseAjaxSuggest"] = false;
else
	$tdatasite_type[".isUseAjaxSuggest"] = true;

$tdatasite_type[".rowHighlite"] = true;



$tdatasite_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasite_type[".isUseTimeForSearch"] = false;





$tdatasite_type[".allSearchFields"] = array();
$tdatasite_type[".filterFields"] = array();
$tdatasite_type[".requiredSearchFields"] = array();

$tdatasite_type[".allSearchFields"][] = "site";
	$tdatasite_type[".allSearchFields"][] = "hide";
	

$tdatasite_type[".googleLikeFields"] = array();
$tdatasite_type[".googleLikeFields"][] = "id";
$tdatasite_type[".googleLikeFields"][] = "site";
$tdatasite_type[".googleLikeFields"][] = "hide";


$tdatasite_type[".advSearchFields"] = array();
$tdatasite_type[".advSearchFields"][] = "site";
$tdatasite_type[".advSearchFields"][] = "hide";

$tdatasite_type[".tableType"] = "list";

$tdatasite_type[".printerPageOrientation"] = 0;
$tdatasite_type[".nPrinterPageScale"] = 100;

$tdatasite_type[".nPrinterSplitRecords"] = 40;

$tdatasite_type[".nPrinterPDFSplitRecords"] = 40;



$tdatasite_type[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasite_type[".pageSize"] = 20;

$tdatasite_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasite_type[".strOrderBy"] = $tstrOrderBy;

$tdatasite_type[".orderindexes"] = array();

$tdatasite_type[".sqlHead"] = "SELECT id,  	site,  	hide";
$tdatasite_type[".sqlFrom"] = "FROM site_type";
$tdatasite_type[".sqlWhereExpr"] = "";
$tdatasite_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasite_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasite_type[".arrGroupsPerPage"] = $arrGPP;

$tdatasite_type[".highlightSearchResults"] = true;

$tableKeyssite_type = array();
$tableKeyssite_type[] = "site";
$tdatasite_type[".Keys"] = $tableKeyssite_type;

$tdatasite_type[".listFields"] = array();
$tdatasite_type[".listFields"][] = "site";
$tdatasite_type[".listFields"][] = "hide";

$tdatasite_type[".hideMobileList"] = array();


$tdatasite_type[".viewFields"] = array();
$tdatasite_type[".viewFields"][] = "id";
$tdatasite_type[".viewFields"][] = "site";
$tdatasite_type[".viewFields"][] = "hide";

$tdatasite_type[".addFields"] = array();
$tdatasite_type[".addFields"][] = "site";
$tdatasite_type[".addFields"][] = "hide";

$tdatasite_type[".masterListFields"] = array();
$tdatasite_type[".masterListFields"][] = "id";
$tdatasite_type[".masterListFields"][] = "site";
$tdatasite_type[".masterListFields"][] = "hide";

$tdatasite_type[".inlineAddFields"] = array();
$tdatasite_type[".inlineAddFields"][] = "site";
$tdatasite_type[".inlineAddFields"][] = "hide";

$tdatasite_type[".editFields"] = array();
$tdatasite_type[".editFields"][] = "id";
$tdatasite_type[".editFields"][] = "site";
$tdatasite_type[".editFields"][] = "hide";

$tdatasite_type[".inlineEditFields"] = array();
$tdatasite_type[".inlineEditFields"][] = "site";
$tdatasite_type[".inlineEditFields"][] = "hide";

$tdatasite_type[".exportFields"] = array();
$tdatasite_type[".exportFields"][] = "site";
$tdatasite_type[".exportFields"][] = "hide";

$tdatasite_type[".importFields"] = array();
$tdatasite_type[".importFields"][] = "site";
$tdatasite_type[".importFields"][] = "hide";

$tdatasite_type[".printFields"] = array();
$tdatasite_type[".printFields"][] = "site";
$tdatasite_type[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "site_type";
	$fdata["Label"] = GetFieldLabel("site_type","id");
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








	$tdatasite_type["id"] = $fdata;
//	site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "site";
	$fdata["GoodName"] = "site";
	$fdata["ownerTable"] = "site_type";
	$fdata["Label"] = GetFieldLabel("site_type","site");
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

		$fdata["strField"] = "site";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "site";

	
	
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




	$tdatasite_type["site"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "site_type";
	$fdata["Label"] = GetFieldLabel("site_type","hide");
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




	$tdatasite_type["hide"] = $fdata;


$tables_data["site_type"]=&$tdatasite_type;
$field_labels["site_type"] = &$fieldLabelssite_type;
$fieldToolTips["site_type"] = &$fieldToolTipssite_type;
$page_titles["site_type"] = &$pageTitlessite_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["site_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["site_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_site_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	site,  	hide";
$proto0["m_strFrom"] = "FROM site_type";
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
	"m_strTable" => "site_type",
	"m_srcTableName" => "site_type"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "site_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "site",
	"m_strTable" => "site_type",
	"m_srcTableName" => "site_type"
));

$proto7["m_sql"] = "site";
$proto7["m_srcTableName"] = "site_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "site_type",
	"m_srcTableName" => "site_type"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "site_type";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "site_type";
$proto12["m_srcTableName"] = "site_type";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "site";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "site_type";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "site_type";
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
$proto0["m_srcTableName"]="site_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_site_type = createSqlQuery_site_type();



			

$tdatasite_type[".sqlquery"] = $queryData_site_type;

$tableEvents["site_type"] = new eventsBase;
$tdatasite_type[".hasEvents"] = false;

?>