@extends('layout.header')

@section('container.admin.index')
    <div id="layout">
        <div class="info-head">
            <div class="container">

            </div>
        </div>
     @include('admin.layout.navbar')

        <section class="content-central">

            <div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2>Administrateur</h2>
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        {{-- <div class="portfolioContainer" style="margin-top: -50px;">
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-dry-servicing.html">
                                    <div class="img-hover">
                                        <img src="images/services/thumbnails/thumbnail.jpg" alt="AC Dry Servicing"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>AC Dry Servicing</h3>
                                        <hr class="separator">
                                        <p>AC Dry Servicing</p>
                                        <div class="content-btn"><a href="service-details/ac-dry-servicing.html"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>300</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-installation.html">
                                    <div class="img-hover">
                                        <img src="images/services/thumbnails/thumbnail.jpg" alt="AC Installation"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>AC Installation</h3>
                                        <hr class="separator">
                                        <p>AC Installation</p>
                                        <div class="content-btn"><a href="service-details/ac-installation.html"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>320</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-gas-top-up.html">
                                    <div class="img-hover">
                                        <img src="images/services/thumbnails/thumbnail.jpg" alt="AC Gas Top Up"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>AC Gas Top Up</h3>
                                        <hr class="separator">
                                        <p>AC Gas Top Up</p>
                                        <div class="content-btn"><a href="service-details/ac-gas-top-up.html"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>320</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="service-details/ac-gas-refill.html">
                                    <div class="img-hover">
                                        <img src="images/services/thumbnails/thumbnail.jpg" alt="AC Gas Refill"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>AC Gas Refill</h3>
                                        <hr class="separator">
                                        <p>AC Gas Refill</p>
                                        <div class="content-btn"><a href="service-details/ac-gas-refill.html"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>510</div>
                                    </div>
                                </a>
                            </div>
                        </div> --}}

                        <section class="content" style="margin-left:20px; margin-right:20px; margin-top:50px; margin-bottom:50px;">
                            <label for="grahe">Selectionnez un grapique</label>
                            <select name="chart" id="chart" onchange="myFunction()" class="form-control" style="width:120px;">
                                <option value="pie">Diagramme</option>
                                <option value="column">Colonne</option>
                                <option value="pyramid">Pyramide</option>
                                <option value="bar">Barre</option>
                            </select>
                            <label for="grahe">Selectionnez une couleur</label>
                            <select name="chart" id="couleur" onchange="myFunction()" class="form-control" style="width:120px;">
                                <option value="light1">Blanc</option>
                                <option value="dark1">Noir</option>
                            </select>

                            <div class="product-idex" align="right" style="margin-top:40px;">
                                <div id="chartContainer" style="height:370px; width: 100%;"></div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!-- fin  -->


                <script>
                    function myFunction() {
                        var chartType = document.getElementById("chart").value;
                        var couleur = document.getElementById("couleur").value;

                    var chart = new CanvasJS.Chart("chartContainer", {
                        theme: couleur, // "light1", "light2", "dark1", "dark2"
                        exportEnabled: true,
                        animationEnabled: true,
                        title: {
                            text: "Les statistiques de la base de données"
                        },
                        data: [{
                            type: chartType,
                            toolTipContent: "<b>{label}</b>: {y}%",
                            showInLegend: "true",
                            legendText: "{label}",
                            indexLabelFontSize: 16,
                            indexLabel: "{label} - {y}%",
                            dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>
                        }]
                    });
                    chart.render();

                    }
                    </script>
    </section>

        @include('admin.layout.footer')
    </div>

  @include('admin.layout.script')

@endsection
