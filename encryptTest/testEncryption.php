<?php
$data="hello world!";
$method="aes";
$password="my password";

$cipherText=openssl_encrypt($data,$method,$password);

echo "Data: ".$data."\n";
echo "Password: ".$password."\n";
echo "Cipher text: ".$cipherText."\n";

$decryptedText=openssl_decrypt($cipherText,"aes",$password);
echo "Decrypted text: ".$decryptedText."\n";


?>

