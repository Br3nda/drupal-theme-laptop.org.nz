<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml">
   <head profile="http://gmpg.org/xfn/11">
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
      <title> 
	<?php echo $head_title;?>
      </title>
   <meta name="copyright" content="" />
   <meta name="robots" content="index,follow" />
   <meta name="author" content=")" />
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="generator" content="" />
<?php echo $styles;?>
<?php echo $scripts;?>

<!--[if gte IE 6]> 
<link rel="stylesheet" type="text/css" href="/<?php echo $directory;?>/ie.css" media="screen, projection" /> 
<![endif]-->

<!--[if IE 7.0]>
<link rel="stylesheet" type="text/css" href="/<?php echo $directory;?>/ie7.css" media="screen, projection" />
<![endif]-->
<?php echo $head;?>

</head>
  
<body>
<div id="site">

<div id="logo">
   <div id="logoimage">
<h1><a href="<?php echo url('<front>');?>"><span class="color1">OLPC</span><span class="color2">NZ</span></a></h1>
   </div>
</div>

<?php echo theme('links', $primary_links, array('id' => 'menu')); ?>
<?php /*
<ul id="menu">
<li id="home"><a href="#">Home</a></li>
<li id="contact"><a href="#">Contact</a></li>
<li id="about"><a href="#">About</a></li>
<li id="help"><a href="#">Help</a></li>
</ul>
*/?>

<hr />


<div id="list">
<ol>
<li id="num1"><strong>Aotearoa</strong></li>
<li id="num2">OLPC <strong>Friends</strong></li>
<li id="num3">in <strong>Testing</strong></li>
</ol>
</div>


<div id="slogan">
<h2>
	<?php echo $slogan;?>
<?php //print $breadcrumb ?>
</h2>
</div>

<div id="backg">

<div id="button">
<h2><a href="http://laptop.org">learn more</a></h2>
</div>

<hr />

<?php echo theme('links', $secondary_links, array('id' => 'menu2')); ?>
<?php /*
<ul id="menu2">
<li id="info"><a href="#">info</a></li>
<li id="product"><a href="#">product</a></li>
<li id="service"><a href="#">service</a></li>
<li id="blog"><a href="#">blog</a></li>
</ul>
*/?>

        <?php if ($show_messages && $messages != ""): ?>
          <?php print $messages ?>
        <?php endif; ?>


<hr />


<div id="line1">
</div>

<div id="sidebar">


<?php echo $sidebar;?>
<?php /*

<h3>What's news</h3>

<p class="date1">2nd of August 2008</p>
  <p class="news1">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
    Nam diam purus, aliquam non, ultrices in, viverra nec, ipsum. 
    Mauris eu mi eget dolor tristique interdum. Pellentesque 
    elementum, tellus sit amet sodales dignissim, enim urna gravida 
    tellus, ut dignissim leo risus ut ligula. Maecenas tempor elit nec 
    enim. Cras dictum metus non turpis. Aenean gravida. Nunc et 
    odio non risus imperdiet nonummy.
  </p>

<p class="date2">1nd of August 2008</p>
   <p class="news2">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
    Nam diam purus, aliquam non, ultrices in, viverra nec, ipsum. 
    Mauris eu mi eget dolor tristique interdum. Pellentesque 
    elementum, tellus sit amet sodales dignissim,
  </p>

<p class="date3">1nd of July 2008</p>
  <p class="news3">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
    Nam diam purus, aliquam non, ultrices.
  </p>
*/
?>

</div>


<?php /*
<div id="old">
<a href="#">old news>></a>
</div>
*/?>

<hr />
<div id="contect">

<?php echo $tabs;?>
<?php echo $content;?>
<?php /*
<p class="contect1">
Lorem ipsum dolor sit amet, consectetuer. gravida tellus, ut dignissim leo risus ut ligula. urna gravida tellus, ut dignissim leo risus ut ligula.
ellus sit amet sodales dignissim, enim urna gravida. ipsum. Mauris eu mi eget dolor tristique interdum. ultrices in, viverra nec, ipsum. Mauris eu mi eget.
Nam diam purus, aliquam non, ultrices in, viverra.

</p>
*/?>
</div>


<?php /*
<div id="imagesmall">
<img src="/<?php echo $directory; ?>/image_small.png" alt="image small" />
</div>

<div id="imagebig">
<img src="/<?php echo $directory;?>/image_big.png" alt="image big" />
</div>

          
            <table border="1" cellpadding="0" cellspacing="0">
              <thead>
              	<tr>
              	<th>Legend</th>
                  <th>Legend</th>
                  <th>Legend</th>
              	</tr>

              </thead>
              
              <tbody>
              	<tr>

              		<td>text</td>
              		<td>text</td>
              		<td>text</td>
                </tr>
              	<tr>              
              		<td>text</td>
              		<td>text</td>
                        <td>text</td>
                </tr>
              	<tr>
              		<td>text</td>
              		<td>text</td>
              		<td>text</td>
                </tr>

              	<tr>
              		<td>text</td>
              		<td>text</td>
              		<td>text</td>
                </tr>
              </tbody>
            </table>
*/ ?>
<hr />

</div>

<div id="footer1">
<p class="footer">
<?php /*
designed: <a href="http://www.fakam.sk">fakam.sk</a> <br />sponsored: <a href="http://www.hrajsa.sk" title="online hry, plne hry, zadarmo">Free online games</a>, Thanks to <a href="http://www.help4diabetics.com" target="_blank">Diabetic Supplies</a>
*/?>
<?php echo $footer;?>
</p>
</div>

</div>

<div id="footer_line">
</div>

</body>
</html>
