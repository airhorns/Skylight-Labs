<?php get_header(); ?>

<div id="content" class="golden">
    <div class="maincontent layout">
	
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		<div class="blog-post-author-date">
    		<p><strong>By</strong>: <?php the_author_posts_link(); ?> | <strong>posted on:</strong> <?php the_time('M.d, Y') ?> | <strong>in:</strong> <?php the_category(', '); ?>.</p>
		</div>
		<div class="postcontent"><?php the_content(); ?></div>
		<div class="clear"></div>
		<span class="linkpages"><?php wp_link_pages(); ?></span>
		<span class="tags"><?php the_tags('<em>:</em>', ', ', ''); ?></span>
		<div class="clear"></div>
	<small><?php edit_post_link('Edit this entry?','',''); ?></small>
	
<div id="comments">
<!-- WP 2.7 and above -->
<?php comments_template('', true); ?>
</div> <!-- Closes Comment -->

<div id="extrastuff">
<span id="rssleft"><?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for this post (comments)')); ?></span>

<span id="trackright"><?php if ( pings_open() ) : ?> &#183; <a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Uniform Resource Identifier">URI</abbr>'); ?></a><?php endif; ?></span>
<div class="clear"></div>
</div>

<?php endwhile; ?>

<?php else : ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>">Not Found</a></h2>
  <div class="topContent"><p>Sorry, but you are looking for something that isn't here. You can search again by using <a href="#searchform">this form</a>...</p></div>
</div> <!-- Closes topPost -->

<?php endif; ?>

</div>


<?php get_sidebar(); ?>

</div>


<?php get_footer(); ?>