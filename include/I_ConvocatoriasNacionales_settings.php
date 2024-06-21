<?php
$tdataI_ConvocatoriasNacionales = array();
$tdataI_ConvocatoriasNacionales[".searchableFields"] = array();
$tdataI_ConvocatoriasNacionales[".ShortName"] = "I_ConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".OwnerID"] = "";
$tdataI_ConvocatoriasNacionales[".OriginalTable"] = "I_ConvocatoriasNacionales";


$tdataI_ConvocatoriasNacionales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" );
$tdataI_ConvocatoriasNacionales[".originalPagesByType"] = $tdataI_ConvocatoriasNacionales[".pagesByType"];
$tdataI_ConvocatoriasNacionales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"search\":[\"search\"]}" ) );
$tdataI_ConvocatoriasNacionales[".originalPages"] = $tdataI_ConvocatoriasNacionales[".pages"];
$tdataI_ConvocatoriasNacionales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"search\":\"search\"}" );
$tdataI_ConvocatoriasNacionales[".originalDefaultPages"] = $tdataI_ConvocatoriasNacionales[".defaultPages"];

//	field labels
$fieldLabelsI_ConvocatoriasNacionales = array();
$fieldToolTipsI_ConvocatoriasNacionales = array();
$pageTitlesI_ConvocatoriasNacionales = array();
$placeHoldersI_ConvocatoriasNacionales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"] = array();
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"] = array();
	$placeHoldersI_ConvocatoriasNacionales["Spanish"] = array();
	$pageTitlesI_ConvocatoriasNacionales["Spanish"] = array();
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["id_iConvocatoriasNacionales"] = "Id IConvocatoriasNacionales";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["id_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["id_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["PersonaDNI_iConvocatoriasNacionales"] = "1. Ingrese su DNI";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["PersonaDNI_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["PersonaDNI_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["PersonaApellidoNombre_iConvocatoriasNacionales"] = "2. Ingrese su Apellido y Nombre Completo";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["PersonaApellidoNombre_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["PersonaApellidoNombre_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["PersonaFechaNacimiento_iConvocatoriasNacionales"] = "3. Ingrese su Fecha de Nacimiento ";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["PersonaFechaNacimiento_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["PersonaFechaNacimiento_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["PersonaProvinciaReside_iConvocatoriasNacionales"] = "4. Provincia donde Reside";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["PersonaProvinciaReside_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["PersonaProvinciaReside_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["Personaemail_iConvocatoriasNacionales"] = "5. Ingrese su E-mail";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["Personaemail_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["Personaemail_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["PersonaTelefonoContacto_iConvocatoriasNacionales"] = "6. Ingrese su Teléfono de Contacto";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["PersonaTelefonoContacto_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["PersonaTelefonoContacto_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["PuestoTrabajoPostula_iConvocatoriasNacionales"] = "7. Puesto de trabajo para el que se postula";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["PuestoTrabajoPostula_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["PuestoTrabajoPostula_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["ResidenciaCompleta_iConvocatoriasNacionales"] = "8. ¿Tiene Residencia Completa?";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["ResidenciaCompleta_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["ResidenciaCompleta_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["ResidenciaEspecialidad_iConvocatoriasNacionales"] = "9. Especialidad e Institución donde realizó la residencia";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["ResidenciaEspecialidad_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["ResidenciaEspecialidad_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["PersonaTituloEspecialista_iConvocatoriasNacionales"] = "10. ¿Tiene Título de Especialista?";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["PersonaTituloEspecialista_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["PersonaTituloEspecialista_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = "11. Especialidad Certificada e Institución Certificante";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["ConvocatoriaDifusion_iConvocatoriasNacionales"] = "12. ¿Cómo conoció esta convocatoria?";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["ConvocatoriaDifusion_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["ConvocatoriaDifusion_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["PersonaCV_iConvocatoriasNacionales"] = "14. Seleccione su CV ";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["PersonaCV_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["PersonaCV_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["RegistroFechaHora_iConvocatoriasNacionales"] = "RegistroFechaHora IConvocatoriasNacionales";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["RegistroFechaHora_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["RegistroFechaHora_iConvocatoriasNacionales"] = "";
	$fieldLabelsI_ConvocatoriasNacionales["Spanish"]["TituloGrado_iConvocatoriasNacionales"] = "13. Título de Grado";
	$fieldToolTipsI_ConvocatoriasNacionales["Spanish"]["TituloGrado_iConvocatoriasNacionales"] = "";
	$placeHoldersI_ConvocatoriasNacionales["Spanish"]["TituloGrado_iConvocatoriasNacionales"] = "";
	$pageTitlesI_ConvocatoriasNacionales["Spanish"]["add"] = "Convocatoria Nacional de Profesionales";
	if (count($fieldToolTipsI_ConvocatoriasNacionales["Spanish"]))
		$tdataI_ConvocatoriasNacionales[".isUseToolTips"] = true;
}


	$tdataI_ConvocatoriasNacionales[".NCSearch"] = true;



$tdataI_ConvocatoriasNacionales[".shortTableName"] = "I_ConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".nSecOptions"] = 0;

$tdataI_ConvocatoriasNacionales[".mainTableOwnerID"] = "";
$tdataI_ConvocatoriasNacionales[".entityType"] = 0;
$tdataI_ConvocatoriasNacionales[".connId"] = "Mesa_Entrada_at_10_20_96_220";


$tdataI_ConvocatoriasNacionales[".strOriginalTableName"] = "I_ConvocatoriasNacionales";

	



$tdataI_ConvocatoriasNacionales[".showAddInPopup"] = false;

$tdataI_ConvocatoriasNacionales[".showEditInPopup"] = false;

$tdataI_ConvocatoriasNacionales[".showViewInPopup"] = false;

$tdataI_ConvocatoriasNacionales[".listAjax"] = false;
//	temporary
//$tdataI_ConvocatoriasNacionales[".listAjax"] = false;

	$tdataI_ConvocatoriasNacionales[".audit"] = false;

	$tdataI_ConvocatoriasNacionales[".locking"] = false;


$pages = $tdataI_ConvocatoriasNacionales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataI_ConvocatoriasNacionales[".edit"] = true;
	$tdataI_ConvocatoriasNacionales[".afterEditAction"] = 1;
	$tdataI_ConvocatoriasNacionales[".closePopupAfterEdit"] = 1;
	$tdataI_ConvocatoriasNacionales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataI_ConvocatoriasNacionales[".add"] = true;
$tdataI_ConvocatoriasNacionales[".afterAddAction"] = 1;
$tdataI_ConvocatoriasNacionales[".closePopupAfterAdd"] = 1;
$tdataI_ConvocatoriasNacionales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataI_ConvocatoriasNacionales[".list"] = true;
}

$tdataI_ConvocatoriasNacionales[".updateSelected"] = true;


$tdataI_ConvocatoriasNacionales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataI_ConvocatoriasNacionales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataI_ConvocatoriasNacionales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataI_ConvocatoriasNacionales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataI_ConvocatoriasNacionales[".printFriendly"] = true;
}



$tdataI_ConvocatoriasNacionales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataI_ConvocatoriasNacionales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataI_ConvocatoriasNacionales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataI_ConvocatoriasNacionales[".isUseAjaxSuggest"] = true;

$tdataI_ConvocatoriasNacionales[".rowHighlite"] = true;





$tdataI_ConvocatoriasNacionales[".ajaxCodeSnippetAdded"] = false;

$tdataI_ConvocatoriasNacionales[".buttonsAdded"] = false;

$tdataI_ConvocatoriasNacionales[".addPageEvents"] = false;

// use timepicker for search panel
$tdataI_ConvocatoriasNacionales[".isUseTimeForSearch"] = false;


$tdataI_ConvocatoriasNacionales[".badgeColor"] = "7D9EC0";


$tdataI_ConvocatoriasNacionales[".allSearchFields"] = array();
$tdataI_ConvocatoriasNacionales[".filterFields"] = array();
$tdataI_ConvocatoriasNacionales[".requiredSearchFields"] = array();

$tdataI_ConvocatoriasNacionales[".googleLikeFields"] = array();
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "id_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaDNI_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaApellidoNombre_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaProvinciaReside_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "Personaemail_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "ResidenciaCompleta_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "PersonaCV_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "RegistroFechaHora_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".googleLikeFields"][] = "TituloGrado_iConvocatoriasNacionales";



$tdataI_ConvocatoriasNacionales[".tableType"] = "list";

$tdataI_ConvocatoriasNacionales[".printerPageOrientation"] = 0;
$tdataI_ConvocatoriasNacionales[".nPrinterPageScale"] = 100;

$tdataI_ConvocatoriasNacionales[".nPrinterSplitRecords"] = 40;

$tdataI_ConvocatoriasNacionales[".geocodingEnabled"] = false;










$tdataI_ConvocatoriasNacionales[".pageSize"] = 20;

$tdataI_ConvocatoriasNacionales[".warnLeavingPages"] = true;



$tstrOrderBy = "order by RegistroFechaHora_iConvocatoriasNacionales desc";
$tdataI_ConvocatoriasNacionales[".strOrderBy"] = $tstrOrderBy;

$tdataI_ConvocatoriasNacionales[".orderindexes"] = array();
	$tdataI_ConvocatoriasNacionales[".orderindexes"][] = array(15, (0 ? "ASC" : "DESC"), "RegistroFechaHora_iConvocatoriasNacionales");



$tdataI_ConvocatoriasNacionales[".sqlHead"] = "SELECT id_iConvocatoriasNacionales,  	PersonaDNI_iConvocatoriasNacionales,  	PersonaApellidoNombre_iConvocatoriasNacionales,  	PersonaFechaNacimiento_iConvocatoriasNacionales,  	PersonaProvinciaReside_iConvocatoriasNacionales,  	Personaemail_iConvocatoriasNacionales,  	PersonaTelefonoContacto_iConvocatoriasNacionales,  	PuestoTrabajoPostula_iConvocatoriasNacionales,  	ResidenciaCompleta_iConvocatoriasNacionales,  	ResidenciaEspecialidad_iConvocatoriasNacionales,  	PersonaTituloEspecialista_iConvocatoriasNacionales,  	PersonaEspecialidadCertificada_iConvocatoriasNacionales,  	ConvocatoriaDifusion_iConvocatoriasNacionales,  	PersonaCV_iConvocatoriasNacionales,  	RegistroFechaHora_iConvocatoriasNacionales,  	TituloGrado_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".sqlFrom"] = "FROM I_ConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".sqlWhereExpr"] = "";
$tdataI_ConvocatoriasNacionales[".sqlTail"] = "";

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
$tdataI_ConvocatoriasNacionales[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataI_ConvocatoriasNacionales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataI_ConvocatoriasNacionales[".arrGroupsPerPage"] = $arrGPP;

$tdataI_ConvocatoriasNacionales[".highlightSearchResults"] = true;

$tableKeysI_ConvocatoriasNacionales = array();
$tableKeysI_ConvocatoriasNacionales[] = "id_iConvocatoriasNacionales";
$tdataI_ConvocatoriasNacionales[".Keys"] = $tableKeysI_ConvocatoriasNacionales;


$tdataI_ConvocatoriasNacionales[".hideMobileList"] = array();




//	id_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_iConvocatoriasNacionales";
	$fdata["GoodName"] = "id_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","id_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["id_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "id_iConvocatoriasNacionales";
//	PersonaDNI_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PersonaDNI_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaDNI_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","PersonaDNI_iConvocatoriasNacionales");
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
			$edata["EditParams"].= " maxlength=8";

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


	$tdataI_ConvocatoriasNacionales["PersonaDNI_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "PersonaDNI_iConvocatoriasNacionales";
//	PersonaApellidoNombre_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PersonaApellidoNombre_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaApellidoNombre_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","PersonaApellidoNombre_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["PersonaApellidoNombre_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "PersonaApellidoNombre_iConvocatoriasNacionales";
//	PersonaFechaNacimiento_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","PersonaFechaNacimiento_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["PersonaFechaNacimiento_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
//	PersonaProvinciaReside_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PersonaProvinciaReside_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaProvinciaReside_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","PersonaProvinciaReside_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["PersonaProvinciaReside_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "PersonaProvinciaReside_iConvocatoriasNacionales";
//	Personaemail_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Personaemail_iConvocatoriasNacionales";
	$fdata["GoodName"] = "Personaemail_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","Personaemail_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["Personaemail_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "Personaemail_iConvocatoriasNacionales";
//	PersonaTelefonoContacto_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","PersonaTelefonoContacto_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["PersonaTelefonoContacto_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
//	PuestoTrabajoPostula_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","PuestoTrabajoPostula_iConvocatoriasNacionales");
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
	$edata["LookupValues"][] = "Anestesiología";
	$edata["LookupValues"][] = "Cardiología";
	$edata["LookupValues"][] = "Cardiología con especialidad en electrofisiología";
	$edata["LookupValues"][] = "Clínica médica";
	$edata["LookupValues"][] = "Cirugía cardiovascular";
	$edata["LookupValues"][] = "Cirujano vascular";
	$edata["LookupValues"][] = "Dermatología";
	$edata["LookupValues"][] = "Diabetología";
	$edata["LookupValues"][] = "Diagnóstico por Imágenes";
	$edata["LookupValues"][] = "Endocrinólogo";
	$edata["LookupValues"][] = "Farmaceútico";
	$edata["LookupValues"][] = "Gastroenterología";
	$edata["LookupValues"][] = "Gastroenterólogo infantil";
	$edata["LookupValues"][] = "Hebiatra";
	$edata["LookupValues"][] = "Hematología";
	$edata["LookupValues"][] = "Hemodinamia adultos";
	$edata["LookupValues"][] = "Infectología adulto";
	$edata["LookupValues"][] = "Infectología infantil";
	$edata["LookupValues"][] = "Lic. en Química Farmaceútica Especialista en Farmacia Hospitalaria";
	$edata["LookupValues"][] = "Medicina general / de familia";
	$edata["LookupValues"][] = "Médico";
	$edata["LookupValues"][] = "Médico urólogo";
	$edata["LookupValues"][] = "Médico paliativista";
	$edata["LookupValues"][] = "Médico psiquiatra";
	$edata["LookupValues"][] = "Nefrología";
	$edata["LookupValues"][] = "Neonatólogo";
	$edata["LookupValues"][] = "Neumonólogo adultos";
	$edata["LookupValues"][] = "Neumonólogo infantil";
	$edata["LookupValues"][] = "Neurología";
	$edata["LookupValues"][] = "Neurocirugía";
	$edata["LookupValues"][] = "Oftalmología";
	$edata["LookupValues"][] = "Pediatría";
	$edata["LookupValues"][] = "Psiquiatría infantojuvenil";
	$edata["LookupValues"][] = "Reumatología";
	$edata["LookupValues"][] = "Terapia intensiva de adultos";
	$edata["LookupValues"][] = "Terapia intensiva infantil";
	$edata["LookupValues"][] = "Tocoginecología";
	$edata["LookupValues"][] = "Traumatología";
	$edata["LookupValues"][] = "Traumatología infantil";

	
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


	$tdataI_ConvocatoriasNacionales["PuestoTrabajoPostula_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
//	ResidenciaCompleta_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ResidenciaCompleta_iConvocatoriasNacionales";
	$fdata["GoodName"] = "ResidenciaCompleta_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","ResidenciaCompleta_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["ResidenciaCompleta_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "ResidenciaCompleta_iConvocatoriasNacionales";
//	ResidenciaEspecialidad_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
	$fdata["GoodName"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","ResidenciaEspecialidad_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["ResidenciaEspecialidad_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
//	PersonaTituloEspecialista_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","PersonaTituloEspecialista_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["PersonaTituloEspecialista_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
//	PersonaEspecialidadCertificada_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","PersonaEspecialidadCertificada_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["PersonaEspecialidadCertificada_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
//	ConvocatoriaDifusion_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
	$fdata["GoodName"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","ConvocatoriaDifusion_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["ConvocatoriaDifusion_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
//	PersonaCV_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PersonaCV_iConvocatoriasNacionales";
	$fdata["GoodName"] = "PersonaCV_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","PersonaCV_iConvocatoriasNacionales");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PersonaCV_iConvocatoriasNacionales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PersonaCV_iConvocatoriasNacionales";

	
	
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


	$tdataI_ConvocatoriasNacionales["PersonaCV_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "PersonaCV_iConvocatoriasNacionales";
//	RegistroFechaHora_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RegistroFechaHora_iConvocatoriasNacionales";
	$fdata["GoodName"] = "RegistroFechaHora_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","RegistroFechaHora_iConvocatoriasNacionales");
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


	$tdataI_ConvocatoriasNacionales["RegistroFechaHora_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "RegistroFechaHora_iConvocatoriasNacionales";
//	TituloGrado_iConvocatoriasNacionales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "TituloGrado_iConvocatoriasNacionales";
	$fdata["GoodName"] = "TituloGrado_iConvocatoriasNacionales";
	$fdata["ownerTable"] = "I_ConvocatoriasNacionales";
	$fdata["Label"] = GetFieldLabel("I_ConvocatoriasNacionales","TituloGrado_iConvocatoriasNacionales");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataI_ConvocatoriasNacionales["TituloGrado_iConvocatoriasNacionales"] = $fdata;
		$tdataI_ConvocatoriasNacionales[".searchableFields"][] = "TituloGrado_iConvocatoriasNacionales";


$tables_data["I_ConvocatoriasNacionales"]=&$tdataI_ConvocatoriasNacionales;
$field_labels["I_ConvocatoriasNacionales"] = &$fieldLabelsI_ConvocatoriasNacionales;
$fieldToolTips["I_ConvocatoriasNacionales"] = &$fieldToolTipsI_ConvocatoriasNacionales;
$placeHolders["I_ConvocatoriasNacionales"] = &$placeHoldersI_ConvocatoriasNacionales;
$page_titles["I_ConvocatoriasNacionales"] = &$pageTitlesI_ConvocatoriasNacionales;


changeTextControlsToDate( "I_ConvocatoriasNacionales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["I_ConvocatoriasNacionales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["I_ConvocatoriasNacionales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_I_ConvocatoriasNacionales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_iConvocatoriasNacionales,  	PersonaDNI_iConvocatoriasNacionales,  	PersonaApellidoNombre_iConvocatoriasNacionales,  	PersonaFechaNacimiento_iConvocatoriasNacionales,  	PersonaProvinciaReside_iConvocatoriasNacionales,  	Personaemail_iConvocatoriasNacionales,  	PersonaTelefonoContacto_iConvocatoriasNacionales,  	PuestoTrabajoPostula_iConvocatoriasNacionales,  	ResidenciaCompleta_iConvocatoriasNacionales,  	ResidenciaEspecialidad_iConvocatoriasNacionales,  	PersonaTituloEspecialista_iConvocatoriasNacionales,  	PersonaEspecialidadCertificada_iConvocatoriasNacionales,  	ConvocatoriaDifusion_iConvocatoriasNacionales,  	PersonaCV_iConvocatoriasNacionales,  	RegistroFechaHora_iConvocatoriasNacionales,  	TituloGrado_iConvocatoriasNacionales";
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
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto6["m_sql"] = "id_iConvocatoriasNacionales";
$proto6["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaDNI_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto8["m_sql"] = "PersonaDNI_iConvocatoriasNacionales";
$proto8["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaApellidoNombre_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto10["m_sql"] = "PersonaApellidoNombre_iConvocatoriasNacionales";
$proto10["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaFechaNacimiento_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto12["m_sql"] = "PersonaFechaNacimiento_iConvocatoriasNacionales";
$proto12["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaProvinciaReside_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto14["m_sql"] = "PersonaProvinciaReside_iConvocatoriasNacionales";
$proto14["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Personaemail_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto16["m_sql"] = "Personaemail_iConvocatoriasNacionales";
$proto16["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaTelefonoContacto_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto18["m_sql"] = "PersonaTelefonoContacto_iConvocatoriasNacionales";
$proto18["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PuestoTrabajoPostula_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto20["m_sql"] = "PuestoTrabajoPostula_iConvocatoriasNacionales";
$proto20["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ResidenciaCompleta_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto22["m_sql"] = "ResidenciaCompleta_iConvocatoriasNacionales";
$proto22["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ResidenciaEspecialidad_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto24["m_sql"] = "ResidenciaEspecialidad_iConvocatoriasNacionales";
$proto24["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaTituloEspecialista_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto26["m_sql"] = "PersonaTituloEspecialista_iConvocatoriasNacionales";
$proto26["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaEspecialidadCertificada_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto28["m_sql"] = "PersonaEspecialidadCertificada_iConvocatoriasNacionales";
$proto28["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ConvocatoriaDifusion_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto30["m_sql"] = "ConvocatoriaDifusion_iConvocatoriasNacionales";
$proto30["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PersonaCV_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto32["m_sql"] = "PersonaCV_iConvocatoriasNacionales";
$proto32["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RegistroFechaHora_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto34["m_sql"] = "RegistroFechaHora_iConvocatoriasNacionales";
$proto34["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "TituloGrado_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto36["m_sql"] = "TituloGrado_iConvocatoriasNacionales";
$proto36["m_srcTableName"] = "I_ConvocatoriasNacionales";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "I_ConvocatoriasNacionales";
$proto39["m_srcTableName"] = "I_ConvocatoriasNacionales";
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
$proto38["m_srcTableName"] = "I_ConvocatoriasNacionales";
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
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "RegistroFechaHora_iConvocatoriasNacionales",
	"m_strTable" => "I_ConvocatoriasNacionales",
	"m_srcTableName" => "I_ConvocatoriasNacionales"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="I_ConvocatoriasNacionales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_I_ConvocatoriasNacionales = createSqlQuery_I_ConvocatoriasNacionales();


	
		;

																

$tdataI_ConvocatoriasNacionales[".sqlquery"] = $queryData_I_ConvocatoriasNacionales;



include_once(getabspath("include/I_ConvocatoriasNacionales_events.php"));
$tdataI_ConvocatoriasNacionales[".hasEvents"] = true;

?>