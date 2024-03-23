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
							<li><a href="javascript:void(0);">Submit Your Article</a></li>
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
										<img src="images/thumbnails/img-02.png" alt="image description">
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
						<div id="sj-content" class="sj-content">
							<div class="sj-addarticleholdcontent">
								<div class="sj-dashboardboxtitle">
									<h2 class="text-center">Add New Email Templates</h2>
								</div>
								<div class="row">
									<div class="col-md-6 d-flex align-items-center">
										<p class="px-4 text-justify">The Journal will provide two templates. One template is for Title Page where the authors will put the title of the manuscript, name of author(s), affiliation of author(s), abstract, keyword and biography. The second one is to write the contents of the article without marking there any information of the author(s). There the author(s) will give the title of the article, the abstract, the keyword and then the article from introduction to references. The editorial board will provide the templates in .docx and .tex format. The style and size of abstract, heading, subheading, equation, figures and references would be outlined in the template. The author(s) have to submit their final article using that template. </p>
									</div>
									<form class="sj-formtheme sj-formaddtemplates col-md-6">
										<fieldset>
											<div class="form-group">
												<input type="text" name="title" class="form-control" placeholder="Add Email Title Here">
											</div>
											<div class="form-group">
												<textarea class="form-control" placeholder="Add Email Description"></textarea>
											</div>
											<div class="form-group">
												<button class="sj-btn sj-btnactive">Update Now</button>
												<button class="sj-btncancel">Cancel</button>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
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

<!-- Mirrored from amentotech.com/htmls/amentojourn/addtemplates.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2024 12:22:06 GMT -->

</html>