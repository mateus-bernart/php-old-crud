<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "1234");
define("DATABASE", "crud_operations");

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$connection) {
    die("Connection Failed");
}
