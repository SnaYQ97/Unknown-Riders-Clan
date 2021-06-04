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

                    <!-- Content Row -->
                    <div class="row">

                    <div class="col-lg-6">

                        <!-- Overflow Hidden -->
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Overflow Hidden Utilty</h6>
                            </div>
                            <div class="card-body">
                                Use <code>.o-hidden</code> to set the overflow property of any element to hidden.
                            </div>
                        </div>

                        <!-- Progress Small -->
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Progress Small Utility</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-1 small">Normal Progress Bar</div>
                                <div class="progress mb-4">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="mb-1 small">Small Progress Bar</div>
                                <div class="progress progress-sm mb-2">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                Use the <code>.progress-sm</code> class along with <code>.progress</code>
                            </div>
                        </div>

                        <!-- Dropdown No Arrow -->
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Dropdown - No Arrow</h6>
                            </div>
                            <div class="card-body">
                                <div class="dropdown no-arrow mb-4">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown (no arrow)
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                                Add the <code>.no-arrow</code> class alongside the <code>.dropdown</code>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <!-- Roitation Utilities -->
                        <div class="card">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Rotation Utilities</h6>
                            </div>
                            <div class="card-body text-center">
                                <div class="bg-primary text-white p-3 rotate-15 d-inline-block my-4">.rotate-15</div>
                                <hr>
                                <div class="bg-primary text-white p-3 rotate-n-15 d-inline-block my-4">.rotate-n-15</div>
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