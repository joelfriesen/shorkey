<?php
/*
Template Name: Big Image
*/
?>
<?php get_header(); ?>
<div class="main frontpage">
  <div class="col spanfive">
    <!-- Page title -->
    <h1 class="pagetitle"><span><?php the_title(); ?></span></h1>
  </div>
  <div class="container fivecol">
    <div class="col spanthree">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="contentarea">
            <!-- Set a featured image at the size specified. -->
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(
              array(960, 990),
              array('class' => 'mainimage')); ?>
            <?php endif; ?>
            <?php the_content("Read more..."); ?>
          </div>
        <?php endwhile; ?>       
      <?php else : ?>
        <h2><?php _e('Oops! Page not found!'); ?></h2>
        <p>I couldn't find any posts</p>
      <?php endif; ?> 
    </div>
    <div class="col spantwo">
      <?php dynamic_sidebar('frontpagesidebar') ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>













