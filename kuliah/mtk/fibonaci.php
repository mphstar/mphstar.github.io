<?php

$n = 10;
// banyaknya jumlah hasil fibonaci

for ($i=1; $i < $n; $i++) { 
    echo fibonaci($i). ", ";
}

function fibonaci($n){
    if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return (fibonaci($n - 1) + fibonaci($n - 2));
    }
}

