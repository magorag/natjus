<?php get_header() ?>

<div class="container">
    <div class="article-list">
        <?php
        query([
            'cat' => get_query_var('cat'),
            'posts_per_page' => 16,
        ], component('article-card') );
        ?>
    </div>
</div>

<?php get_footer() ?>