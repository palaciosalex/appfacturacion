<?php
$archivotxt = file_get_contents('AgenRet_TXT.txt');
$ruc_buscar = "20155945860";
$pos = strpos($archivotxt, $ruc_buscar);

// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
if ($pos === false) {
    echo "La empresa con ruc '$ruc_buscar' no esta en el padron de agentes de retencion";
} else {
    echo "La empresa con ruc  '$ruc_buscar' si esta en el padron de agentes de retencion";
}

?>