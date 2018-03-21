<?php $title = 'Chapitres' ?>

<?php ob_start(); ?>

page chapitre!
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
