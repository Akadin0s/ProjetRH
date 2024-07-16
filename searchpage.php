<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="stylesheet" href="searchpage.css" />
</head>

<body>
  <!-- Navbar content -->
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Ressource Humaine</a>

        <div class="d-flex" role="search">
          <input class="form-control me-2" id="search" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" id="btsearch" type="submit">
            Search
          </button>
        </div>
      </div>
    </div>
  </nav>

  <section class="content-info hidd">
    <div class="notselect">
      <h2>Etat Civil:</h2>
      <label>
        <input type="checkbox" value="N°PPR" class="headerCheckbox" align="text-center" />
        N°PPR
      </label>
      <label>
        <input type="checkbox" value="N°CNIE" class="headerCheckbox" />
        N°CNIE
      </label>
      <label>
        <input type="checkbox" value="Prenom" class="headerCheckbox" />
        Prenom
      </label>
      <label>
        <input type="checkbox" value="الاسم" class="headerCheckbox" />
        الاسم
      </label>
      <label>
        <input type="checkbox" value="Nom" class="headerCheckbox" />
        Nom
      </label>
      <label>
        <input type="checkbox" value="الاسم العائلي" class="headerCheckbox" />
        الاسم العائلي
      </label>
      <label>
        <input type="checkbox" value="Sex" class="headerCheckbox" />
        Sex
      </label>
      <label>
        <input type="checkbox" value="الجنس" class="headerCheckbox" />
        الجنس
      </label>
      <label>
        <input type="checkbox" value="Lieu Naissance" class="headerCheckbox" />
        Lieu Naissance
      </label>
      <label>
        <input type="checkbox" value="Date Naissance" class="headerCheckbox" />
        Date Naissance
      </label>
      <label>
        <input type="checkbox" value="Situation Familiale" class="headerCheckbox" />
        Situation Familiale
      </label>
      <label>
        <input type="checkbox" value="Diplome" class="headerCheckbox" />
        Diplome
      </label>
      <label>
        <input type="checkbox" value="Specialite" class="headerCheckbox" />
        Specialite
      </label>
    </div>
    <div class="notselect">
      <h2>Etat Administratif:</h2>
      <label>
        <input type="checkbox" value="Date Recrutement" class="headerCheckbox" />
        Date Recrutement
      </label>
      <label>
        <input type="checkbox" value="Grade" class="headerCheckbox" />
        Grade
      </label>
      <label>
        <input type="checkbox" value="Grade Ar" class="headerCheckbox" />
        Grade Ar
      </label>
      <label>
        <input type="checkbox" value="Echelle" class="headerCheckbox" />
        Echelle
      </label>
      <label>
        <input type="checkbox" value="Date Echelle" class="headerCheckbox" />
        Date Echelle
      </label>
      <label>
        <input type="checkbox" value="Echelon" class="headerCheckbox" />
        Echelon
      </label>
      <label>
        <input type="checkbox" value="Date Echelon" class="headerCheckbox" />
        Date Echelon
      </label>
      <label>
        <input type="checkbox" value="Indice" class="headerCheckbox" />
        Indice
      </label>
      <label>
        <input type="checkbox" value="Position" class="headerCheckbox" />
        Position
      </label>
      <label>
        <input type="checkbox" value="Note" class="headerCheckbox" />
        Note
      </label>
      <label>
        <input type="checkbox" value="Date Note" class="headerCheckbox" />
        Date Note
      </label>
    </div>
    <div class="notselect">
      <h2>Fonction:</h2>
      <label>
        <input type="checkbox" value="Division" class="headerCheckbox" />
        Division
      </label>
      <label>
        <input type="checkbox" value="Division Ar" class="headerCheckbox" />
        Division Ar
      </label>
      <label>
        <input type="checkbox" value="Service" class="headerCheckbox" />
        Service
      </label>
      <label>
        <input type="checkbox" value="Service Ar" class="headerCheckbox" />
        Service Ar
      </label>
      <label>
        <input type="checkbox" value="Bureau" class="headerCheckbox" />
        Bureau
      </label>
      <label>
        <input type="checkbox" value="Bureau Ar" class="headerCheckbox" />
        Bureau Ar
      </label>
      <label>
        <input type="checkbox" value="Date Affectation" class="headerCheckbox" />
        Date Affectation
      </label>
    </div>

    <div>
      <div class="col-lg-12">
        <table id="data" class="table-striped table-responsive table-hover result-point ">
          <thead class="point-table-head">
            <tr>
              <th>N°PPR</th>
              <th>N°CNIE</th>
              <th>Prenom</th>
              <th>الاسم</th>
              <th>Nom</th>
              <th>الاسم العائلي</th>
              <th>Sex</th>
              <th>الجنس</th>
              <th>Lieu Naissance</th>
              <th>Date Naissance</th>
              <th>Situation Familiale</th>
              <th>Diplome</th>
              <th>Specialite</th>
              <th>Date Recrutement</th>
              <th>Grade</th>
              <th>Grade Ar</th>
              <th>Echelle</th>
              <th>Date Echelle</th>
              <th>Echelon</th>
              <th>Date Echelon</th>
              <th>Indice</th>
              <th>Position</th>
              <th>Note</th>
              <th>Date Note</th>
              <th>Division</th>
              <th>Division Ar</th>
              <th>Service</th>
              <th>Service Ar</th>
              <th>Bureau</th>
              <th>Bureau Ar</th>
              <th>Date Affectation</th>
            </tr>
          </thead>
          <tbody class="text-center">
      <?php
       try {
          require_once 'bachend/database_connect.inc.php';
      // SQL queries to retrieve data from your tables
      $sql1 = " SELECT `etat_civil`.*, `etat_admin`.*, `fonction`.*
    FROM `etat_civil`
    INNER JOIN `etat_admin` ON `etat_civil`.PPR = `etat_admin`.PPR
    INNER JOIN `fonction` ON `etat_civil`.PPR = `fonction`.PPR 
      ";


      // Execute queries
      $stmt1 = $cnx->query($sql1);
      $stmt1->execute();
      $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

      // Check if there are results and output data in HTML table rows
      foreach ($result1 as $row) {
              echo "<tr>";
              echo "<td>" . $row["PPR"] . "</td>"; 
              echo "<td>" . $row["CNIE"] . "</td>";
              echo "<td>" . $row["Prenom"] . "</td>";
              echo "<td>" . $row["Prenom_Ar"] . "</td>";
              echo "<td>" . $row["Nom"] . "</td>";
              echo "<td>" . $row["Nom_Ar"] . "</td>";
              echo "<td>" . $row["Sex"] . "</td>";
              echo "<td>" . $row["Sexe_Ar"] . "</td>";
              echo "<td>" . $row["Lieu_Nai"] . "</td>";
              echo "<td>" . $row["Date_Nai"] . "</td>";
              echo "<td>" . $row["Situation_Fam"] . "</td>";
              echo "<td>" . $row["Diplome"] . "</td>";
              echo "<td>" . $row["Specialite"] . "</td>";

              echo "<td>" . $row["Date_Recrut"] . "</td>";
              echo "<td>" . $row["Grade"] . "</td>";
              echo "<td>" . $row["Grade_Ar"] . "</td>";
              echo "<td>" . $row["Echelle"] . "</td>";
              echo "<td>" . $row["Date_Echelle"] . "</td>";
              echo "<td>" . $row["Echelon"] . "</td>";
              echo "<td>" . $row["Date_Echelon"] . "</td>";
              echo "<td>" . $row["Indice"] . "</td>";
              echo "<td>" . $row["Position"] . "</td>";
              echo "<td>" . $row["Note"] . "</td>";
              echo "<td>" . $row["Date_Note"] . "</td>";
             


              echo "<td>" . $row["Division"] . "</td>";
              echo "<td>" . $row["Division_Ar"] . "</td>";
              echo "<td>" . $row["Service"] . "</td>";
              echo "<td>" . $row["Service_Ar"] . "</td>";
              echo "<td>" . $row["Bureau"] . "</td>";
              echo "<td>" . $row["Bureau_Ar"] . "</td>";
              echo "<td>" . $row["Date_affect"] . "</td>";        
              echo "</tr>";

          }


        }
        catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
      // Close connection
      $cnx = null;
      ?>
    </tbody>

        </table>
      </div>
    </div>
    <div>
      <button id="downbutton" class="btn btn-success mt-2">
        Télecharger l'excel
      </button>
    </div>
  </section>
  <script src="searchpage.js"></script>

  <script src="table2excel.js"></script>
</body>

</html>