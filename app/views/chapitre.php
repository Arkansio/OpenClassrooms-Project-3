<?php
$title = 'Chapitre';
$chapterTitle = 'title';
$content = 'test';
?>

<?php ob_start(); ?>

<div class="title_left animated bounceInLeft">
    <?php echo $data['title']; ?>
</div>

<div class="chapterContent">
    <div class="contentBody">
        <?php echo $data['content']; ?>
    </div>
    <div class="date"><?php echo $data['date']; ?></div>

    <div class="comments">
        <div class="title"> Commentaires </div>
        <?php for ($i = 1; $i <= 6; $i++): ?>

            <div class="comment">
                <div class="user">Marco</div>
                <div class="content">
                    commentaire de billet
                </div>
                <div class="dateContainer">
                    <div class="date">
                        Posté le 2017-07-20
                    </div>
                </div>
            </div>

        <?php endfor; ?>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
