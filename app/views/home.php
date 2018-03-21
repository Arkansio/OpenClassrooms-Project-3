<?php $title = 'Billet simple pour l\'Alaska | Jean Forteroche' ?>

<?php ob_start(); ?>

<div class="title_welcome animated jackInTheBox">
    Billet simple pour l'Alaska
    <div class="sub">
        Un roman écrit par Jean forteroche
    </div>
</div>

<div class="btn_group">
    <button type="button" class="btn btn-outline-secondary"><span>Découvrir l'aventure</span></button>
    <button type="button" class="btn btn-outline-secondary"><span>Dernier chapitre</span></button>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
