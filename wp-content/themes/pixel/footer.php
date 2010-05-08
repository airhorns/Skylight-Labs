<div id="morefoot">

<div class="col1">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_left') ) : ?>
<h3>Looking for something?</h3>
<p>Use the form below to search the site:</p>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<p>Still not finding what you're looking for? Drop a comment on a post or contact us so we can take care of it!</p>
<?php endif; ?>
</div>

<div class="col2">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_middle') ) : ?>
<h3>Visit our friends!</h3><p>A few highly recommended friends...</p><ul><?php wp_list_bookmarks('title_li=&categorize=0'); ?></ul>
<?php endif; ?>
</div>

<div class="col3">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_right') ) : ?>
<h3>Archives</h3><p>All entries, chronologically...</p><ul><?php wp_get_archives('type=monthly&limit=12'); ?> </ul>
<?php endif; ?>
</div>

<div class="cleared"></div>
</div><!-- Closes morefoot -->



<div id="footer">
<div id="footerleft">
<p>Powered by <a href="http://www.wordpress.org/">WordPress</a> and <a href="http://samk.ca/freebies/" title="Pixel">pixel</a>. Sweet icons by <a href="http://famfamfam.com/">famfamfam</a>. <a href="#main">Back to top &uarr;</a></p>
<!-- If you want to remove the credits, please consider making a donation. Thanks! -->
</div>

<div id="footerright">
<a href="http://wordpress.org" title="WordPress platform" ><img src="<?php bloginfo('template_directory'); ?>/images/wpfooter-trans.png" alt="WordPress" width="34" height="34" /></a>
</div>

<div class="cleared"></div>
<?php wp_footer(); ?>
</div><!-- Closes footer -->

</div><!-- Closes wrapper -->

</body>
</html>