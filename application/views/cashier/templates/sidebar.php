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
				<div class="sidebar-brand-text mx-3">Cashier</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Apps
			</div>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Cashier/order');?>">
				<i class="fas fa-fw fa-shopping-cart"></i>
					<span>Entry Order</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?php echo site_url('Cashier/transaction');?>">
				<i class="fas fa-fw fa-credit-card"></i>
					<span>Transaction</span></a>
			</li>

			<!-- Heading -->
			<div class="sidebar-heading">
				Report
			</div>

			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="fas fa-fw fa-download"></i>
					<span>Report</span></a>
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
