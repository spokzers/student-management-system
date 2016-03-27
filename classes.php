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
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'nav.php'; 
        
        $param =  filter_input(INPUT_GET, 'param');
        
        ?>
        <!-- Navigation -->
    
        <div id="page-wrapper">
            <div class="col-md-12 graphs">
                <div class="xs">
                    <h3>Information Tables</h3>
               <script>
$(document).ready(function(){
    $("tr").click(function(){
        window.location.href='http://stackhosting.com/sms/<?php echo $param ?>.php';
    });
});
</script>
<?php if($param == 'manage'){?>
<button type="button" class="btn btn_5 btn-lg btn-success warning_1">Add New Student</button>
<button type="button" class="btn btn_5 btn-lg btn-success warning_1">Remove Student</button>
<?php } ?>
                <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                        <div class="panel-heading">
                            <h2>CLASSES</h2>
                            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
                        </div>
                        <div class="panel-body no-padding" style="display: block;">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="warning">
                                        <th>Class ID</th>
                                        <th>Name</th>
                                        <th>Center</th>
                                        <th>Location</th>
                                        <th>Timings</th>
                                        <th># of Scheduled Classes</th>
                                        <th># of Pending Classes</th>
                                        <th># of Students</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    
                                        <td><a href="index.php" >1</a></td> 
                                <td>English</td>
                                        <td id="222">Main</td>
                                        <td>Gulshan</td>
                                        <td>9:30pm - 12:30pm</td>
                                        <td>10</td>
                                        <td>2</td>
                                        <td>25</td>
                                    </tr>
                                    </a>
                                    <tr>
                                        <td>2</td>
                                        <td>Mathematics</td>
                                        <td>Main</td>
                                        <td>Gulshan</td>
                                        <td>9:30pm - 12:30pm</td>
                                        <td>10</td>
                                        <td>2</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sindhii</td>
                                        <td>Main</td>
                                        <td>Gulshan</td>
                                        <td>9:30pm - 12:30pm</td>
                                        <td>10</td>
                                        <td>2</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Physics I</td>
                                        <td>City</td>
                                        <td>Gulistan-e-Jauhar</td>
                                        <td>12:30pm - 2:30pm</td>
                                        <td>10</td>
                                        <td>2</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Chemistry</td>
                                        <td>City</td>
                                        <td>Gulistan-e-Jauhar</td>
                                        <td>12:30pm - 2:30pm</td>
                                        <td>10</td>
                                        <td>2</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Physics II</td>
                                        <td>City</td>
                                        <td>Gulistan-e-Jauhar</td>
                                        <td>12:30pm - 2:30pm</td>
                                        <td>10</td>
                                        <td>2</td>
                                        <td>25</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="copy_layout">
                    <p>Copyright © 2015 . All Rights Reserved </p>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
