<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Espace Administrateur</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="../assets/css/styles_admin.css" rel="stylesheet" />
   <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
   <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" style="background-color:#121d3f !important; color:white;">
      
      <a class="navbar-brand ps-3" href="index.html">Espace Admin </a>
 
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
      
      <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
               <input class="form-control" type="text" placeholder="Recherche..." aria-label="Recherche..." aria-describedby="btnNavbarSearch" />
               <button style="background-color:#121d3f !important; color:white;" class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
      </form>
      
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#!">Mon compte</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#!">Déconnexion</a></li>
               </ul>
            </li>
      </ul>
   </nav>
   <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color:#121d3f !important; color:white;">
               <div class="sb-sidenav-menu">
                  <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                           <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                           Tableau de bord
                        </a>
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                           <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                           Utilisateurs
                           <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                           <nav class="sb-sidenav-menu-nested nav">
                              <a class="nav-link" href="layout-static.html">Static Navigation</a>
                              <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                           </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                           <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                           Administrateurs
                           <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                           <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                              </a>
                              <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                       <a class="nav-link" href="login.html">Login</a>
                                       <a class="nav-link" href="register.html">Register</a>
                                       <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                              </div>
                              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                              </a>
                              <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                       <a class="nav-link" href="401.html">401 Page</a>
                                       <a class="nav-link" href="404.html">404 Page</a>
                                       <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                              </div>
                           </nav>
                        </div>
                        
                  </div>
               </div>
               <div class="sb-sidenav-footer">
                  <div class="small">Dernière connexion:</div>
                  10 Janvier 2024
               </div>
            </nav>
      </div>
      <div id="layoutSidenav_content">
            <main>
               <div class="container-fluid px-4">
                  <h1 class="mt-4">Tableau de bord</h1>
                  <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Accueil</li>
                  </ol>
                  <div class="row">
                        <div class="col-xl-3 col-md-6">
                           <div class="card bg-primary text-white mb-4">
                              <div class="card-body">Utilisateurs</div>
                              <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                           <div class="card bg-warning text-white mb-4">
                              <div class="card-body">Warning Card</div>
                              <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                           <div class="card bg-success text-white mb-4">
                              <div class="card-body">Success Card</div>
                              <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                           <div class="card bg-danger text-white mb-4">
                              <div class="card-body">Danger Card</div>
                              <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                           </div>
                        </div>
                  </div>
                  
               </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
               <div class="container-fluid px-4">
                  <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                           <a href="#">Privacy Policy</a>
                           &middot;
                           <a href="#">Terms &amp; Conditions</a>
                        </div>
                  </div>
               </div>
            </footer>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   <script src="../assets/JS/script_admin.js"></script>
  
</body>
</html>
