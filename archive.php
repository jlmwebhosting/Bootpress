<?php get_header(); ?>
    <div id="main" class="common-two-column content-container container row">
      <div class="main-content span8">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
          <div class="post post-<?php the_ID(); ?>">
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="post-author"><?php _e('by'); ?> <?php the_author_meta('first_name'); echo " "; the_author_meta('last_name'); ; ?></span></h3>
            <div class="post-meta-data">
              <?php the_time('F jS, Y') ?>
            </div>
            <div class="entry">
              <?php 
                the_post_thumbnail();
                the_excerpt();
              ?>
            </div>
          </div>
          &nbsp;
        <?php endwhile; ?>
        <?php include_once('navigation_links.inc.php') ?>
        <?php else: ?>
          <p>There are currently no articles.</p>
        <?php endif; ?>
      </div>
      <div class="span3 sidebar-post sidebar">
      <?php get_sidebar(); ?>
      </div>
    </div>
<?php get_footer(); // include the footer ?>



