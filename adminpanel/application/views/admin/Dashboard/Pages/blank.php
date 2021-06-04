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