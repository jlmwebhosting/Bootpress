<?php get_header(); ?>
    <div id="main" class="container">
      <div class="row">
        <div id="blog" class="span9">
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="post">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="entry">
                <?php 
                  the_post_thumbnail();
                  the_content();
                ?>
                <p class="postmetadata">
                  <?php _e('by'); ?>
                  <?php the_author(); ?><br />
                  <p><?php 
                    edit_post_link('Edit Page', '', '');
                  ?></p>
                </p>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div> <!-- /container -->

<?php get_footer(); ?>


