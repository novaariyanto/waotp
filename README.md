# whatsapp-gateway
Send whatsapp message with free number to send notifikasi 

## Installation
This project using composer.
```
$ composer require kejarkoding/whatsapp-gateway
```

## Usage
Send Message Text .
```php
<?php

require './vendor/autoload.php';

use Kejarkoding\WhatsappGateway\Whatsapp;

$config = [
    "client_key"=>"6dHL72Ty",
    "secret_key"=>"01rA9cifx33XnL7C"
];

$receiver = "62895361034833";
$message = "Hai Nova Ariyanto, masukkan kode verifikasi OTP : 612322 \n\n kode berlaku 2 menit.";

$whatsapp = new Whatsapp($config);

echo $whatsapp->sendMessage($receiver,$message);

```

## Get Config 
client key and secret key are required.
To get it we have to register at https://kejarkoding.com