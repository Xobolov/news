@extends('panel.layouts.app')
@section('css')
    <!-- JVectorMap -->
    <link rel="stylesheet" href="{{asset('vendor/jvectormap/jquery-jvectormap-2.0.3.css')}}" type="text/css" media="screen" />
@endsection
@section('content')

    <div class="container-fluid">

        <!-- Section heading -->
        <div class="mt-lg-5 mb-5">

            <h4 class="text-left font-weight-bold dark-grey-text">Your business is growing</h4>

            <p class="grey-text mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

            <hr>

        </div>

        <!-- Section: Analytical panel -->
        <section class="mb-5">

            <!-- Card -->
            <div class="card card-cascade narrower">

                <!-- Section: Chart -->
                <section>

                    <!-- Grid row -->
                    <div class="row mb-4">

                        <!-- Grid column -->
                        <div class="col-xl-5 col-md-12 mr-0">

                            <!-- Card image -->
                            <div class="view view-cascade gradient-card-header light-blue lighten-1">
                                <h4 class="h4-responsive font-weight-bold mb-0 check">Visitors by country</h4>
                            </div>
                            <!-- Card image -->

                            <!-- Card content -->
                            <div class="card-body card-body-cascade pb-0">

                                <!-- Panel data -->
                                <div class="card-body pt-2">

                                    <table class="table no-header">

                                        <tbody>
                                        <tr>
                                            <td><img src="../../img/flags/us.png" class="flag mr-2"> United States</td>
                                            <td>307</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../../img/flags/in.png" class="flag mr-2"> India</td>
                                            <td>504</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../../img/flags/cn.png" class="flag mr-2"> China</td>
                                            <td>613</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../../img/flags/pl.png" class="flag mr-2"> Poland</td>
                                            <td>208</td>
                                        </tr>
                                        <tr>
                                            <td><img src="../../img/flags/it.png" class="flag mr-2"> Italy</td>
                                            <td>314</td>
                                        </tr>

                                        </tbody>

                                    </table>

                                    <button
                                        class="btn btn-flat grey lighten-3 btn-rounded waves-effect float-right font-weight-bold dark-grey-text btn-dash">View
                                        full report</button>

                                </div>
                                <!-- /Panel data -->
                            </div>

                            <!-- Card content -->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-7 col-md-12 mb-4">

                            <!-- Card image -->
                            <div class="view view-cascade gradient-card-header blue-gradient">

                                <!-- Chart -->
                                <div id="world-map" style="width: 100%; height: 400px"></div>
                            </div>

                            <!-- Card image -->
                        </div>

                        <!-- Grid column -->
                    </div>

                    <!-- Grid row -->

                    <!-- Second row -->
                    <div class="row mb-0">

                        <!-- First column -->
                        <div class="col-md-12">

                            <!-- Panel content -->
                            <div class="card-body pt-0">

                                <div class="table-responsive">

                                    <!-- Table -->
                                    <table class="table table-hover">

                                        <!-- Table head -->
                                        <thead>

                                        <tr class="rgba-stylish-strong white-text">
                                            <th>Campaign name</th>
                                            <th>Source</th>
                                            <th>Conversion rate</th>
                                            <th>Invested</th>

                                        </tr>
                                        </thead>
                                        <!-- /Table head -->

                                        <!-- Table body -->
                                        <tbody>

                                        <tr class="none-top-border">
                                            <td>Newsletter</td>
                                            <td>Newsletter</td>
                                            <td>5%</td>
                                            <td>100$</td>
                                        </tr>
                                        <tr>
                                            <td>Facebook</td>
                                            <td>Facebook</td>
                                            <td>5%</td>
                                            <td>100$</td>
                                        </tr>
                                        <tr>
                                            <td>Adwords</td>
                                            <td>Adwords</td>
                                            <td>5%</td>
                                            <td>100$</td>
                                        </tr>
                                        <tr>
                                            <td>Sponsored post</td>
                                            <td>Sponsored post</td>
                                            <td>5%</td>
                                            <td>100$</td>
                                        </tr>
                                        <tr>
                                            <td>Newsletter 2</td>
                                            <td>Newsletter 2</td>
                                            <td>5%</td>
                                            <td>100$</td>
                                        </tr>

                                        </tbody>
                                        <!-- /Table body -->
                                    </table>

                                    <!-- /Table -->
                                </div>

                            </div>
                            <!-- Panel content -->

                        </div>
                        <!-- /First column -->

                    </div>
                    <!-- /Second row -->

                </section>
                <!-- Section: Chart -->

            </div>
            <!-- Card -->

        </section>
        <!-- Section: Analytical panel -->

        <!-- Section: Cascading panels -->
        <section class="mb-5">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header deep-blue-gradient">
                            <canvas id="seo" height="155px"></canvas>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <div class="list-group list-panel">

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio <i
                                        class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                        title="Click to fix"></i></a>

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac
                                    facilisi<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                               title="Click to fix"></i></a>

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus <i
                                        class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                        title="Click to fix"></i></a>

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac consectet<i
                                        class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                        title="Click to fix"></i></a>

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at eros
                                    <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                       title="Click to fix"></i></a>
                            </div>
                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header blue-gradient">
                            <canvas id="traffic" height="155px"></canvas>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <div class="list-group list-panel">

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio <i
                                        class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                        title="Click to fix"></i></a>

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac
                                    facilisi<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                               title="Click to fix"></i></a>

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus <i
                                        class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                        title="Click to fix"></i></a>

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac consectet<i
                                        class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                        title="Click to fix"></i></a>

                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at eros
                                    <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                       title="Click to fix"></i></a>
                            </div>
                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header purple-gradient">
                            <canvas id="conversion" height="155px"></canvas>
                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <div class="list-group list-panel">
                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Cras justo odio <i
                                        class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                        title="Click to fix"></i></a>
                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Dapibus ac
                                    facilisi<i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                               title="Click to fix"></i></a>
                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Morbi leo risus <i
                                        class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                        title="Click to fix"></i></a>
                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Porta ac consectet<i
                                        class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                        title="Click to fix"></i></a>
                                <a href="#" class="list-group-item d-flex justify-content-between dark-grey-text">Vestibulum at eros
                                    <i class="fas fa-wrench ml-auto" data-toggle="tooltip" data-placement="top"
                                       title="Click to fix"></i></a>

                            </div>
                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Cascading panels -->

    </div>


@endsection


@section('script')

    <script>

        /*Global settings*/
        Chart.defaults.global.defaultFontColor = '#fff';

        $(function () {
            let data = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(0,0,0,.15)",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: "#4CAF50"
                }, {
                    label: "My Second dataset",
                    fillColor: "rgba(255,255,255,.25)",
                    strokeColor: "rgba(255,255,255,.75)",
                    pointColor: "#fff",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(0,0,0,.15)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }]
            };

            let dataPie = [{
                value: 300,
                color: "#F7464A",
                highlight: "#FF5A5E",
                label: "Red"
            }, {
                value: 50,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Green"
            }, {
                value: 100,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Yellow"
            }]

            let option = {
                responsive: true,
                // set font color
                scaleFontColor: "#fff",
                // font family
                defaultFontFamily: "'Roboto', sans-serif",
                // background grid lines color
                scaleGridLineColor: "rgba(255,255,255,.1)",
                // hide vertical lines
                scaleShowVerticalLines: false,
            };

            //radar
            let ctxR = document.getElementById("conversion").getContext('2d');
            let myRadarChart = new Chart(ctxR, {
                type: 'radar',
                data: {
                    labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling"],
                    datasets: [{
                        label: "My First dataset",
                        data: [65, 59, 90, 81, 56, 55],
                    },
                        {
                            label: "My Second dataset",
                            data: [28, 48, 40, 19, 96, 27],

                        }
                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        display: false
                    },

                    scale: {
                        ticks: {
                            display: false
                        },
                    }
                }
            });

            //bar
            let ctx = document.getElementById("traffic").getContext('2d');
            let myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["January", "Febuary", "March", "April", "May", "June"],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 255, 255, 0.3)',
                            'rgba(255, 255, 255, 0.3)',
                            'rgba(255, 255, 255, 0.3)',
                            'rgba(255, 255, 255, 0.3)',
                            'rgba(255, 255, 255, 0.3)',
                            'rgba(255, 255, 255, 0.3)'
                        ],
                        borderColor: [
                            'rgba(255, 255, 255, 1)',
                            'rgba(255, 255, 255, 1)',
                            'rgba(255, 255, 255, 1)',
                            'rgba(255, 255, 255, 1)',
                            'rgba(255, 255, 255, 1)',
                            'rgba(255, 255, 255, 1)'
                        ],
                        borderWidth: 1,
                        color: 'rgba(255, 255, 255, 1)'
                    }]
                },
                optionss: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            //pie
            let ctxP = document.getElementById("seo").getContext('2d');
            let myPieChart = new Chart(ctxP, {
                type: 'pie',
                data: {
                    labels: ["March", "April", "May", "June"],
                    datasets: [{
                        data: [160, 50, 100, 40],
                        backgroundColor: ["#4285F4", "#ffbb33", "#45cafc", "#FF5252"],
                        hoverBackgroundColor: ["#6ea0f2", "#fec451", "#78daff", "#fa6e6e"]
                    }]
                },
                options: {
                    responsive: true
                }
            });

            $('#dark-mode').on('click', function (e) {

                e.preventDefault();

                $('h4, button').not('.check').toggleClass('dark-grey-text text-white');
                $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');
                $('.list-panel a').toggleClass('dark-grey-text');
                $('footer, .card').toggleClass('dark-card-admin');
                $('body, .navbar').toggleClass('white-skin navy-blue-skin');
                $(this).toggleClass('white text-dark btn-outline-black');
                $('body').toggleClass('dark-bg-admin');
                $('h6, .card, td, th, i, li a, input, label').not(
                    '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
                $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
                $('.gradient-card-header').toggleClass('white black lighten-4');


                for (let i = 0; i <= 5; i++) {
                    myRadarChart.data.datasets[0].data[i] = (Math.random(i) * 100);
                    myRadarChart.data.datasets[1].data[i] = (Math.random(i) * 100);
                }

                for (let i = 0; i <= 6; i++) {
                    myBarChart.data.datasets[0].data[i] = (Math.random(i) * 100);
                }

                for (let i = 0; i <= 4; i++) {
                    myPieChart.data.datasets[0].data[i] = (Math.random(i) * 100);
                }

                myPieChart.update();
                myBarChart.update();
                myRadarChart.update();
            });


        });

    </script>

    <script>
        $(function () {
            $('.min-chart#chart-sales').easyPieChart({
                barColor: "#4caf50",
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });

        // Data Picker Initialization
        $('.datepicker').pickadate();


        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });

        // Sidenav Initialization
        $(".button-collapse").sideNav();

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

    <!-- JVectorMap -->

    <script src="{{asset('vendor/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('vendor/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
    <script>
        $(function () {

            colors = {};

            colors['ca'] = '#A4D886';
            colors['ru'] = '#FCECA2';
            colors['cn'] = '#F9573B';
            colors['us'] = '#87CEEB';
            colors['jp'] = '#34BD0E';
            colors['au'] = '#BCC7FC';
            colors['kz'] = '#D4624E';
            colors['de'] = '#34BD0E';

            $('#world-map').vectorMap({
                colors: colors,
                hoverOpacity: 0.7, // opacity for :hover
                hoverColor: false
            });

        });

    </script>
    <!-- /.JVectorMap -->

@endsection
