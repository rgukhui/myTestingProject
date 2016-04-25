<?php
header("Content-type: text/plain");

$algorithms=openssl_get_cipher_methods();

$data="hello world!";

$password="my password";

foreach ($algorithms as $algo)
    {
    $cipherText=openssl_encrypt($data,$algo,$password);
    echo "Algorithm: ".$algo."\n";
    echo "Data: ".$data."\n";
    echo "Password: ".$password."\n";
    echo "Cipher text: ".$cipherText."\n";

    $decryptedText=openssl_decrypt($cipherText,$algo,$password);
    echo "Decrypted text: ".$decryptedText."\n\n";

    }

?>

