<body id="page-top">
<div id="wrapper">
    <!-- INCLUDE SIDE BAR IF REQIRED -->
    <?php
        defined('BASEPATH') OR exit('No direct script access allowed.');
        $this->load->view('admin/Dashboard/Template/sidebar');
    ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- INCULDE TOPBAR IF REQIRED -->
                <?php
                    defined('BASEPATH') OR exit('No direct script access allowed.');
                    $this->load->view('admin/Dashboard/Template/topbar');
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- INCULDE PAGE-HEADER IF RQIRED -->
                    <?php
                        defined('BASEPATH') OR exit('No direct script access allowed.');
                        $this->load->view('admin/Dashboard/Template/page-header');
                    ?>
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-lg-4">

                            <!-- Custom Text Color Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Custom Text Color Utilities</h6>
                                </div>
                                <div class="card-body">
                                    <p class="text-gray-100 p-3 bg-dark m-0">.text-gray-100</p>
                                    <p class="text-gray-200 p-3 bg-dark m-0">.text-gray-200</p>
                                    <p class="text-gray-300 p-3 bg-dark m-0">.text-gray-300</p>
                                    <p class="text-gray-400 p-3 bg-dark m-0">.text-gray-400</p>
                                    <p class="text-gray-500 p-3 m-0">.text-gray-500</p>
                                    <p class="text-gray-600 p-3 m-0">.text-gray-600</p>
                                    <p class="text-gray-700 p-3 m-0">.text-gray-700</p>
                                    <p class="text-gray-800 p-3 m-0">.text-gray-800</p>
                                    <p class="text-gray-900 p-3 m-0">.text-gray-900</p>
                                </div>
                            </div>

                            <!-- Custom Font Size Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Custom Font Size Utilities</h6>
                                </div>
                                <div class="card-body">
                                    <p class="text-xs">.text-xs</p>
                                    <p class="text-lg mb-0">.text-lg</p>
                                </div>
                            </div>

                        </div>

                        <!-- Second Column -->
                        <div class="col-lg-4">

                            <!-- Background Gradient Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Custom Background Gradient Utilities</h6>
                                </div>
                                <div class="card-body">
                                    <div class="px-3 py-5 bg-gradient-primary text-white">.bg-gradient-primary</div>
                                    <div class="px-3 py-5 bg-gradient-secondary text-white">.bg-gradient-secondary</div>
                                    <div class="px-3 py-5 bg-gradient-success text-white">.bg-gradient-success</div>
                                    <div class="px-3 py-5 bg-gradient-info text-white">.bg-gradient-info</div>
                                    <div class="px-3 py-5 bg-gradient-warning text-white">.bg-gradient-warning</div>
                                    <div class="px-3 py-5 bg-gradient-danger text-white">.bg-gradient-danger</div>
                                    <div class="px-3 py-5 bg-gradient-light text-white">.bg-gradient-light</div>
                                    <div class="px-3 py-5 bg-gradient-dark text-white">.bg-gradient-dark</div>
                                </div>
                            </div>

                        </div>

                        <!-- Third Column -->
                        <div class="col-lg-4">

                            <!-- Grayscale Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Custom Grayscale Background Utilities</h6>
                                </div>
                                <div class="card-body">
                                    <div class="p-3 bg-gray-100">.bg-gray-100</div>
                                    <div class="p-3 bg-gray-200">.bg-gray-200</div>
                                    <div class="p-3 bg-gray-300">.bg-gray-300</div>
                                    <div class="p-3 bg-gray-400">.bg-gray-400</div>
                                    <div class="p-3 bg-gray-500 text-white">.bg-gray-500</div>
                                    <div class="p-3 bg-gray-600 text-white">.bg-gray-600</div>
                                    <div class="p-3 bg-gray-700 text-white">.bg-gray-700</div>
                                    <div class="p-3 bg-gray-800 text-white">.bg-gray-800</div>
                                    <div class="p-3 bg-gray-900 text-white">.bg-gray-900</div>
                                </div>
                            </div>
                        </div>

                    </div>
    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- INCLUDE FOOTER IF REQIRED (template/footer) -->
            <?php
                defined('BASEPATH') OR exit('No direct script access allowed.');
                $this->load->view('admin/Dashboard/Template/footer');
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <!-- INCLUDE SCROLL TOP BUTTON IF REQIRED (assets/buttons/scroll-top-button)-->
    <?php
        defined('BASEPATH') OR exit('No direct script access allowed.');
        $this->load->view('admin/assets/buttons/scroll-top-button');
    ?>
    <!-- Logout Modal-->
    <!-- ICLUDE MOADL LOGOUT IF REQIRED (modals/logout-modal) -->
    <?php
        defined('BASEPATH') OR exit('No direct script access allowed.');
        $this->load->view('admin/modals/logout-modal');
    ?>
</body>

</html>

<!-- Content Row -->
