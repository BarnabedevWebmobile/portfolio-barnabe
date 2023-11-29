<?php get_header(); ?>

    
<?php if ( have_posts() ) :
     while ( have_posts() ) : the_post(); ?>

<section class="banner">
<div class="container">
    <div class="row">
        <div class="col-lg-3 display-none">
            <h1 class="animate__animated animate__bounceInLeft"><!--titre animé-->
                <span class="diese">#</span>Barnabé <br> 
                Maurice
            </h1>
        </div>
        <div class=" photo col-12 col-md-4 "><!--la photo de la section-->
            <img class="img-fluid rounded-1" src="<?php echo bloginfo('template_directory' )."/image/photo.jpg"?>" alt="ce mec">
        </div>

        <div class="aboutme col-12 col-md-3 p-3"> <!--le a propos-->
            <h2>
                Qui suis je ?
            </h2>
            <br>
            <p>
                <?php $post = get_post(642);?>
               
                <?php   echo $post->post_content?>
            </p>
            <a class="btncenter btn btn-secondary btn-sm " href="http://localhost/wordpress/?page_id=621">à propos</a>
        </div>
    </div>
</div>
</section>
<section class="project"> <!--l'ensemble des cartes-->
<div class="container">
    <div class="row justify-content-center animate__animated animate__lightSpeedInLeft"> 
        <div class="col-10 col-md-4 card p-3 m-3 carte"><!--la carte-->
            <img src="<?php echo bloginfo('template_directory' )."/image/projet1.png"?>" class="card-img-top p-3 img-fluid" alt="onepage"> <!--l'image de la carte-->
            <div class="card-body p-3"> <!--le contenu de la carte-->
              <h5 class="card-title">Mon premier projet</h5>
              <p class="card-text">Le premier projet que j'ai réaliser, un biographie de personage de fiction codé en html et css.</p>
              <a href="https://github.com/BarnabedevWebmobile/fiche-biographie-arthur-morgan" class="btncentercard btn btn-primary">github</a>
            </div>
        </div>
        <div class="col-10 col-md-4 card p-3 m-3 carte "><!--la carte-->
            <img src="<?php echo bloginfo('template_directory' )."/image/projet2.png"?>" class="card-img-top p-3 img-fluid" alt="memory"><!--l'image de la carte-->
            <div class="card-body p-3"><!--le contenu de la carte-->
              <h5 class="card-title">projet en JavaScript</h5>
              <p class="card-text">Un projet qui m'a permis d'apprendre les bases du JavaScript, en reproduisant le jeu de memory.</p>
              <a href="https://github.com/BarnabedevWebmobile/memory" class="btncentercard btn btn-primary">github</a>
            </div>
        </div>
        <div class="col-10 col-md-4 card p-3 m-3 carte "> <!--la carte-->
            <img src="<?php echo bloginfo('template_directory' )."/image/projet3.png"?>" class="card-img-top p-3 img-fluid" alt="portfolio"> <!--l'image de la carte-->
            <div class="card-body p-3"><!--le contenu de la carte-->
              <h5 class="card-title">Mon portfolio</h5>
              <p class="card-text">Mon projet utilisant toutes les compétences acquises, HTML, CSS, JavaScript et Bootstrap.</p>
              <a href="https://github.com/BarnabedevWebmobile/brief2" class="btncentercard btn btn-primary ">github</a>
            </div>
        </div>
    </div>
</div>
</section>

<div class="maincontent">
    <?php the_content(); ?>
</div>
<?php wp_link_pages(); ?>


<?php endwhile; ?>


<?php endif; ?>
<?php get_footer(); ?>
