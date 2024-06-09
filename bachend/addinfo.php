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
    $note1 = $_POST["note1"];
    $note1_ann = $_POST["note1_ann"];
    $note2 = $_POST["note2"];
    $note2_ann = $_POST["note2_ann"];
    $note3 = $_POST["note3"];
    $note3_ann = $_POST["note3_ann"];
    $note4 = $_POST["note4"];
    $note4_ann = $_POST["note4_ann"];
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
    !empty($lieu_Nai_ar) ||!empty($date_naissance) ||!empty($situation_familiale) ||!empty($marie_prenom_fr) ||!empty($marie_prenom_ar) ||!empty($marie_nom_fr) ||!empty($marie_nom_ar) ||!empty($marie_cnie) ||!empty($marie_nbrenf) ||
    !empty($marie_enf_prenom_fr) ||!empty($marie_enf_prenom_ar) ||!empty($marie_enf_nom_fr) ||!empty($marie_enf_nom_ar) ||!empty($marie_enf_sex_fr) ||!empty($marie_enf_sex_ar) ||!empty($marie_enf_lieu_Nai_fr) ||!empty($marie_enf_lieu_Nai_ar) ||!empty($marie_enf_date_naissance) ||!empty($divorce_nbrenf1) ||
    !empty($divorce_enf_prenom_fr) ||!empty($divorce_enf_prenom_ar) ||!empty($divorce_enf_nom_fr) ||!empty($divorce_enf_nom_ar) ||!empty($divorce_enf_sexe_fr) ||!empty($divorce_enf_sexe_ar) ||!empty($divorce_enf_lieu_Nai_fr) ||!empty($divorce_enf_lieu_Nai_ar) ||!empty($divorce_enf_date_naissance) ||!empty($diplome) ||
    !empty($specialite) ||!empty($date_recrutement) ||!empty($grade_fr) ||!empty($grade_ar) ||!empty($echelle) ||!empty($date_echelle) ||!empty($echelon) ||!empty($date_echelon) ||!empty($indice) ||!empty($position) ||!empty($note1)||!empty($note1_ann) ||!empty($note2) ||!empty($note2_ann) ||!empty($note3) ||!empty($note3_ann)||!empty($note4) ||
    !empty($note4_ann) ||!empty($division_fr) ||!empty($division_ar) ||!empty($service_fr)||!empty($service_ar) ||!empty($bureau_fr) ||!empty($bureau_ar) ||!empty($date_affectation) ) {
        $sql = "INSERT INTO `etat_civil`(`CNIE`,`PPR`,`Prenom`,`Prenom_Ar`,`Nom`,`Nom_Ar`,`Sex`,`Sexe_Ar`,`Lieu_Nai`,`Lieu_Nai_Ar`,`Date_Nai`,`Situation_Fam`,`Diplome`,`Specialite`) VALUES ('$cnie','$ppr','$prenom','$prenom_ar','$nom','$nom_ar','$sexe','$sexe_ar','$lieu_Nai_fr','$lieu_Nai_ar','$date_naissance','$situation_familiale','$diplome','$specialite');";
        $sth = $cnx->query($sql);
        $sql1 = "INSERT INTO `etat_admin`(`Date_Recrut`,`Grade`,`Grade_Ar`,`Echelle`,`Date_Echelle`,`Echelon`,`Date_Echelon`,`Indice`,`Position`,`Note`,`Date_Note`,`PPR`) VALUES ('$date_recrutement','$grade_fr','$grade_ar','$echelle','$date_echelle','$echelon','$date_echelon','$indice','$position','$lieu_Nai_ar','$date_naissance','$situation_familiale','$diplome','$specialite');"
    }


}



?>