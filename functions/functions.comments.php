<?php

function bootpress_comment_form_before() {
  echo '<div class="row"><div class="span6 well">';
}

function bootpress_comment_form_after() {
  echo '</div></div>';
}

function bootstrap_comment_form_fields( $fields = array())  {

  // Get the coment field modifications
  global $bootpress_comment_form_fields;
  
  // Customize the fields of our form
  foreach($bootpress_comment_form_fields as $key => $val)
  {
    $fields[$key] = $val;
  }
  
  return $fields;
}

function bootstrap_comment_get_allowed_tags()
{
  preg_match_all("/&lt;.*?&gt;/", allowed_tags(), $allowed_tags_array, 0, 0);

  // Encapsulate all the allowed HTML tags in a code tag within an li tag
  return implode("", array_map(function($value){return '<li><code>' . $value . '</code></li>'; },  $allowed_tags_array[0]));
  
}

function bootstrap_comment_form_buffer_callback($buffer = "")
{
  // Give the form and the form's submit button a class
  $buffer = str_replace('id="commentform"', 'id="commentform" class="vertical-form"', $buffer);
  $buffer = str_replace('id="submit"', 'id="submit" class="btn btn-primary"', $buffer);

  return $buffer;
}

add_filter('comment_form_before', 'bootpress_comment_form_before');
add_filter('comment_form_after', 'bootpress_comment_form_after');
add_filter('comment_form_default_fields','bootstrap_comment_form_fields');