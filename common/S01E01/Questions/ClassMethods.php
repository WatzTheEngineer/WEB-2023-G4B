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
        use S01E01\FirstClass;
        require "../Classes/FirstClass.php";

        echo "<a href='./ClassMethodQuestions/CapitalizeString.php'>Outputs a given string in capital letters, working with special characters (like 'èçì…').</a>";
        echo "<a href='./ClassMethodQuestions/EscapeHtml.php'>Escapes a given HTML string into their safe character equivalents.</a>";
        echo "<a href='./ClassMethodQuestions/ArrayToString.php'>Converts a given array as a string, all values being separated by ", ".</a>";
        echo "<a href='./ClassMethodQuestions/TestMailValidity.php'>Verifies that a given string is a correct email.</a>";
        echo "<a href='./ClassMethodQuestions/LastCaracter.php'>Returns the last character of a string parameter.</a>";
        echo "<a href='./ClassMethodQuestions/MergeTabs.php'>Merges two arrays given as parameters.</a>";
        echo "<a href='./ClassMethodQuestions/GetFileClassMethodName.php'>Returns an array containing the current file name, class name and method name.</a>";
        echo "<a href='./ClassMethodQuestions/InversChain.php'>Returns a reversed string (including special characters like 'èçì…') using an anonymous arrow function.</a>";
        echo "<a href='./ClassMethodQuestions/MergeStrings.php'>Merges an unknown number of string parameters into one merged string</a>";
        echo "<a href='./ClassMethodQuestions/TernaryCondition.php'>Returns if a given variable is empty using a ternary condition.</a>";
        echo "<a href='./ClassMethodQuestions/ReturnClassName.php'>Prints the current class name (with its full namespace) and then only its name using ::class.</a>";
        echo "<a href='./ClassMethodQuestions/ThrowException.php'>Throws an exception.</a>";
        echo "<a href='./ClassMethodQuestions/ReverseArray.php'>Returns an array of all the keys of a given array, sorted reverse (higher to lower).</a>";
        echo "<a href='./ClassMethodQuestions/PrintElemenWhereNotIn.php'>Takes two arrays as parameters, returns all cells from the first one that are not included in the second one.</a>";
        echo "<a href='./ClassMethodQuestions/ArrayMap.php'>Maps a function that tries to convert the case of each value of an array reference, if it is a string, with capital letter first, then all lowercase (title case).</a>";
        echo "<a href='./ClassMethodQuestions/LengthOrCountableElement.php'>Returns the length of a variable, array or string, or the return of a Countable class it if implements it (create one to check that it works).</a>";
    ?>
</body>
</html>