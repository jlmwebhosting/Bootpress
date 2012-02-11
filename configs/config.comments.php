<?php

  $req = get_option( 'require_name_email' );
  $required_text = sprintf( ' ' . __('Required fields are marked %s'), '<span class="required">*</span>' );
  
  // Default values for comment form field.
  $bootpress_comment_form_args = array(
    'title_reply' => __('Leave a reply:'),

    'title_reply_to' => __('Leave a reply to:'),

    'cancel_reply_link'    => __( 'Cancel reply' ),

    'comment_field' => '<label>Comment<span class="required">*</span></label><textarea class="span6" /></textarea>',

    'label_submit'  => __( 'Post comment' ),

    'comment_notes_before' => '<p class="comment-notes">' . __( 'Your email address will not be published.' )
      . '<br />'. ( $req ? $required_text : '' ) . '</p>',
    'comment_notes_after' => '<p class="form-allowed-tags">' 
      . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:<ul class="allowed-tags-list"> %s</ul>' ),  bootstrap_comment_get_allowed_tags() ) . '</p>'
  );

  // Customized comment form fields.
  $bootpress_comment_form_fields = array(
    'author'  =>  '<label for="author">' . __('Name') . ': <span class="required">*</span></label>' .
                    '<input type="text" class="span6" id="author" name="author" type="text" value="' . 
                    esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . '/>',

    'email' =>  '<label for="email">' . __('Email Address') . ': <span class="required">*</span></label>' .
                  '<input type="text" class="span6" id="email" name="email" type="text" value="' . 
                  esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . '/>',

    'url' =>  '<label for="url">' . __('Website') . ': </label>' .
                '<input type="text" class="span6" id="url" name="url" type="text" value="' . 
                esc_attr( $commenter['comment_author_url'] ) . '" />'
                
  );
