<?php $title = 'Chapitres' ?>

<?php ob_start(); ?>

<div class="title_left">
    Chapitres
</div>

<div class="row chapters">
    <?php for ($i = 1; $i <= 6; $i++): ?>
        <div class="col-md-4 chapter">
            <div class="card text-white bg-dark mw-100" style="max-width: 200px;">
                <div class="card-header">Chapitre <?php echo $i ?></div>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button type="button" class="btn btn-outline-secondary">Lire</button>
                    <p class="card-text date">13 janvier 2018</p>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>

<div class="paginations">
    <div class="btn-group mr-2" role="group" aria-label="First group">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <button type="button" class="btn btn-dark"><?php echo $i ?></button>
        <?php endfor; ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
