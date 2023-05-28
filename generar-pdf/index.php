<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

// Recoger la vista a imprimir
ob_start(); // Abrir el ob_start, lo que haya despues del ob_start, si yo imprimo algo lo va a guardar
require_once 'pdf_para_generar.php';
$html = ob_get_clean(); // Lo podemos guardar utilizando el objeto ob_get_clean, todo lo que haya entre estas dos llamadas, lo vamos a poder guardar dentro de una variable

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');
