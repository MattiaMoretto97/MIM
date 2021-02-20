<?php
include "autoload.php";
$cipher =   env('cipher');
$passphrase = env('passphrase');
$options = env('options');
$iv = openssl_random_pseudo_bytes(16);
print_r($iv) + "/n";
$pippoticripto = openssl_encrypt('pippo', $cipher,$passphrase,$options,$iv);
print_r($pippoticripto); + "/n";

$ivd = openssl_random_pseudo_bytes(16);
print_r($ivd) + "/n";
$pippotidecripto = openssl_decrypt ( $pippoticripto , $cipher,$passphrase , $options, $iv);

print_r($pippotidecripto);
?>