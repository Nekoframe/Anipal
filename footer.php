  </body>
</html>


<!-- gallery modal -->
<div class="modal fade gallery__modal" id="gallery" tabindex="-1" role="dialog" aria-labelledby="gallery" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header gallery__modal__head">
        <!-- <h5 class="modal-title gallery__modal__title" id="gallery_title">Album 01 - Luxury Bathroom</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body gallery__modal_content">
        

        <div id="gallery__image" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="img/gallery/image1.jpg" alt="image1">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/gallery/image2.jpg" alt="image2">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/gallery/image3.jpg" alt="image3">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/gallery/image4.jpg" alt="image4">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/gallery/image5.jpg" alt="image5">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/gallery/image6.jpg" alt="image6">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#gallery__image" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#gallery__image" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>


      </div>
    </div>
  </div>
</div>


<!-- Bootstrap Carousel -->
<script type="text/javascript">
	$('#banner').carousel({
		interval: 6000,

	});
</script>

<!-- Owl Carousel -->
<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $("#testimonial__carousel").owlCarousel({
	  	autoPlay: 3000,
	  	loop: true,
	    // margin: 30,
	    item: 1,

	    // responsiveClass: true,
	    responsive:{
	        0:{
	            items: 1,
	            dots: true,
	            nav: false
	        },
	        768:{
	            items: 1,
	            dots: true,
	            nav: true
	        },
	        1000:{
	            items: 1,
	            dots: true,
	            nav: true
	        }
	    }
	  });
	});
</script>

