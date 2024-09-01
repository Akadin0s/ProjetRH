<?php

session_start();
if(isset($_POST["submit"])){
    $ppr = $_POST["ppr"];
    $startDate = $_POST["startDate"];
    $daysRequested = $_POST["daysRequested"];
    $endDate = $_POST["endDate"];
    $remainingDays = $_POST["remainingDays"];



require_once 'database_connect.inc.php';
if(!empty($ppr) ||!empty($startDate) ||!empty($endDate) ||!empty($daysRequested) ||!empty($remainingDays)){
    

            $sql1 = "INSERT INTO `conge`(`PPR`,`Nbr_jours`,`Date_conge`,`Fin_conge`,`Nbr_jrs_cong`) VALUES (`$ppr`,`$daysRequested`,`$startDate`,`$endDate`,`$remainingDays`);";
            $sth = $cnx->query($sql1);
            if($sth){
                $sql3 ="UPDATE `etat_admin` SET `Nbr_jrs_cong`= `$remainingDays` WHERE `PPR`=`$ppr`;";
                $sth = $cnx->query($sql3);
            }

                                
    
}

}

?>