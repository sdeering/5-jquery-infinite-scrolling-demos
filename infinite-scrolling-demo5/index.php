<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Infinite Scroll Demo 5 - jQuery4u</title>

<!--[if IE]>
   <link rel="stylesheet" href="includes/siteIE.css" type="text/css" />
<![endif]-->

<style type="text/css">
.regularitem {
    list-style: none outside none;
    margin: 10px;
    padding: 10px;
    width: 960px;

background-image: linear-gradient(left top, rgb(245,37,172) 17%, rgb(152,71,222) 59%);
background-image: -o-linear-gradient(left top, rgb(245,37,172) 17%, rgb(152,71,222) 59%);
background-image: -moz-linear-gradient(left top, rgb(245,37,172) 17%, rgb(152,71,222) 59%);
background-image: -webkit-linear-gradient(left top, rgb(245,37,172) 17%, rgb(152,71,222) 59%);
background-image: -ms-linear-gradient(left top, rgb(245,37,172) 17%, rgb(152,71,222) 59%);

background-image: -webkit-gradient(
  linear,
  left top,
  right bottom,
  color-stop(0.17, rgb(245,37,172)),
  color-stop(0.59, rgb(152,71,222))
);

-webkit-border-radius: 10px;
-moz-border-radius: 15px;
border-radius: 15px;

}
h4, h5 {
      margin: 0;
    padding: 0;
}
h4 {
  padding: 5px 0;
}
h4 a {
    color: white;
    font-size: 25px;
    text-decoration: none;
}
</style>

<script type="text/javascript" src="jquery1.6.2.js"></script>


<script type="text/javascript">

$(document).ready(function(){

	function lastAddedLiveFunc()
	{
		$('div#lastPostsLoader').html('<img src="bigLoader.gif">');

		$.get("loadmore.php", function(data){
			if (data != "") {
				//console.log('add data..');
				$(".items").append(data);
			}
			$('div#lastPostsLoader').empty();
		});
	};

  //lastAddedLiveFunc();
  $(window).scroll(function(){

      var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
      var  scrolltrigger = 0.95;

      if  ((wintop/(docheight-winheight)) > scrolltrigger) {
         //console.log('scroll bottom');
         lastAddedLiveFunc();
      }
  });
});
</script>

</head>

<body>

<div style="display:inline-block;width:95%;padding:10px;background-color:#FFFFFF">
<a href="http://www.jquery4u.com/tutorials/jquery-infinite-scrolling-demos/">< Back to tutorial page</a>
</div>


<h1>Infinite Scroll Demo 5</h1>

<ul class="items">
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/FyVLbPPyHaY/">10 Cool jQuery Animation Tutorials</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Thu, 24 Nov 2011 21:00:39 +0000</h5>
<div class="itemcontent" name="decodeable">Here’s our collection of what we think are the 10 best jQuery Animation Tutorials you may have NOT seen before. Some of these tutorials may seem very simple but the results are fantastic and can form the base for something truly awesome. Enjoy. Related Posts: jQuery Animate Function Example Animated Header Background Demo 15 jQuery [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/FyVLbPPyHaY" height="1" width="1"></div>
</li>
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/U7hfnesZ3jI/">10 jQuery, Mootools, Prototype Lightbox Scripts</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Wed, 23 Nov 2011 21:00:16 +0000</h5>
<div class="itemcontent" name="decodeable">In today’s post we have included lightbox scripts/plugins from several JavaScript libraries: jQuery, MooTools, Prototype. These stylish lightbox scripts/plugins can display the pop-up block (modal windows, overlays) of single images, web image galleries, videos and other media and content formats on your websites. Enjoy. Related Posts: jQuery lightBox vs ColorBox vs FancyBox vs Thickbox 10 [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/U7hfnesZ3jI" height="1" width="1"></div>
</li>
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/PMXopmHRH4Y/">10 jQuery Language Translator Plugins</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Tue, 22 Nov 2011 21:00:02 +0000</h5>
<div class="itemcontent" name="decodeable">Just like Google Translate, jQuery plugins can be used to the same effect when it comes to having your own language translator integrated in your website. Check out these cool jQuery Translator plugins. Enjoy! Related Posts: jQuery on Screen Keyboard Plugin 1. jQuery Translator Plug-in With the jQuery translator plug-in, web pages are easily translated [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/PMXopmHRH4Y" height="1" width="1"></div>
</li>
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/KoSPZDNa94o/">jQuery Smooth Page Links – $.smoothAnchor()</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Tue, 22 Nov 2011 13:10:21 +0000</h5>
<div class="itemcontent" name="decodeable">The jQuery smoothAnchor Function provides you with a lightweight script that can make your in-page anchor links smooth scrolling. There are a few plugins out there which do the same thing but this is my lightweight version and I know it works properly in all the main browsers. So if you after a quick code [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/KoSPZDNa94o" height="1" width="1"></div>
</li>
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/sK2bEFZZzR4/">10 Random HTML5 Web Tools &amp; Resources</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Mon, 21 Nov 2011 21:00:27 +0000</h5>
<div class="itemcontent" name="decodeable">We all know that HTML5 is a new web technology led by Apple and it will be the next big thing! In the not to far future, HTML5 will be a powerful weapon that all web developers and web designers can use when creating new innovative web based apps. In todays post, we have called [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/sK2bEFZZzR4" height="1" width="1"></div>
</li>
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/JQPm0zziq_w/">10 Helpful jQuery Plugins for Design and Development</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Sun, 20 Nov 2011 21:00:22 +0000</h5>
<div class="itemcontent" name="decodeable">Today while we were searching for a decent plugins to share on the blog we stumbled across some jQuery plugins which we think might help you one day with your web development projects. Enjoy. Related Posts: 20 Helpful jQuery Plugins 1. LoadMask A plugin that can mask DOM elements while their content is loading or [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/JQPm0zziq_w" height="1" width="1"></div>
</li>
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/kxQP2VI613k/">10 Best jQuery Plugins for WordPress</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Fri, 18 Nov 2011 00:45:37 +0000</h5>
<div class="itemcontent" name="decodeable">More and more Developers and Designers and have been using WordPress these days. Combining WordPress CMS with the power of jQuery will give us infinite possibilities in terms of designing &amp; producing feature rich webpages. Today we are giving you our collection of what we think 10 best WordPress plugins that use jQuery. Enjoy! Related [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/kxQP2VI613k" height="1" width="1"></div>
</li>
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/3746sbKqP5A/">jQuery lightBox vs ColorBox vs FancyBox vs Thickbox – What are the key differences?</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Wed, 16 Nov 2011 21:00:05 +0000</h5>
<div class="itemcontent" name="decodeable">It seems everyone is asking this question lately! What do these lightbox/thickbox/fancybox/colorbox jQuery plugins have in common and what are their differences? I thought I’d go and do my next blog assignment and here’s the result. I have also included the download link for WordPress options since all of them work with WordPress too. What [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/3746sbKqP5A" height="1" width="1"></div>
</li>
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/hm20xHQ5r7E/">10 jQuery Cool Menu Effect Plugins</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Wed, 16 Nov 2011 03:00:31 +0000</h5>
<div class="itemcontent" name="decodeable">We’ve posted tons of jQuery Navigation Menu plugins for your websites and blogs and now we are giving you another awesome collection of 10 jQuery Cool Menu Effect Plugins. Enjoy! Related Posts: 10 Snazzy jQuery Navigations 15 Great jQuery Navigation Menus 1. Right Click Menu Very easy to use, compact plugin that creates a right-click [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/hm20xHQ5r7E" height="1" width="1"></div>
</li>
<li xmlns:dc="http://purl.org/dc/elements/1.1/" class="regularitem">
<h4 class="itemtitle"><a href="http://feedproxy.google.com/~r/Jquery4u/~3/gspjEE3Zus4/">Beautify Your jQuery Code Using beautify.js</a></h4>
<h5 class="itemposttime">
<span>Posted: </span>Mon, 14 Nov 2011 21:00:57 +0000</h5>
<div class="itemcontent" name="decodeable">It can be very time consuming to make your jQuery code neat and tidy. Fortunately, there are online tools and heaps of plugins that can automate this task for us. I recently had the need to generate JavaScript/jQuery code dynamically and thus it comes through messy and unreadable. So I decided to use beautify.js to [...]<img src="http://feeds.feedburner.com/~r/Jquery4u/~4/gspjEE3Zus4" height="1" width="1"></div>
</li>
</ul>

<div id="lastPostsLoader"></div>


<div id="footer" style="display:inline-block;width:100%;padding:10px;background-color:#FFFFFF">
<p>Copyright <a target="_blank" href="http://www.jquery4u.com">jQuery4u.com</a> 2011</p>
</div>


</body>

</html>

