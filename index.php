<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>ManDoPick | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <?php include 'style.php' ?>

    <!--begin::Page Vendors Styles -->


</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <?php include "header.php" ?>
    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <?php include "asideMenu.php" ?>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">Dashboard</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <!--begin:: Widgets/Stats-->
                <div class="m-portlet ">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-md-12 col-lg-4">

                                <!--begin::Total Profit-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            Waiting requests
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-brand">
													150
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-brand" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::Total Profit-->
                            </div>
                            <div class="col-md-12 col-lg-4">

                                <!--begin::New Feedbacks-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            Request Underway
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-info">
													47
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-info" role="progressbar" style="width: 100%;"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Feedbacks-->
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <!--begin::New Orders-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            Complete Request
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-success">
													250
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-success" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::New Orders-->
                            </div>
                        </div>
                    </div>
                </div>

            <!--end:: Widgets/Stats-->
            <div class="row">
                <div class="col-12">
                    <div class="m-portlet m-portlet--full-height ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text text-capitalize">
                                        Order statistics compared to months
                                    </h3>
                                </div>
                            </div>
                            <div class="ml-auto">
                                <ul class="list-inline font-12 cart1-list">
                                    <li class="list-inline-item"><i class="fa fa-circle text-cyan"></i> complete</li>
                                    <li class="list-inline-item"><i class="fa fa-circle text-pink"></i> Underway</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div id="morris-area-chart" style="height: 340px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Body -->

<!-- begin::Footer -->
<?php include "footer.php" ?>
<!-- end::Footer -->
</div>

<!-- end:: Page -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<?php include "javascript.php" ?>

<!--begin::Page Scripts -->
<script src="vendors/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/app/js/dashboard.js" type="text/javascript"></script>


<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>