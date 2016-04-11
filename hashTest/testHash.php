<?php
header("Content-type: text/plain");

$algorithms=hash_algos();

$data="hello world!";
echo "Data: ".$data."\n";

$key="myKey";
echo "Key: ".$key."\n";


foreach ($algorithms as $algo)
    {
    $hash=hash($algo,$data);
    echo "Hash (".$algo."): ".$hash."\n";

    $hmacHash=hash_hmac($algo,$data,$key);
    echo "Hash (".$algo."): ".$hmacHash."\n";

    }
?>

