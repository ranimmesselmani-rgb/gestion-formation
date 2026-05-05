<?php
function getConnexion() {
    $host = 'localhost';
    $dbname = 'gestion_formations';
    $user = 'root';
    $pass = '';

    try {
        return new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user,
            $pass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    } catch (PDOException $e) {
        die("Erreur connexion: " . $e->getMessage());
    }
}
?>