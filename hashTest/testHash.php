<?php
$algorithms=hash_algos();

foreach ($algorithms as $algo)
    echo $algo."\n";

$data="hello world!";
echo "Data: ".$data."\n";

$hash=hash("sha256",$data);

echo "Hash: ".$hash."\n";
?>

