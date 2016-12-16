<?php
/**
 * The sidebars containing the main widget area.
 *
 */
?>

    <div id="left">
<div><a href="http://www.allsaintsbelvedere.com/">Home</a></div>
<hr />
<?php
$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order',
	'exclude' => '33'
); 
$pages = get_pages($args); 

foreach ($pages as $page) {
	$nav_item  = '<div><a href="' . $page->guid . '">';
	$nav_item .= $page->post_title;
	$nav_item .= '</a></div><hr />';
	echo $nav_item;
}
?>
	<div><a href="http://www.allsaintsbelvedere.com/wp-login.php">Login</a></div>
    </div>
    
    
    
    <div id="right">
<?php echo do_shortcode( '[google-calendar-events]' ); ?>

<p><img src="http://www.allsaintsbelvedere.com/wp-content/uploads/2013/04/20130413-6668.jpg" style="width: 100%;margin:0;" /></p>

    <p>Vicar: The Reverend Jane Edwards<br /><a href="mailto:vicar@allsaintsbelvedere.com">vicar@allsaintsbelvedere.com</a><br /><a href="tel:+441322446050">01322 446050</a></p>

<a href="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=All+Saints+Church+Belvedere&aq=&sll=53.800651,-4.064941&sspn=6.919281,17.116699&vpsrc=0&ie=UTF8&hq=&hnear=Belvedere+DA17+5JE,+United+Kingdom&ll=51.483842,0.147157&spn=0.007122,0.016716&t=m&z=16&iwloc=A&cid=10880721368802148051"><img border="0" src="//maps.googleapis.com/maps/api/staticmap?center=All+Saints+Church+Belvedere&amp;zoom=15&amp;size=200x200&amp;maptype=roadmap&amp;markers=color:white%7Clabel:A%7C51.483842,0.148058&amp;sensor=false" alt="All Saints' Belvedere">
</a>


    <script src="http://widgets.twimg.com/j/2/widget.js"></script><script>new TWTR.Widget({  version: 2,  type: 'profile',  rpp: 30,  interval: 5000,  width: '100%',  height: 500,  theme: {    shell: {      background: '#FFFFFF',      color: '#000000'    },    tweets: {      background: '#FFFFFF',      color: '#000000'  ,      links: 'rgb(188, 171, 211)'  }  },  features: {    scrollbar: false,    loop: true,    live: true,    hashtags: true,    timestamp: true,    avatars: false,    behavior: 'all'  }}).render().setUser('c_of_e').start();</script>
    </div>