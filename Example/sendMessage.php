<?php 

require_once('../src/Whatsapp.php');

use Kejarkoding\WhatsappGateway\Whatsapp;

$config = [
    "client_key"=>"6dHL72Ty",
    "secret_key"=>"01rA9cifx33XnL7C"
];

$whatsapp = new Whatsapp($config);

$send = $whatsapp->sendMessage("0895361034833","hello admin");
print_r($send);

?>