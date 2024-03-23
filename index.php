<?php include_once('linker.php') ?>

<body class="sj-home">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
				Preloader Start
	*************************************-->
	<div class="preloader-outer">
		<?php include_once('pre_loader.php') ?>
	</div>
	<!--************************************
				Preloader End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<!-- <div id="sj-wrapper" class="sj-wrapper"> -->
	<!--************************************
				Content Wrapper Start
		*************************************-->
	<!-- <div class="sj-contentwrapper"> -->
	<!--************************************
					Header Start
			*************************************-->
	<header id="sj-header" class="sj-header sj-haslayout">
		<?php include_once('header.php') ?>
	</header>
	<!--************************************
					Header End
			*************************************-->
	<!--************************************
					Home Banner Start
			*************************************-->
	<div id="sj-homebanner" class="sj-homebanner">
		<?php include_once('home_banner.php') ?>
	</div>
	<!--************************************
					Home Banner End
			*************************************-->
	<!--************************************
					Main Start
			*************************************-->
	<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
		<div class="sj-haslayout">
			<div class="mx-md-5">
				<div class="row">
					<div class="sj-welcomegreeting">
						<div class="col-12 col-sm-12 col-md-5 col-lg-5 sj-verticalmiddle">
							<div id="sj-welcomeimgslider" class="sj-welcomeimgslider sj-welcomeslider owl-carousel">
								<figure class="sj-welcomeimg item">
									<img src="images/welcomeimg/img-01.jpg" alt="welcome Image">
								</figure>
								<figure class="sj-welcomeimg item">
									<img src="images/welcomeimg/img-02.jpg" alt="welcome Image">
								</figure>
								<figure class="sj-welcomeimg item">
									<img src="images/welcomeimg/img-03.jpg" alt="welcome Image">
								</figure>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-7 col-lg-7 sj-verticalmiddle">
							<div class="sj-welcomecontent">
								<div class="sj-welcomehead">
									<span>Greetings &amp; Welcome</span>
									<h2 class="mt-2">About Us</h2>
								</div>
								<div class="sj-description">
									<p>The Journal is published under the faculty of Science and Engineering of Jatiya Kabi Kazi Nazrul Islam University. It is a peer reviewed International Journal and publishes articles with quality only. The objective of the Journal is to index itself to Scopus list.</p>
								</div>
								<div class="sj-btnarea">
									<a class="sj-btn" href="aboutus.php">Read More</a>
									<!-- <a class="sj-btn sj-btnactive" href="javascript:void(0);">Buy Now</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sj-twocolumns" class="sj-twocolumns">
			<div class="mx-md-5">
				<div class="row">
					<div class="col-12 col-sm-12">
						<div id="sj-content" class="sj-content">
							<!--************************************
					Features Start
			*************************************-->
							<section class="sj-haslayout sj-sectioninnerspace">
								<?php include_once("features.php") ?>
							</section>
							<!--************************************
					Features End
			*************************************-->
							<!--************************************
										Editor's Pick Start
								*************************************-->
							<!-- <section class="sj-haslayout sj-sectioninnerspace">
								<?php include_once('editors_pick.php') ?>
							</section> -->
							<!--************************************
										Editor's Pick End
								*************************************-->
							<!--************************************
										Previous Posts Start
								*************************************-->
							<section class="sj-haslayout sj-sectioninnerspace">
								<?php include_once('previous_issues.php') ?>
							</section>
							<!--************************************
										Previous Posts End
								*************************************-->
							<!--************************************
										Up Coming Books Start
								*************************************-->
							<!-- <section class="sj-haslayout sj-sectioninnerspace">
								<?php include_once('up_coming_books.php') ?>
							</section> -->
							<!--************************************
										Up Coming Books End
								*************************************-->
							<!--************************************
										News Articles Start
								*************************************-->
							<!-- <section class="sj-haslayout sj-sectioninnerspace">
								<?php include_once('news_articles.php') ?>
							</section> -->
							<!--************************************
										News Articles End
								*************************************-->
						</div>
					</div>
					<!-- <div class="col-12 col-sm-12 col-md-4 col-lg-3">
						<aside id="sj-sidebar" class="sj-sidebar">
							<div class="sj-widget sj-widgetsearch">
								<div class="sj-widgetcontent">
									<form class="sj-formtheme sj-formsearch">
										<fieldset>
											<input type="search" name="search" class="form-control" placeholder="Search here">
											<button type="submit" class="sj-btnsearch"><i class="lnr lnr-magnifier"></i></button>
										</fieldset>
									</form>
								</div>
							</div>
							<div class="sj-widget sj-widgetimpactfector">
								<div class="sj-widgetcontent">
									<ul>
										<li>
											<h3>Impact Factor<span>2.125</span></h3>
											<h3>5 Year Impact Factor<span>2.853</span></h3>
										</li>
										<li>
											<h3>Dr. Desmond Bratton</h3>
											<div class="sj-description">
												<p>Consectetur adipisicing elit sedo amod tempor incididunt. <a href="javascript:void(0)">Read More</a></p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="sj-widget sj-widgetnoticeboard">
								<div class="sj-widgetheading">
									<h3>Notice Board</h3>
								</div>
								<div class="sj-widgetcontent">
									<ul>
										<li><a href="javascript:void(0);">Adipisicing elitaium sed dotas eiusm tempor incididunt utae labore etiate dolore magna aliqua enim.</a></li>
										<li><a href="javascript:void(0);">Labore etiat dolore magna aliquaen ad minim veniam.</a></li>
										<li><a href="javascript:void(0);">Duis aute irure dolor in reprehender</a></li>
									</ul>
								</div>
							</div>
							<div class="sj-widget sj-widgetadd">
								<span class="sj-headtitle">Advertisment 270 x270</span>
								<div class="sj-widgetcontent">
									<figure class="sj-addimage"><a href="javascript:void(0);"><img src="images/widget-add.jpg" alt="image description"></a></figure>
								</div>
							</div>
							<div class="sj-widget sj-widgetquestions">
								<div class="sj-widgetheading">
									<h3>Question Of The Week</h3>
								</div>
								<div class="sj-widgetcontent">
									<div class="sj-description">
										<p>Consectetur adipisicing elit, sed aeiuse tempor incididunt ut labore etamiudon magna aliqua enim ad minim?</p>
									</div>
									<div class="sj-questions">
										<div class="sj-selectgroup">
											<span class="sj-radio">
												<input id="sj-qone" type="radio" name="question" value="qone" checked="">
												<label for="sj-qone">Sputum stain for acid-fast bacilli</label>
											</span>
											<span class="sj-radio">
												<input id="sj-qtwo" type="radio" name="question" value="qtwo">
												<label for="sj-qtwo">Pleural biopsy</label>
											</span>
											<span class="sj-radio">
												<input id="sj-qthree" type="radio" name="question" value="qthree">
												<label for="sj-qthree">Pleural fluid amylase</label>
											</span>
											<span class="sj-radio">
												<input id="sj-qfour" type="radio" name="question" value="qfour">
												<label for="sj-qfour">Pleural fluid cytology</label>
											</span>
										</div>
										<a class="sj-btn" href="javascript:void(0);">Submit Now</a>
									</div>
								</div>
							</div>
							<div class="sj-widget sj-widgetadd">
								<div class="sj-widgetcontent">
									<figure class="sj-addimage"><a href="javascript:void(0);"><img src="images/widget-add2.jpg" alt="image description"></a></figure>
								</div>
							</div>
						</aside>
					</div> -->
				</div>
			</div>
		</div>
	</main>
	<!--************************************
					Main End
			*************************************-->
	<!--************************************
					Footer Start
			*************************************-->
	<footer id="sj-footer" class="sj-footer sj-haslayout">
		<?php include_once('footer.php') ?>
	</footer>
	<!--************************************
					Footer End
			*************************************-->
	<!-- </div> -->
	<!--************************************
				Content Wrapper End
		*************************************-->
	<!-- </div> -->
	<!--************************************
			Wrapper End
	*************************************-->

	<!--************************************
			Search Start
	*************************************-->
	<div id="sj-searcharea" class="sj-searcharea">
		<?php include_once('search_area.php') ?>
	</div>
	<!--************************************
			Search End
	*************************************-->

</body>

<!-- Mirrored from amentotech.com/htmls/amentojourn/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2024 12:20:10 GMT -->

</html>