<?php
require_once 'includes/connexion.php';
$pdo = getConnexion();

$niveau = $_GET['niveau'] ?? '';

if (!empty($niveau)) {
    $stmt = $pdo->prepare("SELECT * FROM formations WHERE niveau = ?");
    $stmt->execute([$niveau]);
} else {
    $stmt = $pdo->query("SELECT * FROM formations ORDER BY id ASC");
}

$formations = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Nos Formations</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f8;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #2c3e50;
}

.filters {
    text-align: center;
    margin-bottom: 20px;
}

.filters a {
    text-decoration: none;
    margin: 5px;
    padding: 8px 15px;
    background: #3498db;
    color: white;
    border-radius: 20px;
    transition: 0.3s;
}

.filters a:hover {
    background: #2980b9;
}

.container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.card {
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.card h2 {
    color: #2c3e50;
}

.price {
    color: #e67e22;
    font-size: 20px;
    font-weight: bold;
}

.btn {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 15px;
    background: #27ae60;
    color: white;
    border-radius: 8px;
    text-decoration: none;
}

.btn:hover {
    background: #219150;
}
</style>
</head>

<body>

<h1>🎓 Nos Formations</h1>

<div class="filters">
    <a href="formations.php">Toutes</a>
    <a href="formations.php?niveau=Débutant">Débutant</a>
    <a href="formations.php?niveau=Intermédiaire">Intermédiaire</a>
    <a href="formations.php?niveau=Avancé">Avancé</a>
</div>

<div class="container">

<?php if (empty($formations)): ?>
    <p>Aucune formation disponible.</p>
<?php else: ?>
<?php foreach ($formations as $f): ?>
    <div class="card">
        <h2><?= htmlspecialchars($f['titre']) ?></h2>
        <p><?= htmlspecialchars($f['description']) ?></p>
        <p><b>Durée:</b> <?= htmlspecialchars($f['duree']) ?></p>
        <p><b>Niveau:</b> <?= htmlspecialchars($f['niveau']) ?></p>
        <p class="price"><?= number_format($f['prix'],2,',',' ') ?> DT</p>
        <a class="btn" href="inscription.php?formation_id=<?= $f['id'] ?>">
            S'inscrire
        </a>
    </div>
<?php endforeach; ?>
<?php endif; ?>

</div>

</body>
</html>