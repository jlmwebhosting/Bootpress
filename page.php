<?php get_header(); ?>
    <div id="main" class="common-two-column content-container container row">
      <div class="main-content span8">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
          <div class="page page-<?php the_ID(); ?>">
            <h2 class="page-title underlined"><?php the_title(); ?></h2>
            <div class="entry">
              <?php 
                the_post_thumbnail();
                the_excerpt();
              ?>
              <!-- <p class="postmetadata">
                <?php _e('Filed under&#58;'); ?>
                <?php the_category(' | '); ?>
                <?php _e('by'); ?>
                <?php the_author(); ?><br />
                <?php 
                  comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;');
                  edit_post_link('Edit Post', ' &#124; ', '');
                ?>
              </p> -->
            </div>
          </div>
          &nbsp;
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="span3 sidebar-page sidebar">
      <?php get_sidebar(); ?>
      </div>
    </div>
<?php get_footer(); // include the footer ?>



