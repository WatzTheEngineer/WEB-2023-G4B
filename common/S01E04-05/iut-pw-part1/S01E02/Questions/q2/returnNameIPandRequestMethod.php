<?php

require "../../SomeClass.php";

$class = new SomeClass();

echo "host : ".$class->getRequestInfo()["host"] . "<br>";
echo "server ip : ".$class->getRequestInfo()["server_ip"] . "<br>";
echo "client ip : ".$class->getRequestInfo()["client_ip"] . "<br>";
echo "request_method : ".$class->getRequestInfo()["request_method"] . "<br>";