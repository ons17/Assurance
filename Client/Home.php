<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMI Assurance</title>
    <link href="style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="shortcut icon" href="https://www.assurancesami.com/sites/default/files/favicon-32x32_0.png"
        type="image/png" />

</head>

<body>

    <?php


    $isUserLoggedIn = true;
    if ($isUserLoggedIn) {
        echo '<script>alert("Bienvenue Cher Client");</script>';
    }
    ?>


    <div class="zone menuPage">
        <div class="warrap">
            <nav class="breadcrumb is-right" aria-label="breadcrumbs">
                <ul>
                    <h1>
                        <img src="https://www.assurancesami.com/sites/default/files/logo-ami-assurance.png"
                            alt="Accueil" />
                    </h1>
                    <li class="is-active"><a href="#" aria-current="page">AMI Assurance</a></li>
                    <li><a href="Details_sim.php">Simulation</a></li>

                    <li><a href="About.html">À propos</a></li>


                </ul>


                <div class="navbar-end">
                    <div class="buttons">
                        <a class="button is-link" href="Create.html">
                            <strong>S'inscrire</strong>
                        </a>
                        <a class="button is-light" href="login.html">
                            Se connecter </a>
                    </div>
                </div>
        </div>



        </nav>




        <div class="view-content">
            <div class="item-list">
                <ul class="slidBanner">
                    <li class="views-row views-row-1 views-row-odd views-row-first">
                        <div class="bannerElem">
                            <div class="img">
                                <div class="field-content">
                                    <img typeof="foaf:Image"
                                        src="https://www.assurancesami.com/sites/default/files/styles/banner_home/public/banniere-ami_0_0.png?itok=2o7jtsk1"
                                        width="1700" height="550" alt="" />
                                </div>
                            </div>
                            <div class="info">
                                <div class="warrap">
                                    <div class="field-content"></div>
                                    <div class="field-content"><a
                                            href="https://www.assurancesami.com/fr/actualites/communique-de-presse-3"
                                            style="color: red;margin-left: 250px;font-size: 30px;">_____AMI Assurances
                                            signe un contrat stratégique avec le japonais Sompo______

                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </li>







                    <br>

                    <div>
                        <section>



                            <p style="text-align: center;  font-size: 50px; color:rgb(81, 81, 200);"> Inscrivez-vous &
                                recevez nos nouveautés en avant-première </p>
                            <div class="input-group m-9">
                                <input type="text" class="form-control" placeholder="E-mail"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2"
                                        style="background-color: rgb(56, 56, 166); color: antiquewhite;">S'inscrire</span>
                                </div>







                            </div>









                            <div>
                                <br>
                                <br>

                                <div id="block-block-2" class="block block-block bics last even"
                                    style="margin-left: 700px;">
                                    <ul>
                                        <a href="https://www.facebook.com/AMAssurances" target="_blank"><img
                                                src="img/img2.png" style="height: 30px; margin-left: 10px;"></a>
                                        <a href="https://www.instagram.com/ami.assurances/" target="_blank"><img
                                                src="img/img3.jpeg" style="height: 30px; margin-left: 10px;"></a>
                                        <a href="https://twitter.com/AssurancesAmi" target="_blank"><img
                                                src="img/img4.png" style="height: 30px; margin-left: 10px;"></a>
                                        <a href="https://www.linkedin.com/company/ami-assurances/" target="_blank"><img
                                                src="img/img6.png" style="height: 30px; margin-left: 10px;"></a>
                                    </ul>
                                </div>

                            </div><br>
                            <br>

                            <div>
                                <footer>
                                    <P style="text-align: center  " ;>© 2024 AMI Assurances Siège Social- Cité des pins,
                                        zone Nord Est les Berges du Lac 2 1053 Tunis</P>


                                    <p style="text-align: center  ;">Tél. : +216 70.026.000 / Fax : +216 71.268.400</P>


                                    <p style="text-align: center  ;"> E-mail : courrier@assurancesami.com</P>


                                    <p style="text-align: center  ;"> Site web développé par medianet.tn
                                    </P>
                                </footer>
                            </div>
</body>

</html>