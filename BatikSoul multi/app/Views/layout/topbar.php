<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Website Portofolio Ilmuweb.Net -->
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
            <?php
                date_default_timezone_set('Asia/Jakarta');
                echo "<font color='red' face='arial bold'>";
                echo date('d-M-Y H:i:s');
                echo " WIB";
                echo "</font>";
              ?>

<div class="topbar-divider d-none d-sm-block"></div>
    <marquee><font size="4" face="Copperplate Gothic Bold"><b><i>Pengembangan Sistem Enterprise Roti-Qu</b></i></font></marquee>
        <!-- Nav Item - User Information -->
        <!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-dark">Admin</span>
                <img class="img-profile rounded-circle" src="/img/roti.png">
            </a>
            
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Kharismatul Aulia
                </a>
                <a class="dropdown-item" href="register">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="home" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>