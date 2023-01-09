<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content='pavilan'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title Tag  -->
	<title>KiPART</title>

	<!-- Favicon -->
	<link rel="icon" type="image/favicon.png" href="img/favicon.png">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">

	<!-- Kipart Plugins CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/cubeportfolio.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">

	<!-- KiPART Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body id="bg">

	<!-- Boxed Layout -->
	<div id="page" class="site boxed-layout">

		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->

		<!-- Header -->
		<header class="header">
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container" style="align-content: center;">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-1 col-md-3 col-6">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo" style="align-items: center;">
												<a href="#">
													<img src="{{ asset('assets/img/logo.png') }}" alt="#">
												</a>
											</div>
										</div>
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">
													<div class="nav-inner">
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="#">Vos réservations</a></li>
																<li><a href="#">S’identifier</a>
																</li>
																<li><a href="#">Creer un compte</a></li>
																<li><a href="#">EN</a>
																	<ul class="sub-menu">

																		<li><a href="#">FR</a></li>

																	</ul>
																</li>


															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->

		</header>
		<!--/ End Header -->

		<!-- Hero Slider -->
		<section class="hero-slider d-grid gap-3 position-relative" style="background-image:url('{{ asset('assets/img/hero.jpg') }}');">


			<!-- <div class="row  align-items-center">
					<div class="col-lg-4-offset-4  bg-white">
						<div class="w-50 " style="background-color: aliceblue;margin-left: 100px;">

							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Email address</label>
								<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
							  </div>
							  <div class="mb-3">
								<label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							  </div>
						</div>
					</div>
					<div class="col-lg-8 po">

							<img src="{{ asset('assets/img/home.png') }}" alt="">

					</div>
				</div> -->

			<div class="hero d-flex justify-content-center">


				<div class="home-slider1  position-relative"
					style="background-image:url({{ asset('assets/img/home.png') }}); margin-top: 40px;margin-right: -150px;">
					<div class="home-slider2  w-70  input-border position-absolute position-relative"
						style="background-color: rgb(255, 255, 255);margin-left: -100px;margin-top: 70px;">
						<div class="col-lg-8 col-md-8 col-12 ">

								<div class="col-md-8">
									<select class="form-select" aria-label="Default select example"
										style="color: #da920d; font-family: Arial, Helvetica, sans-serif;">
										<option value="1">Aller Simple</option>
										<option value="2">Aller et retour</option>
									</select>
								</div>
						</div>

						<div class="row mt-3">
							<div class="col-lg-12 col-md-12">

								<div class="input-group mb-1 ">

									<input type="text" style="border-radius: 20px" class="form-control input-design"  id="basic-url"
										aria-describedby="basic-addon3" placeholder="Depart">

								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-lg-12 col-md-12">

								<div class="input-group  mb-1 ">

									<input type="text" style="border-radius: 20px" class=" form-control input-design" id="basic-url"
										aria-describedby="basic-addon3" placeholder="Arrivé">
								</div>
							</div>
						</div>

						<div class="row mt-3">
							<div class="col-lg-6 col-md-12 ">

								<div class="input-group mb-1 ">

									<input type="datetime-local" style="border-radius: 20px" class=" input-design" id="basic-url"
										aria-describedby="basic-addon3" value="Date de Depart">
								</div>
							</div>
							<div class="col-lg-6 col-md-12 ">

								<div class="input-group mb-1 ">

									<input type="datetime-local" style="border-radius: 20px" class=" input-design" id="basic-url"
										aria-describedby="basic-addon3">
								</div>
							</div>
						</div>

                        <div class="row mt-3">
							<div class="col-lg-6 col-md-12 ">

								<div class="input-group  ">
                                    <div class="icon" ><h4 style="color: rgb(229, 145, 0)"><i class="fa fa-user fa-1x"></i>Nombre de Passager</h4></div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 ">

								<div class="input-group  ">
                                    <div class="icon" ><h4 style="color: rgb(229, 145, 0)"><i class="fa fa-star fa-1x"></i>Classe</h4></div>
								</div>
							</div>
						</div>

						<div class="row mt-3">
							<div class="col-lg-6 col-md-12 ">

								<div class="input-group mb-1 ">

									<input type="number" style="border-radius: 20px" class=" input-design" id="basic-url"
										aria-describedby="basic-addon3" placeholder="0">
								</div>
							</div>
							<div class="col-lg-6 col-md-12 ">

								<div class="input-group mb-1 ">

									<select class="input-design input-group" style="align-content: center" >
                                    <option value="1">VIP</option>
                                    <option value="2">CLASSIQUE</option>
                                </select>
								</div>
							</div>
						</div>
                        <div class="row mt-3" >
							<div class="col-lg-12 col-md-12" style="align-content: center">

								<div class="form-group button">
                                    <button type="submit" class="bizwheel-btn3 ">CHERCHER
                                    </button>
                                </div>


								</div>
							</div>

						</div>
					</div>
					</form>
					<!-- <form class="row g-3 needs-validation " novalidate>
							<div class="col-md-8 mb-5">
								<select class="form-select" aria-label="Default select example" style="color: #da920d; font-family: Arial, Helvetica, sans-serif;">
									<option value="1">Aller Simple</option>
									<option value="2">Aller et retour</option>
								  </select>
							  </div>
							</div>
							<div class="form-group col-lg-12 col-md-5 col-12 row mb-3">
								<div class="col ">
									<input type="email" class="form-control form-control-lg" id="emailgrand" placeholder="col-form-label-lg">
								  </div>

							</div>

							<div class="form-group col-lg-12 col-md-5 col-12 row mb-3">
								<div class="col ">
									<input type="email" class="form-control form-control-lg" id="emailgrand" placeholder="col-form-label-lg">
								  </div>

							</div>

							<div class="form-group col-lg-12 col-md-5 col-12 row mb-3">
								<div class="col ">
									<input type="email" class="form-control form-control-lg" id="emailgrand" placeholder="col-form-label-lg">
								  </div>

							</div>

							<div class="col-6">
							  <div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
								<label class="form-check-label" for="invalidCheck">
								  Agree to terms and conditions
								</label>
								<div class="invalid-feedback">
								  You must agree before submitting.
								</div>
							  </div>
							</div>
							<div class="col-6">
							  <button class="btn btn-primary" type="submit">Submit form</button>
							</div>
						  </form> -->
				</div>
			</div>


	</div>
	</div>


	</div>


	</section>
	<!--/ End Hero Slider -->




	<!-- Agence list -->
	<section class="video-feature side  section-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="features-main ">
						<div class="title">
							<h2 style="color: #e3a407;">Toutes vos agences de
								voyages préférés sur
								une seule plateforme</h2>
							<p style="color: black;">Plus de 10 agences de voyage de confiance, afin que vous
								puissiez vous concentrer uniquement sur le voyage.
								Trouvez les horaires, les prix, l'emplacement des gares
								routières, les services, les promotions et les bons plans</p>
						</div>

					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="features-main ">

						<div class="b-features">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-6">
									<!-- agence list -->
									<div class="img">
										<img src="{{ asset('assets/img/agence/buca.jpg') }}" alt="#" class="image1">

									</div>
									<!--/ End agence list -->
								</div>
								<div class="col-lg-4 col-md-3 col-6">
									<!-- agence list -->
									<div class="img">
										<img src="{{ asset('assets/img/agence/general.jpeg') }}" alt="#" class="image1">

									</div>
									<!--/ End agence list -->
								</div>
								<div class="col-lg-3 col-md-3 col-6">
									<!-- agence list -->
									<div class="img">
										<img src="{{ asset('assets/img/agence/global.jpeg') }}" alt="#" class="image1">

									</div>
									<!--/ End agence list -->
								</div>
								<div class="col-lg-3 col-md-3 col-6" style="border-radius: 3px;">
									<!-- agence list -->
									<div class="img">
										<img src="{{ asset('assets/img/agence/united.jpg') }}" alt="#" class="image1">

									</div>
									<!--/ End agence list -->
								</div>
								<div class="col-lg-3 col-md-3 col-6">
									<!-- agence list -->
									<div class="img">
										<img src="{{ asset('assets/img/agence/finex.png') }}" alt="#" class="image1">

									</div>
									<!--/ End agence list -->
								</div>


							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ agence list -->


	<!-- App  -->
	<section class="video-feature side  section-bg" style="background-color: white;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="features-main ">
						<div class="img">
							<img src="{{ asset('assets/img/agence/app.png') }}" alt="#">

						</div>

					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="features-main ">

						<div class="b-features">
							<div class="row">

								<div class="title">
									<h2 style="color: #ffa807;">L’application tout-en-un
										des voyageurs</h2>
									<p style="color: black;">Téléchargez l'application KiPART gratuitement pour
										bénéficier
										d'une expertise sur laquelle vous pouvez compter et voyagez en
										toute confiance.</p>
								</div>

								<div class="col-lg-6 col-md-6 col-12">

									<i class="fa fa-envelope-o"></i> Assistance voyage

								</div>



								<div class="col-lg-6 col-md-6 col-12">

									<div class="img">
										<img src="{{ asset('assets/img/agence/android.png') }}" alt="#">

									</div>

								</div>


								<div class="col-lg-6 col-md-6 col-12">

									<i class="fa fa-refresh"></i> Mise à jour et rappels


								</div>

								<div class="col-lg-6 col-md-6 col-12">

									<div class="img">
										<img src="{{ asset('assets/img/agence/apple.png') }}" alt="#">

									</div>

								</div>
								<div class="col-lg-6 col-md-6 col-12">

									<i class="fa fa-mobile-phone"></i> Billets sur mobile

								</div>




							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ App -->

	<section class="contact-us">

		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<!-- Contact Form -->

				<div class="contact-form-area ">
					<div class="col-lg-8 col-md-8 col-12 center-element">
						<h2 style="color: #000000; text-align: center;">Newsletter</h2>
						<h1 class="designation" style="color: #ffa807; text-align: center;">Vous souhaitez recevoir des
							remises exclusives
							et des mises à jour directement dans votre boîte
							de réception ?</h1>
						<form class="form " method="post" action="">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-12 center-element" style="color: white;">
									<div class="form-group">

										<input type="email" name="email" placeholder="Votre e-mail">
										<div class="icon"><i class="fa fa-envelope-open fa-2x"></i></div>
									</div>
								</div>
								<div class="col-lg-5 col-md-5 col-12">
									<div class="form-group button">
										<button type="submit" class="bizwheel-btn2 ">Je m’enregistre
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!--/ End contact Form -->
			</div>

		</div>

	</section>
	<!--/ End Contact Us -->

	<!--/ new letter -->


	<!-- Footer -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Footer About -->
						<div class="single-widget footer-about widget">
							<div class="logo">
								<div class="img-logo">
									<a class="logo" href="#">
										<img class="img-responsive" src="{{ asset('assets/img/logo.png') }}" alt="logo">
									</a>
								</div>
							</div>
						</div>
						<!--/ End Footer About -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Footer Links -->
						<div class="single-widget f-link widget">
							<h4 class="widget-title">Pret à partir</h4>
							<ul>
								<li><a href="#">Vos réservations</a></li>
								<li><a href="#">Créer un compte</a></li>
								<li><a href="#">Obtenir l'application</a></li>

							</ul>
						</div>
						<!--/ End Footer Links -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">

						<div class="single-widget f-link widget">
							<h4 class="widget-title">Dans le bureau</h4>
							<ul>
								<li><a href="#">À propos de nous</a></li>
								<li><a href="#">Carrières</a></li>
								<li><a href="#">Devenir un partenaire</a></li>

							</ul>
						</div>

					</div>

					<div class="col-lg-2 col-md-6 col-12">

						<div class="single-widget f-link widget">
							<h4 class="widget-title">Besoin de notre aide ?</h4>
							<ul>
								<a href="#" class="bizwheel-btn">Centre d’aide</a>

							</ul>
						</div>

					</div>
					<div class="col-lg-2 col-md-6 col-12">

						<div class="single-widget f-link widget">
							<h4 class="widget-title">Suivez-nous
							</h4>
							<ul>
								<li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a>
								</li>

							</ul>
						</div>

					</div>


				</div>



			</div>
		</div>
		<!-- Copyright -->
		<div class="copyright" style="background-color: black; color: white;">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-6 col-12">


						<h3 class="widget-title" style="color: white;">KiPART</h3>


					</div>
					<div class="col-lg-2 col-md-6 col-12">

						<h6 class="widget-title">Conditions d'utilisation</h6>


					</div>
					<div class="col-lg-2 col-md-6 col-12">

						<h6 class="widget-title">Politique de confidentialité</h6>


					</div>
					<div class="col-lg-2 col-md-6 col-12">

						<div class="img">
							<img src="{{ asset('assets/img/agence/android.png') }}" alt="#">

						</div>


					</div>
					<div class="col-lg-2 col-md-6 col-12">

						<div class="img">
							<img src="{{ asset('assets/img/agence/apple.png') }}" alt="#">

						</div>


					</div>
				</div>
			</div>
		</div>
		<!--/ End Copyright -->
	</footer>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63bbc8fa47425128790c65d0/1gmaoi58g';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	<!-- Jquery JS -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-migrate-3.0.0.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- Modernizr JS -->
	<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('assets/js/scrollup.js') }}"></script>
	<!-- FacnyBox JS -->
	<script src="{{ asset('assets/js/jquery-fancybox.min.js') }}"></script>
	<!-- Cube Portfolio JS -->
	<script src="{{ asset('assets/js/cubeportfolio.min.js') }}"></script>
	<!-- Slick Nav JS -->
	<script src="{{ asset('assets/js/slicknav.min.js') }}"></script>
	<!-- Way Points JS -->
	<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
	<!-- CounterUp JS -->
	<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
	<!-- Slick Nav JS -->
	<script src="{{ asset('assets/js/slicknav.min.js') }}"></script>
	<!-- Slick Slider JS -->
	<script src="{{ asset('assets/js/owl-carousel.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('assets/js/easing.js') }}"></script>
	<!-- Magnipic Popup JS -->
	<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
	<!-- Active JS -->
	<script src="{{ asset('assets/js/active.js') }}"></script>
</body>

</html>
