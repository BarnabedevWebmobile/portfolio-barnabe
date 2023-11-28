
<?php get_header(); ?>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2>ceci est un article</h2>
    
        <?php if ( have_posts() ) :
             while ( have_posts() ) : the_post(); ?>
    
        <h3><?php the_title(); ?></h3>
    
        <div class="maincontent">
            <?php the_content(); ?>
        </div>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
    
        <?php endwhile; ?>
    

        <?php endif; ?>
        <?php get_footer(); ?>
