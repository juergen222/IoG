<?php
include('../smarty/libs/Smarty.class.php');
include ('../php/db_conn.php');

$smarty = new Smarty;

$idOfDevice = $_POST["deviceID"];
echo $idOfDevice;

if(isset($_POST["showData"]))
{
    $sql = "SELECT messwert.Wert, messwert.Date, messwert.StationID, messtation.name, messtation.comment, messtation.M_Id, parameter.Name, parameter.Einheit FROM messwert
                INNER JOIN messtation 
                ON messwert.StationID = messtation.M_Id
                INNER JOIN parameter
                ON messwert.Parameter_Id = parameter.P_Id
                WHERE messtation.M_Id ='" . $idOfDevice . "'
                ORDER BY messwert.Date DESC ";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $dboutput[] =$row;


        }
    }

    else {
        echo "No Device yet added";

    }

}

$smarty->assign('dboutput', $dboutput);
$smarty->display('../templates/view_data.tpl');




