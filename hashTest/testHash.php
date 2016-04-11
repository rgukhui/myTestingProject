<?php
$algorithms=hash_algos();

$data="hello world!";
echo "Data: ".$data."\n";

$hash=hash("sha256",$data);

echo "Hash: ".$hash."\n";
?>

