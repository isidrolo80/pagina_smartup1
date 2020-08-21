<?php 
require 'vendor/autoload.php';
use Mailgun\Mailgun;


# First, instantiate the SDK with your API credentials
$mg = Mailgun::create('key-366931960e3cac99f30d6185f4e4e9c5');

if (isset($_POST['nombres'])) {
$nombres = $_POST['nombres'];
} else {
$nombres = "Not set";
}

if (isset($_POST['email'])) {
$email = $_POST['email'];
} else {
$email = "ilopez@pilisimas.com";
}

if (isset($_POST['tel'])) {
$tel = $_POST['tel'];
} else {
$tel = "Not set";
}

if (isset($_POST['nombreMarca'])) {
$nombreMarca = $_POST['nombreMarca'];
} else {
$nombreMarca = "Not set";
}

if (isset($_POST['niza'])) {
$niza = $_POST['niza'];
} else {
$niza = "Not set";
}

if (isset($_POST['monto'])) {
$monto = $_POST['monto'];
} else {
$monto = "0.00";
}


# Now, compose and send your message.
# $mg->messages()->send($domain, $params);

$html = '<head>
<title>Notificacion de consumo en Caferucita</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width" name="viewport">
<style type="text/css">
            @font-face {
              font-family: &#x27;Postmates Std&#x27;;
              font-weight: 700;
              font-style: normal;
              src: local(&#x27;Postmates Std Bold&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-bold.woff) format(&#x27;woff&#x27;);
            }

            @font-face {
              font-family: &#x27;Postmates Std&#x27;;
              font-weight: 500;
              font-style: normal;
              src: local(&#x27;Postmates Std Medium&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-medium.woff) format(&#x27;woff&#x27;);
            }

            @font-face {
              font-family: &#x27;Postmates Std&#x27;;
              font-weight: 400;
              font-style: normal;
              src: local(&#x27;Postmates Std Regular&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-regular.woff) format(&#x27;woff&#x27;);
            }
        </style>
<style media="screen and (max-width: 680px)">
            @media screen and (max-width: 680px) {
                .page-center {
                  padding-left: 0 !important;
                  padding-right: 0 !important;
                }
                
                .footer-center {
                  padding-left: 20px !important;
                  padding-right: 20px !important;
                }
            }
        </style>
</head>
<body>
<table cellpadding="0" cellspacing="0" style="width: 100%; height: 100%; background-color: #f4f4f5; text-align: center;">
<tbody><tr>
<td style="text-align: center;">
<table align="center" cellpadding="0" cellspacing="0" id="body" style="background-color: #fff; width: 100%; max-width: 680px; height: 100%;">
<tbody><tr>
<td>
<table align="center" cellpadding="0" cellspacing="0" class="page-center" style="text-align: left; padding-bottom: 16px; width: 100%; padding-left: 103px; padding-right: 103px;">
<tbody><tr>
<td style="padding-top: 24px;">
<img src="https://pilisimas.com/recursos_smartup/smartup_powered.png" style="width: 200px;">
</td>
</tr>
<tr>
<td colspan="2" style="padding-top: 72px; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 48px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: -2.6px; line-height: 52px; mso-line-height-rule: exactly; text-decoration: none;">Gracias por tu compra</td>
</tr>
</tbody></table>
<table align="center" cellpadding="0" cellspacing="0" style="width: 100%;">
<tbody><tr>
<td style="padding-top: 24px; padding-bottom: 24px;">
<img src="https://pilisimas.com/recursos_smartup/background_smartup.png" style="width: 100%; height: 400px">
</td>
</tr>
</tbody></table>

<table align="center" cellpadding="0" cellspacing="0" class="page-center" style="text-align: left; padding-bottom: 72px; width: 100%; padding-left: 103px; padding-right: 103px">
<tbody><tr>
<td colspan="2">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="padding-top: 24px; max-width: 100px; padding-right: 24px">
<img src="https://pilisimas.com/recursos_smartup/logo_smartup.png" style="max-width: 88px; border-radius: 44px;">
</td>
<td style="padding-top: 24px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 18px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.48px; line-height: 32px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: middle; width: 100%;">
<span style="font-weight: 600">'.$nombres.'</span> se realizó un cobro en su tarjeta
                                          </td>
</tr>
</tbody></table>
</td>
</tr>
<tr>


<td colspan="2" style="padding-top: 48px; padding-bottom: 48px;">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="width: 100%; height: 1px; max-height: 1px; background-color: #E1E4EB"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="2" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 40px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: -1.78px; line-height: 40px; mso-line-height-rule: exactly; text-decoration: none;">$'.$monto.'</td>
</tr>

<tr>
<td colspan="2" style="padding-top: 48px; padding-bottom: 48px;">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="width: 100%; height: 1px; max-height: 1px; background-color: #E1E4EB"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody>
<tr>
<td style="padding-top: 10px; vertical-align: top"><img src="https://d1pgqke3goo8l6.cloudfront.net/KYzSiQPnSgSDHn2bv34U_Pin.png" style="max-width: 16px;"></td>
<td style="-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095A2; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.24px; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%; padding-top: 8px; min-width: 225px">
<span style="font-weight: 600; color: #000000;">SmartUp Law</span><br>
                                              Av. 10 de Agosto y Naciones Unidas<br>
                                              
                                              Quito - Ecuador, EC170532
                                            </td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>


<table align="center" cellpadding="0" cellspacing="0" class="page-center" style="text-align: left; padding-bottom: 72px; width: 100%; padding-left: 103px; padding-right: 103px">
<tbody><tr>
<td colspan="2">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="padding-top: 24px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 18px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.48px; line-height: 32px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: middle; width: 100%;">
<span style="font-weight: 600"></span> Información de Contacto <br>
<b>Nombre Completo: </b>'.$nombres.' <br>
<b>Email: </b>'.$email.' <br>
<b>Numero de telefono: </b>'.$tel.' <br>
<b>Nombre de la marca: </b>'.$nombreMarca.' <br>
<b>Clasificación de NIZA: </b>'.$niza.' <br>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>


<table cellpadding="0" cellspacing="0" style="text-align: center; width: 100%; background-color: #000000; padding: 40px; margin-bottom: 100px; max-width: 540px; margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td style="color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 32px; font-weight: 400; letter-spacing: 0; line-height: 35px; vertical-align: top; padding-bottom: 15px; text-align: center">Siguenos en Redes Sociales!</td>
</tr>
<tr>
<td style="color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 18px; font-weight: 400; letter-spacing: 0; line-height: 21px; vertical-align: top; padding-bottom: 30px; text-align: center"></td>
</tr>
<tr>
<td style="color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 72px; font-weight: 600; letter-spacing: 0; vertical-align: top; padding-bottom: 45px; text-transform: uppercase; word-break: break-all"></td>
</tr>

<tr>
<td style="vertical-align: top;">
<a href="https://www.facebook.com/Smartuplawecuador" style="display: block; background-color: #3B5998; width: 100%; max-width: 300px; color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 12px; font-weight: 600; letter-spacing: 0.7px; line-height: 56px; text-decoration: none; vertical-align: top; border-radius: 28px; text-transform: uppercase; text-align: center; margin-left: auto; margin-right: auto" universal="true" target="_blank">Facebook</a>
</td>
</tr>


<tr>
<td style="vertical-align: top;">
  <br><br>
<a href="https://www.instagram.com/smartuplaw/" style="display: block; background-color: #3f729b; width: 100%; max-width: 300px; color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 12px; font-weight: 600; letter-spacing: 0.7px; line-height: 56px; text-decoration: none; vertical-align: bottom; border-radius: 28px; text-transform: uppercase; text-align: center; margin-left: auto; margin-right: auto" universal="true" target="_blank">Instagram</a>
</td>
</tr>

<tr>
<td style="vertical-align: top;">
  <br><br>
<a href="https://twitter.com/smartupecuador" style="display: block; background-color: #00acee; width: 100%; max-width: 300px; color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 12px; font-weight: 600; letter-spacing: 0.7px; line-height: 56px; text-decoration: none; vertical-align: bottom; border-radius: 28px; text-transform: uppercase; text-align: center; margin-left: auto; margin-right: auto" universal="true" target="_blank">Twitter</a>
</td>
</tr>

<tr>
<td style="vertical-align: top;">
  <br><br>
<a href="https://www.linkedin.com/company/smartup-ecuador/" style="display: block; background-color: #0e76a8; width: 100%; max-width: 300px; color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 12px; font-weight: 600; letter-spacing: 0.7px; line-height: 56px; text-decoration: none; vertical-align: bottom; border-radius: 28px; text-transform: uppercase; text-align: center; margin-left: auto; margin-right: auto" universal="true" target="_blank">LinkedIn</a>
</td>
</tr>

</tbody>
</table>
</td>
</tr>
</tbody></table>
<table align="center" cellpadding="0" cellspacing="0" id="footer" style="background-color: #000; width: 100%; max-width: 680px; height: 100%;">
<tbody><tr>
<td>
<table align="center" cellpadding="0" cellspacing="0" class="footer-center" style="text-align: left; width: 100%; padding-left: 103px; padding-right: 103px;">
<tbody><tr>
<td colspan="2" style="padding-top: 72px; padding-bottom: 24px; width: 100%;">

<img src="https://pilisimas.com/recursos_smartup/logo_smartup_blanco.png" style="width: 200px; height: auto;">
</td>
</tr>
<tr>
<td colspan="2" style="padding-top: 24px; padding-bottom: 48px;">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="width: 100%; height: 1px; max-height: 1px; background-color: #EAECF2; opacity: 0.19"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td style="-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095A2; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: 0; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;">
                                          Si tienes alguna pregunta o duda puedes contactarnos en <a data-click-track-id="7157" href="https://smartup.com.ec" style="font-weight: 600; color: #fff" target="_blank">SmartUp Law</a>.
                                        </td>
</tr>
<tr>
<td style="height: 72px;"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>



</body>
';





$mg->messages()->send('mailing.pilisimas.com', [
  'from'    => 'SmartUp Law at Pilisimas <hola@mailing.pilisimas.com>',
  'to'      => $email,
  'bcc'     => 'cchacon@pilisimas.com',
  'subject' => 'Consumo en SmartUp Law - NO RESPONDER A ESTE CORREO ',
  'html'    => $html
]);
echo '<script type="text/javascript"> alert("Inscripción enviada con exito"); </script>';

?>

