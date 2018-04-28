<?php $title = 'Chapitres' ?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    Chapitres
</div>

<div class="row chapters animated fadeIn">
    <?php foreach ($posts as $post): ?>
        <div class="col-md-6 chapter">
            <div class="card text-white bg-dark mw-100">
                <div class="card-header"><?php echo htmlspecialchars($post->title); ?></div>
                <div class="card-body">
                    <p class="card-text"><?php echo strip_tags($post->content); ?>...</p>
                    <a href="<?php echo WEB_ROOT ?>chapitres/chapitre/?id=<?php echo $post->id ?>">
                        <button type="button" class="btn btn-outline-secondary">Lire</button>
                    </a>
                    <p class="card-text date">  <?php echo $post->date; ?> </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="paginations animated slideInUp">
    <div class="btn-group mr-2" role="group" aria-label="First group">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i === $actualIndex + 1): ?>
                <button type="button" class="btn btn-dark active"><?php echo $i ?></button>
            <?php else: ?>
                <a href="<?php echo WEB_ROOT ?>chapitres?i=<?php echo $i; ?>">
                    <button type="button" class="btn btn-dark"><?php echo $i ?></button>
                </a>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
