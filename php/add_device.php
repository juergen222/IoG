<?php

include('../smarty/libs/Smarty.class.php');
include ('../php/db_conn.php');


$smarty = new Smarty;

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