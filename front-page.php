<?php get_header(); ?>
<div class="slides mainbg">
  <div class="container onecol">
    <div class="col">
      <?php echo do_shortcode( '[responsive_slider]' ); ?>
    </div>
  </div>
</div>
<div class="fivecta mainbg">
  <div class="container fivecol">
    <?php dynamic_sidebar('frontpagecalltoaction') ?>
  </div>
</div>
<div class="main frontpage mainbg">
  <div class="container fivecol">
    <div class="col spanthree">
      <?php while (have_posts()) : the_post(); ?>
        <div class="contentarea">
          <h1 class="pagetitle"><span><?php the_title(); ?></span></h1>
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
      <h2 class="pagetitle"><span>Latest News</span></h2>
      <div class="col rowholder">
        <?php
          $the_query = new WP_Query( 'posts_per_page=1' );
          global $more;
          while ( $the_query->have_posts() ) : $the_query->the_post(); $more = 0; ?>
          <div class="newscontentbox">
            <h4 class="indexintro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <div class="excerpt"><span>…</span></div>
          </div>
          <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div class="col">
        <?php
          $the_query = new WP_Query( 'posts_per_page=1&offset=1' );
          global $more;
          while ( $the_query->have_posts() ) : $the_query->the_post(); $more = 0; ?>
          <div class="newscontentbox">
            <h4 class="indexintro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <div class="excerpt"><span>…</span></div>
          </div>
          <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div class="col">
        <?php
          $the_query = new WP_Query( 'posts_per_page=1&offset=2' );
          global $more;
          while ( $the_query->have_posts() ) : $the_query->the_post(); $more = 0; ?>
          <div class="newscontentbox">
            <h4 class="indexintro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <div class="excerpt"><span>…</span></div>
          </div>
          <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="col spantwo">
      <?php dynamic_sidebar('frontpagesidebar') ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>