<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-code"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Administrator</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Administrator
			</div>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Admin/index');?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Admin/user');?>">
					<i class="fas fa-fw fa-user"></i>
					<span>User</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Apps
			</div>

			<!-- <li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Admin/tables');?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Tables</span></a>
			</li> -->

			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Admin/foods');?>">
					<i class="fas fa-fw fa-utensils"></i>
					<span>Foods</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Heading -->
			<div class="sidebar-heading">
				Session
			</div>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('Auth/logout') ;?>">
					<i class="fas fa-fw fa-sign-out-alt"></i>
					<span>Logout</span></a>
			</li>

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->
