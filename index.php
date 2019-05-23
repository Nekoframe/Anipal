<?php 
  $page = 'home';
  $title = 'Title';
  include 'meta.php';
  include 'header.php';
?>


<main>

	<!-- banner__wrapper -->
	<div class="banner__wrapper">
	  <div id="banner" class="banner carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#banner" data-slide-to="0" class="active"></li>
	      <li data-target="#banner" data-slide-to="1"></li>
	    </ol>
	    <div class="carousel-inner">
	      <div class="carousel-item banner__item banner__item1 active">
	        <!-- <img src="img/banner/banner3.jpg" class="d-block" alt="Cat Banner"> -->
	        <div class="carousel-caption d-none d-md-block">
	          <h5>First slide label</h5>
	          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
	        </div>
	      </div>
	      <div class="carousel-item banner__item banner__item2">
	        <!-- <img src="img/banner/banner2.jpg" class="d-block" alt="Dog Banner"> -->
	        <div class="carousel-caption d-none d-md-block">
	          <h5>Second slide label</h5>
	          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	        </div>
	      </div>
	    </div>
	    <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
	      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
	      <span class="carousel-control-next-icon" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>
	<!-- end banner__wrapper -->
	

</main>

  

    

<?php 
  include 'footer.php';
?>