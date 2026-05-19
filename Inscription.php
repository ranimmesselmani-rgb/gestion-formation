<?php

require_once 'Database.php';

class Inscription {

    public static function ajouter($nom, $prenom, $email, $formation_id): int {

        $pdo = Database::connect();

        $stmt = $pdo->prepare(
            "INSERT INTO inscriptions
            (nom, prenom, email, formation_id, statut_paiement, date_inscription)

            VALUES (?, ?, ?, ?, 'en_attente', NOW())"
        );

        $stmt->execute([
            $nom,
            $prenom,
            $email,
            $formation_id
        ]);

        return (int)$pdo->lastInsertId();
    }

    public static function getById($id) {

        $pdo = Database::connect();

        $stmt = $pdo->prepare(
            "SELECT i.*, f.titre AS formation_titre, f.prix
             FROM inscriptions i
             JOIN formations f
             ON i.formation_id = f.id
             WHERE i.id = ?"
        );

        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public static function marquerPaye($id): void {

        $pdo = Database::connect();

        $stmt = $pdo->prepare(
            "UPDATE inscriptions
             SET statut_paiement='paye'
             WHERE id=?"
        );

        $stmt->execute([$id]);
    }
}
?>