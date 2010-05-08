<?php get_header(); ?>
<div id="page-heading">
    <h2>Blog</h2>
    <div class="clear"></div>
</div>
<div id="content" class="golden">
	
<div class="maincontent layout">
<?php if (have_posts()) : ?>
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

<!-- <div id="nextprevious">
<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<div class="cleared"></div>
</div> -->

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>