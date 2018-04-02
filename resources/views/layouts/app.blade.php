<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Notehome | Gestion des notes</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
        <!-- Fa-awesome -->        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition skin-blue sidebar-mini">

        <div class="wrapper">

            <header class="main-header">

                <a href="index2.html" class="logo">            
                    <span class="logo-mini"><b>N</b>H</span>

                    <span class="logo-lg"><b>Note</b>Home</span>
                </a>

                @include ('layouts.navbar')

            </header>

            <aside class="main-sidebar">
                
                @include ('layouts.sidebar')
                
            </aside>

            <div class="content-wrapper">
                
                <section class="content-header">
                    <h1>
                        Tableau de bord
                        <small>Version 2.0</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                        <li class="active">Tableau de bord</li>
                    </ol>
                </section>

                <section class="content">
                    
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-cart-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Courses</span>
                                    <span class="info-box-number">2 <small>notes</small></span>
                                </div>
                              <!-- /.info-box-content -->
                            </div>
                          <!-- /.info-box -->
                        </div>
                                                
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Likes</span>
                                    <span class="info-box-number">41,410</span>
                                </div>
                              <!-- /.info-box-content -->
                            </div>
                          <!-- /.info-box -->
                        </div>
                                            
                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sales</span>
                                    <span class="info-box-number">760</span>
                                </div>                              
                            </div>                          
                        </div>
                      
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">New Members</span>
                                    <span class="info-box-number">2,000</span>
                                </div>
                        
                            </div>
                        
                        </div>
                      
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                
                                <!-- Content here -->
                                
                            </div>                            
                        </div>
                    </div>

                    <div class="row">
                        
                        <div class="col-md-8">

                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title">Dernièresz notes</h3>

                                <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                <div class="table-responsive">
                                  <table class="table no-margin">
                                    <thead>
                                    <tr>
                                      <th>Order ID</th>
                                      <th>Item</th>
                                      <th>Status</th>
                                      <th>Popularity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                      <td>Call of Duty IV</td>
                                      <td><span class="label label-success">Shipped</span></td>
                                      <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                      <td>Samsung Smart TV</td>
                                      <td><span class="label label-warning">Pending</span></td>
                                      <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                      <td>iPhone 6 Plus</td>
                                      <td><span class="label label-danger">Delivered</span></td>
                                      <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                      <td>Samsung Smart TV</td>
                                      <td><span class="label label-info">Processing</span></td>
                                      <td>
                                        <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                      <td>Samsung Smart TV</td>
                                      <td><span class="label label-warning">Pending</span></td>
                                      <td>
                                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                      <td>iPhone 6 Plus</td>
                                      <td><span class="label label-danger">Delivered</span></td>
                                      <td>
                                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                      <td>Call of Duty IV</td>
                                      <td><span class="label label-success">Shipped</span></td>
                                      <td>
                                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                      </td>
                                    </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <!-- /.table-responsive -->
                              </div>
                              <!-- /.box-body -->
                              <div class="box-footer clearfix">
                                <a href="javascript:void(0)" class="btn btn-sm btn-bitbucket btn-flat pull-left">Place New Order</a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-bitbucket btn-flat pull-right">View All Orders</a>
                              </div>
                              <!-- /.box-footer -->
                            </div>
                            
                        </div>                      

                        <div class="col-md-4">
                        <!-- Info Boxes Style 2 -->
                        <div class="info-box bg-yellow">
                          <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-text">Inventory</span>
                            <span class="info-box-number">5,200</span>

                            <div class="progress">
                              <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
                                  50% Increase in 30 Days
                                </span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box bg-green">
                          <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-text">Mentions</span>
                            <span class="info-box-number">92,050</span>

                            <div class="progress">
                              <div class="progress-bar" style="width: 20%"></div>
                            </div>
                            <span class="progress-description">
                                  20% Increase in 30 Days
                                </span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box bg-red">
                          <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-text">Downloads</span>
                            <span class="info-box-number">114,381</span>

                            <div class="progress">
                              <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                  70% Increase in 30 Days
                                </span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <div class="info-box bg-aqua">
                          <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-text">Direct Messages</span>
                            <span class="info-box-number">163,921</span>

                            <div class="progress">
                              <div class="progress-bar" style="width: 40%"></div>
                            </div>
                            <span class="progress-description">
                                  40% Increase in 30 Days
                                </span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                      </div>
                        
                    </div>
                    
                </section>
                
            </div>  

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; 2017 - 2018 <a href="https://www.bennaneweb.fr" target="blank">Bennane Web</a>.</strong> Tous droits réservés.
            </footer>

            <aside class="control-sidebar control-sidebar-dark">
       
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
        
                <div class="tab-content">
            
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>                        

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>

                                <p>
                                    Other sets of options are available
                                </p>
                            </div>                            

                            <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>
                            
                        </form>                        
                    </div>
          
                </div>
                
            </aside>

            <div class="control-sidebar-bg"></div>

        </div>

        <script type="text/javascript" src="js/jquery/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/fastclick/lib/fastclick.js"></script>
        <script type="text/javascript" src="assets/dist/js/adminlte.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="assets/bower_components/chart.js/Chart.js"></script>
<!--        <script type="text/javascript" src="assets/dist/js/pages/dashboard2.js"></script>
        <script type="text/javascript" src="assets/dist/js/demo.js"></script>-->

    </body>
    
</html>