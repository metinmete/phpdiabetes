<?php
function DisplayMasterTableInfo_users($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "users";
	$xt->eventsObject = getEventObject($tName);
	
	include_once(getabspath('classes/listpage.php'));
	include_once(getabspath('classes/listpage_simple.php'));
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "insulin")
	{
		$keysAssoc["id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("users","id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "readings")
	{
		$keysAssoc["id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("users","id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "meal")
	{
		$keysAssoc["id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("users","id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "exercise")
	{
		$keysAssoc["id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("users","id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "medication")
	{
		$keysAssoc["id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("users","id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "labtest")
	{
		$keysAssoc["id"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("users","id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["id"]));
	
	$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));
	$format = $settings->getViewFormat("id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("id")))
		$class = ' rnr-field-number';
		
	$xt->assign("id_class", $class); // add class for field header as field value
	$xt->assign("first_name_mastervalue", $viewControls->showDBValue("first_name", $data, $keylink));
	$format = $settings->getViewFormat("first_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("first_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("first_name_class", $class); // add class for field header as field value
	$xt->assign("last_name_mastervalue", $viewControls->showDBValue("last_name", $data, $keylink));
	$format = $settings->getViewFormat("last_name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("last_name")))
		$class = ' rnr-field-number';
		
	$xt->assign("last_name_class", $class); // add class for field header as field value
	$xt->assign("address1_mastervalue", $viewControls->showDBValue("address1", $data, $keylink));
	$format = $settings->getViewFormat("address1");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("address1")))
		$class = ' rnr-field-number';
		
	$xt->assign("address1_class", $class); // add class for field header as field value
	$xt->assign("address2_mastervalue", $viewControls->showDBValue("address2", $data, $keylink));
	$format = $settings->getViewFormat("address2");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("address2")))
		$class = ' rnr-field-number';
		
	$xt->assign("address2_class", $class); // add class for field header as field value
	$xt->assign("address3_mastervalue", $viewControls->showDBValue("address3", $data, $keylink));
	$format = $settings->getViewFormat("address3");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("address3")))
		$class = ' rnr-field-number';
		
	$xt->assign("address3_class", $class); // add class for field header as field value
	$xt->assign("city_mastervalue", $viewControls->showDBValue("city", $data, $keylink));
	$format = $settings->getViewFormat("city");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("city")))
		$class = ' rnr-field-number';
		
	$xt->assign("city_class", $class); // add class for field header as field value
	$xt->assign("state_mastervalue", $viewControls->showDBValue("state", $data, $keylink));
	$format = $settings->getViewFormat("state");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("state")))
		$class = ' rnr-field-number';
		
	$xt->assign("state_class", $class); // add class for field header as field value
	$xt->assign("zip_mastervalue", $viewControls->showDBValue("zip", $data, $keylink));
	$format = $settings->getViewFormat("zip");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("zip")))
		$class = ' rnr-field-number';
		
	$xt->assign("zip_class", $class); // add class for field header as field value
	$xt->assign("email_mastervalue", $viewControls->showDBValue("email", $data, $keylink));
	$format = $settings->getViewFormat("email");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("email")))
		$class = ' rnr-field-number';
		
	$xt->assign("email_class", $class); // add class for field header as field value
	$xt->assign("phonetype_mastervalue", $viewControls->showDBValue("phonetype", $data, $keylink));
	$format = $settings->getViewFormat("phonetype");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("phonetype")))
		$class = ' rnr-field-number';
		
	$xt->assign("phonetype_class", $class); // add class for field header as field value
	$xt->assign("phonenumber_mastervalue", $viewControls->showDBValue("phonenumber", $data, $keylink));
	$format = $settings->getViewFormat("phonenumber");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("phonenumber")))
		$class = ' rnr-field-number';
		
	$xt->assign("phonenumber_class", $class); // add class for field header as field value

	$layout = GetPageLayout("users", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("users", "masterlist"));
}

?>