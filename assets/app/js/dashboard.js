//== Class definition
var Dashboard = function() {

        // Dashboard 1 Morris-chart
        Morris.Area({
            element: 'morris-area-chart'
            , data: [{
                period: '2018-02'
                , complete: 50
                , Underway: 80

            }, {
                period: '2018-03'
                , complete: 130
                , Underway: 100

            }, {
                period: '2018-04'
                , complete: 80
                , Underway: 60

            }, {
                period: '2018-05'
                , complete: 70
                , Underway: 200

            }, {
                period: '2018-06'
                , complete: 180
                , Underway: 150
            }, {
                period: '2018-07'
                , complete: 105
                , Underway: 100
            }
                , {
                    period: '2018-08'
                    , complete: 250
                    , Underway: 150
                }]
            , xkey: 'period'
            , ykeys: ['complete', 'Underway']
            , labels: ['complete', 'Underway']
            , pointSize: 2
            , fillOpacity: 0
            , pointStrokeColors: ['#00bfc7', '#fb9678']
            , behaveLikeLine: true
            , gridLineColor: '#e0e0e0'
            , lineWidth: 2
            , hideHover: 'auto'
            , lineColors: ['#00bfc7', '#fb9678']
            , resize: true
        });

}();
