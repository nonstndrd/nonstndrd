<div class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/Wordpress/wp-content/themes/development/assets/img/P1110906.jpg">
      <div class="carousel-caption">
        Test Image 01
      </div>
    </div>
    <div class="item">
      <img src="/Wordpress/wp-content/themes/development/assets/img/P1110909.jpg">
      <div class="carousel-caption">
        Test Image 02
      </div>
    </div>
    <div class="item">
      <img src="/Wordpress/wp-content/themes/development/assets/img/P1110917.jpg">
      <div class="carousel-caption">
        Test Image 03
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<div class="jumbotron">
<p>This is a test for the Jumbotron component</p>
</div>
<?php the_content(); ?>
<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
</div>