<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>FASAEC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <meta property="og:title" content="Fonds d'Assistance Sociale aux Artistes et Ecrivains Congolais (FASAEC)" />
    <meta property="og:url" content="https://fasaec.cd" />
    <meta property="og:image" content="{{ asset('img/logo-couleur.png') }}" />

    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('img/logo.png') }}>

    <!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- header & menu --}}

    <link rel="stylesheet" href={{ asset('css/style.css') }}>
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Fonds d'Assistance Sociale aux Artistes et Ecrivains Congolais (FASAEC)</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  {{-- <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img id="site-logo" src="{{ asset('img/logo-transparant.png') }}" alt="" height="100px">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->

                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Accueil</a></li>
                          <li><a href="#mission">LE FASAEC</a></li>
                          <li class="scroll-to-section"><a href="#valeurs">DROITS & PROTECTION SOCIALE</a></li>

                          <li class="scroll-to-section"><a href="#membres">ARTISTES & NUMÉRIQUE / IA</a></li>
                          <li class="scroll-to-section"><a href="#contact">AIDES & ACCOMPAGNEMENT</a></li>
                          <li class="scroll-to-section"><a href="#membres">ACTUALITÉS & RESSOURCES</a></li>
                          <li class="scroll-to-section"><a href="#contact">CONTACT & ORIENTATION</a></li>
                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header> --}}

  <header class="header header-area header-sticky">
	<div class="topbar-one">
		<div class="topbar-one-left">
			<div class="menu-logo">
				<a href="index.html"><img id="site-logo" src={{ asset('img/logo-transparant.png') }} width="160"  alt="img-27"></a>
			</div><!-- menu-logo -->
		</div><!-- topbar-one-left -->
		<div class="container">
			<div class="topbar-one-middle">
				<div class="topbar-info">
					<ul>
						<li>
							<div class="topbar-icon">
								<i class="fa-solid fa-envelope"></i>
							</div><!-- topbar-icon -->
							<div class="topbar-text">
								<a href="mailto:info@culture.gouv.cd">info@fasaec.cd</a>
							</div><!-- topbar-text -->
						</li><!-- li -->

					</ul><!-- ul -->
				</div><!--topbar-info-->
				<div class="topbar-right">
					<ul>
						<li>Adresse : Av. Boulevard du 30 juin n°154, BP 3164 et 3131 Kinshasa/Gombe</li>

					</ul><!-- ul -->
				</div><!--topbar-right-->
			</div><!--topbar-one-middle-->
			<div class="main-menu menu-two sticky-header">
				<div class="main-menu-one-inner">
					<div class="main-menu-left">
						<div class="navigation">
							<ul class="main-menu-list list-unstyled">
								<li class="active">
									<a href="index.html">ACCUEIL</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="#">LE FASAEC</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="#" style="white-space: nowrap; ">DROITS & PROTECTION SOCIALE</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="#">ARTISTES & NUMÉRIQUE / IA</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="#">AIDES & ACCOMPAGNEMENT</a>
								</li><!--has-dropdown-->
								<li>
									<a href="#">ACTUALITÉS & RESSOURCES</a>
								</li>
                                <li>
									<a href="#">CONTACT & ORIENTATION</a>
								</li>
                                <li></li><br><!-- li -->
							</ul><!-- main-menu-list -->
						</div><!-- navigation -->
					</div><!-- main-menu-left -->
					<div class="main-menu-right">
						<div class="mobile-menu-button mobile-nav-toggler">
							<span class="span"></span>
							<span class="span"></span>
							<span class="span"></span>
						</div><!-- mobile-menu-button -->

					</div><!-- main-menu-right -->
				</div><!-- main-menu-one-inner -->
			</div><!-- main-menu menu-two -->
		</div><!-- container -->
		<div class="topbar-one-button">
			<a href="https://docs.google.com/forms/d/1bqQszDbQtawjOU6oF8ynovgLKFU74TAqfbVx9b9Ll34/edit" class="btn btn-primary">S'enregistrer</a>
		</div><!-- topbar-one-button -->
	</div><!-- topbar-one -->
</header>


  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="{{ asset('video/arriere-plan.mp4') }}" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h2>FASAEC</h2>
              <h3 style="color: white">pont numérique de la Culture & du Sociale.</h3><br>
              <p>Le Fonds d’Assistance Sociale aux Artistes et Écrivains Congolais  accompagne, protège et soutient les artistes et écrivains de la République Démocratique du Congo dans leur parcours social, professionnel et numérique. </p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Nos artistes</a></div><br>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="apply-now" id="mission">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>NOTRE MISSION</h3>
                <p>permettre aux artistes congolais de créer, vivre et évoluer dans un écosystème culturel structuré, équitable et moderne.</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">NOS ARTISTES</a></div>
              </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>FASAEC</span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Dans un contexte de profondes mutations — précarité sociale, transformation numérique, intelligence artificielle, nouvelles formes de création — le FASAEC agit comme *un pilier institutionnel* pour renforcer la dignité, la sécurité et la reconnaissance du travail artistique.</p>
                    </div>
                </div>
            </article>

        </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="our-courses" id="valeurs">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Popular Courses</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="Course One">
              <div class="down-content">
                <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$160</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="Course Two">
              <div class="down-content">
                <h4>Curabitur molestie dignissim purus vel</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$180</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Nulla at ipsum a mauris egestas tempor</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$140</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Aenean molestie quis libero gravida</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$250</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>TemplateMo is the best website for Free CSS</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$270</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Web Design Templates at your finger tips</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$340</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Please visit our website again</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$360</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Responsive HTML Templates for you</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$400</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>Download Free CSS Layouts for your business</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$430</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Morbi in libero blandit lectus cursus</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$480</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Curabitur molestie dignissim purus</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>$560</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts" id="membres">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our University</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">126</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">New Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Contact FASAEC</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="VOTRE NOM..." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="VOTRE MAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="VOTRE MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">ENVOYER MESSAGE MAINTENANT</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone</h6>
                <span>+243814814409</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@fasaec.cd</span>
              </li>
              <li>
                <h6>Address</h6>
                <span>Av. Boulevard du 30 juin n°154, BP 3164 et 3131 Kinshasa/Gombe</span>
              </li>
              <li>
                <h6>Site Web</h6>
                <span>https://fasaec.cd/</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>FASAEC – Fonds d’Assistance Sociale aux Artistes et Écrivains
          <br>
          Institution publique - Service Spécialisé sous tutelle du Ministère de la Culture, Arts et du Patrimoine – RDC
          <br>
          © FASAEC – Tous droits réservés
        </p>
    </div>
  </section>


  <div class="mobile-nav-wrapper">
	<div class="mobile-nav-overlay mobile-nav-toggler"></div><!-- mobile-nav-overlay -->
	<div class="mobile-nav-content">
		<a href="#" class="mobile-nav-close mobile-nav-toggler">
			<span></span>
			<span></span>
		</a><!-- mobile-nav-close -->
		<div class="logo-box" >
			<a href="index.html"><img src={{ asset('img/logo-transparant.png') }} width="160"  alt="191"></a>
		</div><!-- logo-box -->
		<div class="mobile-nav-container"></div><!-- mobile-nav-container -->
		<ul class="mobile-nav-contact list-unstyled">
			<li>
				<i class="fa-solid fa-phone"></i>
				<a href="tel:+243814814409">+243814814409</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-envelope"></i>
				<a href="mailto:needhelp@company.com">info@fasaec.cd</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-map-marker-alt"></i>
				Adresse : Av. Boulevard du 30 juin n°154, BP 3164 et 3131 Kinshasa/Gombe
			</li><!-- li -->
		</ul><!-- /.mobile-nav-contact -->
		<ul class="mobile-nav-social list-unstyled">
			<li><a href="https://twitter.com/minculturap_rdc?lang=en"><i class="fa-brands fa-twitter"></i></a></li>
			<li><a href="https://www.facebook.com/minicultureartsrdc/?locale=fr_FR"><i class="fa-brands fa-facebook"></i></a></li>
			<li><a href="https://www.tiktok.com/@min_cap"><i class="fa-brands fa-tiktok"></i></a></li>
			<li><a href="https://www.instagram.com/mincap_rdc/"><i class="fa-brands fa-instagram"></i></a></li>
			<li><a href="https://www.linkedin.com/company/minist%C3%A8re-de-la-culture-arts-et-patrimoines-rdc?trk=public_post_feed-actor-name"><i class="fa-brands fa-linkedin"></i></a></li>
		</ul><!-- mobile-nav-social -->
	</div><!-- mobile-nav-content -->
  </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

    <script>
        $(document).ready(function(){
            "use strict";
            if ($(".scroll-to-target").length) {
                $(".scroll-to-target").on("click", function () {
                    var target = $(this).attr("data-target");
                    $("html, body").animate({
                            scrollTop: $(target).offset().top,
                        },
                        1000
                    );
                    return false;
                });
            }
            // mobile nav
            if($('.mobile-nav-wrapper').length) {
                $('.mobile-nav-toggler').on('click',function() {
                    $('.mobile-nav-wrapper').toggleClass('expanded')
                    $('body').toggleClass('locked')
                })
                var menu_content = $('.main-menu .navigation ul')[0].outerHTML
                $('.mobile-nav-container').html(menu_content)
                $('.mobile-nav-container .main-menu-list li.has-dropdown > a').append('<button><i class="fa-solid fa-chevron-right"></i></button>')
                $('.mobile-nav-container .main-menu-list li.has-dropdown > a button').on('click',function() {
                    $(this).toggleClass('expanded')
                    $(this).parents('a').siblings('ul').slideToggle()
                })
            }

            //    button click

        //    $('button').click(function(){
            // $(".donate-amount input:text").val('');
        //    });

            if($('.main-slider-swiper').length) {
                $('.main-slider-swiper').owlCarousel({
                    loop:true,
                    autoplay:true,
                    nav:true,
                    items: 1,
                    dots:false,
                    navText: ['<i class="fa-solid fa-arrow-left-long"></i>','<i class="fa-solid fa-arrow-right-long"></i>']
                })
            }
            if($('.main-slider-two-swiper').length) {
                $('.main-slider-two-swiper').owlCarousel({
                    loop:true,
                    nav:true,
                    items: 1,
                    dots:false,
                    navText: ['<i class="fa-solid fa-arrow-left-long"></i>','<i class="fa-solid fa-arrow-right-long"></i>']
                })
            }
            if ($('.counter-number').length) {
                    $('.counter-number').counterUp({
                            delay: 10,
                            time: 1000
                    });
            }
                if ($(".search-toggler").length) {
                $(".search-toggler").on("click", function (e) {
                    e.preventDefault();
                    $(".search-popup").toggleClass("active");
                    $(".mobile-nav-wrapper").removeClass("expanded");
                    $("body").toggleClass("locked");
                });
            }
            $(function() {
            $('.video-popup, .video-popup').YouTubePopUp({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
            $(window).on("scroll", function () {
                if ($(".sticky-header").length) {
                    var headerScrollPos = 230;
                    var stricky = $(".sticky-header");
                    if ($(window).scrollTop() > headerScrollPos) {
                        setTimeout(function() {
                        stricky.addClass("sticky-fixed");
                        },100)
                            stricky.addClass("sticky-header--cloned");
                    } else if ($(this).scrollTop() <= headerScrollPos) {
                        stricky.removeClass("sticky-fixed");
                        stricky.removeClass("sticky-header--cloned");
                    }
                }
                if ($(".scroll-to-top").length) {
                    var strickyScrollPos = 100;
                    if ($(window).scrollTop() > strickyScrollPos) {
                        $(".scroll-to-top").fadeIn(500);
                    } else if ($(this).scrollTop() <= strickyScrollPos) {
                        $(".scroll-to-top").fadeOut(500);
                    }
                }
            });
            // Owl Carousel
            if ($(".portfolio-carousel").length) {
                var owl = $(".portfolio-carousel");
                owl.owlCarousel({
                    items: 4,
                    nav:false,
                    margin:30,
                    loop: true,
                    autoplay:true,
                    smartSpeed:2000,
                    responsive:{
                        0:{
                                items:1,
                        },
                        575:{
                                items:2,
                        },
                        767:{
                                items:3,
                        },
                        991: {
                            items:4,
                        }
                    }
                });
            }
            // Owl Carousel
            if ($(".portfolio-two-carousel").length) {
                var owl = $(".portfolio-two-carousel");
                owl.owlCarousel({
                    items: 4,
                    nav:false,
                    margin:30,
                    loop: true,
                    dots:false,
                    autoplay:true,
                    smartSpeed:2000,
                    responsive:{
                        0:{
                                items:1,
                        },
                        575:{
                                items:2,
                        },
                        767:{
                                items:2,
                        },
                        991: {
                            items:3,
                        }
                    }
                });
            }
            // Owl Carousel
            if ($(".client-carousel").length) {
                var owl = $(".client-carousel");
                owl.owlCarousel({
                    items: 1,
                    nav:false,
                    margin: 80,
                    loop: true,
                    autoplay:true,
                    smartSpeed:2000,
                    responsive:{
                        0:{
                                items:1,
                        },
                        375:{
                                items:2,
                        },
                        767:{
                                items:3,
                        },
                        991:{
                                items:4,
                        },
                        1199: {
                            items:5
                        }
                    }
                });
            }
                // Owl Carousel
            if ($(".event-details-carousel").length) {
                var owl = $(".event-details-carousel");
                owl.owlCarousel({
                    items: 3,
                    nav:false,
                    loop: true,
                    margin:10,
                    autoplay:true,
                    smartSpeed:2000,
                    responsive:{
                        0:{
                                items:1,
                        },
                        767:{
                                items:2
                        },
                        1199: {
                            items:3
                        }
                    }
                });
            }
            if ($('.testimonial-thumb').length) {
                var review_thumb = new Swiper(".testimonial-thumb",{
                    slidesPerView: 3,
                    spaceBetween: 0,
                })
            }
            if ($('.testimonial-reviews').length) {
                var review_swiper = new Swiper(".testimonial-reviews",{
                    slidesPerView:1,
                    loop:true,
                    spaceBetween: 60,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    thumbs: {
                        swiper: review_thumb,
                    },
                })
            }
            if ($('.author-thumb-carousel').length) {
                var review_two_thumb = new Swiper(".author-thumb-carousel",{
                    slidesPerView: 3,
                    spaceBetween:0,
                    // allowTouchMove: false,
                })
            }
            if ($('.author-review-carousel').length) {
                var review_two_swiper = new Swiper(".author-review-carousel",{
                    slidesPerView:1,
                    loop:true,
                    spaceBetween: 60,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    thumbs: {
                        swiper: review_two_thumb,
                    },
                })
            }
            if ($('.responsive-map').length) {
                var window_width = $(window).width();
                $('.responsive-map').each(function() {
                    var this_column = $(this);
                    var section_width = this_column.closest('.container').width();
                    var extra_width = ((window_width - section_width)/2);
                    var column_width = $(this).width();
                    var total_width = column_width + extra_width
                    $(this).css('width',total_width+'px')
                })
            }
            if ($('.count-box').length) {
                $('.count-box').appear(function () {
                    var el = $(this);
                    var percent = el.data("percentage");
                    $(el).css("width", percent)
                    $(el).find('.count-text').html(percent)
                },{
                    accY: 0
                });
            }
            if ($('.accordian-box').length) {
                $('.accordian-box-item .accordian-content').hide()
                $('.accordian-box-item.active .accordian-content').show()
                $('.accordian-title').on('click',function() {
                $('.accordian-title').siblings('.accordian-content').stop().slideUp()
                    $(this).siblings('.accordian-content').stop().slideDown()
                    $('.accordian-box-item').removeClass('active')
                    $(this).parent().addClass('active')
                })
            }
        });
            var $btns = $('.nav-link').click(function() {
            if (this.id == 'all') {
                $('.tab-pane > div').fadeIn(450);
            } else {
                var $el = $('.' + this.class).fadeIn(450);
                $('tab-pane > div').not($el).hide();
            }
            $btns.removeClass('active');
            $(this).addClass('active');
        });
        if ($(".contact-form-validated").length) {
            $(".contact-form-validated").validate({
                // initialize the plugin
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    },
                    subject: {
                        required: true
                    }
                },
                submitHandler: function (form) {
                    // sending value with ajax request
                    $.post(
                        $(form).attr("action"),
                        $(form).serialize(),
                        function (response) {
                            $(form).parent().find(".result").append(response);
                            $(form).find('input[type="text"]').val("");
                            $(form).find('input[type="email"]').val("");
                            $(form).find("textarea").val("");
                        }
                    );
                    return false;
                }
            });
        }
        $(window).on('load', function () {
        $('body').addClass('loaded');
        });
    </script>


</body>

</body>
</html>
