<div class="sj-borderheading">
	<h3>All Issues</h3>
	<a class="sj-btnview" href="current_issue.php">Current</a>
	<a class="sj-btnview" href="previous_issue.php">Previous</a>
</div>
<div class="sj-previousissues col-12">
	<!-- <div class="card mt-2 shadow p-3 mb-5 bg-body rounded">
		<div class="card-header text-center">
			<h3 class="text-danger fw-bold"><i>All Volumes & Issues</i></h3>
		</div>

		<div class="card-body"> -->

	<?php
	// last paper ta je issue, and volume e publish hoise oi volume and issue er sokol paper show korte hobe. seta select korar jonno update_at column use korte hobe. karon ekbar paper publish hoye gele tar update_at ar change hobe na.
	$select_new_paper = "SELECT DISTINCT volume_info,issue_info FROM `new_paper` WHERE `published_status` = '1' ORDER BY `updated_at` DESC";
	// $select_new_paper1 = "SELECT updated_at FROM `new_paper` WHERE `published_status` = '1' ORDER BY `updated_at`";
	$run_select_new_paper = mysqli_query($conn, $select_new_paper);
	// $run_select_new_paper1 = mysqli_query($conn, $select_new_paper1);

	if (mysqli_num_rows($run_select_new_paper) > 0) {
	?>
		<div class="row justify-content-center">
			<?php
			while ($row = mysqli_fetch_assoc($run_select_new_paper)) {
				// $row1 = mysqli_fetch_assoc($run_select_new_paper1);
				$issue_info = $row['issue_info'];
				$volume_info = $row['volume_info'];

				// $issue_year = date("Y", strtotime($row1['updated_at']));
			?>

				<div class="col-lg-4 col-md-4 col-12 mt-3 ">
					<div class="card">
						<div class="card-header text-white">
							<h5 class="text-center">Volume Number: <span style="font-weight: bolder;"><?php echo $row['volume_info'] ?></span></h5>
							<h5 class="text-center">Issue Number: <span style="font-weight: bolder;"><?php echo $row['issue_info'] ?></span></h5>
						</div>
						<a class="btn btn-primary fw-bold " href="all_papers_volume_issue_wise.php?volume_info=<?php echo $row['volume_info'] ?>&issue_info=<?php echo $row['issue_info'] ?>">View
							Details</a>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	<?php

	} else {
		echo "<h1 class = 'text-center text-danger' >No Volumes and Issues Found</h1>";
	}
	?>

	<!-- </div>
	</div> -->
	<!-- <ul class="sj-navtabs nav col-md-2 mt-5" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="<?php echo $issue_year; ?>-tab" data-toggle="tab" href="#<?php echo $issue_year; ?>" role="tab" aria-controls="<?php echo $issue_year; ?>" aria-selected="true">Issues From: <span><?php echo $issue_year; ?></span></a>
		</li>
	</ul> -->
	<!-- <div class="sj-tabcontent tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="<?php echo $issue_year; ?>" role="tabpanel" aria-labelledby="<?php echo $issue_year; ?>-tab">
			<div id="sj-issuesslider-<?php echo $issue_year; ?>" data-my-variable="<?php echo $issue_year; ?>" class="sj-issuesslider owl-carousel">
				<div class="item">
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-04.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
								<h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
							</div>
						</div>
					</article>
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-05.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Kimberly Delapena</a></span>
								<h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
							</div>
						</div>
					</article>
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-06.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Milan Poat</a></span>
								<h3><a href="javascript:void(0);">Emergency Legal Authority &amp; the Crisis</a></h3>
							</div>
						</div>
					</article>
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-07.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Camilla Hofstetter</a></span>
								<h3><a href="javascript:void(0);">Talaromyces marneffei Infection</a></h3>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div class="tab-pane fade show" id="2023" role="tabpanel" aria-labelledby="2023-tab">
			<div id="sj-issuesslider-2023" class="sj-issuesslider-2023 sj-issuesslider owl-carousel">
				<div class="item">
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-04.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
								<h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
							</div>
						</div>
					</article>
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-05.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Kimberly Delapena</a></span>
								<h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
							</div>
						</div>
					</article>
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-06.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Milan Poat</a></span>
								<h3><a href="javascript:void(0);">Emergency Legal Authority &amp; the Crisis</a></h3>
							</div>
						</div>
					</article>
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-07.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Camilla Hofstetter</a></span>
								<h3><a href="javascript:void(0);">Talaromyces marneffei Infection</a></h3>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div class="tab-pane fade show" id="2022" role="tabpanel" aria-labelledby="2022-tab">
			<div id="sj-issuesslider-2022" class="sj-issuesslider-2022 sj-issuesslider owl-carousel">
				<div class="item">
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-04.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Coleman Hoff</a></span>
								<h3><a href="javascript:void(0);">Toward Better-Quality Compounded Drugs</a></h3>
							</div>
						</div>
					</article>
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-05.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Kimberly Delapena</a></span>
								<h3><a href="javascript:void(0);">Swallowing a Spy</a></h3>
							</div>
						</div>
					</article>
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-06.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Milan Poat</a></span>
								<h3><a href="javascript:void(0);">Emergency Legal Authority &amp; the Crisis</a></h3>
							</div>
						</div>
					</article>
					<article class="sj-post sj-editorchoice sj-smallpost">
						<figure class="sj-postimg">
							<img src="images/editorchoice/img-07.jpg" alt="image description">
						</figure>
						<div class="sj-postcontent">
							<div class="sj-head">
								<span class="sj-username"><a href="javascript:void(0);">Camilla Hofstetter</a></span>
								<h3><a href="javascript:void(0);">Talaromyces marneffei Infection</a></h3>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
</div> -->
</div>