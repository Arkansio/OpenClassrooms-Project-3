<?php $title = 'Chapitre' ?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    Titre du chapitre
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
