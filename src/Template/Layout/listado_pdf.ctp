<?php
$mpdf = new mPDF('utf-8','A4','','',20,15,48,25,10,10);
$mpdf->useOnlyCoreFonts = true;    // false is default
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Informe de actividades - IESTRASCOLAR");
$mpdf->SetAuthor("IESTRASCOLAR");
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');
$mpdf->useSubstitutions=false;

$html = '
    <html>
    <head>
        <style>
         body{
            font-family: sans-serif;
            font-size: 10pt;
        }
        p{
            margin: 0pt;
        }
        td{
            vertical-align: top;
        }
        .items td {
            border-left: 0.1mm solid #000000;
            border-right: 0.1mm solid #000000;
        }
        table thead td {
            background-color: #EEEEEE;
            text-align: center;
            border: 0.1mm solid #000000;
        }
        .items td.blanktotal {
            background-color: #FFFFFF;
            border: 0mm none #000000;
            border-top: 0.1mm solid #000000;
            border-right: 0.1mm solid #000000;
        }
        .items td.totals {
            text-align: right;
            border: 0.1mm solid #000000;
        }
        .tabla{
            border: 1px solid black;
        }
        </style>
    </head>
    <body>'

        . $this->fetch('content') .

    '</body>
    </html>
';
$cabecera = '
                <table width="100%">
                <tr>
                    <td width="50%" style="color:#0000BB;">
                        ' . $this->Html->image('logo_tic.jpg') . '<br />
                        <br /><span style="color:black">Avenida Arroyo del Moro, s/n,
                        <br />14011 Córdoba
                        <br />Tel.: 957 73 49 00</span>
                    </td>
                    <td width="50%" style="text-align: right;">
                        IESTRASSIERRA - <span style="font-weight: bold; font-size: 12pt;"> Listado de actividades '  . '</span>
                        <br/>
                        Página {PAGENO} de {nb}
                    </td>
                </tr>
            </table>';
$mpdf->SetHTMLHeader($cabecera);
$mpdf->WriteHTML($html);

$mpdf->Output('informe.pdf', 'I'); exit;

exit;

