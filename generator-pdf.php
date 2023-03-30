<?php
// Incluir la librería TCPDF
require_once('tcpdf/tcpdf.php');

// Crear el objeto TCPDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Establecer la información del documento
$pdf->SetCreator('Mi aplicación');
$pdf->SetAuthor('Mi nombre');
$pdf->SetTitle('Informe');
$pdf->SetSubject('Informe generado automáticamente');

// Agregar una página al documento
$pdf->AddPage();

// Obtener el contenido del archivo HTML
$html = ob_get_clean();

// Escribir el contenido en el documento PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Generar el archivo PDF y enviarlo al navegador
$pdf->Output('informe.pdf', 'I');
?>

