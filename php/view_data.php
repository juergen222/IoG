<?php
include('../smarty/libs/Smarty.class.php');
include ('../php/db_conn.php');

$smarty = new Smarty;

$idOfDevice = $_POST["deviceID"];
$selectedType = "Temperatur";
if(isset($_POST["dataType"]))
{
    $selectedType = $_POST["dataType"];
}

//SELECT `Wert`,`Date` FROM `messwert` WHERE StationID = '7' AND Parameter_Id = 1 AND Date BETWEEN '2021/02/24 11:30:00' AND NOW()
if(isset($_POST["showData"])|| isset($_POST["reloadBtn"]))
{


    $sqlParameter = "SELECT pa_id FROM `parameter`";

    $parameter = $mysqli->query($sqlParameter);

    for($i = 1; $i<$parameter->num_rows + 1; $i++)
    {
        $sqlNewData =   "SELECT `mw_wert`, `mw_zeit`, parameter.pa_name, parameter.pa_einheit FROM `messwert`
                         INNER JOIN `parameter`
                         ON mw_pafk = parameter.pa_id
                         WHERE mw_msfk = '". $idOfDevice ."'
                         AND mw_pafk = ". $i ."
                         ORDER BY mw_zeit DESC LIMIT 1";

        $newDataResult = $mysqli->query($sqlNewData);
        if($newDataResult->num_rows > 0) {
            $newData[] = $newDataResult->fetch_assoc();
        }
        //TODO keine leeren Cards
    }

    $sqlDiagramData = "SELECT mw_wert, mw_zeit, parameter.pa_einheit, parameter.pa_name FROM messwert
                        INNER JOIN parameter ON mw_pafk = parameter.pa_id
                        WHERE parameter.pa_name = '". $selectedType ."' 
                        AND mw_msfk = '". $idOfDevice ."'";

    $diagramDataRes= $mysqli->query($sqlDiagramData);
    if($diagramDataRes->num_rows > 0){
        while ($diagramDataRow = $diagramDataRes->fetch_assoc()){
            $diagramData[]=$diagramDataRow;
        }
    }



    /*$sql = "SELECT messwert.Wert, messwert.Date, messwert.StationID, messtation.name, messtation.M_Id,  parameter.Name, parameter.Einheit
            count(*) AS c 
            FROM messwert
           WHERE messwert.StationID = " . $idOfDevice .  "
            INNER JOIN parameter  
            ON messwert.Parameter_Id = parameter.P_Id
            INNER JOIN messtation
            ON messwert.StationID = messtation.M_ID
            GROUP BY messwert.Date HAVING c>1
    
            ORDER BY messwert.Date DESC
";


    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $dbname = $row["name"];
            $dboutput[] =$row;


        }
    }

    else {
        echo "No Device yet added";

    }*/

}
if(isset($newData))
{
    $smarty->assign('newData', $newData);

}
$smarty->assign("diagramData", $diagramData);


//$smarty->assign('dbname', $dbname);
//$smarty->assign('dboutput', $dboutput);
$smarty->assign('idOfDevice', $idOfDevice);
$smarty->display('../templates/view_data.tpl');




