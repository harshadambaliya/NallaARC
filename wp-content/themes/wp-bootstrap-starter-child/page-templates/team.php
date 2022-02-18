<?php

/*
 * Template Name: Team Page
 */

get_header('');;
 ?>


<!-- Landing Section Start -->
<?php $landing_image = get_field('landing_image'); ?>
<section class="site-landing-section team-landing-section" style="background-image: url(<?php echo $landing_image['url']; ?>);">
    <div class="team-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-5 col-lg-4">
                    <div class="team-landing-content__inner">
                        <h1 class="section-title"><?php the_field('landing_section_title'); ?></h1>
                        <p class="section-description"><?php the_field('landing_section_description'); ?></p>
                    </div>
                </div>
                <div class=" col col-12 col-md-7 col-lg-8">
                    <div class="team-landing-content__inner team-landing-subtitle">
                        <h2 class="section-title"><?php the_field('landing_section_subtitle'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-landing-content">
        <div class="container">
            <div class="row">
                <div class=" col col-12 col-md-5 col-lg-4">
                    <div class="team-landing-content__inner team-landing-btn">
                        <?php $landing_button = get_field('landing_button'); ?>
                        <a href="<?php echo $landing_button['url']; ?>" class="btn btn-light"><?php echo $landing_button['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Team Member Section Start -->
<section class="team-member-section">
    <?php if( have_rows('team_member') ): ?>
        <?php while( have_rows('team_member') ): the_row(); 
            $image = get_sub_field('image');
            ?>
            <div class="team-member-content">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="team-member-img">
                                <div class="team-member-img__inner">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-6">
                            <div class="team-member-text">
                                <div class="team-member-text__inner">
                                    <h2 class="team-member-name"><?php the_sub_field('name'); ?></h2>
                                    <label class="section-subtitle"><?php the_sub_field('designation') ?></label>
                                    <p class="section-description"><?php the_sub_field('description') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<!-- Team Member Section End -->

<!-- The story of Nall's Section Start -->
<section class="story-arc-section">
    <div class="container">
        <?php $story_image = get_field('story_image'); ?>
        <div class="story-arc-content" style="background-image: url(<?php echo $story_image['url']; ?>)">
            <h2 class="section-title"><?php the_field('story_title'); ?></h2>
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="story-arc-description">
                        <?php the_field('story_description'); ?>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-6">
                    <div class="story-arc-description">
                        <?php the_field('story_description_two'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- The story of Nalla’s Section End -->

<!-- Photograph Shot Section Start -->
<?php $section_image = get_field('section_image'); ?>
<section class="photograph-shot-section" style="background-image: url(<?php echo $section_image['url']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col col-6 col-md-6 col-lg-3">
                <div class="photograph-shot-img">
                    <?php $history_logo = get_field('history_logo'); ?>
                    <img src="<?php echo $history_logo['url']; ?>" alt="<?php echo $history_logo['url']; ?>" class="img-fluid">
                </div>
            </div>
            <div class="col col-6 col-md-6 col-lg-6">
                <div class="photograph-shot-title-content">
                    <h2 class="section-title"><?php the_field('photographs_shot_title'); ?></h2>
                    <p class="section-description"><?php the_field('photographs_shot_subtitle'); ?></p>
                </div>
            </div>
            <div class="col col-12 col-md-6 col-lg-3 mx-auto">
                <div class="photograph-shot-button">
                    <p class="section-description"><?php the_field('photographs_shot_description'); ?></p>
                    <?php $checkout_btn = get_field('checkout_btn'); ?>
                    <a href="<?php echo $checkout_btn['url']; ?>" class="btn btn-success"><?php echo $checkout_btn['title']; ?></a>
                </div>
            </div>
            <div class="col col-12 col-md-12 col-lg-6 text-center mx-auto">
                <div class="">
                    <p class="section-description"><?php the_field('by_nallamuthu_label'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Photograph Shot Section End -->

<!-- Award Win Section Start -->
<section class="award-win-section">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-4 col-lg-4">
                <div class="award-win-content">
                    <label class="award-win-label"><?php the_field('award_win_label'); ?></label>
                    <h2 class="award-win-title"><?php the_field('award_win_title'); ?> </h2>
                    <p class="award-win-subtitle"><?php the_field('award_win_subtitle') ?></p>
                </div>
            </div>
            <div class="col col-12 col-md-4 col-lg-4 text-center">
                <div class="award-win-content">
                    <?php $award_win_logo = get_field('award_win_logo'); ?>
                    <img src="<?php echo $award_win_logo['url']; ?>" alt="<?php echo $award_win_logo['title']; ?>" class="img-fluid">
                </div>
            </div>
            <div class="col col-12 col-md-4 col-lg-4">
                <div class="award-win-content">
                    <p class="award-win-description"><?php the_field('award_win_description') ?></p>
                    <?php $award_win_button = get_field('award_win_button'); ?>
                    <a href="<?php echo $award_win_button['url']; ?>" class="btn btn-danger"><?php echo $award_win_button['title']; ?></a
                    >
                </div>
            </div>
            <div class="col col-12 col-md-4 col-lg-4 mx-auto text-center">
                <div class="award-win-content">
                    <p class="award-win-description"><?php the_field('awad_win_by_nallamuthu_label') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Award Win Section End -->
    
<?php get_footer(''); ?>