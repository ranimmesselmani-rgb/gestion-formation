<?php

require_once 'models/Inscription.php';
require_once 'models/Formation.php';

$erreurs = [];

$formations = Formation::getAll();

$formation_preselect =
isset($_GET['formation_id'])
? (int)$_GET['formation_id']
: null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $formation_id = (int)($_POST['formation_id'] ?? 0);

    if (empty($nom)) {
        $erreurs[] = 'Nom obligatoire';
    }

    if (empty($prenom)) {
        $erreurs[] = 'Prénom obligatoire';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = 'Email invalide';
    }

    if ($formation_id <= 0) {
        $erreurs[] = 'Choisir une formation';
    }

    if (empty($erreurs)) {

        $id = Inscription::ajouter(
            $nom,
            $prenom,
            $email,
            $formation_id
        );

        header(
            'Location: index.php?page=paiement&id=' . $id
        );

        exit();
    }
}

require 'views/inscription.php';

?>