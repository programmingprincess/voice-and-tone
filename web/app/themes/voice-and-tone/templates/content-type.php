<?php
/**
 *  Template Name: Content Type
 */
get_header(); ?>

<?php get_sidebar(); ?>

<div class = "content container">

  <div class = "topbar">
    <h3><?php wp_title("", true) ?>
    <!--<div class = "arrows" id = "next-arrow"> ></div>
    <div class = "arrows" id = "prev-arrow"> <</div> --> </h3>
  </div>

  <div class = "row">
    <div class = "col-md-8 user-chatbox">
      <h5 class = "title">User</h5>
      <h2>
        <?php the_field( "user-chatbox" ); ?>
      </h2>
    </div>
    <div class = "col-md-4 user-feelings">
      <h5 class = "title">User's Feelings</h5>
      <h4>
        <?php the_field( "user-feelings" ); ?>
      </h4>
    </div>
  </div>
  <div class = "row">
    <div class = "col-md-7 tips">
      <h5 class = "title">Tips</h5>
      <div>
        <?php the_field( "tips" ); ?>
      </div>
    </div>
    <div class = "col-md-5 content-chatbox">
      <h5 class = "title"><?php echo 'Mailchimp'?></h5>
      <h2>
        <?php the_field( "content-chatbox" ); ?>
      </h2>
    </div>
  </div>
</div>
<?php get_footer(); ?>
