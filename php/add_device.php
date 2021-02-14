<?php

include('../smarty/libs/Smarty.class.php');

$smarty = new Smarty;

$dbhost = "localhost";
$dbuser = "projekt";
$dbpasswd = "IOG";
$dbname = "beet_datenbank";

$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

if ($mysqli->connect_errno) {
    // Ausgabe im Fehlerfall sollte verbessert werden :-(
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if(isset($_POST['submitbtn']) && !empty($_POST["name"]) && !empty($_POST["deviceId"])  )
{
    $name = $_POST["name"];
    $Comment = $_POST["comment"];
    $deviceId = $_POST["deviceId"];

    $sql = "INSERT INTO messtation (M_Id, name, comment ) VALUES ('$deviceId', '$name','$Comment')";

    if ($mysqli->query($sql) === TRUE) {



    } else {
        /*echo "Error: " . $sql . "<br>" . $mysqli->error;*/
        echo "<br><p class='careful'>Error Data couldnt be inserted <br>";
        if (!empty($name) || !empty($deviceID))
        {
            echo "The required values, mustn't be empty </p>";
        }
    }
    $name = NULL;
}
else{

    if(isset($name)){
        $warning = "<p class='careful'>A name must be entered</p>";
        echo $warning;

    }

}

$smarty->display('../templates/add_devices.tpl');