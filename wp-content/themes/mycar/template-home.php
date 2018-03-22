<?php
    /* Template Name: Főoldal */

    get_header();
?>

<div class="container gallery-container">
    <h1>Gallery</h1>
    <p class="page-description text-center">Grid Layout With Zoom Effect</p>
    <div class="tz-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/park.jpg">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/park.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/bridge.jpg">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/bridge.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/tunnel.jpg">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/tunnel.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/coast.jpg">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/coast.jpg" alt="Coast">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/rails.jpg">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/rails.jpg" alt="Rails">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/traffic.jpg">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/traffic.jpg" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/rocks.jpg">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/rocks.jpg" alt="Rocks">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/benches.jpg">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/benches.jpg" alt="Benches">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/sky.jpg">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/sky.jpg" alt="Sky">
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>