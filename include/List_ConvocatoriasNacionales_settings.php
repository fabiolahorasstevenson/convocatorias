<?php
$tdataList_ConvocatoriasNacionales = array();
$tdataList_ConvocatoriasNacionales[".searchableFields"] = array();
$tdataList_ConvocatoriasNacionales[".ShortName"] = "List_ConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".OwnerID"] = "";
$tdataList_ConvocatoriasNacionales[".OriginalTable"] = "I_ConvocatoriasNacionales";


$tdataList_ConvocatoriasNacionales[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataList_ConvocatoriasNacionales[".originalPagesByType"] = $tdataList_ConvocatoriasNacionales[".pagesByType"];
$tdataList_ConvocatoriasNacionales[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataList_ConvocatoriasNacionales[".originalPages"] = $tdataList_ConvocatoriasNacionales[".pages"];
$tdataList_ConvocatoriasNacionales[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataList_ConvocatoriasNacionales[".originalDefaultPages"] = $tdataList_ConvocatoriasNacionales[".defaultPages"];

//	field labels
$fieldLabelsList_ConvocatoriasNacionales = array();
$fieldToolTipsList_ConvocatoriasNacionales = array();
$pageTitlesList_ConvocatoriasNacionales = array();
$placeHoldersList_ConvocatoriasNacionales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"] = array();
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"] = array();
	$placeHoldersList_ConvocatoriasNacionales["Spanish"] = array();
	$pageTitlesList_ConvocatoriasNacionales["Spanish"] = array();
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["id_iConvocatoriasNacionales"] = "#Reg";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["id_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["id_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["PersonaDNI_iConvocatoriasNacionales"] = "DNI";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["PersonaDNI_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["PersonaDNI_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["PersonaApellidoNombre_iConvocatoriasNacionales"] = "Apellido y Nombre";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["PersonaApellidoNombre_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["PersonaApellidoNombre_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["PersonaFechaNacimiento_iConvocatoriasNacionales"] = "Fecha de Nacimiento ";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["PersonaFechaNacimiento_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["PersonaFechaNacimiento_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["PersonaProvinciaReside_iConvocatoriasNacionales"] = "Provincia Reside";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["PersonaProvinciaReside_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["PersonaProvinciaReside_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["Personaemail_iConvocatoriasNacionales"] = "E-mail";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["Personaemail_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["Personaemail_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["PersonaTelefonoContacto_iConvocatoriasNacionales"] = "Teléfono de Contacto";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["PersonaTelefonoContacto_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["PersonaTelefonoContacto_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["PuestoTrabajoPostula_iConvocatoriasNacionales"] = "Puesto";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["PuestoTrabajoPostula_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["PuestoTrabajoPostula_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["ResidenciaCompleta_iConvocatoriasNacionales"] = "Residencia Completa";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["ResidenciaCompleta_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["ResidenciaCompleta_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["ResidenciaEspecialidad_iConvocatoriasNacionales"] = "Especialidad e Institución donde realizó la residencia";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["ResidenciaEspecialidad_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["ResidenciaEspecialidad_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["PersonaTituloEspecialista_iConvocatoriasNacionales"] = "Título de Especialista";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["PersonaTituloEspecialista_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["PersonaTituloEspecialista_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = "Especialidad Certificada e Institución Certificante";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["ConvocatoriaDifusion_iConvocatoriasNacionales"] = "Cómo conoció esta convocatoria?";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["ConvocatoriaDifusion_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["ConvocatoriaDifusion_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["PersonaCV_iConvocatoriasNacionales"] = "CV ";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["PersonaCV_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["PersonaCV_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["RegistroFechaHora_iConvocatoriasNacionales"] = "Registro";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["RegistroFechaHora_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["RegistroFechaHora_iConvocatoriasNacionales"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["bPDF"] = "";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["bPDF"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["bPDF"] = "";
	$fieldLabelsList_ConvocatoriasNacionales["Spanish"]["TituloGrado_iConvocatoriasNacionales"] = "Título de Grado";
	$fieldToolTipsList_ConvocatoriasNacionales["Spanish"]["TituloGrado_iConvocatoriasNacionales"] = "";
	$placeHoldersList_ConvocatoriasNacionales["Spanish"]["TituloGrado_iConvocatoriasNacionales"] = "";
	$pageTitlesList_ConvocatoriasNacionales["Spanish"]["view"] = "Ver datos del postulante [{%id_iConvocatoriasNacionales}]";
	$pageTitlesList_ConvocatoriasNacionales["Spanish"]["print"] = "Listado de postulantes";
	if (count($fieldToolTipsList_ConvocatoriasNacionales["Spanish"]))
		$tdataList_ConvocatoriasNacionales[".isUseToolTips"] = true;
}


	$tdataList_ConvocatoriasNacionales[".NCSearch"] = true;



$tdataList_ConvocatoriasNacionales[".shortTableName"] = "List_ConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".nSecOptions"] = 0;

$tdataList_ConvocatoriasNacionales[".mainTableOwnerID"] = "";
$tdataList_ConvocatoriasNacionales[".entityType"] = 1;
$tdataList_ConvocatoriasNacionales[".connId"] = "Mesa_Entrada_at_10_20_96_220";


$tdataList_ConvocatoriasNacionales[".strOriginalTableName"] = "I_ConvocatoriasNacionales";

	



$tdataList_ConvocatoriasNacionales[".showAddInPopup"] = false;

$tdataList_ConvocatoriasNacionales[".showEditInPopup"] = false;

$tdataList_ConvocatoriasNacionales[".showViewInPopup"] = false;

	$tdataList_ConvocatoriasNacionales[".listAjax"] = true;
//	temporary
//$tdataList_ConvocatoriasNacionales[".listAjax"] = false;

	$tdataList_ConvocatoriasNacionales[".audit"] = false;

	$tdataList_ConvocatoriasNacionales[".locking"] = false;


$pages = $tdataList_ConvocatoriasNacionales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataList_ConvocatoriasNacionales[".edit"] = true;
	$tdataList_ConvocatoriasNacionales[".afterEditAction"] = 1;
	$tdataList_ConvocatoriasNacionales[".closePopupAfterEdit"] = 1;
	$tdataList_ConvocatoriasNacionales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataList_ConvocatoriasNacionales[".add"] = true;
$tdataList_ConvocatoriasNacionales[".afterAddAction"] = 1;
$tdataList_ConvocatoriasNacionales[".closePopupAfterAdd"] = 1;
$tdataList_ConvocatoriasNacionales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataList_ConvocatoriasNacionales[".list"] = true;
}

$tdataList_ConvocatoriasNacionales[".updateSelected"] = true;


$tdataList_ConvocatoriasNacionales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataList_ConvocatoriasNacionales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataList_ConvocatoriasNacionales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataList_ConvocatoriasNacionales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataList_ConvocatoriasNacionales[".printFriendly"] = true;
}



$tdataList_ConvocatoriasNacionales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataList_ConvocatoriasNacionales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataList_ConvocatoriasNacionales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataList_ConvocatoriasNacionales[".isUseAjaxSuggest"] = true;

$tdataList_ConvocatoriasNacionales[".rowHighlite"] = true;





$tdataList_ConvocatoriasNacionales[".ajaxCodeSnippetAdded"] = false;

$tdataList_ConvocatoriasNacionales[".buttonsAdded"] = false;

$tdataList_ConvocatoriasNacionales[".addPageEvents"] = false;

// use timepicker for search panel
$tdataList_ConvocatoriasNacionales[".isUseTimeForSearch"] = false;


$tdataList_ConvocatoriasNacionales[".badgeColor"] = "7D9EC0";


$tdataList_ConvocatoriasNacionales[".allSearchFields"] = array();
$tdataList_ConvocatoriasNacionales[".filterFields"] = array();
$tdataList_ConvocatoriasNacionales[".requiredSearchFields"] = array();

$tdataList_ConvocatoriasNacionales[".googleLikeFields"] = array();
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "id_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "bPDF";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaDNI_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaApellidoNombre_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaProvinciaReside_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "Personaemail_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "ResidenciaCompleta_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaCV_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "RegistroFechaHora_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".googleLikeFields"][] = "TituloGrado_iConvocatoriasNacionales";



$tdataList_ConvocatoriasNacionales[".tableType"] = "list";

$tdataList_ConvocatoriasNacionales[".printerPageOrientation"] = 0;
$tdataList_ConvocatoriasNacionales[".nPrinterPageScale"] = 100;

$tdataList_ConvocatoriasNacionales[".nPrinterSplitRecords"] = 40;

$tdataList_ConvocatoriasNacionales[".geocodingEnabled"] = false;










$tdataList_ConvocatoriasNacionales[".pageSize"] = 20;

$tdataList_ConvocatoriasNacionales[".warnLeavingPages"] = true;



$tstrOrderBy = "order by RegistroFechaHora_iConvocatoriasNacionales desc";
$tdataList_ConvocatoriasNacionales[".strOrderBy"] = $tstrOrderBy;

$tdataList_ConvocatoriasNacionales[".orderindexes"] = array();
	$tdataList_ConvocatoriasNacionales[".orderindexes"][] = array(16, (0 ? "ASC" : "DESC"), "RegistroFechaHora_iConvocatoriasNacionales");



$tdataList_ConvocatoriasNacionales[".sqlHead"] = "SELECT id_iConvocatoriasNacionales,  id_iConvocatoriasNacionales AS bPDF,  PersonaDNI_iConvocatoriasNacionales,  PersonaApellidoNombre_iConvocatoriasNacionales,  PersonaFechaNacimiento_iConvocatoriasNacionales,  PersonaProvinciaReside_iConvocatoriasNacionales,  Personaemail_iConvocatoriasNacionales,  PersonaTelefonoContacto_iConvocatoriasNacionales,  PuestoTrabajoPostula_iConvocatoriasNacionales,  ResidenciaCompleta_iConvocatoriasNacionales,  ResidenciaEspecialidad_iConvocatoriasNacionales,  PersonaTituloEspecialista_iConvocatoriasNacionales,  PersonaEspecialidadCertificada_iConvocatoriasNacionales,  ConvocatoriaDifusion_iConvocatoriasNacionales,  PersonaCV_iConvocatoriasNacionales,  RegistroFechaHora_iConvocatoriasNacionales,  TituloGrado_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".sqlFrom"] = "FROM I_ConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".sqlWhereExpr"] = "";
$tdataList_ConvocatoriasNacionales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataList_ConvocatoriasNacionales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataList_ConvocatoriasNacionales[".arrGroupsPerPage"] = $arrGPP;

$tdataList_ConvocatoriasNacionales[".highlightSearchResults"] = true;

$tableKeysList_ConvocatoriasNacionales = array();
$tableKeysList_ConvocatoriasNacionales[] = "id_iConvocatoriasNacionales";
$tdataList_ConvocatoriasNacionales[".Keys"] = $tableKeysList_ConvocatoriasNacionales;


$tdataList_ConvocatoriasNacionales[".hideMobileList"] = array();




//	id_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_iConvocatoriasNacionales";
	$fdata["GoodName"] = "id_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","id_iConvocatoriasNacionales");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_iConvocatoriasNacionales";

	
	
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


	$tdataList_ConvocatoriasNacionales["id_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "id_iConvocatoriasNacionales";
//	bPDF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bPDF";
	$fdata["GoodName"] = "bPDF";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","bPDF");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_iConvocatoriasNacionales";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataList_ConvocatoriasNacionales["bPDF"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "bPDF";
//	PersonaDNI_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PersonaDNI_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaDNI_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","PersonaDNI_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaDNI_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaDNI_iConvocatoriasNacionales";

	
	
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


	$tdataList_ConvocatoriasNacionales["PersonaDNI_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "PersonaDNI_iConvocatoriasNacionales";
//	PersonaApellidoNombre_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PersonaApellidoNombre_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaApellidoNombre_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","PersonaApellidoNombre_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaApellidoNombre_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaApellidoNombre_iConvocatoriasNacionales";

	
	
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


	$tdataList_ConvocatoriasNacionales["PersonaApellidoNombre_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "PersonaApellidoNombre_iConvocatoriasNacionales";
//	PersonaFechaNacimiento_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","PersonaFechaNacimiento_iConvocatoriasNacionales");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";

	
	
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


	$tdataList_ConvocatoriasNacionales["PersonaFechaNacimiento_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
//	PersonaProvinciaReside_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PersonaProvinciaReside_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaProvinciaReside_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","PersonaProvinciaReside_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaProvinciaReside_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaProvinciaReside_iConvocatoriasNacionales";

	
	
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
	$edata["LookupValues"][] = "CABA";
	$edata["LookupValues"][] = "Catamarca";
	$edata["LookupValues"][] = "Chaco";
	$edata["LookupValues"][] = "Chubut";
	$edata["LookupValues"][] = "Córdoba";
	$edata["LookupValues"][] = "Corrientes";
	$edata["LookupValues"][] = "Entre Ríos";
	$edata["LookupValues"][] = "Formosa";
	$edata["LookupValues"][] = "Jujuy";
	$edata["LookupValues"][] = "La Pampa";
	$edata["LookupValues"][] = "La Rioja";
	$edata["LookupValues"][] = "Mendoza";
	$edata["LookupValues"][] = "Misiones";
	$edata["LookupValues"][] = "Neuquén";
	$edata["LookupValues"][] = "Río Negro";
	$edata["LookupValues"][] = "Salta";
	$edata["LookupValues"][] = "San Juan";
	$edata["LookupValues"][] = "San Luis";
	$edata["LookupValues"][] = "Santa Cruz";
	$edata["LookupValues"][] = "Santa Fe";
	$edata["LookupValues"][] = "Santiago del Estero";
	$edata["LookupValues"][] = "Tierra del Fuego, Antártida e Islas del Atlántico Sur";
	$edata["LookupValues"][] = "Tucumán";

	
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


	$tdataList_ConvocatoriasNacionales["PersonaProvinciaReside_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "PersonaProvinciaReside_iConvocatoriasNacionales";
//	Personaemail_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Personaemail_iConvocatoriasNacionales";
	$fdata["GoodName"] = "Personaemail_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","Personaemail_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Personaemail_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Personaemail_iConvocatoriasNacionales";

	
	
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


	$tdataList_ConvocatoriasNacionales["Personaemail_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "Personaemail_iConvocatoriasNacionales";
//	PersonaTelefonoContacto_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","PersonaTelefonoContacto_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";

	
	
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


	$tdataList_ConvocatoriasNacionales["PersonaTelefonoContacto_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
//	PuestoTrabajoPostula_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","PuestoTrabajoPostula_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";

	
	
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
	$edata["LookupValues"][] = "Guardia externa de Adultos";
	$edata["LookupValues"][] = "Anatomía patológica";
	$edata["LookupValues"][] = "Auditoría";
	$edata["LookupValues"][] = "Cardiología";
	$edata["LookupValues"][] = "Clínica médica";
	$edata["LookupValues"][] = "Cirugía cardiovascular";
	$edata["LookupValues"][] = "Cirujano general";
	$edata["LookupValues"][] = "Cirujano vascular";
	$edata["LookupValues"][] = "Diagnóstico por imágenes";
	$edata["LookupValues"][] = "Gastroenterología";
	$edata["LookupValues"][] = "Hematología";
	$edata["LookupValues"][] = "Hemodinamia adultos";
	$edata["LookupValues"][] = "Medicina general / de familia";
	$edata["LookupValues"][] = "Médico urólogo";
	$edata["LookupValues"][] = "Neonatólogo";
	$edata["LookupValues"][] = "Neurología";
	$edata["LookupValues"][] = "Neurocirugía";
	$edata["LookupValues"][] = "Oftalmología";
	$edata["LookupValues"][] = "Pediatría";
	$edata["LookupValues"][] = "Médico psiquiatra";
	$edata["LookupValues"][] = "Psiquiatría infantojuvenil";
	$edata["LookupValues"][] = "Reumatología";
	$edata["LookupValues"][] = "Terapia intensiva de adultos";
	$edata["LookupValues"][] = "Terapia intensiva infantil";
	$edata["LookupValues"][] = "Tocoginecología";
	$edata["LookupValues"][] = "Traumatología";
	$edata["LookupValues"][] = "Traumatología infantil";
	$edata["LookupValues"][] = "Otra especialidad";

	
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


	$tdataList_ConvocatoriasNacionales["PuestoTrabajoPostula_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
//	ResidenciaCompleta_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ResidenciaCompleta_iConvocatoriasNacionales";
	$fdata["GoodName"] = "ResidenciaCompleta_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","ResidenciaCompleta_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ResidenciaCompleta_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ResidenciaCompleta_iConvocatoriasNacionales";

	
	
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SI";
	$edata["LookupValues"][] = "NO";

	
	
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


	$tdataList_ConvocatoriasNacionales["ResidenciaCompleta_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "ResidenciaCompleta_iConvocatoriasNacionales";
//	ResidenciaEspecialidad_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
	$fdata["GoodName"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","ResidenciaEspecialidad_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataList_ConvocatoriasNacionales["ResidenciaEspecialidad_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
//	PersonaTituloEspecialista_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","PersonaTituloEspecialista_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";

	
	
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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SI";
	$edata["LookupValues"][] = "NO";

	
	
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


	$tdataList_ConvocatoriasNacionales["PersonaTituloEspecialista_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
//	PersonaEspecialidadCertificada_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","PersonaEspecialidadCertificada_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataList_ConvocatoriasNacionales["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
//	ConvocatoriaDifusion_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
	$fdata["GoodName"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","ConvocatoriaDifusion_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";

	
	
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
	$edata["LookupValues"][] = "Otro";
	$edata["LookupValues"][] = "Afiche/Folletería";
	$edata["LookupValues"][] = "A través de un mail informatico";
	$edata["LookupValues"][] = "Diario";
	$edata["LookupValues"][] = "Internet";
	$edata["LookupValues"][] = "Referencia de otro colega";
	$edata["LookupValues"][] = "Televisión";

	
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


	$tdataList_ConvocatoriasNacionales["ConvocatoriaDifusion_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
//	PersonaCV_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PersonaCV_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaCV_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","PersonaCV_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaCV_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaCV_iConvocatoriasNacionales";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
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


	$tdataList_ConvocatoriasNacionales["PersonaCV_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "PersonaCV_iConvocatoriasNacionales";
//	RegistroFechaHora_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RegistroFechaHora_iConvocatoriasNacionales";
	$fdata["GoodName"] = "RegistroFechaHora_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","RegistroFechaHora_iConvocatoriasNacionales");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "RegistroFechaHora_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RegistroFechaHora_iConvocatoriasNacionales";

	
	
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


	$tdataList_ConvocatoriasNacionales["RegistroFechaHora_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "RegistroFechaHora_iConvocatoriasNacionales";
//	TituloGrado_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "TituloGrado_iConvocatoriasNacionales";
	$fdata["GoodName"] = "TituloGrado_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("List_ConvocatoriasNacionales","TituloGrado_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TituloGrado_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TituloGrado_iConvocatoriasNacionales";

	
	
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
			$edata["EditParams"].= " maxlength=400";

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


	$tdataList_ConvocatoriasNacionales["TituloGrado_iConvocatoriasNacionales"] = $fdata;
		$tdataList_ConvocatoriasNacionales[".searchableFields"][] = "TituloGrado_iConvocatoriasNacionales";


$tables_data["List_ConvocatoriasNacionales"]=&$tdataList_ConvocatoriasNacionales;
$field_labels["List_ConvocatoriasNacionales"] = &$fieldLabelsList_ConvocatoriasNacionales;
$fieldToolTips["List_ConvocatoriasNacionales"] = &$fieldToolTipsList_ConvocatoriasNacionales;
$placeHolders["List_ConvocatoriasNacionales"] = &$placeHoldersList_ConvocatoriasNacionales;
$page_titles["List_ConvocatoriasNacionales"] = &$pageTitlesList_ConvocatoriasNacionales;


changeTextControlsToDate( "List_ConvocatoriasNacionales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["List_ConvocatoriasNacionales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["List_ConvocatoriasNacionales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_List_ConvocatoriasNacionales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_iConvocatoriasNacionales,  id_iConvocatoriasNacionales AS bPDF,  PersonaDNI_iConvocatoriasNacionales,  PersonaApellidoNombre_iConvocatoriasNacionales,  PersonaFechaNacimiento_iConvocatoriasNacionales,  PersonaProvinciaReside_iConvocatoriasNacionales,  Personaemail_iConvocatoriasNacionales,  PersonaTelefonoContacto_iConvocatoriasNacionales,  PuestoTrabajoPostula_iConvocatoriasNacionales,  ResidenciaCompleta_iConvocatoriasNacionales,  ResidenciaEspecialidad_iConvocatoriasNacionales,  PersonaTituloEspecialista_iConvocatoriasNacionales,  PersonaEspecialidadCertificada_iConvocatoriasNacionales,  ConvocatoriaDifusion_iConvocatoriasNacionales,  PersonaCV_iConvocatoriasNacionales,  RegistroFechaHora_iConvocatoriasNacionales,  TituloGrado_iConvocatoriasNacionales";
$proto0["m_strFrom"] = "FROM I_ConvocatoriasNacionales";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by RegistroFechaHora_iConvocatoriasNacionales desc";
	
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
	"m_strName" => "id_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto6["m_sql"] = "id_iConvocatoriasNacionales";
$proto6["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto8["m_sql"] = "id_iConvocatoriasNacionales";
$proto8["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "bPDF";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaDNI_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto10["m_sql"] = "PersonaDNI_iConvocatoriasNacionales";
$proto10["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaApellidoNombre_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto12["m_sql"] = "PersonaApellidoNombre_iConvocatoriasNacionales";
$proto12["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaFechaNacimiento_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto14["m_sql"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
$proto14["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaProvinciaReside_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto16["m_sql"] = "PersonaProvinciaReside_iConvocatoriasNacionales";
$proto16["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Personaemail_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto18["m_sql"] = "Personaemail_iConvocatoriasNacionales";
$proto18["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaTelefonoContacto_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto20["m_sql"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
$proto20["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PuestoTrabajoPostula_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto22["m_sql"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
$proto22["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ResidenciaCompleta_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto24["m_sql"] = "ResidenciaCompleta_iConvocatoriasNacionales";
$proto24["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ResidenciaEspecialidad_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto26["m_sql"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
$proto26["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaTituloEspecialista_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto28["m_sql"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
$proto28["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaEspecialidadCertificada_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto30["m_sql"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
$proto30["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ConvocatoriaDifusion_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto32["m_sql"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
$proto32["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaCV_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto34["m_sql"] = "PersonaCV_iConvocatoriasNacionales";
$proto34["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroFechaHora_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto36["m_sql"] = "RegistroFechaHora_iConvocatoriasNacionales";
$proto36["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "TituloGrado_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto38["m_sql"] = "TituloGrado_iConvocatoriasNacionales";
$proto38["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "I_ConvocatoriasNacionales";
$proto41["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id_iConvocatoriasNacionales";
$proto41["m_columns"][] = "PersonaDNI_iConvocatoriasNacionales";
$proto41["m_columns"][] = "PersonaApellidoNombre_iConvocatoriasNacionales";
$proto41["m_columns"][] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
$proto41["m_columns"][] = "PersonaProvinciaReside_iConvocatoriasNacionales";
$proto41["m_columns"][] = "Personaemail_iConvocatoriasNacionales";
$proto41["m_columns"][] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
$proto41["m_columns"][] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
$proto41["m_columns"][] = "ResidenciaCompleta_iConvocatoriasNacionales";
$proto41["m_columns"][] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
$proto41["m_columns"][] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
$proto41["m_columns"][] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
$proto41["m_columns"][] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
$proto41["m_columns"][] = "PersonaCV_iConvocatoriasNacionales";
$proto41["m_columns"][] = "RegistroFechaHora_iConvocatoriasNacionales";
$proto41["m_columns"][] = "TituloGrado_iConvocatoriasNacionales";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "I_ConvocatoriasNacionales";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "List_ConvocatoriasNacionales";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "RegistroFechaHora_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "List_ConvocatoriasNacionales"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="List_ConvocatoriasNacionales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_List_ConvocatoriasNacionales = createSqlQuery_List_ConvocatoriasNacionales();


	
		;

																	

$tdataList_ConvocatoriasNacionales[".sqlquery"] = $queryData_List_ConvocatoriasNacionales;



include_once(getabspath("include/List_ConvocatoriasNacionales_events.php"));
$tdataList_ConvocatoriasNacionales[".hasEvents"] = true;

?>