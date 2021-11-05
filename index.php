<?php get_header() ?>

<?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php the_title() ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                <p class="card-text">
                    <?php the_content('En voir plus') ?>
                </p>
                <a href="<?php the_permalink()?>" class="card-link">Voir plus</a>
            </div>
        </div>
    <?php endwhile ?>
<?php else: ?>
    <h1> Pas d'articles :(</h1>
<?php endif; ?>
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Sunsets don&#39;t get much better than this one over
        <a href="https://twitter.com/GrandTetonNPS?ref_src=twsrc%5Etfw">@GrandTetonNPS</a>.
        <a href="https://twitter.com/hashtag/nature?src=hash&amp;ref_src=twsrc%5Etfw">#nature</a>
        <a href="https://twitter.com/hashtag/sunset?src=hash&amp;ref_src=twsrc%5Etfw">#sunset</a>
        <a href="http://t.co/YuKy2rcjyU">pic.twitter.com/YuKy2rcjyU</a>
    </p>&mdash; US Department of the Interior (@Interior)
    <a href="https://twitter.com/Interior/status/463440424141459456?ref_src=twsrc%5Etfw">May 5, 2014</a>
</blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php
if (comments_open() || get_comments_number()) {
    comments_template();
}
?>

<?php get_footer() ?>

