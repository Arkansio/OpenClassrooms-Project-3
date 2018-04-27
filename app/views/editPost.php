<?php
$title = 'Nouveau billet';
?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    Editer billet
</div>


<div class="container editor">
    <form action="<?php echo WEB_ROOT ?>admin/editPost/" method="POST">
        <input name="id" type="hidden" value="<?php echo $editPost->id; ?>">
        <input name="title" class="form-control title" placeholder="Titre du billet" value="<?php echo $editPost->title; ?>">
        <textarea name="content" id="editor" cols="30" rows="10"><?php echo $editPost->content; ?></textarea>
        <div class="submit">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    <form>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
