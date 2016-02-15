<?php
require_once(getabspath("classes/cipherer.php"));




$tdataexam_type = array();
	$tdataexam_type[".truncateText"] = true;
	$tdataexam_type[".NumberOfChars"] = 80;
	$tdataexam_type[".ShortName"] = "exam_type";
	$tdataexam_type[".OwnerID"] = "";
	$tdataexam_type[".OriginalTable"] = "exam_type";

//	field labels
$fieldLabelsexam_type = array();
$fieldToolTipsexam_type = array();
$pageTitlesexam_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsexam_type["English"] = array();
	$fieldToolTipsexam_type["English"] = array();
	$pageTitlesexam_type["English"] = array();
	$fieldLabelsexam_type["English"]["id"] = "Id";
	$fieldToolTipsexam_type["English"]["id"] = "";
	$fieldLabelsexam_type["English"]["type"] = "Type";
	$fieldToolTipsexam_type["English"]["type"] = "";
	$fieldLabelsexam_type["English"]["hide"] = "Hide";
	$fieldToolTipsexam_type["English"]["hide"] = "";
	if (count($fieldToolTipsexam_type["English"]))
		$tdataexam_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsexam_type[""] = array();
	$fieldToolTipsexam_type[""] = array();
	$pageTitlesexam_type[""] = array();
	$fieldLabelsexam_type[""]["id"] = "Id";
	$fieldToolTipsexam_type[""]["id"] = "";
	$fieldLabelsexam_type[""]["type"] = "Type";
	$fieldToolTipsexam_type[""]["type"] = "";
	$fieldLabelsexam_type[""]["hide"] = "Hide";
	$fieldToolTipsexam_type[""]["hide"] = "";
	if (count($fieldToolTipsexam_type[""]))
		$tdataexam_type[".isUseToolTips"] = true;
}


	$tdataexam_type[".NCSearch"] = true;



$tdataexam_type[".shortTableName"] = "exam_type";
$tdataexam_type[".nSecOptions"] = 0;
$tdataexam_type[".recsPerRowList"] = 1;
$tdataexam_type[".recsPerRowPrint"] = 1;
$tdataexam_type[".mainTableOwnerID"] = "";
$tdataexam_type[".moveNext"] = 1;
$tdataexam_type[".entityType"] = 0;

$tdataexam_type[".strOriginalTableName"] = "exam_type";




$tdataexam_type[".showAddInPopup"] = false;

$tdataexam_type[".showEditInPopup"] = false;

$tdataexam_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataexam_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataexam_type[".fieldsForRegister"] = array();

$tdataexam_type[".listAjax"] = false;

	$tdataexam_type[".audit"] = false;

	$tdataexam_type[".locking"] = false;

$tdataexam_type[".edit"] = true;
$tdataexam_type[".afterEditAction"] = 1;
$tdataexam_type[".closePopupAfterEdit"] = 1;
$tdataexam_type[".afterEditActionDetTable"] = "";

$tdataexam_type[".add"] = true;
$tdataexam_type[".afterAddAction"] = 1;
$tdataexam_type[".closePopupAfterAdd"] = 1;
$tdataexam_type[".afterAddActionDetTable"] = "";

$tdataexam_type[".list"] = true;

$tdataexam_type[".inlineEdit"] = true;
$tdataexam_type[".inlineAdd"] = true;
$tdataexam_type[".view"] = true;

$tdataexam_type[".import"] = true;

$tdataexam_type[".exportTo"] = true;

$tdataexam_type[".printFriendly"] = true;

$tdataexam_type[".delete"] = true;

$tdataexam_type[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataexam_type[".searchSaving"] = false;
//

$tdataexam_type[".showSearchPanel"] = true;
		$tdataexam_type[".flexibleSearch"] = true;

if (isMobile())
	$tdataexam_type[".isUseAjaxSuggest"] = false;
else
	$tdataexam_type[".isUseAjaxSuggest"] = true;

$tdataexam_type[".rowHighlite"] = true;



$tdataexam_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdataexam_type[".isUseTimeForSearch"] = false;





$tdataexam_type[".allSearchFields"] = array();
$tdataexam_type[".filterFields"] = array();
$tdataexam_type[".requiredSearchFields"] = array();

$tdataexam_type[".allSearchFields"][] = "id";
	$tdataexam_type[".allSearchFields"][] = "type";
	$tdataexam_type[".allSearchFields"][] = "hide";
	

$tdataexam_type[".googleLikeFields"] = array();
$tdataexam_type[".googleLikeFields"][] = "id";
$tdataexam_type[".googleLikeFields"][] = "type";
$tdataexam_type[".googleLikeFields"][] = "hide";


$tdataexam_type[".advSearchFields"] = array();
$tdataexam_type[".advSearchFields"][] = "id";
$tdataexam_type[".advSearchFields"][] = "type";
$tdataexam_type[".advSearchFields"][] = "hide";

$tdataexam_type[".tableType"] = "list";

$tdataexam_type[".printerPageOrientation"] = 0;
$tdataexam_type[".nPrinterPageScale"] = 100;

$tdataexam_type[".nPrinterSplitRecords"] = 40;

$tdataexam_type[".nPrinterPDFSplitRecords"] = 40;



$tdataexam_type[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataexam_type[".pageSize"] = 20;

$tdataexam_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataexam_type[".strOrderBy"] = $tstrOrderBy;

$tdataexam_type[".orderindexes"] = array();

$tdataexam_type[".sqlHead"] = "SELECT id,  	`type`,  	hide";
$tdataexam_type[".sqlFrom"] = "FROM exam_type";
$tdataexam_type[".sqlWhereExpr"] = "";
$tdataexam_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataexam_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataexam_type[".arrGroupsPerPage"] = $arrGPP;

$tdataexam_type[".highlightSearchResults"] = true;

$tableKeysexam_type = array();
$tableKeysexam_type[] = "id";
$tdataexam_type[".Keys"] = $tableKeysexam_type;

$tdataexam_type[".listFields"] = array();
$tdataexam_type[".listFields"][] = "id";
$tdataexam_type[".listFields"][] = "type";
$tdataexam_type[".listFields"][] = "hide";

$tdataexam_type[".hideMobileList"] = array();


$tdataexam_type[".viewFields"] = array();
$tdataexam_type[".viewFields"][] = "id";
$tdataexam_type[".viewFields"][] = "type";
$tdataexam_type[".viewFields"][] = "hide";

$tdataexam_type[".addFields"] = array();
$tdataexam_type[".addFields"][] = "type";
$tdataexam_type[".addFields"][] = "hide";

$tdataexam_type[".masterListFields"] = array();
$tdataexam_type[".masterListFields"][] = "id";
$tdataexam_type[".masterListFields"][] = "type";
$tdataexam_type[".masterListFields"][] = "hide";

$tdataexam_type[".inlineAddFields"] = array();
$tdataexam_type[".inlineAddFields"][] = "type";
$tdataexam_type[".inlineAddFields"][] = "hide";

$tdataexam_type[".editFields"] = array();
$tdataexam_type[".editFields"][] = "type";
$tdataexam_type[".editFields"][] = "hide";

$tdataexam_type[".inlineEditFields"] = array();
$tdataexam_type[".inlineEditFields"][] = "type";
$tdataexam_type[".inlineEditFields"][] = "hide";

$tdataexam_type[".exportFields"] = array();
$tdataexam_type[".exportFields"][] = "id";
$tdataexam_type[".exportFields"][] = "type";
$tdataexam_type[".exportFields"][] = "hide";

$tdataexam_type[".importFields"] = array();
$tdataexam_type[".importFields"][] = "id";
$tdataexam_type[".importFields"][] = "type";
$tdataexam_type[".importFields"][] = "hide";

$tdataexam_type[".printFields"] = array();
$tdataexam_type[".printFields"][] = "id";
$tdataexam_type[".printFields"][] = "type";
$tdataexam_type[".printFields"][] = "hide";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "exam_type";
	$fdata["Label"] = GetFieldLabel("exam_type","id");
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




	$tdataexam_type["id"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "exam_type";
	$fdata["Label"] = GetFieldLabel("exam_type","type");
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




	$tdataexam_type["type"] = $fdata;
//	hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hide";
	$fdata["GoodName"] = "hide";
	$fdata["ownerTable"] = "exam_type";
	$fdata["Label"] = GetFieldLabel("exam_type","hide");
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




	$tdataexam_type["hide"] = $fdata;


$tables_data["exam_type"]=&$tdataexam_type;
$field_labels["exam_type"] = &$fieldLabelsexam_type;
$fieldToolTips["exam_type"] = &$fieldToolTipsexam_type;
$page_titles["exam_type"] = &$pageTitlesexam_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["exam_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["exam_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_exam_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`type`,  	hide";
$proto0["m_strFrom"] = "FROM exam_type";
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
	"m_strTable" => "exam_type",
	"m_srcTableName" => "exam_type"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "exam_type";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "exam_type",
	"m_srcTableName" => "exam_type"
));

$proto7["m_sql"] = "`type`";
$proto7["m_srcTableName"] = "exam_type";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "hide",
	"m_strTable" => "exam_type",
	"m_srcTableName" => "exam_type"
));

$proto9["m_sql"] = "hide";
$proto9["m_srcTableName"] = "exam_type";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "exam_type";
$proto12["m_srcTableName"] = "exam_type";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "type";
$proto12["m_columns"][] = "hide";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "exam_type";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "exam_type";
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
$proto0["m_srcTableName"]="exam_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_exam_type = createSqlQuery_exam_type();



			

$tdataexam_type[".sqlquery"] = $queryData_exam_type;

$tableEvents["exam_type"] = new eventsBase;
$tdataexam_type[".hasEvents"] = false;

?>