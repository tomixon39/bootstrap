<?php
/**
 * Template Name: Mechanika
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
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                        <div class="col-lg-8">
                            <h3 class="naglowek"><span class="glyphicon glyphicon-asterisk green"></span> <?php the_title(); ?></h3>
                            <p class="text-left mini-p">
                             <?php the_content(); ?>  
                            </p>
                        </div>
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
                    <?php $query = new WP_Query( array('category_name' => 'mechanika_dol' ) ); ?>
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
                <!-- <div class="container">
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
                </div> -->
            </div>
        </section>
        <?php endwhile;?>
        <?php endif; ?>

<?php get_footer(); ?>