<?php get_header(); ?>
    <div id="content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Der Verweis (Permalink) zu:
        <?php the_title(); ?>"></a></h2>
            <div class="beitrags-info">Von <?php the_author(); ?> am <?php the_time('d. F Y'); ?>
                um <?php the_time('H:i'); ?> <?php edit_post_link(); ?></div>

                <div class="der-beitrag">
                    <?php the_content(); ?>
                </div> <!-- Ende des jeweiligen Beitrags -->

                <div class="feedback">
                    <?php comments_popup_link('Kommentare (0)', 'Kommentare (1)', 'Kommentare (%)'); ?>
                </div>

        <?php comments_template(); /* Der Kommentarbereich */ ?>

        <?php endwhile; else: ?>
            <p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>

        <?php endif; ?>
        <p><?php posts_nav_link(' - ', '« Zurückblättern', 'Weiterblättern »'); ?></p>

    </div><!-- /#inhalt -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>