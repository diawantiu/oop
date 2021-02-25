<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diawanti_tugas9</title>
</head>
<body>
    
    <?php

        class Animal
        {
            public $name;
            public $legs = 2;
            public $cold_blooded = "False";
        
            public function __construct($string)
            {
                $this->name = $string; 
            }
        }

    ?>
</body>
</html>