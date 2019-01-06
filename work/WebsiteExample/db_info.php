<?php
$db_server="localhost";
$db_user="root";
$db_name="contacts";
$db_pass="gue55me";

$db_conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
if ($db_conn->connect_error) {
    die("Connection failed: " . $db_conn->connect_error);
}
?>