<?php
$title = 'Chapitre';
$chapterTitle = 'title';
$content = 'test';
?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">Connexion</div>

<div class="login">
    <form action="/projet3/login/index.php" method="post">
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-light">Submit</button>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
