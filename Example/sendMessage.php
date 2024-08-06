<?php 

require_once('../src/Whatsapp.php');

use Kejarkoding\WhatsappGateway\Whatsapp;

$config = [
    "client_key"=>"6dHL72Ty",
    "secret_key"=>"01rA9cifx33XnL7C"
];

$whatsapp = new Whatsapp($config);

$receiver = "62895361034833";
$otp_code = "123456";

$send = $whatsapp->sendMessage($receiver,$otp_code);
print_r($send);

?>