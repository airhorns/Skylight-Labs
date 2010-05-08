<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name'=>'sidebar_full',
        'before_widget' => '<li id="%1$s" class="sidebaritem %2$s"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	'name'=>'sidebar_left',
        'before_widget' => '<li id="%1$s" class="sidebaritem %2$s"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	'name'=>'sidebar_right',
        'before_widget' => '<li id="%1$s" class="sidebaritem %2$s"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	'name'=>'footer_left',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
	'name'=>'footer_middle',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
	'name'=>'footer_right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


add_action('admin_menu', 'add_welcome_interface');

function add_welcome_interface() {
  add_theme_page('welcome', 'Theme Options', '8', 'functions', 'editoptions');
  }

function editoptions() {
  ?>
  <div class='wrap'>
  <h2>Theme Options</h2>
  <form method="post" action="options.php">
  <?php wp_nonce_field('update-options') ?>
  <p><strong>Greeting Heading:</strong></p>
  <p><input type="text" name="greeting" value="<?php echo get_option('greeting'); ?>" /></p>
  <p><strong>Welcome Message:</strong></p>
  <p><textarea name="welcomemessage" cols="100%" rows="10"><?php echo get_option('welcomemessage'); ?></textarea></p>
  <p><strong>Please enter the name of your FeedBurner feed below: </strong>(What's the name of your feed? Well, for instance, in the following - http://feeds.feedburner.com/NAME - NAME would be your feed :))</p>
  <p><input type="text" name="feedname" value="<?php echo get_option('feedname'); ?>" /></p>
  <p><input type="submit" name="Submit" value="Update Options" /></p>
  <input type="hidden" name="action" value="update" />
  <input type="hidden" name="page_options" value="feedname,greeting,welcomemessage" />
  </form>
  </div>
  <?php
  }


function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
     <div class="comment" id="comment-<?php comment_ID(); ?>">
			<a class="gravatar">
			<?php echo get_avatar($comment,$size='120'); ?></a>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
			<p class="comment-date">
				<a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> on <?php comment_time() ?></a> 
				<small><?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></small>
			</p>
			<p><strong><?php comment_author()?></strong> said:</p> 
				
			<?php comment_text() ?>
			<div class="clear"></div>

      		<div class="reply">
         		<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      		</div>
<?php
        }



function mytheme_ping($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
			<div class="commentbody">
			<cite><?php comment_author_link() ?></cite> 
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
			<br />
			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> on <?php comment_time() ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></small>

			<?php comment_text() ?>
			</div>
     </div>
<?php
        }



?>