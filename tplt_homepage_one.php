<?php
/**
 * Template Name: Homepage One
 *
 * A custom page for the home page.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Bootpress
 * @since Bootpress 0.1
 */
get_header(); ?>

<div id="main" class="homepage-one content-container container">
  <div class="main-content hero-unit">
  </div>
  <div class="row">
    <div class="span4 well">
      <ul>
      <?php dynamic_sidebar(2); ?>
      </ul>
    </div>
    <div id="latest-updates" class="span7 well">
      <ul>
      <?php dynamic_sidebar(3); ?>
      </ul>
    </div>
  </div>
</div>



<?php get_footer(); ?>