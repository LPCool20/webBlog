<?php
    require "include/header.php";

    $id_news = $_GET['id_news'];
    if (!is_numeric($id_news))
        header('location: ../404.php');

    $new = get_news_by_id($id_news);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card"">
            <img src="<?=$new['image'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$new['title'];?></h5>
                <p class="card-text"><?=$new['content'];?></p>
                <a href="index.php" class="btn btn-primary">&larr; Повернутися назад</a>
            </div>
        </div>
        </div>
    </div>
</div>