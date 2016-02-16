<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["period_type"]["readings.time_period"]["edit"] = array("table" => "readings", "field" => "time_period", "page" => "edit");
	$lookupTableLinks["site_type"]["readings.sample_site"]["edit"] = array("table" => "readings", "field" => "sample_site", "page" => "edit");
	$lookupTableLinks["period_type"]["insulin.time_period"]["edit"] = array("table" => "insulin", "field" => "time_period", "page" => "edit");
	$lookupTableLinks["insulin_type"]["insulin.type"]["edit"] = array("table" => "insulin", "field" => "type", "page" => "edit");
	$lookupTableLinks["inject_type"]["insulin.inject_type"]["edit"] = array("table" => "insulin", "field" => "inject_type", "page" => "edit");
	$lookupTableLinks["period_type"]["exercise.time_period"]["edit"] = array("table" => "exercise", "field" => "time_period", "page" => "edit");
	$lookupTableLinks["period_type"]["medication.time_period"]["edit"] = array("table" => "medication", "field" => "time_period", "page" => "edit");
	$lookupTableLinks["medicine_type"]["medication.medication"]["edit"] = array("table" => "medication", "field" => "medication", "page" => "edit");
	$lookupTableLinks["test_types"]["labtest.type"]["edit"] = array("table" => "labtest", "field" => "type", "page" => "edit");
	$lookupTableLinks["period_type"]["Readings_Chart.time_period"]["search"] = array("table" => "Readings Chart", "field" => "time_period", "page" => "search");
	$lookupTableLinks["site_type"]["Readings_Chart.sample_site"]["search"] = array("table" => "Readings Chart", "field" => "sample_site", "page" => "search");
}

?>