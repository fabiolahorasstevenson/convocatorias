<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_List_ConvocatoriasProvinciales  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$dni = $values['PersonaDNI_iConvocatoriasProvinciales'];
if ($dni<1000000) 
{
	$message = "El DNI debe ser un número mayor, por favor corrobore el campo registrado.";
	return false;
}

$message = "Sus datos han sido enviados.";
$values['RegistroFechaHora_iConvocatoriasProvinciales'] = now();
$values['PuestoTrabajoPostula_iConvocatoriasProvinciales'] = 'ENFERMERO';

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		// Place event code here.
// Use "Add Action" button to add code snippets.

// Apellido y Nombre Completo 
// Fecha de Nacimiento  
// Localidad donde Reside 
// E-mail 
// Teléfono de Contacto 
//	Puesto de trabajo para el que se postula 
$fecha = date('d-m-Y');
$dni = $values['PersonaDNI_iConvocatoriasProvinciales'];
$persona  = $values['PersonaApellidoNombre_iConvocatoriasProvinciales'];
$fechanac = date("d-m-Y",strtotime($values['PersonaFechaNacimiento_iConvocatoriasProvinciales']));
$provresi = $values['PersonaCiudadReside_iConvocatoriasProvinciales'];
$telefono = $values['PersonaTelefonoContacto_iConvocatoriasProvinciales'];
$email    = $values['Personaemail_iConvocatoriasProvinciales'];
$puestpos = 'ENFERMERO'; 
$titulo   = $values['Titulo_iConvocatoriasProvinciales'];
$residcom = $values['AniosResidencia_iConvocatoriasProvinciales'];

$TablaInicio= "
			<table border = 0 align = 'center' >
	   			<tr>
							<th width=100 height=40 scope='col' align = 'left'> <FONT size = 3 face= 'Times New Roman'> <b> &nbsp DNI </b> </FONT> </th>
		         <td width=100 height=40 scope='col' align = 'left'> <p>  <FONT size = 3 face= 'Times New Roman'>  $dni  </p></FONT></td>
					</tr>	
					<tr>
							<th width=200 height=40 scope='col' align = 'left'> <FONT size = 3 face= 'Times New Roman'> <b> &nbsp Apellido y Nombre </b></FONT></th>
             <td width=200 height=40 scope='col' align = 'left'> <p>  <FONT size = 3 face= 'Times New Roman'>  $persona   </p></FONT></td>
					</tr>	
					<tr>
							<th width=200 height=40 scope='col' align = 'left'> <FONT size = 3 face= 'Times New Roman'> <b> &nbsp Fecha de nac. </b></FONT></th>	
             <td width=200 height=40 scope='col' align = 'left'> <p>  <FONT size = 3 face= 'Times New Roman'>  $fechanac   </p></FONT></td>
					</tr>	
					<tr>
  						<th width=200 height=40 scope='col' align = 'left'> <FONT size = 3 face= 'Times New Roman'> <b> &nbsp Localidad reside </b></FONT></th>	
             <td width=200 height=40 scope='col' align = 'left'> <p>  <FONT size = 3 face= 'Times New Roman'>  $provresi </p></FONT></td>
					</tr>	
					<tr>
  						<th width=200 height=40 scope='col' align = 'left'> <FONT size = 3 face= 'Times New Roman'> <b> &nbsp Teléfono </b></FONT></th>	
             <td width=200 height=40 scope='col' align = 'left'> <p>  <FONT size = 3 face= 'Times New Roman'>  $telefono </p></FONT></td>
					</tr>	
					<tr>
  						<th width=200 height=40 scope='col' align = 'left'> <FONT size = 3 face= 'Times New Roman'> <b> &nbsp e-mail </b></FONT></th>	
             <td width=200 height=40 scope='col' align = 'left'> <p>  <FONT size = 3 face= 'Times New Roman'>  $email </p></FONT></td>
					</tr>	
					<tr>
  						<th width=200 height=40 scope='col' align = 'left'> <FONT size = 3 face= 'Times New Roman'> <b> &nbsp Título </b></FONT></th>
             <td width=200 height=40 scope='col' align = 'left'> <p>  <FONT size = 3 face= 'Times New Roman'>  $titulo </p></FONT></td>
					</tr>	
					<tr>
  						<th width=200 height=40 scope='col' align = 'left'> <FONT size = 3 face= 'Times New Roman'> <b> &nbsp Puesto postula </b></FONT></th>
             <td width=200 height=40 scope='col' align = 'left'> <p>  <FONT size = 3 face= 'Times New Roman'>  $puestpos </p></FONT></td>
					</tr>	
					<tr>	
  						<th width=200 height=40 scope='col' align = 'left'> <FONT size = 3 face= 'Times New Roman'> <b> &nbsp Años de Residencia </b></FONT></th>	
             <td width=200 height=40 scope='col' align = 'left'> <p>  <FONT size = 3 face= 'Times New Roman'>  $residcom </p></FONT></td>
					</tr>	";
$FinTabla = "</table>";
$items= $items ."	
					  <tr>
	         </tr> <br>
";
$Texto = "<FONT size='2' face= 'Arial'>Por medio de la presente se informa a Ud. que se ha inscripto en la convocatoria el siguiente profesional: </FONT>";
$from = "convocatoriasms@tierradelfuego.gov.ar";
$subject="Convocatorias Provincial de Enfermeros MS: Aviso de inscripción postulante - Fecha: ".$fecha;

$message =  '
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table width="100%">
  <tr>
    <td><p>
      <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
      <HTML>
      <BODY LANG="es-ES" DIR="LTR">
    </p>
  </tr>
  <tr>
    <td><h3>Dirección de Planificación, Búsqueda e Incorporación de Personal Profesionales: </h3></td>
  </tr>
  <tr>
    <td><p>
      <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
      <HTML>
      <BODY LANG="es-ES" DIR="LTR">
    </p>
			<p>'.$Texto.'</p>
			
   	</td>
  </tr>
  <tr>
    <td><h4 align="center"><FONT size=3 face= "Arial"><u></u></h4>
      <div align="center">
        '.$TablaInicio.' '.$items.' '.$FinTabla.'
    </div></td>
  </tr>
  <tr>
    <td><p>&nbsp;</p>
    <p><FONT size=2 face= "Arial"> Sin otro particular, saludo atentamente.</p></td>
  </tr>
  <tr>
    <td><p>&nbsp;</p>
      <h5 align="left">Subsecretaría de Sistemas Informáticos y Comunicaciones - Ministerio de Salud <br> Alem Nro. 629 Piso 3 - Ushuaia (9410)</h5>
    <h6 align="center">Mensaje generado en forma automática por el Sistema de Convocatorias <br> Ministerio de Salud</h6></td>
  </tr>
</table>
</body>
</html>
';

//$email= "corozco@tierradelfuego.gov.ar";
global $conn;
$strSQLExists = "select email_IConvNacMailsNotif from I_ConvNacMailsNotif where Activo_IConvNacMailsNotif ='SI'";
$rsExists = db_query($strSQLExists,$conn);
while ($data=db_fetch_array($rsExists))
{
	// Mandar el mail 
	$email = $data["email_IConvNacMailsNotif"];
	$ret = runner_mail(array('to'  => $email, 'cc' => 'fstevenson@tierradelfuego.gov.ar', 'subject' => $subject, 'htmlbody' => $message, 'from' => $from));
	if(!$ret["mailed"])
		$_SESSION["mailNoEnviado"] =  $ret["message"];
}

// Notificar al interesado que se contactarán pronto con el mismo desde Convocatorias
$Texto1 = "Gracias por contactarnos, responderemos su consulta a la brevedad. Le informamos que la CONVOCATORIA VIGENTE es exclusivamente para la incorporación de ENFERMEROS. La postulación de candidatos y recepción de CV se realiza únicamente a través de la siguiente página web:https://ministeriosalud.tierradelfuego.gov.ar/convocatorias/.";
$from = "convocatoriasms@tierradelfuego.gov.ar";
$subject="Convocatorias MS: Aviso de recepción de sus datos - Fecha: ".$fecha;
$message =  '
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table width="100%">
  <tr>
    <td><p>
      <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
      <HTML>
      <BODY LANG="es-ES" DIR="LTR">
    </p>
  </tr>
  <tr>
    <td><h3>Estimado: </h3></td>
  </tr>
  <tr>
    <td><p>
      <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
      <HTML>
      <BODY LANG="es-ES" DIR="LTR">
    </p>
			<p>'.$Texto1.'</p>
	 	</td>
  </tr>
  <tr>
    <td><p>&nbsp;</p>
    <p><FONT size=2 face= "Arial"> Sin otro particular, saludo atentamente.</p></td>
  </tr>
  <tr>
    <td><p>&nbsp;</p>
      <h5 align="left">Subsecretaría de Sistemas Informáticos y Comunicaciones - Ministerio de Salud <br> Alem Nro. 629 Piso 3 - Ushuaia (9410)</h5>
    <h6 align="center">Mensaje generado en forma automática por el Sistema de Convocatorias <br> Ministerio de Salud</h6></td>
  </tr>
</table>
</body>
</html>
';


$email1 = $values['Personaemail_iConvocatoriasNacionales'];
$ret = runner_mail(array('to'  => $email1, 'cc' => 'fstevenson@tierradelfuego.gov.ar', 'subject' => $subject, 'htmlbody' => $message, 'from' => $from));
if(!$ret["mailed"])
		$_SESSION["mailNoEnviado"] =  $ret["message"];

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
