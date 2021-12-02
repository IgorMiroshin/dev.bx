<?php
$database = mysqli_init();
function connectSQL($host, $dbname, $dbuser, $dbpassword)
{
    global $database;
    $connectionResult = mysqli_real_connect(
        $database,
        $host,
        $dbuser,
        $dbpassword,
        $dbname
    );

    if (!$connectionResult) {
        $error = mysqli_connect_errno() . ": " . mysqli_connect_error();
        return trigger_error($error, E_USER_ERROR);
    }

    return $connectionResult;
}

function setEncondingConnectDB()
{
    global $database;
    $result = mysqli_set_charset($database, 'utf8');
    if (!$result) {
        return trigger_error(mysqli_error($database), E_USER_ERROR);
    }
    return $result;
}