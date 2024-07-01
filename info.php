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
                  <select name="sexe" id="sexe">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="col-md-4 right">
                  <label class="col-md-4 control-label">الجنس</label>
                  <select name="sexe_ar" id="sexe_ar">
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
              <label class="col-md-4 control-label right">مكان الإزدياد</label>
              <div>
                <select name="Lieu_Nai_ar" class="formc1 right" required>                   
                      <option value=" ">مكان الإزدياد</option>
                      <option value="أفورار">أفورار</option>
                      <option value="أكادير">أكادير</option>
                      <option value="أغبالا">أغبالا</option>
                      <option value="أغبالو">أغبالو</option>
                      <option value="أكدز">أكدز</option>
                      <option value="أغوراي">أغوراي</option>
                      <option value="أگلموس">أگلموس</option>
                      <option value="أحفير">أحفير</option>
                      <option value="عين لهوا">عين لهوا</option>
                      <option value="عين بني مطهر">عين بني مطهر</option>
                      <option value="عين شقاق">عين شقاق</option>
                      <option value="عين الدريج">عين الدريج</option>
                      <option value="عين العودة">عين العودة</option>
                      <option value="عين الركادة">عين الركادة</option>
                      <option value="عين حرودة">عين حرودة</option>
                      <option value="عين جمعة">عين جمعة</option>
                      <option value="عين كرمة">عين كرمة</option>
                      <option value="عين تاوجدات">عين تاوجدات</option>
                      <option value="آيت يعزة">آيت يعزة</option>
                      <option value="آيت باها">آيت باها</option>
                      <option value="آيت بوبيدم">آيت بوبيدم</option>
                      <option value="آيت داود">آيت داود</option>
                      <option value="آيت إسحاق">آيت إسحاق</option>
                      <option value="آيت ملول">آيت ملول</option>
                      <option value="آيت أورير">آيت أورير</option>
                      <option value="أكا">أكا</option>
                      <option value="أكليم">أكليم</option>
                      <option value="أكنول">أكنول</option>
                      <option value="عجدير">عجدير</option>
                      <option value="العروي">العروي</option>
                      <option value="الحسيمة">الحسيمة</option>
                      <option value="النيف">النيف</option>
                      <option value="أمالو إغريبن">أمالو إغريبن</option>
                      <option value="أمزميز">أمزميز</option>
                      <option value="أوفوس">أوفوس</option>
                      <option value="أولوز">أولوز</option>
                      <option value="أورير">أورير</option>
                      <option value="الرباوة">الرباوة</option>
                      <option value="أرفود">أرفود</option>
                      <option value="أسا">أسا</option>
                      <option value="الساحريج">الساحريج</option>
                      <option value="أصيلة">أصيلة</option>
                      <option value="أزمور">أزمور</option>
                      <option value="أزيلال">أزيلال</option>
                      <option value="أزرو">أزرو</option>
                      <option value="باب برد">باب برد</option>
                      <option value="باب تازة">باب تازة</option>
                      <option value="بجاض">بجاض</option>
                      <option value="بن أحمد">بن أحمد</option>
                      <option value="بن جرير">بن جرير</option>
                      <option value="بن الطاهر">بن الطاهر</option>
                      <option value="بن يخلف">بن يخلف</option>
                      <option value="بني ملال">بني ملال</option>
                      <option value="بن سليمان">بن سليمان</option>
                      <option value="بركان">بركان</option>
                      <option value="برشيد">برشيد</option>
                      <option value="بحاليل">بحاليل</option>
                      <option value="بيوگرا">بيوگرا</option>
                      <option value="بني أنصار">بني أنصار</option>
                      <option value="بني بوعياش">بني بوعياش</option>
                      <option value="بني شيكر">بني شيكر</option>
                      <option value="بني درار">بني درار</option>
                      <option value="بني حديفة">بني حديفة</option>
                      <option value="بني تجيت">بني تجيت</option>
                      <option value="بوعنان">بوعنان</option>
                      <option value="بوعرفة">بوعرفة</option>
                      <option value="بودنيب">بودنيب</option>
                      <option value="بوگدرة">بوگدرة</option>
                      <option value="بوهديلة">بوهديلة</option>
                      <option value="بويزكارن">بويزكارن</option>
                      <option value="بوجدور">بوجدور</option>
                      <option value="بوجنيبة">بوجنيبة</option>
                      <option value="بولانوار">بولانوار</option>
                      <option value="بولمان">بولمان</option>
                      <option value="بولمان الدادس">بولمان الدادس</option>
                      <option value="بومية">بومية</option>
                      <option value="بوسكورة">بوسكورة</option>
                      <option value="بوزنيقة">بوزنيقة</option>
                      <option value="بوزتات">بوزتات</option>
                      <option value="برادية">برادية</option>
                      <option value="بريكشة">بريكشة</option>
                      <option value="بزو">بزو</option>
                      <option value="الدار البيضاء">الدار البيضاء</option>
                      <option value="شفشاون">شفشاون</option>
                      <option value="شيشاوة">شيشاوة</option>
                      <option value="الداخلة">الداخلة</option>
                      <option value="دار بني كريش">دار بني كريش</option>
                      <option value="دار الشاوي">دار الشاوي</option>
                      <option value="دار الكبداني">دار الكبداني</option>
                      <option value="دار الواعري">دار الواعري</option>
                      <option value="دار ولد زيدوه">دار ولد زيدوه</option>
                      <option value="الدشيرة الجهادية">الدشيرة الجهادية</option>
                      <option value="دبدو">دبدو</option>
                      <option value="دمنات">دمنات</option>
                      <option value="دروة">دروة</option>
                      <option value="دراركة">دراركة</option>
                      <option value="الفقيه بن صالح">الفقيه بن صالح</option>
                      <option value="فجيج">فجيج</option>
                      <option value="فكيك">فكيك</option>
                      <option value="فاس">فاس</option>
                      <option value="فاس المكناس">فاس المكناس</option>
                      <option value="فگيغ">فگيغ</option>
                      <option value="فگيك">فگيك</option>
                      <option value="فگيگ">فگيگ</option>
                      <option value="فگيق">فگيق</option>
                      <option value="فگيت">فگيت</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="فگوغة">فگوغة</option>
                      <option value="فگيغة">فگيغة</option>
                      <option value="فگيكة">فگيكة</option>
                      <option value="فگيگة">فگيگة</option>
                      <option value="فگيقة">فگيقة</option>
                      <option value="فگيتة">فگيتة</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="فگوغة">فگوغة</option>
                      <option value="فگوغتة">فگوغتة</option>
                      <option value="فگيت">فگيت</option>
                      <option value="فگيتة">فگيتة</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="فگوغة">فگوغة</option>
                      <option value="فگيت">فگيت</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="گنتور">گنتور</option>
                      <option value="گرفاية">گرفاية</option>
                      <option value="گلميم">گلميم</option>
                      <option value="گرسيف">گرسيف</option>
                      <option value="گزناية">گزناية</option>
                      <option value="گيگو">گيگو</option>
                      <option value="گيسر">گيسر</option>
                      <option value="حد بوحسوسن">حد بوحسوسن</option>
                      <option value="حد كورت">حد كورت</option>
                      <option value="حد وادي إفران">حد وادي إفران</option>
                      <option value="حاج قدور">حاج قدور</option>
                      <option value="الحطان">الحطان</option>
                      <option value="الحوارة">الحوارة</option>
                      <option value="إفران أطلس الصغير">إفران أطلس الصغير</option>
                      <option value="إفران">إفران</option>
                      <option value="إغود">إغود</option>
                      <option value="إهدادن">إهدادن</option>
                      <option value="إمنتانوت">إمنتانوت</option>
                      <option value="إموزار قندر">إموزار قندر</option>
                      <option value="إموزار مرموشة">إموزار مرموشة</option>
                      <option value="إمزورن">إمزورن</option>
                      <option value="إنزگان">إنزگان</option>
                      <option value="إرھرم">إرھرم</option>
                      <option value="إيساغون">إيساغون</option>
                      <option value="إتزر">إتزر</option>
                      <option value="جعادر">جعادر</option>
                      <option value="جماعة الشايم">جماعة الشايم</option>
                      <option value="جبھا">جبھا</option>
                      <option value="جرادة">جرادة</option>
                      <option value="جرف">جرف</option>
                      <option value="جرف الملحة">جرف الملحة</option>
                      <option value="قلعة مكونة">قلعة مكونة</option>
                      <option value="قاريا">قاريا</option>
                      <option value="قاريا">قاريا</option>
                      <option value="قاريا با محمد">قاريا با محمد</option>
                      <option value="قاريا الركمان">قاريا الركمان</option>
                      <option value="القصبة تادلة">القصبة تادلة</option>
                      <option value="قصيطة">قصيطة</option>
                      <option value="كتارة">كتارة</option>
                      <option value="كهف النصور">كهف النصور</option>
                      <option value="القنيطرة">القنيطرة</option>
                      <option value="كرونة">كرونة</option>
                      <option value="كروشن">كروشن</option>
                      <option value="الخميس الساحل">الخميس الساحل</option>
                      <option value="الخميسات">الخميسات</option>
                      <option value="خنيفرة">خنيفرة</option>
                      <option value="الخنيشات">الخنيشات</option>
                      <option value="خريبڭة">خريبڭة</option>
                      <option value="قصر الكبير">قصر الكبير</option>
                      <option value="لعونات">لعونات</option>
                      <option value="العكارطة">العكارطة</option>
                      <option value="العطاوية">العطاوية</option>
                      <option value="العيون">العيون</option>
                      <option value="الكويرة">الكويرة</option>
                      <option value="الخصاص">الخصاص</option>
                      <option value="الحراوية">الحراوية</option>
                      <option value="لالة ميمونة">لالة ميمونة</option>
                      <option value="لالة تكركوست">لالة تكركوست</option>
                      <option value="العرائش">العرائش</option>
                      <option value="الكوابلية">الكوابلية</option>
                      <option value="لبير الجديد">لبير الجديد</option>
                      <option value="لواليدية">لواليدية</option>
                      <option value="لولاد">لولاد</option>
                      <option value="القليعة">القليعة</option>
                      <option value="معازيز">معازيز</option>
                      <option value="مادغ">مادغ</option>
                      <option value="مراكش">مراكش</option>
                      <option value="مرتيل">مرتيل</option>
                      <option value="ماسة">ماسة</option>
                      <option value="ماطماطة">ماطماطة</option>
                      <option value="مضيق">مضيق</option>
                      <option value="مديونة">مديونة</option>
                      <option value="مشرع بل قصري">مشرع بل قصري</option>
                      <option value="مهدية">مهدية</option>
                      <option value="مكناس">مكناس</option>
                      <option value="المحايا">المحايا</option>
                      <option value="ميدار">ميدار</option>
                      <option value="ميدلت">ميدلت</option>
                      <option value="ميسور">ميسور</option>
                      <option value="المحمدية">المحمدية</option>
                      <option value="مقريصيت">مقريصيت</option>
                      <option value="مولاي عبد الله">مولاي عبد الله</option>
                      <option value="مولاي علي الشريف">مولاي علي الشريف</option>
                      <option value="مولاي بوعزة">مولاي بوعزة</option>
                      <option value="مولاي بوسلهام">مولاي بوسلهام</option>
                      <option value="مولاي إبراهيم">مولاي إبراهيم</option>
                      <option value="مولاي إدريس زرهون">مولاي إدريس زرهون</option>
                      <option value="مريرت">مريرت</option>
                      <option value="الناظور">الناظور</option>
                      <option value="نعيمة">نعيمة</option>
                      <option value="النواصر">النواصر</option>
                      <option value="واليديا">واليديا</option>
                      <option value="واوزيغت">واوزيغت</option>
                      <option value="ورزازات">ورزازات</option>
                      <option value="واد امليل">واد امليل</option>
                      <option value="واد هيمر">واد هيمر</option>
                      <option value="واد لاو">واد لاو</option>
                      <option value="واد زم">واد زم</option>
                      <option value="وزان">وزان</option>
                      <option value="ويسلان">ويسلان</option>
                      <option value="وجدة">وجدة</option>
                      <option value="ولاد عبو">ولاد عبو</option>
                      <option value="ولاد عمران">ولاد عمران</option>
                      <option value="ولاد عياد">ولاد عياد</option>
                      <option value="ولاد برهيل">ولاد برهيل</option>
                      <option value="ولاد فرج">ولاد فرج</option>
                      <option value="ولاد غضبان">ولاد غضبان</option>
                      <option value="ولاد حريز الساحل">ولاد حريز الساحل</option>
                      <option value="ولاد مبارك">ولاد مبارك</option>
                      <option value="ولاد مراح">ولاد مراح</option>
                      <option value="ولاد سعيد">ولاد سعيد</option>
                      <option value="ولاد طيب">ولاد طيب</option>
                      <option value="ولاد تايمة">ولاد تايمة</option>
                      <option value="ولاد يايش">ولاد يايش</option>
                      <option value="ولاد زبير">ولاد زبير</option>
                      <option value="ولماس">ولماس</option>
                      <option value="أم الگردان">أم الگردان</option>
                      <option value="أوناكة">أوناكة</option>
                      <option value="أوطاط الحاج">أوطاط الحاج</option>
                      <option value="الرباط">الرباط</option>
                      <option value="رأس العين">رأس العين</option>
                      <option value="رأس الماء">رأس الماء</option>
                      <option value="ريبات الخير">ريبات الخير</option>
                      <option value="ريصاني">ريصاني</option>
                      <option value="الرماني">الرماني</option>
                      <option value="سبع أيون">سبع أيون</option>
                      <option value="أسفي">أسفي</option>
                      <option value="السعيدية">السعيدية</option>
                      <option value="سلا">سلا</option>
                      <option value="سبت الگردان">سبت الگردان</option>
                      <option value="سبت المعاريف">سبت المعاريف</option>
                      <option value="سبت كزولة">سبت كزولة</option>
                      <option value="سبت جهجوه">سبت جهجوه</option>
                      <option value="صفرو">صفرو</option>
                      <option value="سلوان">سلوان</option>
                      <option value="السمارة">السمارة</option>
                      <option value="سطات">سطات</option>
                      <option value="سيدي المختار">سيدي المختار</option>
                      <option value="سيدي زوين">سيدي زوين</option>
                      <option value="سيدي عبد الله غيات">سيدي عبد الله غيات</option>
                      <option value="سيدي عدي">سيدي عدي</option>
                      <option value="سيدي أحمد">سيدي أحمد</option>
                      <option value="سيدي علي بن حمدوش">سيدي علي بن حمدوش</option>
                      <option value="سيدي علال البحراوي">سيدي علال البحراوي</option>
                      <option value="سيدي علال التازي">سيدي علال التازي</option>
                      <option value="سيدي بنور">سيدي بنور</option>
                      <option value="سيدي بوعثمان">سيدي بوعثمان</option>
                      <option value="سيدي بوبكر">سيدي بوبكر</option>
                      <option value="سيدي بوكنادل">سيدي بوكنادل</option>
                      <option value="سيدي بوزيد">سيدي بوزيد</option>
                      <option value="سيدي قاسم">سيدي قاسم</option>
                      <option value="سيدي حجاج واد حسار">سيدي حجاج واد حسار</option>
                      <option value="سيدي إفني">سيدي إفني</option>
                      <option value="سيدي جابر">سيدي جابر</option>
                      <option value="سيدي كنكوش">سيدي كنكوش</option>
                      <option value="سيدي قاسم">سيدي قاسم</option>
                      <option value="سيدي اليماني">سيدي اليماني</option>
                      <option value="سيدي محمد بن علي">سيدي محمد بن علي</option>
                      <option value="سيدي رحال">سيدي رحال</option>
                      <option value="سيدي رحال الشطاي">سيدي رحال الشطاي</option>
                      <option value="سيدي سليمان">سيدي سليمان</option>
                      <option value="سيدي سليمان الشراع">سيدي سليمان الشراع</option>
                      <option value="سيدي سليمان الجبيل">سيدي سليمان الجبيل</option>
                      <option value="سيدي سليمان التازي">سيدي سليمان التازي</option>
                      <option value="سيدي إسماعيل">سيدي إسماعيل</option>
                      <option value="سيدي طيبي">سيدي طيبي</option>
                      <option value="سيدي يحيى الغرب">سيدي يحيى الغرب</option>
                      <option value="سيدي يوسف بن أحمد">سيدي يوسف بن أحمد</option>
                      <option value="سيدي يوسف بن علي">سيدي يوسف بن علي</option>
                      <option value="سيدي يوسف بن حسن">سيدي يوسف بن حسن</option>
                      <option value="سيدي يوسف مختار">سيدي يوسف مختار</option>
                      <option value="سجلماسة">سجلماسة</option>
                      <option value="سيدي بوهريا">سيدي بوهريا</option>
                      <option value="الصخيرات">الصخيرات</option>
                      <option value="سخور الرحامنة">سخور الرحامنة</option>
                      <option value="سيدي علال التازي">سيدي علال التازي</option>
                      <option value="سيدي بنور">سيدي بنور</option>
                      <option value="سيدي بوعثمان">سيدي بوعثمان</option>
                      <option value="سيدي بوزيد">سيدي بوزيد</option>
                      <option value="سيدي حجاج واد حسار">سيدي حجاج واد حسار</option>
                      <option value="سيدي إفني">سيدي إفني</option>
                      <option value="سيدي جابر">سيدي جابر</option>
                      <option value="سيدي كنكوش">سيدي كنكوش</option>
                      <option value="سيدي قاسم">سيدي قاسم</option>
                      <option value="سيدي اليماني">سيدي اليماني</option>
                      <option value="سيدي محمد بن علي">سيدي محمد بن علي</option>
                      <option value="سيدي رحال">سيدي رحال</option>
                      <option value="سيدي رحال الشطاي">سيدي رحال الشطاي</option>
                      <option value="سيدي سليمان">سيدي سليمان</option>
                      <option value="سيدي سليمان الشراع">سيدي سليمان الشراع</option>
                      <option value="سيدي سليمان الجبيل">سيدي سليمان الجبيل</option>
                      <option value="سيدي سليمان التازي">سيدي سليمان التازي</option>
                      <option value="سيدي إسماعيل">سيدي إسماعيل</option>
                      <option value="سيدي طيبي">سيدي طيبي</option>
                      <option value="سيدي يحيى الغرب">سيدي يحيى الغرب</option>
                      <option value="سيدي يوسف بن أحمد">سيدي يوسف بن أحمد</option>
                      <option value="سيدي يوسف بن علي">سيدي يوسف بن علي</option>
                      <option value="سيدي يوسف بن حسن">سيدي يوسف بن حسن</option>
                      <option value="سيدي يوسف مختار">سيدي يوسف مختار</option>
                      <option value="سجلماسة">سجلماسة</option>
                      <option value="سيدي بوهريا">سيدي بوهريا</option>
                      <option value="الصخيرات">الصخيرات</option>
                      <option value="سخور الرحامنة">سخور الرحامنة</option>
                      <option value="السميمو">السميمو</option>
                      <option value="السوالم">السوالم</option>
                      <option value="سوق الأربعاء">سوق الأربعاء</option>
                      <option value="سوق الأربعاء">سوق الأربعاء</option>
                      <option value="سوق سبت أولاد النمة">سوق سبت أولاد النمة</option>
                      <option value="سوق تلتة زمامرة">سوق تلتة زمامرة</option>
                      <option value="سري كنا">سري كنا</option>
                      <option value="سيدي سليمان مول الكيفان">سيدي سليمان مول الكيفان</option>
                      <option value="تادرت">تادرت</option>
                      <option value="تاغجيجت">تاغجيجت</option>
                      <option value="تحالة">تحالة</option>
                      <option value="تحناوت">تحناوت</option>
                      <option value="تاينست">تاينست</option>
                      <option value="تالوين">تالوين</option>
                      <option value="تالمست">تالمست</option>
                      <option value="تمنار">تمنار</option>
                      <option value="تاموروت">تاموروت</option>
                      <option value="طانطان">طانطان</option>
                      <option value="تانالت">تانالت</option>
                      <option value="طنجة">طنجة</option>
                      <option value="تاونات">تاونات</option>
                      <option value="تاوريرت">تاوريرت</option>
                      <option value="تارودانت">تارودانت</option>
                      <option value="تارودانت">تارودانت</option>
                      <option value="طاطا">طاطا</option>
                      <option value="تازوتة">تازوتة</option>
                      <option value="تازارين">تازارين</option>
                      <option value="تندرارة">تندرارة</option>
                      <option value="تطوان">تطوان</option>
                      <option value="ثر سوق">ثر سوق</option>
                      <option value="تيشوت">تيشوت</option>
                      <option value="تيداز">تيداز</option>
                      <option value="تيفلت">تيفلت</option>
                      <option value="تيفنيت">تيفنيت</option>
                      <option value="تيفرة">تيفرة</option>
                      <option value="تيفريت">تيفريت</option>
                      <option value="تيغسالين">تيغسالين</option>
                      <option value="تيغزة">تيغزة</option>
                      <option value="تيمحديت">تيمحديت</option>
                      <option value="تيموليلت">تيموليلت</option>
                      <option value="تنجداد">تنجداد</option>
                      <option value="تزنيت">تزنيت</option>
                      <option value="تيزگيت">تيزگيت</option>
                      <option value="تيزي واصلي">تيزي واصلي</option>
                      <option value="تيزي وزو">تيزي وزو</option>
                      <option value="تلتة توفيق">تلتة توفيق</option>
                      <option value="تنين شتوكة">تنين شتوكة</option>
                      <option value="تنين أوريكة">تنين أوريكة</option>
                      <option value="توارگة">توارگة</option>
                      <option value="تويمة">تويمة</option>
                      <option value="تولال">تولال</option>
                      <option value="تولكرم">تولكرم</option>
                      <option value="تولال">تولال</option>
                      <option value="تولال">تولال</option>
                      <option value="تومليلين">تومليلين</option>
                      <option value="تونفيت">تونفيت</option>
                      <option value="زاكورة">زاكورة</option>
                      <option value="زايو">زايو</option>
                      <option value="زلاق">زلاق</option>
                      <option value="زمامرة">زمامرة</option>
                      <option value="زرهون">زرهون</option>
                      <option value="زرهوني">زرهوني</option>
                      <option value="زركتان">زركتان</option>
                      <option value="زمران">زمران</option>
                      <option value="زناتة">زناتة</option>
                      <option value="زراردة">زراردة</option>
                      <option value="زيرارة">زيرارة</option>
                      <option value="زيوار">زيوار</option>
                      <option value="زنادة">زنادة</option>
                      <option value="الزومي">الزومي</option>
                      <option value="زرويلة">زرويلة</option>
                      <option value="زريزر">زريزر</option>
                    
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Birth day-->

        <div class="form-group">
          <label class="col-md-4 control-label">Date de Naissance</label>
          <div class="col-md-4">
            <div>
              <input name="date_naissance" class="form-control" type="date" required />
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
                  <select name="marie_enf_sex_fr[]" id="marie_enf_sex_fr">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="col-md-4 right">
                  <label class="col-md-4 control-label">الجنس</label>
                  <select name="marie_enf_sex_ar[]" id="marie_enf_sex_ar">
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
                  <label class="col-md-4 control-label right">مكان الإزدياد</label>
                  <div>
                    <select name="marie_enf_lieu_Nai_ar[]" class="formc1 right">
                      <option value=" ">مكان الإزدياد</option>
                      <option value="أفورار">أفورار</option>
                      <option value="أكادير">أكادير</option>
                      <option value="أغبالا">أغبالا</option>
                      <option value="أغبالو">أغبالو</option>
                      <option value="أكدز">أكدز</option>
                      <option value="أغوراي">أغوراي</option>
                      <option value="أگلموس">أگلموس</option>
                      <option value="أحفير">أحفير</option>
                      <option value="عين لهوا">عين لهوا</option>
                      <option value="عين بني مطهر">عين بني مطهر</option>
                      <option value="عين شقاق">عين شقاق</option>
                      <option value="عين الدريج">عين الدريج</option>
                      <option value="عين العودة">عين العودة</option>
                      <option value="عين الركادة">عين الركادة</option>
                      <option value="عين حرودة">عين حرودة</option>
                      <option value="عين جمعة">عين جمعة</option>
                      <option value="عين كرمة">عين كرمة</option>
                      <option value="عين تاوجدات">عين تاوجدات</option>
                      <option value="آيت يعزة">آيت يعزة</option>
                      <option value="آيت باها">آيت باها</option>
                      <option value="آيت بوبيدم">آيت بوبيدم</option>
                      <option value="آيت داود">آيت داود</option>
                      <option value="آيت إسحاق">آيت إسحاق</option>
                      <option value="آيت ملول">آيت ملول</option>
                      <option value="آيت أورير">آيت أورير</option>
                      <option value="أكا">أكا</option>
                      <option value="أكليم">أكليم</option>
                      <option value="أكنول">أكنول</option>
                      <option value="عجدير">عجدير</option>
                      <option value="العروي">العروي</option>
                      <option value="الحسيمة">الحسيمة</option>
                      <option value="النيف">النيف</option>
                      <option value="أمالو إغريبن">أمالو إغريبن</option>
                      <option value="أمزميز">أمزميز</option>
                      <option value="أوفوس">أوفوس</option>
                      <option value="أولوز">أولوز</option>
                      <option value="أورير">أورير</option>
                      <option value="الرباوة">الرباوة</option>
                      <option value="أرفود">أرفود</option>
                      <option value="أسا">أسا</option>
                      <option value="الساحريج">الساحريج</option>
                      <option value="أصيلة">أصيلة</option>
                      <option value="أزمور">أزمور</option>
                      <option value="أزيلال">أزيلال</option>
                      <option value="أزرو">أزرو</option>
                      <option value="باب برد">باب برد</option>
                      <option value="باب تازة">باب تازة</option>
                      <option value="بجاض">بجاض</option>
                      <option value="بن أحمد">بن أحمد</option>
                      <option value="بن جرير">بن جرير</option>
                      <option value="بن الطاهر">بن الطاهر</option>
                      <option value="بن يخلف">بن يخلف</option>
                      <option value="بني ملال">بني ملال</option>
                      <option value="بن سليمان">بن سليمان</option>
                      <option value="بركان">بركان</option>
                      <option value="برشيد">برشيد</option>
                      <option value="بحاليل">بحاليل</option>
                      <option value="بيوگرا">بيوگرا</option>
                      <option value="بني أنصار">بني أنصار</option>
                      <option value="بني بوعياش">بني بوعياش</option>
                      <option value="بني شيكر">بني شيكر</option>
                      <option value="بني درار">بني درار</option>
                      <option value="بني حديفة">بني حديفة</option>
                      <option value="بني تجيت">بني تجيت</option>
                      <option value="بوعنان">بوعنان</option>
                      <option value="بوعرفة">بوعرفة</option>
                      <option value="بودنيب">بودنيب</option>
                      <option value="بوگدرة">بوگدرة</option>
                      <option value="بوهديلة">بوهديلة</option>
                      <option value="بويزكارن">بويزكارن</option>
                      <option value="بوجدور">بوجدور</option>
                      <option value="بوجنيبة">بوجنيبة</option>
                      <option value="بولانوار">بولانوار</option>
                      <option value="بولمان">بولمان</option>
                      <option value="بولمان الدادس">بولمان الدادس</option>
                      <option value="بومية">بومية</option>
                      <option value="بوسكورة">بوسكورة</option>
                      <option value="بوزنيقة">بوزنيقة</option>
                      <option value="بوزتات">بوزتات</option>
                      <option value="برادية">برادية</option>
                      <option value="بريكشة">بريكشة</option>
                      <option value="بزو">بزو</option>
                      <option value="الدار البيضاء">الدار البيضاء</option>
                      <option value="شفشاون">شفشاون</option>
                      <option value="شيشاوة">شيشاوة</option>
                      <option value="الداخلة">الداخلة</option>
                      <option value="دار بني كريش">دار بني كريش</option>
                      <option value="دار الشاوي">دار الشاوي</option>
                      <option value="دار الكبداني">دار الكبداني</option>
                      <option value="دار الواعري">دار الواعري</option>
                      <option value="دار ولد زيدوه">دار ولد زيدوه</option>
                      <option value="الدشيرة الجهادية">الدشيرة الجهادية</option>
                      <option value="دبدو">دبدو</option>
                      <option value="دمنات">دمنات</option>
                      <option value="دروة">دروة</option>
                      <option value="دراركة">دراركة</option>
                      <option value="الفقيه بن صالح">الفقيه بن صالح</option>
                      <option value="فجيج">فجيج</option>
                      <option value="فكيك">فكيك</option>
                      <option value="فاس">فاس</option>
                      <option value="فاس المكناس">فاس المكناس</option>
                      <option value="فگيغ">فگيغ</option>
                      <option value="فگيك">فگيك</option>
                      <option value="فگيگ">فگيگ</option>
                      <option value="فگيق">فگيق</option>
                      <option value="فگيت">فگيت</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="فگوغة">فگوغة</option>
                      <option value="فگيغة">فگيغة</option>
                      <option value="فگيكة">فگيكة</option>
                      <option value="فگيگة">فگيگة</option>
                      <option value="فگيقة">فگيقة</option>
                      <option value="فگيتة">فگيتة</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="فگوغة">فگوغة</option>
                      <option value="فگوغتة">فگوغتة</option>
                      <option value="فگيت">فگيت</option>
                      <option value="فگيتة">فگيتة</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="فگوغة">فگوغة</option>
                      <option value="فگيت">فگيت</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="گنتور">گنتور</option>
                      <option value="گرفاية">گرفاية</option>
                      <option value="گلميم">گلميم</option>
                      <option value="گرسيف">گرسيف</option>
                      <option value="گزناية">گزناية</option>
                      <option value="گيگو">گيگو</option>
                      <option value="گيسر">گيسر</option>
                      <option value="حد بوحسوسن">حد بوحسوسن</option>
                      <option value="حد كورت">حد كورت</option>
                      <option value="حد وادي إفران">حد وادي إفران</option>
                      <option value="حاج قدور">حاج قدور</option>
                      <option value="الحطان">الحطان</option>
                      <option value="الحوارة">الحوارة</option>
                      <option value="إفران أطلس الصغير">إفران أطلس الصغير</option>
                      <option value="إفران">إفران</option>
                      <option value="إغود">إغود</option>
                      <option value="إهدادن">إهدادن</option>
                      <option value="إمنتانوت">إمنتانوت</option>
                      <option value="إموزار قندر">إموزار قندر</option>
                      <option value="إموزار مرموشة">إموزار مرموشة</option>
                      <option value="إمزورن">إمزورن</option>
                      <option value="إنزگان">إنزگان</option>
                      <option value="إرھرم">إرھرم</option>
                      <option value="إيساغون">إيساغون</option>
                      <option value="إتزر">إتزر</option>
                      <option value="جعادر">جعادر</option>
                      <option value="جماعة الشايم">جماعة الشايم</option>
                      <option value="جبھا">جبھا</option>
                      <option value="جرادة">جرادة</option>
                      <option value="جرف">جرف</option>
                      <option value="جرف الملحة">جرف الملحة</option>
                      <option value="قلعة مكونة">قلعة مكونة</option>
                      <option value="قاريا">قاريا</option>
                      <option value="قاريا">قاريا</option>
                      <option value="قاريا با محمد">قاريا با محمد</option>
                      <option value="قاريا الركمان">قاريا الركمان</option>
                      <option value="القصبة تادلة">القصبة تادلة</option>
                      <option value="قصيطة">قصيطة</option>
                      <option value="كتارة">كتارة</option>
                      <option value="كهف النصور">كهف النصور</option>
                      <option value="القنيطرة">القنيطرة</option>
                      <option value="كرونة">كرونة</option>
                      <option value="كروشن">كروشن</option>
                      <option value="الخميس الساحل">الخميس الساحل</option>
                      <option value="الخميسات">الخميسات</option>
                      <option value="خنيفرة">خنيفرة</option>
                      <option value="الخنيشات">الخنيشات</option>
                      <option value="خريبڭة">خريبڭة</option>
                      <option value="قصر الكبير">قصر الكبير</option>
                      <option value="لعونات">لعونات</option>
                      <option value="العكارطة">العكارطة</option>
                      <option value="العطاوية">العطاوية</option>
                      <option value="العيون">العيون</option>
                      <option value="الكويرة">الكويرة</option>
                      <option value="الخصاص">الخصاص</option>
                      <option value="الحراوية">الحراوية</option>
                      <option value="لالة ميمونة">لالة ميمونة</option>
                      <option value="لالة تكركوست">لالة تكركوست</option>
                      <option value="العرائش">العرائش</option>
                      <option value="الكوابلية">الكوابلية</option>
                      <option value="لبير الجديد">لبير الجديد</option>
                      <option value="لواليدية">لواليدية</option>
                      <option value="لولاد">لولاد</option>
                      <option value="القليعة">القليعة</option>
                      <option value="معازيز">معازيز</option>
                      <option value="مادغ">مادغ</option>
                      <option value="مراكش">مراكش</option>
                      <option value="مرتيل">مرتيل</option>
                      <option value="ماسة">ماسة</option>
                      <option value="ماطماطة">ماطماطة</option>
                      <option value="مضيق">مضيق</option>
                      <option value="مديونة">مديونة</option>
                      <option value="مشرع بل قصري">مشرع بل قصري</option>
                      <option value="مهدية">مهدية</option>
                      <option value="مكناس">مكناس</option>
                      <option value="المحايا">المحايا</option>
                      <option value="ميدار">ميدار</option>
                      <option value="ميدلت">ميدلت</option>
                      <option value="ميسور">ميسور</option>
                      <option value="المحمدية">المحمدية</option>
                      <option value="مقريصيت">مقريصيت</option>
                      <option value="مولاي عبد الله">مولاي عبد الله</option>
                      <option value="مولاي علي الشريف">مولاي علي الشريف</option>
                      <option value="مولاي بوعزة">مولاي بوعزة</option>
                      <option value="مولاي بوسلهام">مولاي بوسلهام</option>
                      <option value="مولاي إبراهيم">مولاي إبراهيم</option>
                      <option value="مولاي إدريس زرهون">مولاي إدريس زرهون</option>
                      <option value="مريرت">مريرت</option>
                      <option value="الناظور">الناظور</option>
                      <option value="نعيمة">نعيمة</option>
                      <option value="النواصر">النواصر</option>
                      <option value="واليديا">واليديا</option>
                      <option value="واوزيغت">واوزيغت</option>
                      <option value="ورزازات">ورزازات</option>
                      <option value="واد امليل">واد امليل</option>
                      <option value="واد هيمر">واد هيمر</option>
                      <option value="واد لاو">واد لاو</option>
                      <option value="واد زم">واد زم</option>
                      <option value="وزان">وزان</option>
                      <option value="ويسلان">ويسلان</option>
                      <option value="وجدة">وجدة</option>
                      <option value="ولاد عبو">ولاد عبو</option>
                      <option value="ولاد عمران">ولاد عمران</option>
                      <option value="ولاد عياد">ولاد عياد</option>
                      <option value="ولاد برهيل">ولاد برهيل</option>
                      <option value="ولاد فرج">ولاد فرج</option>
                      <option value="ولاد غضبان">ولاد غضبان</option>
                      <option value="ولاد حريز الساحل">ولاد حريز الساحل</option>
                      <option value="ولاد مبارك">ولاد مبارك</option>
                      <option value="ولاد مراح">ولاد مراح</option>
                      <option value="ولاد سعيد">ولاد سعيد</option>
                      <option value="ولاد طيب">ولاد طيب</option>
                      <option value="ولاد تايمة">ولاد تايمة</option>
                      <option value="ولاد يايش">ولاد يايش</option>
                      <option value="ولاد زبير">ولاد زبير</option>
                      <option value="ولماس">ولماس</option>
                      <option value="أم الگردان">أم الگردان</option>
                      <option value="أوناكة">أوناكة</option>
                      <option value="أوطاط الحاج">أوطاط الحاج</option>
                      <option value="الرباط">الرباط</option>
                      <option value="رأس العين">رأس العين</option>
                      <option value="رأس الماء">رأس الماء</option>
                      <option value="ريبات الخير">ريبات الخير</option>
                      <option value="ريصاني">ريصاني</option>
                      <option value="الرماني">الرماني</option>
                      <option value="سبع أيون">سبع أيون</option>
                      <option value="أسفي">أسفي</option>
                      <option value="السعيدية">السعيدية</option>
                      <option value="سلا">سلا</option>
                      <option value="سبت الگردان">سبت الگردان</option>
                      <option value="سبت المعاريف">سبت المعاريف</option>
                      <option value="سبت كزولة">سبت كزولة</option>
                      <option value="سبت جهجوه">سبت جهجوه</option>
                      <option value="صفرو">صفرو</option>
                      <option value="سلوان">سلوان</option>
                      <option value="السمارة">السمارة</option>
                      <option value="سطات">سطات</option>
                      <option value="سيدي المختار">سيدي المختار</option>
                      <option value="سيدي زوين">سيدي زوين</option>
                      <option value="سيدي عبد الله غيات">سيدي عبد الله غيات</option>
                      <option value="سيدي عدي">سيدي عدي</option>
                      <option value="سيدي أحمد">سيدي أحمد</option>
                      <option value="سيدي علي بن حمدوش">سيدي علي بن حمدوش</option>
                      <option value="سيدي علال البحراوي">سيدي علال البحراوي</option>
                      <option value="سيدي علال التازي">سيدي علال التازي</option>
                      <option value="سيدي بنور">سيدي بنور</option>
                      <option value="سيدي بوعثمان">سيدي بوعثمان</option>
                      <option value="سيدي بوبكر">سيدي بوبكر</option>
                      <option value="سيدي بوكنادل">سيدي بوكنادل</option>
                      <option value="سيدي بوزيد">سيدي بوزيد</option>
                      <option value="سيدي قاسم">سيدي قاسم</option>
                      <option value="سيدي حجاج واد حسار">سيدي حجاج واد حسار</option>
                      <option value="سيدي إفني">سيدي إفني</option>
                      <option value="سيدي جابر">سيدي جابر</option>
                      <option value="سيدي كنكوش">سيدي كنكوش</option>
                      <option value="سيدي قاسم">سيدي قاسم</option>
                      <option value="سيدي اليماني">سيدي اليماني</option>
                      <option value="سيدي محمد بن علي">سيدي محمد بن علي</option>
                      <option value="سيدي رحال">سيدي رحال</option>
                      <option value="سيدي رحال الشطاي">سيدي رحال الشطاي</option>
                      <option value="سيدي سليمان">سيدي سليمان</option>
                      <option value="سيدي سليمان الشراع">سيدي سليمان الشراع</option>
                      <option value="سيدي سليمان الجبيل">سيدي سليمان الجبيل</option>
                      <option value="سيدي سليمان التازي">سيدي سليمان التازي</option>
                      <option value="سيدي إسماعيل">سيدي إسماعيل</option>
                      <option value="سيدي طيبي">سيدي طيبي</option>
                      <option value="سيدي يحيى الغرب">سيدي يحيى الغرب</option>
                      <option value="سيدي يوسف بن أحمد">سيدي يوسف بن أحمد</option>
                      <option value="سيدي يوسف بن علي">سيدي يوسف بن علي</option>
                      <option value="سيدي يوسف بن حسن">سيدي يوسف بن حسن</option>
                      <option value="سيدي يوسف مختار">سيدي يوسف مختار</option>
                      <option value="سجلماسة">سجلماسة</option>
                      <option value="سيدي بوهريا">سيدي بوهريا</option>
                      <option value="الصخيرات">الصخيرات</option>
                      <option value="سخور الرحامنة">سخور الرحامنة</option>
                      <option value="سيدي علال التازي">سيدي علال التازي</option>
                      <option value="سيدي بنور">سيدي بنور</option>
                      <option value="سيدي بوعثمان">سيدي بوعثمان</option>
                      <option value="سيدي بوزيد">سيدي بوزيد</option>
                      <option value="سيدي حجاج واد حسار">سيدي حجاج واد حسار</option>
                      <option value="سيدي إفني">سيدي إفني</option>
                      <option value="سيدي جابر">سيدي جابر</option>
                      <option value="سيدي كنكوش">سيدي كنكوش</option>
                      <option value="سيدي قاسم">سيدي قاسم</option>
                      <option value="سيدي اليماني">سيدي اليماني</option>
                      <option value="سيدي محمد بن علي">سيدي محمد بن علي</option>
                      <option value="سيدي رحال">سيدي رحال</option>
                      <option value="سيدي رحال الشطاي">سيدي رحال الشطاي</option>
                      <option value="سيدي سليمان">سيدي سليمان</option>
                      <option value="سيدي سليمان الشراع">سيدي سليمان الشراع</option>
                      <option value="سيدي سليمان الجبيل">سيدي سليمان الجبيل</option>
                      <option value="سيدي سليمان التازي">سيدي سليمان التازي</option>
                      <option value="سيدي إسماعيل">سيدي إسماعيل</option>
                      <option value="سيدي طيبي">سيدي طيبي</option>
                      <option value="سيدي يحيى الغرب">سيدي يحيى الغرب</option>
                      <option value="سيدي يوسف بن أحمد">سيدي يوسف بن أحمد</option>
                      <option value="سيدي يوسف بن علي">سيدي يوسف بن علي</option>
                      <option value="سيدي يوسف بن حسن">سيدي يوسف بن حسن</option>
                      <option value="سيدي يوسف مختار">سيدي يوسف مختار</option>
                      <option value="سجلماسة">سجلماسة</option>
                      <option value="سيدي بوهريا">سيدي بوهريا</option>
                      <option value="الصخيرات">الصخيرات</option>
                      <option value="سخور الرحامنة">سخور الرحامنة</option>
                      <option value="السميمو">السميمو</option>
                      <option value="السوالم">السوالم</option>
                      <option value="سوق الأربعاء">سوق الأربعاء</option>
                      <option value="سوق الأربعاء">سوق الأربعاء</option>
                      <option value="سوق سبت أولاد النمة">سوق سبت أولاد النمة</option>
                      <option value="سوق تلتة زمامرة">سوق تلتة زمامرة</option>
                      <option value="سري كنا">سري كنا</option>
                      <option value="سيدي سليمان مول الكيفان">سيدي سليمان مول الكيفان</option>
                      <option value="تادرت">تادرت</option>
                      <option value="تاغجيجت">تاغجيجت</option>
                      <option value="تحالة">تحالة</option>
                      <option value="تحناوت">تحناوت</option>
                      <option value="تاينست">تاينست</option>
                      <option value="تالوين">تالوين</option>
                      <option value="تالمست">تالمست</option>
                      <option value="تمنار">تمنار</option>
                      <option value="تاموروت">تاموروت</option>
                      <option value="طانطان">طانطان</option>
                      <option value="تانالت">تانالت</option>
                      <option value="طنجة">طنجة</option>
                      <option value="تاونات">تاونات</option>
                      <option value="تاوريرت">تاوريرت</option>
                      <option value="تارودانت">تارودانت</option>
                      <option value="تارودانت">تارودانت</option>
                      <option value="طاطا">طاطا</option>
                      <option value="تازوتة">تازوتة</option>
                      <option value="تازارين">تازارين</option>
                      <option value="تندرارة">تندرارة</option>
                      <option value="تطوان">تطوان</option>
                      <option value="ثر سوق">ثر سوق</option>
                      <option value="تيشوت">تيشوت</option>
                      <option value="تيداز">تيداز</option>
                      <option value="تيفلت">تيفلت</option>
                      <option value="تيفنيت">تيفنيت</option>
                      <option value="تيفرة">تيفرة</option>
                      <option value="تيفريت">تيفريت</option>
                      <option value="تيغسالين">تيغسالين</option>
                      <option value="تيغزة">تيغزة</option>
                      <option value="تيمحديت">تيمحديت</option>
                      <option value="تيموليلت">تيموليلت</option>
                      <option value="تنجداد">تنجداد</option>
                      <option value="تزنيت">تزنيت</option>
                      <option value="تيزگيت">تيزگيت</option>
                      <option value="تيزي واصلي">تيزي واصلي</option>
                      <option value="تيزي وزو">تيزي وزو</option>
                      <option value="تلتة توفيق">تلتة توفيق</option>
                      <option value="تنين شتوكة">تنين شتوكة</option>
                      <option value="تنين أوريكة">تنين أوريكة</option>
                      <option value="توارگة">توارگة</option>
                      <option value="تويمة">تويمة</option>
                      <option value="تولال">تولال</option>
                      <option value="تولكرم">تولكرم</option>
                      <option value="تولال">تولال</option>
                      <option value="تولال">تولال</option>
                      <option value="تومليلين">تومليلين</option>
                      <option value="تونفيت">تونفيت</option>
                      <option value="زاكورة">زاكورة</option>
                      <option value="زايو">زايو</option>
                      <option value="زلاق">زلاق</option>
                      <option value="زمامرة">زمامرة</option>
                      <option value="زرهون">زرهون</option>
                      <option value="زرهوني">زرهوني</option>
                      <option value="زركتان">زركتان</option>
                      <option value="زمران">زمران</option>
                      <option value="زناتة">زناتة</option>
                      <option value="زراردة">زراردة</option>
                      <option value="زيرارة">زيرارة</option>
                      <option value="زيوار">زيوار</option>
                      <option value="زنادة">زنادة</option>
                      <option value="الزومي">الزومي</option>
                      <option value="زرويلة">زرويلة</option>
                      <option value="زريزر">زريزر</option>

                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!-- birth day-->

            <div class="form-group">
              <label class="col-md-4 control-label">Date de Naissance</label>
              <div class="col-md-4">
                <div>
                  <input name="marie_enf_date_naissance[]" class="form-control" type="date" />
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
                <div class="col-md-4 right">
                  <label class="col-md-4 control-label">الجنس</label>
                  <div class="radio right">
                    <label>
                      <input type="radio" name="divorce_enf_sexe_ar" value="ذكر" />
                      ذكر
                    </label>
                  </div>
                  <div class="radio right">
                    <label>
                      <input type="radio" name="divorce_enf_sexe_ar" value="أنثى" />
                      أنثى
                    </label>
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="col-md-4 control-label">Sexe</label>
                  <select name="divorce_enf_sexe_fr[]" id="divorce_enf_sexe_fr">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="col-md-4 right">
                  <label class="col-md-4 control-label">الجنس</label>
                  <select name="divorce_enf_sexe_ar[]" id="divorce_enf_sexe_ar">
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
                  <label class="col-md-4 control-label right">مكان الإزدياد</label>
                  <div>
                    <select name="divorce_enf_lieu_Nai_ar[]" id="divorce_enf_lieu_Nai_ar" class="formc1 right">                    
                      <option value=" ">مكان الإزدياد</option>
                      <option value="أفورار">أفورار</option>
                      <option value="أكادير">أكادير</option>
                      <option value="أغبالا">أغبالا</option>
                      <option value="أغبالو">أغبالو</option>
                      <option value="أكدز">أكدز</option>
                      <option value="أغوراي">أغوراي</option>
                      <option value="أگلموس">أگلموس</option>
                      <option value="أحفير">أحفير</option>
                      <option value="عين لهوا">عين لهوا</option>
                      <option value="عين بني مطهر">عين بني مطهر</option>
                      <option value="عين شقاق">عين شقاق</option>
                      <option value="عين الدريج">عين الدريج</option>
                      <option value="عين العودة">عين العودة</option>
                      <option value="عين الركادة">عين الركادة</option>
                      <option value="عين حرودة">عين حرودة</option>
                      <option value="عين جمعة">عين جمعة</option>
                      <option value="عين كرمة">عين كرمة</option>
                      <option value="عين تاوجدات">عين تاوجدات</option>
                      <option value="آيت يعزة">آيت يعزة</option>
                      <option value="آيت باها">آيت باها</option>
                      <option value="آيت بوبيدم">آيت بوبيدم</option>
                      <option value="آيت داود">آيت داود</option>
                      <option value="آيت إسحاق">آيت إسحاق</option>
                      <option value="آيت ملول">آيت ملول</option>
                      <option value="آيت أورير">آيت أورير</option>
                      <option value="أكا">أكا</option>
                      <option value="أكليم">أكليم</option>
                      <option value="أكنول">أكنول</option>
                      <option value="عجدير">عجدير</option>
                      <option value="العروي">العروي</option>
                      <option value="الحسيمة">الحسيمة</option>
                      <option value="النيف">النيف</option>
                      <option value="أمالو إغريبن">أمالو إغريبن</option>
                      <option value="أمزميز">أمزميز</option>
                      <option value="أوفوس">أوفوس</option>
                      <option value="أولوز">أولوز</option>
                      <option value="أورير">أورير</option>
                      <option value="الرباوة">الرباوة</option>
                      <option value="أرفود">أرفود</option>
                      <option value="أسا">أسا</option>
                      <option value="الساحريج">الساحريج</option>
                      <option value="أصيلة">أصيلة</option>
                      <option value="أزمور">أزمور</option>
                      <option value="أزيلال">أزيلال</option>
                      <option value="أزرو">أزرو</option>
                      <option value="باب برد">باب برد</option>
                      <option value="باب تازة">باب تازة</option>
                      <option value="بجاض">بجاض</option>
                      <option value="بن أحمد">بن أحمد</option>
                      <option value="بن جرير">بن جرير</option>
                      <option value="بن الطاهر">بن الطاهر</option>
                      <option value="بن يخلف">بن يخلف</option>
                      <option value="بني ملال">بني ملال</option>
                      <option value="بن سليمان">بن سليمان</option>
                      <option value="بركان">بركان</option>
                      <option value="برشيد">برشيد</option>
                      <option value="بحاليل">بحاليل</option>
                      <option value="بيوگرا">بيوگرا</option>
                      <option value="بني أنصار">بني أنصار</option>
                      <option value="بني بوعياش">بني بوعياش</option>
                      <option value="بني شيكر">بني شيكر</option>
                      <option value="بني درار">بني درار</option>
                      <option value="بني حديفة">بني حديفة</option>
                      <option value="بني تجيت">بني تجيت</option>
                      <option value="بوعنان">بوعنان</option>
                      <option value="بوعرفة">بوعرفة</option>
                      <option value="بودنيب">بودنيب</option>
                      <option value="بوگدرة">بوگدرة</option>
                      <option value="بوهديلة">بوهديلة</option>
                      <option value="بويزكارن">بويزكارن</option>
                      <option value="بوجدور">بوجدور</option>
                      <option value="بوجنيبة">بوجنيبة</option>
                      <option value="بولانوار">بولانوار</option>
                      <option value="بولمان">بولمان</option>
                      <option value="بولمان الدادس">بولمان الدادس</option>
                      <option value="بومية">بومية</option>
                      <option value="بوسكورة">بوسكورة</option>
                      <option value="بوزنيقة">بوزنيقة</option>
                      <option value="بوزتات">بوزتات</option>
                      <option value="برادية">برادية</option>
                      <option value="بريكشة">بريكشة</option>
                      <option value="بزو">بزو</option>
                      <option value="الدار البيضاء">الدار البيضاء</option>
                      <option value="شفشاون">شفشاون</option>
                      <option value="شيشاوة">شيشاوة</option>
                      <option value="الداخلة">الداخلة</option>
                      <option value="دار بني كريش">دار بني كريش</option>
                      <option value="دار الشاوي">دار الشاوي</option>
                      <option value="دار الكبداني">دار الكبداني</option>
                      <option value="دار الواعري">دار الواعري</option>
                      <option value="دار ولد زيدوه">دار ولد زيدوه</option>
                      <option value="الدشيرة الجهادية">الدشيرة الجهادية</option>
                      <option value="دبدو">دبدو</option>
                      <option value="دمنات">دمنات</option>
                      <option value="دروة">دروة</option>
                      <option value="دراركة">دراركة</option>
                      <option value="الفقيه بن صالح">الفقيه بن صالح</option>
                      <option value="فجيج">فجيج</option>
                      <option value="فكيك">فكيك</option>
                      <option value="فاس">فاس</option>
                      <option value="فاس المكناس">فاس المكناس</option>
                      <option value="فگيغ">فگيغ</option>
                      <option value="فگيك">فگيك</option>
                      <option value="فگيگ">فگيگ</option>
                      <option value="فگيق">فگيق</option>
                      <option value="فگيت">فگيت</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="فگوغة">فگوغة</option>
                      <option value="فگيغة">فگيغة</option>
                      <option value="فگيكة">فگيكة</option>
                      <option value="فگيگة">فگيگة</option>
                      <option value="فگيقة">فگيقة</option>
                      <option value="فگيتة">فگيتة</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="فگوغة">فگوغة</option>
                      <option value="فگوغتة">فگوغتة</option>
                      <option value="فگيت">فگيت</option>
                      <option value="فگيتة">فگيتة</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="فگوغة">فگوغة</option>
                      <option value="فگيت">فگيت</option>
                      <option value="فگوغ">فگوغ</option>
                      <option value="گنتور">گنتور</option>
                      <option value="گرفاية">گرفاية</option>
                      <option value="گلميم">گلميم</option>
                      <option value="گرسيف">گرسيف</option>
                      <option value="گزناية">گزناية</option>
                      <option value="گيگو">گيگو</option>
                      <option value="گيسر">گيسر</option>
                      <option value="حد بوحسوسن">حد بوحسوسن</option>
                      <option value="حد كورت">حد كورت</option>
                      <option value="حد وادي إفران">حد وادي إفران</option>
                      <option value="حاج قدور">حاج قدور</option>
                      <option value="الحطان">الحطان</option>
                      <option value="الحوارة">الحوارة</option>
                      <option value="إفران أطلس الصغير">إفران أطلس الصغير</option>
                      <option value="إفران">إفران</option>
                      <option value="إغود">إغود</option>
                      <option value="إهدادن">إهدادن</option>
                      <option value="إمنتانوت">إمنتانوت</option>
                      <option value="إموزار قندر">إموزار قندر</option>
                      <option value="إموزار مرموشة">إموزار مرموشة</option>
                      <option value="إمزورن">إمزورن</option>
                      <option value="إنزگان">إنزگان</option>
                      <option value="إرھرم">إرھرم</option>
                      <option value="إيساغون">إيساغون</option>
                      <option value="إتزر">إتزر</option>
                      <option value="جعادر">جعادر</option>
                      <option value="جماعة الشايم">جماعة الشايم</option>
                      <option value="جبھا">جبھا</option>
                      <option value="جرادة">جرادة</option>
                      <option value="جرف">جرف</option>
                      <option value="جرف الملحة">جرف الملحة</option>
                      <option value="قلعة مكونة">قلعة مكونة</option>
                      <option value="قاريا">قاريا</option>
                      <option value="قاريا">قاريا</option>
                      <option value="قاريا با محمد">قاريا با محمد</option>
                      <option value="قاريا الركمان">قاريا الركمان</option>
                      <option value="القصبة تادلة">القصبة تادلة</option>
                      <option value="قصيطة">قصيطة</option>
                      <option value="كتارة">كتارة</option>
                      <option value="كهف النصور">كهف النصور</option>
                      <option value="القنيطرة">القنيطرة</option>
                      <option value="كرونة">كرونة</option>
                      <option value="كروشن">كروشن</option>
                      <option value="الخميس الساحل">الخميس الساحل</option>
                      <option value="الخميسات">الخميسات</option>
                      <option value="خنيفرة">خنيفرة</option>
                      <option value="الخنيشات">الخنيشات</option>
                      <option value="خريبڭة">خريبڭة</option>
                      <option value="قصر الكبير">قصر الكبير</option>
                      <option value="لعونات">لعونات</option>
                      <option value="العكارطة">العكارطة</option>
                      <option value="العطاوية">العطاوية</option>
                      <option value="العيون">العيون</option>
                      <option value="الكويرة">الكويرة</option>
                      <option value="الخصاص">الخصاص</option>
                      <option value="الحراوية">الحراوية</option>
                      <option value="لالة ميمونة">لالة ميمونة</option>
                      <option value="لالة تكركوست">لالة تكركوست</option>
                      <option value="العرائش">العرائش</option>
                      <option value="الكوابلية">الكوابلية</option>
                      <option value="لبير الجديد">لبير الجديد</option>
                      <option value="لواليدية">لواليدية</option>
                      <option value="لولاد">لولاد</option>
                      <option value="القليعة">القليعة</option>
                      <option value="معازيز">معازيز</option>
                      <option value="مادغ">مادغ</option>
                      <option value="مراكش">مراكش</option>
                      <option value="مرتيل">مرتيل</option>
                      <option value="ماسة">ماسة</option>
                      <option value="ماطماطة">ماطماطة</option>
                      <option value="مضيق">مضيق</option>
                      <option value="مديونة">مديونة</option>
                      <option value="مشرع بل قصري">مشرع بل قصري</option>
                      <option value="مهدية">مهدية</option>
                      <option value="مكناس">مكناس</option>
                      <option value="المحايا">المحايا</option>
                      <option value="ميدار">ميدار</option>
                      <option value="ميدلت">ميدلت</option>
                      <option value="ميسور">ميسور</option>
                      <option value="المحمدية">المحمدية</option>
                      <option value="مقريصيت">مقريصيت</option>
                      <option value="مولاي عبد الله">مولاي عبد الله</option>
                      <option value="مولاي علي الشريف">مولاي علي الشريف</option>
                      <option value="مولاي بوعزة">مولاي بوعزة</option>
                      <option value="مولاي بوسلهام">مولاي بوسلهام</option>
                      <option value="مولاي إبراهيم">مولاي إبراهيم</option>
                      <option value="مولاي إدريس زرهون">مولاي إدريس زرهون</option>
                      <option value="مريرت">مريرت</option>
                      <option value="الناظور">الناظور</option>
                      <option value="نعيمة">نعيمة</option>
                      <option value="النواصر">النواصر</option>
                      <option value="واليديا">واليديا</option>
                      <option value="واوزيغت">واوزيغت</option>
                      <option value="ورزازات">ورزازات</option>
                      <option value="واد امليل">واد امليل</option>
                      <option value="واد هيمر">واد هيمر</option>
                      <option value="واد لاو">واد لاو</option>
                      <option value="واد زم">واد زم</option>
                      <option value="وزان">وزان</option>
                      <option value="ويسلان">ويسلان</option>
                      <option value="وجدة">وجدة</option>
                      <option value="ولاد عبو">ولاد عبو</option>
                      <option value="ولاد عمران">ولاد عمران</option>
                      <option value="ولاد عياد">ولاد عياد</option>
                      <option value="ولاد برهيل">ولاد برهيل</option>
                      <option value="ولاد فرج">ولاد فرج</option>
                      <option value="ولاد غضبان">ولاد غضبان</option>
                      <option value="ولاد حريز الساحل">ولاد حريز الساحل</option>
                      <option value="ولاد مبارك">ولاد مبارك</option>
                      <option value="ولاد مراح">ولاد مراح</option>
                      <option value="ولاد سعيد">ولاد سعيد</option>
                      <option value="ولاد طيب">ولاد طيب</option>
                      <option value="ولاد تايمة">ولاد تايمة</option>
                      <option value="ولاد يايش">ولاد يايش</option>
                      <option value="ولاد زبير">ولاد زبير</option>
                      <option value="ولماس">ولماس</option>
                      <option value="أم الگردان">أم الگردان</option>
                      <option value="أوناكة">أوناكة</option>
                      <option value="أوطاط الحاج">أوطاط الحاج</option>
                      <option value="الرباط">الرباط</option>
                      <option value="رأس العين">رأس العين</option>
                      <option value="رأس الماء">رأس الماء</option>
                      <option value="ريبات الخير">ريبات الخير</option>
                      <option value="ريصاني">ريصاني</option>
                      <option value="الرماني">الرماني</option>
                      <option value="سبع أيون">سبع أيون</option>
                      <option value="أسفي">أسفي</option>
                      <option value="السعيدية">السعيدية</option>
                      <option value="سلا">سلا</option>
                      <option value="سبت الگردان">سبت الگردان</option>
                      <option value="سبت المعاريف">سبت المعاريف</option>
                      <option value="سبت كزولة">سبت كزولة</option>
                      <option value="سبت جهجوه">سبت جهجوه</option>
                      <option value="صفرو">صفرو</option>
                      <option value="سلوان">سلوان</option>
                      <option value="السمارة">السمارة</option>
                      <option value="سطات">سطات</option>
                      <option value="سيدي المختار">سيدي المختار</option>
                      <option value="سيدي زوين">سيدي زوين</option>
                      <option value="سيدي عبد الله غيات">سيدي عبد الله غيات</option>
                      <option value="سيدي عدي">سيدي عدي</option>
                      <option value="سيدي أحمد">سيدي أحمد</option>
                      <option value="سيدي علي بن حمدوش">سيدي علي بن حمدوش</option>
                      <option value="سيدي علال البحراوي">سيدي علال البحراوي</option>
                      <option value="سيدي علال التازي">سيدي علال التازي</option>
                      <option value="سيدي بنور">سيدي بنور</option>
                      <option value="سيدي بوعثمان">سيدي بوعثمان</option>
                      <option value="سيدي بوبكر">سيدي بوبكر</option>
                      <option value="سيدي بوكنادل">سيدي بوكنادل</option>
                      <option value="سيدي بوزيد">سيدي بوزيد</option>
                      <option value="سيدي قاسم">سيدي قاسم</option>
                      <option value="سيدي حجاج واد حسار">سيدي حجاج واد حسار</option>
                      <option value="سيدي إفني">سيدي إفني</option>
                      <option value="سيدي جابر">سيدي جابر</option>
                      <option value="سيدي كنكوش">سيدي كنكوش</option>
                      <option value="سيدي قاسم">سيدي قاسم</option>
                      <option value="سيدي اليماني">سيدي اليماني</option>
                      <option value="سيدي محمد بن علي">سيدي محمد بن علي</option>
                      <option value="سيدي رحال">سيدي رحال</option>
                      <option value="سيدي رحال الشطاي">سيدي رحال الشطاي</option>
                      <option value="سيدي سليمان">سيدي سليمان</option>
                      <option value="سيدي سليمان الشراع">سيدي سليمان الشراع</option>
                      <option value="سيدي سليمان الجبيل">سيدي سليمان الجبيل</option>
                      <option value="سيدي سليمان التازي">سيدي سليمان التازي</option>
                      <option value="سيدي إسماعيل">سيدي إسماعيل</option>
                      <option value="سيدي طيبي">سيدي طيبي</option>
                      <option value="سيدي يحيى الغرب">سيدي يحيى الغرب</option>
                      <option value="سيدي يوسف بن أحمد">سيدي يوسف بن أحمد</option>
                      <option value="سيدي يوسف بن علي">سيدي يوسف بن علي</option>
                      <option value="سيدي يوسف بن حسن">سيدي يوسف بن حسن</option>
                      <option value="سيدي يوسف مختار">سيدي يوسف مختار</option>
                      <option value="سجلماسة">سجلماسة</option>
                      <option value="سيدي بوهريا">سيدي بوهريا</option>
                      <option value="الصخيرات">الصخيرات</option>
                      <option value="سخور الرحامنة">سخور الرحامنة</option>
                      <option value="سيدي علال التازي">سيدي علال التازي</option>
                      <option value="سيدي بنور">سيدي بنور</option>
                      <option value="سيدي بوعثمان">سيدي بوعثمان</option>
                      <option value="سيدي بوزيد">سيدي بوزيد</option>
                      <option value="سيدي حجاج واد حسار">سيدي حجاج واد حسار</option>
                      <option value="سيدي إفني">سيدي إفني</option>
                      <option value="سيدي جابر">سيدي جابر</option>
                      <option value="سيدي كنكوش">سيدي كنكوش</option>
                      <option value="سيدي قاسم">سيدي قاسم</option>
                      <option value="سيدي اليماني">سيدي اليماني</option>
                      <option value="سيدي محمد بن علي">سيدي محمد بن علي</option>
                      <option value="سيدي رحال">سيدي رحال</option>
                      <option value="سيدي رحال الشطاي">سيدي رحال الشطاي</option>
                      <option value="سيدي سليمان">سيدي سليمان</option>
                      <option value="سيدي سليمان الشراع">سيدي سليمان الشراع</option>
                      <option value="سيدي سليمان الجبيل">سيدي سليمان الجبيل</option>
                      <option value="سيدي سليمان التازي">سيدي سليمان التازي</option>
                      <option value="سيدي إسماعيل">سيدي إسماعيل</option>
                      <option value="سيدي طيبي">سيدي طيبي</option>
                      <option value="سيدي يحيى الغرب">سيدي يحيى الغرب</option>
                      <option value="سيدي يوسف بن أحمد">سيدي يوسف بن أحمد</option>
                      <option value="سيدي يوسف بن علي">سيدي يوسف بن علي</option>
                      <option value="سيدي يوسف بن حسن">سيدي يوسف بن حسن</option>
                      <option value="سيدي يوسف مختار">سيدي يوسف مختار</option>
                      <option value="سجلماسة">سجلماسة</option>
                      <option value="سيدي بوهريا">سيدي بوهريا</option>
                      <option value="الصخيرات">الصخيرات</option>
                      <option value="سخور الرحامنة">سخور الرحامنة</option>
                      <option value="السميمو">السميمو</option>
                      <option value="السوالم">السوالم</option>
                      <option value="سوق الأربعاء">سوق الأربعاء</option>
                      <option value="سوق الأربعاء">سوق الأربعاء</option>
                      <option value="سوق سبت أولاد النمة">سوق سبت أولاد النمة</option>
                      <option value="سوق تلتة زمامرة">سوق تلتة زمامرة</option>
                      <option value="سري كنا">سري كنا</option>
                      <option value="سيدي سليمان مول الكيفان">سيدي سليمان مول الكيفان</option>
                      <option value="تادرت">تادرت</option>
                      <option value="تاغجيجت">تاغجيجت</option>
                      <option value="تحالة">تحالة</option>
                      <option value="تحناوت">تحناوت</option>
                      <option value="تاينست">تاينست</option>
                      <option value="تالوين">تالوين</option>
                      <option value="تالمست">تالمست</option>
                      <option value="تمنار">تمنار</option>
                      <option value="تاموروت">تاموروت</option>
                      <option value="طانطان">طانطان</option>
                      <option value="تانالت">تانالت</option>
                      <option value="طنجة">طنجة</option>
                      <option value="تاونات">تاونات</option>
                      <option value="تاوريرت">تاوريرت</option>
                      <option value="تارودانت">تارودانت</option>
                      <option value="تارودانت">تارودانت</option>
                      <option value="طاطا">طاطا</option>
                      <option value="تازوتة">تازوتة</option>
                      <option value="تازارين">تازارين</option>
                      <option value="تندرارة">تندرارة</option>
                      <option value="تطوان">تطوان</option>
                      <option value="ثر سوق">ثر سوق</option>
                      <option value="تيشوت">تيشوت</option>
                      <option value="تيداز">تيداز</option>
                      <option value="تيفلت">تيفلت</option>
                      <option value="تيفنيت">تيفنيت</option>
                      <option value="تيفرة">تيفرة</option>
                      <option value="تيفريت">تيفريت</option>
                      <option value="تيغسالين">تيغسالين</option>
                      <option value="تيغزة">تيغزة</option>
                      <option value="تيمحديت">تيمحديت</option>
                      <option value="تيموليلت">تيموليلت</option>
                      <option value="تنجداد">تنجداد</option>
                      <option value="تزنيت">تزنيت</option>
                      <option value="تيزگيت">تيزگيت</option>
                      <option value="تيزي واصلي">تيزي واصلي</option>
                      <option value="تيزي وزو">تيزي وزو</option>
                      <option value="تلتة توفيق">تلتة توفيق</option>
                      <option value="تنين شتوكة">تنين شتوكة</option>
                      <option value="تنين أوريكة">تنين أوريكة</option>
                      <option value="توارگة">توارگة</option>
                      <option value="تويمة">تويمة</option>
                      <option value="تولال">تولال</option>
                      <option value="تولكرم">تولكرم</option>
                      <option value="تولال">تولال</option>
                      <option value="تولال">تولال</option>
                      <option value="تومليلين">تومليلين</option>
                      <option value="تونفيت">تونفيت</option>
                      <option value="زاكورة">زاكورة</option>
                      <option value="زايو">زايو</option>
                      <option value="زلاق">زلاق</option>
                      <option value="زمامرة">زمامرة</option>
                      <option value="زرهون">زرهون</option>
                      <option value="زرهوني">زرهوني</option>
                      <option value="زركتان">زركتان</option>
                      <option value="زمران">زمران</option>
                      <option value="زناتة">زناتة</option>
                      <option value="زراردة">زراردة</option>
                      <option value="زيرارة">زيرارة</option>
                      <option value="زيوار">زيوار</option>
                      <option value="زنادة">زنادة</option>
                      <option value="الزومي">الزومي</option>
                      <option value="زرويلة">زرويلة</option>
                      <option value="زريزر">زريزر</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!--birth day-->
            <div class="form-group">
              <label class="col-md-4 control-label">Date de Naissance</label>
              <div class="col-md-4">
                <div>
                  <input name="divorce_enf_date_naissance" class="form-control" type="date" />
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
                <select name="Grade_ar" id="grade_ar" class="formc1 right" readonly>
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
                <input name="indice" id="indice" placeholder="Indice" class="form-control1" type="text" required />
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
                <select name="division_ar" id="division_ar" class="formc1 right" readonly>
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
                <select name="service_ar" id="service_ar" class="formc1 right" readonly>
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
                <select name="bureau_ar" id="bureau_ar" class="formc1 right" readonly>
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