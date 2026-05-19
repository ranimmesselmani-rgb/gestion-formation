<?php require 'views/partials/header.php'; ?>

<section class="formations-section">

    <h1 class="page-title">
        🎓 Nos Formations
    </h1>

    <div class="cards-container">

        <?php foreach($formations as $f): ?>

        <div class="card">

            <div class="card-top">
                <span class="level">
                    <?= htmlspecialchars($f['niveau']) ?>
                </span>
            </div>

            <h2>
                <?= htmlspecialchars($f['titre']) ?>
            </h2>

            <p class="description">
                <?= htmlspecialchars($f['description']) ?>
            </p>

            <div class="infos">

                <p>
                    ⏳ <?= htmlspecialchars($f['duree']) ?>
                </p>

                <p class="price">
                    <?= number_format($f['prix'],2,',',' ') ?> DT
                </p>

            </div>

            <a class="btn"
               href="index.php?page=inscription&formation_id=<?= $f['id'] ?>">
                S'inscrire →
            </a>

        </div>

        <?php endforeach; ?>

    </div>

</section>

<?php require 'views/partials/footer.php'; ?>