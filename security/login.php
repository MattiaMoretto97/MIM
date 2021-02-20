<?php
include "autoload.php";
$cipher =   env('cipher');
$passphrase = env('passphrase');
$options = env('options');
$ivlen=openssl_cipher_iv_length($cipher);
$iv = openssl_random_pseudo_bytes($ivlen);
$pippoticripto = openssl_encrypt('pippo', $cipher,$passphrase,$options,$iv);
print_r($pippoticripto);

$pippotidecripto = openssl_decrypt ( $pippoticripto , $cipher,$passphrase , $options, $iv);
'<br>';
print_r($pippotidecripto);
?>