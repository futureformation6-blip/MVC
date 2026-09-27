<?php $pageTitle = 'Ajouter un produit'; require __DIR__ . '/layout/header.php'; ?>
<section class="panel">
    <h1>Ajouter un produit</h1>
    <form action="" method="post">
        <label for="idP">
            id:
            <input type="text" name="idP">
        </label>
        <label for="nomP">
            nom:
            <input type="text" name="nomP" id="nomP">
        </label>
        <button type="submit" name="enregistrer">Enregistrer</button>
        <div class="actions">
            <button type="submit" name="afficher">Afficher</button>
            <button type="submit" name="supprimer">Supprimer</button>
        </div>
    </form>

    <?php if ($message !== null) { ?>
        <p class="notice"><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
    <?php } ?>

    <?php foreach ($produit as $p) { ?>
        <p class="product"><?= htmlspecialchars($p['nomP'], ENT_QUOTES, 'UTF-8') ?></p>
    <?php } ?>
        
</section>
<?php require __DIR__ . '/layout/footer.php'; ?>