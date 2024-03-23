<div class="mx-md-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="sj-navigationarea">
                <strong class="sj-logo"><a href="index.php"><img src="images/logo.png" alt="company logo here"></a></strong>
                <div class="sj-rightarea">
                    <nav id="sj-nav" class="sj-nav navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="lnr lnr-menu"></i>
                        </button>
                        <div class="collapse navbar-collapse sj-navigation" id="navbarNav">
                            <ul>
                                <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'current-menu-item' : ''; ?>">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="menu-item-has-children page_item_has_children <?php echo (basename($_SERVER['PHP_SELF']) == 'aboutus.php') || (basename($_SERVER['PHP_SELF']) == 'authorguideline.php') || (basename($_SERVER['PHP_SELF']) == 'reviewer_guideline.php') || (basename($_SERVER['PHP_SELF']) == 'template.php' || (basename($_SERVER['PHP_SELF']) == 'editorial_board.php')) ? 'current-menu-item' : ''; ?>">
                                    <a href="javascript:void(0);">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'aboutus.php' ? 'active' : ''; ?>" href="aboutus.php">About The Journal</a></li>
                                        <li><a class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'authorguideline.php' ? 'active' : ''; ?>" href="authorguideline.php">Author Guidelines</a></li>
                                        <li><a class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'reviewer_guideline.php' ? 'active' : ''; ?>" href="reviewer_guideline.php">Guide To Reviewers</a></li>
                                        <li><a class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'template.php' ? 'active' : ''; ?>" href="template.php">Templates</a></li>
                                        <li><a class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'editorial_board.php' ? 'active' : ''; ?>" href="editorial_board.php">Editorial Board</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children page_item_has_children <?php echo (basename($_SERVER['PHP_SELF']) == 'current_issue.php') || (basename($_SERVER['PHP_SELF']) == 'previous_issue.php') ? 'current-menu-item' : ''; ?>">
                                    <a href="javascript:void(0);">Published Volume</a>
                                    <ul class="sub-menu">
                                        <li><a class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'current_issue.php' ? 'active' : ''; ?>" href="current_issue.php">Current Issue</a></li>
                                        <li><a class="dropdown-item <?php echo basename($_SERVER['PHP_SELF']) == 'previous_issue.php' ? 'active' : ''; ?>" href="previous_issue.php">Previous Issue</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>
                    <!-- <a class="sj-btntopsearch" href="#sj-searcharea"><i class="lnr lnr-magnifier"></i></a> -->
                    <a class="sj-btn sj-btnactive" href="login.php">Submit Your Article</a>
                </div>
            </div>
        </div>
    </div>
</div>