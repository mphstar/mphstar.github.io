<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 100%;
            height: 500px;
            padding: 0;
            margin: 50px auto;
    
        }

        .column {
            align-items: center;
            margin: auto;
            display: flex;
            flex-direction: column;
            width: fit-content;
            justify-content: center;
            border-radius: 20px;
            background-color: rgb(233, 233, 233);
            width: 150px;

        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .segitiga {
            text-align: center;
        }

        .nilai {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            $sum = 0;
            for ($b = 1; $b < 10; $b++) {

            ?>
                <div class="column">
                    <p class=""><?php $star = $b;
                        for ($a = $star; $a > 0; $a--) {
                            for ($i = 1; $i <= $a; $i++) {
                                echo "&nbsp";
                            }
                            for ($a1 = $star; $a1 >= $a; $a1--) {
                                echo "*";
                            }
                            echo "<br>";
                        } ?></p>

                    <p class="nilai"><?php
                        // mulai dari 0
                        $sum = $sum + $b;
                        echo $sum . ", ";
                        ?></p>

                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>

<?php


// $sum = 0;
// // mulai dari 0

// for ($i = 1; $i < 20; $i++) {

//     $sum = $sum + $i;
//     echo $sum . ", ";
// }
// terdapat perulangan dengan nilai i awal = 1
// pada perulangan tersebut terdapat penjumlahan sum + i
// maka prosesnya akan menjadi seperti dibawah
// 0 + 1 = 1
// 1 + 2 = 3
// 3 + 3 = 6
// 6 + 4 = 10
// 10 + 5 = 15
// dan seterusnya
