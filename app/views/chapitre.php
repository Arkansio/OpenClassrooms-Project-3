<?php
$title = 'Chapitre';
?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    <?php echo $post->title; ?>
</div>

<div class="chapterContent">
    <div class="contentBody">
        <?php echo $post->content; ?>
    </div>
    <div class="date"><?php echo $post->date; ?></div>

    <div class="comments">
        <div class="title"> Commentaires </div>
        <form action="<?php echo WEB_ROOT ?>chapitres/comment/" method="POST">
            <div class="commentBox">
                <input name="postID" type="hidden" value="<?php echo $post->id; ?>">
                <input type="text" class="form-control" name="name" placeholder="Votre pseudonyme">
                <textarea class="form-control" name="content" id="" rows="3"></textarea>
                <button type="submit" class="btn btn-primary">Commenter</button>
            </div>
        </form>
        <?php foreach ($comments as $comment): ?>
            <div class="comment">
                <div class="user"><?php echo htmlspecialchars($comment->name); ?></div>
                <div class="content">
                    <?php echo htmlspecialchars($comment->content); ?>
                </div>
                <div class="dateContainer">
                    <div class="date">
                        <?php echo htmlspecialchars($comment->date); ?>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
