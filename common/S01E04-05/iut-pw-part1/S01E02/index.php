<?php

$baseUrl = 'S01E02/Questions/';

#Question 1 : Change the PHP configuration so that it can take 8Mb of RAM per use, timeout at 60s, allow 50Mb of uploads and be in the "Europe/Paris" timezone. Check the configuration in CLI and in a webserver using phpinfo().

echo "<a href='{$baseUrl}q1.php'>Question 1 : Change the PHP configuration so that it can take 8Mb of RAM per use, timeout at 60s, allow 50Mb of uploads and be in the 'Europe/Paris' timezone. Check the configuration in CLI and in a webserver using phpinfo()</a><br>";

/*
Question 2 : PHP basics again, using PHP integrated server, create PHP scripts (with comments😏), called via HTTP (not via CLI), that:

Loads an object from another included file (and call it), with a:

- class constant (used)
- class variable (used)
- inheritance from another class, abstract class, and implementing an interface
- class method that sorts a table like S01E01 with full signature (types, return types, PHPDoc, etc.)
- class method that connects to your DB using PDO (use MySQL), creates a table, inserts some data into it, and then reads and returns it
- class method that creates a JPEG image representing a red circle and the word "I AM [your initials] & I LOVE PHP" over a blue background and saves it on disk
- class method that writes the contents of www.google.com into a file
- class method that outputs HTTP headers to redirect (HTTP 302) to another script (add a link to your script)
- class method that returns the type of an given, untyped parameter
- class method that returns an array containing the name of the current host, server and client IP, and request method
- class method that returns the currently passed HTTP GET value named test
- class method that returns the currently consumed RAM and the maximum RAM your script can use (PHP maximum, not the current one)
- class method that uses a switch() construct then a match() construct to tell if an input letter parameter is a vowel or consonant
- class method that uses a while() construct that is interrupted by a break keyword once it reaches a certain input integer number parameter after outputting all the looped numbers before
- class method that uses a do() construct that uses a continue keyword to print the numeric values of a given array that are odd
*/

echo "<a href='{$baseUrl}q2.php'>Question 2 : PHP basics again, using PHP integrated server, create PHP scripts (with comments😏), called via HTTP (not via CLI), that:</a><br>";

