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
    //TODO Alle Daten ausgeben
    while($row = $result->fetch_assoc())
    {
        $dboutput[] =$row;
        $sqlData=" SELECT messwert.Wert, messwert.Date, messwert.StationID,  parameter.Name, parameter.Einheit From messwert
        INNER JOIN messtation
        ON messwert.StationID = " .$row["M_Id"].
        "
        INNER JOIN parameter
        ON messwert.Parameter_Id = parameter.P_Id
        WHERE messtation.M_Id ='".$row["M_Id"]."'
        AND parameter.Name='Bodenfeuchtigkeit'
        ORDER BY messwert.Date DESC
        LIMIT 1
        ";

        $resultData = $mysqli->query($sqlData);

        if ($resultData != null)
        $dboutputData[] = $resultData->fetch_assoc();

    }




}
else{
    // TODO Handle no devices
    echo "No Device yet added";
}







    session_start();
    $_SESSION['name'] = $dboutput["name"];



    $error ="No Data yet received";
    $smarty->assign('error',$error);

$smarty->assign('dboutput',$dboutput);
$smarty->assign('dboutputData',$dboutputData);

$smarty->display('../templates/devices.tpl');