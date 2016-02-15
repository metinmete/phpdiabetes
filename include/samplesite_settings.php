<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasamplesite = array();
	$tdatasamplesite[".truncateText"] = true;
	$tdatasamplesite[".NumberOfChars"] = 80;
	$tdatasamplesite[".ShortName"] = "samplesite";
	$tdatasamplesite[".OwnerID"] = "";
	$tdatasamplesite[".OriginalTable"] = "samplesite";

//	field labels
$fieldLabelssamplesite = array();
$fieldToolTipssamplesite = array();
$pageTitlessamplesite = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssamplesite["English"] = array();
	$fieldToolTipssamplesite["English"] = array();
	$pageTitlessamplesite["English"] = array();
	$fieldLabelssamplesite["English"]["site"] = "Site";
	$fieldToolTipssamplesite["English"]["site"] = "";
	$fieldLabelssamplesite["English"]["id"] = "Id";
	$fieldToolTipssamplesite["English"]["id"] = "";
	$fieldLabelssamplesite["English"]["hide"] = "Hide";
	$fieldToolTipssamplesite["English"]["hide"] = "";
	if (count($fieldToolTipssamplesite["English"]))
		$tdatasamplesite[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssamplesite[""] = array();
	$fieldToolTipssamplesite[""] = array();
	$pageTitlessamplesite[""] = array();
	$fieldLabelssamplesite[""]["site"] = "Site";
	$fieldToolTipssamplesite[""]["site"] = "";
	$fieldLabelssamplesite[""]["id"] = "Id";
	$fieldToolTipssamplesite[""]["id"] = "";
	$fieldLabelssamplesite[""]["hide"] = "Hide";
	$fieldToolTipssamplesite[""]["hide"] = "";
	if (count($fieldToolTipssamplesite[""]))
		$tdatasamplesite[".isUseToolTips"] = true;
}


	$tdatasamplesite[".NCSearch"] = true;



$tdatasamplesite[".shortTableName"] = "samplesite";
$tdatasamplesite[".nSecOptions"] = 0;
$tdatasamplesite[".recsPerRowList"] = 1;
$tdatasamplesite[".recsPerRowPrint"] = 1;
$tdatasamplesite[".mainTableOwnerID"] = "";
$tdatasamplesite[".moveNext"] = 1;
$tdatasamplesite[".entityType"] = 0;

$tdatasamplesite[".strOriginalTableName"] = "samplesite";




$tdatasamplesite[".showAddInPopup"] = false;

$tdatasamplesite[".showEditInPopup"] = false;

$tdatasamplesite[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasamplesite[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasamplesite[".fieldsForRegister"] = array();

$tdatasamplesite[".listAjax"] = false;

	$tdatasamplesite[".audit"] = false;

	$tdatasamplesite[".locking"] = false;

$tdatasamplesite[".edit"] = true;
$tdatasamplesite[".afterEditAction"] = 0;
$tdatasamplesite[".closePopupAfterEdit"] = 1;
$tdatasamplesite[".afterEditActionDetTable"] = "";

$tdatasamplesite[".add"] = true;
$tdatasamplesite[".afterAddAction"] = 0;
$tdatasamplesite[".closePopupAfterAdd"] = 1;
$tdatasamplesite[".afterAddActionDetTable"] = "";

$tdatasamplesite[".list"] = true;

$tdatasamplesite[".inlineEdit"] = true;
$tdatasamplesite[".inlineAdd"] = true;
$tdatasamplesite[".copy"] = true;
$tdatasamplesite[".view"] = true;

$tdatasamplesite[".import"] = true;

$tdatasamplesite[".exportTo"] = true;

$tdatasamplesite[".printFriendly"] = true;

$tdatasamplesite[".delete"] = true;

$tdatasamplesite[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasamplesite[".searchSaving"] = false;
//

if (isMobile()){
	$tdatasamplesite[".showSearchPanel"] = true;
}
else
	$tdatasamplesite[".showSearchPanel"] = false;

if (isMobile())
	$tdatasamplesite[".isUseAjaxSuggest"] = false;
else
	$tdatasamplesite[".isUseAjaxSuggest"] = true;

$tdatasamplesite[".rowHighlite"] = true;



$tdatasamplesite[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasamplesite[".isUseTimeForSearch"] = false;





$tdatasamplesite[".allSearchFields"] = array();
$tdatasamplesite[".filterFields"] = array();
$tdatasamplesite[".requiredSearchFields"] = array();

$tdatasamplesite[".allSearchFields"][] = "site";
	$tdatasamplesite[".allSearchFields"][] = "hide";
	

$tdatasamplesite[".googleLikeFields"] = array();
$tdatasamplesite[".googleLikeFields"][] = "id";
$tdatasamplesite[".googleLikeFields"][] = "site";
$tdatasamplesite[".googleLikeFields"][] = "hide";


$tdatasamplesite[".advSearchFields"] = array();
$tdatasamplesite[".advSearchFields"][] = "site";
$tdatasamplesite[".advSearchFields"][] = "hide";

$tdatasamplesite[".tableType"] = "list";

$tdatasamplesite[".printerPageOrientation"] = 0;
$tdatasamplesite[".nPrinterPageScale"] = 100;

$tdatasamplesite[".nPrinterSplitRecords"] = 40;

$tdatasamplesite[".nPrinterPDFSplitRecords"] = 40;



$tdatasamplesite[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasamplesite[".pageSize"] = 20;

$tdatasamplesite[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasamplesite[".strOrderBy"] = $tstrOrderBy;

$tdatasamplesite[".orderindexes"] = array();

$tdatasamplesite[".sqlHead"] = "SELECT id,  	site,  	hide";
$tdatasamplesite[".sqlFrom"] = "FROM samplesite";
$tdatasamplesite[".sqlWhereExpr"] = "";
$tdatasamplesite[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasamplesite[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasamplesite[".arrGroupsPerPage"] = $arrGPP;

$tdatasamplesite[".highlightSearchResults"] = true;

$tableKeyssamplesite = array();
$tableKeyssamplesite[] = "site";
$tdatasamplesite[".Keys"] = $tableKeyssamplesite;

$tdatasamplesite[".listFields"] = array();
$tdatasamplesite[".listFields"][] = "site";
$tdatasamplesite[".listFields"][] = "hide";

$tdatasamplesite[".hideMobileList"] = array();


$tdatasamplesite[".viewFields"] = array();
$tdatasamplesite[".viewFields"][] = "id";
$tdatasamplesite[".viewFields"][] = "site";
$tdatasamplesite[".viewFields"][] = "hide";

$tdatasamplesite[".addFields"] = array();
$tdatasamplesite[".addFields"][] = "site";
$tdatasamplesite[".addFields"][] = "hide";

$tdatasamplesite[".masterListFields"] = array();
$tdatasamplesite[".masterListFields"][] = "id";
$tdatasamplesite[".masterListFields"][] = "site";
$tdatasamplesite[".masterListFields"][] = "hide";

$tdatasamplesite[".inlineAddFields"] = array();
$tdatasamplesite[".inlineAddFields"][] = "site";
$tdatasamplesite[".inlineAddFields"][] = "hide";

$tdatasamplesite[".editFields"] = array();
$tdatasamplesite[".editFields"][] = "id";
$tdatasamplesite[".editFields"][] = "site";
$tdatasamplesite[".editFields"][] = "hide";

$tdatasamplesite[".inlineEditFields"] = array();
$tdatasamplesite[".inlineEditFields"][] = "site";
$tdatasamplesite[".inlineEditFields"][] = "hide";

$tdatasamplesite[".exportFields"] = array();
$tdatasamplesite[".exportFields"][] = "site";
$tdatasamplesite[".exportFields"][] = "hide";

$tdatasamplesite[".importFields"] = array();
$tdatasamplesite[".importFields"][] = "site";
$tdatasamplesite[".importFields"][] = "hide";

$tdatasamplesite[".printFields"] = array();
$tdatasamplesite[".printFields"][] = "site";
$tdatasamplesite[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "samplesite";
	$fdata["Label"] = GetFieldLabel("samplesite","id");
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








	$tdatasamplesite["id"] = $fdata;
//	site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "site";
	$fdata["GoodName"] = "site";
	$fdata["ownerTable"] = "samplesite";
	$fdata["Label"] = GetFieldLabel("samplesite","site");
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




	$tdatasamplesite["site"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "samplesite";
	$fdata["Label"] = GetFieldLabel("samplesite","hide");
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




	$tdatasamplesite["hide"] = $fdata;


$tables_data["samplesite"]=&$tdatasamplesite;
$field_labels["samplesite"] = &$fieldLabelssamplesite;
$fieldToolTips["samplesite"] = &$fieldToolTipssamplesite;
$page_titles["samplesite"] = &$pageTitlessamplesite;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["samplesite"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["samplesite"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_samplesite()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	site,  	hide";
$proto0["m_strFrom"] = "FROM samplesite";
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
	"m_strTable" => "samplesite",
	"m_srcTableName" => "samplesite"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "samplesite";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "site",
	"m_strTable" => "samplesite",
	"m_srcTableName" => "samplesite"
));

$proto7["m_sql"] = "site";
$proto7["m_srcTableName"] = "samplesite";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "samplesite",
	"m_srcTableName" => "samplesite"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "samplesite";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "samplesite";
$proto12["m_srcTableName"] = "samplesite";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "site";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "samplesite";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "samplesite";
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
$proto0["m_srcTableName"]="samplesite";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_samplesite = createSqlQuery_samplesite();



			

$tdatasamplesite[".sqlquery"] = $queryData_samplesite;

$tableEvents["samplesite"] = new eventsBase;
$tdatasamplesite[".hasEvents"] = false;

?>