<?php
$title = 'Nouveau billet';
?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    Création de billet
</div>


<div class="container editor">
    <form action="<?php echo WEB_ROOT ?>admin/createPost/index.php" method="POST">
        <input name="title" class="form-control title" placeholder="Titre du billet">
        <textarea id="editor" name="content" id="" cols="30" rows="10"></textarea>
        <div class="submit">
            <button type="submit" class="btn btn-primary">Poster</button>
        </div>
    <form>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
