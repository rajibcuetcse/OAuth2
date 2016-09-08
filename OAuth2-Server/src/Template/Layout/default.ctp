<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | General Form Elements</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
            name="viewport">
        <!-- Bootstrap 3.3.6 -->
<?= $this->Html->css('bootstrap/css/bootstrap.min.css') ?>
        <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">-->
        <!-- Font Awesome -->
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!--Ionicons--> 
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
<?= $this->Html->css('dist/css/AdminLTE.min.css') ?>
        <!--<link rel="stylesheet" href="dist/css/AdminLTE.min.css">-->
        <!-- AdminLTE Skins. Choose a skin from the css/skins
               folder instead of downloading all of them to reduce the load. -->
<?= $this->Html->css('dist/css/skins/_all-skins.min.css') ?>
        <!--<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span> <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>CHTL</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas"
                       role="button"> <span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span>
                    </a>
                    <!--                                <a href="/users/logout" class="pull-right fc-button"> 
                                                        Logout
                                                    </a>-->
                    <div class="nav navbar-nav navbar-right">
                <?php echo $this->Html->link('Logout',['controller' => 'users','action' => 'logout'],['class' => 'navbar-brand']);?>
                    </div>


                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!--  sidebar: style can be found in sidebar.less  -->
                <section class="sidebar">
                    <!--   sidebar menu: : style can be found in sidebar.less   -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>

                        <li>
                                            <?= $this->Html->link('<i class="fa fa-file"></i><span>'.(__("Users")).'</span>', ['controller' => 'biz-users','action' => 'index'],array('escape' => false)) ?>
                        </li>
                        <li>
                                            <?= $this->Html->link('<i class="fa fa-file"></i><span>'.(__("Users Balance")).'</span>', ['controller' => 'biz-user-balance','action' => 'index'],array('escape' => false)) ?>
                        </li>
                        <li>
                                            <?= $this->Html->link('<i class="fa fa-file"></i><span>'.(__("Clients")).'</span>', ['controller' => 'clients','action' => 'index'],array('escape' => false)) ?>
                        </li>
                        <!-- <li>
                                            <?php //echo $this->Html->link('<i class="fa fa-file"></i><span>'.(__("Clients Balance")).'</span>', ['controller' => 'userbalance','action' => 'index'],array('escape' => false)) ?>
                        </li>-->
<!--					<li><a href="index.html"><i class="fa fa-file"></i> <span>Get
                                                Products</span></a></li>
                        <li><a href="index.html"><i class="fa fa-file"></i> <span>Expire
                                                Token</span></a></li>-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><?= $this->fetch('title') ?></h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?= $this->fetch('title') ?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                                <?php echo $this->fetch('content') ?>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright © 2016 <a href="#">CHTL</a>.
                </strong> All rights reserved.
            </footer>


            <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.0 -->
        <?= $this->Html->script('plugins/jQuery/jQuery-2.2.0.min.js') ?>
        <!--<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>-->
        <!-- Bootstrap 3.3.6 -->
        <?= $this->Html->script('bootstrap/js/bootstrap.min.js') ?>
        <!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
        <!-- FastClick -->
        <?= $this->Html->script('plugins/fastclick/fastclick.js') ?>
        <!--<script src="plugins/fastclick/fastclick.js"></script>-->
        <!-- AdminLTE App -->
        <?= $this->Html->script('dist/js/app.min.js') ?>
        <!--<script src="dist/js/app.min.js"></script>-->
        <!-- AdminLTE for demo purposes -->
        <?= $this->Html->script('dist/js/demo.js') ?>
        <!--<script src="dist/js/demo.js"></script>-->
    </body>
</html>