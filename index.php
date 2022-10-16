<?php

require_once "class/pet.php";
require_once "class/animal.php";
require_once "class/owner.php";

// méthod
$owner1 = new Owner("Ginette Boivin", "4626 d'Orléans", "h1h1h1", "514-222-4444", "ginette@aimeleschats.com");
$owner1_name = $owner1 -> getName();
$owner1_address = $owner1 -> getAddress();
$owner1_zipcode = $owner1 -> getZipCode();
$owner1_phone = $owner1 -> getPhone();
$owner1_email = $owner1 -> getEmail();


$pet1 = new Pet("Cocorico", "17-02-2018", null);
$pet1_name = $pet1 -> getName();
$pet1_birthday = $pet1 -> getbirthday();
$pet1_type = $pet1 -> getType();
$pet1_age = $pet1 -> getAge();

$owner2 = new Owner("Hubert Legrand", "2525 St-Denis", "h2h2h2", "514-221-4445", "hubert@aimeleschats.com");
$owner2_name = $owner2 -> getName();
$owner2_address = $owner2 -> getAddress();
$owner2_zipcode = $owner2 -> getZipCode();
$owner2_phone = $owner2 -> getPhone();
$owner2_email = $owner2 -> getEmail();


$pet2 = new Pet("Minou", "15-04-2015", null);
$pet2_name = $pet2 -> getName();
$pet2_birthday = $pet2 -> getbirthday();
$pet2_type = $pet2 -> getType();
$pet2_age = $pet2 -> getAge();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/entete-principale.css">
    <link rel="stylesheet" href="style/stylesheet.css">
    <title>Clinique Vétérinaire</title>
</head>
<body>
    <nav class="navigation">
        <div class="logo"><img src="img/logo-clinique-vet.png" alt="logo"></div>
        <a href="index.php">Registre complet</a><!-- Normalement cette page aurait une url registre.php-->
        <a href="#">Réservation</a>
        <a href="#">Modification rendez-vous</a>
        <a href="#">Horaire</a>
        <a href="#">Facturation</a>
        <a href="index.php">Site web</a>
        <button class="dropdown">...</button>
    </nav>
    <header class="entete-principal">
		<img src="img/default.jpg" alt="Administration en-tête de la clinique">
        <h1 class="titre">Registre Clients & Animaux</h1>
	</header>
    <div class = "grille">
        <h2>Fiche client 1</h2>
        <div class="flexVertical">
            <div class = "flexHorizontal">
                <table class = "proprietaire">
                    <thead>
                        <div class = "thead">
                            <h3>Propriétaire</h3>
                            <div class = "button">
                                <input type="submit" name="btnModifierProprio" value="Modifier"/>
                                <input type="submit" name="btnFacturation" value="Facturation"/>
                            </div>
                        </div>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nom</td>
                            <td><?=$owner1_name?></td>
                        </tr>
                        <tr>
                            <td>Adresse</td>
                            <td><?=$owner1_address?></td>
                        </tr>
                        <tr>
                            <td>Code Postal</td>
                            <td><?=$owner1_zipcode?></td>
                        </tr>
                        <tr>
                            <td>Téléphone</td>
                            <td><?=$owner1_phone?></td>
                        </tr>
                        <tr>
                            <td>Courriel</td>
                            <td><?=$owner1_email?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class = "flexHorizontal">
                <table class = "animal">
                    <thead>
                        <div class = "thead">
                            <h3>Animal</h3>
                            <div class="button">
                                <input type="submit" name="btnModifierRDV" value="Modifier"/>
                                <input type="submit" name="btnAjouterRDV" value="Ajouter"/>
                            </div>
                        </div>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Type</td>
                            <td><?=$pet1_type?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?=$pet1_name?></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td><?=$pet1_age?></td>
                        </tr>
                        <tr>
                            <td>Anniversaire</td>
                            <td><?=$pet1_birthday?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class = "flexVertical">
            <div class="flexHorizontal">
                <table class = "rendez-vous">
                    <thead>
                        <div class = "thead">
                            <h3>Prochain rendez-vous</h3>
                            <div class="button">
                                <input type="submit" name="btnModifierRDV" value="Modifier"/>
                                <input type="submit" name="btnAjouterRDV" value="Ajouter"/>
                            </div>
                        </div>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Date</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Notes</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class ="flexHorizontal">
                <div class = "thead">
                    <h3>Photo de l'animal</h3>
                    <div class="button">
                        <input type="submit" name="btnModifierRDV" value="Modifier"/>
                        <input type="submit" name="btnAjouterRDV" value="Ajouter"/>
                    </div>
                </div>
                <img src="img/owner1.jpg" alt="photo du chat">
            </div>
        </div>
    </div>
    <hr>
    <div class = "grille">
        <h2>Fiche client 2</h2>
        <div class="flexVertical">
            <div class = "flexHorizontal">
                <table class = "proprietaire">
                    <thead>
                        <div class = "thead">
                            <h3>Propriétaire</h3>
                            <div class="button">
                                <input type="submit" name="btnModifierProprio" value="Modifier"/>
                                <input type="submit" name="btnFacturation" value="Facturation"/>
                            </div>
                        </div>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nom</td>
                            <td><?=$owner2_name?></td>
                        </tr>
                        <tr>
                            <td>Adresse</td>
                            <td><?=$owner2_address?></td>
                        </tr>
                        <tr>
                            <td>Code Postal</td>
                            <td><?=$owner2_zipcode?></td>
                        </tr>
                        <tr>
                            <td>Téléphone</td>
                            <td><?=$owner2_phone?></td>
                        </tr>
                        <tr>
                            <td>Courriel</td>
                            <td><?=$owner2_email?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class = "flexHorizontal">
                <table class = "animal">
                    <thead>
                        <div class = "thead">
                            <h3>Animal</h3>
                            <div class="button">
                                <input type="submit" name="btnModifierAnimal" value="Modifier"/>
                            </div>
                        </div>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Type</td>
                            <td><?=$pet2_type?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?=$pet2_name?></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td><?=$pet2_age?></td>
                        </tr>
                        <tr>
                            <td>Anniversaire</td>
                            <td><?=$pet2_birthday?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class = "flexVertical">
            <div class="flexHorizontal">
                <table class = "rendez-vous">
                    <thead>
                        <div class = "thead">
                            <h3>Prochain rendez-vous</h3>
                            <div class="button">
                                <input type="submit" name="btnModifierRDV" value="Modifier"/>
                                <input type="submit" name="btnAjouterRDV" value="Ajouter"/>
                            </div>
                        </div>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Date</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Notes</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class ="flexHorizontal">
                <div class = "thead">
                    <h3>Photo de l'animal</h3>
                    <div class="button">
                        <input type="submit" name="btnModifierRDV" value="Modifier"/>
                        <input type="submit" name="btnAjouterRDV" value="Ajouter"/>
                    </div>
                </div>
                <img src="img/owner2.jpg" alt="photo du chat">
            </div>
        </div>
    </div>
    <footer>
        <nav class="navigation-bas-page">
            <a href="index.php">Haut de page ↑ </a><!-- Normalement cette page aurait une url registre.php-->
            <a href="#">Réservation</a>
            <a href="#">Modification</a>
            <a href="#">Horaire</a>
            <a href="#">Facturation</a>
            <a href="index.php">Site web</a>
            <button class="dropdown">...</button>
        </nav>
    </footer>
</body>
</html>