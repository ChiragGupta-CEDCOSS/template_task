<?php
/*
Template Name: Home Page template
*/

$blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => -1 ) );
get_header();
?>
<div class = "page-container">
<div class = "main-content">
<div class = "container pt-5">

<section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
              <?php if ( $blog_posts->have_posts() ) : ?>
                <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <?php if ( has_post_thumbnail() ) { 
                      the_post_thumbnail( get_the_ID(), 'full' );
                      } ?>
                    </div>
                    <div class="down-content">
                      <span><?php the_category(', '); ?></span>
                      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                      
                      <ul class="post-info">
                        <li><?php the_author();?></li>
                        <li> <?php  the_date();?></li>
                        <li><?php comments_number();?></li>
                        <span><?php the_tags(); ?></span>
                      </ul>
                      
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                <p class = "no-blog-posts">
                <?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
                </p>
                <?php endif; 
                wp_reset_postdata(); ?>
                
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.php">View All Posts</a>
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



</div>
<div class = "sidebar-content">
<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>