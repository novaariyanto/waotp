# whatsapp-gateway
Securing made easy!
This app initiates a One-time Password in Whatsapp using a free number.

# Installation
This project uses composer.
```
$ composer require kejarkoding/whatsapp-gateway
```

# Usage
To send messages:
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
Both client and secret keys are mandatory.
You could establish them by going to the following website https://kejarkoding.com
