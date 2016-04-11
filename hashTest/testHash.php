<?php
header("Content-type: text/plain");

$algorithms=hash_algos();

$data="hello world!";
echo "Data: ".$data."\n";

foreach ($algorithms as $algo)
    {
    $hash=hash($algo,$data);
    echo "Hash (".$algo."): ".$hash."\n";
    }
?>

