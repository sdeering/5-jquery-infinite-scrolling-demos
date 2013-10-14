<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Infinite Scroll Demo 4 - jQuery4u</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

  <style type="text/css" media="screen">
    * { margin: auto; }
    body { background: #cee; font-family: Helvetica, Arial, Verdana, 'Lucida Grande', sans-serif; }
    h1 { text-align: center; margin:20px; }
    ul#list { width: 50px; height: 200px; overflow-y: scroll; }
    ul#images { text-align: center; list-style: none; }
    #footer { margin-top: 20px;}
  </style>

  <script type="text/javascript" src="js/jquery.min.js"></script>

  <script type="text/javascript" src="js/jquery.endless-scroll.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(function() {
      $('ul#list').endlessScroll({
        fireOnce: false,
        insertAfter: "ul#list div:last",
        data: function(i) {
          return '<li>' + i + '</li>'
        }
      });
    });
  </script>
</head>

<body>

<div style="display:inline-block;width:100%;padding:10px;background-color:#FFFFFF">
<a href="http://www.jquery4u.com/tutorials/jquery-infinite-scrolling-demos/">< Back to tutorial page</a>
</div>

  <h1>Infinite Scroll Demo 4</h1>

  <ul id="list">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li>10</li>
    <li>11</li>
    <li>12</li>
    <li>13</li>
    <li>14</li>
    <li>15</li>
    <li>16</li>
    <li>17</li>
    <li>18</li>
    <li>19</li>
    <li>20</li>
  </ul>


<div id="footer" style="display:inline-block;width:100%;padding:10px;background-color:#FFFFFF">
<p>Copyright <a target="_blank" href="http://www.jquery4u.com">jQuery4u.com</a> 2011</p>
</div>


</body>

</html>