<?php
include('../smarty/libs/Smarty.class.php');

$smarty = new Smarty;
session_start();

$dbhost = "localhost";
$dbuser = "projekt";
$dbpasswd = "IOG";
$dbname = "beet_datenbank";

$name = $_SESSION['name'];
$mysqli = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);
if ($mysqli->connect_errno) {
    // Ausgabe im Fehlerfall sollte verbessert werden :-(
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$sql = "SELECT messwert.Wert, messwert.Date, messwert.StationID, messtation.name, messtation.comment, messtation.M_Id, parameter.Name, parameter.Einheit FROM messwert
                INNER JOIN messtation 
                ON messwert.StationID = messtation.M_Id
                INNER JOIN parameter
                ON messwert.Parameter_Id = parameter.P_Id
                ORDER BY messwert.Date DESC ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {


       // echo "<h3 class='h3 m-0 p-0'> " . $row["name"] . " <span class='information'>" . $row["M_Id"] . " </span> </h3>";






       /* echo "<p>" . $row["comment"] . "</p";
        echo "<div class='container'>";
        echo "<div class='row'> ";
        echo "<div class='col-lg-3 col-md-3 col-sm-6 col-12'> ";
        echo "<p>" . $row["Name"] . ": " . $row["Wert"] . " " . $row["Einheit"] . "</p>";
        echo "</div> ";

        echo "<div class='col-lg-3 col-md-3 col-sm-6 col-12'> ";
        echo "<p>" . $row["Date"] . "</p>";
        echo "</div> ";


        echo "</div> ";
        echo "<hr>";*/



    }



} else {
    echo "No Device yet added";

}
$smarty->assign("dbname", $name);
$smarty->display('../templates/view_data.tpl');




