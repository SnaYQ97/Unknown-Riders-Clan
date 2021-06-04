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
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Page Not Found</p>
                        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                        <a href="index">&larr; Back to Dashboard</a>
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
    <!-- NOR REQIRED HERE-->
    <!-- Logout Modal-->
    <!-- ICLUDE MOADL LOGOUT IF REQIRED (modals/logout-modal) -->
    <?php
        defined('BASEPATH') OR exit('No direct script access allowed.');
        $this->load->view('admin/modals/logout-modal');
    ?>
</body>

</html>
