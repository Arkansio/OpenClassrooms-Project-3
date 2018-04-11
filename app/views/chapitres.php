<?php $title = 'Chapitres' ?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    Chapitres
</div>

<div class="row chapters animated fadeIn">
    <?php while ($element = $data->fetch()): ?>
        <div class="col-md-4 chapter">
            <div class="card text-white bg-dark mw-100">
                <div class="card-header"><?php echo $element['title']; ?></div>
                <div class="card-body">
                    <p class="card-text">   <?php echo $element['SUBSTRING(content, 1, 120)']; ?>  </p>
                    <a href="chapitre/?id=<?php echo $element['id']; ?>">
                        <button type="button" class="btn btn-outline-secondary">Lire</button>
                    </a>
                    <p class="card-text date">  <?php echo $element['date']; ?> </p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<div class="paginations animated slideInUp">
    <div class="btn-group mr-2" role="group" aria-label="First group">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i === $actualIndex + 1): ?>
                <button type="button" class="btn btn-dark active"><?php echo $i ?></button>
            <?php else: ?>
                <a href="/projet3/chapitres?i=<?php echo $i; ?>">
                    <button type="button" class="btn btn-dark"><?php echo $i ?></button>
                </a>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
