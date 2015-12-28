<?php
$mpdf = new mPDF();
$mpdf->useOnlyCoreFonts = true;    // false is default
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Informe de actividades - IESTRASCOLAR");
$mpdf->SetAuthor("IESTRASCOLAR");
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');
$mpdf->useSubstitutions=false;

$html = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            body{
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }

            .tablaMadre td{
                    text-align:center;
                }

                .tablaMadre{
                    width:800px;

                }

                .tablaMadre table{
                    width:100%;
                    text-align: center;
                }

                .imagen{
                    width:100%;
                }
                .cuerpo{
                    background-color: #ffffff;
                    padding: 50px 30px 50px 30px;
                    height:810px;
                }
        </style>
    </head>
    <body>
        <div class="cabecera">
            <div class="cabecera-inner">
                    <div class="titulo">
                    <h2>IESTRASCOLAR</h2>
                    </div>
            </div>
        </div>'
        . $this->fetch('content') .

    '</body>
    </html>


';

$mpdf->WriteHTML($html);

$mpdf->Output('informe.pdf', 'I'); exit;

exit;

