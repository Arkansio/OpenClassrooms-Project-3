<?php $title = 'Liste des commentaires' ?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    Liste des commentaires
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
                    <th scope="row"><?php echo htmlspecialchars($comment->name); ?></th>
                    <td>
                        <?php echo htmlspecialchars($comment->content); ?>
                    </td>
                    <td><?php echo $comment->date; ?> </td>
                    <td>
                        <a href="<?php echo WEB_ROOT ?>admin/deleteComment?id=<?php echo $comment->id; ?>" onclick="return confirmDeletion();">
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