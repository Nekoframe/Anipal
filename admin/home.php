<?php 
  $page = 'admin';
  $title = 'Admin - Anipal Pet Care';
  include 'meta.php';
  include 'header.php';
?>

<main class="main--space-top">
	
	<!-- admin__wrapper -->
	<div class="admin__wrapper">
		<!-- admin__banner -->
		<div class="admin__banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin__strip-title" id="banner">Banner</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<table class="admin__table" id="banner_table">
							<thead>
						        <tr>
						        	<th scope="col">#</th>
						            <th scope="col">Image</th>
						            <th scope="col">Caption</th>
						            <th scope="col">Edit</th>
						            <th scope="col">Delete</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						        	<td>1</td>
						            <td>
						            	<img src="../img/banner/banner1.jpg" class="banner__fixed" alt="Thanawan Pinlaem">
						            </td>
						            <td>We will take care of your pet</td>
									<td>
										<button class="btn btn--light btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--light btn--admin">Delete</button>
									</td>
						        </tr>
						        <tr>
						        	<td>2</td>
						            <td>
						            	<img src="../img/banner/banner2.jpg" class="banner__fixed" alt="Thanawan Pinlaem">
						            </td>
						            <td>Pet training is available here</td>
									<td>
										<button class="btn btn--light btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--light btn--admin">Delete</button>
									</td>
						        </tr>
						    </tbody>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="banner__example" id="banner__example">
							<div class="banner--overlay"></div>
							<div class="banner__caption">
								<h1>We will take care of your pets</h1>
								<div class="button__box">
						          	<button class="btn btn--light">Contact Us</button>
						        </div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="banner__upload">
							<input type="file" id="banner__upload" class="btn--file" onchange="bannerFile()">
							<label for="banner__upload">Choose a file</label>
						</div>

						<form name="banner__text__edit" class="banner__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
								    <label for="banner_text_detail">Caption</label>
								    <input type="text" class="form-control" id="banner_text_detail" placeholder="Enter caption">
							    </div>
						    </div>
						    <div class="form-row">
						    	<div class="form-group col-md-12 col-lg-12 button__box">
							    	<button class="btn btn--light btn--admin">Save change</button>
							    </div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end admin__banner -->


		<!-- admin__about -->
		<div class="admin__about">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin__strip-title" id="about">About</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 offset-lg-1 col-md-6 offset-md-3">
						<div class="about__example">
							<img class="img-fluid" id="about__example" src="../img/yuko.jpg">
						</div>
					</div>
					<div class="col-lg-6 offset-lg-2">
						<div class="about__upload">
							<input type="file" id="about__upload" class="btn--file">
							<label for="about__upload">Choose a file</label>
						</div>

						<form name="about__text__edit" class="about__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
								    <label for="about_text_detail">About Anipal</label>
								    <textarea name="about_text_detail" id="about_text_detail" cols="30" rows="5"></textarea>
							    </div>
						    </div>
						    <div class="form-row">
						    	<div class="form-group col-md-12 col-lg-12 button__box">
							    	<button class="btn btn--light btn--admin">Save change</button>
							    </div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end admin__about -->


		<!-- admin__service -->
		<div class="admin__service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin__strip-title" id="service">Service</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<table class="admin__table" id="service_table">
							<thead>
						        <tr>
						        	<th scope="col">#</th>
						            <th scope="col">Image</th>
						            <th scope="col">Service</th>
						            <th scope="col">Detail</th>
						            <th scope="col">Edit</th>
						            <th scope="col">Delete</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						        	<td>1</td>
						            <td>
						            	<img src="../img/service/house.png" class="img-fluid service__fixed" alt="Petting Sitting">
						            </td>
						            <td>Petting Sitting</td>
						            <td>
						            	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						            </td>
									<td>
										<button class="btn btn--light btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--light btn--admin">Delete</button>
									</td>
						        </tr>
						        <tr>
						        	<td>2</td>
						            <td>
						            	<img src="../img/service/dog.png" class="img-fluid service__fixed" alt="Dog Walking">
						            </td>
						            <td>Dog Walking</td>
						            <td>
						            	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						            </td>
									<td>
										<button class="btn btn--light btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--light btn--admin">Delete</button>
									</td>
						        </tr>
						        <tr>
						        	<td>3</td>
						            <td>
						            	<img src="../img/service/pet.png" class="img-fluid service__fixed" alt="Petting Training">
						            </td>
						            <td>Petting Training</td>
						            <td>
						            	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						            </td>
									<td>
										<button class="btn btn--light btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--light btn--admin">Delete</button>
									</td>
						        </tr>
						        <tr>
						        	<td>4</td>
						            <td>
						            	<img src="../img/service/handshake.png" class="img-fluid service__fixed" alt="Behaviour Consultation">
						            </td>
						            <td>Behaviour Consultation</td>
						            <td>
						            	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						            </td>
									<td>
										<button class="btn btn--light btn--admin">Edit</button>
									</td>
									<td>
										<button class="btn btn--light btn--admin">Delete</button>
									</td>
						        </tr>
						    </tbody>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 offset-lg-1 col-md-6 offset-md-3">
						<div class="service__example">
							<img src="../img/service/house.png" class="img-fluid" alt="Petting Sitting">
						</div>
					</div>
					<div class="col-lg-6 offset-lg-2">
						<div class="service__upload">
							<input type="file" id="service__upload" class="btn--file">
							<label for="service__upload">Choose a file</label>
						</div>

						<form name="about__text__edit" class="service__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
								    <label for="service_text_title">Service Title</label>
								    <input type="text" class="form-control" id="service_text_title" placeholder="Service Title">
							    </div>
						    </div>
							<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
								    <label for="service_text_detail">Service Detail</label>
								    <textarea name="about_text_detail" id="service_text_detail" cols="30" rows="5"></textarea>
							    </div>
						    </div>
						    <div class="form-row">
						    	<div class="form-group col-md-12 col-lg-12 button__box">
							    	<button class="btn btn--light btn--admin">Save change</button>
							    </div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end admin__service -->


		<!-- admin__gallery -->
		<div class="admin__gallery">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin__strip-title" id="gallery">Gallery</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<form class="gallery__edit">
							<div class="form-row">
						    	<div class="gallery__upload">
									<input type="file" id="gallery__upload" class="btn--file" multiple>
									<label for="gallery__upload">Choose multiple photos</label>
								</div>
						    </div>

						    <div class="form-row">
						    	<div class="gallery__result row no-gutters" id="result">
						    		
						    	</div>
						    </div>
						    
						    <div class="form-row">
						    	<div class="form-group col-md-12 col-lg-12 button__box">
							    	<button class="btn btn--light btn--admin">Save change</button>
							    </div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end admin__gallery -->


		<!-- admin__testimonial -->
		<div class="admin__testimonial">
			<div class="container">
				<div class="row">
				<div class="col-lg-12">
					<div class="admin__strip-title" id="testimonial">Testimonial</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<table class="admin__table" id="testimonial_table">
						<thead>
					        <tr>
					        	<th scope="col">#</th>
					            <th scope="col">Image</th>
					            <th scope="col">Name</th>
					            <th scope="col">Detail</th>
					            <th scope="col">Edit</th>
					            <th scope="col">Delete</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					        	<td>1</td>
					            <td>
					            	<img src="../img/testimonial/person1.jpg" class="img-fluid testimonial__fixed" alt="Thanawan Pinlaem">
					            </td>
					            <td>Thanawan Pinlaem</td>
					            <td>
					            	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
					            </td>
								<td>
									<button class="btn btn--light btn--admin">Edit</button>
								</td>
								<td>
									<button class="btn btn--light btn--admin">Delete</button>
								</td>
					        </tr>
					        <tr>
					        	<td>2</td>
					            <td>
					            	<img src="../img/testimonial/person1.jpg" class="img-fluid testimonial__fixed" alt="Thanawan Pinlaem">
					            </td>
					            <td>Sebastian Galoch</td>
					            <td>
					            	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
					            </td>
								<td>
									<button class="btn btn--light btn--admin">Edit</button>
								</td>
								<td>
									<button class="btn btn--light btn--admin">Delete</button>
								</td>
					        </tr>
					    </tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 offset-lg-1 col-md-6 offset-md-3">
					<div class="testimonial__example">
						<img class="img-fluid" id="testimonial__example" src="../img/testimonial/person1.jpg">
					</div>
				</div>
				<div class="col-lg-6 offset-lg-2">
					<div class="testimonial__upload">
						<input type="file" id="testimonial__upload" class="btn--file">
						<label for="testimonial__upload">Choose a file</label>
					</div>

					<form name="testimonial__text__edit" class="testimonial__text__edit" action="">
						<div class="form-row">
								<div class="form-group col-md-12 col-lg-12">
								    <label for="testimonial__name">Name</label>
								    <input type="text" class="form-control" id="testimonial__name" placeholder="Enter customer name">
							    </div>
						    </div>
						<div class="form-row">
							<div class="form-group col-md-12 col-lg-12">
							    <label for="testimonial_text_detail">Detail</label>
							    <textarea name="testimonial_text_detail" id="testimonial_text_detail" cols="30" rows="5"></textarea>
						    </div>
					    </div>
					    <div class="form-row">
					    	<div class="form-group col-md-12 col-lg-12 button__box">
						    	<button class="btn btn--light btn--admin">Save change</button>
						    </div>
					    </div>
					</form>
				</div>
			</div>
			</div>
		</div>
		<!-- end admin__testimonial -->


		<!-- admin__blog -->
		<div class="admin__blog">
			<div class="container">
				<div class="row">
				<div class="col-lg-12">
					<div class="admin__strip-title" id="blog">Blog</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<table class="admin__table" id="blog_table">
						<thead>
					        <tr>
					        	<th scope="col">#</th>
					            <th scope="col">Title</th>
					            <th scope="col">Thumbnail</th>
					            <th scope="col">Short Description</th>
					            <th scope="col">Blog Detail</th>
					            <th scope="col">Edit</th>
					            <th scope="col">Delete</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					        	<td>1</td>
					            <td>Lorem ipsum</td>
					            <td>
					            	<img src="../img/blog/blog1.jpg" class="img-fluid blog__fixed" alt="blog1">
					            </td>
					            <td>
					            	<div class="blog__detail">
					            		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					            	</div>
					            </td>
					            <td>
					            	<div class="blog__detail">
					            		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					            	</div>
					            </td>
								<td>
									<button class="btn btn--light btn--admin">Edit</button>
								</td>
								<td>
									<button class="btn btn--light btn--admin">Delete</button>
								</td>
					        </tr>
					        <tr>
					        	<td>2</td>
					            <td>Lorem ipsum</td>
					            <td>
					            	<img src="../img/blog/blog1.jpg" class="img-fluid blog__fixed" alt="blog1">
					            </td>
					            <td>
					            	<div class="blog__detail">
					            		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					            	</div>
					            </td>
					            <td>
					            	<div class="blog__detail">
					            		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					            	</div>
					            </td>
								<td>
									<button class="btn btn--light btn--admin">Edit</button>
								</td>
								<td>
									<button class="btn btn--light btn--admin">Delete</button>
								</td>
					        </tr>
					    </tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12" style="text-align: center;">
					<div class="blog__edit">
						Add CK Editor Here
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="button__box">
						<button class="btn btn--light btn--admin">Save change</button>
					</div>
				</div>
			</div>
		</div>
		<!-- end admin__blog -->


		<!-- admin__contact -->
		<div class="admin__contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="admin__strip-title" id="contact">Contact</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form class="contact__text__edit" action="">
							<div class="form-row">
								<div class="form-group col-md-6 col-lg-6">
								    <label for="business_name">Business name</label>
								    <input type="text" class="form-control" id="business_name" placeholder="eg. Five Star Bathroom">
							    </div>
							    <div class="form-group col-md-6 col-lg-6">
								    <label for="business_address">Address</label>
								    <input type="text" class="form-control" id="business_address" placeholder="">
							    </div>
						    </div>
						    <div class="form-row">
								<div class="form-group col-md-6 col-lg-6">
								    <label for="business_call">Phone number</label>
								    <input type="number" class="form-control" id="business_call" placeholder="eg. 07xxxxxxxxx">
							    </div>
							    <div class="form-group col-md-6 col-lg-6">
								    <label for="business_email">Email</label>
								    <input type="email" class="form-control" id="business_email" placeholder="abc@fivestarbathroom.com">
							    </div>
						    </div>
						    <div class="form-row">
						    	<div class="form-group col-md-12 col-lg-12 button__box">
							    	<button class="btn btn--light btn--admin">Save change</button>
							    </div>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end admin__contact -->



	</div>
	<!-- end admin__wrapper -->
	

</main>

  

    

<?php 
  include 'footer.php';
?>