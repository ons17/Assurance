<!DOCTYPE html>
<html lang="en">

<head>
    <title>AMI Assurance</title>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="shortcut icon" href="https://www.assurancesami.com/sites/default/files/favicon-32x32_0.png"
        type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        table {
            max-width: none;
            width: auto;
            font-size: 14px;

        }

        input[type="file"] {
            margin-left: 200px;
            padding: 10px;
            background-color: #0945f7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-alert-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
        }

        .custom-alert {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .custom-alert-content {
            font-size: 18px;
        }

        .custom-alert-btn {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }


        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #538fe9;
            color: white;
        }

        #prime {
            color: #538fe9;
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 10px;
            text-decoration: underline;
            display: none;
        }

        .capital-column {
            min-width: 120px;
        }

        #tab {
            width: 100%;
        }
    </style>
</head>

<body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

            </a>
            <img src="https://www.assurancesami.com/sites/default/files/logo-ami-assurance.png" alt="Accueil" />
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="Home.php">
                    SIMULATEUR VIE
                </a>



                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        simulation

                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            Détails Simulation </a>
                        <a class="navbar-item">
                            Tableau D'amortisement & Sélection garantie Jobs
                        </a>

                    </div>
                </div>
            </div>

    </nav>




    <div class="">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post" autocomplete="off" id="d1" style="margin-left: 120px;  ">
                    <div><br>
                        <h2 style="color:#538fe9  ;font-size :25px;">Détails simulation</h2>
                        <br>
                        <div class="container-fluid">
                            <p style="color:blue"> Remplir tous les champs du formulaire pour passer à l'etape
                                suivante
                            </p>
                            <br>
                            <div style="position: absolute;top: 80px;right: 0;width: 200px;height: 100px;color:blue;">
                                Etape 2/3
                            </div>
                            <br>

                            <div class="row" style="color:blue;">
                                <div class="col-md-6">
                                    <label for="CAPASSIVE">CAPITAL</label>
                                    <input type="text" name="CAPASSIVE" id="CAPASSIVE"
                                        value="<?php echo isset($_POST['CAPASSIVE']) ? $_POST['CAPASSIVE'] : ''; ?>"
                                        class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group col-md-4">

                                    <label for="DURMOIS">Duree Remboursement</label>
                                    <input type="text" name="DURMOIS" id="DURMOIS"
                                        value="<?php echo isset($_POST['DURMOIS']) ? $_POST['DURMOIS'] : ''; ?>"
                                        class="form-control" autocomplete="off">

                                </div>
                            </div>

                            <div class="container-fluid">
                                <div class="row" style="color:blue;">
                                    <div class="form-group col-md-6">
                                        <label for="TAUX_DC">Taux d'intérêt</label>
                                        <input type="text" class="form-control" id="TAUX_DC" name="TAUX_DC"
                                            placeholder="" autocomplete="off" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="FRANCHISE">FRANCHISE</label>
                                        <input type="text" name="FRANCHISE" id="FRANCHISE"
                                            value="<?php echo isset($_POST['FRANCHISE']) ? $_POST['FRANCHISE'] : ''; ?>"
                                            class="form-control" autocomplete="off">

                                    </div>
                                </div>
                                <label for="TAUX_DC" style="color:blue;">Périodicité de paiemenet du capital</label>


                                <div style="display: flex; gap: 10px;">

                                    <select class="s1" name="FRACTPAIE" id="FRACTPAIE"
                                        style="width: 83%; height: 36px; padding: 8px 16px; color: blue; box-shadow: #6e8ef0; border-color: #6e8ef0;"
                                        value="<?php echo isset($_POST['FRACTPAIE']) ? $_POST['FRACTPAIE'] : ''; ?>">
                                        <option value="non"></option>
                                        <option value="Mensuel">Mensuel </option>
                                        <option value="Annuel">Annuel</option>
                                        <option value="trimestriel">trimestriel</option>
                                        <option value="semestriel">semestriel</option>
                                    </select>
                                </div>
                                <br>

                                <label for="TAUX_DC" style="color:blue;"> Séléctionner Banque</label>

                                <div>
                                    <select class="s2" name="NATCRENC" id="NATCRENC"
                                        style="width: 83%; height: 36px; padding: 8px 16px; color: blue; box-shadow: #6e8ef0; border-color: #6e8ef0;">
                                        <option></option>
                                        <option>ATB</option>
                                        <option>BH</option>
                                        <option>BT</option>
                                        <option>BIAT</option>
                                        <option>BNA</option>
                                        <option>Amen Bank </option>
                                        <option>UIB</option>
                                        <option>Banque Zitouna</option>

                                    </select>
                                </div>

                                </br>

                                <div class="container-fluid">

                                    <div class="row" style="color:blue;">
                                        <div class="form-group col-md-6">

                                            <label for="DEBCNT">Date Debut Effet</label>
                                            <input type="date" class="form-control" name="DEBCNT" id="DEBCNT"
                                                placeholder="Date Debut Effet" autocomplete="off"
                                                value="<?php echo isset($_POST['DEBCNT']) ? $_POST['DEBCNT'] : ''; ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="DATEP">Date De Naissance</label>
                                            <input type="date" class="form-control" name="DATEP" id="DATEP"
                                                placeholder="Date De Naissance" autocomplete="off" />

                                        </div>
                                    </div>


                                    <div class="row" style="color:blue;">
                                        <div class="form-group col-md-6">
                                            <label for="NOMREDCLT">Nom Assuré</label>
                                            <input type="text" class="form-control" name="NOMREDCLT" id="NOMREDCLT"
                                                class="form-control" placeholder="Nom" autocomplete="off" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="PREDCLT">Prenom Assuré</label>
                                            <input type="text" class="form-control" name="PREDCLT" id="PREDCLT"
                                                class="form-control" placeholder="Prénom" autocomplete="off" />

                                        </div>
                                    </div>

                                    <div class="row" style="color:blue;">
                                        <div class="form-group col-md-6">
                                            <label for="TEL	">GSM</label>
                                            <input type="text" class="form-control" name="TEL" id="TEL"
                                                class="form-control" placeholder="  Numéro Téléphone"
                                                autocomplete="off" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="EMAIL">E-mail</label>
                                            <input type="e-mail" class="form-control" name="EMAIL" id="EMAIL"
                                                class="form-control" placeholder=" E-mail" autocomplete="off" />
                                        </div>

                                    </div>

                                    <button type="submit" value="calcul" name="submit"
                                        style="background-color:#2930B6;color:white;border-color:white;">ENVOYER</button>
                                    <br>
                                    <br>

                                    <input type="checkbox" id="shipsame" name="shipsame" value="yess"
                                        onchange="hideAndShow()">Show


                                    <br>
                                </div>
                            </div>
                        </div>


                </form>

                <div class="col-lg-10">
                    <div id="tab">


                        <?php
                        //last date of the month
                        function getLastDateOfMonth($date)
                        {
                            return date('Y-m-t', strtotime($date));
                        }

                        //  first day of the month
                        function firstDayOfMonth($date)
                        {
                            return date("Y-m-01", strtotime($date));
                        }

                        //  convert date to AAAAMMJJ format
                        function bib_Date_vers_AAAAMMJJ($date)
                        {
                            return date("Ymd", strtotime($date));
                        }

                        function addMonthsToDate($dateString, $numberOfMonths)
                        {
                            // Create a DateTime object from the input date string
                            $date = new DateTime($dateString);

                            // Add the specified number of months
                            $date->modify('+' . $numberOfMonths . ' months');

                            // Return the modified date as a string
                            return $date->format('Y-m-d');
                        }

                        function formatNumber($number)
                        {
                            return number_format($number, 3, '.', ' ');
                        }

                        $CAPASSIVE = '';
                        $DURMOIS = '';
                        $FRANCHISE = '';
                        $DEBCNT = '';
                        $FRACTPAIE = '';
                        $TabL = array();
                        $tmp_nbfranchise = 0;
                        $tmp_NbIteration = 0;

                        if (isset($_POST['submit'])) {

                            $CAPASSIVE = $_POST['CAPASSIVE'];
                            $DURMOIS = $_POST['DURMOIS'];
                            $FRANCHISE = $_POST['FRANCHISE'];
                            $DEBCNT = $_POST['DEBCNT'];
                            $FRACTPAIE = $_POST['FRACTPAIE'];

                            $tmpEffet = $DEBCNT;

                            switch ($FRACTPAIE) {
                                case "non":
                                    break;
                                case "Mensuel":
                                    $tmp_NbIteration = $DURMOIS;
                                    $tmp_nbfranchise = $FRANCHISE / 1;
                                    $b = 1;
                                    break;
                                case "Annuel":
                                    $tmp_NbIteration = $DURMOIS / 12;
                                    $tmp_nbfranchise = $FRANCHISE / 12;
                                    $b = 12;
                                    break;
                                case "semestriel":
                                    $tmp_NbIteration = $DURMOIS / 6 + ($DURMOIS - ($DURMOIS / 6) * 6) / 6;
                                    $tmp_nbfranchise = $FRANCHISE / 6;
                                    $b = 6;
                                    break;
                                case "trimestriel":
                                    $tmp_NbIteration = $DURMOIS / 3 + ($DURMOIS - ($DURMOIS / 3) * 3) / 3;
                                    $tmp_nbfranchise = $FRANCHISE / 3;
                                    $b = 3;
                                    break;

                            }
                        }


                        if ($tmp_nbfranchise > 0) {
                            for ($i = 1; $i <= $tmp_nbfranchise - 1; $i++) {
                                $tmpfin = getLastDateOfMonth($tmpEffet);

                                $TabL[] = array('startDate' => bib_Date_vers_AAAAMMJJ($tmpEffet), 'endDate' => bib_Date_vers_AAAAMMJJ($tmpfin), 'capital' => $CAPASSIVE);
                                $tmpEffet = firstDayOfMonth($tmpEffet);
                            }
                        }


                        $tmpCAPREST = $CAPASSIVE;
                        if ($tmp_NbIteration > 0 && $tmp_NbIteration - $tmp_nbfranchise != 0) {
                            $tmpREMB = $CAPASSIVE / ($tmp_NbIteration - $tmp_nbfranchise);
                            for ($i = 1; $i <= $tmp_NbIteration - $tmp_nbfranchise; $i++) {
                                $tmpfin = getLastDateOfMonth($tmpEffet);
                                $TabL[] = array('startDate' => bib_Date_vers_AAAAMMJJ($tmpEffet), 'endDate' => bib_Date_vers_AAAAMMJJ($tmpfin), 'capital' => $tmpCAPREST);
                                $tmpCAPREST = $CAPASSIVE - $i * $tmpREMB;
                                $tmpEffet = addMonthsToDate($tmpEffet, 1);
                            }
                        }




                        if (isset($TabL) && !empty($TabL)) {
                            echo '<br>';
                            echo '<h3 style="color:#538fe9  ;font-size :25px; ">-Tableau d&lsquo;amortissement:</h3>
';
                            echo '<table border="1" style="border-collapse: collapse; margin-top: 20px;" class="table">';
                            echo '<thead style="background-color: #538fe9;">';
                            echo '<tr>';
                            echo '<th style="padding: 10px; text-align: left;">Start Date</th>';
                            echo '<th style="padding: 10px; text-align: left;">End Date</th>';
                            echo '<th style="padding: 10px; text-align: left;">Capital</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            foreach ($TabL as $row) {
                                $startDateFormatted = date('Y/m/d', strtotime($row['startDate']));
                                $endDateFormatted = date('Y/m/d', strtotime($row['endDate']));
                                echo '<tr>';
                                echo '<td>' . $startDateFormatted . '</td>';
                                echo '<td>' . $endDateFormatted . '</td>';
                                echo '<td class="capital-column">' . formatNumber(round($row['capital'], 3)) . '</td>';
                                echo '</tr>';
                            }

                            echo '</tbody>';
                            echo '</table>';
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-11">
                <div class="prime-section" style="display: none;">
                    <div style="position: absolute;top: 80px;right: 0;width: 200px;height: 100px;color:blue; ">
                        Etape 3/3
                    </div>
                    <br>

                    <h2
                        style="color: #538fe9; font-size: 24px; font-weight: bold; margin-bottom: 10px;text-decoration: underline; margin-left:20px;">
                        Detail prime
                    </h2>
                    <br>



                    <div style=" margin-left:60px;">



                        <p style="color:#0945f7;">Nom&Prenom:
                            <?php echo (isset($_POST['NOMREDCLT']) ? $_POST['NOMREDCLT'] : ''); ?>
                            <?php echo (isset($_POST['PREDCLT']) ? $_POST['PREDCLT'] : ''); ?>
                        </p>
                        <br>
                    </div>

                    <div style=" margin-left:60px;">
                        <p style="color:#0945f7;">Capital emprunté:
                            <?php echo (isset($_POST['CAPASSIVE']) ? $_POST['CAPASSIVE'] : ''); ?> DT
                        </p>
                        <br>
                    </div>

                    <div style=" margin-left:60px;">
                        <p style="color:#0945f7;">Date de Naissance:
                            <?php echo (isset($_POST['DATEP']) ? $_POST['DATEP'] : ''); ?>
                        </p>
                        <br>
                    </div>



                    <div style=" margin-left:60px;">
                        <p style="color:#0945f7;">Age Client:
                            <?php


                            function calculateAge()
                            {
                                if (isset($_POST['DATEP'])) {
                                    $birthDate = new DateTime($_POST['DATEP']);
                                    $today = new DateTime();
                                    $age = $today->diff($birthDate)->y;
                                    return $age;
                                } else {
                                    return '';
                                }
                            }

                            echo calculateAge();
                            ?>
                        </p>
                        <br>
                    </div>


                    <div style=" margin-left:60px;">
                        <p style="color:#0945f7;">Age terme:
                            <?php
                            if (isset($_POST['DATEP']) && isset($_POST['DURMOIS'])) {
                                $birthDate = new DateTime($_POST['DATEP']);
                                $ageAtCreditEnd = calculateAge() + intval($_POST['DURMOIS'] / 12);
                                echo $ageAtCreditEnd;
                            } else {
                                echo '';
                            }
                            ?>
                        </p>
                        <br>


                        <div>
                            <p style="color:#0945f7;"> Date Début :
                                <?php echo (isset($DEBCNT) ? $DEBCNT : ''); ?>
                            </p>
                            <br>
                        </div>
                        <div>
                            <p style="color:#0945f7;"> Date Fin :
                                <?php
                                $endDateFormatted = isset($endDateFormatted) ? date('Y-m-d', strtotime($endDateFormatted)) : '';
                                echo $endDateFormatted;
                                ?>
                            </p>
                            <br>
                        </div>



                        <div>
                            <p style="color:#0945f7;"> Durée en mois:
                                <?php echo (isset($_POST['DURMOIS']) ? $_POST['DURMOIS'] : ''); ?>
                            </p>
                            <br>
                        </div>


                        <div>
                            <p style="color:#0945f7;"> Périodicité de paiement du capital:
                                <?php echo (isset($_POST['FRACTPAIE']) ? $_POST['FRACTPAIE'] : ''); ?>
                            </p>
                            <br>
                        </div>


                        <div>
                            <p style="color:#0945f7;">Taux d'intérêt de l'emprunt:
                                <?php echo (isset($_POST['TAUX_DC']) ? $_POST['TAUX_DC'] : ''); ?>%
                            </p>
                            <br>
                        </div>

                        <?php
                        function formatNumber2($number)
                        {
                            return number_format($number, 3, '.', ' ');
                        }

                        $primePure = Prime_Pure(38);
                        $chargementValue = Chargement(38);
                        $totalValue = $primePure + $chargementValue;
                        ?>

                        <div>

                            <p style="color:#0945f7;">Prime Technique Sous Réserve:
                                <?php echo formatNumber2($totalValue); ?>
                                <br>
                            </p>
                        </div>

                        <br>

                        <div>
                            <p style="color:#0945f7;">TFGA:
                                <?php echo '3 Dt' ?>
                            </p>
                            <br>
                        </div>

                        <div>
                            <?php

                            $primePure = Prime_Pure(38);
                            $chargementValue = Chargement(38);
                            $totalValue = $primePure + $chargementValue + 3;

                            ?>
                            <p style="color:#0945f7;">Prime totale sous réserves:
                                <?php echo formatNumber2($totalValue); ?>
                            </p>
                            <br>
                        </div>
                        <div>
                            <label for="folderInput" style="color:#0945f7;">Dossier Médical Demandé:</label>
                            <br>
                            <input type="file" id="folderInput" webkitdirectory directory multiple
                                onchange="showCustomAlert()" style="margin-left:200px;">
                            <br>
                        </div>

                        <div class="custom-alert-overlay" id="customAlertOverlay" style=" margin-left:60px;">
                            <div class="custom-alert">
                                <div class="custom-alert-content">Dossier ajouté !</div>
                                <button class="custom-alert-btn" onclick="hideCustomAlert()">OK</button>
                            </div>
                        </div>

                        <script>
                            function showCustomAlert() {
                                document.getElementById('customAlertOverlay').style.display = 'flex';
                            }

                            function hideCustomAlert() {
                                document.getElementById('customAlertOverlay').style.display = 'none';
                            }
                        </script>

                        <script>
                            function hideAndShow() {
                                var formSection = document.getElementById('d1');
                                var primeSection = document.querySelector('.prime-section');

                                if (document.getElementById('shipsame').checked) {
                                    formSection.style.display = 'none';
                                    primeSection.style.display = 'block';
                                } else {
                                    formSection.style.display = 'block';
                                    primeSection.style.display = 'none';
                                }
                            }
                        </script>




                        <?php

                        function calculateAge2()
                        {

                            if (isset($_POST['DATEP'])) {
                                $birthDate = new DateTime($_POST['DATEP']);
                                $today = new DateTime();
                                $age = $today->diff($birthDate)->y;
                                return $age;
                            } else {
                                return '';
                            }
                        }





                        function lx($age)
                        {
                            try {
                                $conn = new PDO("mysql:host=localhost;dbname=ami assurance", "root", "");

                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "SELECT lx FROM age_l WHERE age =$age ";


                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                $result = $stmt->fetchColumn();




                                return $result;

                            } catch (PDOException $e) {
                                die("Erreur de connexion à la base de données: " . $e->getMessage());
                            }
                        }


                        function Prime_Pure($age)
                        {

                            $CAPASSIVE = '';
                            $DURMOIS = '';
                            $FRANCHISE = '';
                            $DEBCNT = '';
                            $FRACTPAIE = '';
                            $Actualisation = 0;
                            $k = 0;
                            $crd = 0;
                            $proba = 0;
                            $tmp_NbIteration = 0;
                            $tmp_nbfranchise = 0;
                            $_Tx_Tech = 0.04;
                            $Sum_Prime = 0;
                            $a = 12;
                            $age1 = $age;
                            $_Prime = 0;


                            if (isset($_POST['submit'])) {


                                $CAPASSIVE = $_POST['CAPASSIVE'];
                                $DURMOIS = $_POST['DURMOIS'];
                                $FRANCHISE = $_POST['FRANCHISE'];
                                $DEBCNT = $_POST['DEBCNT'];
                                $FRACTPAIE = $_POST['FRACTPAIE'];
                                if (($DURMOIS / 12) >= 10) {
                                    $_Tx_Tech = 4;
                                } else {
                                    $_Tx_Tech = 5.555;

                                }

                                switch ($FRACTPAIE) {

                                    case "Mensuel":
                                        $tmp_NbIteration = $DURMOIS;
                                        $tmp_nbfranchise = $FRANCHISE;
                                        $a = 12;
                                        break;

                                    case "Annuel":

                                        $tmp_NbIteration = $DURMOIS / 12;
                                        $tmp_nbfranchise = $FRANCHISE / 12;
                                        $a = 1;
                                        break;

                                    case "semestriel":
                                        $tmp_NbIteration = $DURMOIS / 6 + ($DURMOIS - ($DURMOIS / 6) * 6) / 6;
                                        $tmp_nbfranchise = $FRANCHISE / 6;
                                        $a = 6;
                                        break;

                                    case "trimestriel":
                                        $tmp_NbIteration = $DURMOIS / 3 + ($DURMOIS - ($DURMOIS / 3) * 3) / 3;
                                        $tmp_nbfranchise = $FRANCHISE / 3;
                                        $a = 3;
                                        break;



                                }
                            }

                            $Actualisation = (1 / (1 + $_Tx_Tech)) ** (1 / intval($a));

                            if ($tmp_nbfranchise != 0) {
                                for ($k = 0; $k <= $tmp_nbfranchise; $k++) {
                                    $crd = $CAPASSIVE;

                                    $proba = ((lx($age1 + ($k / $a)) - lx($age1 + ($k / $a) + 1)) / lx($age1));


                                    $Sum_Prime += $crd * $proba * pow($Actualisation, $k + 0.5);
                                }

                            }

                            for ($k = $tmp_nbfranchise; $k < $tmp_NbIteration; $k++) {


                                $crd = $CAPASSIVE * (($tmp_NbIteration - $k) / ($tmp_NbIteration - $tmp_nbfranchise));
                                $proba = (lx($age1 + intval($k / $a)) - lx($age1 + intval($k / $a) + 1)) / lx($age1);
                                $Sum_Prime += $crd * $proba * pow($Actualisation, $k + 0.5);

                            }

                            return $Sum_Prime;


                        }
                        $primePure = Prime_Pure(38);




                        function Chargement($age)
                        {

                            $CAPASSIVE = '';
                            $DURMOIS = '';
                            $FRANCHISE = '';
                            $DEBCNT = '';
                            $FRACTPAIE = '';
                            $tmp_nbfranchise = 0;
                            $tmp_NbIteration = 0;
                            $a = 12;
                            $Sum_Chargement = 0;
                            $Actualisation = 15;
                            $k = 0;
                            $crd = 0;
                            $proba = 0;
                            $_Tx_Tech = 4;
                            $_Tx_Gestion = 0.01;
                            $age1 = $age;
                            $_char = 0;

                            if (isset($_POST['submit'])) {

                                $CAPASSIVE = $_POST['CAPASSIVE'];
                                $DURMOIS = $_POST['DURMOIS'];
                                $FRANCHISE = $_POST['FRANCHISE'];
                                $DEBCNT = $_POST['DEBCNT'];
                                $FRACTPAIE = $_POST['FRACTPAIE'];

                                if (($DURMOIS / 12) >= 10) {
                                    $_Tx_Tech = 4;
                                } else {
                                    $_Tx_Tech = 5.555;

                                }


                                switch ($FRACTPAIE) {
                                    case "Mensuel":
                                        $tmp_NbIteration = $DURMOIS;
                                        $tmp_nbfranchise = $FRANCHISE;
                                        $a = 12;
                                        break;

                                    case "Annuel":

                                        $tmp_NbIteration = $DURMOIS / 12;
                                        $tmp_nbfranchise = $FRANCHISE / 12;
                                        $a = 1;
                                        break;

                                    case "semestriel":
                                        $tmp_NbIteration = $DURMOIS / 6 + ($DURMOIS - ($DURMOIS / 6) * 6) / 6;
                                        $tmp_nbfranchise = $FRANCHISE / 6;
                                        $a = 6;
                                        break;

                                    case "trimestriel":
                                        $tmp_NbIteration = $DURMOIS / 3 + ($DURMOIS - ($DURMOIS / 3) * 3) / 3;
                                        $tmp_nbfranchise = $FRANCHISE / 3;
                                        $a = 3;
                                        break;

                                }
                            }


                            $Actualisation = (1 / (1 + $_Tx_Tech / 100)) ** (1 / intval($a));
                            $crd = $CAPASSIVE;


                            if ($tmp_nbfranchise != 0) {
                                for ($k = 0; $k <= $tmp_nbfranchise; $k++) {
                                    $crd = $CAPASSIVE;
                                    $proba = lx($age1 + intval($k / $a)) / lx($age1);
                                    $Sum_Chargement += $crd * $proba * pow($Actualisation, $k);
                                }
                            }


                            for ($k = $tmp_nbfranchise; $k < $tmp_NbIteration; $k++) {
                                $crd = $CAPASSIVE * (($tmp_NbIteration - $k) / ($tmp_NbIteration - $tmp_nbfranchise));
                                $proba = lx($age1 + intval($k / $a)) / lx($age1);
                                $Sum_Chargement += $crd * $proba * pow($Actualisation, $k);
                            }

                            $_char = $_Tx_Gestion / 100 * (1 / $a) * $Sum_Chargement;
                            return $_char;
                        }

                        $chargementValue = Chargement(38);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>