<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "AC4a31215dd678e20fb7396ba4fd083f5f";
$token  = "d34286666cd6093b3f3ba321fba994dd";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("+15558675310", // to
                           array(
                               "body" => "This is the ship that made the Kessel Run in fourteen parsecs?",
                               "from" => "+15017122661"
                           )
                  );

print($message->sid);