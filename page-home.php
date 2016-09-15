<?php
/*
Template Name: Home Page
 */
get_header(); 

?>
<div class="home-main">
	<div class="container">
    <!-- Example row of columns -->
    <div class="row">
    	<div class="col-md-12 hero">
    		Delicious treats handmade, with love.
    	</div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
     </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>

    <hr>


  </div> <!-- /container -->



</div>

<div class="bg-image"></div>	
<div class="middle">HELLA MIDDLE YO</div>

<div class="instagram">
	<?php while ( have_posts() ) : the_post(); ?>
					
		<?php the_content(); ?>
		
	<?php endwhile; ?>
</div>	

<?php get_footer(); ?>