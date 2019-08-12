<?php get_header() ?>

<div class="container">
    <div class="article-list">
        <?php query(['posts_per_page' => 8], component('article-card') ) ?>
    </div>
</div>

<?php get_footer() ?>