<?php
/**
 * Template Name: Kontakt
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section id="content">
            <div class="row slider blue">

            <?php echo do_shortcode('[crellyslider alias="slider1"]'); ?>
            </div>
            <div class="row padding-1">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="col-lg-4">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="naglowek"><span class="glyphicon glyphicon-envelope green"></span> Kotakt z nami</h3>
                            <p class="text-left mini-p">
                            <span class="glyphicon glyphicon-map-marker green"></span>
                            NAPRAWA SPRZĘTU AGD KLIMATYZACJE<br>
                            HENRYK KOPP-OSTROWSKI<br>
                            ul. Udorpie 89 | 77-100 Bytów<br>
                            Województwo Pomorskie<br>
                            <span class="glyphicon glyphicon-send green"></span>
                            henryk-klima@wp.pl<br>
                            <span class="glyphicon glyphicon-phone green"></span>
                            Kom: +48 507 533 275<br>
                            <span class="glyphicon glyphicon-phone-alt green"></span>
                            Tel: (59) 822-54-89<br>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="naglowek"><span class="glyphicon glyphicon-envelope green"></span> Oddział Poznań</h3>
                            <p class="text-left mini-p">
                            <span class="glyphicon glyphicon-send green"></span>
                            hbklima-poznan@hbklima.pl<br>
                            <span class="glyphicon glyphicon-phone green"></span>
                            Tel: +48 690 004 959
                            </p>
                            <br><br>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37374.46967565733!2d17.454225178029986!3d54.16405792047386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470207d2e90cb4a1%3A0x5cd4ded333699436!2sOstrowski+Henryk.+Monta%C5%BC+i+naprawa+klimatyzacji+w+budynkach+i+samochodach!5e0!3m2!1spl!2spl!4v1470816793137" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        <?php echo do_shortcode('[contact-form-7 id="46" title="Napisz do nas"]'); ?>
                    </div>
                </div>
            </div>
            <div class="row obraz">
                <div class="container">
                        <?php $query = new WP_Query( array('p' => 73 ) ); ?>
                        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                        <h2 class="naglowek-mini-obraz"><?php the_title(); ?></h2>

                        <p class="text-center mini-obraz-p">
                            <?php the_content(); ?><br><br>
                            <a href="http://www.hbklima.viewmake.pl/kontakt/" class="link-mini-obraz">Skontaktuj się z nami już dziś <span class="glyphicon glyphicon-menu-right"></span></a>
                        </p>
                        <?php endwhile;?>
                    <?php endif; ?>
                </div>
            </div>
             <div class="row padding-1">
                <div class="container">
                    <?php $query = new WP_Query( array('p' => 78 ) ); ?>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-lg-4">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div class="col-lg-8">
                        
                        <h2 class="naglowek"><?php the_title(); ?></h2>
                        <p class="text-left mini-p">
                            <?php the_content(); ?>
                        </p>
                    </div>
                    <?php endwhile;?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <h2 class="naglowek text-center">Sprzedajemy sprzęt takich marek jak:</h2>
                    <div class="loga col=lg-12">
                        <div class="carousel">
                            <ul id="scroller">
                                <li><img src="/wp-content/themes/wpstasiu/images/samsung.png"></li>
                                <li><img src="/wp-content/themes/wpstasiu/images/lg.png"></li>
                                <li><img src="/wp-content/themes/wpstasiu/images/scharp.png"></li>
                                <li><img src="/wp-content/themes/wpstasiu/images/daikin.png"></li>
                                <li><img src="/wp-content/themes/wpstasiu/images/midea.png"></li>
                                <li><img src="/wp-content/themes/wpstasiu/images/mitsu.png"></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile;?>
        <?php endif; ?>

<?php get_footer(); ?>