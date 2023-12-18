<?php

require "SomeInterface.php";
require "SomeAbstractClass.php";

#inheritance from another class, abstract class, and implementing an interface
class SomeClass extends SomeAbstractClass implements SomeInterface {

    public const CONST = 5;
    public $classVariable = 15;

    public function copyGoogle(){
        $url = "http://www.google.com";
        $ficSortie = "../google_content.html";
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
        $textFont = '../police.ttf'; // Change the font path to the appropriate font on your system

        // Define the position to center the text
        $textX = $imageWidth / 2 - 120;
        $textY = $imageHeight / 2 + 20;

        // Add text to the image
        imagettftext($background, 18, 0, $textX, $textY, $textColor, $textFont, $text);

        // Save the image to disk
        $imagePath = 'output_image.jpg';
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
        echo "Mémoire utilisé : " . memory_get_usage() . "<br>";
        echo "Limite actuelle de la mémoire : " . ini_get('memory_limit') . "<br>";
    }
    public function isVowelSwitch($letter) {
        switch ($letter) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                echo "The letter $letter is a vowel.";
                break;
            default:
                echo "The letter $letter is a consonant.";
        }
    }

    public function whileLoop($number) {
        $i = 0;
        while ($i <= $number) {
            echo $i . "<br>";
            $i++;
            if ($i == 5) {
                break;
            }
        }
    }

    public function doLoop($array) {
        $i = 0;
        do {
            if ($array[$i] % 2 == 0) {
                $i++;
                continue;
            }
            echo $array[$i] . "<br>";
            $i++;
        } while ($i < count($array));
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

    public function connectDBWithPDOAndCreateTable($host, $dbname, $user, $password) {
        try {
            $dsn = "mysql:host=$host;dbname=$dbname";
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO PIECE VALUES (6, 'Poignee', 10, 7, 3).";
            $pdo->exec($sql);

            echo "Connexion et création de la table réussies!";
        } catch (PDOException $e) {
            die("Erreur: " . $e->getMessage());
        }
    }

    public function getType($param) {
        return gettype($param);
    }
}