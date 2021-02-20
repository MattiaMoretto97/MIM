<?php
  $variables = [
    'cipher'=>"aes-256-cbc-hmac-sha256",
    $cipher = "aes-256-cbc-hmac-sha256",
    'passphrase' => 'ciao',
    'options' => 0,
    $ivlen=openssl_cipher_iv_length($cipher),
    $iv = openssl_random_pseudo_bytes($ivlen),
    'iv' => $iv,
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>