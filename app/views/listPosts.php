<?php $title = 'Liste des posts' ?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    Liste des posts
</div>

<div class="listPosts container animated fadeIn">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre du post</th>
                <th scope="col">Date de création</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <th scope="row"><?php echo $post->id; ?></th>
                    <td><?php echo htmlspecialchars($post->title); ?></td>
                    <td><?php echo $post->date; ?> </td>
                    <td>
                        <a href="<?php echo WEB_ROOT ?>admin/editPost?id=<?php echo $post->id; ?>">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </button>
                        </a>
                        <a href="<?php echo WEB_ROOT ?>admin/deletePost?id=<?php echo $post->id; ?>">
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