<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="info.css" />
</head>

<body>
  <!-- Navbar content -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Ressource Humaine</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <form class="well form-horizontal " action="bachend/addinfo.php" method="post" id="contact_form " onsubmit="return validateForm()">
      <fieldset>
        <!-- Form Name -->
        <legend>
          <h2>ETAT CIVIL</h2>
        </legend>
        <!-- CNIE PPR-->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">N°CNIE</label>
              <div>
                <input name="cnie" id="cnie" placeholder="N°CNIE" class="form-control" type="text" required />
              </div>
            </div>
            <div class="col-md-4 right">
              <label class="col-md-4 control-label">N°PPR</label>
              <div>
                <input name="ppr" id="ppr" placeholder="N°PPR" class="form-control" type="text" required />
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
                <input name="prenom" id="prenom" placeholder="Prénom" class="form-control" type="text" required />
              </div>
            </div>

            <div class="col-md-4 right">
              <label1 class="col-md-4 control-label">الاسم</label1>
              <div>
                <input name="prenom_ar" id="prenom_ar" placeholder="الاسم" class="form-control right" type="text" required />
              </div>
            </div>
          </div>
        </div>

        <!--Second Nam -->

        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Nom</label>
              <div>
                <input name="nom" id="nom" placeholder="Nom" class="form-control" type="text" required />
              </div>
            </div>
            <div class="col-md-4 right">
              <label1 class="col-md-4 control-label">الاسم العائلي</label1>
              <div>
                <input name="nom_ar" id="nom_ar" placeholder="الاسم العائلي" class="form-control right" type="text" required />
              </div>
            </div>
          </div>
        </div>

        <!-- Gender -->
        <div class="form-group">
          <div class="form1-group">           
            <div class="col-md-4">
                  <label class="col-md-4 control-label">Sexe</label>
                  <select name="sexe" class="formc1 selectpicker" id="sexe">
                    <option value="">Sexe</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="col-md-4 right">
                  <label class="col-md-4 control-label">الجنس</label>
                  <select name="sexe_ar" class="formc1 selectpicker" id="sexe_ar">
                    <option value="">الجنس</option>
                    <option value="ذكر">ذكر</option>
                    <option value="أنثى">أنثى</option>
                  </select>
                </div>
          </div>
        </div>

        <!-- Birth place -->

        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Lieu de Naissance</label>
              <div>
                <select name="lieu_Nai_fr" class="formc1 selectpicker" required>
                  <option value=" ">Lieu de Naisssance</option>
                  <option value="Afourar">Afourar</option>
                  <option value="Agadir">Agadir</option>
                  <option value="Aghbala">Aghbala</option>
                  <option value="Aghbalou">Aghbalou</option>
                  <option value="Agdz">Agdz</option>
                  <option value="Agouraï">Agouraï</option>
                  <option value="Aguelmous">Aguelmous</option>
                  <option value="Ahfir">Ahfir</option>
                  <option value="Aïn Leuh">Aïn Leuh</option>
                  <option value="Aïn Bni Mathar">Aïn Bni Mathar</option>
                  <option value="Ain Cheggag">Ain Cheggag</option>
                  <option value="Aïn Dorij">Aïn Dorij</option>
                  <option value="Aïn El Aouda">Aïn El Aouda</option>
                  <option value="Aïn Erreggada">Aïn Erreggada</option>
                  <option value="Aïn Harrouda">Aïn Harrouda</option>
                  <option value="Aïn Jemaa">Aïn Jemaa</option>
                  <option value="Aïn Karma">Aïn Karma</option>
                  <option value="Aïn Taoujdate">Aïn Taoujdate</option>
                  <option value="Aït Iaaza">Aït Iaaza</option>
                  <option value="Aït Baha">Aït Baha</option>
                  <option value="Aït Boubidmane">Aït Boubidmane</option>
                  <option value="Aït Daoud">Aït Daoud</option>
                  <option value="Aït Ishaq">Aït Ishaq</option>
                  <option value="Aït Melloul">Aït Melloul</option>
                  <option value="Aït Ourir">Aït Ourir</option>
                  <option value="Akka">Akka</option>
                  <option value="Aklim">Aklim</option>
                  <option value="Aknoul">Aknoul</option>
                  <option value="Ajdir">Ajdir</option>
                  <option value="Ajdir">Ajdir</option>
                  <option value="Al Aaroui">Al Aaroui</option>
                  <option value="Al Hoceïma">Al Hoceïma</option>
                  <option value="Alnif">Alnif</option>
                  <option value="Amalou Ighriben">Amalou Ighriben</option>
                  <option value="Amizmiz">Amizmiz</option>
                  <option value="Aoufous">Aoufous</option>
                  <option value="Aoulouz">Aoulouz</option>
                  <option value="Aourir">Aourir</option>
                  <option value="Arbaoua">Arbaoua</option>
                  <option value="Arfoud">Arfoud</option>
                  <option value="Assa">Assa</option>
                  <option value="Assahrij">Assahrij</option>
                  <option value="Assilah">Assilah</option>
                  <option value="Azemmour">Azemmour</option>
                  <option value="Azilal">Azilal</option>
                  <option value="Azrou">Azrou</option>
                  <option value="Bab Berred">Bab Berred</option>
                  <option value="Bab Taza">Bab Taza</option>
                  <option value="Bejaad">Bejaad</option>
                  <option value="Ben Ahmed">Ben Ahmed</option>
                  <option value="Ben Guerir">Ben Guerir</option>
                  <option value="Ben Taïeb">Ben Taïeb</option>
                  <option value="Ben Yakhlef">Ben Yakhlef</option>
                  <option value="Beni Mellal">Beni Mellal</option>
                  <option value="Ben Slimane">Ben Slimane</option>
                  <option value="Berkane">Berkane</option>
                  <option value="Berrechid">Berrechid</option>
                  <option value="Bhalil">Bhalil</option>
                  <option value="Biougra">Biougra</option>
                  <option value="Bni Ansar">Bni Ansar</option>
                  <option value="Bni Bouayach">Bni Bouayach</option>
                  <option value="Bni Chiker">Bni Chiker</option>
                  <option value="Bni Drar">Bni Drar</option>
                  <option value="Bni Hadifa">Bni Hadifa</option>
                  <option value="Bni Tadjite">Bni Tadjite</option>
                  <option value="Bouanane">Bouanane</option>
                  <option value="Bouarfa">Bouarfa</option>
                  <option value="Boudnib">Boudnib</option>
                  <option value="Bouguedra">Bouguedra</option>
                  <option value="Bouhdila">Bouhdila</option>
                  <option value="Bouizakarne">Bouizakarne</option>
                  <option value="Boujdour">Boujdour</option>
                  <option value="Boujniba">Boujniba</option>
                  <option value="Boulanouare">Boulanouare</option>
                  <option value="Boulemane">Boulemane</option>
                  <option value="Boumalne Dadès">Boumalne Dadès</option>
                  <option value="Boumia">Boumia</option>
                  <option value="Bouskoura">Bouskoura</option>
                  <option value="Bouznika">Bouznika</option>
                  <option value="Bouzthate">Bouzthate</option>
                  <option value="Bradia">Bradia</option>
                  <option value="Brikcha">Brikcha</option>
                  <option value="Bzou">Bzou</option>
                  <option value="Casablanca">Casablanca</option>
                  <option value="Chefchaouen">Chefchaouen</option>
                  <option value="Chichaoua">Chichaoua</option>
                  <option value="Dakhla">Dakhla</option>
                  <option value="Dar Bni Karrich">Dar Bni Karrich</option>
                  <option value="Dar Chaoui">Dar Chaoui</option>
                  <option value="Dar El Kebdani">Dar El Kebdani</option>
                  <option value="Dar Gueddari">Dar Gueddari</option>
                  <option value="Dar Ould Zidouh">Dar Ould Zidouh</option>
                  <option value="Dcheïra El Jihadia">
                    Dcheïra El Jihadia
                  </option>
                  <option value="Debdou">Debdou</option>
                  <option value="Demnate">Demnate</option>
                  <option value="Deroua">Deroua</option>
                  <option value="Drargua">Drargua</option>
                  <option value="Driouch">Driouch</option>
                  <option value="Echemmaia">Echemmaia</option>
                  <option value="El Aïoun Sidi Mellouk">
                    El Aïoun Sidi Mellouk
                  </option>
                  <option value="El Borouj">El Borouj</option>
                  <option value="El Gara">El Gara</option>
                  <option value="El Hajeb">El Hajeb</option>
                  <option value="El Hanchane">El Hanchane</option>
                  <option value="El Jadida">El Jadida</option>
                  <option value="El Kbab">El Kbab</option>
                  <option value="El Kelaa des Mgouna">
                    El Kelaa des Mgouna
                  </option>
                  <option value="El Kelaa des Sraghna">
                    El Kelaa des Sraghna
                  </option>
                  <option value="El Ksiba">El Ksiba</option>
                  <option value="El Mansouria">El Mansouria</option>
                  <option value="El Marsa">El Marsa</option>
                  <option value="El Menzel">El Menzel</option>
                  <option value="El Ouatia">El Ouatia</option>
                  <option value="Erfoud">Erfoud</option>
                  <option value="Errachidia">Errachidia</option>
                  <option value="Er-Rich">Er-Rich</option>
                  <option value="Essaouira">Essaouira</option>
                  <option value="Es-Semara">Es-Semara</option>
                  <option value="Fam El Hisn">Fam El Hisn</option>
                  <option value="Farkhana">Farkhana</option>
                  <option value="Fès">Fès</option>
                  <option value="Figuig">Figuig</option>
                  <option value="Fnideq">Fnideq</option>
                  <option value="Foum Jamaa">Foum Jamaa</option>
                  <option value="Foum Zguid">Foum Zguid</option>
                  <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                  <option value="Ghafsaï">Ghafsaï</option>
                  <option value="Ghmate">Ghmate</option>
                  <option value="Goulmima">Goulmima</option>
                  <option value="Gourrama">Gourrama</option>
                  <option value="Guelmim">Guelmim</option>
                  <option value="Guercif">Guercif</option>
                  <option value="Gueznaïa">Gueznaïa</option>
                  <option value="Guigou">Guigou</option>
                  <option value="Guisser">Guisser</option>
                  <option value="Had Bouhssoussen">Had Bouhssoussen</option>
                  <option value="Had Kourt">Had Kourt</option>
                  <option value="Had Oued Ifrane">Had Oued Ifrane</option>
                  <option value="Haj Kaddour">Haj Kaddour</option>
                  <option value="Hattane">Hattane</option>
                  <option value="Houara">Houara</option>
                  <option value="Ifrane Atlas Saghir">
                    Ifrane Atlas Saghir
                  </option>
                  <option value="Ifrane">Ifrane</option>
                  <option value="Ighoud">Ighoud</option>
                  <option value="Ihddaden">Ihddaden</option>
                  <option value="Imintanoute">Imintanoute</option>
                  <option value="Imouzzer Kandar">Imouzzer Kandar</option>
                  <option value="Imouzzer Marmoucha">
                    Imouzzer Marmoucha
                  </option>








                  <option value="Imzouren">Imzouren</option>
                  <option value="Inezgane">Inezgane</option>
                  <option value="Irherm">Irherm</option>
                  <option value="Issaguen">Issaguen</option>
                  <option value="Itzer">Itzer</option>
                  <option value="Jaadar">Jaadar</option>
                  <option value="Jamaat Shaim">Jamaat Shaim</option>
                  <option value="Jebha">Jebha</option>
                  <option value="Jerada">Jerada</option>
                  <option value="Jorf">Jorf</option>
                  <option value="Jorf El Melha">Jorf El Melha</option>
                  <option value="Kalaat M`Gouna">Kalaat M`Gouna</option>
                  <option value="Karia">Karia</option>
                  <option value="Karia">Karia</option>
                  <option value="Karia Ba Mohamed">Karia Ba Mohamed</option>
                  <option value="Kariat Arekmane">Kariat Arekmane</option>
                  <option value="Kasba Tadla">Kasba Tadla</option>
                  <option value="Kassita">Kassita</option>
                  <option value="Kattara">Kattara</option>
                  <option value="Kehf Nsour">Kehf Nsour</option>
                  <option value="Kénitra">Kénitra</option>
                  <option value="Kerouna">Kerouna</option>
                  <option value="Kerrouchen">Kerrouchen</option>
                  <option value="Khémis Sahel">Khémis Sahel</option>
                  <option value="Khémisset">Khémisset</option>
                  <option value="Khénifra">Khénifra</option>
                  <option value="Khénichet">Khénichet</option>
                  <option value="Khouribga">Khouribga</option>
                  <option value="Ksar El Kébir">Ksar El Kébir</option>
                  <option value="Laâounate">Laâounate</option>
                  <option value="Laakarta">Laakarta</option>
                  <option value="Laattaouia">Laattaouia</option>
                  <option value="Laayoune">Laayoune</option>
                  <option value="Lagouira">Lagouira</option>
                  <option value="Lakhsas">Lakhsas</option>
                  <option value="Lahraouyine">Lahraouyine</option>
                  <option value="Lalla Mimouna">Lalla Mimouna</option>
                  <option value="Lalla Takarkoust">Lalla Takarkoust</option>
                  <option value="Larache">Larache</option>
                  <option value="Lakouablia">Lakouablia</option>
                  <option value="Lbir Jdid">Lbir Jdid</option>
                  <option value="Loualidia">Loualidia</option>
                  <option value="Loulad">Loulad</option>
                  <option value="Lqliaa">Lqliaa</option>
                  <option value="Maaziz">Maaziz</option>
                  <option value="Madagh">Madagh</option>
                  <option value="Marrakech">Marrakech</option>
                  <option value="Martil">Martil</option>
                  <option value="Massa">Massa</option>
                  <option value="Matmata">Matmata</option>
                  <option value="M`Diq">M`Diq</option>
                  <option value="Médiouna">Médiouna</option>
                  <option value="Mechra Bel Ksiri">Mechra Bel Ksiri</option>
                  <option value="Mehdya">Mehdya</option>
                  <option value="Meknès">Meknès</option>
                  <option value="M`Haya">M`Haya</option>
                  <option value="Midar">Midar</option>
                  <option value="Midelt">Midelt</option>
                  <option value="Missour">Missour</option>
                  <option value="Mohammédia">Mohammédia</option>
                  <option value="Moqrisset">Moqrisset</option>
                  <option value="Moulay Abdallah">Moulay Abdallah</option>
                  <option value="Moulay Ali Chérif">Moulay Ali Chérif</option>
                  <option value="Moulay Bouazza">Moulay Bouazza</option>
                  <option value="Moulay Bousselham">Moulay Bousselham</option>
                  <option value="Moulay Brahim">Moulay Brahim</option>
                  <option value="Moulay Driss Zerhoun">
                    Moulay Driss Zerhoun
                  </option>
                  <option value="M`Rirt">M`Rirt</option>
                  <option value="Nador">Nador</option>
                  <option value="Naïma">Naïma</option>
                  <option value="Nouaceur">Nouaceur</option>
                  <option value="Oualidia">Oualidia</option>
                  <option value="Ouaouizeght">Ouaouizeght</option>
                  <option value="Ouarzazate">Ouarzazate</option>
                  <option value="Oued Amlil">Oued Amlil</option>
                  <option value="Oued Heïmer">Oued Heïmer</option>
                  <option value="Oued Laou">Oued Laou</option>
                  <option value="Oued Zem">Oued Zem</option>
                  <option value="Ouezzane">Ouezzane</option>
                  <option value="Ouislane">Ouislane</option>
                  <option value="Oujda">Oujda</option>
                  <option value="Oulad Abbou">Oulad Abbou</option>
                  <option value="Oulad Amrane">Oulad Amrane</option>
                  <option value="Oulad Ayad">Oulad Ayad</option>
                  <option value="Oulad Berhil">Oulad Berhil</option>
                  <option value="Oulad Frej">Oulad Frej</option>
                  <option value="Oulad Ghadbane">Oulad Ghadbane</option>
                  <option value="Oulad H`Riz Sahel">Oulad H`Riz Sahel</option>
                  <option value="Oulad M`Barek">Oulad M`Barek</option>
                  <option value="Oulad Mrah">Oulad Mrah</option>
                  <option value="Oulad Saïd">Oulad Saïd</option>
                  <option value="Oulad Tayeb">Oulad Tayeb</option>
                  <option value="Oulad Teïma">Oulad Teïma</option>
                  <option value="Oulad Yaïch">Oulad Yaïch</option>
                  <option value="Oulad Zbaïr">Oulad Zbaïr</option>
                  <option value="Oulmès">Oulmès</option>
                  <option value="Oum El Guerdane">Oum El Guerdane</option>
                  <option value="Ounagha">Ounagha</option>
                  <option value="Outat El Haj">Outat El Haj</option>
                  <option value="Rabat">Rabat</option>
                  <option value="Ras El Aïn">Ras El Aïn</option>
                  <option value="Ras El Ma">Ras El Ma</option>
                  <option value="Ribate El Kheïr">Ribate El Kheïr</option>
                  <option value="Rissani">Rissani</option>
                  <option value="Rommani">Rommani</option>
                  <option value="Sabaa Aiyoun">Sabaa Aiyoun</option>
                  <option value="Safi">Safi</option>
                  <option value="Saïdia">Saïdia</option>
                  <option value="Salé">Salé</option>
                  <option value="Sebt El Guerdane">Sebt El Guerdane</option>
                  <option value="Sebt El Maarif">Sebt El Maarif</option>
                  <option value="Sebt Gzoula">Sebt Gzoula</option>
                  <option value="Sebt Jahjouh">Sebt Jahjouh</option>
                  <option value="Sefrou">Sefrou</option>
                  <option value="Selouane">Selouane</option>
                  <option value="Semara">Semara</option>
                  <option value="Settat">Settat</option>
                  <option value="Sid L`Mokhtar">Sid L`Mokhtar</option>
                  <option value="Sid Zouin">Sid Zouin</option>
                  <option value="Sidi Abdallah Ghiat">
                    Sidi Abdallah Ghiat
                  </option>
                  <option value="Sidi Addi">Sidi Addi</option>
                  <option value="Sidi Ahmed">Sidi Ahmed</option>
                  <option value="Sidi Ali Ban Hamdouche">
                    Sidi Ali Ban Hamdouche
                  </option>
                  <option value="Sidi Allal El Bahraoui">
                    Sidi Allal El Bahraoui
                  </option>
                  <option value="Sidi Allal Tazi">Sidi Allal Tazi</option>
                  <option value="Sidi Bennour">Sidi Bennour</option>
                  <option value="Sidi Bou Othmane">Sidi Bou Othmane</option>
                  <option value="Sidi Boubker">Sidi Boubker</option>
                  <option value="Sidi Bouknadel">Sidi Bouknadel</option>
                  <option value="Sidi Bouzid">Sidi Bouzid</option>
                  <option value="Sidi Kacem">Sidi Kacem</option>
                  <option value="Sidi Hajjaj Oulad Mrah">
                    Sidi Hajjaj Oulad Mrah
                  </option>
                  <option value="Sidi Ifni">Sidi Ifni</option>
                  <option value="Sidi Jaber">Sidi Jaber</option>
                  <option value="Sidi Lyamani">Sidi Lyamani</option>
                  <option value="Sidi Rahhal">Sidi Rahhal</option>
                  <option value="Sidi Rahhal Chataï">
                    Sidi Rahhal Chataï
                  </option>
                  <option value="Sidi Slimane">Sidi Slimane</option>
                  <option value="Sidi Slimane Echcharraa">
                    Sidi Slimane Echcharraa
                  </option>
                  <option value="Sidi Smaïl">Sidi Smaïl</option>
                  <option value="Sidi Taïbi">Sidi Taïbi</option>
                  <option value="Sidi Yahya El Gharb">
                    Sidi Yahya El Gharb
                  </option>
                  <option value="Skhirate">Skhirate</option>
                  <option value="Skhour Rehamna">Skhour Rehamna</option>
                  <option value="Skoura">Skoura</option>
                  <option value="Smara">Smara</option>
                  <option value="Smimou">Smimou</option>
                  <option value="Soualem">Soualem</option>
                  <option value="Souk El Arbaâ">Souk El Arbaâ</option>
                  <option value="Souk Sebt Oulad Nemma">
                    Souk Sebt Oulad Nemma
                  </option>
                  <option value="Tabounte">Tabounte</option>
                  <option value="Tafetachte">Tafetachte</option>
                  <option value="Tafraout">Tafraout</option>
                  <option value="Tafrisset">Tafrisset</option>
                  <option value="Taghjijt">Taghjijt</option>
                  <option value="Tahannaout">Tahannaout</option>
                  <option value="Tahla">Tahla</option>
                  <option value="Taïnaste">Taïnaste</option>
                  <option value="Talmest">Talmest</option>
                  <option value="Taliouine">Taliouine</option>
                  <option value="Talsint">Talsint</option>
                  <option value="Tamallalt">Tamallalt</option>
                  <option value="Tamanar">Tamanar</option>
                  <option value="Tamassint">Tamassint</option>
                  <option value="Tamegroute">Tamegroute</option>
                  <option value="Tameslouht">Tameslouht</option>
                  <option value="Tanger">Tanger</option>
                  <option value="Tan-Tan">Tan-Tan</option>
                  <option value="Taounate">Taounate</option>
                  <option value="Tarfaya">Tarfaya</option>
                  <option value="Targuist">Targuist</option>
                  <option value="Taourirt">Taourirt</option>
                  <option value="Taroudant">Taroudant</option>
                  <option value="Tata">Tata</option>
                  <option value="Taza">Taza</option>
                  <option value="Taznakht">Taznakht</option>
                  <option value="Témara">Témara</option>
                  <option value="Temsia">Temsia</option>
                  <option value="Tendrara">Tendrara</option>
                  <option value="Tétouan">Tétouan</option>
                  <option value="Thar Es Souk">Thar Es Souk</option>
                  <option value="Tidass">Tidass</option>
                  <option value="Tiflet">Tiflet</option>
                  <option value="Tighassaline">Tighassaline</option>
                  <option value="Tighza">Tighza</option>
                  <option value="Timahdite">Timahdite</option>
                  <option value="Tinejdad">Tinejdad</option>
                  <option value="Tinghir">Tinghir</option>
                  <option value="Tissa">Tissa</option>
                  <option value="Tit Mellil">Tit Mellil</option>
                  <option value="Tiznit">Tiznit</option>
                  <option value="Tnine Aglou">Tnine Aglou</option>
                  <option value="Toulal">Toulal</option>
                  <option value="Toumliline">Toumliline</option>
                  <option value="Toundoute">Toundoute</option>
                  <option value="Touza">Touza</option>
                  <option value="Tritta">Tritta</option>
                  <option value="Zag">Zag</option>
                  <option value="Zagora">Zagora</option>
                  <option value="Zaida">Zaida</option>
                  <option value="Zaïo">Zaïo</option>
                  <option value="Zaïda">Zaïda</option>
                  <option value="Zaïo">Zaïo</option>
                  <option value="Zaouia d`Ifrane">Zaouia d`Ifrane</option>
                  <option value="Zaouïat Cheikh">Zaouïat Cheikh</option>
                  <option value="Zaouïat Dahou">Zaouïat Dahou</option>
                  <option value="Zaouïat Sidi Hamza">
                    Zaouïat Sidi Hamza
                  </option>
                  <option value="Zaouïat Sidi Kacem">
                    Zaouïat Sidi Kacem
                  </option>
                  <option value="Zerkten">Zerkten</option>
                  <option value="Zirara">Zirara</option>
                  <option value="Znada">Znada</option>
                  <option value="Zoug">Zoug</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 right">
              <label class="col-md-4 control-label right">Date de Naissance</label>
              <div>
              <input name="date_naissance" class="form-control" type="date" required />
              </div>
            </div>
          </div>
        </div>


        <!-- Family situation -->
        <div class="form-group">
          <label class="col-md-4 control-label">Situation Familiale</label>
          <div class="col-md-4">
            <div class="radio">
              <label>
                <input type="radio" name="situation_familiale" value="marie" id="marie" />
                Marié
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="situation_familiale" value="divorce" id="divorce" />
                Divorcé
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="situation_familiale" value="celibataire" id="celibataire" />
                Célibataire
              </label>
            </div>
          </div>
        </div>
        <!-- when *Marie* -->
        <div id="marie_selected">
          <h3 style="text-align: center">Information du marie</h3>
          <!-- Text input-->

          <div class="form-group">
            <div class="form1-group">
              <div class="col-md-4">
                <label class="col-md-4 control-label">Prénom</label>
                <div>
                  <input name="marie_prenom_fr" id="marie_prenom_fr" placeholder="Prénom" class="form-control" type="text" />
                </div>
              </div>

              <div class="col-md-4 right">
                <label1 class="col-md-4 control-label">الاسم</label1>
                <div>
                  <input name="marie_prenom_ar" id="marie_prenom_ar" placeholder="الاسم" class="form-control right" type="text" />
                </div>
              </div>
            </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
            <div class="form1-group">
              <div class="col-md-4">
                <label class="col-md-4 control-label">Nom</label>
                <div>
                  <input name="marie_nom_fr" id="marie_nom_fr" placeholder="Nom" class="form-control" type="text" />
                </div>
              </div>
              <div class="col-md-4 right">
                <label1 class="col-md-4 control-label">الاسم العائلي</label1>
                <div>
                  <input name="marie_nom_ar" id="marie_nom_ar" placeholder="الاسم العائلي" class="form-control right" type="text" />
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form1-group">
              <div class="col-md-4">
                <label class="col-md-4 control-label">N°CNIE</label>
                <div>
                  <input name="marie_cnie" id="marie_cnie" placeholder="N°CNIE" class="form-control" type="text" />
                </div>
              </div>
              <div class="col-md-4 right">
                <label class="col-md-4 control-label">Nombre des enfants</label>
                <div>
                  <input name="marie_nbrenf" id="marie_nbrenf" placeholder="Nombre des enfants" class="form-control" type="number" min="0" max="10" oninput="showDetails()" />
                </div>
              </div>
            </div>
          </div>

          <!-- enfant info -->
          <div id="cloneit"></div>
          <div id="enf_info" style="display: none">
            <div class="form-group">
              <div class="form1-group">
                <div class="col-md-4">
                  <label class="col-md-4 control-label">Prénom</label>
                  <div>
                    <input name="marie_enf_prenom_fr[]" id="marie_enf_prenom_fr" placeholder="Prénom" class="form-control" type="text" />
                  </div>
                </div>

                <div class="col-md-4 right">
                  <label1 class="col-md-4 control-label">الاسم</label1>
                  <div>
                    <input name="marie_enf_prenom_ar[]" id="marie_enf_prenom_ar" placeholder="الاسم" class="form-control right" type="text" />
                  </div>
                </div>
              </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
              <div class="form1-group">
                <div class="col-md-4">
                  <label class="col-md-4 control-label">Nom</label>
                  <div>
                    <input name="marie_enf_nom_fr[]" id="marie_enf_nom_fr" placeholder="Nom" class="form-control" type="text" />
                  </div>
                </div>
                <div class="col-md-4 right">
                  <label1 class="col-md-4 control-label">الاسم العائلي</label1>
                  <div>
                    <input name="marie_enf_nom_ar[]" id="marie_enf_nom_ar" placeholder="الاسم العائلي" class="form-control right" type="text" />
                  </div>
                </div>
              </div>
            </div>

            <!-- radio checks -->
            <div class="form-group">
              <div class="form1-group">
                <div class="col-md-4">
                  <label class="col-md-4 control-label">Sexe</label>
                  <select name="marie_enf_sex_fr[]" class="formc1 selectpicker" id="marie_enf_sex_fr">
                  <option value="">Sexe</option>  
                  <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="col-md-4 right">
                  <label class="col-md-4 control-label">الجنس</label>
                  <select name="marie_enf_sex_ar[]" class="formc1 selectpicker" id="marie_enf_sex_ar">
                  <option value="">الجنس</option>  
                  <option value="ذكر">ذكر</option>
                    <option value="أنثى">أنثى</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- birth place -->

            <div class="form-group">
              <div class="form1-group">
                <div class="col-md-4">
                  <label class="col-md-4 control-label">Lieu de Naissance</label>
                  <div>
                    <select name="marie_enf_lieu_Nai_fr[]" class="formc1 selectpicker">
                      <option value=" ">Lieu de Naisssance</option>
                      <option value="Afourar">Afourar</option>
                      <option value="Agadir">Agadir</option>
                      <option value="Aghbala">Aghbala</option>
                      <option value="Aghbalou">Aghbalou</option>
                      <option value="Agdz">Agdz</option>
                      <option value="Agouraï">Agouraï</option>
                      <option value="Aguelmous">Aguelmous</option>
                      <option value="Ahfir">Ahfir</option>
                      <option value="Aïn Leuh">Aïn Leuh</option>
                      <option value="Aïn Bni Mathar">Aïn Bni Mathar</option>
                      <option value="Ain Cheggag">Ain Cheggag</option>
                      <option value="Aïn Dorij">Aïn Dorij</option>
                      <option value="Aïn El Aouda">Aïn El Aouda</option>
                      <option value="Aïn Erreggada">Aïn Erreggada</option>
                      <option value="Aïn Harrouda">Aïn Harrouda</option>
                      <option value="Aïn Jemaa">Aïn Jemaa</option>
                      <option value="Aïn Karma">Aïn Karma</option>
                      <option value="Aïn Taoujdate">Aïn Taoujdate</option>
                      <option value="Aït Iaaza">Aït Iaaza</option>
                      <option value="Aït Baha">Aït Baha</option>
                      <option value="Aït Boubidmane">Aït Boubidmane</option>
                      <option value="Aït Daoud">Aït Daoud</option>
                      <option value="Aït Ishaq">Aït Ishaq</option>
                      <option value="Aït Melloul">Aït Melloul</option>
                      <option value="Aït Ourir">Aït Ourir</option>
                      <option value="Akka">Akka</option>
                      <option value="Aklim">Aklim</option>
                      <option value="Aknoul">Aknoul</option>
                      <option value="Ajdir">Ajdir</option>
                      <option value="Ajdir">Ajdir</option>
                      <option value="Al Aaroui">Al Aaroui</option>
                      <option value="Al Hoceïma">Al Hoceïma</option>
                      <option value="Alnif">Alnif</option>
                      <option value="Amalou Ighriben">Amalou Ighriben</option>
                      <option value="Amizmiz">Amizmiz</option>
                      <option value="Aoufous">Aoufous</option>
                      <option value="Aoulouz">Aoulouz</option>
                      <option value="Aourir">Aourir</option>
                      <option value="Arbaoua">Arbaoua</option>
                      <option value="Arfoud">Arfoud</option>
                      <option value="Assa">Assa</option>
                      <option value="Assahrij">Assahrij</option>
                      <option value="Assilah">Assilah</option>
                      <option value="Azemmour">Azemmour</option>
                      <option value="Azilal">Azilal</option>
                      <option value="Azrou">Azrou</option>
                      <option value="Bab Berred">Bab Berred</option>
                      <option value="Bab Taza">Bab Taza</option>
                      <option value="Bejaad">Bejaad</option>
                      <option value="Ben Ahmed">Ben Ahmed</option>
                      <option value="Ben Guerir">Ben Guerir</option>
                      <option value="Ben Taïeb">Ben Taïeb</option>
                      <option value="Ben Yakhlef">Ben Yakhlef</option>
                      <option value="Beni Mellal">Beni Mellal</option>
                      <option value="Ben Slimane">Ben Slimane</option>
                      <option value="Berkane">Berkane</option>
                      <option value="Berrechid">Berrechid</option>
                      <option value="Bhalil">Bhalil</option>
                      <option value="Biougra">Biougra</option>
                      <option value="Bni Ansar">Bni Ansar</option>
                      <option value="Bni Bouayach">Bni Bouayach</option>
                      <option value="Bni Chiker">Bni Chiker</option>
                      <option value="Bni Drar">Bni Drar</option>
                      <option value="Bni Hadifa">Bni Hadifa</option>
                      <option value="Bni Tadjite">Bni Tadjite</option>
                      <option value="Bouanane">Bouanane</option>
                      <option value="Bouarfa">Bouarfa</option>
                      <option value="Boudnib">Boudnib</option>
                      <option value="Bouguedra">Bouguedra</option>
                      <option value="Bouhdila">Bouhdila</option>
                      <option value="Bouizakarne">Bouizakarne</option>
                      <option value="Boujdour">Boujdour</option>
                      <option value="Boujniba">Boujniba</option>
                      <option value="Boulanouare">Boulanouare</option>
                      <option value="Boulemane">Boulemane</option>
                      <option value="Boumalne Dadès">Boumalne Dadès</option>
                      <option value="Boumia">Boumia</option>
                      <option value="Bouskoura">Bouskoura</option>
                      <option value="Bouznika">Bouznika</option>
                      <option value="Bouzthate">Bouzthate</option>
                      <option value="Bradia">Bradia</option>
                      <option value="Brikcha">Brikcha</option>
                      <option value="Bzou">Bzou</option>
                      <option value="Casablanca">Casablanca</option>
                      <option value="Chefchaouen">Chefchaouen</option>
                      <option value="Chichaoua">Chichaoua</option>
                      <option value="Dakhla">Dakhla</option>
                      <option value="Dar Bni Karrich">Dar Bni Karrich</option>
                      <option value="Dar Chaoui">Dar Chaoui</option>
                      <option value="Dar El Kebdani">Dar El Kebdani</option>
                      <option value="Dar Gueddari">Dar Gueddari</option>
                      <option value="Dar Ould Zidouh">Dar Ould Zidouh</option>
                      <option value="Dcheïra El Jihadia">
                        Dcheïra El Jihadia
                      </option>
                      <option value="Debdou">Debdou</option>
                      <option value="Demnate">Demnate</option>
                      <option value="Deroua">Deroua</option>
                      <option value="Drargua">Drargua</option>
                      <option value="Driouch">Driouch</option>
                      <option value="Echemmaia">Echemmaia</option>
                      <option value="El Aïoun Sidi Mellouk">
                        El Aïoun Sidi Mellouk
                      </option>
                      <option value="El Borouj">El Borouj</option>
                      <option value="El Gara">El Gara</option>
                      <option value="El Hajeb">El Hajeb</option>
                      <option value="El Hanchane">El Hanchane</option>
                      <option value="El Jadida">El Jadida</option>
                      <option value="El Kbab">El Kbab</option>
                      <option value="El Kelaa des Mgouna">
                        El Kelaa des Mgouna
                      </option>
                      <option value="El Kelaa des Sraghna">
                        El Kelaa des Sraghna
                      </option>
                      <option value="El Ksiba">El Ksiba</option>
                      <option value="El Mansouria">El Mansouria</option>
                      <option value="El Marsa">El Marsa</option>
                      <option value="El Menzel">El Menzel</option>
                      <option value="El Ouatia">El Ouatia</option>
                      <option value="Erfoud">Erfoud</option>
                      <option value="Errachidia">Errachidia</option>
                      <option value="Er-Rich">Er-Rich</option>
                      <option value="Essaouira">Essaouira</option>
                      <option value="Es-Semara">Es-Semara</option>
                      <option value="Fam El Hisn">Fam El Hisn</option>
                      <option value="Farkhana">Farkhana</option>
                      <option value="Fès">Fès</option>
                      <option value="Figuig">Figuig</option>
                      <option value="Fnideq">Fnideq</option>
                      <option value="Foum Jamaa">Foum Jamaa</option>
                      <option value="Foum Zguid">Foum Zguid</option>
                      <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                      <option value="Ghafsaï">Ghafsaï</option>
                      <option value="Ghmate">Ghmate</option>
                      <option value="Goulmima">Goulmima</option>
                      <option value="Gourrama">Gourrama</option>
                      <option value="Guelmim">Guelmim</option>
                      <option value="Guercif">Guercif</option>
                      <option value="Gueznaïa">Gueznaïa</option>
                      <option value="Guigou">Guigou</option>
                      <option value="Guisser">Guisser</option>
                      <option value="Had Bouhssoussen">
                        Had Bouhssoussen
                      </option>
                      <option value="Had Kourt">Had Kourt</option>
                      <option value="Had Oued Ifrane">Had Oued Ifrane</option>
                      <option value="Haj Kaddour">Haj Kaddour</option>
                      <option value="Hattane">Hattane</option>
                      <option value="Houara">Houara</option>
                      <option value="Ifrane Atlas Saghir">
                        Ifrane Atlas Saghir
                      </option>
                      <option value="Ifrane">Ifrane</option>
                      <option value="Ighoud">Ighoud</option>
                      <option value="Ihddaden">Ihddaden</option>
                      <option value="Imintanoute">Imintanoute</option>
                      <option value="Imouzzer Kandar">Imouzzer Kandar</option>
                      <option value="Imouzzer Marmoucha">
                        Imouzzer Marmoucha
                      </option>
                      <option value="Imzouren">Imzouren</option>
                      <option value="Inezgane">Inezgane</option>
                      <option value="Irherm">Irherm</option>
                      <option value="Issaguen">Issaguen</option>
                      <option value="Itzer">Itzer</option>
                      <option value="Jaadar">Jaadar</option>
                      <option value="Jamaat Shaim">Jamaat Shaim</option>
                      <option value="Jebha">Jebha</option>
                      <option value="Jerada">Jerada</option>
                      <option value="Jorf">Jorf</option>
                      <option value="Jorf El Melha">Jorf El Melha</option>
                      <option value="Kalaat M`Gouna">Kalaat M`Gouna</option>
                      <option value="Karia">Karia</option>
                      <option value="Karia">Karia</option>
                      <option value="Karia Ba Mohamed">
                        Karia Ba Mohamed
                      </option>
                      <option value="Kariat Arekmane">Kariat Arekmane</option>
                      <option value="Kasba Tadla">Kasba Tadla</option>
                      <option value="Kassita">Kassita</option>
                      <option value="Kattara">Kattara</option>
                      <option value="Kehf Nsour">Kehf Nsour</option>
                      <option value="Kénitra">Kénitra</option>
                      <option value="Kerouna">Kerouna</option>
                      <option value="Kerrouchen">Kerrouchen</option>
                      <option value="Khémis Sahel">Khémis Sahel</option>
                      <option value="Khémisset">Khémisset</option>
                      <option value="Khénifra">Khénifra</option>
                      <option value="Khénichet">Khénichet</option>
                      <option value="Khouribga">Khouribga</option>
                      <option value="Ksar El Kébir">Ksar El Kébir</option>
                      <option value="Laâounate">Laâounate</option>
                      <option value="Laakarta">Laakarta</option>
                      <option value="Laattaouia">Laattaouia</option>
                      <option value="Laayoune">Laayoune</option>
                      <option value="Lagouira">Lagouira</option>
                      <option value="Lakhsas">Lakhsas</option>
                      <option value="Lahraouyine">Lahraouyine</option>
                      <option value="Lalla Mimouna">Lalla Mimouna</option>
                      <option value="Lalla Takarkoust">
                        Lalla Takarkoust
                      </option>
                      <option value="Larache">Larache</option>
                      <option value="Lakouablia">Lakouablia</option>
                      <option value="Lbir Jdid">Lbir Jdid</option>
                      <option value="Loualidia">Loualidia</option>
                      <option value="Loulad">Loulad</option>
                      <option value="Lqliaa">Lqliaa</option>
                      <option value="Maaziz">Maaziz</option>
                      <option value="Madagh">Madagh</option>
                      <option value="Marrakech">Marrakech</option>
                      <option value="Martil">Martil</option>
                      <option value="Massa">Massa</option>
                      <option value="Matmata">Matmata</option>
                      <option value="M`Diq">M`Diq</option>
                      <option value="Médiouna">Médiouna</option>
                      <option value="Mechra Bel Ksiri">
                        Mechra Bel Ksiri
                      </option>
                      <option value="Mehdya">Mehdya</option>
                      <option value="Meknès">Meknès</option>
                      <option value="M`Haya">M`Haya</option>
                      <option value="Midar">Midar</option>
                      <option value="Midelt">Midelt</option>
                      <option value="Missour">Missour</option>
                      <option value="Mohammédia">Mohammédia</option>
                      <option value="Moqrisset">Moqrisset</option>
                      <option value="Moulay Abdallah">Moulay Abdallah</option>
                      <option value="Moulay Ali Chérif">
                        Moulay Ali Chérif
                      </option>
                      <option value="Moulay Bouazza">Moulay Bouazza</option>
                      <option value="Moulay Bousselham">
                        Moulay Bousselham
                      </option>
                      <option value="Moulay Brahim">Moulay Brahim</option>
                      <option value="Moulay Driss Zerhoun">
                        Moulay Driss Zerhoun
                      </option>
                      <option value="M`Rirt">M`Rirt</option>
                      <option value="Nador">Nador</option>
                      <option value="Naïma">Naïma</option>
                      <option value="Nouaceur">Nouaceur</option>
                      <option value="Oualidia">Oualidia</option>
                      <option value="Ouaouizeght">Ouaouizeght</option>
                      <option value="Ouarzazate">Ouarzazate</option>
                      <option value="Oued Amlil">Oued Amlil</option>
                      <option value="Oued Heïmer">Oued Heïmer</option>
                      <option value="Oued Laou">Oued Laou</option>
                      <option value="Oued Zem">Oued Zem</option>
                      <option value="Ouezzane">Ouezzane</option>
                      <option value="Ouislane">Ouislane</option>
                      <option value="Oujda">Oujda</option>
                      <option value="Oulad Abbou">Oulad Abbou</option>
                      <option value="Oulad Amrane">Oulad Amrane</option>
                      <option value="Oulad Ayad">Oulad Ayad</option>
                      <option value="Oulad Berhil">Oulad Berhil</option>
                      <option value="Oulad Frej">Oulad Frej</option>
                      <option value="Oulad Ghadbane">Oulad Ghadbane</option>
                      <option value="Oulad H`Riz Sahel">
                        Oulad H`Riz Sahel
                      </option>
                      <option value="Oulad M`Barek">Oulad M`Barek</option>
                      <option value="Oulad Mrah">Oulad Mrah</option>
                      <option value="Oulad Saïd">Oulad Saïd</option>
                      <option value="Oulad Tayeb">Oulad Tayeb</option>
                      <option value="Oulad Teïma">Oulad Teïma</option>
                      <option value="Oulad Yaïch">Oulad Yaïch</option>
                      <option value="Oulad Zbaïr">Oulad Zbaïr</option>
                      <option value="Oulmès">Oulmès</option>
                      <option value="Oum El Guerdane">Oum El Guerdane</option>
                      <option value="Ounagha">Ounagha</option>
                      <option value="Outat El Haj">Outat El Haj</option>
                      <option value="Rabat">Rabat</option>
                      <option value="Ras El Aïn">Ras El Aïn</option>
                      <option value="Ras El Ma">Ras El Ma</option>
                      <option value="Ribate El Kheïr">Ribate El Kheïr</option>
                      <option value="Rissani">Rissani</option>
                      <option value="Rommani">Rommani</option>
                      <option value="Sabaa Aiyoun">Sabaa Aiyoun</option>
                      <option value="Safi">Safi</option>
                      <option value="Saïdia">Saïdia</option>
                      <option value="Salé">Salé</option>
                      <option value="Sebt El Guerdane">
                        Sebt El Guerdane
                      </option>
                      <option value="Sebt El Maarif">Sebt El Maarif</option>
                      <option value="Sebt Gzoula">Sebt Gzoula</option>
                      <option value="Sebt Jahjouh">Sebt Jahjouh</option>
                      <option value="Sefrou">Sefrou</option>
                      <option value="Selouane">Selouane</option>
                      <option value="Semara">Semara</option>
                      <option value="Settat">Settat</option>
                      <option value="Sid L`Mokhtar">Sid L`Mokhtar</option>
                      <option value="Sid Zouin">Sid Zouin</option>
                      <option value="Sidi Abdallah Ghiat">
                        Sidi Abdallah Ghiat
                      </option>
                      <option value="Sidi Addi">Sidi Addi</option>
                      <option value="Sidi Ahmed">Sidi Ahmed</option>
                      <option value="Sidi Ali Ban Hamdouche">
                        Sidi Ali Ban Hamdouche
                      </option>
                      <option value="Sidi Allal El Bahraoui">
                        Sidi Allal El Bahraoui
                      </option>
                      <option value="Sidi Allal Tazi">Sidi Allal Tazi</option>
                      <option value="Sidi Bennour">Sidi Bennour</option>
                      <option value="Sidi Bou Othmane">
                        Sidi Bou Othmane
                      </option>
                      <option value="Sidi Boubker">Sidi Boubker</option>
                      <option value="Sidi Bouknadel">Sidi Bouknadel</option>
                      <option value="Sidi Bouzid">Sidi Bouzid</option>
                      <option value="Sidi Kacem">Sidi Kacem</option>
                      <option value="Sidi Hajjaj Oulad Mrah">
                        Sidi Hajjaj Oulad Mrah
                      </option>
                      <option value="Sidi Ifni">Sidi Ifni</option>
                      <option value="Sidi Jaber">Sidi Jaber</option>
                      <option value="Sidi Lyamani">Sidi Lyamani</option>
                      <option value="Sidi Rahhal">Sidi Rahhal</option>
                      <option value="Sidi Rahhal Chataï">
                        Sidi Rahhal Chataï
                      </option>
                      <option value="Sidi Slimane">Sidi Slimane</option>
                      <option value="Sidi Slimane Echcharraa">
                        Sidi Slimane Echcharraa
                      </option>
                      <option value="Sidi Smaïl">Sidi Smaïl</option>
                      <option value="Sidi Taïbi">Sidi Taïbi</option>
                      <option value="Sidi Yahya El Gharb">
                        Sidi Yahya El Gharb
                      </option>
                      <option value="Skhirate">Skhirate</option>
                      <option value="Skhour Rehamna">Skhour Rehamna</option>
                      <option value="Skoura">Skoura</option>
                      <option value="Smara">Smara</option>
                      <option value="Smimou">Smimou</option>
                      <option value="Soualem">Soualem</option>
                      <option value="Souk El Arbaâ">Souk El Arbaâ</option>
                      <option value="Souk Sebt Oulad Nemma">
                        Souk Sebt Oulad Nemma
                      </option>
                      <option value="Tabounte">Tabounte</option>
                      <option value="Tafetachte">Tafetachte</option>
                      <option value="Tafraout">Tafraout</option>
                      <option value="Tafrisset">Tafrisset</option>
                      <option value="Taghjijt">Taghjijt</option>
                      <option value="Tahannaout">Tahannaout</option>
                      <option value="Tahla">Tahla</option>
                      <option value="Taïnaste">Taïnaste</option>
                      <option value="Talmest">Talmest</option>
                      <option value="Taliouine">Taliouine</option>
                      <option value="Talsint">Talsint</option>
                      <option value="Tamallalt">Tamallalt</option>
                      <option value="Tamanar">Tamanar</option>
                      <option value="Tamassint">Tamassint</option>
                      <option value="Tamegroute">Tamegroute</option>
                      <option value="Tameslouht">Tameslouht</option>
                      <option value="Tanger">Tanger</option>
                      <option value="Tan-Tan">Tan-Tan</option>
                      <option value="Taounate">Taounate</option>
                      <option value="Tarfaya">Tarfaya</option>
                      <option value="Targuist">Targuist</option>
                      <option value="Taourirt">Taourirt</option>
                      <option value="Taroudant">Taroudant</option>
                      <option value="Tata">Tata</option>
                      <option value="Taza">Taza</option>
                      <option value="Taznakht">Taznakht</option>
                      <option value="Témara">Témara</option>
                      <option value="Temsia">Temsia</option>
                      <option value="Tendrara">Tendrara</option>
                      <option value="Tétouan">Tétouan</option>
                      <option value="Thar Es Souk">Thar Es Souk</option>
                      <option value="Tidass">Tidass</option>
                      <option value="Tiflet">Tiflet</option>
                      <option value="Tighassaline">Tighassaline</option>
                      <option value="Tighza">Tighza</option>
                      <option value="Timahdite">Timahdite</option>
                      <option value="Tinejdad">Tinejdad</option>
                      <option value="Tinghir">Tinghir</option>
                      <option value="Tissa">Tissa</option>
                      <option value="Tit Mellil">Tit Mellil</option>
                      <option value="Tiznit">Tiznit</option>
                      <option value="Tnine Aglou">Tnine Aglou</option>
                      <option value="Toulal">Toulal</option>
                      <option value="Toumliline">Toumliline</option>
                      <option value="Toundoute">Toundoute</option>
                      <option value="Touza">Touza</option>
                      <option value="Tritta">Tritta</option>
                      <option value="Zag">Zag</option>
                      <option value="Zagora">Zagora</option>
                      <option value="Zaida">Zaida</option>
                      <option value="Zaïo">Zaïo</option>
                      <option value="Zaïda">Zaïda</option>
                      <option value="Zaïo">Zaïo</option>
                      <option value="Zaouia d`Ifrane">Zaouia d`Ifrane</option>
                      <option value="Zaouïat Cheikh">Zaouïat Cheikh</option>
                      <option value="Zaouïat Dahou">Zaouïat Dahou</option>
                      <option value="Zaouïat Sidi Hamza">
                        Zaouïat Sidi Hamza
                      </option>
                      <option value="Zaouïat Sidi Kacem">
                        Zaouïat Sidi Kacem
                      </option>
                      <option value="Zerkten">Zerkten</option>
                      <option value="Zirara">Zirara</option>
                      <option value="Znada">Znada</option>
                      <option value="Zoug">Zoug</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 right">
                <label class="col-md-4 control-label right">Date de Naissance</label>
                  <div>
                  <input name="marie_enf_date_naissance[]" class="form-control" type="date" />
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>

        <!-- when *Divorce* -->
        <div id="divorce_selected">
          <h3 style="text-align: center">Information familiale</h3>
          <!--kids-->

          <div class="form-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Nombre des enfants</label>
              <div>
                <input name="divorce_nbrenf1" id="divorce_nbrenf1" placeholder="Nombre des enfants" class="form-control" type="number" min="0" max="10" oninput="showDetails()" />
              </div>
            </div>
          </div>
          <!-- enfant info -->
          <div id="cloneit1"></div>
          <div id="enf_info1" style="display: none">
            <div class="form-group">
              <div class="form1-group">
                <div class="col-md-4">
                  <label class="col-md-4 control-label">Prénom</label>
                  <div>
                    <input name="divorce_enf_prenom_fr[]" placeholder="Prénom" class="form-control" type="text" />
                  </div>
                </div>

                <div class="col-md-4 right">
                  <label1 class="col-md-4 control-label">الاسم</label1>
                  <div>
                    <input name="divorce_enf_prenom_ar[]" placeholder="الاسم" class="form-control right" type="text" />
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form1-group">
                <div class="col-md-4">
                  <label class="col-md-4 control-label">Nom</label>
                  <div>
                    <input name="divorce_enf_nom_fr[]" placeholder="Nom" class="form-control" type="text" />
                  </div>
                </div>
                <div class="col-md-4 right">
                  <label1 class="col-md-4 control-label">الاسم العائلي</label1>
                  <div>
                    <input name="divorce_enf_nom_ar[]" placeholder="الاسم العائلي" class="form-control right" type="text" />
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form1-group">
              
                <div class="col-md-4">
                  <label class="col-md-4 control-label">Sexe</label>
                  <select name="divorce_enf_sexe_fr[]" class="formc1 selectpicker" id="divorce_enf_sexe_fr">
                  <option value="">Sexe</option>  
                  <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="col-md-4 right">
                  <label class="col-md-4 control-label">الجنس</label>
                  <select name="divorce_enf_sexe_ar[]" class="formc1 selectpicker" id="divorce_enf_sexe_ar">
                  <option value="">الجنس</option>  
                  <option value="ذكر">ذكر</option>
                    <option value="أنثى">أنثى</option>
                  </select>
                </div>


              </div>
            </div>

            <!-- Birth place -->
            <div class="form-group">
              <div class="form1-group">
                <div class="col-md-4">
                  <label class="col-md-4 control-label">Lieu de Naissance</label>
                  <div>
                    <select name="divorce_enf_lieu_Nai_fr[]" class="formc1 selectpicker">
                      <option value=" ">Lieu de Naisssance</option>
                      <option value="Afourar">Afourar</option>
                      <option value="Agadir">Agadir</option>
                      <option value="Aghbala">Aghbala</option>
                      <option value="Aghbalou">Aghbalou</option>
                      <option value="Agdz">Agdz</option>
                      <option value="Agouraï">Agouraï</option>
                      <option value="Aguelmous">Aguelmous</option>
                      <option value="Ahfir">Ahfir</option>
                      <option value="Aïn Leuh">Aïn Leuh</option>
                      <option value="Aïn Bni Mathar">Aïn Bni Mathar</option>
                      <option value="Ain Cheggag">Ain Cheggag</option>
                      <option value="Aïn Dorij">Aïn Dorij</option>
                      <option value="Aïn El Aouda">Aïn El Aouda</option>
                      <option value="Aïn Erreggada">Aïn Erreggada</option>
                      <option value="Aïn Harrouda">Aïn Harrouda</option>
                      <option value="Aïn Jemaa">Aïn Jemaa</option>
                      <option value="Aïn Karma">Aïn Karma</option>
                      <option value="Aïn Taoujdate">Aïn Taoujdate</option>
                      <option value="Aït Iaaza">Aït Iaaza</option>
                      <option value="Aït Baha">Aït Baha</option>
                      <option value="Aït Boubidmane">Aït Boubidmane</option>
                      <option value="Aït Daoud">Aït Daoud</option>
                      <option value="Aït Ishaq">Aït Ishaq</option>
                      <option value="Aït Melloul">Aït Melloul</option>
                      <option value="Aït Ourir">Aït Ourir</option>
                      <option value="Akka">Akka</option>
                      <option value="Aklim">Aklim</option>
                      <option value="Aknoul">Aknoul</option>
                      <option value="Ajdir">Ajdir</option>
                      <option value="Ajdir">Ajdir</option>
                      <option value="Al Aaroui">Al Aaroui</option>
                      <option value="Al Hoceïma">Al Hoceïma</option>
                      <option value="Alnif">Alnif</option>
                      <option value="Amalou Ighriben">Amalou Ighriben</option>
                      <option value="Amizmiz">Amizmiz</option>
                      <option value="Aoufous">Aoufous</option>
                      <option value="Aoulouz">Aoulouz</option>
                      <option value="Aourir">Aourir</option>
                      <option value="Arbaoua">Arbaoua</option>
                      <option value="Arfoud">Arfoud</option>
                      <option value="Assa">Assa</option>
                      <option value="Assahrij">Assahrij</option>
                      <option value="Assilah">Assilah</option>
                      <option value="Azemmour">Azemmour</option>
                      <option value="Azilal">Azilal</option>
                      <option value="Azrou">Azrou</option>
                      <option value="Bab Berred">Bab Berred</option>
                      <option value="Bab Taza">Bab Taza</option>
                      <option value="Bejaad">Bejaad</option>
                      <option value="Ben Ahmed">Ben Ahmed</option>
                      <option value="Ben Guerir">Ben Guerir</option>
                      <option value="Ben Taïeb">Ben Taïeb</option>
                      <option value="Ben Yakhlef">Ben Yakhlef</option>
                      <option value="Beni Mellal">Beni Mellal</option>
                      <option value="Ben Slimane">Ben Slimane</option>
                      <option value="Berkane">Berkane</option>
                      <option value="Berrechid">Berrechid</option>
                      <option value="Bhalil">Bhalil</option>
                      <option value="Biougra">Biougra</option>
                      <option value="Bni Ansar">Bni Ansar</option>
                      <option value="Bni Bouayach">Bni Bouayach</option>
                      <option value="Bni Chiker">Bni Chiker</option>
                      <option value="Bni Drar">Bni Drar</option>
                      <option value="Bni Hadifa">Bni Hadifa</option>
                      <option value="Bni Tadjite">Bni Tadjite</option>
                      <option value="Bouanane">Bouanane</option>
                      <option value="Bouarfa">Bouarfa</option>
                      <option value="Boudnib">Boudnib</option>
                      <option value="Bouguedra">Bouguedra</option>
                      <option value="Bouhdila">Bouhdila</option>
                      <option value="Bouizakarne">Bouizakarne</option>
                      <option value="Boujdour">Boujdour</option>
                      <option value="Boujniba">Boujniba</option>
                      <option value="Boulanouare">Boulanouare</option>
                      <option value="Boulemane">Boulemane</option>
                      <option value="Boumalne Dadès">Boumalne Dadès</option>
                      <option value="Boumia">Boumia</option>
                      <option value="Bouskoura">Bouskoura</option>
                      <option value="Bouznika">Bouznika</option>
                      <option value="Bouzthate">Bouzthate</option>
                      <option value="Bradia">Bradia</option>
                      <option value="Brikcha">Brikcha</option>
                      <option value="Bzou">Bzou</option>
                      <option value="Casablanca">Casablanca</option>
                      <option value="Chefchaouen">Chefchaouen</option>
                      <option value="Chichaoua">Chichaoua</option>
                      <option value="Dakhla">Dakhla</option>
                      <option value="Dar Bni Karrich">Dar Bni Karrich</option>
                      <option value="Dar Chaoui">Dar Chaoui</option>
                      <option value="Dar El Kebdani">Dar El Kebdani</option>
                      <option value="Dar Gueddari">Dar Gueddari</option>
                      <option value="Dar Ould Zidouh">Dar Ould Zidouh</option>
                      <option value="Dcheïra El Jihadia">
                        Dcheïra El Jihadia
                      </option>
                      <option value="Debdou">Debdou</option>
                      <option value="Demnate">Demnate</option>
                      <option value="Deroua">Deroua</option>
                      <option value="Drargua">Drargua</option>
                      <option value="Driouch">Driouch</option>
                      <option value="Echemmaia">Echemmaia</option>
                      <option value="El Aïoun Sidi Mellouk">
                        El Aïoun Sidi Mellouk
                      </option>
                      <option value="El Borouj">El Borouj</option>
                      <option value="El Gara">El Gara</option>
                      <option value="El Hajeb">El Hajeb</option>
                      <option value="El Hanchane">El Hanchane</option>
                      <option value="El Jadida">El Jadida</option>
                      <option value="El Kbab">El Kbab</option>
                      <option value="El Kelaa des Mgouna">
                        El Kelaa des Mgouna
                      </option>
                      <option value="El Kelaa des Sraghna">
                        El Kelaa des Sraghna
                      </option>
                      <option value="El Ksiba">El Ksiba</option>
                      <option value="El Mansouria">El Mansouria</option>
                      <option value="El Marsa">El Marsa</option>
                      <option value="El Menzel">El Menzel</option>
                      <option value="El Ouatia">El Ouatia</option>
                      <option value="Erfoud">Erfoud</option>
                      <option value="Errachidia">Errachidia</option>
                      <option value="Er-Rich">Er-Rich</option>
                      <option value="Essaouira">Essaouira</option>
                      <option value="Es-Semara">Es-Semara</option>
                      <option value="Fam El Hisn">Fam El Hisn</option>
                      <option value="Farkhana">Farkhana</option>
                      <option value="Fès">Fès</option>
                      <option value="Figuig">Figuig</option>
                      <option value="Fnideq">Fnideq</option>
                      <option value="Foum Jamaa">Foum Jamaa</option>
                      <option value="Foum Zguid">Foum Zguid</option>
                      <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                      <option value="Ghafsaï">Ghafsaï</option>
                      <option value="Ghmate">Ghmate</option>
                      <option value="Goulmima">Goulmima</option>
                      <option value="Gourrama">Gourrama</option>
                      <option value="Guelmim">Guelmim</option>
                      <option value="Guercif">Guercif</option>
                      <option value="Gueznaïa">Gueznaïa</option>
                      <option value="Guigou">Guigou</option>
                      <option value="Guisser">Guisser</option>
                      <option value="Had Bouhssoussen">
                        Had Bouhssoussen
                      </option>
                      <option value="Had Kourt">Had Kourt</option>
                      <option value="Had Oued Ifrane">Had Oued Ifrane</option>
                      <option value="Haj Kaddour">Haj Kaddour</option>
                      <option value="Hattane">Hattane</option>
                      <option value="Houara">Houara</option>
                      <option value="Ifrane Atlas Saghir">
                        Ifrane Atlas Saghir
                      </option>
                      <option value="Ifrane">Ifrane</option>
                      <option value="Ighoud">Ighoud</option>
                      <option value="Ihddaden">Ihddaden</option>
                      <option value="Imintanoute">Imintanoute</option>
                      <option value="Imouzzer Kandar">Imouzzer Kandar</option>
                      <option value="Imouzzer Marmoucha">
                        Imouzzer Marmoucha
                      </option>
                      <option value="Imzouren">Imzouren</option>
                      <option value="Inezgane">Inezgane</option>
                      <option value="Irherm">Irherm</option>
                      <option value="Issaguen">Issaguen</option>
                      <option value="Itzer">Itzer</option>
                      <option value="Jaadar">Jaadar</option>
                      <option value="Jamaat Shaim">Jamaat Shaim</option>
                      <option value="Jebha">Jebha</option>
                      <option value="Jerada">Jerada</option>
                      <option value="Jorf">Jorf</option>
                      <option value="Jorf El Melha">Jorf El Melha</option>
                      <option value="Kalaat M`Gouna">Kalaat M`Gouna</option>
                      <option value="Karia">Karia</option>
                      <option value="Karia">Karia</option>
                      <option value="Karia Ba Mohamed">
                        Karia Ba Mohamed
                      </option>
                      <option value="Kariat Arekmane">Kariat Arekmane</option>
                      <option value="Kasba Tadla">Kasba Tadla</option>
                      <option value="Kassita">Kassita</option>
                      <option value="Kattara">Kattara</option>
                      <option value="Kehf Nsour">Kehf Nsour</option>
                      <option value="Kénitra">Kénitra</option>
                      <option value="Kerouna">Kerouna</option>
                      <option value="Kerrouchen">Kerrouchen</option>
                      <option value="Khémis Sahel">Khémis Sahel</option>
                      <option value="Khémisset">Khémisset</option>
                      <option value="Khénifra">Khénifra</option>
                      <option value="Khénichet">Khénichet</option>
                      <option value="Khouribga">Khouribga</option>
                      <option value="Ksar El Kébir">Ksar El Kébir</option>
                      <option value="Laâounate">Laâounate</option>
                      <option value="Laakarta">Laakarta</option>
                      <option value="Laattaouia">Laattaouia</option>
                      <option value="Laayoune">Laayoune</option>
                      <option value="Lagouira">Lagouira</option>
                      <option value="Lakhsas">Lakhsas</option>
                      <option value="Lahraouyine">Lahraouyine</option>
                      <option value="Lalla Mimouna">Lalla Mimouna</option>
                      <option value="Lalla Takarkoust">
                        Lalla Takarkoust
                      </option>
                      <option value="Larache">Larache</option>
                      <option value="Lakouablia">Lakouablia</option>
                      <option value="Lbir Jdid">Lbir Jdid</option>
                      <option value="Loualidia">Loualidia</option>
                      <option value="Loulad">Loulad</option>
                      <option value="Lqliaa">Lqliaa</option>
                      <option value="Maaziz">Maaziz</option>
                      <option value="Madagh">Madagh</option>
                      <option value="Marrakech">Marrakech</option>
                      <option value="Martil">Martil</option>
                      <option value="Massa">Massa</option>
                      <option value="Matmata">Matmata</option>
                      <option value="M`Diq">M`Diq</option>
                      <option value="Médiouna">Médiouna</option>
                      <option value="Mechra Bel Ksiri">
                        Mechra Bel Ksiri
                      </option>
                      <option value="Mehdya">Mehdya</option>
                      <option value="Meknès">Meknès</option>
                      <option value="M`Haya">M`Haya</option>
                      <option value="Midar">Midar</option>
                      <option value="Midelt">Midelt</option>
                      <option value="Missour">Missour</option>
                      <option value="Mohammédia">Mohammédia</option>
                      <option value="Moqrisset">Moqrisset</option>
                      <option value="Moulay Abdallah">Moulay Abdallah</option>
                      <option value="Moulay Ali Chérif">
                        Moulay Ali Chérif
                      </option>
                      <option value="Moulay Bouazza">Moulay Bouazza</option>
                      <option value="Moulay Bousselham">
                        Moulay Bousselham
                      </option>
                      <option value="Moulay Brahim">Moulay Brahim</option>
                      <option value="Moulay Driss Zerhoun">
                        Moulay Driss Zerhoun
                      </option>
                      <option value="M`Rirt">M`Rirt</option>
                      <option value="Nador">Nador</option>
                      <option value="Naïma">Naïma</option>
                      <option value="Nouaceur">Nouaceur</option>
                      <option value="Oualidia">Oualidia</option>
                      <option value="Ouaouizeght">Ouaouizeght</option>
                      <option value="Ouarzazate">Ouarzazate</option>
                      <option value="Oued Amlil">Oued Amlil</option>
                      <option value="Oued Heïmer">Oued Heïmer</option>
                      <option value="Oued Laou">Oued Laou</option>
                      <option value="Oued Zem">Oued Zem</option>
                      <option value="Ouezzane">Ouezzane</option>
                      <option value="Ouislane">Ouislane</option>
                      <option value="Oujda">Oujda</option>
                      <option value="Oulad Abbou">Oulad Abbou</option>
                      <option value="Oulad Amrane">Oulad Amrane</option>
                      <option value="Oulad Ayad">Oulad Ayad</option>
                      <option value="Oulad Berhil">Oulad Berhil</option>
                      <option value="Oulad Frej">Oulad Frej</option>
                      <option value="Oulad Ghadbane">Oulad Ghadbane</option>
                      <option value="Oulad H`Riz Sahel">
                        Oulad H`Riz Sahel
                      </option>
                      <option value="Oulad M`Barek">Oulad M`Barek</option>
                      <option value="Oulad Mrah">Oulad Mrah</option>
                      <option value="Oulad Saïd">Oulad Saïd</option>
                      <option value="Oulad Tayeb">Oulad Tayeb</option>
                      <option value="Oulad Teïma">Oulad Teïma</option>
                      <option value="Oulad Yaïch">Oulad Yaïch</option>
                      <option value="Oulad Zbaïr">Oulad Zbaïr</option>
                      <option value="Oulmès">Oulmès</option>
                      <option value="Oum El Guerdane">Oum El Guerdane</option>
                      <option value="Ounagha">Ounagha</option>
                      <option value="Outat El Haj">Outat El Haj</option>
                      <option value="Rabat">Rabat</option>
                      <option value="Ras El Aïn">Ras El Aïn</option>
                      <option value="Ras El Ma">Ras El Ma</option>
                      <option value="Ribate El Kheïr">Ribate El Kheïr</option>
                      <option value="Rissani">Rissani</option>
                      <option value="Rommani">Rommani</option>
                      <option value="Sabaa Aiyoun">Sabaa Aiyoun</option>
                      <option value="Safi">Safi</option>
                      <option value="Saïdia">Saïdia</option>
                      <option value="Salé">Salé</option>
                      <option value="Sebt El Guerdane">
                        Sebt El Guerdane
                      </option>
                      <option value="Sebt El Maarif">Sebt El Maarif</option>
                      <option value="Sebt Gzoula">Sebt Gzoula</option>
                      <option value="Sebt Jahjouh">Sebt Jahjouh</option>
                      <option value="Sefrou">Sefrou</option>
                      <option value="Selouane">Selouane</option>
                      <option value="Semara">Semara</option>
                      <option value="Settat">Settat</option>
                      <option value="Sid L`Mokhtar">Sid L`Mokhtar</option>
                      <option value="Sid Zouin">Sid Zouin</option>
                      <option value="Sidi Abdallah Ghiat">
                        Sidi Abdallah Ghiat
                      </option>
                      <option value="Sidi Addi">Sidi Addi</option>
                      <option value="Sidi Ahmed">Sidi Ahmed</option>
                      <option value="Sidi Ali Ban Hamdouche">
                        Sidi Ali Ban Hamdouche
                      </option>
                      <option value="Sidi Allal El Bahraoui">
                        Sidi Allal El Bahraoui
                      </option>
                      <option value="Sidi Allal Tazi">Sidi Allal Tazi</option>
                      <option value="Sidi Bennour">Sidi Bennour</option>
                      <option value="Sidi Bou Othmane">
                        Sidi Bou Othmane
                      </option>
                      <option value="Sidi Boubker">Sidi Boubker</option>
                      <option value="Sidi Bouknadel">Sidi Bouknadel</option>
                      <option value="Sidi Bouzid">Sidi Bouzid</option>
                      <option value="Sidi Kacem">Sidi Kacem</option>
                      <option value="Sidi Hajjaj Oulad Mrah">
                        Sidi Hajjaj Oulad Mrah
                      </option>
                      <option value="Sidi Ifni">Sidi Ifni</option>
                      <option value="Sidi Jaber">Sidi Jaber</option>
                      <option value="Sidi Lyamani">Sidi Lyamani</option>
                      <option value="Sidi Rahhal">Sidi Rahhal</option>
                      <option value="Sidi Rahhal Chataï">
                        Sidi Rahhal Chataï
                      </option>
                      <option value="Sidi Slimane">Sidi Slimane</option>
                      <option value="Sidi Slimane Echcharraa">
                        Sidi Slimane Echcharraa
                      </option>
                      <option value="Sidi Smaïl">Sidi Smaïl</option>
                      <option value="Sidi Taïbi">Sidi Taïbi</option>
                      <option value="Sidi Yahya El Gharb">
                        Sidi Yahya El Gharb
                      </option>
                      <option value="Skhirate">Skhirate</option>
                      <option value="Skhour Rehamna">Skhour Rehamna</option>
                      <option value="Skoura">Skoura</option>
                      <option value="Smara">Smara</option>
                      <option value="Smimou">Smimou</option>
                      <option value="Soualem">Soualem</option>
                      <option value="Souk El Arbaâ">Souk El Arbaâ</option>
                      <option value="Souk Sebt Oulad Nemma">
                        Souk Sebt Oulad Nemma
                      </option>
                      <option value="Tabounte">Tabounte</option>
                      <option value="Tafetachte">Tafetachte</option>
                      <option value="Tafraout">Tafraout</option>
                      <option value="Tafrisset">Tafrisset</option>
                      <option value="Taghjijt">Taghjijt</option>
                      <option value="Tahannaout">Tahannaout</option>
                      <option value="Tahla">Tahla</option>
                      <option value="Taïnaste">Taïnaste</option>
                      <option value="Talmest">Talmest</option>
                      <option value="Taliouine">Taliouine</option>
                      <option value="Talsint">Talsint</option>
                      <option value="Tamallalt">Tamallalt</option>
                      <option value="Tamanar">Tamanar</option>
                      <option value="Tamassint">Tamassint</option>
                      <option value="Tamegroute">Tamegroute</option>
                      <option value="Tameslouht">Tameslouht</option>
                      <option value="Tanger">Tanger</option>
                      <option value="Tan-Tan">Tan-Tan</option>
                      <option value="Taounate">Taounate</option>
                      <option value="Tarfaya">Tarfaya</option>
                      <option value="Targuist">Targuist</option>
                      <option value="Taourirt">Taourirt</option>
                      <option value="Taroudant">Taroudant</option>
                      <option value="Tata">Tata</option>
                      <option value="Taza">Taza</option>
                      <option value="Taznakht">Taznakht</option>
                      <option value="Témara">Témara</option>
                      <option value="Temsia">Temsia</option>
                      <option value="Tendrara">Tendrara</option>
                      <option value="Tétouan">Tétouan</option>
                      <option value="Thar Es Souk">Thar Es Souk</option>
                      <option value="Tidass">Tidass</option>
                      <option value="Tiflet">Tiflet</option>
                      <option value="Tighassaline">Tighassaline</option>
                      <option value="Tighza">Tighza</option>
                      <option value="Timahdite">Timahdite</option>
                      <option value="Tinejdad">Tinejdad</option>
                      <option value="Tinghir">Tinghir</option>
                      <option value="Tissa">Tissa</option>
                      <option value="Tit Mellil">Tit Mellil</option>
                      <option value="Tiznit">Tiznit</option>
                      <option value="Tnine Aglou">Tnine Aglou</option>
                      <option value="Toulal">Toulal</option>
                      <option value="Toumliline">Toumliline</option>
                      <option value="Toundoute">Toundoute</option>
                      <option value="Touza">Touza</option>
                      <option value="Tritta">Tritta</option>
                      <option value="Zag">Zag</option>
                      <option value="Zagora">Zagora</option>
                      <option value="Zaida">Zaida</option>
                      <option value="Zaïo">Zaïo</option>
                      <option value="Zaïda">Zaïda</option>
                      <option value="Zaïo">Zaïo</option>
                      <option value="Zaouia d`Ifrane">Zaouia d`Ifrane</option>
                      <option value="Zaouïat Cheikh">Zaouïat Cheikh</option>
                      <option value="Zaouïat Dahou">Zaouïat Dahou</option>
                      <option value="Zaouïat Sidi Hamza">
                        Zaouïat Sidi Hamza
                      </option>
                      <option value="Zaouïat Sidi Kacem">
                        Zaouïat Sidi Kacem
                      </option>
                      <option value="Zerkten">Zerkten</option>
                      <option value="Zirara">Zirara</option>
                      <option value="Znada">Znada</option>
                      <option value="Zoug">Zoug</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 right">
                <label class="col-md-4 control-label right">Date de Naissance</label>
                  <div>
                  <input name="divorce_enf_date_naissance[]" class="form-control" type="date" />
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Diplome -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Diplôme</label>
              <div>
                <select name="diplome" class="formc1 selectpicker" required>
                  <option value=" ">Diplôme</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 right">
              <label class="col-md-4 control-label right">Splécialité</label>
              <div>
                <select name="specialite" class="formc1 right" required>
                  <option value=" ">Splécialité</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </fieldset>
      <fieldset>
        <legend>
          <h2>ETAT ADMINISTRATIF</h2>
        </legend>
        <!-- Recrut day-->
        <div class="form-group">
          <label class="col-md-4 control-label">Date de Recrutement</label>
          <div class="col-md-4">
            <div>
              <input name="date_recrutement" class="form-control" type="date" required />
            </div>
          </div>
        </div>

        <!-- Grade -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Grade</label>
              <div>
                <select name="grade_fr" id="grade_fr" class="formc1 selectpicker" onchange="indicegen();resetEchelonAndEchelle();updateEchelleOptions()" required>
                  <option value=" ">Grade</option>
                  <option value="administrateur 1er grade">
                    Administrateur 1er Grade
                  </option>
                  <option value="administrateur 2eme grade">
                    Administrateur 2ème Grade
                  </option>
                  <option value="administrateur 3eme grade">
                    Administrateur 3ème Grade
                  </option>
                  <option value="administrateur mi">Administrateur MI</option>
                  <option value="administrateur principal mi">
                    Administrateur Principal MI
                  </option>
                  <option value="administrateur adjoint mi">
                    Administrateur Adjoint MI
                  </option>
                  <option value="ingenieur en chef">Ingénieur en Chef</option>
                  <option value="ingenieur etat">Ingénieur d`État</option>
                  <option value="architecte chef">Architecte Chef</option>
                  <option value="architecte">Architecte</option>
                  <option value="medecin">Médecin</option>
                  <option value="veterinaire">Vétérinaire</option>
                  <option value="redacteur 1er grade">
                    Rédacteur 1er Grade
                  </option>
                  <option value="redacteur 2eme grade">
                    Rédacteur 2ème Grade
                  </option>
                  <option value="redacteur 3eme grade">
                    Rédacteur 3ème Grade
                  </option>
                  <option value="redacteur 4eme grade">
                    Rédacteur 4ème Grade
                  </option>
                  <option value="adjoint technique grade principal">
                    Adjoint Technique Grade Principal
                  </option>
                  <option value="adjoint technique 1er grade">
                    Adjoint Technique 1er Grade
                  </option>
                  <option value="adjoint technique 2eme grade">
                    Adjoint Technique 2ème Grade
                  </option>
                  <option value="adjoint administratif grade principal">
                    Adjoint Administratif Grade Principal
                  </option>
                  <option value="adjoint administratif 1er grade">
                    Adjoint Administratif 1er Grade
                  </option>
                  <option value="adjoint administratif 2eme grade">
                    Adjoint Administratif 2ème Grade
                  </option>
                  <option value="infirmier grade principal">
                    Infirmier Grade Principal
                  </option>
                  <option value="infirmier grade exceptionnel">
                    Infirmier Grade Exceptionnel
                  </option>
                  <option value="infirmier 1er grade">
                    Infirmier 1er Grade
                  </option>
                  <option value="technicien 1er grade">
                    Technicien 1er Grade
                  </option>
                  <option value="technicien 2eme grade">
                    Technicien 2ème Grade
                  </option>
                  <option value="technicien 3eme grade">
                    Technicien 3ème Grade
                  </option>
                  <option value="technicien 4eme grade">
                    Technicien 4ème Grade
                  </option>
                </select>
              </div>
            </div>
            <div class="col-md-4 right">
              <label class="col-md-4 control-label right">رتبة</label>
              <div>
                <select name="Grade_ar" id="grade_ar" class="formc1 right disabled-select" >
                  <option value=" ">رتبة</option>
                  <option value="متصرف من الدرجة الاولى">
                    متصرف من الدرجة الاولى
                  </option>
                  <option value="متصرف من الدرجة التانية">
                    متصرف من الدرجة التانية
                  </option>
                  <option value="متصرف من الدرجة التالتة">
                    متصرف من الدرجة التالتة
                  </option>
                  <option value="متصرف">متصرف</option>
                  <option value="متصرف ممتاز">متصرف ممتاز</option>
                  <option value="متصرف مساعد">متصرف مساعد</option>
                  <option value="مهندس رئيس">مهندس رئيس</option>
                  <option value="مهندس دولة">مهندس دولة</option>
                  <option value="مهندس معماري رئيس">مهندس معماري رئيس</option>
                  <option value="مهندس معماري">مهندس معماري</option>
                  <option value="طبيب">طبيب</option>
                  <option value="طبيب بيطري">طبيب بيطري</option>
                  <option value="محرر من الدرجة الأولى">
                    محرر من الدرجة الأولى
                  </option>
                  <option value="محرر من الدرجة التانية">
                    محرر من الدرجة التانية
                  </option>
                  <option value="محرر من الدرجة التالتة">
                    محرر من الدرجة التالتة
                  </option>
                  <option value="محرر من الدرجة الرابعة">
                    محرر من الدرجة الرابعة
                  </option>
                  <option value="مساعد تقني من الدرجة الممتازة">
                    مساعد تقني من الدرجة الممتازة
                  </option>
                  <option value="مساعد تقني من الدرجة الاولى">
                    مساعد تقني من الدرجة الاولى
                  </option>
                  <option value="مساعد تقني من الدرجة التانية">
                    مساعد تقني من الدرجة التانية
                  </option>
                  <option value="مساعد إداري من الدرجة الممتازة">
                    مساعد إداري من الدرجة الممتازة
                  </option>
                  <option value="مساعد إداري من الدرجة الاولى">
                    مساعد إداري من الدرجة الاولى
                  </option>
                  <option value="مساعد إداري من الدرجة التانية">
                    مساعد إداري من الدرجة التانية
                  </option>
                  <option value="ممرض من الدرجة الممتازة">
                    ممرض من الدرجة الممتازة
                  </option>
                  <option value="ممرض من الدرجة الستتنإية">
                    ممرض من الدرجة الستتنإية
                  </option>
                  <option value="ممرض من الدرجة الاولى">
                    ممرض من الدرجة الاولى
                  </option>
                  <option value="تقني من الدرجة الأولى">
                    تقني من الدرجة الأولى
                  </option>
                  <option value="تقني من الدرجة التانية">
                    تقني من الدرجة التانية
                  </option>
                  <option value="تقني من الدرجة التالتة">
                    تقني من الدرجة التالتة
                  </option>
                  <option value="تقني من الدرجة الرابعة">
                    تقني من الدرجة الرابعة
                  </option>
                </select>
              </div>


            </div>
          </div>
        </div>

        <!-- Ech -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Echelle</label>
              <div>
                <select name="echelle" id="echelle" class="formc1 selectpicker" required>
                  <option value=" ">Echelle</option>
                  <option value="6">6</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="1er grade">1er Grade</option>
                  <option value="grade principal">Grade principal</option>
                  <option value="grade exceptionnel">
                    Grade exceptionnel
                  </option>
                  <option value="hors echelle">Hors echelle</option>
                </select>
              </div>
            </div>

            <div class="col-md-4 right">
              <label class="col-md-4 control-label">Date d`échelle</label>
              <div>
                <input name="date_echelle" class="form-control3" type="date" required />
              </div>
            </div>
          </div>
        </div>

        <!-- ech -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Echelon</label>
              <div>
                <select name="echelon" id="echelon" class="formc1 selectpicker" onchange="indicegen()" required>
                  <option value=" ">Echelon</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="exceptionnel">exceptionnel</option>
                </select>
              </div>
            </div>

            <div class="col-md-4 right">
              <label class="col-md-4 control-label">Date d`échelon</label>
              <div>
                <input name="date_echelon" class="form-control3" type="date" required />
              </div>
            </div>
          </div>
        </div>

        <!-- Postion/Indice -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Indice</label>
              <div>
                <input name="indice" id="indice" placeholder="Indice" class="form-control1 disabled-select" type="text" required />
              </div>
            </div>

            <div class="col-md-4 right">
              <label class="col-md-4 control-label">Position</label>
              <div>
                <select name="position" class="formc1 selectpicker" required>
                  <option value=" ">Position</option>
                  <option value="officiel">Officiel</option>
                  <option value="activite">En activité</option>
                  <option value="detachement">Détachement</option>
                  <option value="mise disposition">Mise à disposition</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Notes/Ann -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-5">
              <label class="col-md-5 control-label">Note1</label>
              <div class="form1-group">
                <div class="form1-group">
                  <input name="note[]" id="note1" placeholder="Note1" class="form-control" max="20" type="number" oninput="extractYear('note1');checkNumberValidity(this)" required />
                </div>
                <div class="form1-group">
                  <input name="note_ann[]" id="note1_ann" placeholder="Ann" class="form-control" type="text" readonly />
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <label class="col-md-4 control-label">Note2</label>
              <div class="form1-group">
                <div class="form1-group">
                  <input name="note[]" id="note2" placeholder="Note2" class="form-control" max="20" type="number" oninput="extractYear('note2');checkNumberValidity(this)" required />
                </div>
                <div class="form1-group">
                  <input name="note_ann[]" id="note2_ann" placeholder="Ann" class="form-control" type="text" readonly />
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <label class="col-md-4 control-label">Note3</label>
              <div class="form1-group">
                <div class="form1-group">
                  <input name="note[]" id="note3" placeholder="Note3" class="form-control" max="20" type="number" oninput="extractYear('note3');checkNumberValidity(this)" required />
                </div>
                <div class="form1-group">
                  <input name="note_ann[]" id="note3_ann" placeholder="Ann" class="form-control" type="text" readonly />
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <label class="col-md-5 control-label">Note4</label>
              <div class="form1-group">
                <div class="form1-group">
                  <input name="note[]" id="note4" placeholder="Note4" class="form-control" type="text" oninput="extractYear('note4');checkNumberValidity(this)" required />
                </div>
                <div class="form1-group">
                  <input name="note_ann[]" id="note4_ann" placeholder="Ann" class="form-control" type="text" readonly />
                </div>
              </div>
            </div>
          </div>
        </div>
      </fieldset>
      <fieldset>
        <legend>
          <h2>FONCTION</h2>
        </legend>
        <!-- Division -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Division</label>
              <div>
                <select name="division_fr" id="division_fr" class="formc1 selectpicker" onchange="updateservice()" required>
                  <option value="">Division</option>
                  <option value="Direction des services communaux">
                    Direction des services communaux
                  </option>
                  <option value="Division des affaires techniques et d`urbanisme">
                    Division des affaires techniques et d`urbanisme
                  </option>
                  <option value="Division des affaires administratives">
                    Division des affaires administratives
                  </option>
                  <option value="Division des affaires financière et économiques">
                    Division des affaires financière et économiques
                  </option>
                </select>
              </div>
            </div>
            <div class="col-md-4 right">
              <label class="col-md-4 control-label right">القسم</label>
              <div>
                <select name="division_ar" id="division_ar" class="formc1 righ disabled-select" >
                  <option value=" ">القسم</option>
                  <option value="قسم الشؤون التقنية والتعمير">
                    قسم الشؤون التقنية والتعمير
                  </option>
                  <option value="قسم الشؤون الادارية">
                    قسم الشؤون الادارية
                  </option>
                  <option value="قسم الشؤون المالية والاقتصادية">
                    قسم الشؤون المالية والاقتصادية
                  </option>
                  <option value="مديرية المصالح الجماعية">
                    مديرية المصالح الجماعية
                  </option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Service -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Service</label>
              <div>
                <select name="service_fr" id="service_fr" class="formc1 selectpicker" required>
                  <option value=" ">Service</option>
                  <option value="Service des travaux et de la protection de l`environement">
                    Service des travaux et de la protection de l`environement
                  </option>
                  <option value="Service d`urbanisme et du patrimoine">
                    Service d`urbanisme et du patrimoine
                  </option>
                  <option value="Service de la gestion déléguée des engins du materiel">
                    Service de la gestion déléguée des engins du materiel
                  </option>
                  <option value="Service des ressources humaines et de le formation">
                    Service des ressources humaines et de le formation
                  </option>
                  <option value="Service des affaires juridiques de l`informatique et des affaires du conseil">
                    Service des affaires juridiques de l`informatique et des
                    affaires du conseil
                  </option>
                  <option value="Service des affaires sociales culturelles et sportives">
                    Service des affaires sociales culturelles et sportives
                  </option>
                  <option value="Service des ressources financières">
                    Service des ressources financières
                  </option>
                  <option value="Service des marchés et du budget">
                    Service des marchés et du budget
                  </option>
                  <option value="Service economique de la police administrative et d`hygiene">
                    Service economique de la police administrative et
                    d`hygiene
                  </option>
                </select>
              </div>
            </div>
            <div class="col-md-4 right">
              <label class="col-md-4 control-label right">المصلحة</label>
              <div>
                <select name="service_ar" id="service_ar" class="formc1 right disabled-select" >
                  <option value=" ">المصلحة</option>
                  <option value="مصلحة الأشغال والمحافظة على البيئة">
                    مصلحة الأشغال والمحافظة على البيئة
                  </option>
                  <option value="مصلحة التعمير والممتلكات">
                    مصلحة التعمير والممتلكات
                  </option>
                  <option value="مصلحة التدبير المفوض والأليات المعتاد">
                    مصلحة التدبير المفوض والأليات المعتاد
                  </option>
                  <option value="مصلحة الموارد البشرية والتكوين">
                    مصلحة الموارد البشرية والتكوين
                  </option>
                  <option value="مصلحة الشؤون القانونية والمعلوميات وشؤون المجلس">
                    مصلحة الشؤون القانونية والمعلوميات وشؤون المجلس
                  </option>
                  <option value="مصلحة الشؤون الاجتماعية والثقافية والرياضية">
                    مصلحة الشؤون الاجتماعية والثقافية والرياضية
                  </option>
                  <option value="مصلحة الموارد المالية">
                    مصلحة الموارد المالية
                  </option>
                  <option value="مصلحة الصفقات والميزانية">
                    مصلحة الصفقات والميزانية
                  </option>
                  <option value="المصلحة الاقتصادية والشرطة الادارية و حفظ الصحة">
                    المصلحة الاقتصادية والشرطة الادارية و حفظ الصحة
                  </option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Bureau -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Bureau</label>
              <div>
                <select name="bureau_fr" id="bureau_fr" class="formc1 selectpicker" required>
                  <option value=" ">Bureau</option>
                  <option value="Bureau des traveaux">
                    Bureau des traveaux
                  </option>
                  <option value="Bureau de l`éclarage public">
                    Bureau de l`éclarage public
                  </option>
                  <option value="Bureau des éspace verts et de la protection de l`environement">
                    Bureau des éspace verts et de la protection de
                    l`environement
                  </option>
                  <option value="Bureau du gichet unique des autorisations et du control du batiment">
                    Bureau du gichet unique des autorisations et du control du
                    batiment
                  </option>
                  <option value="Bureau du patrimoine">
                    Bureau du patrimoine
                  </option>
                  <option value="Bureau des affaires juridiques">
                    Bureau des affaires juridiques
                  </option>
                  <option value="Bureau de l`informatique">
                    Bureau de l`informatique
                  </option>
                  <option value="Bureau des affaires du conseil">
                    Bureau des affaires du conseil
                  </option>
                  <option value="Bureau d`état civil de la legalisation de signature et ses annexes">
                    Bureau d`état civil de la legalisation de signature et ses
                    annexes
                  </option>
                  <option value="Bureau des marchés">
                    Bureau des marchés
                  </option>
                  <option value="Bureau des budget">Bureau des budget</option>
                  <option value="Bureau economique et sociale">
                    Bureau economique et sociale
                  </option>
                  <option value="Bureau de la police administrative">
                    Bureau de la police administrative
                  </option>
                  <option value="Bureau d`hygiène et de la prévention">
                    Bureau d`hygiène et de la prévention
                  </option>
                  <option value="Burau de la santé vétérinaire">
                    Burau de la santé vétérinaire
                  </option>
                  <option value="Cellule d`audit">Cellule d`audit</option>
                  <option value="Secrétariat du président">
                    Secrétariat du président
                  </option>
                  <option value="Bureau des réclamations">
                    Bureau des réclamations
                  </option>
                  <option value="Bureau d`ordre">Bureau d`ordre</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 right">
              <label class="col-md-4 control-label right">المكتب</label>
              <div>
                <select name="bureau_ar" id="bureau_ar" class="formc1 right disabled-select" >
                  <option value=" ">المكتب</option>
                  <option value="مكتب الأشغال">مكتب الأشغال</option>
                  <option value="مكتب الإنارة العمومية">
                    مكتب الإنارة العمومية
                  </option>
                  <option value="مكتب المناطق الخضراء والمحافظة على البيئة">
                    مكتب المناطق الخضراء والمحافظة على البيئة
                  </option>
                  <option value="مكتب الشباك الوحيد والرخص ومراقبة البناء">
                    مكتب الشباك الوحيد والرخص ومراقبة البناء
                  </option>
                  <option value="مكتب الممتلكات">مكتب الممتلكات</option>
                  <option value="مكتب الشؤون القانونية">
                    مكتب الشؤون القانونية
                  </option>
                  <option value="مكتب المعلوميات">مكتب المعلوميات</option>
                  <option value="مكتب شؤون المجلس">مكتب شؤون المجلس</option>
                  <option value="مكتب الحالة المدنية وتصحيح و الإمضاء وملحقاته">
                    مكتب الحالة المدنية وتصحيح و الإمضاء وملحقاته
                  </option>
                  <option value="مكتب الصفقات">مكتب الصفقات</option>
                  <option value="مكتب الميزانية">مكتب الميزانية</option>
                  <option value="المكتب الإقتصادي والإجتماعي">
                    المكتب الإقتصادي والإجتماعي
                  </option>
                  <option value="مكتب الشرطة الإدارية">
                    مكتب الشرطة الإدارية
                  </option>
                  <option value="مكتب حفظ الصحة والوقاية">
                    مكتب حفظ الصحة والوقاية
                  </option>
                  <option value="مكتب الصحة البيطرية">
                    مكتب الصحة البيطرية
                  </option>
                  <option value="خلية الإفتحاص">خلية الإفتحاص</option>
                  <option value="الكتابة الخاصة للرئيس">
                    الكتابة الخاصة للرئيس
                  </option>
                  <option value="مكتب الشكايات">مكتب الشكايات</option>
                  <option value="مكتب الضبط">مكتب الضبط</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Affectation -->
        <div class="form-group">
          <div class="form1-group">
            <div class="col-md-4">
              <label class="col-md-4 control-label">Date d`affectation</label>
              <div>
                <input name="date_affectation" class="form-control1" type="date" required />
              </div>
            </div>
          </div>
        </div>
      </fieldset>
      <!-- Button -->
      <div class="form-group">
        <legend>
          <div>
            <button type="submit" class="btn1 btn-warning margin-top: 20px;" name="subm">
              Confirm
            </button>
          </div>
        </legend>
      </div>
    </form>
  </div>
  <script src="info.js"></script>
</body>

</html>