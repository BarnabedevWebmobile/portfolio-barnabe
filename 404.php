<?php get_header(); ?>
        <h1>Perdu ?</h1>
        <h2>vous êtes perdu ? voici un cookie pour vous consoler</h2>
    
        <img src="cookie.png" alt="des cookies">

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
