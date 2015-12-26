<?php
$mpdf = new mPDF();
// $mpdf->useOnlyCoreFonts = true;    // false is default
// $mpdf->SetProtection(array('print'));
// $mpdf->SetTitle("Informe de actividades - IESTRASCOLAR");
// $mpdf->SetAuthor("IESTRASCOLAR");
// $mpdf->watermark_font = 'DejaVuSansCondensed';
// $mpdf->watermarkTextAlpha = 0.1;
// $mpdf->SetDisplayMode('fullpage');
// $mpdf->useSubstitutions=false;

// $html = '
//     <!DOCTYPE html>
//     <html>
//     <head>
//         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
//         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>'
//         . $this->Html->css('/libs/bootstrap/css/bootstrap.flatytheme.css')
//         . $this->Html->css('cabecera.css') .
//     '</head>
//     <body>
//         <div class="cabecera">
//             <div class="cabecera-inner">
//                     <div class="titulo">
//                     <h2>IESTRASCOLAR</h2>
//                     </div>
//             </div>
//         </div>'
//         . $this->fetch('content') .

//     '</body>
//     </html>



// ';

$mpdf->WriteHTML("hola");

$mpdf->Output('informe.pdf', 'I');

exit;

