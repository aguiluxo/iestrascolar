<?php
use mpdf;
		$mpdf = new mPDF('utf-8','A4','','',0,0,0,0,0,0);
		$mpdf->useOnlyCoreFonts = true;    // false is default
		$mpdf->SetProtection(array('print'));
		$mpdf->SetTitle("Cheque Regalo - Hotel en Familia");
		$mpdf->SetAuthor("Hotel en Familia");
		$mpdf->watermark_font = 'DejaVuSansCondensed';
		$mpdf->watermarkTextAlpha = 0.1;
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->useSubstitutions=false;


		$datosReserva = '';

		$datosAlojamiento = '';

		$datosCliente = '';



		$html = '
		<html>
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				<title>Hotel en Familia</title>
				<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			</head>
			<style>
				body{
					font-family: Arial, sans-serif;
					margin: 0;
					padding: 0;
				}

				.tablaMadre>td{
					padding: 10px 0 30px 0;
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

				.pie{
					background-image: none;
					background-size: 100% 100%
					background-repeat: no-repeat;
					text-align:center;
					color: #ffffff;
					font-family: Arial, sans-serif;
					font-size: 12px;
					width: 100%;
					height: 92px;
				}

			</style>
			<body>
				<table class="tablaMadre">
					<tr>
						<td>
							<table>
								<tr>
									<td>
									</td>
								</tr>
								<tr>
									<td class="cuerpo">
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
													<b>Hoja de Reserva</b>
												</td>
											</tr>
											<tr>
												<td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
													<p>Aqui tiene los datos de su reserva</p>
													<br/>
													<table class="infoReserva">
														'.//$datosReserva.'
														'

													</table>
												</td>
											</tr>
											<tr>
												<td>
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td width="260" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" width="100%">
																	'."asdas".'
																</table>
															</td>
															<td style="font-size: 0; line-height: 0;" width="20">
																&nbsp;
															</td>
															<td width="260" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" width="100%">
																	'."asdasd".'
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td class="pie">
										&copy; Hotel en Familia<br/>
										http://www.hotelenfamilia.com <br/>
										<font>¡Visítanos</font>, gracias!
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</body>
		</html>
		';

		$mpdf->WriteHTML($html);

		$mpdf->Output('reserva.pdf', 'I'); exit;

		exit;