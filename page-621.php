<?php get_header()?>

<section class="mainsection"> <!--le a propos-->
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-5 m-5">
                    <img class="img-fluid rounded-1" src="<?php echo bloginfo('template_directory' )."/image/photo.jpg"?>" alt="photo">
                </div>
                <div class="col-10 col-md-5 p-5 m-5">
                    <h2>À propos</h2>
                    <br>
                    <p> 
                        <?php 
                            $post = get_post(645)
                        ?>
                        <?php 
                            echo $post->post_content
                        ?> 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="mainsectionalt"> <!--la liste des experiences professionel-->
        <div class="container">
            <div class="row justify-content-center align-item-center">
                <div class="col-5 m-5 justify-content-center align-item-center">
                    <h2>expériences professionnels/étude</h2>
                    <br>
                    <span class="texte">
                        <?php
                            $post = get_post(647)
                        ?>

                        <?php 
                        echo $post->post_content
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="mainsection"> <!--la liste des notions que j'ai-->
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-5 m-5">
                    <img class="img-fluid rounded-1" src="<?php echo bloginfo('template_directory' )."/image/photo.jpg"?>" alt="photo">
                </div>
                <div class="col-10 col-md-5 p-5 m-5">
                    <h2>Outils maitrisés</h2>
                    <br>
                    <span class="texte">
                        <p>
                            <?php
                                $post = get_post(651)
                            ?>

                            <?php 
                                echo $post->post_content
                            ?>
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer()?>