<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diawanti_tugas9</title>
</head>
<body>
    <h1></h1>
    <?php

    require_once('animal.php');

    class Frog extends Animal{
        
        public $name;
        public $legs = 4;
        public $hop_hop = "True";

        public function __construct($string)
        {
            $this->name = $string; 
        }

        public function jump()
        {
            echo "Frog Jump Hop Hop";
        }
    }
    ?>
</body>
</html>