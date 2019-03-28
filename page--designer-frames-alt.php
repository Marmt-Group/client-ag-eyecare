<?php
/**
* Template Name: Designer Frames Alt Page
*
* @package WordPress
* @subpackage AG_Eyecare
* @since 1.0.0
*/

get_header();
?>

<body <?php body_class('gradient--active'); ?>>

<?php get_template_part( '/template-parts/content', 'nav' ); ?>

<div class="main-container">
    <section class="section-snippet-about-2 bg--secondary container-header imagebg">
        <div class="container">
            <div class="row pos-vertical-align-columns">
                <div class="col-sm-5">
                    <?php if( get_field('headline') ): ?>
                        <?php the_field('headline'); ?>
                    <?php endif; ?>

                    <?php if( get_field('subheadline') ): ?>
                        <?php the_field('subheadline'); ?>
                    <?php endif; ?>

                    <?php if( get_field('header_cta_url') ): ?>
                    <a href="<?php the_field('header_cta_url'); ?>" class="btn btn--white">
                        <span class="btn__text"><?php the_field('header_cta_text'); ?></span>
                        <i class="ion-arrow-right-c"></i>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6 col-md-push-1">
                    <div class="boxed imagebg text-center" data-overlay="3">
                        <div class="boxed-text">
                        <span class="h1 color--white">LUX-</span><br>
                        <span class="h1 color--white">URY</span><br>
                        <span class="h1 color--white">FRAMES</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-snippet-about-2 bg--secondary container-logos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 style="margin:1.5em 0 0;font-size:2em;">Top brands include:</h3>
                    <div class="partner-logos">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/Coach_New_Logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/Gucci_logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/lacoste-1-logo-svg-vector.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/ray-ban-logo-svg-vector.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/Tiffany_Logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/Persol_logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Prada-Logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Dolce_and_Gabbana.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Versace_logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Burberry_Logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Bulgari_logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Fendi_logo.svg">
                    </div>
                    <h3 style="margin:1.5em 0 0;font-size:1em;">and many more</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="container-summary bg--primary add-glasses-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php if( get_field('block_text_cta') ): ?>
                        <?php the_field('block_text_cta'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( '/template-parts/content', 'booking' ); ?>

 </div>

<?php
    get_footer();
?>