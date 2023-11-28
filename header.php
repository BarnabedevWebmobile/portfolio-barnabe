<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class()?>> 
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-1 justify-content-center text-center justify-content-md-end"><!--le logo a gauche du header-->
                        <img src="http://localhost/wordpress/wp-content/uploads/2023/11/Vector.png" alt="logo">
                    </div>
                    <div class="col-12 col-md-11">
                        <nav class="d-flex justify-content-center justify-content-md-end">
                            <ul class="utilitymenu"><!--liste de liens mis en forme dans la nav-->
                                <li>
                                    <a class="utility" href="http://localhost/wordpress/?page_id=621" title="a-propos">à propos</a>
                                </li>
                                <li>
                                    <a class="utility" href="http://localhost/wordpress/?page_id=609" title="contact">contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>