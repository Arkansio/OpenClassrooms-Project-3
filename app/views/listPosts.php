<?php $title = 'Chapitres' ?>

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
            <?php while ($post = $posts->fetch()): ?>
                <tr>
                    <th scope="row"><?php echo $post['id']; ?></th>
                    <td><?php echo htmlspecialchars($post['title']); ?></td>
                    <td><?php echo $post['date']; ?> </td>
                    <td></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>