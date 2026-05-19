<?php require 'views/partials/header.php'; ?>

<h1>Paiement validé ✅</h1>

<p>
Merci
<?= htmlspecialchars($_SESSION['etudiant_prenom']) ?>
</p>

<p>
Formation :
<?= htmlspecialchars($_SESSION['formation_titre']) ?>
</p>

<a href="index.php?page=cours">

Accéder aux cours

</a>

<?php require 'views/partials/footer.php'; ?>