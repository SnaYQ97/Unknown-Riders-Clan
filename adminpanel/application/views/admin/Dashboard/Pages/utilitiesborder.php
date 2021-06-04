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

                    <!-- Border Left Utilities -->
                    <div class="col-lg-6">

                        <div class="card mb-4 py-3 border-left-primary">
                            <div class="card-body">
                                .border-left-primary
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-left-secondary">
                            <div class="card-body">
                                .border-left-secondary
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-left-success">
                            <div class="card-body">
                                .border-left-success
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-left-info">
                            <div class="card-body">
                                .border-left-info
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-left-warning">
                            <div class="card-body">
                                .border-left-warning
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-left-danger">
                            <div class="card-body">
                                .border-left-danger
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-left-dark">
                            <div class="card-body">
                                .border-left-dark
                            </div>
                        </div>

                    </div>

                    <!-- Border Bottom Utilities -->
                    <div class="col-lg-6">

                        <div class="card mb-4 py-3 border-bottom-primary">
                            <div class="card-body">
                                .border-bottom-primary
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-bottom-secondary">
                            <div class="card-body">
                                .border-bottom-secondary
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-bottom-success">
                            <div class="card-body">
                                .border-bottom-success
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-bottom-info">
                            <div class="card-body">
                                .border-bottom-info
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-bottom-warning">
                            <div class="card-body">
                                .border-bottom-warning
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-bottom-danger">
                            <div class="card-body">
                                .border-bottom-danger
                            </div>
                        </div>

                        <div class="card mb-4 py-3 border-bottom-dark">
                            <div class="card-body">
                                .border-bottom-dark
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