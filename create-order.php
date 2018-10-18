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
                        <h3 class="m-subheader__title text-capitalize ">Create new order </h3>
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
                                            Create order
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin::Form-->
                                <form class="m-form m-form--fit m-form--label-align-right" id="m_form_1">
                                    <div class="m-form__content">
                                        <div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert" id="m_form_1_msg">
                                            <div class="m-alert__icon">
                                                <i class="la la-warning"></i>
                                            </div>
                                            <div class="m-alert__text">
                                                Oh snap! Change a few things up and try submitting again.
                                            </div>
                                            <div class="m-alert__close">
                                                <button type="button" class="close" data-close="alert" aria-label="Close">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-5">
                                        <div class="col-lg-6">
                                            <div class="form-group m-form__group">
                                                <label for="r-name">Recipient name</label>
                                                <input type="text" required class="form-control m-input m-input--air" id="r-name"
                                                       name="r-namer" aria-describedby="r-name"
                                                       placeholder="Enter Recipient name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group m-form__group">
                                                <label for="o-type">Order Type</label>
                                                <input type="text" required class="form-control m-input m-input--air" id="o-type"
                                                       name="o-type" aria-describedby="o-type"
                                                       placeholder="Enter Order Type">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group m-form__group mt-3">
                                                <label for="r-location">Receiving location</label>
                                                <input type="text" required class="form-control m-input m-input--air" id="r-location"
                                                       name="r-location" aria-describedby="r-location"
                                                       placeholder="Enter Receiving location">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group m-form__group mt-3">
                                                <label for="d-location">Delivery location</label>
                                                <input type="text" required class="form-control m-input m-input--air" id="d-location"
                                                       name="d-location" aria-describedby="d-location"
                                                       placeholder="Enter Delivery location">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group m-form__group mt-3">
                                                <label for="r-phone">Recipient's phone</label>
                                                <input type="text" required class="form-control m-input m-input--air" id="r-phone"
                                                       name="r-phone" aria-describedby="r-phone"
                                                       placeholder="Enter Recipient's phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group m-form__group mt-3">
                                                <label for="exampleSelect1">Order status</label>
                                                <select required class="form-control m-input m-input--air" id="exampleSelect1">
                                                    <option value=""></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group m-form__group mt-3">
                                                <label for="exampleTextarea">Order details</label>
                                                <textarea class="form-control m-input m-input--air" id="exampleTextarea" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="m-portlet__foot m-portlet__foot--fit mt-3">
                                        <div class="m-form__actions">
                                            <button type="submit" class="btn btn-theme">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
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
<script src="assets/demo/custom/crud/forms/validation/form-controls.js"></script>
<!--end::Page Vendors -->
</body>

<!-- end::Body -->
</html>