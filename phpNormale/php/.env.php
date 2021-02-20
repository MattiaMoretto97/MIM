<?php
  
  $variables = [
    'cipher'=>"aes-256-cbc-hmac-sha256",
    'passphrase' => 'ciao',
    'options' => 0,
    'iv' => 'porcaputtanaculo'
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>