<?php
include('../smarty/libs/Smarty.class.php');

$dbhost = "localhost";
$dbuser = "projekt";
$dbpasswd = "IOG";
$dbname = "beet_datenbank";

$smarty = new Smarty;
$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);
if ($mysqli->connect_errno) {
    // Ausgabe im Fehlerfall sollte verbessert werden :-(
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
/*$sql = "SELECT messwert.Wert, messwert.Date, messwert.StationID, messtation.name, messtation.comment, messtation.M_Id, parameter.Name, parameter.Einheit FROM messwert
                INNER JOIN messtation
                ON messwert.StationID = messtation.M_Id
                INNER JOIN parameter
                ON messwert.Parameter_Id = parameter.P_Id
                ORDER BY messwert.Date DESC ";*/

$sql = "SELECT name, comment, M_Id FROM messtation";
$result = $mysqli->query($sql);

if($result->num_rows >0){

    while($row = $result->fetch_assoc())
    {
        $dboutput[] =$row;

    }


}
else{
    // TODO Handle no devices
    echo "No Device yet added";
}
$smarty->assign('dboutput',$dboutput);
$smarty->display('../templates/devices.tpl');