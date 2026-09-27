<?php $pageTitle = 'Tous les produits'; require __DIR__ . '/layout/header.php'; ?>
<section class="panel">
    <h1>Tous les produits</h1>
    <?php foreach ($produits as $value) : ?>
        <p class="product"><?= htmlspecialchars($value['nomP'], ENT_QUOTES, 'UTF-8') ?></p>
    <?php endforeach; ?>
</section>
<?php require __DIR__ . '/layout/footer.php'; ?>