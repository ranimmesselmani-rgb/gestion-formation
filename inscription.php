<?php require 'views/partials/header.php'; ?>

<h1>Formulaire d'Inscription</h1>

<?php if (!empty($erreurs)): ?>

<div style="color:red;">

<ul>

<?php foreach ($erreurs as $e): ?>

<li><?= htmlspecialchars($e) ?></li>

<?php endforeach; ?>

</ul>

</div>

<?php endif; ?>

<form method="POST" action="index.php?page=inscription">

<label>Nom :</label><br>
<input type="text" name="nom" required><br><br>

<label>Prénom :</label><br>
<input type="text" name="prenom" required><br><br>

<label>Email :</label><br>
<input type="email" name="email" required><br><br>

<label>Formation :</label><br>

<select name="formation_id" required>

<option value="">Choisir</option>

<?php foreach ($formations as $f): ?>

<option
value="<?= $f['id'] ?>"

<?= ($formation_preselect == $f['id']) ? 'selected' : '' ?>

>

<?= htmlspecialchars($f['titre']) ?>

</option>

<?php endforeach; ?>

</select>

<br><br>

<button type="submit">

Continuer vers paiement

</button>

</form>

<?php require 'views/partials/footer.php'; ?>