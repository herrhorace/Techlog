<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('default');
		echo $this->Html->css('sb-admin');
		echo $this->Html->css('../font-awesome/font-awesome');		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	

	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



</head>
<body>
        	
	<div id="container">
		<div id="content">
		
		   <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <!-- /.navbar-header -->
          <?php echo $this->element('topbar');  ?>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Flight Logs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/dashboards/data" id="loaddata"><i class="fa fa-table fa-fw"></i> View Logs</a>
                                </li>
                                <li>
                                    <a href="/dashboards/add_log" id="add" class=""><i class="fa fa-plus fa-fw"></i> Add Log</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-building"></i> Units<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/units/view" id="viewunits"><i class="fa fa-building"></i> View Units</a>
                                </li>
                                <li>
                                    <a href="/units/add" id="addunit"><i class="fa fa-plus"></i> Add Unit</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i> Personnel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/users/" id="loadusers"><i class="fa fa-group fa-fw"></i> View Personnel</a>
                                </li>
                                <li>
                                    <a href="/users/add" id="adduser" class=""><i class="fa fa-male"></i> Add Personnel</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12" id="my">
					<?php echo $this->Session->flash(); ?>
			        <?php echo $this->fetch('content'); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>


		</div>
		<div id="footer">
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="/js/jquery.metisMenu.js"></script>
    <!-- Page-Level Plugin Scripts - Blank -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="/js/sb-admin.js"></script>
	

	
	<!--<script type="text/javascript">
//log table
    $(document).ready(function () {
        $("#loaddata").click(function() {
            $.get("/dashboards/data",function(data){
                $("#my").html(data);
            });
        });
    });
// end of log table

//users table
    $(document).ready(function () {
        $("#loadusers").click(function() {
            $.get("/users/",function(data){
                $("#my").html(data);
            });
        });
    });
// users table

//add users
    $(document).ready(function () {
        $("#adduser").click(function() {
            $.get("/users/add",function(data){
                $("#my").html(data);
            });
        });
    });
// add users

//add log
    $(document).ready(function () {
        $("#add").click(function() {
            $.get("/dashboards/add",function(data){
                $("#my").html(data);
            });
        });
    });
// add log


//add unit
    $(document).ready(function () {
        $("#addunit").click(function() {
            $.get("/units/add",function(data){
                $("#my").html(data);
            });
        });
    });
// add unit

//log tablez
    $(document).ready(function () {
        $("#viewunits").click(function() {
            $.get("/units/view",function(data){
                $("#my").html(data);
            });
        });
    });
// end of log table


</script>-->
</body>
</html>
