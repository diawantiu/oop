<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diawanti_tugas9</title>
</head>
<body>
<h1>Soal Release 0 dan Release 1</h1>
    <?php

    require_once('animal.php');
    require_once('frog.php');
    require_once('ape.php');

    $object = new Animal("shaun");

    echo "Nama Hewan : $object->name <br>";
    echo "Jumlah Kaki : $object->legs <br>";
    echo "Hewan Berdarah Dingin: $object->cold_blooded <br><br>";
    
    $object2 = new Frog("buduk");

    echo "Nama Katak : $object2->name <br>";
    echo "Jumlah Kaki : $object2->legs <br>";
    echo "Melompat Hop Hop: $object2->hop_hop <br>";
    $object2->jump();
    
    $object3 = new Ape("kera sakti");
    echo"<br><br>";
    echo "Nama Ape : $object3->name <br>";
    echo "Jumlah Kaki : $object3->legs <br>";
    echo "Berteriak Auooo: $object3->auooo <br>";
    $object3->yell();
    ?>
</body>
</html>