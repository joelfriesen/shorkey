<?php get_header(); ?>
<script>
  $(function () {
    $(".rslides").responsiveSlides({
      auto: true,
      pager: false,
      nav: true,
      speed: 500,
      timeout: 8000,    
      maxwidth: 927,
      namespace: "centered-btns"
    });    
  });
</script>
<div class="slides mainbg">
  <div class="container">
    <ul class="rslides">
      <li>
        <p><strong>Len Shorkey</strong>, serving Victoria BC for over 5 years</p>
        <img src="<?php bloginfo('template_directory'); ?>/images/slideshow/1.jpg" alt="Johnson St. Bridge" />
      </li>
      <li>
        <p>Specializing in <strong>commercial</strong>, <strong>construction</strong> and <strong>private lending</strong></p>
        <img src="<?php bloginfo('template_directory'); ?>/images/slideshow/2.jpg" alt="ocean shore" />
      </li>
      <li>
        <p>Allow me to help you <strong>invest in your future</strong></p>
        <img src="<?php bloginfo('template_directory'); ?>/images/slideshow/3.jpg" alt="Jannion Building" />
      </li>
      <li>
        <p>Raised in <strong>Victoria BC</strong></p>
        <img src="<?php bloginfo('template_directory'); ?>/images/slideshow/4.jpg" alt="Victoria Condos" />
      </li>
      <li>
        <p><strong>Contact me</strong> to start today!</p>
        <img src="<?php bloginfo('template_directory'); ?>/images/slideshow/5.jpg" alt="Empress Hotel" />
      </li>
    </ul>
  </div>
</div>
<div class="fivecta mainbg">
  <div class="container fivecol">
    <ul>
      <li class="col ">        
        <p>Residential Mortgages</p>
        <img src="<?php bloginfo('template_directory'); ?>/images/cta1.jpg" alt="XXXXXX XXXX XXXXXXXX" />
      </li>
      <li class="col ">        
        <p>Equity Mortgages</p>
        <img src="<?php bloginfo('template_directory'); ?>/images/cta2.jpg" alt="XXXXXX XXXX XXXXXXXX" />
      </li>
      <li class="col ">        
        <p>Commercial Mortgages</p>
        <img src="<?php bloginfo('template_directory'); ?>/images/cta3.jpg" alt="XXXXXX XXXX XXXXXXXX" />
      </li>
      <li class="col ">        
        <p>Construction and Development</p>
        <img src="<?php bloginfo('template_directory'); ?>/images/cta4.jpg" alt="XXXXXX XXXX XXXXXXXX" />
      </li>
      <li class="col ">        
        <p>Private Mortgages</p>
        <img src="<?php bloginfo('template_directory'); ?>/images/cta5.jpg" alt="XXXXXX XXXX XXXXXXXX" />
      </li>
    </ul>
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