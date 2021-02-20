<?php
$cipher="aes-256-cbc-hmac-sha256";
$passphrase = 'ciao';
$options = 0;
$ivlen = openssl_cipher_iv_length($cipher);
$iv = openssl_random_pseudo_bytes($ivlen);
$pippoticripto = openssl_encrypt('pippo', $cipher,$passphrase,$options,$iv);
print_r($pippoticripto);

$pippotidecripto = openssl_decrypt ( $pippoticripto , $cipher,$passphrase , $options, $iv);
'<br>';
print_r($pippotidecripto);
?>