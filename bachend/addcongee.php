<?php

if(isset($_POST["submit"])){
    $ppr = $_POST["ppr"];
    $startDate = $_POST["startDate"];
    $daysRequested = $_POST["daysRequested"];
    $endDate = $_POST["endDate"];
    $remainingDays = $_POST["remainingDays"];



require_once 'database_connect.inc.php';
if(!empty($ppr) ||!empty($startDate) ||!empty($endDate) ||!empty($daysRequested) ||!empty($remainingDays)){
    

            $sql1 = "INSERT INTO `conge` (`PPR`, `Nbr_jours`, `Date_conge`, `Fin_conge`, `Nbr_jrs_cong`) VALUES ('$ppr', '$daysRequested', '$startDate', '$endDate', '$remainingDays');";
            $sth = $cnx->query($sql1);
            echo "yes bebe";
            if($sth){
                $sql3 ="UPDATE `etat_civil` SET `Nbr_jrs_cong`= '$remainingDays' WHERE `PPR`='$ppr';";
                $sth = $cnx->query($sql3);
            }

                                
            header("location: ../conge.php");
}
else{
    echo "anta 7imaron";
}
}

?>