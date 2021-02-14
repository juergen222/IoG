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
    echo "<div class='row'>";
    while($row = $result->fetch_assoc())
    {

        echo "<div class='col-lg-4 col-md-4 col-sm-6 col-12 stationItem p-0 m-2'> ";


        echo "<h3 class='h3 m-0 p-0'> " .$row["name"]." <br> <span class='information'>".$row["M_Id"] . " </span> </h3>";


        echo  "<p>" .$row["comment"] . "</p";

       echo "<button  class='btn btn-dark' >";


        echo "</div> ";








    }
    echo "</div> ";

}
else{
    echo "No Device yet added";
}
$smarty->display('../templates/devices.tpl');