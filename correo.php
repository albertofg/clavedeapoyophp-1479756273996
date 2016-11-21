<?php
$nombre = $_POST['demo-name'];
$mail = $_POST['demo-email'];
$empresa = $_POST['demo-telf'];
$categoria = $_POST['demo-category'];

$header = 'From: ' . "formulario@clavedeapoyo.com" . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por... " . $nombre . ", su telefono " . $empresa . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Esta interesado en: " . $categoria . " \r\n";
$mensaje .= "Mensaje: " . $_POST['demo-message'] . " \r\n";
$mensaje .= "Fue enviado... " . date('d/m/Y', time());

$para = "jlvargas@clavedeapoyo.com";
$asunto = 'ASUNTO DEL MENSAJE';


mail($para, $asunto, utf8_decode($mensaje), $header);


?>
	<head>
		<title>Academia Clave de Apoyo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
</h2>
<h2 align="center">Gracias!</h2>

<p align="center">Tu mensaje ha sido enviado correctamente, pronto nos pondremos en contacto con usted a traves del correo:</p>
<p align="center"> </p>
<p align="center"><span><?php print $mail; ?></span></p>

<p align="center">Si no es correcto,

<script type='text/javascript'>

document.write('<a href="javascript:history.go(-1);">vuelve atras</a>');

</script>

<noscript>vuelve atras</noscript> y envialo de nuevo</p>

<script type='text/javascript'>

document.write('<p class="details"><a href="javascript:history.go(-2);">Volver a la página de inicio.</a></p>');

</script>

<script type='text/javascript'>

setTimeout('history.go(-2)', 9000);

</script>

<noscript>

<p align="center" class="details">Pulsa el boton "atras" en tu navegador para volver a la pagina anterior.</p>

</noscript> 