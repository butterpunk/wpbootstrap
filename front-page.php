<?php get_header(); ?>
 
 <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>

          <div class="jumbotron">
<span class="logo">
            <img src="http://dev.gnoinfo.com/wp-content/themes/gno_new/images/logo.png " alt="image">
          </span>
            <span class="cityBuilding">
            <img src="http://dev.gnoinfo.com/wp-content/themes/gno_new/images/building.png" alt="image">
          </span>
          </div>
          <div class="row">
            


<?php
	$args = array( 'numberposts' => '6' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo 
		'<div class="col-xs-6 col-lg-4">'.'<h2>' . $recent["post_title"].'</h2>'.'<p>'. $recent["post_content"]. '</p> <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p></div>';
	}
?>

        </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9--> 

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            
            <a href="#" class="list-group-item">Disaster Recovery</a>
            <a href="#" class="list-group-item">Housing</a>
            <a href="#" class="list-group-item">Kids & Families</a>
            <a href="#" class="list-group-item">Healthcare</a>
            <a href="#" class="list-group-item">Economy</a>
            <a href="#" class="list-group-item">GNO info Minute</a>
            <a href="#" class="list-group-item">Activities</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
      
      
      
      <span ="lookfarLogo">
        <img style="width: 100%;" src="http://www.gnoinfo.com/wp-content/uploads/LOOKFAR-VERTICAL-LOGO-WITH-BRAND-DESC-CMYK-NO-TM.jpg" alt="Ad">
      </span>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

<?php get_footer(); ?>