<!--
    Template Name: Page (No featured image)
    The replication of this Theme file in the child theme is necessary to include the custom sidebar, which sets different default widgets to the parent theme.
-->
<aside class="col-xs-offset-1 col-xs-10 col-md-2 sidebar">
    <section class="widget">
        <h2>Search</h2>
        <?php get_search_form(); ?>
    </section>
    <section class="partners">
        <h2>A Partnership between</h2>
        <a href="http://courtauld.ac.uk/"><img src="<?php echo get_stylesheet_directory_uri();?>/img/courtauld-logo-primary.png" alt="The Courtauld Institute of Art"/></a>
        <a href="http://www.arts.ac.uk/"><img src="<?php echo get_stylesheet_directory_uri();?>/img/ual-logo.jpg" alt="University of the Arts"/></a>
    </section>
    <?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-main' ); ?>
    <?php else : ?>
        <section class="widget">
            <h2>Menu</h2>
            <?php wp_page_menu('sort_column=menu_order&depth=2&order=asc'); ?>
        </section>
    <?php endif; ?>
</aside>
