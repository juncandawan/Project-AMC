<?php
include('PageFunctions.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Amc|Account</title>
        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- DatePicker-->
        <link href="../dist/jquery-ui-1.12.0.custom/jquery-ui.min.css" rel="stylesheet">
        <link href="../dist/jquery-ui-1.12.0.custom/jquery-ui.structure.min.css" rel="styleshee">
        <link href="../dist/jquery-ui-1.12.0.custom/jquery-ui.theme.min.css" rel="stylesheet">

        <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
    </head>

    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="navigation.php">Automated Cash Exchange Machine</a>
                </div>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                                                <li>
                                               <a href="navigation.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                                               </li>
                                                <li>
						<a href="DisplayAccountPage.php"><i class="fa fa-sitemap fa-fw"></i>Account</a>
						</li>
						<li>
						<a href="TransactionHistoriesPage.php"><i class="fa fa-table fa-fw"></i>Transaction Histories</a>
						</li>
						<li>
						<a href="TerminalPage.php"><i class="fa fa-eject fa-fw"></i>Terminal Status and Inventory</a>
						</li>
						<li>
						<a href="CurrentRates.php"><i class="fa fa-money fa-fw"></i>Current Currency Rates</a>
						</li>
						<li>
						<a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        <ul class="nav nav-third-level">
                                        <li>
                                            <a href="UpdateAccountPage.php">Update Account</a>
                                        </li>
                                        <li>
                                            <a href="ChangePasswordPage.php">Change Password</a>
                                        </li>
                                        <li>
                                            <a href="UpdateDeductedPage.php">Update Deducted Amount</a>
                                        </li>
										 <li>
                                            <a href="UpdateTerminalPage.php">Update Terminal Page</a>
                                        </li>
                                    </ul>
						</li>
						<li class="dropdown">
						<a href="logout.php" onclick="return confirm('Are you sure you want to logout?');"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
						</li>			
                    </div>
                    </ul>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">                                 
                                           <strong>ADMIN's Information</strong><span class="pull-right">
                                       </span>	
                                </div>

                                <div class="panel-body">
                                    <div class="table responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-displayAccount">
                                            <thead>
                                                <tr>
															<tr>
                                                            <th>First Name:</th>                                                                                                                  
                                                            <?php
                                                            $query = "SELECT * FROM account_tbl";		
                                                            $records = mysqli_query($link,$query);
                                                
                                                            while($data=mysqli_fetch_row($records))
                                                            {	                                                                           
                                                            echo"<td>".$data[1]."</td>";                                                         
                                                            }
                                                            ?>	
                                                            </tr>
                                                             <tr>
                                                            <th>Last Name:</th>                                                                                                                  
                                                            <?php
                                                            $query = "SELECT * FROM account_tbl";		
                                                            $records = mysqli_query($link,$query);
                                                
                                                            while($data=mysqli_fetch_row($records))
                                                            {	                                                                           
                                                            echo"<td>".$data[2]."</td>";                                                         
                                                            }
                                                            ?>	
                                                            </tr>
                                                             <tr>
                                                            <th>Email Address:</th>                                                                                                                  
                                                            <?php
                                                            $query = "SELECT * FROM account_tbl";		
                                                            $records = mysqli_query($link,$query);
                                                
                                                            while($data=mysqli_fetch_row($records))
                                                            {	                                                                           
                                                            echo"<td>".$data[3]."</td>";                                                         
                                                            }
                                                            ?>	
                                                            </tr>
                                                             <tr>
                                                            <th>Home Address:</th>                                                                                                                  
                                                            <?php
                                                            $query = "SELECT * FROM account_tbl";		
                                                            $records = mysqli_query($link,$query);
                                                
                                                            while($data=mysqli_fetch_row($records))
                                                            {	                                                                           
                                                            echo"<td>".$data[4]."</td>";                                                         
                                                            }
                                                            ?>	
                                                            </tr>
                                                             <tr>
                                                            <th>Phone Number:</th>                                                                                                                  
                                                            <?php
                                                            $query = "SELECT * FROM account_tbl";		
                                                            $records = mysqli_query($link,$query);
                                                
                                                            while($data=mysqli_fetch_row($records))
                                                            {	                                                                           
                                                            echo"<td>".$data[5]."</td>";                                                         
                                                            }
                                                            ?>	
                                                            </tr>
                                                </tr>
                                        </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
        <!-- /.navbar-static-side -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="../dist/jquery-ui-1.12.0.custom/external/jquery/jquery.js"></script>
        <script src="../dist/jquery-ui-1.12.0.custom/jquery-ui.js"></script>
        <script src="../dist/jquery-ui-1.12.0.custom/jquery-ui.min.js"></script>
        <!-- jQuery -->
        <!--script src="../vendor/jquery/jquery.min.js"></script-->
        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script src="../vendor/raphael/raphael.min.js"></script>
        <!--script src="../vendor/morrisjs/morris.min.js"></script>
        <script src="../data/morris-data.js"></script-->
        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

    </body>

    </html>