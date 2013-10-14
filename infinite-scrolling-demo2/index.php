
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title>Infinite Scroll Demo 2 - jQuery4u</title>

	<script type="text/javascript" src="jquery-1.4.4.js"></script>


	<script type="text/javascript">
		$(window).scroll(function(){
		    if($(window).scrollTop() == $(document).height() - $(window).height()){
		    	$('div#loadmoreajaxloader').show();
				$.ajax({
					url: "loadmore.php",
					success: function(html){
						if(html){
							$("#postswrapper").append(html);
							$('div#loadmoreajaxloader').hide();
						}else{
							$('div#loadmoreajaxloader').html('<center>No more posts to show.</center>');
						}
					}
				});
		    }
		});
	</script>

	<style>
		body{ margin:0px; }

		#wrapper{
			width:600px;
			margin:auto;
		}
		.spacer{
			clear:both;
			height:5px;
		}
		.txtarea{
			font-size:18px;
			height:50px;
			width:100%;
		}
		#postswrapper{
			border-bottom:1px dotted #555555;
		}
		.item{
			border-top:1px dotted #555555;
			padding:10px 5px;
			font-size: 16px;
		}
		.item:hover{
			background:#EFEFEF;
		}
		#newpostlink{
			display:block;text-align:center;border:2px solid #414141;background:#7D7D7D;color:#fff; margin: 0 0 10px;padding:5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px;font-size:20px;text-decoration:none;
		}
	</style>
</head>
<body>

<div style="display:inline-block;width:100%;padding:10px;background-color:#FFFFFF">
<a href="http://www.jquery4u.com/tutorials/jquery-infinite-scrolling-demos/">< Back to tutorial page</a>
</div>

	<div id="wrapper">
		<div id="postswrapper">

		<?php include('loadmore.php'); ?>

		</div>

		<div id="loadmoreajaxloader" style="display:none;"><center><img src="ajax-loader.gif" /></center></div>

	</div>

<div id="footer" style="display:inline-block;width:100%;padding:10px;background-color:#FFFFFF">
<p>Copyright <a target="_blank" href="http://www.jquery4u.com">jQuery4u.com</a> 2011</p>
</div>

</body>
</html>