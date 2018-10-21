<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>ManDoPick | Update location</title>
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
                        <h3 class="m-subheader__title ">Update location</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <!--begin:: Widgets/Stats-->
                <div class="m-portlet ">
                    <div class="m-portlet__body  ">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="googleMap" style="width:100%;height:400px;"></div>
                                <form action="#">
                                    <input id="lng"  type="hidden" value="hamza">
                                    <input id="lat"  type="hidden" value="hamza">
                                    <button type="submit" class="btn btn-theme mt-3">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end:: Widgets/Stats-->

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

<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(25.246834166563975, 51.52353836422799),
            zoom: 9,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        google.maps.event.addListener(map, 'click', function (event) {
            var lang = event.latLng.lng();
            var lat = event.latLng.lat();
            document.getElementById("lng").value = lang;
            document.getElementById("lat").value = lat;
        });
        var marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(25.246834166563975, 51.52353836422799),
            icon: 'assets/marker.png'
        });
        google.maps.event.addListener(map, 'click', function (event) {
            marker.setPosition(event.latLng);
        });

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFOa0bAKntM_MjQ26P0qtPy6NeT0AcHro
&callback=myMap"></script>
<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>