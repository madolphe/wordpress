<?php get_header(); ?>

<div class="container home_the_association">
    <div class="home_the_association_title">
            <strong>THE ASSOCIATION</strong>
    </div>
            <?php

            $content = get_post_field( 'post_content', 13 );

            // Get content parts
            $content_parts = get_extended( $content );
            ?>
    <div class="home_content">
            <?php
                // Output part before <!--more--> tag
            echo $content_parts['main'];
            ?>
    </div>
    <div class="Read_More" <a href=<?php bloginfo('template_directory') ?>"the-association"?> Read More </a></div>
</div>

<?php get_footer(); ?>