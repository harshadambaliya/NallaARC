<?php

/*
 * Template Name: Shop Page
 */

get_header('');;
 ?>
<!-- Landing Section Start -->
<?php $landing_image = get_field('landing_image'); ?>
<section class="site-landing-section shop-landing-section" style="background-image: url(<?php echo $landing_image['url']; ?>);">
    <div class="shop-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-6 col-lg-6">
                    <div class="shop-landing-content__inner">
                        <h1 class="section-title"><?php the_field('nhui_title'); ?></h1>
                        <p class="section-description"><?php the_field('description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-6 col-md-6 col-lg-6">
                    <div class="shop-landing-content__inner">
                        <h2 class="section-title"><?php the_field('photograh_video_title') ?></h2>
                    </div>
                    <div class="row shop-landing-button">
                        <div class="col col-6 col-md-6 col-lg-6">
                            <div class="shop-landing-content__inner">
                                <?php $shop_now_button = get_field('shop_now_button'); ?>
                                <a href="<?php echo $shop_now_button['url']; ?>" class="btn btn-warning w-100"><?php echo $shop_now_button['title']; ?></a>
                            </div>
                        </div>
                        <div class="col col-6 col-md-6 col-lg-6">
                            <div class="shop-landing-content__inner">
                                <?php $view_story_button = get_field('view_story_button'); ?>
                                <a href="<?php echo $view_story_button['url']; ?>" class="btn btn-light w-100"><?php echo $view_story_button['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col col-6 col-md-6 col-lg-6 shop-natural-history-logo">
                    <div class="shop-landing-content__inner">
                        <?php $natural_history_logo = get_field('natural_history_logo'); ?>
                        <img src="<?php echo $natural_history_logo['url']; ?>" alt="<?php echo $natural_history_logo['title']; ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Shop Photo Section Start -->
<section class="shop-photo-section">
    <div class="shop-photo-category">
        <div class="container">
            <ul class="shop-photo-category-list">
                <li class="shop-photo-category-item">
                    <span class="shop-photo-category-text">Top Categories</span>
                </li>
                <?php if( have_rows('categories') ): ?>
                    <?php while( have_rows('categories') ): the_row(); 
                        ?>
                        <li class="shop-photo-category-item">
                            <span class="shop-photo-category-text"><?php the_sub_field('category_name'); ?></span>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="shop-photo-content">
        <div class="shop-photo-content__inner">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo1.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo2.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-photo-content__inner">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo3.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo4.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-photo-content__inner">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo5.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo6.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-photo-content__inner">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo1.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo2.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-photo-content__inner">
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo3.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="shop-photo-card">
                            <div class="shop-photo-img">
                                <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/photo4.png" alt="" class="img-fluid">
                            </div>
                            <div class="shop-photo-body">
                                <h3 class="shop-photo-title">Name of Category</h3>
                                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium id mauris id pharetra. Felis ut leo tristique pretium. Accumsan mi gravida consectetur sapien egestas praesent. Sed eu adipiscing enim gravida. </p>
                                <a href="#" class="btn btn-warning">Shop Now</a>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Photo Section End -->

<!-- Royalty Free Video Section Start -->
<section class="royalty-video-section">
    <div class="section-heading">
        <div class="container">
            <div class="royalty-video-heading__inner text-center">
                <h4 class="section-subtitle">Shop</h4>
                <h2 class="section-title">Royalty Free Videos</h2>
            </div>
        </div>
    </div>
    <div class="royalty-video-content">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="royalty-video-card">
                        <div class="royalty-video">
                            <div class="video-icon">
                                <span class="video-icon__inner">
                                    <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/play-icon.png" alt="play-icon.png" class="img-fluid video-play-icon" >
                                    <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/pause-icon.png" alt="play-icon.png" class="img-fluid 
                                    video-pause-icon">
                                </span>
                            </div>
                            <video width="100%">
                                <source src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/mov_bbb.mp4" type="video/mp4">
                            </video>
                            <div class="royalty-video-text">
                                <p class="royalty-video-title">The name of the video</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="royalty-video-card">
                        <div class="royalty-video">
                            <div class="video-icon">
                                <span class="video-icon__inner">
                                    <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/play-icon.png" alt="play-icon.png" class="img-fluid video-play-icon" >
                                    <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/pause-icon.png" alt="play-icon.png" class="img-fluid 
                                    video-pause-icon">
                                </span>
                            </div>
                            <video width="100%">
                                <source src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/mov_bbb.mp4" type="video/mp4">
                            </video>
                            <div class="royalty-video-text">
                                <p class="royalty-video-title">The name of the video</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="royalty-video-card">
                        <div class="royalty-video">
                            <div class="video-icon">
                                <span class="video-icon__inner">
                                    <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/play-icon.png" alt="play-icon.png" class="img-fluid video-play-icon" >
                                    <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/pause-icon.png" alt="play-icon.png" class="img-fluid 
                                    video-pause-icon">
                                </span>
                            </div>
                            <video width="100%">
                                <source src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/mov_bbb.mp4" type="video/mp4">
                            </video>
                            <div class="royalty-video-text">
                                <p class="royalty-video-title">The name of the video</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="royalty-video-card">
                        <div class="royalty-video">
                            <div class="video-icon">
                                <span class="video-icon__inner">
                                    <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/play-icon.png" alt="play-icon.png" class="img-fluid video-play-icon" >
                                    <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/pause-icon.png" alt="play-icon.png" class="img-fluid 
                                    video-pause-icon">
                                </span>
                            </div>
                            <video width="100%">
                                <source src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/mov_bbb.mp4" type="video/mp4">
                            </video>
                            <div class="royalty-video-text">
                                <p class="royalty-video-title">The name of the video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center shop-more-video-btn">
                <a href="#"  class="btn btn-warning">Shop More Videos Now</a>
            </div>
        </div>
    </div>
</section>
<!-- Royalty Free Video Section End -->

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