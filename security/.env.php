<?php
  $variables = [
    'cipher'=>"aes-256-cbc-hmac-sha256",
    'passphrase' => 'bella lì',
    'options' => 0,
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>