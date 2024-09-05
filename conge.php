<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Congee</title>
  <link rel="stylesheet" href="conge.css">
  <script>
function sendData(value) {
    console.log(value);
    
    // Create a form dynamically
    var form = document.createElement("form");
    form.method = "POST";
    form.action = ""; // Submits the form to the same page

    // Create an input element to hold the value
    var input = document.createElement("input");
    input.type = "hidden";
    input.name = "ppr"; // This should match the name expected in your PHP code
    input.value = value;

    // Append the input to the form
    form.appendChild(input);

    // Append the form to the body and submit it
    document.body.appendChild(form);
    form.submit();
}

// Add event listener to the input field
document.addEventListener("DOMContentLoaded", function() {
    var inputField = document.getElementById('ppr');
    inputField.addEventListener('input', function() {
        sendData(this.value); // Automatically send data when input changes
    });
});

  </script>
</head>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $PPR = $_POST["ppr"];


  require_once 'bachend/database_connect.inc.php';

  $sql = "SELECT `Prenom`, `Nom`, `Nbr_jrs_cong` FROM `etat_civil` WHERE `etat_civil`.`PPR` = '$PPR';";
  
  $sth = $cnx->query($sql);
  $res = $sth->fetchAll(PDO::FETCH_ASSOC);
  foreach ($res as $row) {
    $prenom = $row['Prenom'];
    $nom = $row['Nom'];
    $nbr = $row['Nbr_jrs_cong'];
    }
}
else{
  $prenom = '';
    $nom = '';
    $nbr = '';
    $PPR = '';
}
    
  ?>
  
<body>

  <!-- Navbar content -->
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" >Ressource Humaine</a>
      </div>
      <div>
      <a href="searchpage.php" class="navbar-brand1"> <i></i>Base de donnee</a>
      <a href="info.php" class="navbar-brand1"> <i></i>Ajoute de donnee</a>
      
      </div>
    </div>
  </nav>


    <div class="container">
    <form class="well form-horizontal " action="bachend/addcongee.php" method="post"  >
        <!-- Form Name -->
        <legend>
          <h2>CONGE</h2>
        </legend>
        <!-- CNIE PPR-->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">PPR</label>
              <div>
                <input name="ppr" id="ppr" placeholder="PPR" class="form-control" value="<?php echo $PPR;  ?>" type="text" required />
                <div id="response"></div>
              </div>
            </div>
            <div class="col-md-4 right">
              <label class="col-md-4 control-label">Nombre Jours</label>
              <div>
                <input name="nbr_jr" id="nbr_jr" placeholder="Nombre Jours" class="form-control" value="<?php echo $nbr;  ?>" type="text" required />
              </div>
            </div>
          </div>
        </div>

        <!-- First Nam-->

        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Prénom</label>
              <div>
                <input name="prenom" id="prenom" placeholder="Prénom" class="form-control" type="text" value="<?php echo $prenom;  ?>" />
              </div>
            </div>

            <div class="col-md-4 right">
              <label class="col-md-4 control-label">Nom</label>
              <div>
                <input name="nom" id="nom" placeholder="Nom" class="form-control" type="text" value="<?php echo $nom;  ?>" required />
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Date conge</label>
              <div>
                <input name="startDate" id="startDate" class="form-control" type="date"  onchange="updateLeaveCalculation()" required />
              </div>
            </div>

            <div class="col-md-4 right">
              <label class="col-md-4 control-label">Nombre de jours</label>
              <div>
                <input name="daysRequested" id="daysRequested" placeholder="Nombres de jours" class="form-control" type="text" oninput="updateLeaveCalculation()" required />
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
            <label for="endDate">Fin conge</label>
            <input type="date" id="endDate" class="form-control" name="endDate" readonly>
            </div>
            <div class="col-md-4 right">
              <label class="col-md-4 control-label">Nombre de jours qui reste</label>
              <div>
              <input type="text" id="remainingDays" value="0" class="form-control"name="remainingDays" readonly>
              </div>
            </div>
          </div>
        </div>
  <div class="form-group">
    <legend>
    <button type="submit" name="submit" class="btn1 btn-warning margin-top: 20px;">Confirmer</button>
    </legend>
  </div>
    </form>
   </div>
  <script src="conge.js"></script>


    </body>


</html>