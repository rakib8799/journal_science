<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
<h2 class="text-center">Our Features</h2>
<div class="row mt-3">
    <?php $details = ""; ?>
    <div class="col-lg-4 col-sm-6 pb-5">
        <?php $details = "This journal provides immediate open access to its content on the principle that making research freely available to the public supports a greater global exchange of knowledge." ?>
        <a class="card" href="#" style="min-height: 30vh;">
            <!-- <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user fa-3x head-icon"></i></div> -->
            <div class="card-body text-center">
                <i class="fa fa-user fa-3x head-icon"></i>
                <h3 class="card-title pt-1">Open Access Policy</h3>
                <p class="text-dark"><?php if (strlen($details) < 100) {
                                            echo $details;
                                        } else {
                                            echo (mb_substr($details, 0, 99) . "...");
                                        ?>
                    <?php
                                        } ?>
                </p>
                <span class="text-sm text-uppercase font-weight-bold" type="button" data-toggle="modal" data-target="#exampleModal1">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 pb-5">
        <?php $details = "The faculty will publish two issues of the journal per year. Printed version of the Journal will be published at least once a year." ?>
        <a class="card" href="#" style="min-height: 30vh;">
            <!-- <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user-circle-o fa-3x head-icon"></i></div> -->
            <div class="card-body text-center">
                <i class="fa fa-user-circle-o fa-3x head-icon"></i>
                <h3 class="card-title pt-1">Frequency</h3>
                <p class="text-dark"><?php if (strlen($details) < 100) {
                                            echo $details;
                                        } else {
                                            echo (mb_substr($details, 0, 99) . "...");
                                        ?>
                    <?php
                                        } ?>
                </p>
                <span class="text-sm text-uppercase font-weight-bold" type="button" data-toggle="modal" data-target="#exampleModal2">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 pb-5">
        <?php $details = "1. Authors are expected to present the entirely original piece and should cite or mention in references if content or words of other articles are used." ?>
        <a class="card" href="#" style="min-height: 30vh;">
            <!-- <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-address-book fa-3x head-icon"></i></div> -->
            <div class="card-body text-center">
                <i class="fa fa-address-book fa-3x head-icon"></i>
                <h3 class="card-title pt-1">Novelty and Plagiarism</h3>
                <p class="text-dark">
                    <?php if (strlen($details) < 100) {
                        echo $details;
                    } else {
                        echo (mb_substr($details, 0, 99) . "...");
                    ?>
                    <?php
                    } ?>
                </p>
                <span class="text-sm text-uppercase font-weight-bold" type="button" data-toggle="modal" data-target="#exampleModal3">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 pb-5">
        <?php $details = "1. Authors are expected to submit the original research articles for peer review, and accept the global access of their work." ?>
        <a class="card" href="#" style="min-height: 30vh;">
            <!-- <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-car fa-3x head-icon"></i></div> -->
            <div class="card-body text-center">
                <i class="fa fa-car fa-3x head-icon"></i>
                <h3 class="card-title pt-1">Data Access and Retention</h3>
                <p class="text-dark">
                    <?php if (strlen($details) < 100) {
                        echo $details;
                    } else {
                        echo (mb_substr($details, 0, 99) . "...");
                    ?>
                    <?php
                    } ?>
                </p>
                <span class="text-sm text-uppercase font-weight-bold" type="button" data-toggle="modal" data-target="#exampleModal4">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 pb-5">
        <?php $details = "1. During the study whatever sources were accessed and used must be mentioned in the article for publication." ?>
        <a class="card" href="#" style="min-height: 30vh;">
            <!-- <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-camera fa-3x head-icon"></i></div> -->
            <div class="card-body text-center">
                <i class="fa fa-camera fa-3x head-icon"></i>
                <h3 class="card-title pt-1">Acknowledgement of Sources</h3>
                <p class="text-dark">
                    <?php if (strlen($details) < 100) {
                        echo $details;
                    } else {
                        echo (mb_substr($details, 0, 99) . "...");
                    ?>
                    <?php
                    } ?>
                </p><span class="text-sm text-uppercase font-weight-bold" type="button" data-toggle="modal" data-target="#exampleModal5">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 pb-5">
        <?php $details = "1. All authors should disclose in their manuscript any financial or other substantive conflict of interest that might be construed to influence the results or interpretation of their manuscript." ?>
        <a class="card" href="#" style="min-height: 30vh;">
            <!-- <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-image fa-3x head-icon"></i></div> -->
            <div class="card-body text-center">
                <i class="fa fa-image fa-3x head-icon"></i>
                <h3 class="card-title pt-1">Conflict of Interest</h3>
                <p class="text-dark">
                    <?php if (strlen($details) < 100) {
                        echo $details;
                    } else {
                        echo (mb_substr($details, 0, 99) . "...");
                    ?>
                    <?php
                    } ?>
                </p><span class="text-sm text-uppercase font-weight-bold" type="button" data-toggle="modal" data-target="#exampleModal6">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div>
        </a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Open Access Policy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This journal provides immediate open access to its content on the principle that making research freely available to the public supports a greater global exchange of knowledge.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Frequency</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>The faculty will publish two issues of the journal per year. Printed version of the Journal will be published at least once a year.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Novelty and Plagiarism</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>
                            Authors are expected to present the entirely original piece and should cite or mention in references if content or words of other articles are used.
                        </li>
                        <li>
                            Every author will be held responsible for the performance and fulfillment with the policy to avoid malpractices and breach of ethical standards of publication.<br>
                            Authors should assure that the piece of knowledge ready for publication is original copy and have not been published anywhere earlier and is not in consideration for publication anywhere else.
                        </li>
                        <li>
                            Authors should accept and correct the mistakes and consider the suggestions given by the panel of reviewers.
                        </li>
                        <li>
                            Authors should bring in knowledge of editor the corrections and retraction of mistakes or error if have identified even after publication.
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Data Access and Retention</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>
                            Authors are expected to submit the original research articles for peer review, and accept the global access of their work.
                        </li>
                        <li>
                            Authors should in any event be prepared to retain such data for a reasonable time after publication.
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Acknowledgement of Sources</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>
                            During the study whatever sources were accessed and used must be mentioned in the article for publication.
                        </li>
                        <li>
                            Authors must cite and mention in references if the content of some other research work influences the reported work.
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel6">Conflict of Interest</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>
                            All authors should disclose in their manuscript any financial or other substantive conflict of interest that might be construed to influence the results or interpretation of their manuscript.
                        </li>
                        <li>
                            All sources of financial support for the project should be disclosed.
                        </li>
                        <li>
                            Examples of potential conflicts of interest which should be disclosed include employment, consultancies, stock ownership, honoraria, paid expert testimony, patent applications/registrations, and grants or other funding. Potential conflicts of interest should be disclosed at the earliest stage possible.
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
</div>