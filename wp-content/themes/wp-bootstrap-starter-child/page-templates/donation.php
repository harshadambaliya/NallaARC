<?php

/*
 * Template Name: Donation Page
 */

get_header('');;
 ?>

<!-- Landing Section Start -->
<?php $landing_image = get_field('landing_image'); ?>
<section class="site-landing-section donate-landing-section" style="background-image: url(<?php echo $landing_image['url']; ?>);">
    <div class="donate-landing-content d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-5 col-lg-5">
                    <div class="donate-landing-content__inner">
                        <h1 class="section-title"><?php the_field('donate_title'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="donate-landing-content d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class=" col col-5">
                    <div class="donate-landing-content__inner">
                        <h1 class="section-title"><?php the_field('donate_title'); ?></h1>
                    </div>
                </div>
                <div class=" col col-7">
                    <div class="donate-landing-content__inner">
                        <p class="section-description"><?php the_field('donate_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="donate-landing-content d-none d-md-block ">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-5 col-lg-5">
                    <div class="donate-landing-content__inner">
                        <p class="section-description"><?php the_field('donate_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="donate-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-5 col-lg-5">
                    <div class="row">
                        <div class=" col col-6 col-md-6 col-lg-6">
                            <div class="donate-landing-content__inner donate-landing-btn">
                                <?php $donate_now_button = get_field('donate_now_button'); ?>
                                <a href="<?php echo $donate_now_button['url']; ?>" class="btn btn-warning"><?php echo $donate_now_button['title']; ?></a>
                            </div>
                        </div>
                        <div class=" col col-6 col-md-6 col-lg-6">
                            <div class="donate-landing-content__inner donate-landing-btn">
                                <?php $contact_us_button = get_field('contact_us_button'); ?>
                                <a href="<?php echo $contact_us_button['url']; ?>" class="btn btn-light"><?php echo $contact_us_button['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col col-12 col-md-5 col-lg-4"> </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Donation Video Section Start -->
<section class="donation-video-section">
    <div class="container">
        <div class="donation-video">
            <div class="royalty-video-card">
                <div class="royalty-video">
                    <div class="video-icon">
                        <span class="video-icon__inner">
                            <img src="<?php SITE_URL(); ?>/wp-content/uploads/2022/02/play-icon.png" alt="play-icon.png" class="img-fluid video-play-icon">
                            <img src="<?php SITE_URL(); ?>/wp-content/uploads/2022/02/pause-icon.png" alt="play-icon.png" class="img-fluid  video-pause-icon">
                        </span>
                    </div>
                    <?php $donation_video = get_field('donation_video'); ?>
                    <video width="100%">
                        <source src="<?php echo $donation_video['url'];  ?>" type="video/mp4">
                    </video>
                    <div class="royalty-video-text">
                        <p class="royalty-video-title"><?php the_field('donation_video_title') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Donation Video Section End -->

<!-- Donations Section Start -->
<section class="donation-section">
    <div class="donation-content">
        <div class="container">
            <div class="donation-content__inner">
                <div class="row no-gutters">
                    <div class="col col-4 col-md-4 col-lg-4">
                        <span class="donation-bar donation-expected-bar"></span>
                        <label class="donation-bar-label"><?php the_field('expected_amount_label') ?></label>
                    </div>
                    <div class="col col-4 col-md-4 col-lg-4">
                        <h2 class="section-title"><?php the_field('donation_title') ?></h2>
                        <span class="donation-bar donation-donated-bar"></span>
                        <label class="donation-bar-label"><?php the_field('amount_donated_label') ?></label>
                    </div>
                    <div class="col col-4 col-md-4 col-lg-4">
                        <span class="donation-bar donation-left-bar"></span>
                        <label class="donation-bar-label"><?php the_field('amount_left_label') ?></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Donations Section End -->

<!-- Used Donation Section Start -->
<section class="used-donation">
    <?php if( have_rows('where_user_donation') ): ?>
        <?php while( have_rows('where_user_donation') ): the_row(); 
            $image = get_sub_field('image');
            ?>
            <div class="model-section-content">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="model-section-content__inner">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="model-section-content__inner">
                                <h3 class="model-section-title"><?php the_sub_field('title'); ?></h3>
                                <p class="model-section-description"><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="donation-section-button text-center">
        <?php $donaion_button = get_field('donaion_button'); ?>
        <a href="<?php echo $donaion_button['url']; ?>" class="btn btn-warning"><?php echo $donaion_button['title']; ?></a>
    </div>
</section>
<!-- Used Donation Section End -->

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
                                <div class="col col-12 col-md-4 col-lg-4">
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
                <?php $story_read_more_button = get_field('story_read_more_button'); ?>
                <a href="<?php echo $story_read_more_button['url']; ?>" class="btn btn-warning"><?php echo $story_read_more_button['title']; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- Stories Section End -->

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