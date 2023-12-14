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

    require "../../SomeClass.php";

    $class = new SomeClass();

    echo "host : ".$class->getRequestInfo()["host"] . "<br>";
    echo "server ip : ".$class->getRequestInfo()["server_ip"] . "<br>";
    echo "client ip : ".$class->getRequestInfo()["client_ip"] . "<br>";
    echo "request_method : ".$class->getRequestInfo()["request_method"] . "<br>";

    ?>
</body>
</html>