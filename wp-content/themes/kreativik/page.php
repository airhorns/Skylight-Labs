<?php get_header(); ?>
<div id="page-heading">
    <h2><?php the_title(); ?></h2>
    <ul id="sub">
		<?php wp_list_pages('child_of='.$post->ID.'&show_count=0&title_li='); ?>
	</ul>
	<div class="clear"></div>
</div>

<div id="content" class="golden">
	<div class="maincontent layout">

<?php 
if (have_posts()) : 
	while (have_posts()) { the_post();
		the_content('(continue reading...)');
	} 
else : ?>
<div class="blog-post">
  <h3><a href="<?php the_permalink() ?>">Not Found</a></h3>
  <div class="postcontent"><p>Sorry, but you are looking for something that isn't here. You can search again by using <a href="#searchform">this form</a>...</p></div>
</div>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>