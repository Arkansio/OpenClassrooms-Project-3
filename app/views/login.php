<?php
$title = 'Login';
?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">Connexion</div>

<div class="login">
    <form action="<?php echo WEB_ROOT ?>login/index.php" method="post">
        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input name="username" type="text" class="form-control" placeholder="Mot de passe">
            <label for="password">Mot de passe</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-light">Submit</button>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
