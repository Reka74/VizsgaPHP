<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxusautó, sportautó bérlés</title>
    <base href="<?php print(base_url()); ?>">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <!--<link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">-->
    <link rel="shortcut icon" type="image/gif" href="assets/img/icon.gif" sizes="192x192"/>
    <link rel="shortcut icon" type="image/gif" href="assets/img/icon.gif" sizes="32x32"/>
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="assets/images/logo1.jpg" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
            
                <li class='sidebar-title'>Főmenü</li>
            
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="triangle" width="20"></i> 
                        <span>Adatok</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="index.php/Admin/accountdb">Személyes adatok</a>
                        </li>
                        
                        <li>
                            <a href="index.php/Cardb/index">Autók</a>
                        </li>
                        
                        <li>
                            <a href="index.php/Pricesdb/index">Árak</a>
                        </li>
                        
                    </ul>
                    
                </li>
         
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <div class="sidebar-toggler" style="cursor: pointer"><span class="navbar-toggler-icon"></span></div>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                
                                <div class="d-none d-md-block d-lg-inline-block">Szia <?php if (isset($username)){print($username);}?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a class="dropdown-item" href="index.php/Home/logout"><i data-feather="log-out"></i>Kijelentkezés</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Adatok felvitele, módosítása, törlése</h3>
        <p class="text-subtitle text-muted">A bal oldali menüben kiválaszthatod a módosítandó adatok körét.</p>
    </div>
    <section class="section">
        <div class="row mb-2">
            <?php
            if(isset($page)){
                $this->load->view($page);
            }
            ?>
            
            
            
        </div>
        
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p><?php print(date('Y'));?> &copy; LUX Car</p>
                    </div>
                    <div class="float-right">
                        <p>Készítette: Rékasi Tamás</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>
