<?php

$baseUrl = 'q2/';

#class constant (used)
echo "<a href='{$baseUrl}classConstant.php'>class constant (used)</a><br>";

#class variable (used)
echo "<a href='{$baseUrl}classVariable.php'>class variable (used)</a><br>";

#class method that sorts a table like S01E01 with full signature (types, return types, PHPDoc, etc.)
echo "<a href='{$baseUrl}sortTableWithFullSignature.php'>class method that sorts a table like S01E01 with full signature (types, return types, PHPDoc, etc.)</a><br>";

#class method that connects to your DB using PDO (use MySQL), creates a table, inserts some data into it, and then reads and returns it
echo "<a href='{$baseUrl}connectToDB.php'>class method that connects to your DB using PDO (use MySQL), creates a table, inserts some data into it, and then reads and returns it</a><br>";

#class method that creates a JPEG image representing a red circle and the word "I AM [your initials] & I LOVE PHP" over a blue background and saves it on disk
echo "<a href='{$baseUrl}generateImage.php'>class method that creates a JPEG image representing a red circle and the word 'I AM [your initials] & I LOVE PHP' over a blue background and saves it on disk</a><br>";

#class method that writes the contents of www.google.com into a file
echo "<a href='{$baseUrl}writeGoogleContent.php'>class method that writes the contents of www.google.com into a file</a><br>";

#class method that outputs HTTP headers to redirect (HTTP 302) to another script (add a link to your script)
echo "<a href='{$baseUrl}outputHeaders.php'>class method that outputs HTTP headers to redirect (HTTP 302) to another script (add a link to your script)</a><br>";

#class method that returns the type of an given, untyped parameter
echo "<a href='{$baseUrl}returnType.php'>class method that returns the type of an given, untyped parameter </a><br>";

#class method that returns an array containing the name of the current host, server and client IP, and request method
echo "<a href='{$baseUrl}returnNameIPandRequestMethod.php'>class method that returns an array containing the name of the current host, server and client IP, and request method</a><br>";

#class method that returns the currently passed HTTP GET value named test
echo "<a href='{$baseUrl}httpGetValue.php?test=MyOwnTestValue'>class method that returns the currently passed HTTP GET value named test</a><br>";

#class method that returns the currently consumed RAM and the maximum RAM your script can use (PHP maximum, not the current one)
echo "<a href='{$baseUrl}ramMaxMin.php'>class method that returns the currently consumed RAM and the maximum RAM your script can use (PHP maximum, not the current one)</a><br>";

#class method that uses a switch() construct then a match() construct to tell if an input letter parameter is a vowel or consonant
echo "<a href='{$baseUrl}switch.php'>class method that uses a switch() construct then a match() construct to tell if an input letter parameter is a vowel or consonant</a><br>";

#class method that uses a while() construct that is interrupted by a break keyword once it reaches a certain input integer number parameter after outputting all the looped numbers before
echo "<a href='{$baseUrl}while.php'>class method that uses a while() construct that is interrupted by a break keyword once it reaches a certain input integer number parameter after outputting all the looped numbers before</a><br>";

#class method that uses a do() construct that uses a continue keyword to print the numeric values of a given array that are odd
echo "<a href='{$baseUrl}do.php'>class method that uses a do() construct that uses a continue keyword to print the numeric values of a given array that are odd</a><br>";