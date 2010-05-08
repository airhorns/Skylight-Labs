<?php get_header(); ?>
<div id="page-heading">
    <?php /* If this is a category archive */ if (is_category()) { ?>
	<h2><?php single_cat_title(); ?></h2>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	<h2>Tag: <?php single_tag_title(); ?></h2>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h2>Archive for <?php the_time('F, Y'); ?></h2>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h2>Archive for <?php the_time('Y'); ?></h2>
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h2>Author Archive</h2>
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h2>Blog Archives</h2>
	<?php } ?>
    <div class="clear"></div>
</div>
<div id="content" class="golden">
	<div class="maincontent layout">

<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php while (have_posts()) : the_post(); ?>

	<div class="blog-post">
    	<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
    	<p class="meta"><strong>By:</strong> <?php the_author_posts_link(); ?> | <strong>on:</strong> <?php the_time('M.d, Y') ?> | <strong>in:</strong> <?php the_category(', '); ?></p>
		<div class="postcontent"><?php the_content('(continue reading...)'); ?></div>
		<span class="comments"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span> / 
	 	<span class="more"><a href="<?php the_permalink() ?>">more...</a></span>
	<br/>
	<span class="tags"><?php the_tags('<em>:</em>', ', ', ''); ?></span>	
    </div>

<?php endwhile; ?>

<?php else : ?>

	<div class="blog-post">
    	<h3><a href="<?php the_permalink() ?>">Not Found</a></h3>
		<div class="postcontent">Sorry, but you are looking for something that isn't here.</div>
    </div>

<?php endif; ?>
</div>


<div id="nextprevious">
<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<div class="cleared"></div>
</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>