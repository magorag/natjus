<?php
$url   = $url   ?? get_the_post_thumbnail_url($post->ID, 'article');
$title = $title ?? get_the_title();
$text  = $text  ?? get_the_excerpt();
$tags  = $tags  ?? get_the_category();
$href  = $href  ?? get_the_permalink();
?>
<div class="article-card">
    
    <a href="<?= $href ?>">
        <img 
            src="<?= $url ?>" 
            alt="<?= $title ?>" 
            title="<?= $title ?>"
        >
    </a>
    <div class="article-card__content">
        <a href="<?= $href ?>">
            <h1><?= $title ?></h1>
        </a>
        <p><?= $text ?></p>
    </div>
    <div class="article-card__tags">
        <?php component('tags', ['tags' => $tags])() ?>
    </div>

</div>