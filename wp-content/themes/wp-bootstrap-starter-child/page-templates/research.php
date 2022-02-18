<?php

/*
 * Template Name: Research Page
 */

get_header('');;
 ?>
<!-- Landing Section Start -->
<?php $landing_image = get_field('landing_image'); ?>
<section class="site-landing-section research-landing-section" style="background-image: url(<?php echo $landing_image['url']; ?>);">
    <div class="research-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-8 col-lg-8">
                    <div class="research-landing-content__inner">
                        <h1 class="section-title"><?php the_field('section_title') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="research-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-8 col-lg-8">
                    <div class="row research-landing-button">
                        <div class="col col-12 col-md-8 col-lg-8">
                            <div class="research-landing-content__inner">
                                <p class="section-description"><?php the_field('section_description') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="research-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-8 col-lg-8">
                    <div class="row">
                        <div class=" col col-12 col-md-8 col-lg-8">
                            <div class="row research-landing-button">
                                <div class="col col-12 col-md-6 col-lg-6">
                                    <div class="research-landing-content__inner">
                                        <?php $archives_button = get_field('archives_button'); ?>
                                        <a href="<?php echo $archives_button['url']; ?>" class="btn btn-warning w-100"><?php echo $archives_button['title']; ?></a>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 col-lg-6">
                                    <div class="research-landing-content__inner">
                                        <?php $view_story_button = get_field('view_story_button'); ?>
                                        <a href="<?php echo $view_story_button['url']; ?>" class="btn btn-light w-100"><?php echo $view_story_button['title']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Research Section Start -->
<section class="research-section">
    <?php
        $args = array(
        'post_type'   => 'research',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        );
        
        $story = new WP_Query( $args );
        if( $story->have_posts() ) :
        ?>
        <?php
            while( $story->have_posts() ) :
                $story->the_post();
                ?>
                    <div class="model-section-content">
                        <div class="container">
                            <div class="row">
                                <div class="col col-12 col-md-6 col-lg-6">
                                    <div class="model-section-content__inner">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Research Img" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 col-lg-6">
                                    <div class="model-section-content__inner">
                                        <label class="model-section-label">The Model</label>
                                        <h3 class="model-section-title"><?php echo the_title()  ?></h3>
                                        <p class="model-section-description"><?php echo get_the_excerpt(); ?></p>
                                        <a href="<?php echo get_permalink(); ?>" class="see-this-link">+ Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            endwhile;
                wp_reset_postdata();
            ?>
        <?php
        else :
            esc_html_e( 'No Story Found!', 'text-domain' );
        endif;
    ?>
</section>
<!-- Research Section End -->

<!-- How can you help us? Section Start -->
<section class="help-section">
    <div class="section-heading">
        <div class="container">
            <div class="help-heading__inner text-center">
                <h2 class="section-title"><?php the_field('help_title'); ?></h2>
            </div>
        </div>
    </div>
    <div class="help-content">
        <div class="container">
            <div class="help-content__inner">
                <?php $help_image = get_field('help_image') ?>
                <img src="<?php echo $help_image['url']; ?>" alt="your-help-img" class="img-fluid">
                <div class="help-content-text">
                    <div class="section-description">
                        <?php the_field('help_description'); ?>
                    </div>
                    <?php $help_donate_button = get_field('help_donate_button') ?>
                    <a href="<?php echo $help_donate_button['url']; ?>" class="btn btn-light"><?php echo $help_donate_button['title']; ?></a>
                </div>
            </div>
            <div class="text-center donate-button">
                <?php $donate_button = get_field('donate_button'); ?>
                <a href="<?php echo $donate_button['url']; ?>" class="btn btn-warning"><?php echo $donate_button['title']; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- How can you help us? Section End -->

<!-- Donations Use Section Start -->
<section class="donations-use-section">
    <div class="donations-use-content">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-4 col-lg-3">
                    <div class="donations-use-content__inner">
                        <h4 class="section-subtitle"><?php the_field('donation_subtitle'  , 'option' ); ?></h4>
                        <p class="section-description"><?php the_field('donation_description' , 'option'); ?></p>
                        <?php $see_this_button = get_field('see_this_button' , 'option'); ?>
                        <span class="see-this-link"><?php echo $see_this_button['title']; ?></span>
                    </div>
                </div>
                <div class="col col-12 col-md-8 col-lg-9">
                    <div class="donations-use-content__inner">
                        <?php $donation_image = get_field('donation_image' , 'option'); ?>
                        <img src="<?php echo $donation_image['url']; ?>" alt="<?php echo $donation_image['title']; ?>" class="img-fluid">
                        <h3 class="section-title"><?php the_field('donation_use_title' , 'option') ?></h3>
                        <p class="section-description"><?php the_field('donation_content' , 'option') ?></p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Donations Use Section End -->

<!-- Our Archives Section Start -->
<section class="archive-section">
    <div class="archive-content">
        <div class="container">
            <div class="row">
                <div class="col col-12 col- md-4 col-lg-3">
                    <div class="archive-content__inner">
                        <?php $archives_first_image = get_field('archives_first_image' , 'option') ?>
                        <img src="<?php echo $archives_first_image['url']; ?>" alt="<?php echo $archives_first_image['title']; ?>" class="img-fluid">
                    </div>
                </div>
                <div class="col col-12 col- md-8 col-lg-9">
                    <div class="row">
                        <div class="col col-12 col- md-4 col-lg-5">
                            <div class="archive-content__inner">
                                <h4 class="section-subtitle"><?php the_field('archives_subtitle' , 'option') ?></h4>
                                <h2 class="section-title"><?php the_field('archives_title' , 'option') ?></h2>
                            </div>
                        </div>
                        <div class="col col-12 col- md-4 col-lg-7">
                            <div class="archive-content__inner">
                            <?php $archives_image_two = get_field('archives_image_two' , 'option') ?>
                                <img src="<?php echo $archives_image_two['url']; ?>" alt="<?php echo $archives_image_two['title']; ?>" class="img-fluid stock-img">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col- md-4 col-lg-5">
                            <div class="archive-content__inner">
                                <p class="section-description"><?php the_field('check_archives_text' , 'option') ?></p>
                                <?php $check_archives_link = get_field('check_archives_link' , 'option'); ?>
                                <span class="see-this-link"><?php echo $check_archives_link['title']; ?></span>
                            </div>
                        </div>
                        <div class="col col-12 col- md-4 col-lg-7">
                            <div class="archive-content__inner">
                                <p class="section-description"><?php the_field('buy_image_text' , 'option') ?></p>
                                <?php $buy_image_link = get_field('buy_image_link' , 'option'); ?>
                                <span class="see-this-link"><?php echo $buy_image_link['title']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Archives Section End -->

<?php get_footer(''); ?>