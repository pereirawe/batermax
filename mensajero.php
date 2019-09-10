<?php 
	if(isset($_POST['submit'])) {
		$para = "batermax.chia@gmail.com,";
		$asunto = "Mensaje de batermax.com";
		$encabezado .= "MIME-Version: 1.0" . "\r\n";
		$encabezado .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$encabezado .= 'From: BATERMAX <batermax.chia@gmail.com>' . "\r\n";
		$nombre = $_POST['nombre'];
	    $telephone = $_POST['telephone'];
	    $correo = $_POST['email'];
	    $mensaje = $_POST['mensaje'];
		$cuerpo = '<div id="container" style="margin: 10px; border-top: 4px solid #002f5b; border-left: 4px solid #002f5b; border-right: 4px solid #002f5b; font-family: sans-serif;">
		<img src="https://venexradio.com/batermax/img/email-banner.jpg" alt="" width="100%">
		<div style="text-align: left; padding: 20px; background-color: #fed500; color: #333333; ">
			<div style="font-size: x-large;">Mensaje enviado por <strong>'.$nombre.'.</strong></div>
		</div>
		<div style="padding-top: 30px; padding-bottom: 50px; color: #333333;">
			<blockquote>
				<q>'.$mensaje.'</q>
			</blockquote>
			<div style="margin-left: 20px;margin-top: 50px;">
				<div><strong>Email:</strong> <a href="mailto:'.$correo.'">'.$correo.'</a></div>
				<div><strong>Teléfono:</strong> '.$telephone.'</div>
			</div>
		</div>
		<div style="background-color: #002f5b; color:#ffffff; text-align: center; padding-top: 50px; padding-bottom: 50px; ">
			<i style="width: 80%; display: block; margin-left: auto; margin-right: auto; font-size: small;">La mayoría de las personas suelen tener miedos y dudas antes de adquirir un producto en línea, pero si se encuentran con una tienda que responda a cada una de ellos con algo positivo, seguramente terminarán comprando en ella.</i>
		</div>
	</div>';
		mail( $para, $asunto, $cuerpo, $encabezado);
		header('Location: ./?msg-send=true');
		exit;
	}
	header('Location: index.php');
	exit;
 ?>