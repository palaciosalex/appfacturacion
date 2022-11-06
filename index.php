<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!--
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body style="background-color:#FFC78B;">
	
<?php

//CrearXML();
LeerXML();

function LeerXML() {
	//$docXML = simplexml_load_file("xmlFACTURAE001-30920508322012.xml"); // Ruta del archivo XML
	$docXML = simplexml_load_file("xmls/FACTURA-SINIGV.xml");

	$namespaces = $docXML->getNamespaces(true);
	$docXML->registerXPathNamespace('cbc', 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2');
	$docXML->registerXPathNamespace('cac', 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2');

	$ID = $docXML->xpath('//cbc:ID')[0];
	$Fecha = $docXML->xpath('//cbc:IssueDate')[0];
	$Ruc = $docXML->xpath('//cbc:ID')[2];
	$Cliente = $docXML->xpath('//cbc:RegistrationName')[0];
	$pedido = $docXML->xpath('//cbc:ID')[2]; 
    $fechaFacturacion = $docXML->xpath('//cbc:IssueDate')[0];
    $referencia = $docXML->xpath('//cbc:ID')[0];
    $importe = $docXML->xpath('//cbc:Amount')[0];
    $IGV = $docXML->xpath('//cbc:TaxAmount')[0];
	$valorVenta = ($importe / 1.18);
    $texto = $docXML->xpath('//cbc:Description')[0];
    $retencion = "";
    $detraccion = "";
	$importeFinal = ($importe);
	echo "<div style='text-align:center;'>";
	echo "<h1>DATOS FACTURA</h1>";
	echo "</div>";
	echo "<table class='table table-striped table-dark' >";
	echo "<tr><td>ID </td><td>".$ID."</td></tr>";
	echo "<tr><td>Fecha </td><td>".$Fecha."</td></tr>";
	echo "<tr><td>RUC </td><td>".$Ruc."</td></tr>";
	echo "<tr><td>Cliente </td><td>".$Cliente."</td></tr>";
	echo "<tr><td>Pedido </td><td>".$pedido."</td></tr>";
	echo "<tr><td>Fecha Facturacion </td><td>".$fechaFacturacion."</td></tr>";
	echo "<tr><td>Referencia </td><td>".$referencia."</td></tr>";
	echo "<tr><td>Importe </td><td>".$importe."</td></tr>";
	echo "<tr><td>IGV </td><td>".$IGV."</td></tr>";
	echo "<tr><td>Valor Venta</td><td>".$valorVenta."</td></tr>";
	echo "<tr><td>Texto </td><td>".$texto."</td></tr>";


	$archivotxt = file_get_contents('AgenRet_TXT.txt');
	$pos = strpos($archivotxt, $Ruc);
	// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
	if ($pos === false) {
		echo "<tr><td>Retencion </td><td>La empresa con ruc  '$Ruc' NO ESTÁ en el padron de agentes de retencion</td></tr>";
	} else {
		echo "<tr><td>Retencion </td><td>La empresa con ruc  '$Ruc' SI ESTÁ en el padron de agentes de retencion</td></tr>";
	}

	echo "<tr><td>Detraccion </td><td>".$detraccion."</td></tr>";
	echo "<tr><td>Importe Final </td><td>".$importeFinal."</td></tr>";
	echo "</table>";


}

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>