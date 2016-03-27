<!DOCTYPE HTML>
<html>

<head>
    <title>Stackhosting | Student Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.js"></script>

</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'nav.php'; ?>
        <!-- Navigation -->
        <div id="page-wrapper">
            <div class="col-md-12 graphs">
        <div class="graphs ">
	    <div class="graph_box" style="display:none;">
			<div class="col-md-4 grid_2"><div class="grid_1">
				<h3>Circular</h3>
				<canvas id="doughnut" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
			</div></div>
			<div class="col-md-4 grid_2"><div class="grid_1">
				<h3>Line</h3>
				<canvas id="line" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
			</div></div>
			<div class="col-md-4 grid_2"><div class="grid_1">
				<h3>PolarArea</h3>
				<canvas id="polarArea" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
			</div></div>
			<div class="clearfix"> </div>
	    </div>
	    <div class="graph_box1">
			<div class="col-md-4 grid_2"><div class="grid_1">
				<h3>Bar</h3>
				<canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
			</div></div>
			<div class="col-md-4 grid_2"><div class="grid_1">
				<h3>Pie</h3>
				<canvas id="pie" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
			</div></div>
			<div class="col-md-4 grid_2" style="display: none;"><div class="grid_1">
				<h3>Radar</h3><canvas id="radar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
			</div></div>
			<div class="clearfix"> </div>
		</div>
            <br>
            <div class="col-md-4">
                <button type="button" class="btn btn_5 btn-lg btn-success warning_1">Send Defaulters Message </button>
                
            </div>
            <br>
            <br>
            <br>
                <div class="xs">
                    <h3>Information Tables</h3>
                    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                        <div class="panel-heading">
                            <h2>FEES</h2>
                            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
                        </div>
                        <div class="panel-body no-padding" style="display: block;">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="warning">
                                        <th>Student ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Credit</th>
                                        <th>Debit</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Rs. 10000</td>
                                        <td>Rs. 20000</td>
                                        <td>Rs. 10000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Rs. 10000</td>
                                        <td>Rs. 20000</td>
                                        <td>Rs. 10000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Rs. 10000</td>
                                        <td>Rs. 20000</td>
                                        <td>Rs. 10000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Rs. 10000</td>
                                        <td>Rs. 20000</td>
                                        <td>Rs. 10000</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Rs. 10000</td>
                                        <td>Rs. 20000</td>
                                        <td>Rs. 10000</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Rs. 10000</td>
                                        <td>Rs. 20000</td>
                                        <td>Rs. 10000</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Rs. 10000</td>
                                        <td>Rs. 20000</td>
                                        <td>Rs. 10000</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Rs. 10000</td>
                                        <td>Rs. 20000</td>
                                        <td>Rs. 10000</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>Rs. 10000</td>
                                        <td>Rs. 20000</td>
                                        <td>Rs. 10000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="copy_layout">
                    <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->    <script>

		var doughnutData = [
				{
					value: 30,
					color:"#ef553a"
				},
				{
					value : 50,
					color : "#9358ac"
				},
				{
					value : 100,
					color : "#3b5998"
				},
				{
					value : 40,
					color : "#00aced"
				},
				{
					value : 120,
					color : "#4D5360"
				}
			
			];
		var lineChartData = {
			labels : ["","","","","","",""],
			datasets : [
				{
					fillColor : "#00aced",
					strokeColor : "#00aced",
					pointColor : "#00aced",
					pointStrokeColor : "#fff",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "#3b5998",
					strokeColor : "#3b5998",
					pointColor : "#3b5998",
					pointStrokeColor : "#fff",
					data : [28,48,40,19,96,27,100]
				}
			]
			
		};
		var pieData = [
				{
					value: 30,
					color:"#ef553a"
				},
				{
					value : 50,
					color : "#00aced"
				},
				{
					value : 100,
					color : "#69D2E7"
				}
			
			];
		var barChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					fillColor : "#ef553a",
					strokeColor : "#ef553a",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "#00aced",
					strokeColor : "#00aced",
					data : [28,48,40,19,96,27,100]
				}
			]
			
		};
	var chartData = [
			{
				value : Math.random(),
				color: "#D97041"
			},
			{
				value : Math.random(),
				color: "#C7604C"
			},
			{
				value : Math.random(),
				color: "#21323D"
			},
			{
				value : Math.random(),
				color: "#9D9B7F"
			},
			{
				value : Math.random(),
				color: "#7D4F6D"
			},
			{
				value : Math.random(),
				color: "#9358ac"
			}
		];
		var radarChartData = {
			labels : ["","","","","","",""],
			datasets : [
				{
					fillColor : "#3b5998",
					strokeColor : "#3b5998",
					pointColor : "#3b5998",
					pointStrokeColor : "#fff",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "#ef553a",
					strokeColor : "#ef553a",
					pointColor : "#ef553a",
					pointStrokeColor : "#fff",
					data : [28,48,40,19,96,27,100]
				}
			]
			
		};
	new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
	new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
	new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
	new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
	new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
	new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
	
	</script>

    <link href="css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
