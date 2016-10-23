<div id="sidebar">
    <h2><label for="s">Suchen</label></h2>
    <form id="searchform" method="get" action="<?php bloginfo('url'); ?>">
        <div>
            <input name="s" id="s" size="20" type="text" />
            <input name="submit" value="Suchen" type="submit" class="such-button" />
        </div>
    </form>

    <h2>Kategorien</h2>
    <ul>
        <?php
            wp_list_categories('order=name&show_count=1&title_li=');
        ?>
    </ul>

    <h2>Monatsarchiv</h2>
    <ul>
        <?php wp_get_archives(); ?>
    </ul>

    <h2>Sonstiges</h2>
    <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
    </ul>
</div>

<!-- Ende der sidebar.php -->