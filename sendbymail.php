<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "scrool@gmail.com";
$email_subject = "Formulario de Clave de Apoyo";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['demo-name']) ||
!isset($_POST['demo-category']) ||
!isset($_POST['demo-email']) ||
!isset($_POST['demo-telf']) ||
!isset($_POST['demo-message'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['demo-name'] . "\n";
$email_message .= "Categoria: " . $_POST['demo-category'] . "\n";
$email_message .= "E-mail: " . $_POST['demo-email'] . "\n";
$email_message .= "Teléfono: " . $_POST['demo-telf'] . "\n";
$email_message .= "Comentarios: " . $_POST['demo-message'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>