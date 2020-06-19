<?php
echo "Test DB";
$serverName = "WIN-P3761AM5DC1\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array("Database" => "Parque", "UID" => "sa", "PWD" => "Aladino_09");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo "Connection established.<br />";
} else {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}
?>