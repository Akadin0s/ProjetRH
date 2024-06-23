<?php
session_start();
if(isset($_POST["subm"])){
    //etat civil
    $cnie = $_POST["cnie"];
    $ppr = $_POST["ppr"];
    $prenom = $_POST["prenom"];
    $prenom_ar = $_POST["prenom_ar"];
    $nom = $_POST["nom"];
    $nom_ar = $_POST["nom_ar"];
    $sexe = $_POST["sexe"];
    $sexe_ar = $_POST["sexe_ar"];
    $lieu_Nai_fr = $_POST["lieu_Nai_fr"];
    $lieu_Nai_ar = $_POST["lieu_Nai_ar"];
    $date_naissance = $_POST["date_naissance"];
    $situation_familiale = $_POST["situation_familiale"];
    $marie_prenom_fr = $_POST["marie_prenom_fr"];
    $marie_prenom_ar = $_POST["marie_prenom_ar"];
    $marie_nom_fr = $_POST["marie_nom_fr"];
    $marie_nom_ar = $_POST["marie_nom_ar"];
    $marie_cnie = $_POST["marie_cnie"];
    $marie_nbrenf = $_POST["marie_nbrenf"];
    $marie_enf_prenom_fr = $_POST["marie_enf_prenom_fr"];
    $marie_enf_prenom_ar = $_POST["marie_enf_prenom_ar"];
    $marie_enf_nom_fr = $_POST["marie_enf_nom_fr"];
    $marie_enf_nom_ar = $_POST["marie_enf_nom_ar"];
    $marie_enf_sex_fr = $_POST["marie_enf_sex_fr"];
    $marie_enf_sex_ar = $_POST["marie_enf_sex_ar"];
    $marie_enf_lieu_Nai_fr = $_POST["marie_enf_lieu_Nai_fr"];
    $marie_enf_lieu_Nai_ar = $_POST["marie_enf_lieu_Nai_ar"];
    $marie_enf_date_naissance = $_POST["marie_enf_date_naissance"];
    $divorce_nbrenf1 = $_POST["divorce_nbrenf1"];
    $divorce_enf_prenom_fr = $_POST["divorce_enf_prenom_fr"];
    $divorce_enf_prenom_ar = $_POST["divorce_enf_prenom_ar"];
    $divorce_enf_nom_fr = $_POST["divorce_enf_nom_fr"];
    $divorce_enf_nom_ar = $_POST["divorce_enf_nom_ar"];
    $divorce_enf_sexe_fr = $_POST["divorce_enf_sexe_fr"];
    $divorce_enf_sexe_ar = $_POST["divorce_enf_sexe_ar"];
    $divorce_enf_lieu_Nai_fr = $_POST["divorce_enf_lieu_Nai_fr"];
    $divorce_enf_lieu_Nai_ar = $_POST["divorce_enf_lieu_Nai_ar"];
    $divorce_enf_date_naissance = $_POST["divorce_enf_date_naissance"];
    $diplome = $_POST["diplome"];
    $specialite = $_POST["specialite"];
    //etat administratif
    $date_recrutement = $_POST["date_recrutement"];
    $grade_fr = $_POST["grade_fr"];
    $grade_ar = $_POST["grade_ar"];
    $echelle = $_POST["echelle"];
    $date_echelle = $_POST["date_echelle"];
    $echelon = $_POST["echelon"];
    $date_echelon = $_POST["date_echelon"];
    $indice = $_POST["indice"];
    $position = $_POST["position"];
    $notes = $_POST["note"];
    $note_anns = $_POST["note_ann"];
    //fonction
    $division_fr = $_POST["division_fr"];
    $division_ar = $_POST["division_ar"];
    $service_fr = $_POST["service_fr"];
    $service_ar = $_POST["service_ar"];
    $bureau_fr = $_POST["bureau_fr"];
    $bureau_ar = $_POST["bureau_ar"];
    $date_affectation = $_POST["date_affectation"];

    
    require_once 'database_connect.inc.php';



    if (!empty($cnie) ||!empty($ppr) ||!empty($prenom) ||!empty($prenom_ar) ||!empty($nom) ||!empty($nom_ar) ||!empty($sexe) ||!empty($sexe_ar) ||!empty($lieu_Nai_fr) ||
    !empty($lieu_Nai_ar) ||!empty($date_naissance) ||!empty($situation_familiale) ||!empty($diplome) ||
    !empty($specialite) ||!empty($date_recrutement) ||!empty($grade_fr) ||!empty($grade_ar) ||!empty($echelle) ||!empty($date_echelle) ||!empty($echelon) ||
    !empty($date_echelon) ||!empty($indice) ||!empty($position) ||!empty($note)||!empty($note_ann) ||!empty($division_fr) ||!empty($division_ar) ||!empty($service_fr)||!empty($service_ar) ||
    !empty($bureau_fr) ||!empty($bureau_ar) ||!empty($date_affectation) ) {
        $sql = "INSERT INTO `etat_civil`(`CNIE`,`PPR`,`Prenom`,`Prenom_Ar`,`Nom`,`Nom_Ar`,`Sex`,`Sexe_Ar`,`Lieu_Nai`,`Lieu_Nai_Ar`,`Date_Nai`,`Situation_Fam`,`Diplome`,`Specialite`) VALUES ('$cnie','$ppr','$prenom','$prenom_ar','$nom','$nom_ar','$sexe','$sexe_ar','$lieu_Nai_fr','$lieu_Nai_ar','$date_naissance','$situation_familiale','$diplome','$specialite');";
        $sth = $cnx->query($sql);
        $sql1 = "INSERT INTO `etat_admin`(`Date_Recrut`,`Grade`,`Grade_Ar`,`Echelle`,`Date_Echelle`,`Echelon`,`Date_Echelon`,`Indice`,`Position`,`Note`,`Date_Note`,`PPR`) VALUES ('$date_recrutement','$grade_fr','$grade_ar','$echelle','$date_echelle','$echelon','$date_echelon','$indice','$position','$note','$Date_Note','$PPR');";
        $sth = $pdo->prepare($sql1);
        for ($i = 0; $i < count($note); $i++) {
            $sth->execute([
                'Date_Recrut' => $date_recrutement,
                'Grade' => $grade_fr,
                'Grade_Ar' => $grade_ar,
                'Echelle' => $echelle,
                'Date_Echelle' => $date_echelle,
                'Echelon' => $echelon,
                'Date_Echelon' => $date_echelon,
                'Indice' => $indice,
                'Position' => $position,
                'Note' => $note[$i],
                'Date_Note' => $note_ann[$i],
                'PPR' => $ppr
            ]);
        }
        $sql3 = "INSERT INTO `fonction`(`Division`,`Division_Ar`,`Service`,`Service_Ar`,`Bureau`,`Bureau_Ar`,`Date_affect`,`PPR`) VALUES ('$division_fr','$division_ar','$service_fr','$service_ar','$bureau_fr','$bureau_ar','$date_affectation');";
        $sth = $cnx ->query($sql3);
        if ($situation_familiale === 'marie') {
            $sql4 = "INSERT INTO `info_marie`(`CNIE`,`Prenom`,`Prenom_Ar`,`Nom`,`Nom_Ar`,`N_enfant`,`PPR_marie`) VALUES ('$marie_cnie','$marie_prenom_fr','$marie_prenom_ar','$marie_nom_fr','$marie_nom_ar','$marie_nbrenf');";
            $sth = $cnx->query($sql4);
        }
        if($situation_familiale ==='marie' && $marie_nbrenf >0){
            $sql5 = "INSERT INTO `info_enfant`(`Prenom`,`Prenom_Ar`,`Nom`,`Nom_Ar`,`Sexe`,`Sexe_Ar`,`Lieu_Nai`,`Lieu_Nai_Ar`,`Date_Nai`,`PPR`) VALUES ('$marie_enf_prenom_fr','$marie_enf_prenom_ar','$marie_enf_nom_fr','$marie_enf_nom_ar','$marie_enf_sex_fr','$marie_enf_sex_ar','$marie_enf_lieu_Nai_fr','$marie_enf_lieu_Nai_ar','$marie_enf_date_naissance','$ppr');";
            $sth = $cnx ->query($sql5);
        }
        else if($situation_familiale ==='divorce' && $divorce_nbrenf1 >0){
            $sql6 = "INSERT INTO `info_enfant`(`Prenom`,`Prenom_Ar`,`Nom`,`Nom_Ar`,`Sexe`,`Sexe_Ar`,`Lieu_Nai`,`Lieu_Nai_Ar`,`Date_Nai`,`PPR`) VALUES ('$divorce_enf_prenom_fr','$divorce_enf_prenom_ar','$divorce_enf_nom_fr','$divorce_enf_nom_ar','$divorce_enf_sex_fr','$divorce_enf_sex_ar','$divorce_enf_lieu_Nai_fr','$divorce_enf_lieu_Nai_ar','$divorce_enf_date_naissance','$ppr');";
            $sth = $cnx ->query($sql6);
        }
        
    }
    header("location: ../searchpage.php");
}



?>