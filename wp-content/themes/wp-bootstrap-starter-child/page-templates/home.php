<?php

/*
 * Template Name: Home Page
 */

get_header('');;
 ?>

<!-- Landing Section Start -->
<?php $landing_image = get_field('landing_image'); ?>
<?php $landing_image_mobile = get_field('landing_image_mobile'); ?>
<style>
    .home-landing-section {
        background-image: url(<?php echo $landing_image['url']; ?>);
    }
    @media (max-width: 767px){
        .home-landing-section {
            background-image: url(<?php echo $landing_image_mobile['url']; ?>);
        }
    }
</style>
<section class="site-landing-section home-landing-section" >
    <div class="home-logo">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="home-logo-content">
                        <?php $landing_logo = get_field('landing_logo'); ?>
                        <img src="<?php echo $landing_logo['url']; ?>" alt="<?php echo $landing_logo['title']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-landing-content">
        <div class="container">
            <div class="row">
                <div class="col col-6 col-md-3 col-lg-3">
                    <div class="home-landing-text">
                        <h1 class="section-title"><?php the_field('landing_title'); ?></h1>
                    </div>
                </div>
                <div class="col col-6 col-md-3 col-lg-3">
                    <div class="home-landing-text">
                        <p class="section-decription"><?php the_field('landing_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-landing-content">
        <div class="container">
            <div class="row">
                <div class="col col-6 col-md-3 col-lg-3">
                    <div class="home-landing-text home-landing-btn">
                        <?php $archives_button = get_field('archives_button'); ?>
                        <a href="<?php echo $archives_button['url']; ?>" class="btn btn-light"><?php echo $archives_button['title']; ?></a>
                    </div>
                </div>
                <div class="col col-6 col-md-3 col-lg-3">
                    <div class="home-landing-text home-landing-btn">
                        <?php $story_button = get_field('story_button'); ?>
                        <a href="<?php echo $story_button['url']; ?>" class="btn btn-light"><?php echo $story_button['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Model Section Start -->
<section class="model-section">
    <?php if( have_rows('model') ): ?>
        <?php while( have_rows('model') ): the_row(); 
            $model_image = get_sub_field('model_image');
            ?>
            <div class="model-section-content">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="model-section-content__inner">
                                <img src="<?php echo $model_image['url']; ?>" alt="<?php echo $model_image['title']; ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="model-section-content__inner">
                                <label class="model-section-label"><?php the_sub_field('model_label'); ?></label>
                                <h3 class="model-section-title"><?php the_sub_field('model_title'); ?></h3>
                                <p class="model-section-description"><?php the_sub_field('model_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<!-- Model Section End -->

<!-- The Featured Section Start -->
<section class="featured-section">
    <div class="section-heading">
        <div class="container">
            <div class="featured-heading__inner text-center">
                <h4 class="section-subtitle"><?php the_field('featured_subtitle'); ?></h4>
                <h2 class="section-title"><?php the_field('featured_title'); ?></h2>
            </div>
        </div>
    </div>
    <div class="featured-profile">
        <div class="container">
            <div class="row featured-profile-slider">
                <?php if( have_rows('featured_profile') ): ?>
                    <?php while( have_rows('featured_profile') ): the_row(); 
                        $image = get_sub_field('image');
                        ?>
                        <div class="col col-12 col-md-4 col-lg-4">
                            <div class="featured-profile-card text-center">
                                <div class="featured-profile-img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="img-fluid">
                                </div>
                                <div class="featured-profile-body">
                                    <h3 class="featured-profile-name"><?php the_sub_field('name') ?></h3>
                                    <p class="featured-profile-description"><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- The Featured Section End -->

<!-- Stories Section Start -->
<section class="story-section">
    <div class="section-heading">
        <div class="container">
            <div class="stiry-heading__inner text-center">
                <h4 class="section-subtitle"><?php the_field('story_subtitle'); ?></h4>
                <h2 class="section-title"><?php the_field('story_title'); ?></h2>
            </div>
        </div>
    </div>
    <div class="story-content">
        <div class="container">
            <div class="row">
                <?php
                    $args = array(
                    'post_type'   => 'story',
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
                                <div class="col col-6 col-md-6 col-lg-4">
                                    <div class="story-card">
                                        <div class="story-img">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Story Image" class="img-fluid">
                                        </div>
                                        <div class="story-body">
                                            <h3 class="story-title"><?php echo the_title()  ?></h3>
                                            <?php $author_id=$post->post_author; ?>
                                            <label class="story-author"><?php the_author_meta( 'user_nicename' , $author_id ); ?></label>
                                            <div class="story-link-button text-center">
                                                <a href="<?php echo get_permalink(); ?>" class="story-link">+ Read More</a>
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
            </div>

            <div class="more-story-button text-center">
                <?php $read_more_button = get_field('read_more_button'); ?>
                <a href="<?php echo $read_more_button['url']; ?>" class="btn btn-warning"><?php echo $read_more_button['title']; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- Stories Section End -->

<!-- Donations Section Start -->
<section class="donation-section">
    <div class="donation-content">
        <div class="container">
            <div class="donation-content__inner">
                <div class="row no-gutters">
                    <div class="col col-4 col-md-4 col-lg-4">
                        <span class="donation-bar donation-expected-bar"></span>
                        <label class="donation-bar-label"><?php the_field('expected_amount_label'); ?></label>
                    </div>
                    <div class="col col-4 col-md-4 col-lg-4">
                        <h2 class="section-title"><?php the_field('donation_title'); ?></h2>
                        <span class="donation-bar donation-donated-bar"></span>
                        <label class="donation-bar-label"><?php the_field('amount_donated_label'); ?></label>
                    </div>
                    <div class="col col-4 col-md-4 col-lg-4">
                        <span class="donation-bar donation-left-bar"></span>
                        <label class="donation-bar-label"><?php the_field('amount_left_label'); ?></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="donation-section-button text-center">
        <?php $donate_now_button = get_field('donate_now_button'); ?>
        <a href="<?php echo $donate_now_button['url']; ?>" class="btn btn-warning"><?php echo $donate_now_button['title']; ?></a>
    </div>
</section>
<!-- Donations Section End -->

<!-- Donations Use Section Start -->
<section class="donations-use-section">
    <div class="donations-use-content">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-4 col-lg-3">
                    <div class="donations-use-content__inner">
                        <h4 class="section-subtitle"><?php the_field('donation_subtitle'); ?></h4>
                        <p class="section-description"><?php the_field('donation_description'); ?></p>
                        <?php $see_this_button = get_field('see_this_button'); ?>
                        <span class="see-this-link"><?php echo $see_this_button['title']; ?></span>
                    </div>
                </div>
                <div class="col col-12 col-md-8 col-lg-9">
                    <div class="donations-use-content__inner">
                        <?php $donation_image = get_field('donation_image'); ?>
                        <img src="<?php echo $donation_image['url']; ?>" alt="<?php echo $donation_image['title']; ?>" class="img-fluid">
                        <h3 class="section-title"><?php the_field('donation_use_title') ?></h3>
                        <p class="section-description"><?php the_field('donation_content') ?></p> 
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
                        <?php $archives_first_image = get_field('archives_first_image') ?>
                        <img src="<?php echo $archives_first_image['url']; ?>" alt="<?php echo $archives_first_image['title']; ?>" class="img-fluid">
                    </div>
                </div>
                <div class="col col-12 col- md-8 col-lg-9">
                    <div class="row">
                        <div class="col col-12 col- md-4 col-lg-5">
                            <div class="archive-content__inner">
                                <h4 class="section-subtitle"><?php the_field('archives_subtitle') ?></h4>
                                <h2 class="section-title"><?php the_field('archives_title') ?></h2>
                            </div>
                        </div>
                        <div class="col col-12 col- md-4 col-lg-7">
                            <div class="archive-content__inner">
                            <?php $archives_image_two = get_field('archives_image_two') ?>
                                <img src=<?php echo $archives_image_two['url']; ?>" alt="<?php echo $archives_image_two['title']; ?>" class="img-fluid stock-img">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col- md-4 col-lg-5">
                            <div class="archive-content__inner">
                                <p class="section-description"><?php the_field('check_archives_text') ?></p>
                                <?php $check_archives_link = get_field('check_archives_link'); ?>
                                <span class="see-this-link"><?php echo $check_archives_link['title']; ?></span>
                            </div>
                        </div>
                        <div class="col col-12 col- md-4 col-lg-7">
                            <div class="archive-content__inner">
                                <p class="section-description"><?php the_field('buy_image_text') ?></p>
                                <?php $buy_image_link = get_field('buy_image_link'); ?>
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

<!-- Testimonials Section Start -->
<section class="testimonial-section">
    <div class="section-heading">
        <div class="container">
            <div class="testimonial-heading__inner text-center">
                <h4 class="section-subtitle"><?php the_field('testimonial_subtitle', 'option'); ?></h4>
                <h2 class="section-title"><?php the_field('testimonial_title', 'option'); ?></h2>
            </div>
        </div>
    </div>
    <div class="testimonial-content">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-12 col-lg-5">
                    <div class="testimonial-card">
                        <label class="testimonial-name"><?php the_field('testimonial_name_one', 'option') ?></label>
                        <p class="testimonial-description"><?php the_field('testimonial_description_one', 'option') ?></p>
                    </div>
                </div>
                <div class="col col-12 col-md-12 col-lg-7">
                    <div class="row">
                        <div class="col col-6 col-md-6 col-lg-6">
                            <div class="testimonial-card">
                                <label class="testimonial-name"><?php the_field('testimonial_name_two', 'option') ?></label>
                                <p class="testimonial-description"><?php the_field('testimonial_description_two', 'option') ?></p>
                            </div>
                        </div>
                        <div class="col col-6 col-md-6 col-lg-6">
                            <div class="testimonial-card">
                                <label class="testimonial-name"><?php the_field('testimonial_name_three', 'option') ?></label>
                                <p class="testimonial-description"><?php the_field('testimonial_description_three', 'option') ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-6 col-md-6 col-lg-6">
                            <div class="testimonial-card">
                                <label class="testimonial-name"><?php the_field('testimonial_name_four', 'option') ?></label>
                                <p class="testimonial-description"><?php the_field('testimonial_description_four', 'option') ?></p>
                            </div>
                        </div>
                        <div class="col col-6 col-md-6 col-lg-6">
                            <div class="testimonial-card">
                                <label class="testimonial-name"><?php the_field('testimonial_name_five', 'option') ?></label>
                                <p class="testimonial-description"><?php the_field('testimonial_description_five', 'option') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Section End -->


<?php get_footer(''); ?>