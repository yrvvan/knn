<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>
        <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo base_url(); ?>c_knn/knnCalculation"
                               ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                               ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Class Classifier
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="<?php echo base_url(); ?>c_knn/template/input_score">Input Score</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                               ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Student Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                       >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                        ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                       >Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                        ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html"
                               ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Archive</a
                            ><a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Configuration</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Irwan Rosyadi, S.Kom
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Input Student Score</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Input Student Score</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="card mb-4"><div class="card-body">
                                        <p class="mb-0">This page is an example of using static navigation. By removing the <code>.sb-nav-fixed</code> class from the <code>body</code>, the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.</p>
                                    </div>
                                </div>
                                <form class="login-form" action="<?= base_url() . 'c_knn/super_function'; ?>" method="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Student's NISN</label>
                                                <input class="form-control py-4" name="std_nisn" type="number" max="9999" placeholder="NISN Number" required autocomplete="off"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Student's Name</label>
                                                <input class="form-control py-4" name="std_name" type="text" placeholder="John Doe..." required autocomplete="off"/>
                                            </div>
                                            <!-- <div class="form-group">
                                                 <label class="small mb-1">Student's Class</label>
                                                 <input class="form-control py-4" name="std_class" type="text" placeholder="XI B..." required autocomplete="off"/>
                                             </div>
                                            -->   
                                            <div class="form-group">
                                                <label class="small mb-1">Student's Class</label>
                                                <select name="std_class" class="form-control">
                                                    <option value="XI A"> XI A </option>
                                                    <option value="XI B"> XI B </option>
                                                    <option value="XI C"> XI C </option>
                                                    <option value="XI D"> XI D </option>
                                                    <option value="XI E"> XI E </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Student's Interest</label>
                                                <select name="std_interest" class="form-control">
                                                    <option value="IPA"> IPA </option>
                                                    <option value="IPS"> IPS </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Math Assignment Score</label>
                                                <input class="form-control py-4" name="math_assignment" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Math Mid-Test Score</label>
                                                <input class="form-control py-4" name="math_mid" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Math Final-Test Score</label>
                                                <input class="form-control py-4" name="math_final" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Science Assignment Score</label>
                                                <input class="form-control py-4" name="science_assignment" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Science Mid-Test Score</label>
                                                <input class="form-control py-4" name="science_mid" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Science Final-Test Score</label>
                                                <input class="form-control py-4" name="science_final" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Social Assignment Score</label>
                                                <input class="form-control py-4" name="social_assignment" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Social Mid-Test Score</label>
                                                <input class="form-control py-4" name="social_mid" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Social Final-Test Score</label>
                                                <input class="form-control py-4" name="social_final" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Indonesian Assignment Score</label>
                                                <input class="form-control py-4" name="indonesian_assignment" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Indonesian Mid-Test Score</label>
                                                <input class="form-control py-4" name="indonesian_mid" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">Indonesian Final-Test Score</label>
                                                <input class="form-control py-4" name="indonesian_final" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">English Assignment Score</label>
                                                <input class="form-control py-4" name="english_assignment" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">English Mid-Test Score</label>
                                                <input class="form-control py-4" name="english_mid" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="small mb-1">English Final-Test Score</label>
                                                <input class="form-control py-4" name="english_final" type="number" step="0.01" min="0" max="100" placeholder="-" required autocomplete="off"/>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure that these score already correct?');">Submit Score</button>
                            </div>
                            </form>
                        </div>
                        <div style="height: 100vh;"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
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
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    </body>
</html>
