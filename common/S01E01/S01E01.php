<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Page</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        echo "<a href='./Utilitaries/foo.txt'>open file foo.txt</a>";
        echo "<a href='./Questions/ModifyFile.php'>Opens a file, writes at the end of it, closes it.</a>";
        echo "<a href='./Questions/CreateAndSortArray.php'>Creates an array of 1000 random elements and sorts it by descending key, then by descending value.</a>";
        echo "<a href='./Questions/DemonstrateOperator.php'>Demonstrates the operators: =, ==, ===, ++, --, <=>, ||, &&, &, |, ??, ?:, ? :</a>";
        echo "<a href='./Questions/ConstructDemonstrations.php'>Uses the following constructs: foreach, for, if elseif, while, do, a?b:c</a>";
        echo "<a href='./Questions/ClassMethods.php'>Defines a class with multiple methods</a>";
    ?>
</body>
</html>