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
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Hidden brand</a>

          <div class="d-flex" role="search">
            <input
              class="form-control me-2"
              id="search"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
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
          <input
            type="checkbox"
            value="N°PPR"
            class="headerCheckbox"
            align="text-center"
          />
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
          <input
            type="checkbox"
            value="Lieu Naissance"
            class="headerCheckbox"
          />
          Lieu Naissance
        </label>
        <label>
          <input type="checkbox" value="مكان الإزدياد" class="headerCheckbox" />
          مكان الإزدياد
        </label>
        <label>
          <input
            type="checkbox"
            value="Date Naissance"
            class="headerCheckbox"
          />
          Date Naissance
        </label>
        <label>
          <input
            type="checkbox"
            value="Situation Familiale"
            class="headerCheckbox"
          />
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
          <input
            type="checkbox"
            value="Date Recrutement"
            class="headerCheckbox"
          />
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
          <input
            type="checkbox"
            value="Date Affectation"
            class="headerCheckbox"
          />
          Date Affectation
        </label>
      </div>

      <div>
        <div class="col-lg-12">
          <table
            id="data"
            class="table-striped table-responsive table-hover result-point hidden"
          >
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
                <th>مكان الإزدياد</th>
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
            <tr>
                <td>1</td>
                <td>12345</td>
                <td>John</td>
                <td>محمد</td>
                <td>Doe</td>
                <td>الدو</td>
                <td>M</td>
                <td>ذكر</td>
                <td>Paris</td>
                <td>باريس</td>
                <td>1985-05-15</td>
                <td>Married</td>
                <td>Bachelor</td>
                <td>Computer Science</td>
                <td>2010-07-01</td>
                <td>Senior</td>
                <td>كبير</td>
                <td>A1</td>
                <td>2015-06-01</td>
                <td>B2</td>
                <td>2020-01-01</td>
                <td>10</td>
                <td>Manager</td>
                <td>9.5</td>
                <td>2021-05-01</td>
                <td>IT</td>
                <td>تقنية المعلومات</td>
                <td>Support</td>
                <td>دعم</td>
                <td>Main Office</td>
                <td>المكتب الرئيسي</td>
                <td>2023-01-01</td>
            </tr>
            <tr>
                <td>2</td>
                <td>67890</td>
                <td>Jane</td>
                <td>سارة</td>
                <td>Smith</td>
                <td>سميث</td>
                <td>F</td>
                <td>أنثى</td>
                <td>London</td>
                <td>لندن</td>
                <td>1990-11-30</td>
                <td>Single</td>
                <td>Master</td>
                <td>Business</td>
                <td>2012-09-15</td>
                <td>Junior</td>
                <td>صغير</td>
                <td>B1</td>
                <td>2016-12-01</td>
                <td>A2</td>
                <td>2021-03-15</td>
                <td>8</td>
                <td>Analyst</td>
                <td>8.7</td>
                <td>2022-08-01</td>
                <td>Finance</td>
                <td>المالية</td>
                <td>Audit</td>
                <td>تدقيق</td>
                <td>Branch Office</td>
                <td>فرع المكتب</td>
                <td>2024-02-01</td>
            </tr>
            <tr>
                <td>3</td>
                <td>54321</td>
                <td>Ali</td>
                <td>علي</td>
                <td>Ahmed</td>
                <td>أحمد</td>
                <td>M</td>
                <td>ذكر</td>
                <td>Cairo</td>
                <td>القاهرة</td>
                <td>1988-02-20</td>
                <td>Married</td>
                <td>PhD</td>
                <td>Physics</td>
                <td>2015-04-10</td>
                <td>Lead</td>
                <td>رائد</td>
                <td>C1</td>
                <td>2018-10-01</td>
                <td>D2</td>
                <td>2022-04-10</td>
                <td>12</td>
                <td>Director</td>
                <td>9.8</td>
                <td>2023-09-01</td>
                <td>R&D</td>
                <td>البحث والتطوير</td>
                <td>Development</td>
                <td>تطوير</td>
                <td>HQ</td>
                <td>المقر الرئيسي</td>
                <td>2025-06-01</td>
            </tr>
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
