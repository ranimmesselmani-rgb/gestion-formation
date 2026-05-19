<?php require 'views/partials/header.php'; ?>

<h1>Paiement 💳</h1>

<h2>
Formation :
<?= htmlspecialchars($inscription['formation_titre']) ?>
</h2>

<p>
Prix :
<?= $inscription['prix'] ?> DT
</p>

<?php if ($erreur_paiement): ?>

<p style="color:red;">
Paiement refusé ❌
</p>

<?php endif; ?>

<form method="POST">

<button
type="submit"
name="mode"
value="ok">

Paiement réussi

</button>

<button
type="submit"
name="mode"
value="fail">

Paiement refusé

</button>

</form>

<?php require 'views/partials/footer.php'; ?>