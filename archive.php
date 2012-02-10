<?php get_header(); ?>
    <div id="main" class="container">
      <div class="row">
        <div id="blog" class="span9">
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post();$post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                 <?php if (is_category()): ?>
                    <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
                  <?php elseif(is_tag()): ?>
                    <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                  <?php elseif (is_day()): ?>
                    <h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
                  <?php elseif (is_month()):  ?>
                    <h2>Archive for <?php the_time('F, Y'); ?>:</h2>
                  <?php elseif (is_year()): ?>
                    <h2>Archive for <?php the_time('Y'); ?>:</h2>
                  <?php elseif (is_author()): ?>
                    <h2>Author Archive</h2>
                  <?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>
                    <h2>Blog Archives</h2>
                  <?php endif; ?>
              <div class="post">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="entry">
                <?php 
                  the_post_thumbnail();
                  the_excerpt();
                ?>
                <p class="postmetadata">
                  <?php _e('Filed under&#58;'); ?>
                  <?php the_category(' | '); ?>
                  <?php _e('by'); ?>
                  <?php the_author(); ?><br />
                  <?php 
                    comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;');
                    edit_post_link('Edit Post', ' &#124; ', '');
                  ?>
                </p>
              </div>
              <div class="comments-template">
              <?php comments_template(); ?>
              </div>
            </div>
          <?php endwhile; ?>
          <div class="navigation">
          <?php posts_nav_link(); ?>
          </div>          
          <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div> <!-- /container -->
<?php get_footer(); ?>


