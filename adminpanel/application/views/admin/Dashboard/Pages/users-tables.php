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
                    <!-- DataTales Example -->
                    <!-- INCULDEPAGE ADD-MODAL -->
                    <?php
                        defined('BASEPATH') OR exit('No direct script access allowed.');
                        $this->load->view('admin/modals/add_modal.php');
                    ?>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registered users</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Social Club Nick</th>
                                            <th>Role</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td class="gutter">
                                                <div class="line number1 index0 alt2" style="display: none;">1</div>
                                            </td>
                                            <td class="code">
                                                <div class="container" style="display: none;">
                                                    <div class="line number1 index0 alt2" style="display: none;">&nbsp;</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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