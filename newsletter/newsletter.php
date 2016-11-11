<?php

$to = "felipejorgeas@gmail.com";
$subject = "Olá, mundo!";
$html = file_get_contents('email_finit.html');
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
if (mail($to, $subject, $html, $headers)) {
    echo "Email enviado com sucesso !";
} else {
    echo "Ocorreu um erro durante o envio do email.";
}
?>