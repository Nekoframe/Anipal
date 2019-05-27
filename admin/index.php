<?php 
  $page = 'login';
  $title = 'Admin - Anipal Pet Care';
  include 'meta.php';
  // include 'header.php';
?>

<main>

	<!-- login__section -->
	<div class="login__section">
		<div class="login__box">
			<div class="login__box__header">
				<img src="../img/logo_100x100.png" class="img-fluid">
			</div>

			<!-- normal login -->
			<form class="login__form" action="" style="display: block;">
				<div class="form-row">
					<div class="form-group col-md-12">
					    <input type="text" class="form-control" id="username" placeholder="Username">
				    </div>
				    <div class="form-group col-md-12">
					    <input type="password" class="form-control" id="password" placeholder="Password">
				    </div>

				     <div class="form-group col-md-12 login__button">
					    <button class="btn btn--light smooth">Login</button>
				    </div>

				    <div class="form-group col-md-12 login__button">
					    <a class="login__link" href="#!">Forgot your password ?</a>
				    </div>
			    </div>
			</form>

			<!-- forgot password -->
			<form class="login__form forgot-password__box" action="" style="display: none;">
				<div class="form-row">
					<div class="forgot-password">
						<h3 class="forgot-password__title">Forgot your password ?</h3>
						<span class="forgot-password__detail">If you have forgotten your password.
						Please enter your email address below and click "Submit" </span>
					</div>

					<div class="form-group col-md-12">
					    <input type="email" class="form-control" id="email" placeholder="Email">
				    </div>

				    <div class="form-group col-md-12 login__button">
					    <button class="btn btn--fixed-size btn--light-transparent">Submit</button>
				    </div>
				</div>
			</form>


		</div>
	</div>
	<!-- end login__section -->

	

</main>

  

    

<?php 
  include 'footer.php';
?>