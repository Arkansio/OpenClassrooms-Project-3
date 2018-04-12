<?php
$title = 'Chapitre';
$chapterTitle = 'title';
$content = 'test';
?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    Panel d'administration
</div>

<div class="container admin">
    <div class="row">
        <div class="col-8">
            <div class="basicForm">
                <h4>Bienvenue sur votre panel d'administration</h1>
                <p class="welcome">
                    Ici vous pouvez administrer votre site internet. Vous avez accès 
                    à différents outils comme la création de billet ou l'administration 
                    des commentaires d'utilisateurs.
                </script></p>
            </div>
        </div>
        <div class="col-4">
            <div class="basicForm">
                <button type="button" class="btn btn-success">Créer un nouveau billet</button>
                <button type="button" class="btn btn-info">Voir tous les billets</button>
            </div>
            <div class="basicForm bottom">
                <button type="button" class="btn btn-warning">Commentaires signalés</button>
                <button type="button" class="btn btn-info">Tous les commentaires</button>
            </div>
            <div class="basicForm bottom">
                <button type="button" class="btn btn-danger">Déconnexion</button>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
