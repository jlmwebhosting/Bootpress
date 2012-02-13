      <div class="footer">
        <div class="container">
          <p><strong>Copyright 2011 <?php bloginfo('name'); ?> | All Rights Reserved.</strong></a></p>
          <p><a href="<?php bloginfo('rss2_url'); ?>">Latest Stories RSS</a> | <?php comments_rss_link('Comments Feed'); ?></p>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
    <script type="text/javascript">
      jQuery(document).ready(function(){
        if($('#wpadminbar').length > 0)
        {
          // Add the class in php later, but for now this works.
          $('#main-nav-bar').addClass('wp-admin-menu');
        }
      });
    </script>
  </body>
</html>
