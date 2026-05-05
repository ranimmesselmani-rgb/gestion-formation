<?php
$id = $_GET['formation_id'] ?? 0;
?>

<h2>📝 Inscription</h2>

<form method="POST" action="traitement.php" style="max-width:400px;margin:auto;">
    <input type="text" name="nom" placeholder="Nom" required><br><br>
    <input type="text" name="prenom" placeholder="Prénom" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>

    <input type="hidden" name="formation_id" value="<?= $id ?>">

    <button style="padding:10px 20px;background:#3498db;color:white;border:none;border-radius:5px;">
        Valider
    </button>
</form>