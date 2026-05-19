<?php

require_once 'models/Database.php';

class Formation {

    public static function getAll() {

        $pdo = Database::connect();

        $stmt = $pdo->query("SELECT * FROM formations ORDER BY id DESC");

        return $stmt->fetchAll();

    }

}

?> 
Sent
Compose
Write to
