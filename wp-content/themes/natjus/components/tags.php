<div class="tags">

    <?php foreach ($tags as $tag) : ?>
        <div class="tags_item" style="background-color: <?= $tag->description ?? '#f1f1f1' ?>">
            <a href="<?= get_category_link($tag) ?>">
                <?= $tag->name ?>
            </a>
        </div>
    <?php endforeach ?>

</div>