<?php
include('../smarty/libs/Smarty.class.php');
include ('../php/db_conn.php');

$smarty = new Smarty;
session_start();
/*$sql = "SELECT messwert.Wert, messwert.Date, messwert.StationID, messtation.name, messtation.comment, messtation.M_Id, parameter.Name, parameter.Einheit FROM messwert
                INNER JOIN messtation
                ON messwert.StationID = messtation.M_Id
                INNER JOIN parameter
                ON messwert.Parameter_Id = parameter.P_Id
                ORDER BY messwert.Date DESC ";*/

$sql = "SELECT ms_name, ms_comment, ms_id FROM messtation";
$result = $mysqli->query($sql);

if($result->num_rows >0){
    //TODO Alle Daten ausgeben
    while($row = $result->fetch_assoc())
    {
        $dboutput[] =$row;
        $sqlData=" SELECT messwert.mw_wert, messwert.mw_zeit, messwert.mw_msfk,  parameter.pa_name, parameter.pa_einheit From messwert
        INNER JOIN messtation
        ON messwert.mw_msfk = " .$row["ms_id"].
        "
        INNER JOIN parameter
        ON messwert.mw_pafk = parameter.pa_id
        WHERE messtation.ms_id ='".$row["ms_id"]."'
        AND parameter.pa_name='Bodenfeuchtigkeit'
        ORDER BY messwert.mw_zeit DESC
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


    $error ="No Data yet received";
    $smarty->assign('error',$error);

$smarty->assign('dboutput',$dboutput);
$smarty->assign('dboutputData',$dboutputData);

$smarty->display('../templates/devices.tpl');