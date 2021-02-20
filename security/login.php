<?php
$ivlen = openssl_cipher_iv_length($cipher="aes-256-cbc-hmac-sha256");
$iv = openssl_random_pseudo_bytes($ivlen);
$pippoticripto = openssl_encrypt('pippo', 'aes-256-cbc-hmac-sha256','ciao',0,$iv);
print_r($pippoticripto);
?>