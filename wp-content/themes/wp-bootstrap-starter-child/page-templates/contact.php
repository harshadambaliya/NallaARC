<?php

/*
 * Template Name: Contact Us Page
 */

get_header('');;
 ?>

<!-- Landing Section Start -->
<?php $landing_image = get_field('landing_image'); ?>
<section class="site-landing-section contact-landing-section" style="background-image: url(<?php echo $landing_image['url']; ?>);">
    <div class="contact-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-6 col-lg-6">
                    <div class="contact-landing-content__inner">
                        <h1 class="section-title"><?php the_field('section_title') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class=" col col-10 col-md-6 col-lg-6">
                            <div class="contact-landing-content__inner">
                                <h2 class="contact-info-title"><?php the_field('nalla_title') ?></h2>
                                <p class="contact-info-description"><?php the_field('nalla_designation') ?></p>
                                <?php $nalla_email = get_field('nalla_email') ?>
                                <p class="contact-info-mail"><span>Email:</span> <a href="<?php echo $nalla_email['url']; ?>"><?php echo $nalla_email['title']; ?></a></p>
                                <?php $nalla_number = get_field('nalla_number') ?>
                                <p class="contact-info-mail"><span>Mobile:</span> <a href="<?php echo $nalla_number['url']; ?>"><?php echo $nalla_number['url']; ?></a></p>
                            </div> 
                            <div class="contact-landing-content__inner">
                                <h2 class="contact-info-title"><?php the_field('anvita_title') ?></h2>
                                <p class="contact-info-description"><?php the_field('anvita_designation') ?></p>
                                <?php $anvita_email = get_field('anvita_email') ?>
                                <p class="contact-info-mail"><span>Email:</span> <a href="<?php echo $anvita_email['url']; ?>"><?php echo $anvita_email['title']; ?></a></p>
                                <?php $anvita_number = get_field('anvita_number') ?>
                                <p class="contact-info-mail"><span>Mobile:</span> <a href="<?php echo $anvita_number['url']; ?>"><?php echo $anvita_number['title']; ?></a></p>
                            </div>   
                        </div>
                        <div class=" col col-10 col-md-6 col-lg-6">
                            <div class="contact-landing-content__inner contact-landing-title-content">
                                <div class="contact-landing-title-content__inner">
                                    <h2 class="contact-landing-title"><?php the_field('landing_title') ?></h2>
                                    <p class="contact-landing-subtitle"><?php the_field('landing_subtitle') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class=" col col-10 col-md-6 col-lg-6">
                            <div class="contact-landing-button">
                                <?php $rresearch_button = get_field('rresearch_button') ?>
                                <a href="<?php echo $rresearch_button['url']; ?>" class="btn btn-light"><?php echo $rresearch_button['title']; ?></a>
                            </div>
                        </div>
                        <div class=" col col-10 col-md-6 col-lg-6">
                            <div class="contact-landing-button">
                                <?php $donate_button = get_field('donate_button') ?>
                                <a href="<?php echo $donate_button['title']; ?>" class="btn btn-light"><?php echo $donate_button['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Contact Us Section Start -->
<section class="contact-us-section">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-6 col-lg-6">
                <div class="contact-us-img">
                    <?php $contact_us_image = get_field('contact_us_image') ?>
                    <img src="<?php echo $contact_us_image['url']; ?>" alt="<?php echo $contact_us_image['title']; ?>" class="img-fluid">
                </div>
            </div>
<!--             <div class="col col-12 col-md-6 col-lg-6 contact-us-form-title">
                <div class="contact-us-form-title__inner">
                    <p class="contact-us-form-title-text">“A good and interesting quote from Nalla.”</p>
                </div>
            </div> -->
            <div class="col col-12 col-md-6 col-lg-6">
                <div class="contact-us-content">
                    <h2 class="section-title"><?php the_field('contact_us_title') ?></h2>
                    <div class="contact-us-form">
                        <?php $form = get_field('contact_form') ?>
                            <?php echo do_shortcode( $form ); ?>
						
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Section End -->

<!-- Stories Section Start -->
<section class="story-section">
    <div class="section-heading">
        <div class="container">
            <div class="stiry-heading__inner text-center">
                <h4 class="section-subtitle"><?php the_field('story_subtitle') ?></h4>
                <h2 class="section-title"><?php the_field('story_title') ?></h2>
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
                                <div class="col col-12 col-md-6 col-lg-4">
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

<?php get_footer(''); ?>