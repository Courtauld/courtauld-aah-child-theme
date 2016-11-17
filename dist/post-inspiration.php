<?php

$posts = get_field('related_artwork', false, false);

if ( $posts ) : ?>
    <aside class="content-box">
        <header class="content-box__header">
            <h1>Inspired by</h1>
        </header>
        <ul class="content-box__list row">
            <?php foreach( $posts as $post ): ?>
                <?php setup_postdata($post); ?>
                <li class="content-box__item col-xs-12">
                    <div class="content-box__wrapper content-box__wrapper--wide">
                        <figure class="content-box__image">
                                <?php echo wp_get_attachment_image($id, large); ?> <!-- This displays the featured image -->
                        </figure>
                        <div class="content-box__text">
                            <h2 class="content-box__title">
                                <?php the_title(); ?>
                            </h2>
                            <p class="content-box__description">
                                <?php
                                    $attachment_meta = wp_get_attachment($id);
                                    echo $attachment_meta['description'];
                                ?>
                            </p>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
