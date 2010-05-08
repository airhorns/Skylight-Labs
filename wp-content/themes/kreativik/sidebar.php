<div id="sidebar">
    <div class="sidebar-element">
        <h4>Our Work</h4>
        <img src="images/add1.jpg" alt="portfolio1" class="add" />
        <img src="images/add2.jpg" alt="portfolio2" class="add"/>
        <img src="images/add3.jpg" alt="portfolio3" class="add"/>
        <img src="images/add4.jpg" alt="portfolio4" class="add"/>
        <div class="clear"></div>
    </div>
     <div class="sidebar-element">
        <h4>Latest posts in blog</h4>
        <ul class="sidebar-ul">
		  <?php wp_get_archives('type=postbypost&limit=10'); ?>
        </ul>
    </div>
    <div class="sidebar-element">
        <h4>Who are we?</h4>
        <p>Skylight Labs is a small web-everything business specializing in rapidly developed custom applications and superb service formed in 2009...</p> 
    </div>

</div>
<div class="clear"></div>