<div class="ui-block-<?php echo $column ?>  card ui-corner-all custom-corners">
    <span class="flaticon-122-heart fav-icon-card" onclick="favourite(this)" id="<?php echo $key ?>"></span>
    <a data-ajax="false" href="<?php echo $page ?? 'product.php' ?>?id=<?php echo $key ?>">
        <div class="ui-bar ui-bar-a ui-card">
            <img class="center" src="<?php echo $image ?>" width="80"></br>
            <p class="card-title"><?php echo $name ?> </p> </br> <span
                    class="card-price">LKR <?php echo $price ?? '' ?></span>
        </div>
    </a>
</div>