<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Page</title>
    <link rel="stylesheet" href="../../../../css/style.css">
</head>
<body>
    <?php
        use S01E01\FirstClass;
        require "../../Classes/FirstClass.php";
        $x = new FirstClass(); //Créer un objet basé sur la classe FirstClass

        class CountableObject implements Countable {
            private $length;
            public function __construct($length = 0) {
                $this->length = $length;
            }
            public function count(): int {
                return $this->length;
            }
        }

        $num = 7;
        $str = "Hello world";
        $array = [1,2,3];
        $countableObject = new CountableObject(10);

        echo "Variable " . $num . " : " . $x->count($num) . "<br>" . "<br>";
        echo "Variable '" . $str . "' : " . $x->count($str) . "<br>" . "<br>";
        echo "Array : " . $x->count($array) . "<br>" . "<br>";
        echo "Countable object : " . $x->count($countableObject);

    ?>
</body>
</html>