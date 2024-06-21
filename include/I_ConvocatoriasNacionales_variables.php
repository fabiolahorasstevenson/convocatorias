<?php
$strTableName="I_ConvocatoriasNacionales";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="I_ConvocatoriasNacionales";

$gstrOrderBy="order by RegistroFechaHora_iConvocatoriasNacionales desc";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>