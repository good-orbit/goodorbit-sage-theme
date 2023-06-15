{{--
    Template Name: About Page
  --}}
  

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@300;400;500;600;700&family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
  
<main>
  <section>
    <div id="particles-js" style="color:white;">
      <div class="copy-house-page">
        <div class="container mx-auto px-4">
          <a href="/">
            <img class="logo-standard-page fade-in" src="@asset('images/goodorbit-circle-logo.svg')" alt="Good Orbit Logo" />
          </a>
          <h2 class="mission">
            <?php the_field('h2'); ?>
          </h2>
          <h2 class="section-title">
            Recent Projects
          </h2>
          <div class="project-grid">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
              <?php
              // Check rows existexists.
              if( have_rows('projects') ):

                // Loop through rows.
                while( have_rows('projects') ) : the_row();?>
                    
                    <div class="project">
                      <h3 class="project-title">
                        <?php echo get_sub_field('title'); ?>
                      </h3>
                      <img src="<?php echo get_sub_field('cover_pic');?>">
                      <a class="view-project" href="<?php echo get_sub_field('link'); ?>" target="_blank">
                        view project
                      </a>
                      <?php if(have_rows('cat_tag')):
                      while(have_rows('cat_tag')) : the_row(); ?>
                        <?php echo get_sub_field('tag_name'); ?> 
                      <?php
                      // End loop.
                      endwhile;

                      // No value.
                      else :
                      // Do something...
                      endif;
                      ?>
                    </div><!-- end project--> 
                <?php
                // End loop.
                endwhile;

              // No value.
              else :
                // Do something...
              endif;
              ?>
            
            </div><!-- end col loop -->
          </div><!-- end grid wrap --> 
        </div><!-- end container --> 
      </div><!-- end copy house --> 
  </div><!-- end particle js --> 
  </section>
</main>
  
  <script src="assets/js/app.min.js"></script>
  <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>