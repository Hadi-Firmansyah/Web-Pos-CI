<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

	<!-- Main Content -->
	<div id="content">

		<!-- Topbar -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

			<!-- Sidebar Toggle (Topbar) -->
			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
				<i class="fa fa-bars"></i>
			</button>


			<!-- Topbar Navbar -->
			<ul class="navbar-nav ml-auto">

				<!-- <div class="topbar-divider d-none d-sm-block"></div> -->

				<!-- Nav Item - User Information -->
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-700" style="font-size : 17px;">
								<b><?php echo $this->session->userdata('name');?>
								<i class="fas fa-fw fa-user" style="font-size : 17px;"></i>	
								</b></span>
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
						aria-labelledby="userDropdown" style="font-size : 17px;">
						<a class="dropdown-item" href="#">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-1000"></i>
							Edit Profile
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('Auth/logout') ;?>" data-toggle="modal"
							data-target="#logoutModal">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-1000"></i>
							Logout
						</a>
					</div>
				</li>

			</ul>

		</nav>
		<!-- End of Topbar -->
