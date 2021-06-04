<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
        <div class="sidebar-brand-icon">
            
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel 1.0</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <?php 
        if(isset($header)&&$header == 'Dashboard') {
            echo '<li class="nav-item active">';
        }else {
            echo '<li class="nav-item">';
        }
    ?>
        <a class="nav-link" href="index">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Statystyki</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Addons</div>

    <!-- Nav Item - Tables Collapse Menu -->
    <?php 
        if(isset($header)&&$header == 'Tables') {
            echo '<li class="nav-item active">';
            echo ' <a href="#" data-toggle="collapse" data-target="#collapseTables" aria-controls="collapseTables" class="nav-link colapsed" aria-expanded="true"><i class="fas fa-fw fa-table"></i><span>Tabele</span></a>';
            echo '<div id="collapseTables" aria-labelledby="headingTables" data-parent="#accordionSidebar" style="" class="hide hide collapse show">';
        }else {
            echo '<li class="nav-item">';
            echo '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTables" aria-expanded="true" aria-controls="collapseTables"><i class="fas fa-fw fa-table"></i><span>Tabele</span></a>';
            echo '<div id="collapseTables" class="collapse" aria-labelledby="headingTables" data-parent="#accordionSidebar">';
        }
    ?>
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tabele:</h6>
                <?php
                    if(isset($item)) {
                        switch ($item) {
                            case "players":
                                echo '<a class="collapse-item active" href="players">Klanowicze</a>';
                                echo '<a class="collapse-item" href="films">Filmy</a>';
                                echo '<a class="collapse-item" href="photos">Photos</a>';
                                break;
                            case "films":
                                echo '<a class="collapse-item" href="players">Klanowicze</a>';
                                echo '<a class="collapse-item active" href="films">Filmy</a>';
                                echo '<a class="collapse-item" href="photos">Photos</a>';
                                break;
                            case "photos":
                                echo '<a class="collapse-item" href="players">Klanowicze</a>';
                                echo '<a class="collapse-item" href="films">Filmy</a>';
                                echo '<a class="collapse-item active" href="photos">Photos</a>';
                                break;
                            default:
                                echo '<a class="collapse-item" href="players">Klanowicze</a>';
                                echo '<a class="collapse-item" href="films">Filmy</a>';
                                echo '<a class="collapse-item" href="photos">Photos</a>';
                        }
                    }
                ?>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->