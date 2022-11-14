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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonaci</title>
</head>
<body>
    
</body>
</html>