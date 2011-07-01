<!doctype html>
<html lang="en">
  <head>
	  <meta charset="utf-8">
	  <title>DonorsChoose Print and Share</title>
	  <meta name="viewport" content="width=device-width" />
	  <?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('style');

		echo $scripts_for_layout;
	  ?>
	  <link rel="icon" href="favicon.ico" />
  </head>

  <body>
   <!-- <div id="header">
      <div id="header-inner" class="clearfix">
        <h1>Print to Share</h1>
        <div id="nav">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/#about">About</a></li>
            <li><a href="/#contact">Contact</a></li>
          </ul>
        </div>
      </div>  #header-inner /
    </div> #header /
    -->
   <div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

	</div> <!--content-->
  <div id="footer">

  </div>

  <div id="border"></div>

	</div>
	<?php echo $this->element('sql_dump'); ?>

  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[['_setAccount','UA-24233728-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
