<div class="span7">
  <ul class="comments">
  <?php wp_list_comments(); ?>
  </ul>
  <?php
  // $bootpress_comment_form_args needs to be called global so we have access to it.
  global $bootpress_comment_form_args;

  // Cause wordpress won't let us add classes to certain elements
  // we will scrape the output and do some string replaces.
  ob_start("bootstrap_comment_form_buffer_callback");
  
  comment_form($bootpress_comment_form_args);
  
  // Clean the buffer and stop bufferign
  ob_end_flush();
  ?>
</div>