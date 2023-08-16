<?php

$unstructured = fopen("unstructured.txt", "r");

while($line = fgets($unstructured)){
    print_r(explode("#",$line));
    echo copy()
}

?>