<div id="welcome">


<?php
$mysitename = get_bloginfo('name');
$mysitefeed = get_bloginfo('rss2_url');

 if (get_option('greeting') || get_option('welcomemessage')) {
  if (get_option('greeting')) {
    echo "<h2>" . get_option('greeting') . "</h2>";
    }
  if (get_option('welcomemessage')) {
    echo "<p>" . get_option('welcomemessage') . "</p>";
    }
  } else {
  echo "<h2>Howdy. Welcome to $mysitename!</h2><p>Thanks for dropping by! Feel free to join the discussion by leaving comments, and stay updated by subscribing to the <a href='$mysitefeed'>RSS feed</a>. See ya around!</p>";
}
 
?>



<?php
$myfeedname = get_option('feedname');

 if (get_option('feedname')) {
  echo "

<p>You can also subscribe by email by filling the field below:</p>

<form action='http://feedburner.google.com/fb/a/mailverify' method='post' target='popupwindow' onsubmit=\"window.open('http://feedburner.google.com/fb/a/mailverify?uri=$myfeedname', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\">
<p>
<input type='text' name='email' id='feedbox' />
<input type='hidden' value='$myfeedname' name='uri'/>
<input type='hidden' name='loc' value='en_US'/>
<input type='submit' value='Subscribe' class='submitbutton' />
</p>
</form>


";
 }

 else {
  echo "";
 }
?>


</div><!-- Closes welcome -->