<?php
$tdataConvocatoriasNacionales_PrintPDF = array();
$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"] = array();
$tdataConvocatoriasNacionales_PrintPDF[".ShortName"] = "ConvocatoriasNacionales_PrintPDF";
$tdataConvocatoriasNacionales_PrintPDF[".OwnerID"] = "";
$tdataConvocatoriasNacionales_PrintPDF[".OriginalTable"] = "I_ConvocatoriasNacionales";


$tdataConvocatoriasNacionales_PrintPDF[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataConvocatoriasNacionales_PrintPDF[".originalPagesByType"] = $tdataConvocatoriasNacionales_PrintPDF[".pagesByType"];
$tdataConvocatoriasNacionales_PrintPDF[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataConvocatoriasNacionales_PrintPDF[".originalPages"] = $tdataConvocatoriasNacionales_PrintPDF[".pages"];
$tdataConvocatoriasNacionales_PrintPDF[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataConvocatoriasNacionales_PrintPDF[".originalDefaultPages"] = $tdataConvocatoriasNacionales_PrintPDF[".defaultPages"];

//	field labels
$fieldLabelsConvocatoriasNacionales_PrintPDF = array();
$fieldToolTipsConvocatoriasNacionales_PrintPDF = array();
$pageTitlesConvocatoriasNacionales_PrintPDF = array();
$placeHoldersConvocatoriasNacionales_PrintPDF = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"] = array();
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"] = array();
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"] = array();
	$pageTitlesConvocatoriasNacionales_PrintPDF["Spanish"] = array();
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["id_iConvocatoriasNacionales"] = "#Reg";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["id_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["id_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaDNI_iConvocatoriasNacionales"] = "DNI";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaDNI_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaDNI_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaApellidoNombre_iConvocatoriasNacionales"] = "Apellido y Nombre";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaApellidoNombre_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaApellidoNombre_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaFechaNacimiento_iConvocatoriasNacionales"] = "Fecha de Nacimiento ";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaFechaNacimiento_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaFechaNacimiento_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaProvinciaReside_iConvocatoriasNacionales"] = "Provincia Reside";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaProvinciaReside_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaProvinciaReside_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["Personaemail_iConvocatoriasNacionales"] = "E-mail";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["Personaemail_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["Personaemail_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaTelefonoContacto_iConvocatoriasNacionales"] = "Teléfono de Contacto";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaTelefonoContacto_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaTelefonoContacto_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["PuestoTrabajoPostula_iConvocatoriasNacionales"] = "Puesto";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["PuestoTrabajoPostula_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["PuestoTrabajoPostula_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["ResidenciaCompleta_iConvocatoriasNacionales"] = "Residencia Completa";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["ResidenciaCompleta_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["ResidenciaCompleta_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["ResidenciaEspecialidad_iConvocatoriasNacionales"] = "Especialidad e Institución donde realizó la residencia";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["ResidenciaEspecialidad_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["ResidenciaEspecialidad_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaTituloEspecialista_iConvocatoriasNacionales"] = "Título de Especialista";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaTituloEspecialista_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaTituloEspecialista_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = "Especialidad Certificada e Institución Certificante";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["ConvocatoriaDifusion_iConvocatoriasNacionales"] = "Cómo conoció esta convocatoria?";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["ConvocatoriaDifusion_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["ConvocatoriaDifusion_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaCV_iConvocatoriasNacionales"] = "CV ";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaCV_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["PersonaCV_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["RegistroFechaHora_iConvocatoriasNacionales"] = "Registro";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["RegistroFechaHora_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["RegistroFechaHora_iConvocatoriasNacionales"] = "";
	$fieldLabelsConvocatoriasNacionales_PrintPDF["Spanish"]["TituloGrado_iConvocatoriasNacionales"] = "Título de Grado";
	$fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]["TituloGrado_iConvocatoriasNacionales"] = "";
	$placeHoldersConvocatoriasNacionales_PrintPDF["Spanish"]["TituloGrado_iConvocatoriasNacionales"] = "";
	if (count($fieldToolTipsConvocatoriasNacionales_PrintPDF["Spanish"]))
		$tdataConvocatoriasNacionales_PrintPDF[".isUseToolTips"] = true;
}


	$tdataConvocatoriasNacionales_PrintPDF[".NCSearch"] = true;



$tdataConvocatoriasNacionales_PrintPDF[".shortTableName"] = "ConvocatoriasNacionales_PrintPDF";
$tdataConvocatoriasNacionales_PrintPDF[".nSecOptions"] = 0;

$tdataConvocatoriasNacionales_PrintPDF[".mainTableOwnerID"] = "";
$tdataConvocatoriasNacionales_PrintPDF[".entityType"] = 1;
$tdataConvocatoriasNacionales_PrintPDF[".connId"] = "Mesa_Entrada_at_10_20_96_220";


$tdataConvocatoriasNacionales_PrintPDF[".strOriginalTableName"] = "I_ConvocatoriasNacionales";

	



$tdataConvocatoriasNacionales_PrintPDF[".showAddInPopup"] = false;

$tdataConvocatoriasNacionales_PrintPDF[".showEditInPopup"] = false;

$tdataConvocatoriasNacionales_PrintPDF[".showViewInPopup"] = false;

	$tdataConvocatoriasNacionales_PrintPDF[".listAjax"] = true;
//	temporary
//$tdataConvocatoriasNacionales_PrintPDF[".listAjax"] = false;

	$tdataConvocatoriasNacionales_PrintPDF[".audit"] = false;

	$tdataConvocatoriasNacionales_PrintPDF[".locking"] = false;


$pages = $tdataConvocatoriasNacionales_PrintPDF[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataConvocatoriasNacionales_PrintPDF[".edit"] = true;
	$tdataConvocatoriasNacionales_PrintPDF[".afterEditAction"] = 1;
	$tdataConvocatoriasNacionales_PrintPDF[".closePopupAfterEdit"] = 1;
	$tdataConvocatoriasNacionales_PrintPDF[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataConvocatoriasNacionales_PrintPDF[".add"] = true;
$tdataConvocatoriasNacionales_PrintPDF[".afterAddAction"] = 1;
$tdataConvocatoriasNacionales_PrintPDF[".closePopupAfterAdd"] = 1;
$tdataConvocatoriasNacionales_PrintPDF[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataConvocatoriasNacionales_PrintPDF[".list"] = true;
}

$tdataConvocatoriasNacionales_PrintPDF[".updateSelected"] = true;


$tdataConvocatoriasNacionales_PrintPDF[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataConvocatoriasNacionales_PrintPDF[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataConvocatoriasNacionales_PrintPDF[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataConvocatoriasNacionales_PrintPDF[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataConvocatoriasNacionales_PrintPDF[".printFriendly"] = true;
}



$tdataConvocatoriasNacionales_PrintPDF[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataConvocatoriasNacionales_PrintPDF[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataConvocatoriasNacionales_PrintPDF[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataConvocatoriasNacionales_PrintPDF[".isUseAjaxSuggest"] = true;

$tdataConvocatoriasNacionales_PrintPDF[".rowHighlite"] = true;





$tdataConvocatoriasNacionales_PrintPDF[".ajaxCodeSnippetAdded"] = false;

$tdataConvocatoriasNacionales_PrintPDF[".buttonsAdded"] = false;

$tdataConvocatoriasNacionales_PrintPDF[".addPageEvents"] = false;

// use timepicker for search panel
$tdataConvocatoriasNacionales_PrintPDF[".isUseTimeForSearch"] = false;


$tdataConvocatoriasNacionales_PrintPDF[".badgeColor"] = "7D9EC0";


$tdataConvocatoriasNacionales_PrintPDF[".allSearchFields"] = array();
$tdataConvocatoriasNacionales_PrintPDF[".filterFields"] = array();
$tdataConvocatoriasNacionales_PrintPDF[".requiredSearchFields"] = array();

$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"] = array();
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "id_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "PersonaDNI_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "PersonaApellidoNombre_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "PersonaProvinciaReside_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "Personaemail_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "ResidenciaCompleta_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "PersonaCV_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "RegistroFechaHora_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".googleLikeFields"][] = "TituloGrado_iConvocatoriasNacionales";



$tdataConvocatoriasNacionales_PrintPDF[".tableType"] = "list";

$tdataConvocatoriasNacionales_PrintPDF[".printerPageOrientation"] = 0;
$tdataConvocatoriasNacionales_PrintPDF[".nPrinterPageScale"] = 100;

$tdataConvocatoriasNacionales_PrintPDF[".nPrinterSplitRecords"] = 40;

$tdataConvocatoriasNacionales_PrintPDF[".geocodingEnabled"] = false;










$tdataConvocatoriasNacionales_PrintPDF[".pageSize"] = 20;

$tdataConvocatoriasNacionales_PrintPDF[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataConvocatoriasNacionales_PrintPDF[".strOrderBy"] = $tstrOrderBy;

$tdataConvocatoriasNacionales_PrintPDF[".orderindexes"] = array();


$tdataConvocatoriasNacionales_PrintPDF[".sqlHead"] = "SELECT id_iConvocatoriasNacionales,  	PersonaDNI_iConvocatoriasNacionales,  	PersonaApellidoNombre_iConvocatoriasNacionales,  	PersonaFechaNacimiento_iConvocatoriasNacionales,  	PersonaProvinciaReside_iConvocatoriasNacionales,  	Personaemail_iConvocatoriasNacionales,  	PersonaTelefonoContacto_iConvocatoriasNacionales,  	PuestoTrabajoPostula_iConvocatoriasNacionales,  	ResidenciaCompleta_iConvocatoriasNacionales,  	ResidenciaEspecialidad_iConvocatoriasNacionales,  	PersonaTituloEspecialista_iConvocatoriasNacionales,  	PersonaEspecialidadCertificada_iConvocatoriasNacionales,  	ConvocatoriaDifusion_iConvocatoriasNacionales,  	PersonaCV_iConvocatoriasNacionales,  	RegistroFechaHora_iConvocatoriasNacionales,  	TituloGrado_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".sqlFrom"] = "FROM I_ConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".sqlWhereExpr"] = "";
$tdataConvocatoriasNacionales_PrintPDF[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataConvocatoriasNacionales_PrintPDF[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataConvocatoriasNacionales_PrintPDF[".arrGroupsPerPage"] = $arrGPP;

$tdataConvocatoriasNacionales_PrintPDF[".highlightSearchResults"] = true;

$tableKeysConvocatoriasNacionales_PrintPDF = array();
$tableKeysConvocatoriasNacionales_PrintPDF[] = "id_iConvocatoriasNacionales";
$tdataConvocatoriasNacionales_PrintPDF[".Keys"] = $tableKeysConvocatoriasNacionales_PrintPDF;


$tdataConvocatoriasNacionales_PrintPDF[".hideMobileList"] = array();




//	id_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_iConvocatoriasNacionales";
	$fdata["GoodName"] = "id_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","id_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["id_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "id_iConvocatoriasNacionales";
//	PersonaDNI_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PersonaDNI_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaDNI_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","PersonaDNI_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["PersonaDNI_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "PersonaDNI_iConvocatoriasNacionales";
//	PersonaApellidoNombre_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PersonaApellidoNombre_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaApellidoNombre_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","PersonaApellidoNombre_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["PersonaApellidoNombre_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "PersonaApellidoNombre_iConvocatoriasNacionales";
//	PersonaFechaNacimiento_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","PersonaFechaNacimiento_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["PersonaFechaNacimiento_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
//	PersonaProvinciaReside_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PersonaProvinciaReside_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaProvinciaReside_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","PersonaProvinciaReside_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["PersonaProvinciaReside_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "PersonaProvinciaReside_iConvocatoriasNacionales";
//	Personaemail_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Personaemail_iConvocatoriasNacionales";
	$fdata["GoodName"] = "Personaemail_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","Personaemail_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["Personaemail_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "Personaemail_iConvocatoriasNacionales";
//	PersonaTelefonoContacto_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","PersonaTelefonoContacto_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["PersonaTelefonoContacto_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
//	PuestoTrabajoPostula_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","PuestoTrabajoPostula_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["PuestoTrabajoPostula_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
//	ResidenciaCompleta_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ResidenciaCompleta_iConvocatoriasNacionales";
	$fdata["GoodName"] = "ResidenciaCompleta_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","ResidenciaCompleta_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["ResidenciaCompleta_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "ResidenciaCompleta_iConvocatoriasNacionales";
//	ResidenciaEspecialidad_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
	$fdata["GoodName"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","ResidenciaEspecialidad_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["ResidenciaEspecialidad_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
//	PersonaTituloEspecialista_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","PersonaTituloEspecialista_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["PersonaTituloEspecialista_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
//	PersonaEspecialidadCertificada_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","PersonaEspecialidadCertificada_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
//	ConvocatoriaDifusion_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
	$fdata["GoodName"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","ConvocatoriaDifusion_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["ConvocatoriaDifusion_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
//	PersonaCV_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PersonaCV_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaCV_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","PersonaCV_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["PersonaCV_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "PersonaCV_iConvocatoriasNacionales";
//	RegistroFechaHora_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RegistroFechaHora_iConvocatoriasNacionales";
	$fdata["GoodName"] = "RegistroFechaHora_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","RegistroFechaHora_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["RegistroFechaHora_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "RegistroFechaHora_iConvocatoriasNacionales";
//	TituloGrado_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "TituloGrado_iConvocatoriasNacionales";
	$fdata["GoodName"] = "TituloGrado_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("ConvocatoriasNacionales_PrintPDF","TituloGrado_iConvocatoriasNacionales");
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


	$tdataConvocatoriasNacionales_PrintPDF["TituloGrado_iConvocatoriasNacionales"] = $fdata;
		$tdataConvocatoriasNacionales_PrintPDF[".searchableFields"][] = "TituloGrado_iConvocatoriasNacionales";


$tables_data["ConvocatoriasNacionales_PrintPDF"]=&$tdataConvocatoriasNacionales_PrintPDF;
$field_labels["ConvocatoriasNacionales_PrintPDF"] = &$fieldLabelsConvocatoriasNacionales_PrintPDF;
$fieldToolTips["ConvocatoriasNacionales_PrintPDF"] = &$fieldToolTipsConvocatoriasNacionales_PrintPDF;
$placeHolders["ConvocatoriasNacionales_PrintPDF"] = &$placeHoldersConvocatoriasNacionales_PrintPDF;
$page_titles["ConvocatoriasNacionales_PrintPDF"] = &$pageTitlesConvocatoriasNacionales_PrintPDF;


changeTextControlsToDate( "ConvocatoriasNacionales_PrintPDF" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ConvocatoriasNacionales_PrintPDF"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ConvocatoriasNacionales_PrintPDF"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ConvocatoriasNacionales_PrintPDF()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_iConvocatoriasNacionales,  	PersonaDNI_iConvocatoriasNacionales,  	PersonaApellidoNombre_iConvocatoriasNacionales,  	PersonaFechaNacimiento_iConvocatoriasNacionales,  	PersonaProvinciaReside_iConvocatoriasNacionales,  	Personaemail_iConvocatoriasNacionales,  	PersonaTelefonoContacto_iConvocatoriasNacionales,  	PuestoTrabajoPostula_iConvocatoriasNacionales,  	ResidenciaCompleta_iConvocatoriasNacionales,  	ResidenciaEspecialidad_iConvocatoriasNacionales,  	PersonaTituloEspecialista_iConvocatoriasNacionales,  	PersonaEspecialidadCertificada_iConvocatoriasNacionales,  	ConvocatoriaDifusion_iConvocatoriasNacionales,  	PersonaCV_iConvocatoriasNacionales,  	RegistroFechaHora_iConvocatoriasNacionales,  	TituloGrado_iConvocatoriasNacionales";
$proto0["m_strFrom"] = "FROM I_ConvocatoriasNacionales";
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
	"m_strName" => "id_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto6["m_sql"] = "id_iConvocatoriasNacionales";
$proto6["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaDNI_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto8["m_sql"] = "PersonaDNI_iConvocatoriasNacionales";
$proto8["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaApellidoNombre_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto10["m_sql"] = "PersonaApellidoNombre_iConvocatoriasNacionales";
$proto10["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaFechaNacimiento_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto12["m_sql"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
$proto12["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaProvinciaReside_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto14["m_sql"] = "PersonaProvinciaReside_iConvocatoriasNacionales";
$proto14["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Personaemail_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto16["m_sql"] = "Personaemail_iConvocatoriasNacionales";
$proto16["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaTelefonoContacto_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto18["m_sql"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
$proto18["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PuestoTrabajoPostula_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto20["m_sql"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
$proto20["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ResidenciaCompleta_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto22["m_sql"] = "ResidenciaCompleta_iConvocatoriasNacionales";
$proto22["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ResidenciaEspecialidad_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto24["m_sql"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
$proto24["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaTituloEspecialista_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto26["m_sql"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
$proto26["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaEspecialidadCertificada_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto28["m_sql"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
$proto28["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ConvocatoriaDifusion_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto30["m_sql"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
$proto30["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaCV_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto32["m_sql"] = "PersonaCV_iConvocatoriasNacionales";
$proto32["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroFechaHora_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto34["m_sql"] = "RegistroFechaHora_iConvocatoriasNacionales";
$proto34["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "TituloGrado_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "ConvocatoriasNacionales_PrintPDF"
));

$proto36["m_sql"] = "TituloGrado_iConvocatoriasNacionales";
$proto36["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "I_ConvocatoriasNacionales";
$proto39["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id_iConvocatoriasNacionales";
$proto39["m_columns"][] = "PersonaDNI_iConvocatoriasNacionales";
$proto39["m_columns"][] = "PersonaApellidoNombre_iConvocatoriasNacionales";
$proto39["m_columns"][] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
$proto39["m_columns"][] = "PersonaProvinciaReside_iConvocatoriasNacionales";
$proto39["m_columns"][] = "Personaemail_iConvocatoriasNacionales";
$proto39["m_columns"][] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
$proto39["m_columns"][] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
$proto39["m_columns"][] = "ResidenciaCompleta_iConvocatoriasNacionales";
$proto39["m_columns"][] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
$proto39["m_columns"][] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
$proto39["m_columns"][] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
$proto39["m_columns"][] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
$proto39["m_columns"][] = "PersonaCV_iConvocatoriasNacionales";
$proto39["m_columns"][] = "RegistroFechaHora_iConvocatoriasNacionales";
$proto39["m_columns"][] = "TituloGrado_iConvocatoriasNacionales";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "I_ConvocatoriasNacionales";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "ConvocatoriasNacionales_PrintPDF";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ConvocatoriasNacionales_PrintPDF";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ConvocatoriasNacionales_PrintPDF = createSqlQuery_ConvocatoriasNacionales_PrintPDF();


	
		;

																

$tdataConvocatoriasNacionales_PrintPDF[".sqlquery"] = $queryData_ConvocatoriasNacionales_PrintPDF;



include_once(getabspath("include/ConvocatoriasNacionales_PrintPDF_events.php"));
$tdataConvocatoriasNacionales_PrintPDF[".hasEvents"] = true;

?>