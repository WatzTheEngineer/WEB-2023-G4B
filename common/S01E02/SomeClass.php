<?php

require "SomeInterface.php";
require "SomeAbstractClass.php";

#inheritance from another class, abstract class, and implementing an interface
class SomeClass extends SomeAbstractClass implements SomeInterface {

    public const CONST = 5;
    public $classVariable = 15;

    public function copyGoogle(){
        $url = "http://www.google.com";
        $ficSortie = "../../Generated/google_content.html";
        try {
            $contenuePage = file_get_contents($url);
            if ($contenuePage !== false) {
                file_put_contents($ficSortie, $contenuePage);
            } else {
                echo "Erreur";
            }
        } catch (Exception $e) {
            echo "Erreur: " . $e->getMessage();
        }
    }

    public function generateImage($police, $imagePath) {

        //in the php.ini file uncomment extension:gd
        //dowload an police name police.ttl in the folder
        $imageWidth = 400;
        $imageHeight = 200;

        $background = imagecreatetruecolor($imageWidth, $imageHeight);
        $blue = imagecolorallocate($background, 0, 0, 255);
        imagefill($background, 0, 0, $blue);

        // Add a red circle
        $red = imagecolorallocate($background, 255, 0, 0);
        $circleRadius = 50;
        $circleX = $imageWidth / 2;
        $circleY = $imageHeight / 2;
        imagefilledellipse($background, $circleX, $circleY, $circleRadius * 2, $circleRadius * 2, $red);

        // Add text
        $textColor = imagecolorallocate($background, 255, 255, 255);
        $text = "I LOVE PHP AND 3.01 PW";

        // Define the position to center the text
        $textX = $imageWidth / 2 - 120;
        $textY = $imageHeight / 2 + 20;

        // Add text to the image
        imagettftext($background, 18, 0, $textX, $textY, $textColor, $police, $text);

        // Save the image to disk
        imagejpeg($background, $imagePath);

        // Output the image to the browser
        echo "<img style='display: block;-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;' src=" . $imagePath . ">";
        echo "<br>This image was saved on the disk";

        imagedestroy($background);
    }

    public function getRequestInfo() {

        //$info = [$_SERVER['HTTP_HOST'], $_SERVER['SERVER_ADDR'], $_SERVER['REMOTE_ADDR'], $_SERVER['REQUEST_METHOD']];
        $info = array(
            'host' => isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null,
            'server_ip' => isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : null,
            'client_ip' => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null,
            'request_method' => isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null
        );

        return $info;
    }


    public function getMemory() {
        $result = array(
            'memory_used' => memory_get_usage(),
            'memory_limit' => ini_get('memory_limit')
        );
        return $result;
    }

    public function isVowelSwitch($letter) {
        switch ($letter) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                return true;
            default:
                return false;
        }
    }

    public function whileLoop($number) {

        $word = "";
        $i = 0;

        while (true) {
            $word = $word . $i . "<br>";
            $i++;
            if ($i >= $number) break;
        }

        return $word;
    }

    public function doLoop($array) {

        $result = "";
        $i = 0;

        do {
            if ($array[$i] % 2 == 0) {
                $i++;
                continue;
            }
            $result = $result . $array[$i] . "<br>";
            $i++;
        } while ($i < count($array));

        return $result;
    }

    public function afficherHeader($url) {
        header("Location: $url", true, 302);
        print "ici";
        exit;
    }

    public function getTest() {
        if (isset($_GET['test'])) {
            return $_GET['test'];
        }
        return 'null';
    }

    public function connectDBWithPDOAndCreateTable() {
        try {
            $pdo = new PDO('mysql:host=localhost; dbname=testSAE;charset=utf8;port=3306', 'root', 'root', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
            ]);

            $sql = "DROP TABLE IF EXISTS PIECE";
            $statement = $pdo->query($sql);

            $sql = "CREATE TABLE IF NOT EXISTS PIECE(
                idPiece INT NOT NULL PRIMARY KEY,
                nomPiece VARCHAR(15) NOT NULL,
                poidTotal INT NOT NULL,
                poidSansCarotte INT NOT NULL,
                poidCarotte INT NOT NULL
            )";
            $statement = $pdo->query($sql);

            echo "Table crée<br>";

            $sql = "INSERT INTO PIECE VALUES (1, 'Prise', 5, 3, 2), (2, 'Interrupteur', 6, 4, 2), (3, 'Poussoir', 7,4,3), (4, 'Disjoncteur', 8,5,3), (5, 'Detecteur', 10,5,5)";
            $statement = $pdo->query($sql);

            echo "Valeurs insérées<br>";

            $sql = "SELECT * FROM PIECE";
            $statement = $pdo->query($sql);

            echo "Selection des valeurs faite<br>";

            $result = "";

            // Fetch and print the results
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $result = $result . "Piece ID: " . $row['idPiece'] . ", Name: " . $row['nomPiece'] . "<br>";
            }

        return $result;

        } catch (PDOException $e) {
            die("Erreur: " . $e->getMessage());
        }
    }

    public function getType($param) {
        return gettype($param);
    }

    function sortTable(array $table, string $column, string $order) : array {

        // Sorting logic here
        usort($table, function ($a, $b) use ($column, $order) {
            if ($column === 'age') {
                if ($order === 'asc') {
                    return $a[$column] <=> $b[$column];
                } else if ($order === 'desc') {
                    return $b[$column] <=> $a[$column];
                } else {
                    throw new InvalidArgumentException('Invalid sort order');
                }
            } else {
                throw new InvalidArgumentException('Invalid column');
            }
        });

        return $table;
    }
}

