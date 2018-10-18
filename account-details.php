<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>ManDoPick | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <?php include 'style.php' ?>
    <link href="assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

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
                        <h3 class="m-subheader__title text-capitalize ">Account Details </h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-12">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Details
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body single-order">
                                <!--begin::Form-->
                                <div class="m-timeline-3 delegate-information">
                                    <div class="m-timeline-3__items">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                                    <div class="m-timeline-3__item-desc">
                                                 <span class="m-timeline-3__item-user-name">
                                                    <span class="m-link m-link--metal m-timeline-3__item-link">
                                                        Name:
                                                    </span>
                                                </span>
                                                        <br>
                                                        <span class="m-timeline-3__item-text">
                                                    Hamza Abo aitah
                                                </span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="m-timeline-3__item m-timeline-3__item--warning">
                                                    <div class="m-timeline-3__item-desc">
                                                 <span class="m-timeline-3__item-user-name">
                                                    <span class="m-link m-link--metal m-timeline-3__item-link">
                                                        Phone:
                                                    </span>
                                                </span>
                                                        <br>
                                                        <span class="m-timeline-3__item-text">
                                                    0123456789
                                                </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="m-timeline-3__item m-timeline-3__item--brand">
                                                    <div class="m-timeline-3__item-desc">
                                                <span class="m-timeline-3__item-user-name">
                                                    <span class="m-link m-link--metal m-timeline-3__item-link">
                                                        Email:
                                                    </span>
                                                </span>
                                                        <br>
                                                        <span class="m-timeline-3__item-text">
                                                    info@hotmail.com
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="m-timeline-3__item m-timeline-3__item--success">
                                                    <div class="m-timeline-3__item-desc">
                                                    <span class="m-timeline-3__item-user-name">
                                                        <span class="m-link m-link--metal m-timeline-3__item-link">
                                                            Car type
                                                        </span>
                                                    </span>
                                                        <br>
                                                        <span class="m-timeline-3__item-text">
                                                        mercedes
                                                    </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="m-timeline-3__item m-timeline-3__item--danger">
                                                    <div class="m-timeline-3__item-desc">
                                                        <span class="m-timeline-3__item-text d-block pt-2">
                                                            Personal picture
                                                        </span>
                                                    </div>
                                                </div>
                                                <img class="img-fluid" src="assets/pic.jpg" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="m-timeline-3__item m-timeline-3__item--metal">
                                                    <div class="m-timeline-3__item-desc">
                                                        <span class="m-timeline-3__item-text d-block pt-2">
                                                            Identity picture
                                                        </span>
                                                    </div>
                                                </div>
                                                <img class="img-fluid" src="assets/pic.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="m-timeline-3__item m-timeline-3__item--danger">
                                                    <div class="m-timeline-3__item-desc">
                                                        <span class="m-timeline-3__item-text d-block pt-2">
                                                            Driving License Pic
                                                        </span>
                                                    </div>
                                                </div>
                                                <img class="img-fluid" src="assets/pic.jpg" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="m-timeline-3__item m-timeline-3__item--metal">
                                                    <div class="m-timeline-3__item-desc">
                                                        <span class="m-timeline-3__item-text d-block pt-2">
                                                            Vehicle Registration Pic
                                                        </span>
                                                    </div>
                                                </div>
                                                <img class="img-fluid" src="assets/pic.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="#" class="mt-4">
                                                    <button type="submit" class="btn btn-success">Run the account</button>
                                                    <button type="submit" class="btn btn-warning text-white">Stop the account</button>
                                                    <button type="submit" class="btn btn-danger m_sweetalert_demo_8">Delete account</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Form-->
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

<!--begin::Page Vendors -->
<script>
    //== Class definition
    var SweetAlert2Demo = function() {

        //== Demos
        var initDemos = function() {


            $('.m_sweetalert_demo_8').click(function(e) {
                var delll = this;
                swal({
                    title: 'Are you sure?',
                    text: "You won't Delete this account!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then(function(result){
                    if (result.value) {
                        swal(
                            'Deleted!',
                            'Your file has been Disabled.',
                            'success',

                        )
                        // result.dismiss can be 'cancel', 'overlay',
                        // 'close', and 'timer'
                    } else if (result.dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                });
            });
        };

        return {
            //== Init
            init: function() {
                initDemos();
            },
        };
    }();

    //== Class Initialization
    jQuery(document).ready(function() {
        SweetAlert2Demo.init();
    });

</script>
</body>

<!-- end::Body -->
</html>