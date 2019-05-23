<?php 
  $page = 'home';
  $title = 'Anipal Pet Care';
  include 'meta.php';
  include 'header.php';
?>

<main>

	<!-- banner__wrapper -->
	<div class="banner__wrapper" id="home">
	  <div id="banner" class="banner carousel slide carousel-fade" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#banner" data-slide-to="0" class="active"></li>
	      <li data-target="#banner" data-slide-to="1"></li>
	    </ol>
	    <div class="carousel-inner">
	      <div class="carousel-item banner__item banner__item1 active">
	        <div class="carousel-caption d-block banner__caption">
	          <h1>We will take care of your pets</h1>
	          <div class="button__box">
	          	<button class="btn btn--light" onclick="location.href='http://www.google.com'">Contact Us</button>
	          </div>
	        </div>
	        <div class="banner--overlay"></div>
	      </div>
	      <div class="carousel-item banner__item banner__item2">
	        <div class="carousel-caption d-block d-md-block banner__caption">
	          <h1>Pet training is available here</h1>
	          <div class="button__box">
	          	<button class="btn btn--light">Contact Us</button>
	          </div>
	        </div>
	        <div class="banner--overlay"></div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end banner__wrapper -->
	

</main>

  

    

<?php 
  include 'footer.php';
?>