<?php
require 'vendor/autoload.php';
// Dompdf namespace
use Dompdf\Dompdf;
// dompdf class
$dompdf = new Dompdf();
// html que será transformado em PDF
$dompdf->loadHtml('hello world');
// (Opcional) Tipo do papel e orientação
$dompdf->setPaper('A4');
// Render HTML para PDF
$dompdf->render();
// Download do arquivo
$dompdf->stream();