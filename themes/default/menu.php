<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" />
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://code.jquery.com/mobile/latest/jquery.mobile.js"></script>  
  <script type="text/javascript">
    $.mobile.ajaxEnabled = false;
  </script>
</head>
<body>

<div data-role="page">
  <div data-role="content">
  <?php wp_nav_menu( array( 
	'theme_location'  => 'appdeck_top',
	'items_wrap'      => '<ul data-role="listview" data-inset="true" id="%1$s" class="%2$s">%3$s</ul>'
  ) ); ?>
  </div><!-- /content -->
</div><!-- /page -->

</body>
</html>