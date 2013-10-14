<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Infinite Scroll Demo 3 - jQuery4u</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

  <style type="text/css" media="screen">
    * { margin: auto; }
    body { background: #cee; font-family: Helvetica, Arial, Verdana, 'Lucida Grande', sans-serif; }
    h1 { text-align: center; margin:20px; }
    ul#list { width: 50px; height: 200px; overflow-y: scroll; }
    ul#images { text-align: center; list-style: none; }
  </style>

  <script type="text/javascript" src="js/jquery.min.js"></script>


  <script type="text/javascript" src="js/jquery.endless-scroll.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(function() {
      $(document).endlessScroll({
        bottomPixels: 500,
        fireDelay: 10,
        callback: function(i) {
          var last_img = $("ul#images li:last");
          last_img.after(last_img.prev().prev().prev().prev().prev().prev().clone());
        }
      });
    });
  </script>

</head>

<body>

<div style="display:inline-block;width:100%;padding:10px;background-color:#FFFFFF">
<a href="http://www.jquery4u.com/tutorials/jquery-infinite-scrolling-demos/">< Back to tutorial page</a>
</div>

  <h1>Infinite Scroll Demo 3</h1>


  <ul id="images">
    <li><img src="img/grass-blades.jpg" width="580" height="360" alt="Grass Blades" /></li>
    <li><img src="img/stones.jpg" width="580" height="360" alt="Stones" /></li>
    <li><img src="img/sea-mist.jpg" width="580" height="360" alt="Sea Mist" /></li>
    <li><img src="img/pier.jpg" width="580" height="360" alt="Pier" /></li>
    <li><img src="img/lotus.jpg" width="580" height="360" alt="Lotus" /></li>
    <li><img src="img/mojave.jpg" width="580" height="360" alt="Mojave" /></li>
    <li><img src="img/lightning.jpg" width="580" height="360" alt="Lightning" /></li>
  </ul>


<div id="footer" style="display:inline-block;width:100%;padding:10px;background-color:#FFFFFF">
<p>Copyright <a target="_blank" href="http://www.jquery4u.com">jQuery4u.com</a> 2011</p>
</div>

</body>

</html>