<?php $title = 'Liste des posts' ?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    Liste des posts
</div>

<div class="listPosts container animated fadeIn">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Pseudonyme</th>
                <th scope="col">Contenu</th>
                <th scope="col">Date de création</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $comment): ?>
                <tr>
                    <th scope="row"><?php echo $comment->name; ?></th>
                    <td>
                        <a class="white" href="<?php echo WEB_ROOT ?>chapitres/chapitre?id=<?php echo $post->id; ?>">
                            <?php echo htmlspecialchars($comment->content); ?>
                        </a>
                    </td>
                    <td><?php echo $comment->date; ?> </td>
                    <td>
                        <a href="<?php echo WEB_ROOT ?>a<?php echo $comment->id; ?>">
                            <button type="button" class="btn btn-success">
                                <i class="fas fa-check"></i>
                            </button>
                        </a>
                        <a href="<?php echo WEB_ROOT ?>a<?php echo $comment->id; ?>">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>
                        <a href="<?php echo WEB_ROOT ?>a<?php echo $comment->id; ?>">
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>