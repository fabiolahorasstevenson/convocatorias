<?php
$tdataI_ConvNacMailsNotif = array();
$tdataI_ConvNacMailsNotif[".searchableFields"] = array();
$tdataI_ConvNacMailsNotif[".ShortName"] = "I_ConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".OwnerID"] = "";
$tdataI_ConvNacMailsNotif[".OriginalTable"] = "I_ConvNacMailsNotif";


$tdataI_ConvNacMailsNotif[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataI_ConvNacMailsNotif[".originalPagesByType"] = $tdataI_ConvNacMailsNotif[".pagesByType"];
$tdataI_ConvNacMailsNotif[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataI_ConvNacMailsNotif[".originalPages"] = $tdataI_ConvNacMailsNotif[".pages"];
$tdataI_ConvNacMailsNotif[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataI_ConvNacMailsNotif[".originalDefaultPages"] = $tdataI_ConvNacMailsNotif[".defaultPages"];

//	field labels
$fieldLabelsI_ConvNacMailsNotif = array();
$fieldToolTipsI_ConvNacMailsNotif = array();
$pageTitlesI_ConvNacMailsNotif = array();
$placeHoldersI_ConvNacMailsNotif = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsI_ConvNacMailsNotif["Spanish"] = array();
	$fieldToolTipsI_ConvNacMailsNotif["Spanish"] = array();
	$placeHoldersI_ConvNacMailsNotif["Spanish"] = array();
	$pageTitlesI_ConvNacMailsNotif["Spanish"] = array();
	$fieldLabelsI_ConvNacMailsNotif["Spanish"]["idI_ConvNacMailsNotif"] = "IdI ConvNacMailsNotif";
	$fieldToolTipsI_ConvNacMailsNotif["Spanish"]["idI_ConvNacMailsNotif"] = "";
	$placeHoldersI_ConvNacMailsNotif["Spanish"]["idI_ConvNacMailsNotif"] = "";
	$fieldLabelsI_ConvNacMailsNotif["Spanish"]["email_IConvNacMailsNotif"] = "Email IConvNacMailsNotif";
	$fieldToolTipsI_ConvNacMailsNotif["Spanish"]["email_IConvNacMailsNotif"] = "";
	$placeHoldersI_ConvNacMailsNotif["Spanish"]["email_IConvNacMailsNotif"] = "";
	$fieldLabelsI_ConvNacMailsNotif["Spanish"]["Activo_IConvNacMailsNotif"] = "Activo IConvNacMailsNotif";
	$fieldToolTipsI_ConvNacMailsNotif["Spanish"]["Activo_IConvNacMailsNotif"] = "";
	$placeHoldersI_ConvNacMailsNotif["Spanish"]["Activo_IConvNacMailsNotif"] = "";
	$fieldLabelsI_ConvNacMailsNotif["Spanish"]["RegistroFecha_IConvNacMailsNotif"] = "RegistroFecha IConvNacMailsNotif";
	$fieldToolTipsI_ConvNacMailsNotif["Spanish"]["RegistroFecha_IConvNacMailsNotif"] = "";
	$placeHoldersI_ConvNacMailsNotif["Spanish"]["RegistroFecha_IConvNacMailsNotif"] = "";
	$fieldLabelsI_ConvNacMailsNotif["Spanish"]["RegistroHora_IConvNacMailsNotif"] = "RegistroHora IConvNacMailsNotif";
	$fieldToolTipsI_ConvNacMailsNotif["Spanish"]["RegistroHora_IConvNacMailsNotif"] = "";
	$placeHoldersI_ConvNacMailsNotif["Spanish"]["RegistroHora_IConvNacMailsNotif"] = "";
	$fieldLabelsI_ConvNacMailsNotif["Spanish"]["RegistroUsr_IConvNacMailsNotif"] = "RegistroUsr IConvNacMailsNotif";
	$fieldToolTipsI_ConvNacMailsNotif["Spanish"]["RegistroUsr_IConvNacMailsNotif"] = "";
	$placeHoldersI_ConvNacMailsNotif["Spanish"]["RegistroUsr_IConvNacMailsNotif"] = "";
	$fieldLabelsI_ConvNacMailsNotif["Spanish"]["idSistema_iConvNacMailsNotif"] = "IdSistema IConvNacMailsNotif";
	$fieldToolTipsI_ConvNacMailsNotif["Spanish"]["idSistema_iConvNacMailsNotif"] = "";
	$placeHoldersI_ConvNacMailsNotif["Spanish"]["idSistema_iConvNacMailsNotif"] = "";
	if (count($fieldToolTipsI_ConvNacMailsNotif["Spanish"]))
		$tdataI_ConvNacMailsNotif[".isUseToolTips"] = true;
}


	$tdataI_ConvNacMailsNotif[".NCSearch"] = true;



$tdataI_ConvNacMailsNotif[".shortTableName"] = "I_ConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".nSecOptions"] = 0;

$tdataI_ConvNacMailsNotif[".mainTableOwnerID"] = "";
$tdataI_ConvNacMailsNotif[".entityType"] = 0;
$tdataI_ConvNacMailsNotif[".connId"] = "Mesa_Entrada_at_10_20_96_220";


$tdataI_ConvNacMailsNotif[".strOriginalTableName"] = "I_ConvNacMailsNotif";

	



$tdataI_ConvNacMailsNotif[".showAddInPopup"] = false;

$tdataI_ConvNacMailsNotif[".showEditInPopup"] = false;

$tdataI_ConvNacMailsNotif[".showViewInPopup"] = false;

$tdataI_ConvNacMailsNotif[".listAjax"] = false;
//	temporary
//$tdataI_ConvNacMailsNotif[".listAjax"] = false;

	$tdataI_ConvNacMailsNotif[".audit"] = false;

	$tdataI_ConvNacMailsNotif[".locking"] = false;


$pages = $tdataI_ConvNacMailsNotif[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataI_ConvNacMailsNotif[".edit"] = true;
	$tdataI_ConvNacMailsNotif[".afterEditAction"] = 1;
	$tdataI_ConvNacMailsNotif[".closePopupAfterEdit"] = 1;
	$tdataI_ConvNacMailsNotif[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataI_ConvNacMailsNotif[".add"] = true;
$tdataI_ConvNacMailsNotif[".afterAddAction"] = 1;
$tdataI_ConvNacMailsNotif[".closePopupAfterAdd"] = 1;
$tdataI_ConvNacMailsNotif[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataI_ConvNacMailsNotif[".list"] = true;
}

$tdataI_ConvNacMailsNotif[".updateSelected"] = true;


$tdataI_ConvNacMailsNotif[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataI_ConvNacMailsNotif[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataI_ConvNacMailsNotif[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataI_ConvNacMailsNotif[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataI_ConvNacMailsNotif[".printFriendly"] = true;
}



$tdataI_ConvNacMailsNotif[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataI_ConvNacMailsNotif[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataI_ConvNacMailsNotif[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataI_ConvNacMailsNotif[".isUseAjaxSuggest"] = true;

$tdataI_ConvNacMailsNotif[".rowHighlite"] = true;





$tdataI_ConvNacMailsNotif[".ajaxCodeSnippetAdded"] = false;

$tdataI_ConvNacMailsNotif[".buttonsAdded"] = false;

$tdataI_ConvNacMailsNotif[".addPageEvents"] = false;

// use timepicker for search panel
$tdataI_ConvNacMailsNotif[".isUseTimeForSearch"] = false;


$tdataI_ConvNacMailsNotif[".badgeColor"] = "4169E1";


$tdataI_ConvNacMailsNotif[".allSearchFields"] = array();
$tdataI_ConvNacMailsNotif[".filterFields"] = array();
$tdataI_ConvNacMailsNotif[".requiredSearchFields"] = array();

$tdataI_ConvNacMailsNotif[".googleLikeFields"] = array();
$tdataI_ConvNacMailsNotif[".googleLikeFields"][] = "idI_ConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".googleLikeFields"][] = "email_IConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".googleLikeFields"][] = "Activo_IConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".googleLikeFields"][] = "RegistroFecha_IConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".googleLikeFields"][] = "RegistroHora_IConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".googleLikeFields"][] = "RegistroUsr_IConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".googleLikeFields"][] = "idSistema_iConvNacMailsNotif";



$tdataI_ConvNacMailsNotif[".tableType"] = "list";

$tdataI_ConvNacMailsNotif[".printerPageOrientation"] = 0;
$tdataI_ConvNacMailsNotif[".nPrinterPageScale"] = 100;

$tdataI_ConvNacMailsNotif[".nPrinterSplitRecords"] = 40;

$tdataI_ConvNacMailsNotif[".geocodingEnabled"] = false;










$tdataI_ConvNacMailsNotif[".pageSize"] = 20;

$tdataI_ConvNacMailsNotif[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataI_ConvNacMailsNotif[".strOrderBy"] = $tstrOrderBy;

$tdataI_ConvNacMailsNotif[".orderindexes"] = array();


$tdataI_ConvNacMailsNotif[".sqlHead"] = "SELECT idI_ConvNacMailsNotif,  	email_IConvNacMailsNotif,  	Activo_IConvNacMailsNotif,  	RegistroFecha_IConvNacMailsNotif,  	RegistroHora_IConvNacMailsNotif,  	RegistroUsr_IConvNacMailsNotif,  	idSistema_iConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".sqlFrom"] = "FROM I_ConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".sqlWhereExpr"] = "";
$tdataI_ConvNacMailsNotif[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataI_ConvNacMailsNotif[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataI_ConvNacMailsNotif[".arrGroupsPerPage"] = $arrGPP;

$tdataI_ConvNacMailsNotif[".highlightSearchResults"] = true;

$tableKeysI_ConvNacMailsNotif = array();
$tableKeysI_ConvNacMailsNotif[] = "idI_ConvNacMailsNotif";
$tdataI_ConvNacMailsNotif[".Keys"] = $tableKeysI_ConvNacMailsNotif;


$tdataI_ConvNacMailsNotif[".hideMobileList"] = array();




//	idI_ConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idI_ConvNacMailsNotif";
	$fdata["GoodName"] = "idI_ConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("I_ConvNacMailsNotif","idI_ConvNacMailsNotif");
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


	$tdataI_ConvNacMailsNotif["idI_ConvNacMailsNotif"] = $fdata;
		$tdataI_ConvNacMailsNotif[".searchableFields"][] = "idI_ConvNacMailsNotif";
//	email_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email_IConvNacMailsNotif";
	$fdata["GoodName"] = "email_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("I_ConvNacMailsNotif","email_IConvNacMailsNotif");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


	$tdataI_ConvNacMailsNotif["email_IConvNacMailsNotif"] = $fdata;
		$tdataI_ConvNacMailsNotif[".searchableFields"][] = "email_IConvNacMailsNotif";
//	Activo_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Activo_IConvNacMailsNotif";
	$fdata["GoodName"] = "Activo_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("I_ConvNacMailsNotif","Activo_IConvNacMailsNotif");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

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


	$tdataI_ConvNacMailsNotif["Activo_IConvNacMailsNotif"] = $fdata;
		$tdataI_ConvNacMailsNotif[".searchableFields"][] = "Activo_IConvNacMailsNotif";
//	RegistroFecha_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RegistroFecha_IConvNacMailsNotif";
	$fdata["GoodName"] = "RegistroFecha_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("I_ConvNacMailsNotif","RegistroFecha_IConvNacMailsNotif");
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


	$tdataI_ConvNacMailsNotif["RegistroFecha_IConvNacMailsNotif"] = $fdata;
		$tdataI_ConvNacMailsNotif[".searchableFields"][] = "RegistroFecha_IConvNacMailsNotif";
//	RegistroHora_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "RegistroHora_IConvNacMailsNotif";
	$fdata["GoodName"] = "RegistroHora_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("I_ConvNacMailsNotif","RegistroHora_IConvNacMailsNotif");
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


	$tdataI_ConvNacMailsNotif["RegistroHora_IConvNacMailsNotif"] = $fdata;
		$tdataI_ConvNacMailsNotif[".searchableFields"][] = "RegistroHora_IConvNacMailsNotif";
//	RegistroUsr_IConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RegistroUsr_IConvNacMailsNotif";
	$fdata["GoodName"] = "RegistroUsr_IConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("I_ConvNacMailsNotif","RegistroUsr_IConvNacMailsNotif");
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


	$tdataI_ConvNacMailsNotif["RegistroUsr_IConvNacMailsNotif"] = $fdata;
		$tdataI_ConvNacMailsNotif[".searchableFields"][] = "RegistroUsr_IConvNacMailsNotif";
//	idSistema_iConvNacMailsNotif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idSistema_iConvNacMailsNotif";
	$fdata["GoodName"] = "idSistema_iConvNacMailsNotif";
	$fdata["ownerTable"] = "I_ConvNacMailsNotif";
	$fdata["Label"] = GetFieldLabel("I_ConvNacMailsNotif","idSistema_iConvNacMailsNotif");
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


	$tdataI_ConvNacMailsNotif["idSistema_iConvNacMailsNotif"] = $fdata;
		$tdataI_ConvNacMailsNotif[".searchableFields"][] = "idSistema_iConvNacMailsNotif";


$tables_data["I_ConvNacMailsNotif"]=&$tdataI_ConvNacMailsNotif;
$field_labels["I_ConvNacMailsNotif"] = &$fieldLabelsI_ConvNacMailsNotif;
$fieldToolTips["I_ConvNacMailsNotif"] = &$fieldToolTipsI_ConvNacMailsNotif;
$placeHolders["I_ConvNacMailsNotif"] = &$placeHoldersI_ConvNacMailsNotif;
$page_titles["I_ConvNacMailsNotif"] = &$pageTitlesI_ConvNacMailsNotif;


changeTextControlsToDate( "I_ConvNacMailsNotif" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["I_ConvNacMailsNotif"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["I_ConvNacMailsNotif"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_I_ConvNacMailsNotif()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idI_ConvNacMailsNotif,  	email_IConvNacMailsNotif,  	Activo_IConvNacMailsNotif,  	RegistroFecha_IConvNacMailsNotif,  	RegistroHora_IConvNacMailsNotif,  	RegistroUsr_IConvNacMailsNotif,  	idSistema_iConvNacMailsNotif";
$proto0["m_strFrom"] = "FROM I_ConvNacMailsNotif";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_srcTableName" => "I_ConvNacMailsNotif"
));

$proto6["m_sql"] = "idI_ConvNacMailsNotif";
$proto6["m_srcTableName"] = "I_ConvNacMailsNotif";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "email_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "I_ConvNacMailsNotif"
));

$proto8["m_sql"] = "email_IConvNacMailsNotif";
$proto8["m_srcTableName"] = "I_ConvNacMailsNotif";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "I_ConvNacMailsNotif"
));

$proto10["m_sql"] = "Activo_IConvNacMailsNotif";
$proto10["m_srcTableName"] = "I_ConvNacMailsNotif";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroFecha_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "I_ConvNacMailsNotif"
));

$proto12["m_sql"] = "RegistroFecha_IConvNacMailsNotif";
$proto12["m_srcTableName"] = "I_ConvNacMailsNotif";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroHora_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "I_ConvNacMailsNotif"
));

$proto14["m_sql"] = "RegistroHora_IConvNacMailsNotif";
$proto14["m_srcTableName"] = "I_ConvNacMailsNotif";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroUsr_IConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "I_ConvNacMailsNotif"
));

$proto16["m_sql"] = "RegistroUsr_IConvNacMailsNotif";
$proto16["m_srcTableName"] = "I_ConvNacMailsNotif";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "idSistema_iConvNacMailsNotif",
	"m_strTable" => "I_ConvNacMailsNotif",
	"m_srcTableName" => "I_ConvNacMailsNotif"
));

$proto18["m_sql"] = "idSistema_iConvNacMailsNotif";
$proto18["m_srcTableName"] = "I_ConvNacMailsNotif";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "I_ConvNacMailsNotif";
$proto21["m_srcTableName"] = "I_ConvNacMailsNotif";
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
$proto20["m_srcTableName"] = "I_ConvNacMailsNotif";
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
$proto0["m_srcTableName"]="I_ConvNacMailsNotif";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_I_ConvNacMailsNotif = createSqlQuery_I_ConvNacMailsNotif();


	
		;

							

$tdataI_ConvNacMailsNotif[".sqlquery"] = $queryData_I_ConvNacMailsNotif;



$tdataI_ConvNacMailsNotif[".hasEvents"] = false;

?>