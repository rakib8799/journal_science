<?php include_once('linker.php') ?>

<body>
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
					Inner Banner Start
			*************************************-->
	<div class="sj-innerbanner">
		<div class="mx-md-5">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="sj-innerbannercontent">
						<h1>Submit Your Article</h1>
						<ol class="sj-breadcrumb">
							<li><a href="javascript:void(0);">Home</a></li>
							<li><a href="javascript:void(0);">Submit Your Aticle</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
					Inner Banner End
			*************************************-->
	<!--************************************
					Main Start
			*************************************-->
	<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
		<div class="mx-md-5">
			<div class="row">
				<div id="sj-twocolumns" class="sj-twocolumns">
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 float-left">
						<aside id="sj-asidebar" class="sj-asidebar sj-widgetbox">
							<div class="sj-widgetprofile">
								<div class="sj-widgetcontent">
									<figure>
										<img src="images/thumbnails/img-01.jpg" alt="image description">
										<a class="sj-btnedite" href="javascript:void(0);"><i class="lnr lnr-pencil"></i></a>
									</figure>
									<div class="sj-admininfo">
										<h3>Racheal Maresca</h3>
										<h4>Author</h4>
									</div>
								</div>
							</div>
							<div class="sj-widgetdashboard">
								<nav id="sj-dashboardnav" class="sj-dashboardnav">
									<ul>
										<li><a href="underreview.html"><i class="lnr lnr-sync"></i> <span>Articles Under Review</span></a></li>
										<li><a href="addtemplates.html"><i class="lnr lnr-briefcase"></i> <span>Add Templates</span></a></li>
										<li><a href="aticle-list.html"><i class="lnr lnr-sync"></i> <span>Aticle List</span></a></li>
										<li><a href="generalsettings.html"><i class="lnr lnr-layers"></i> <span>General Settings</span></a></li>
										<li><a href="manageuser.html"><i class="lnr lnr-users"></i> <span>Manage Users</span></a></li>
										<li><a href="manageeditions.html"><i class="lnr lnr-tag"></i> <span>Manage Editions</span></a></li>
										<li><a href="emailtemplates.html"><i class="lnr lnr-envelope"></i> <span>Email Templates</span></a></li>
										<li><a href="accountsettings.html"><i class="lnr lnr-lock"></i> <span>Account Settings</span></a></li>
										<li><a href="loginregister.html"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
									</ul>
								</nav>
							</div>
						</aside>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 float-right">
						<div id="sj-content" class="sj-content sj-addarticleholdcontent">
							<div class="sj-dashboardboxtitle sj-titlewithform">
								<h2>Articles Under Review</h2>
								<form class="sj-formtheme sj-formsearchvtwo">
									<div class="sj-sortupdown">
										<a href="javascript:void(0);"><i class="fa fa-sort-amount-up"></i></a>
									</div>
									<fieldset>
										<input type="search" name="search" class="form-control" placeholder="Search here">
										<button type="submit" class="sj-btnsearch"><i class="lnr lnr-magnifier"></i></button>
									</fieldset>
								</form>
							</div>
							<ul id="accordion" class="sj-articledetails sj-articledetailsvtwo">
								<li id="headingOne" class="sj-articleheader" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<div class="sj-detailstime">
										<span><i class="ti-calendar"></i>Jun 27, 2018 11:30</span>
										<span><i class="ti-layers"></i>Category Title</span>
										<span><i class="ti-bookmark"></i>ID: KW7Q3fxfAB</span>
										<span><i class="ti-bookmark-alt"></i>Edition</span>
										<h4>4 Ways You Can Grow Your Creativity Using technology</h4>
									</div>
									<div class="sj-nameandmail">
										<span>Corresponding Author</span>
										<h4>Aleen Mosour</h4>
										<span class="sj-mailinfo">aleen@domainurl.com</span>
									</div>
								</li>
								<li id="collapseOne" class="collapse sj-active sj-userinfohold" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="sj-userinfoimgname">
										<figure class="sj-userinfimg">
											<img src="images/thumbnails/img-02.jpg" alt="img description">
										</figure>
										<div class="sj-userinfoname">
											<span>04 days ago on Monday at 14:49</span>
											<h3>Aleen Monsour (You)</h3>
										</div>
										<div class="sj-userbtnarea">
											<button type="button" class="sj-btn sj-btnactive" data-toggle="modal" data-target="#reviewermodal">Assign Reviewer</button>
											<button type="submit" class="sj-btn" data-toggle="modal" data-target="#feedbackmodal">Send Feedback</button>
										</div>
										<div class="sj-description">
											<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etnalo doloreae magna aliqua enim ad minim veniam quis natrud exercitation ullamco laboris nisi utna aliquip amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
										</div>
										<div class="sj-downloadheader">
											<div class="sj-title">
												<h3>Attached Document</h3>
												<a href="javascript:void(0);"><i class="lnr lnr-download"></i>Download</a>
											</div>
											<div class="sj-docdetails">
												<figure class="sj-docimg">
													<img src="images/thumbnails/doc-img.jpg" alt="img description">
												</figure>
												<div class="sj-docdescription">
													<h4>Document Ph...01.docx</h4>
													<span>File Size 500kb</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li id="headingtwo" class="sj-articleheader" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
									<div class="sj-detailstime">
										<span><i class="ti-calendar"></i>Jun 27, 2018 11:30</span>
										<span><i class="ti-layers"></i>Category Title</span>
										<span><i class="ti-bookmark"></i>ID: KW7Q3fxfAB</span>
										<span><i class="ti-bookmark-alt"></i>Edition</span>
										<h4>Listen To Your Customers. They Will Tell You All About TECHNOLOGY</h4>
									</div>
									<div class="sj-nameandmail">
										<span>Corresponding Author</span>
										<h4>Aleen Mosour</h4>
										<span class="sj-mailinfo">aleen@domainurl.com</span>
									</div>
								</li>
								<li id="collapsetwo" class="collapse sj-active sj-userinfohold" aria-labelledby="headingtwo" data-parent="#accordion">
									<div class="sj-userinfoimgname">
										<figure class="sj-userinfimg">
											<img src="images/thumbnails/img-02.jpg" alt="img description">
										</figure>
										<div class="sj-userinfoname">
											<span>04 days ago on Monday at 14:49</span>
											<h3>Aleen Monsour (You)</h3>
										</div>
										<div class="sj-userbtnarea">
											<button type="button" class="sj-btn sj-btnactive" data-toggle="modal" data-target="#reviewermodal">Assign Reviewer</button>
											<button type="submit" class="sj-btn" data-toggle="modal" data-target="#feedbackmodal">Send Feedback</button>
										</div>
										<div class="sj-description">
											<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etnalo doloreae magna aliqua enim ad minim veniam quis natrud exercitation ullamco laboris nisi utna aliquip amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
										</div>
										<div class="sj-downloadheader">
											<div class="sj-title">
												<h3>Attached Document</h3>
												<a href="javascript:void(0);"><i class="lnr lnr-download"></i>Download</a>
											</div>
											<div class="sj-docdetails">
												<figure class="sj-docimg">
													<img src="images/thumbnails/doc-img.jpg" alt="img description">
												</figure>
												<div class="sj-docdescription">
													<h4>Document Ph...01.docx</h4>
													<span>File Size 500kb</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li id="headingthree" class="sj-articleheader" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
									<div class="sj-detailstime">
										<span><i class="ti-calendar"></i>Jun 27, 2018 11:30</span>
										<span><i class="ti-layers"></i>Category Title</span>
										<span><i class="ti-bookmark"></i>ID: KW7Q3fxfAB</span>
										<span><i class="ti-bookmark-alt"></i>Edition</span>
										<h4>4 Ways You Can Grow Your Creativity Using technology</h4>
									</div>
									<div class="sj-nameandmail">
										<span>Corresponding Author</span>
										<h4>Aleen Mosour</h4>
										<span class="sj-mailinfo">aleen@domainurl.com</span>
									</div>
								</li>
								<li id="collapsethree" class="collapse sj-active sj-userinfohold" aria-labelledby="headingthree" data-parent="#accordion">
									<div class="sj-userinfoimgname">
										<figure class="sj-userinfimg">
											<img src="images/thumbnails/img-02.jpg" alt="img description">
										</figure>
										<div class="sj-userinfoname">
											<span>04 days ago on Monday at 14:49</span>
											<h3>Aleen Monsour (You)</h3>
										</div>
										<div class="sj-userbtnarea">
											<button type="button" class="sj-btn sj-btnactive" data-toggle="modal" data-target="#reviewermodal">Assign Reviewer</button>
											<button type="submit" class="sj-btn" data-toggle="modal" data-target="#feedbackmodal">Send Feedback</button>
										</div>
										<div class="sj-description">
											<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etnalo doloreae magna aliqua enim ad minim veniam quis natrud exercitation ullamco laboris nisi utna aliquip amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
										</div>
										<div class="sj-downloadheader">
											<div class="sj-title">
												<h3>Attached Document</h3>
												<a href="javascript:void(0);"><i class="lnr lnr-download"></i>Download</a>
											</div>
											<div class="sj-docdetails">
												<figure class="sj-docimg">
													<img src="images/thumbnails/doc-img.jpg" alt="img description">
												</figure>
												<div class="sj-docdescription">
													<h4>Document Ph...01.docx</h4>
													<span>File Size 500kb</span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li id="headingfour" class="sj-articleheader" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
									<div class="sj-detailstime">
										<span><i class="ti-calendar"></i>Jun 27, 2018 11:30</span>
										<span><i class="ti-layers"></i>Category Title</span>
										<span><i class="ti-bookmark"></i>ID: KW7Q3fxfAB</span>
										<span><i class="ti-bookmark-alt"></i>Edition</span>
										<h4>If You Do Not (Do)TECHNOLOGY Now, You Will Hate Yourself Later</h4>
									</div>
									<div class="sj-nameandmail">
										<span>Corresponding Author</span>
										<h4>Aleen Mosour</h4>
										<span class="sj-mailinfo">aleen@domainurl.com</span>
									</div>
								</li>
								<li id="collapsefour" class="collapse sj-active sj-userinfohold" aria-labelledby="headingfour" data-parent="#accordion">
									<div class="sj-userinfoimgname">
										<figure class="sj-userinfimg">
											<img src="images/thumbnails/img-02.jpg" alt="img description">
										</figure>
										<div class="sj-userinfoname">
											<span>04 days ago on Monday at 14:49</span>
											<h3>Aleen Monsour (You)</h3>
										</div>
										<div class="sj-userbtnarea">
											<button type="button" class="sj-btn sj-btnactive" data-toggle="modal" data-target="#reviewermodal">Assign Reviewer</button>
											<button type="submit" class="sj-btn" data-toggle="modal" data-target="#feedbackmodal">Send Feedback</button>
										</div>
										<div class="sj-description">
											<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etnalo doloreae magna aliqua enim ad minim veniam quis natrud exercitation ullamco laboris nisi utna aliquip amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
										</div>
										<div class="sj-downloadheader">
											<div class="sj-title">
												<h3>Attached Document</h3>
												<a href="javascript:void(0);"><i class="lnr lnr-download"></i>Download</a>
											</div>
											<div class="sj-docdetails">
												<figure class="sj-docimg">
													<img src="images/thumbnails/doc-img.jpg" alt="img description">
												</figure>
												<div class="sj-docdescription">
													<h4>Document Ph...01.docx</h4>
													<span>File Size 500kb</span>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
							<nav class="sj-pagination">
								<ul>
									<li class="sj-prevpage"><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
									<li class="sj-active"><a href="#">01</a></li>
									<li><a href="#">02</a></li>
									<li><a href="#">03</a></li>
									<li><a href="#">04</a></li>
									<li><a href="#">05</a></li>
									<li class="sj-nextpage"><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
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
	</div>
	<!--************************************
				Content Wrapper End
		*************************************-->
	</div>
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
	<!--************************************
			Assign Reviewer	Popup Start
	*************************************-->
	<div class="sj-modalboxarea modal fade" tabindex="-1" role="dialog" id="reviewermodal">
		<?php include_once('assign_reviewer_popup.php') ?>
	</div>
	<!--************************************
			Assign Reviewer	Popup End
	*************************************-->
	<!--************************************
			Send Feedback Popup Start
	*************************************-->
	<div class="sj-modalboxarea sj-modalboxareavtwo modal fade" tabindex="-1" role="dialog" id="feedbackmodal">
		<?php include_once('send_feedback_popup.php') ?>
	</div>
	<!--************************************
			Send Feedback Popup End
	*************************************-->
</body>

<!-- Mirrored from amentotech.com/htmls/amentojourn/underreview.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2024 12:22:06 GMT -->

</html>