<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $title ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/login/')?>images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('assets/login/')?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('assets/login/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/')?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('assets/login/')?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/')?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/')?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/')?>css/costume.css">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Ranchers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">
</head>
<style>
    body{
        font-family : 'Kufam';
    }

</style>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic">
					<img src="<?php echo base_url('assets/image/tarunabhakti.png')?>" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?php echo base_url('Auth/action_login');?>" method="post">
					<span class="login100-form-title">
						<b>LOGIN</b>
                    </span>
                    
                    <?php if($this->session->flashdata('Failed')) { ?>
					<div class="alert alert-danger" role="alert">
					<small><b><?php echo $this->session->flashdata('Failed') ?></b></small>
                    </div>

                    <?php } else if($this->session->flashdata('Message')) { ?>
					<div class="alert alert-success" role="alert">
					<small><b><?php echo $this->session->flashdata('Message') ?></b></small>
                    </div>
                    
                    <?php } else if($this->session->flashdata('Success')) { ?>
					<div class="alert alert-success" role="alert">
					<small><b><?php echo $this->session->flashdata('Success') ?></b></small>
					</div>

                    <?php } ?>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username" id="username" placeholder="Username"
							autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-20">
						<a href="<?php echo site_url('Auth');?>">
							<b>HOME</b>
						</a>
					</div>

					<div class="text-center p-t-10">
						<a href="<?php echo site_url('Auth/register');?>">
							<b>Create your Account ?</b>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/')?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/')?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('assets/login/')?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/')?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/')?>vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})

	</script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/')?>js/main.js"></script>

</body>

</html>
