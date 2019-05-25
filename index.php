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
	          	<button class="btn btn--light smooth">Contact Us</button>
	          </div>
	        </div>
	        <div class="banner--overlay"></div>
	      </div>
	      <div class="carousel-item banner__item banner__item2">
	        <div class="carousel-caption d-block d-md-block banner__caption">
	          <h1>Pet training is available here</h1>
	          <div class="button__box">
	          	<button class="btn btn--light smooth">Contact Us</button>
	          </div>
	        </div>
	        <div class="banner--overlay"></div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end banner__wrapper -->

	<!-- aboutus__wrapper -->
	<div class="aboutus__wrapper" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4 aboutus__image">
					<figure>
						<img src="img/yuko.jpg" class="img-fluid" alt="Yuko Ishikawa">
					</figure>
				</div>
				<div class="col-md-8 col-lg-8 aboutus__detail">
					<div class="section__heading">
						<p class="subtitle">Welcome to</p>
						<h2>Anipal Pet Care</h2>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
dolore magna aliqua. Ut enim ad minim veniam.</p>
					<p>quis nostrud exercitation ullamco laboris nisi ut aliquip 
ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
deserunt mollit anim id est laborum</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end aboutus__wrapper -->


	<!-- service__wrapper -->
	<div class="service__wrapper" id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__heading">
						<p class="subtitle light">Find out</p>
						<h2>What we do</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="service__card">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-4 service__img">
									<img src="img/service/house.png" class="img-fluid" alt="Pet sitting">
								</div>
								<div class="col-lg-8 service__detail">
									<h1>Pet Sitting</h1>
									<p>Lorem ipsum dolor sit amet, consectetur 
adipiscing elit, sed do eiusmod tempor 
incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="service__card">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-4 service__img">
									<img src="img/service/dog.png" class="img-fluid" alt="Pet sitting">
								</div>
								<div class="col-lg-8 service__detail">
									<h1>Dog Walking</h1>
									<p>Lorem ipsum dolor sit amet, consectetur 
adipiscing elit, sed do eiusmod tempor 
incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<div class="service__card">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-4 service__img">
									<img src="img/service/pet.png" class="img-fluid" alt="Pet sitting">
								</div>
								<div class="col-lg-8 service__detail">
									<h1>Pet Training</h1>
									<p>Lorem ipsum dolor sit amet, consectetur 
adipiscing elit, sed do eiusmod tempor 
incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="service__card">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-4 service__img">
									<img src="img/service/handshake.png" class="img-fluid" alt="Pet sitting">
								</div>
								<div class="col-lg-8 service__detail">
									<h1>Behaviour Consultation</h1>
									<p>Lorem ipsum dolor sit amet, consectetur 
adipiscing elit, sed do eiusmod tempor 
incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end service__wrapper -->


	<!-- gallery__wrapper -->
	<div class="gallery__wrapper" id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__heading">
						<p class="subtitle">Image Tour</p>
						<h2>Gallery</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 gallery__box" data-toggle="modal" data-target="#gallery__modal">
					<figure>
						<div class="gallery--overlay"><i class="fas fa-expand-arrows-alt fa-2x"></i></div>
						<img src="img/gallery/image1.jpg" class="img-fluid" alt="image1">
					</figure>
				</div>
				<div class="col-md-6 col-lg-4 gallery__box" data-toggle="modal" data-target="#gallery__modal">
					<figure>
						<div class="gallery--overlay"><i class="fas fa-expand-arrows-alt fa-2x"></i></div>
						<img src="img/gallery/image2.jpg" class="img-fluid" alt="image1">
					</figure>
				</div>
				<div class="col-md-6 col-lg-4 gallery__box" data-toggle="modal" data-target="#gallery__modal">
					<figure>
						<div class="gallery--overlay"><i class="fas fa-expand-arrows-alt fa-2x"></i></div>
						<img src="img/gallery/image3.jpg" class="img-fluid" alt="image1">
					</figure>
				</div>
				<div class="col-md-6 col-lg-4 gallery__box" data-toggle="modal" data-target="#gallery__modal">
					<figure>
						<div class="gallery--overlay"><i class="fas fa-expand-arrows-alt fa-2x"></i></div>
						<img src="img/gallery/image4.jpg" class="img-fluid" alt="image4">
					</figure>
				</div>
				<div class="col-md-6 col-lg-4 gallery__box" data-toggle="modal" data-target="#gallery__modal">
					<figure>
						<div class="gallery--overlay"><i class="fas fa-expand-arrows-alt fa-2x"></i></div>
						<img src="img/gallery/image5.jpg" class="img-fluid" alt="image5">
					</figure>
				</div>
				<div class="col-md-6 col-lg-4 gallery__box" data-toggle="modal" data-target="#gallery__modal">
					<figure>
						<div class="gallery--overlay"><i class="fas fa-expand-arrows-alt fa-2x"></i></div>
						<img src="img/gallery/image6.jpg" class="img-fluid" alt="image6">
					</figure>
				</div>
			</div>
		</div>
	</div>
	<!-- end gallery__wrapper -->


	<!-- testimonial__wrapper -->
	<div class="testimonial__wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__heading">
						<p class="subtitle light">Our customer</p>
						<h2>Stories</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="tesimonial__list owl-carousel owl-theme" id="testimonial__carousel">
						<div class="tesimonial__card">
							<figure class="testimonial__image">
								<img src="img/testimonial/person1.jpg" alt="Thanawan Pinlaem">
							</figure>
							<div class="testimonial__detail">
								<strong>Thanawan Pinlaem</strong>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<div class="tesimonial__card">
							<figure class="testimonial__image">
								<img src="img/testimonial/person1.jpg" alt="Thanawan Pinlaem">
							</figure>
							<div class="testimonial__detail">
								<strong>Thanawan Pinlaem</strong>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
						<div class="tesimonial__card">
							<figure class="testimonial__image">
								<img src="img/testimonial/person1.jpg" alt="Thanawan Pinlaem">
							</figure>
							<div class="testimonial__detail">
								<strong>Thanawan Pinlaem</strong>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonial__wrapper -->


	<!-- blog__wrapper -->
	<div class="blog__wrapper" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__heading">
						<p class="subtitle">Something</p>
						<h2>We want to share</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 blog__card">
					<a href="blog_single.php">
						<figure>
							<img src="img/blog/blog1.jpg" class="img-fluid" alt="Blog 1">
						</figure>
						<div class="blog__detail">
							<h3>Lorem ipsum</h3>
							<p>Duis aute irure dolor in reprehenderit in voluptate
	velit esse cillum dolore eu fugiat nulla pariatur.
	Excepteur sint occaecat cupidatat non proident,
	sunt in culpa qui officia deserunt mollit anim id
	est laborum.</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 blog__card">
					<a href="blog_single.php">
						<figure>
							<img src="img/blog/blog2.jpg" class="img-fluid" alt="Blog 2">
						</figure>
						<div class="blog__detail">
							<h3>Lorem ipsum</h3>
							<p>Duis aute irure dolor in reprehenderit in voluptate
	velit esse cillum dolore eu fugiat nulla pariatur.
	Excepteur sint occaecat cupidatat non proident,
	sunt in culpa qui officia deserunt mollit anim id
	est laborum.</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 blog__card">
					<a href="blog_single.php">
						<figure>
							<img src="img/blog/blog3.jpg" class="img-fluid" alt="Blog 3">
						</figure>
						<div class="blog__detail">
							<h3>Lorem ipsum</h3>
							<p>Duis aute irure dolor in reprehenderit in voluptate
	velit esse cillum dolore eu fugiat nulla pariatur.
	Excepteur sint occaecat cupidatat non proident,
	sunt in culpa qui officia deserunt mollit anim id
	est laborum.</p>
						</div>
					</a>
				</div>
			</div>

			<div class="button__box">
	          	<button class="btn btn--light" onclick="window.location.href='blog.php'">See More</button>
          	</div>
		</div>
	</div>
	<!-- end blog__wrapper -->


	<!-- contact__wrapper -->
	<div class="contact__wrapper" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__heading">
						<p class="subtitle light">Get in touch</p>
						<h2>Contact</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 contact__detail">
					<h1>Anipal Pet Care</h1>
					<p>
						<i class="fas fa-map-marker-alt"></i>
						<span>16 Abc Street, Aldery Edge, Cheshire</span>
					</p>
					<p>
						<i class="fas fa-envelope"></i>
						<a href="mailto:example@email.co.uk">example@email.co.uk</a>
					</p>
					<p>
						<i class="fas fa-phone"></i>
						<a href="tel:07XXXXXXXXX">07XXXXXXXXX</a>
					</p>
				</div>
				<div class="col-lg-6 contact__form">
					<form>
						<div class="form-row">
							<div class="col-lg-12">
						      <!-- <input type="text" class="form-control is-invalid" id="name" placeholder="Name"  required> -->
						      <input type="text" class="form-control" id="name" placeholder="Name"  required>
						      <div class="invalid-feedback">Please enter your name.</div>
						    </div>
						</div>
						<div class="form-row">
							<div class="col-lg-12">
						      <input type="email" class="form-control" id="email" placeholder="Email"  required>
						      <div class="invalid-feedback">Please enter your email.</div>
						    </div>
						</div>
						<div class="form-row">
							<div class="col-lg-12">
						      <input type="text" class="form-control" id="phone" placeholder="Phone number (Optional)"  required>
						    </div>
						</div>
						<div class="form-row">
							<div class="col-lg-12">
						      <input type="text" class="form-control" id="title" placeholder="Title"  required>
						      <div class="invalid-feedback">Please enter a title.</div>
						    </div>
						</div>
						<div class="form-row">
							<div class="col-lg-12">
						      <textarea class="form-control" id="message" placeholder="Message" required></textarea>
							  <div class="invalid-feedback">
							    Please enter a message.
							  </div>
						    </div>
						</div>

						<div class="button__box">
				          	<button class="btn btn--dark">Send</button>
			          	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact__wrapper -->
	

</main>

  

    

<?php 
  include 'footer.php';
?>