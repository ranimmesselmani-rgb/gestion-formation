<?php
echo "Hello World!";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    if (!is_numeric($age)) {
        echo "<h3 style='color:red;'>Âge doit être un nombre !</h3>";
    } 
    else {
        if ($age <= 0) {
            echo "<h3 style='color:red;'>Âge doit être supérieur à 0 !</h3>";
        } 
        else {
            echo "<h2>Bienvenue $prenom $nom</h2>";
            echo "Email : " . $email . "<br>";
            echo "Âge : " . $age . "<br>";
        }
    }
}

$formations= ["Développement Web", "Réseaux", "Sécurité","Base de donées"];
echo "<h2>Parcourir et affichage avec la boucle foreach </h2><br>";
echo "<ul>";
foreach ($formations as $formation) {
echo $formation . "<br>";
}
echo "</ul>";

echo "<h2>Parcourir et affichage avec la boucle for </h2><br>";
for ($i = 0; $i < count($formations); $i++) {
echo $formations[$i] . " | ";
}

echo "<h2>Parcourir et affichage avec la boucle while </h2><br>";
$i=0;
while ($i < count($formations) ) {
echo $formations[$i] . " | ";
$i++;
}

echo "<h2>Tableau associatif </h2><br>";
$utilisateur = [
"nom" => "messelmani",
"prenom" => "ranim",
"email" => "ranim@email.com",
"formation" => "Développement Web"];

echo "Nom : " . $utilisateur["nom"] . "<br>";
echo "Prénom : " . $utilisateur["prenom"] . "<br>";
echo "Email : " . $utilisateur["email"] . "<br>";
echo "Formation : " . $utilisateur["formation"];

foreach ($utilisateur as $key => $value) {
echo $key." : ". $value. "<br>";
}

$formations = [
["nom" => "Développement Web", "duree" => "3 mois"],
["nom" => "Réseaux", "duree" => "2 mois"],
["nom" => "Sécurité", "duree" => "4 mois"]
];

foreach ($formations as $f) {
echo "Formation : " . $f["nom"] .
" - Durée : " . $f["duree"] . "<br>";
}
?>

<h2>Formulaire</h2>
<form method="POST" action="">
    Nom : <input type="text" name="nom" required><br><br>
    Prénom : <input type="text" name="prenom" required><br><br>
    Email : <input type="email" name="email" required><br><br>
    Âge : <input type="text" name="age" required><br><br>

    <input type="submit" value="Envoyer">
</form>
