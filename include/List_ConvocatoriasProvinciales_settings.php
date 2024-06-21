<?php
$tdataList_ConvocatoriasProvinciales = array();
$tdataList_ConvocatoriasProvinciales[".searchableFields"] = array();
$tdataList_ConvocatoriasProvinciales[".ShortName"] = "List_ConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".OwnerID"] = "";
$tdataList_ConvocatoriasProvinciales[".OriginalTable"] = "I_ConvocatoriasProvinciales";


$tdataList_ConvocatoriasProvinciales[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataList_ConvocatoriasProvinciales[".originalPagesByType"] = $tdataList_ConvocatoriasProvinciales[".pagesByType"];
$tdataList_ConvocatoriasProvinciales[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataList_ConvocatoriasProvinciales[".originalPages"] = $tdataList_ConvocatoriasProvinciales[".pages"];
$tdataList_ConvocatoriasProvinciales[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataList_ConvocatoriasProvinciales[".originalDefaultPages"] = $tdataList_ConvocatoriasProvinciales[".defaultPages"];

//	field labels
$fieldLabelsList_ConvocatoriasProvinciales = array();
$fieldToolTipsList_ConvocatoriasProvinciales = array();
$pageTitlesList_ConvocatoriasProvinciales = array();
$placeHoldersList_ConvocatoriasProvinciales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"] = array();
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"] = array();
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"] = array();
	$pageTitlesList_ConvocatoriasProvinciales["Spanish"] = array();
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["id_iConvocatoriasProvinciales"] = "#";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["id_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["id_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["PersonaDNI_iConvocatoriasProvinciales"] = "DNI";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["PersonaDNI_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["PersonaDNI_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["PersonaApellidoNombre_iConvocatoriasProvinciales"] = "Apellido y Nombre";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["PersonaApellidoNombre_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["PersonaApellidoNombre_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["PersonaFechaNacimiento_iConvocatoriasProvinciales"] = "Fecha de Nacimiento";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["PersonaFechaNacimiento_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["PersonaFechaNacimiento_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["PersonaCiudadReside_iConvocatoriasProvinciales"] = "Localidad Reside";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["PersonaCiudadReside_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["PersonaCiudadReside_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["Personaemail_iConvocatoriasProvinciales"] = "E-mail";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["Personaemail_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["Personaemail_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["PersonaTelefonoContacto_iConvocatoriasProvinciales"] = "Teléfono de Contacto";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["PersonaTelefonoContacto_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["PersonaTelefonoContacto_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["PuestoTrabajoPostula_iConvocatoriasProvinciales"] = "Puesto de trabajo para el que se postula";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["PuestoTrabajoPostula_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["PuestoTrabajoPostula_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["ConvocatoriaDifusion_iConvocatoriasProvinciales"] = "¿Cómo conoció esta convocatoria?";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["ConvocatoriaDifusion_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["ConvocatoriaDifusion_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["PersonaCV_iConvocatoriasProvinciales"] = "CV";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["PersonaCV_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["PersonaCV_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["RegistroFechaHora_iConvocatoriasProvinciales"] = "Registro";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["RegistroFechaHora_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["RegistroFechaHora_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["Titulo_iConvocatoriasProvinciales"] = "Titulo";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["Titulo_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["Titulo_iConvocatoriasProvinciales"] = "";
	$fieldLabelsList_ConvocatoriasProvinciales["Spanish"]["AniosResidencia_iConvocatoriasProvinciales"] = "Años de Residencia";
	$fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]["AniosResidencia_iConvocatoriasProvinciales"] = "";
	$placeHoldersList_ConvocatoriasProvinciales["Spanish"]["AniosResidencia_iConvocatoriasProvinciales"] = "";
	if (count($fieldToolTipsList_ConvocatoriasProvinciales["Spanish"]))
		$tdataList_ConvocatoriasProvinciales[".isUseToolTips"] = true;
}


	$tdataList_ConvocatoriasProvinciales[".NCSearch"] = true;



$tdataList_ConvocatoriasProvinciales[".shortTableName"] = "List_ConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".nSecOptions"] = 0;

$tdataList_ConvocatoriasProvinciales[".mainTableOwnerID"] = "";
$tdataList_ConvocatoriasProvinciales[".entityType"] = 1;
$tdataList_ConvocatoriasProvinciales[".connId"] = "Mesa_Entrada_at_10_20_96_220";


$tdataList_ConvocatoriasProvinciales[".strOriginalTableName"] = "I_ConvocatoriasProvinciales";

	



$tdataList_ConvocatoriasProvinciales[".showAddInPopup"] = false;

$tdataList_ConvocatoriasProvinciales[".showEditInPopup"] = false;

$tdataList_ConvocatoriasProvinciales[".showViewInPopup"] = false;

$tdataList_ConvocatoriasProvinciales[".listAjax"] = false;
//	temporary
//$tdataList_ConvocatoriasProvinciales[".listAjax"] = false;

	$tdataList_ConvocatoriasProvinciales[".audit"] = false;

	$tdataList_ConvocatoriasProvinciales[".locking"] = false;


$pages = $tdataList_ConvocatoriasProvinciales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataList_ConvocatoriasProvinciales[".edit"] = true;
	$tdataList_ConvocatoriasProvinciales[".afterEditAction"] = 1;
	$tdataList_ConvocatoriasProvinciales[".closePopupAfterEdit"] = 1;
	$tdataList_ConvocatoriasProvinciales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataList_ConvocatoriasProvinciales[".add"] = true;
$tdataList_ConvocatoriasProvinciales[".afterAddAction"] = 1;
$tdataList_ConvocatoriasProvinciales[".closePopupAfterAdd"] = 1;
$tdataList_ConvocatoriasProvinciales[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataList_ConvocatoriasProvinciales[".list"] = true;
}

$tdataList_ConvocatoriasProvinciales[".updateSelected"] = true;


$tdataList_ConvocatoriasProvinciales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataList_ConvocatoriasProvinciales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataList_ConvocatoriasProvinciales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataList_ConvocatoriasProvinciales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataList_ConvocatoriasProvinciales[".printFriendly"] = true;
}



$tdataList_ConvocatoriasProvinciales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataList_ConvocatoriasProvinciales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataList_ConvocatoriasProvinciales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataList_ConvocatoriasProvinciales[".isUseAjaxSuggest"] = true;

$tdataList_ConvocatoriasProvinciales[".rowHighlite"] = true;





$tdataList_ConvocatoriasProvinciales[".ajaxCodeSnippetAdded"] = false;

$tdataList_ConvocatoriasProvinciales[".buttonsAdded"] = false;

$tdataList_ConvocatoriasProvinciales[".addPageEvents"] = false;

// use timepicker for search panel
$tdataList_ConvocatoriasProvinciales[".isUseTimeForSearch"] = false;


$tdataList_ConvocatoriasProvinciales[".badgeColor"] = "DAA520";


$tdataList_ConvocatoriasProvinciales[".allSearchFields"] = array();
$tdataList_ConvocatoriasProvinciales[".filterFields"] = array();
$tdataList_ConvocatoriasProvinciales[".requiredSearchFields"] = array();

$tdataList_ConvocatoriasProvinciales[".googleLikeFields"] = array();
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "id_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "PersonaDNI_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "PersonaApellidoNombre_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "PersonaFechaNacimiento_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "PersonaCiudadReside_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "Personaemail_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "PersonaTelefonoContacto_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "PuestoTrabajoPostula_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "ConvocatoriaDifusion_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "PersonaCV_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "RegistroFechaHora_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "Titulo_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".googleLikeFields"][] = "AniosResidencia_iConvocatoriasProvinciales";



$tdataList_ConvocatoriasProvinciales[".tableType"] = "list";

$tdataList_ConvocatoriasProvinciales[".printerPageOrientation"] = 0;
$tdataList_ConvocatoriasProvinciales[".nPrinterPageScale"] = 100;

$tdataList_ConvocatoriasProvinciales[".nPrinterSplitRecords"] = 40;

$tdataList_ConvocatoriasProvinciales[".geocodingEnabled"] = false;










$tdataList_ConvocatoriasProvinciales[".pageSize"] = 20;

$tdataList_ConvocatoriasProvinciales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataList_ConvocatoriasProvinciales[".strOrderBy"] = $tstrOrderBy;

$tdataList_ConvocatoriasProvinciales[".orderindexes"] = array();


$tdataList_ConvocatoriasProvinciales[".sqlHead"] = "SELECT id_iConvocatoriasProvinciales,  	PersonaDNI_iConvocatoriasProvinciales,  	PersonaApellidoNombre_iConvocatoriasProvinciales,  	PersonaFechaNacimiento_iConvocatoriasProvinciales,  	PersonaCiudadReside_iConvocatoriasProvinciales,  	Personaemail_iConvocatoriasProvinciales,  	PersonaTelefonoContacto_iConvocatoriasProvinciales,  	PuestoTrabajoPostula_iConvocatoriasProvinciales,  	ConvocatoriaDifusion_iConvocatoriasProvinciales,  	PersonaCV_iConvocatoriasProvinciales,  	RegistroFechaHora_iConvocatoriasProvinciales,  	Titulo_iConvocatoriasProvinciales,  	AniosResidencia_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".sqlFrom"] = "FROM I_ConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".sqlWhereExpr"] = "";
$tdataList_ConvocatoriasProvinciales[".sqlTail"] = "";

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
$tdataList_ConvocatoriasProvinciales[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataList_ConvocatoriasProvinciales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataList_ConvocatoriasProvinciales[".arrGroupsPerPage"] = $arrGPP;

$tdataList_ConvocatoriasProvinciales[".highlightSearchResults"] = true;

$tableKeysList_ConvocatoriasProvinciales = array();
$tableKeysList_ConvocatoriasProvinciales[] = "id_iConvocatoriasProvinciales";
$tdataList_ConvocatoriasProvinciales[".Keys"] = $tableKeysList_ConvocatoriasProvinciales;


$tdataList_ConvocatoriasProvinciales[".hideMobileList"] = array();




//	id_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "id_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","id_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_iConvocatoriasProvinciales";

	
	
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


	$tdataList_ConvocatoriasProvinciales["id_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "id_iConvocatoriasProvinciales";
//	PersonaDNI_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PersonaDNI_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "PersonaDNI_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","PersonaDNI_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaDNI_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaDNI_iConvocatoriasProvinciales";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=8";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataList_ConvocatoriasProvinciales["PersonaDNI_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "PersonaDNI_iConvocatoriasProvinciales";
//	PersonaApellidoNombre_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PersonaApellidoNombre_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "PersonaApellidoNombre_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","PersonaApellidoNombre_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaApellidoNombre_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaApellidoNombre_iConvocatoriasProvinciales";

	
	
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
			$edata["EditParams"].= " maxlength=450";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataList_ConvocatoriasProvinciales["PersonaApellidoNombre_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "PersonaApellidoNombre_iConvocatoriasProvinciales";
//	PersonaFechaNacimiento_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PersonaFechaNacimiento_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "PersonaFechaNacimiento_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","PersonaFechaNacimiento_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "PersonaFechaNacimiento_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaFechaNacimiento_iConvocatoriasProvinciales";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataList_ConvocatoriasProvinciales["PersonaFechaNacimiento_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "PersonaFechaNacimiento_iConvocatoriasProvinciales";
//	PersonaCiudadReside_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PersonaCiudadReside_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "PersonaCiudadReside_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","PersonaCiudadReside_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaCiudadReside_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaCiudadReside_iConvocatoriasProvinciales";

	
	
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
	$edata["LookupValues"][] = "Ushuaia";
	$edata["LookupValues"][] = "Río Grande";
	$edata["LookupValues"][] = "Tolhuin";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataList_ConvocatoriasProvinciales["PersonaCiudadReside_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "PersonaCiudadReside_iConvocatoriasProvinciales";
//	Personaemail_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Personaemail_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "Personaemail_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","Personaemail_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Personaemail_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Personaemail_iConvocatoriasProvinciales";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdataList_ConvocatoriasProvinciales["Personaemail_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "Personaemail_iConvocatoriasProvinciales";
//	PersonaTelefonoContacto_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PersonaTelefonoContacto_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "PersonaTelefonoContacto_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","PersonaTelefonoContacto_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaTelefonoContacto_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaTelefonoContacto_iConvocatoriasProvinciales";

	
	
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
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataList_ConvocatoriasProvinciales["PersonaTelefonoContacto_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "PersonaTelefonoContacto_iConvocatoriasProvinciales";
//	PuestoTrabajoPostula_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PuestoTrabajoPostula_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "PuestoTrabajoPostula_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","PuestoTrabajoPostula_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PuestoTrabajoPostula_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PuestoTrabajoPostula_iConvocatoriasProvinciales";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataList_ConvocatoriasProvinciales["PuestoTrabajoPostula_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "PuestoTrabajoPostula_iConvocatoriasProvinciales";
//	ConvocatoriaDifusion_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ConvocatoriaDifusion_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "ConvocatoriaDifusion_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","ConvocatoriaDifusion_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConvocatoriaDifusion_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConvocatoriaDifusion_iConvocatoriasProvinciales";

	
	
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
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataList_ConvocatoriasProvinciales["ConvocatoriaDifusion_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "ConvocatoriaDifusion_iConvocatoriasProvinciales";
//	PersonaCV_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PersonaCV_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "PersonaCV_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","PersonaCV_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaCV_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaCV_iConvocatoriasProvinciales";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
							$edata["acceptFileTypes"] = "doc";
			$edata["acceptFileTypesHtml"] = ".doc";
						$edata["acceptFileTypes"] .= "|docx";
			$edata["acceptFileTypesHtml"] .= ",.docx";
						$edata["acceptFileTypes"] .= "|pdf";
			$edata["acceptFileTypesHtml"] .= ",.pdf";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataList_ConvocatoriasProvinciales["PersonaCV_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "PersonaCV_iConvocatoriasProvinciales";
//	RegistroFechaHora_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RegistroFechaHora_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "RegistroFechaHora_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","RegistroFechaHora_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "RegistroFechaHora_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegistroFechaHora_iConvocatoriasProvinciales";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataList_ConvocatoriasProvinciales["RegistroFechaHora_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "RegistroFechaHora_iConvocatoriasProvinciales";
//	Titulo_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Titulo_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "Titulo_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","Titulo_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Titulo_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Titulo_iConvocatoriasProvinciales";

	
	
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
	$edata["LookupValues"][] = "Técnico en Enfermería";
	$edata["LookupValues"][] = "Enfermero Profesional";
	$edata["LookupValues"][] = "Enfermero Universitario";
	$edata["LookupValues"][] = "Licenciado en Enfermería";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataList_ConvocatoriasProvinciales["Titulo_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "Titulo_iConvocatoriasProvinciales";
//	AniosResidencia_iConvocatoriasProvinciales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AniosResidencia_iConvocatoriasProvinciales";
	$fdata["GoodName"] = "AniosResidencia_iConvocatoriasProvinciales";
	$fdata["ownerTable"] = "I_ConvocatoriasProvinciales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasProvinciales","AniosResidencia_iConvocatoriasProvinciales");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AniosResidencia_iConvocatoriasProvinciales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AniosResidencia_iConvocatoriasProvinciales";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

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


	$tdataList_ConvocatoriasProvinciales["AniosResidencia_iConvocatoriasProvinciales"] = $fdata;
		$tdataList_ConvocatoriasProvinciales[".searchableFields"][] = "AniosResidencia_iConvocatoriasProvinciales";


$tables_data["List_ConvocatoriasProvinciales"]=&$tdataList_ConvocatoriasProvinciales;
$field_labels["List_ConvocatoriasProvinciales"] = &$fieldLabelsList_ConvocatoriasProvinciales;
$fieldToolTips["List_ConvocatoriasProvinciales"] = &$fieldToolTipsList_ConvocatoriasProvinciales;
$placeHolders["List_ConvocatoriasProvinciales"] = &$placeHoldersList_ConvocatoriasProvinciales;
$page_titles["List_ConvocatoriasProvinciales"] = &$pageTitlesList_ConvocatoriasProvinciales;


changeTextControlsToDate( "List_ConvocatoriasProvinciales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["List_ConvocatoriasProvinciales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["List_ConvocatoriasProvinciales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_List_ConvocatoriasProvinciales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_iConvocatoriasProvinciales,  	PersonaDNI_iConvocatoriasProvinciales,  	PersonaApellidoNombre_iConvocatoriasProvinciales,  	PersonaFechaNacimiento_iConvocatoriasProvinciales,  	PersonaCiudadReside_iConvocatoriasProvinciales,  	Personaemail_iConvocatoriasProvinciales,  	PersonaTelefonoContacto_iConvocatoriasProvinciales,  	PuestoTrabajoPostula_iConvocatoriasProvinciales,  	ConvocatoriaDifusion_iConvocatoriasProvinciales,  	PersonaCV_iConvocatoriasProvinciales,  	RegistroFechaHora_iConvocatoriasProvinciales,  	Titulo_iConvocatoriasProvinciales,  	AniosResidencia_iConvocatoriasProvinciales";
$proto0["m_strFrom"] = "FROM I_ConvocatoriasProvinciales";
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
	"m_strName" => "id_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto6["m_sql"] = "id_iConvocatoriasProvinciales";
$proto6["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaDNI_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto8["m_sql"] = "PersonaDNI_iConvocatoriasProvinciales";
$proto8["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaApellidoNombre_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto10["m_sql"] = "PersonaApellidoNombre_iConvocatoriasProvinciales";
$proto10["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaFechaNacimiento_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto12["m_sql"] = "PersonaFechaNacimiento_iConvocatoriasProvinciales";
$proto12["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaCiudadReside_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto14["m_sql"] = "PersonaCiudadReside_iConvocatoriasProvinciales";
$proto14["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Personaemail_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto16["m_sql"] = "Personaemail_iConvocatoriasProvinciales";
$proto16["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaTelefonoContacto_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto18["m_sql"] = "PersonaTelefonoContacto_iConvocatoriasProvinciales";
$proto18["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PuestoTrabajoPostula_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto20["m_sql"] = "PuestoTrabajoPostula_iConvocatoriasProvinciales";
$proto20["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ConvocatoriaDifusion_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto22["m_sql"] = "ConvocatoriaDifusion_iConvocatoriasProvinciales";
$proto22["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaCV_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto24["m_sql"] = "PersonaCV_iConvocatoriasProvinciales";
$proto24["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroFechaHora_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto26["m_sql"] = "RegistroFechaHora_iConvocatoriasProvinciales";
$proto26["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Titulo_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto28["m_sql"] = "Titulo_iConvocatoriasProvinciales";
$proto28["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AniosResidencia_iConvocatoriasProvinciales",
	"m_strTable" => "I_ConvocatoriasProvinciales",
	"m_srcTableName" => "List_ConvocatoriasProvinciales"
));

$proto30["m_sql"] = "AniosResidencia_iConvocatoriasProvinciales";
$proto30["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "I_ConvocatoriasProvinciales";
$proto33["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "PersonaDNI_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "PersonaApellidoNombre_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "PersonaFechaNacimiento_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "PersonaCiudadReside_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "Personaemail_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "PersonaTelefonoContacto_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "PuestoTrabajoPostula_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "ConvocatoriaDifusion_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "PersonaCV_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "RegistroFechaHora_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "Titulo_iConvocatoriasProvinciales";
$proto33["m_columns"][] = "AniosResidencia_iConvocatoriasProvinciales";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "I_ConvocatoriasProvinciales";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "List_ConvocatoriasProvinciales";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="List_ConvocatoriasProvinciales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_List_ConvocatoriasProvinciales = createSqlQuery_List_ConvocatoriasProvinciales();


	
		;

													

$tdataList_ConvocatoriasProvinciales[".sqlquery"] = $queryData_List_ConvocatoriasProvinciales;



include_once(getabspath("include/List_ConvocatoriasProvinciales_events.php"));
$tdataList_ConvocatoriasProvinciales[".hasEvents"] = true;

?>