<?php
    require "include/header.php";
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php $news = get_news();?>
                <?php foreach ($news as $new):?>
                <div class="card" style="width: 48rem;" >
                    <img src="<?=$new['image']?>"  alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$new['title']?></h5>
                        <p class="card-text"><?= mb_substr($new['content'], 0,280, 'UTF-8') . '...'?></p>
                        <a href="post.php?id_news=<?=$new['id_news']?>" class="btn btn-primary">Переглянути</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
