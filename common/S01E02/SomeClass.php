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

    public function generateImage() {

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
        $textFont = '../../Util/police.ttf'; // Change the font path to the appropriate font on your system

        // Define the position to center the text
        $textX = $imageWidth / 2 - 120;
        $textY = $imageHeight / 2 + 20;

        // Add text to the image
        imagettftext($background, 18, 0, $textX, $textY, $textColor, $textFont, $text);

        // Save the image to disk
        $imagePath = '../../Generated/output_image.jpg';
        imagejpeg($background, $imagePath);

        // Output the image to the browser
        header('Content-Type: image/jpeg');
        imagejpeg($background);

        // Free up memory
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
            $pdo = new PDO('mysql:host=localhost; dbname=testSAE', 'root', 'root');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM PIECE";
            $pdo->exec($sql);

            echo "Connexion et sélection de la table réussies!";
            echo $pdo;
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