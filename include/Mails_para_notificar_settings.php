<?php
$tdataMails_para_notificar = array();
$tdataMails_para_notificar[".searchableFields"] = array();
$tdataMails_para_notificar[".ShortName"] = "Mails_para_notificar";
$tdataMails_para_notificar[".OwnerID"] = "";
$tdataMails_para_notificar[".OriginalTable"] = "I_ConvNacMailsNotif";


$tdataMails_para_notificar[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataMails_para_notificar[".originalPagesByType"] = $tdataMails_para_notificar[".pagesByType"];
$tdataMails_para_notificar[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataMails_para_notificar[".originalPages"] = $tdataMails_para_notificar[".pages"];
$tdataMails_para_notificar[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataMails_para_notificar[".originalDefaultPages"] = $tdataMails_para_notificar[".defaultPages"];

//	field labels
$fieldLabelsMails_para_notificar = array();
$fieldToolTipsMails_para_notificar = array();
$pageTitlesMails_para_notificar = array();
$placeHoldersMails_para_notificar = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMails_para_notificar["Spanish"] = array();
	$fieldToolTipsMails_para_notificar["Spanish"] = array();
	$placeHoldersMails_para_notificar["Spanish"] = array();
	$pageTitlesMails_para_notificar["Spanish"] = array();
	$fieldLabelsMails_para_notificar["Spanish"]["idI_ConvNacMailsNotif"] = "#id";
	$fieldToolTipsMails_para_notificar["Spanish"]["idI_ConvNacMailsNotif"] = "";
	$placeHoldersMails_para_notificar["Spanish"]["idI_ConvNacMailsNotif"] = "";
	$fieldLabelsMails_para_notificar["Spanish"]["email_IConvNacMailsNotif"] = "Email";
	$fieldToolTipsMails_para_notificar["Spanish"]["email_IConvNacMailsNotif"] = "";
	$placeHoldersMails_para_notificar["Spanish"]["email_IConvNacMailsNotif"] = "";
	$fieldLabelsMails_para_notificar["Spanish"]["Activo_IConvNacMailsNotif"] = "Activo";
	$fieldToolTipsMails_para_notificar["Spanish"]["Activo_IConvNacMailsNotif"] = "";
	$placeHoldersMails_para_notificar["Spanish"]["Activo_IConvNacMailsNotif"] = "";
	$fieldLabelsMails_para_notificar["Spanish"]["RegistroFecha_IConvNacMailsNotif"] = "Registro fecha";
	$fieldToolTipsMails_para_notificar["Spanish"]["RegistroFecha_IConvNacMailsNotif"] = "";
	$placeHoldersMails_para_notificar["Spanish"]["RegistroFecha_IConvNacMailsNotif"] = "";
	$fieldLabelsMails_para_notificar["Spanish"]["RegistroHora_IConvNacMailsNotif"] = "Registro hora";
	$fieldToolTipsMails_para_notificar["Spanish"]["RegistroHora_IConvNacMailsNotif"] = "";
	$placeHoldersMails_para_notificar["Spanish"]["RegistroHora_IConvNacMailsNotif"] = "";
	$fieldLabelsMails_para_notificar["Spanish"]["RegistroUsr_IConvNacMailsNotif"] = "Registro user";
	$fieldToolTipsMails_para_notificar["Spanish"]["RegistroUsr_IConvNacMailsNotif"] = "";
	$placeHoldersMails_para_notificar["Spanish"]["RegistroUsr_IConvNacMailsNotif"] = "";
	$fieldLabelsMails_para_notificar["Spanish"]["idSistema_iConvNacMailsNotif"] = "IdSistema IConvNacMailsNotif";
	$fieldToolTipsMails_para_notificar["Spanish"]["idSistema_iConvNacMailsNotif"] = "";
	$placeHoldersMails_para_notificar["Spanish"]["idSistema_iConvNacMailsNotif"] = "";
	if (count($fieldToolTipsMails_para_notificar["Spanish"]))
		$tdataMails_para_notificar[".isUseToolTips"] = true;
}


	$tdataMails_para_notificar[".NCSearch"] = true;



$tdataMails_para_notificar[".shortTableName"] = "Mails_para_notificar";
$tdataMails_para_notificar[".nSecOptions"] = 0;

$tdataMails_para_notificar[".mainTableOwnerID"] = "";
$tdataMails_para_notificar[".entityType"] = 1;
$tdataMails_para_notificar[".connId"] = "Mesa_Entrada_at_10_20_96_220";


$tdataMails_para_notificar[".strOriginalTableName"] = "I_ConvNacMailsNotif";

	



$tdataMails_para_notificar[".showAddInPopup"] = false;

$tdataMails_para_notificar[".showEditInPopup"] = false;

$tdataMails_para_notificar[".showViewInPopup"] = false;

$tdataMails_para_notificar[".listAjax"] = false;
//	temporary
//$tdataMails_para_notificar[".listAjax"] = false;

	$tdataMails_para_notificar[".audit"] = false;

	$tdataMails_para_notificar[".locking"] = false;


$pages = $tdataMails_para_notificar[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataMails_para_notificar[".edit"] = true;
	$tdataMails_para_notificar[".afterEditAction"] = 1;
	$tdataMails_para_notificar[".closePopupAfterEdit"] = 1;
	$tdataMails_para_notificar[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataMails_para_notificar[".add"] = true;
$tdataMails_para_notificar[".afterAddAction"] = 1;
$tdataMails_para_notificar[".closePopupAfterAdd"] = 1;
$tdataMails_para_notificar[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataMails_para_notificar[".list"] = true;
}

$tdataMails_para_notificar[".updateSelected"] = true;


$tdataMails_para_notificar[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataMails_para_notificar[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataMails_para_notificar[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataMails_para_notificar[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataMails_para_notificar[".printFriendly"] = true;
}



$tdataMails_para_notificar[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataMails_para_notificar[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataMails_para_notificar[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataMails_para_notificar[".isUseAjaxSuggest"] = true;

$tdataMails_para_notificar[".rowHighlite"] = true;





$tdataMails_para_notificar[".ajaxCodeSnippetAdded"] = false;

$tdataMails_para_notificar[".buttonsAdded"] = false;

$tdataMails_para_notificar[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMails_para_notificar[".isUseTimeForSearch"] = false;




$tdataMails_para_notificar[".allSearchFields"] = array();
$tdataMails_para_notificar[".filterFields"] = array();
$tdataMails_para_notificar[".requiredSearchFields"] = array();

$tdataMails_para_notificar[".googleLikeFields"] = array();
$tdataMails_para_notificar[".googleLikeFields"][] = "idI_ConvNacMailsNotif";
$tdataMails_para_notificar[".googleLikeFields"][] = "email_IConvNacMailsNotif";
$tdataMails_para_notificar[".googleLikeFields"][] = "Activo_IConvNacMailsNotif";
$tdataMails_para_notificar[".googleLikeFields"][] = "RegistroFecha_IConvNacMailsNotif";
$tdataMails_para_notificar[".googleLikeFields"][] = "RegistroHora_IConvNacMailsNotif";
$tdataMails_para_notificar[".googleLikeFields"][] = "RegistroUsr_IConvNacMailsNotif";
$tdataMails_para_notificar[".googleLikeFields"][] = "idSistema_iConvNacMailsNotif";



$tdataMails_para_notificar[".tableType"] = "list";

$tdataMails_para_notificar[".printerPageOrientation"] = 0;
$tdataMails_para_notificar[".nPrinterPageScale"] = 100;

$tdataMails_para_notificar[".nPrinterSplitRecords"] = 40;

$tdataMails_para_notificar[".geocodingEnabled"] = false;










$tdataMails_para_notificar[".pageSize"] = 20;

$tdataMails_para_notificar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataMails_para_notificar[".strOrderBy"] = $tstrOrderBy;

$tdataMails_para_notificar[".orderindexes"] = array();


$tdataMails_para_notificar[".sqlHead"] = "SELECT idI_ConvNacMailsNotif,  email_IConvNacMailsNotif,  Activo_IConvNacMailsNotif,  RegistroFecha_IConvNacMailsNotif,  RegistroHora_IConvNacMailsNotif,  RegistroUsr_IConvNacMailsNotif,  idSistema_iConvNacMailsNotif";
$tdataMails_para_notificar[".sqlFrom"] = "FROM I_ConvNacMailsNotif";
$tdataMails_para_notificar[".sqlWhereExpr"] = "(idSistema_iConvNacMailsNotif =9)";
$tdataMails_para_notificar[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataMails_para_notificar[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMails_para_notificar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMails_para_notificar[".arrGroupsPerPage"] = $arrGPP;

$tdataMails_para_notificar[".highlightSearchResults"] = true;

$tableKeysMails_para_notificar = array();
$tableKeysMails_para_notificar[] = "idI_ConvNacMailsNotif";
$tdataMails_para_notificar[".Keys"] = $tableKeysMails_para_notificar;


$tdataMails_para_notificar[".hideMobileList"] = array();




//	idI_ConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idI_ConvNacMailsNotif";
	$fdata["GoodName"] = "idI_ConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("Mails_para_notificar","idI_ConvNacMailsNotif");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idI_ConvNacMailsNotif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idI_ConvNacMailsNotif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataMails_para_notificar["idI_ConvNacMailsNotif"] = $fdata;
		$tdataMails_para_notificar[".searchableFields"][] = "idI_ConvNacMailsNotif";
//	email_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email_IConvNacMailsNotif";
	$fdata["GoodName"] = "email_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("Mails_para_notificar","email_IConvNacMailsNotif");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email_IConvNacMailsNotif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_IConvNacMailsNotif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataMails_para_notificar["email_IConvNacMailsNotif"] = $fdata;
		$tdataMails_para_notificar[".searchableFields"][] = "email_IConvNacMailsNotif";
//	Activo_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Activo_IConvNacMailsNotif";
	$fdata["GoodName"] = "Activo_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("Mails_para_notificar","Activo_IConvNacMailsNotif");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Activo_IConvNacMailsNotif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Activo_IConvNacMailsNotif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SI";
	$edata["LookupValues"][] = "NO";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataMails_para_notificar["Activo_IConvNacMailsNotif"] = $fdata;
		$tdataMails_para_notificar[".searchableFields"][] = "Activo_IConvNacMailsNotif";
//	RegistroFecha_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RegistroFecha_IConvNacMailsNotif";
	$fdata["GoodName"] = "RegistroFecha_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("Mails_para_notificar","RegistroFecha_IConvNacMailsNotif");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "RegistroFecha_IConvNacMailsNotif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegistroFecha_IConvNacMailsNotif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataMails_para_notificar["RegistroFecha_IConvNacMailsNotif"] = $fdata;
		$tdataMails_para_notificar[".searchableFields"][] = "RegistroFecha_IConvNacMailsNotif";
//	RegistroHora_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegistroHora_IConvNacMailsNotif";
	$fdata["GoodName"] = "RegistroHora_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("Mails_para_notificar","RegistroHora_IConvNacMailsNotif");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "RegistroHora_IConvNacMailsNotif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegistroHora_IConvNacMailsNotif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataMails_para_notificar["RegistroHora_IConvNacMailsNotif"] = $fdata;
		$tdataMails_para_notificar[".searchableFields"][] = "RegistroHora_IConvNacMailsNotif";
//	RegistroUsr_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RegistroUsr_IConvNacMailsNotif";
	$fdata["GoodName"] = "RegistroUsr_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("Mails_para_notificar","RegistroUsr_IConvNacMailsNotif");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RegistroUsr_IConvNacMailsNotif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegistroUsr_IConvNacMailsNotif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataMails_para_notificar["RegistroUsr_IConvNacMailsNotif"] = $fdata;
		$tdataMails_para_notificar[".searchableFields"][] = "RegistroUsr_IConvNacMailsNotif";
//	idSistema_iConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idSistema_iConvNacMailsNotif";
	$fdata["GoodName"] = "idSistema_iConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("Mails_para_notificar","idSistema_iConvNacMailsNotif");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idSistema_iConvNacMailsNotif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idSistema_iConvNacMailsNotif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataMails_para_notificar["idSistema_iConvNacMailsNotif"] = $fdata;
		$tdataMails_para_notificar[".searchableFields"][] = "idSistema_iConvNacMailsNotif";


$tables_data["Mails para notificar"]=&$tdataMails_para_notificar;
$field_labels["Mails_para_notificar"] = &$fieldLabelsMails_para_notificar;
$fieldToolTips["Mails_para_notificar"] = &$fieldToolTipsMails_para_notificar;
$placeHolders["Mails_para_notificar"] = &$placeHoldersMails_para_notificar;
$page_titles["Mails_para_notificar"] = &$pageTitlesMails_para_notificar;


changeTextControlsToDate( "Mails para notificar" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Mails para notificar"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Mails para notificar"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_Mails_para_notificar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idI_ConvNacMailsNotif,  email_IConvNacMailsNotif,  Activo_IConvNacMailsNotif,  RegistroFecha_IConvNacMailsNotif,  RegistroHora_IConvNacMailsNotif,  RegistroUsr_IConvNacMailsNotif,  idSistema_iConvNacMailsNotif";
$proto0["m_strFrom"] = "FROM I_ConvNacMailsNotif";
$proto0["m_strWhere"] = "(idSistema_iConvNacMailsNotif =9)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "idSistema_iConvNacMailsNotif =9";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idSistema_iConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "Mails para notificar"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=9";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "idI_ConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "Mails para notificar"
));

$proto6["m_sql"] = "idI_ConvNacMailsNotif";
$proto6["m_srcTableName"] = "Mails para notificar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "email_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "Mails para notificar"
));

$proto8["m_sql"] = "email_IConvNacMailsNotif";
$proto8["m_srcTableName"] = "Mails para notificar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "Mails para notificar"
));

$proto10["m_sql"] = "Activo_IConvNacMailsNotif";
$proto10["m_srcTableName"] = "Mails para notificar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroFecha_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "Mails para notificar"
));

$proto12["m_sql"] = "RegistroFecha_IConvNacMailsNotif";
$proto12["m_srcTableName"] = "Mails para notificar";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroHora_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "Mails para notificar"
));

$proto14["m_sql"] = "RegistroHora_IConvNacMailsNotif";
$proto14["m_srcTableName"] = "Mails para notificar";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroUsr_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "Mails para notificar"
));

$proto16["m_sql"] = "RegistroUsr_IConvNacMailsNotif";
$proto16["m_srcTableName"] = "Mails para notificar";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "idSistema_iConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "Mails para notificar"
));

$proto18["m_sql"] = "idSistema_iConvNacMailsNotif";
$proto18["m_srcTableName"] = "Mails para notificar";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "I_ConvNacMailsNotif";
$proto21["m_srcTableName"] = "Mails para notificar";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "idI_ConvNacMailsNotif";
$proto21["m_columns"][] = "email_IConvNacMailsNotif";
$proto21["m_columns"][] = "Activo_IConvNacMailsNotif";
$proto21["m_columns"][] = "RegistroFecha_IConvNacMailsNotif";
$proto21["m_columns"][] = "RegistroHora_IConvNacMailsNotif";
$proto21["m_columns"][] = "RegistroUsr_IConvNacMailsNotif";
$proto21["m_columns"][] = "idSistema_iConvNacMailsNotif";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "I_ConvNacMailsNotif";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Mails para notificar";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Mails para notificar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Mails_para_notificar = createSqlQuery_Mails_para_notificar();


	
		;

							

$tdataMails_para_notificar[".sqlquery"] = $queryData_Mails_para_notificar;



include_once(getabspath("include/Mails_para_notificar_events.php"));
$tdataMails_para_notificar[".hasEvents"] = true;

?>