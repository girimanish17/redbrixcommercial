<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <!-- Meta, title, CSS, favicons, etc. -->  
        <meta charset="utf-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>RedbRIX! | </title> 
         <!-- Bootstrap core CSS -->  
         <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">  
         <link href="<?php echo base_url(); ?>fonts/css/font-awesome.min.css" rel="stylesheet">  
         <link href="<?php echo base_url(); ?>css/animate.min.css" rel="stylesheet">  
         <!-- Custom styling plus plugins -->  
         <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">  
         <link rel="<?php echo base_url(); ?>stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />  
         <link href="<?php echo base_url(); ?>css/icheck/flat/green.css" rel="stylesheet" />  
         <link href="<?php echo base_url(); ?>css/floatexamples.css" rel="stylesheet" type="text/css" /> 

         <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        </head>
        
        <body class="nav-md">  
            <div class="container body">    
                <div class="main_container">      
                    <div class="col-md-3 left_col">        
                        <div class="left_col scroll-view">          
                            <div class="navbar nav_title" style="border: 0;">            
                            <a href="<?php echo base_url('admin'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>RedbRIX!</span></a>          
                        </div>         
                         <div class="clearfix"></div>          
                         <!-- menu prile quick info -->          
                         <div class="profile">            
                            <div class="profile_pic">              
                                <img src="<?php echo base_url(); ?>images/img.jpg" alt="..." class="img-circle profile_img">            
                            </div>            
                            <div class="profile_info">              
                                <span>Welcome,</span>              
                                <h2><?php echo $this->session->userdata('name'); ?></h2>            
                            </div>          
                        </div>          
                        <!-- /menu prile quick info -->          
                        <br/>          
                        <!-- sidebar menu -->          
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">            
                            <div class="menu_section">              
                                <h3>General</h3>              
                                <ul class="nav side-menu">                
                                    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-home"></i> Home </a>                 
                                    <!-- <ul class="nav child_menu" style="display: none">                    
                                        <li><a href="index.html">Dashboard</a>                    </li>                    
                                        <li><a href="index2.html">Dashboard2</a>                    </li>                    
                                        <li><a href="index3.html">Dashboard3</a>                    </li>                  
                                    </ul> -->                </li>                
                                    <li><a><i class="fa fa-qrcode"></i> Blogs <span class="fa fa-chevron-down"></span></a>                  
                                    <ul class="nav child_menu" style="display: none">                    
                                    <li><a href="<?php echo base_url('admin/add_blog'); ?>">Add Blog</a></li>                    
                                    <li><a href="<?php echo base_url('admin/blog_list'); ?>">View List</a></li>                                     
                                 </ul>                </li>				
                                    <li><a><i class="fa fa-qrcode"></i> Projects <span class="fa fa-chevron-down"></span></a>                  
                                    <ul class="nav child_menu" style="display: none">                    
                                    <li><a href="<?php echo base_url('admin/add_project'); ?>">Add Project</a></li>                    
                                    <li><a href="<?php echo base_url('admin/project_list'); ?>">View List</a></li>                                     
                                 </ul>                </li>				
                                <!--  <li><a><i class="fa fa-group"></i> Clients <span class="fa fa-chevron-down"></span></a>                  
                                 <ul class="nav child_menu" style="display: none">                    
                                 <li><a href="<?php echo base_url('admin/client_add'); ?>">Add New</a>                    </li>                    <li><a href="<?php echo base_url('admin/clients'); ?>">View List</a>                    </li>					                                     </ul>                </li>				
                                 <li><a><i class="fa fa-bus"></i> Vehicle <span class="fa fa-chevron-down"></span></a>                  
                                 <ul class="nav child_menu" style="display: none">                    
                                 <li><a href="<?php echo base_url('admin/vehicle_add'); ?>">Add New</a>                    </li>                    <li><a href="<?php echo base_url('admin/vehicles'); ?>">View List</a>                    </li>                                      
                                </ul>                </li>				
                                <li><a><i class="fa fa-external-link"></i> Gate Pass <span class="fa fa-chevron-down"></span></a>                  <ul class="nav child_menu" style="display: none">                   
                                <li><a href="<?php echo base_url('admin/gate_pass_add'); ?>">Add New</a>                    </li>                    <li><a href="<?php echo base_url('admin/gate_passes'); ?>">View List</a>                    </li>                                      
                                </ul>                </li>				
                                <li><a><i class="fa fa-inr"></i> Billing <span class="fa fa-chevron-down"></span></a>                  
                                <ul class="nav child_menu" style="display: none">                    
                                <li><a href="<?php echo base_url('admin/billing_amount'); ?>">Billing Amount</a>                    
                            </li>                   
                                <li><a href="<?php echo base_url('admin/ganerate_bill'); ?>">Ganerate Bill</a>                    
                            </li> 					
                                <li><a href="<?php echo base_url('admin/reports'); ?>">Reports</a>                    
                            </li>                   
                        </ul>                
                    </li>				
                                <li><a href="<?php echo base_url('admin/database_backup'); ?>"><i class="fa fa-database"></i> DB Backup </a>                                 -->
                            </li>                              
                        </ul>            
                    </div>          
                        </div>          <!-- /sidebar menu -->          <!-- /menu footer buttons           <div class="sidebar-footer hidden-small">            <a data-toggle="tooltip" data-placement="top" title="Settings">              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>            </a>            <a data-toggle="tooltip" data-placement="top" title="FullScreen">              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>            </a>            <a data-toggle="tooltip" data-placement="top" title="Lock">              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>            </a>            <a data-toggle="tooltip" data-placement="top" title="Logout">              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>            </a>          </div>          <!-- /menu footer buttons -->        </div>      
                    </div>      <!-- top navigation -->      
                    <div class="top_nav">        
                        <div class="nav_menu">          
                            <nav class="" role="navigation">            
                                <div class="nav toggle">              
                                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>            
                                </div>            
                                <ul class="nav navbar-nav navbar-right">              
                                    <li class="">                
                                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">                  
                                            <img src="<?php echo base_url(); ?>images/img.jpg" alt=""><?php echo $this->session->userdata('name'); ?>                  
                                            <span class=" fa fa-angle-down"></span>                
                                        </a>                
                                        <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">                  
                                            <li><a href="javascript:;">  Profile</a>                  
                                        </li>                  
                                        <li>                    
                                            <a href="javascript:;">                      
                                                <span class="badge bg-red pull-right">50%</span>                      
                                                <span>Settings</span>                    
                                            </a>                  
                                        </li>                  
                                        <li>                    
                                            <a href="javascript:;">Help</a>                  
                                        </li>                  
                                        <li>
                                            <a href="<?php echo base_url('login/logout'); ?>">
                                            <i class="fa fa-sign-out pull-right"></i> Log Out</a>                  
                                        </li>                
                                    </ul>              
                                </li>                  
                            </ul>          
                        </nav>        
                    </div>      
                </div>      
                <!-- /top navigation -->	  	   
                <!-- page content -->      
                <div class="right_col" role="main">