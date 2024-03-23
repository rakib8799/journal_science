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
						<div id="sj-content" class="sj-content sj-addarticleholdcontent sj-addarticleholdvtwo">
							<div class="sj-dashboardboxtitle sj-titlewithform">
								<h2>Manage Editions</h2>
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
							<div class="sj-manageallsession">
								<form class="sj-formtheme sj-managesessionform">
									<fieldset>
										<div class="form-group">
											<button type="button" class="sj-btn sj-btnactive" data-toggle="modal" data-target="#reviewermodal">Add New Edition</button>
										</div>
										<div class="form-group sj-inputwithicon float-right">
											<i class="lnr lnr-sync"></i>
											<span class="sj-select">
												<select data-placeholder="All" name="locations">
													<option value="">Sort By</option>
													<option value="aberdeen">Sort By1</option>
													<option value="aldershot">Sort By2</option>
													<option value="altrincham">Sort By</option>
													<option value="aylesbury">Sort By4</option>
												</select>
											</span>
										</div>
									</fieldset>
								</form>
								<ul class="sj-allcategorys">
									<li class="sj-categorysinfo">
										<div class="sj-title">
											<h3>Ismael Sponaugle <span class="sj-assignedinfo" data-toggle="modal" data-target="#feedbackmodal">( 02 Categories Assigned )</span></h3>
										</div>
										<div class="sj-categorysrightarea">
											<a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
											<a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
										</div>
									</li>
									<li class="sj-categorysinfo">
										<div class="sj-title">
											<h3>Kimber Gutierrez <span class="sj-assignedinfo" data-toggle="modal" data-target="#feedbackmodal">( 02 Categories Assigned )</span></h3>
										</div>
										<div class="sj-categorysrightarea">
											<a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
											<a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
										</div>
									</li>
									<li class="sj-categorysinfo sj-deleteuser">
										<div class="sj-title">
											<h3>Melina Schrum <span class="sj-assignedinfo" data-toggle="modal" data-target="#feedbackmodal">( 02 Categories Assigned )</span></h3>
										</div>
										<div class="sj-deletenotifications">
											<span>Are you sure you want to delete this category?</span>
											<ul class="sj-deletewarning">
												<li><a href="javascript:void(0);">YES</a></li>
												<li><a href="javascript:void(0);">NO</a></li>
											</ul>
										</div>
									</li>
									<li class="sj-categorysinfo">
										<div class="sj-title">
											<h3>Carmine Stradford <span>None</span></h3>
										</div>
										<div class="sj-categorysrightarea">
											<a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
											<a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
										</div>
									</li>
									<li class="sj-categorysinfo">
										<div class="sj-title">
											<h3>Ciara Doherty <span class="sj-assignedinfo" data-toggle="modal" data-target="#feedbackmodal">( 02 Categories Assigned )</span></h3>
										</div>
										<div class="sj-categorysrightarea">
											<a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
											<a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
										</div>
									</li>
									<li class="sj-categorysinfo">
										<div class="sj-title">
											<h3>Samatha Erikson <span>None</span></h3>
										</div>
										<div class="sj-categorysrightarea">
											<a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
											<a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
										</div>
									</li>
									<li class="sj-categorysinfo">
										<div class="sj-title">
											<h3>Denna Evens <span>None</span></h3>
										</div>
										<div class="sj-categorysrightarea">
											<a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
											<a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
										</div>
									</li>
									<li class="sj-categorysinfo">
										<div class="sj-title">
											<h3>Hosea Hash <span class="sj-assignedinfo" data-toggle="modal" data-target="#feedbackmodal">( 02 Categories Assigned )</span></h3>
										</div>
										<div class="sj-categorysrightarea">
											<a href="javascript:void(0);" class="sj-pencilbtn"><i class="ti-pencil"></i></a>
											<a href="javascript:void(0);" class="sj-trashbtn"><i class="ti-trash"></i></a>
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

<!-- Mirrored from amentotech.com/htmls/amentojourn/manageeditions.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2024 12:22:07 GMT -->

</html>