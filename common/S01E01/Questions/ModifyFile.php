
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Page</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
    <?php

        // On ouvre le fichier en écriture en mode ajout (a)
        $nom_fichier = "../Utilitaries/foo.txt";
        $fichier = fopen($nom_fichier, 'ab+') or die("Ouverture de $nom_fichier impossible");
    
        // On choisit le texte à écrire dans le fichier
        $text = "Bonjour monde !\n";
    
        // On écrit dans le fichier
        fwrite($fichier, $text);
    
        // On ferme le fichier
        fclose($fichier);
    
        echo "Une ligne a été ajoutée dans le fichier $nom_fichier <br>";
    
    ?>
</body>
</html>