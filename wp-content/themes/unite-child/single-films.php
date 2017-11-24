<?php
/**
 * The Template for displaying all single posts.
 *
 * @package unite child
 */
get_header();
?>

<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option('site_layout'); ?>">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>
            <h1 class="entry-title "><?php the_title(); ?></h1>

            <div class="entry-meta">
                <?php unite_posted_on(); ?>
            </div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php 
                
                the_content();
                ?>
                <?php   
                $ticket_price = get_field('ticket_price', $post->ID, '');
                $release_date = get_field('release_date', $post->ID, '');

                echo "<p>Ticket Price: ".$ticket_price." </p>";
                echo "<p>Release date: "  . $release_date . '</p>'; 
                ?>
                
                <b>Tags:</b>
                <?php
                
                echo the_terms( $post->ID, 'genre', ' ', ' / ' );
                echo the_terms( $post->ID, 'coutry', ' ', ' / ' );
                echo the_terms( $post->ID, 'actors', ' ', ' / ' );

                ?>
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'unite'),
                    'after' => '</div>',
                ));
                ?>
            </div><!-- .entry-content -->

            <?php //get_template_part('content', 'single'); ?>

            <?php unite_post_nav(); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || '0' != get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>