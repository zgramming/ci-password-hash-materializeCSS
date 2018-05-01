<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">
</head>
<body class="grey lighten-4">
	<main>
		<div class="container">
				<?php if ($this->session->flashdata('error')) { ?>
					<script type="text/javascript">
						var toastHTML = '<center ><h6><?php echo $this->session->flashdata("error"); ?></h6></center>';
						M.toast({html: toastHTML,classes:'white-text red'});
					</script>
				<?php }else{?>
					<script type="text/javascript">
						var toastHTML = '<center ><h6><?php echo $this->session->flashdata("success"); ?></h6></center>';
						M.toast({html: toastHTML,classes:'white-text green'});
					</script>
				<?php } ?>
			<div class="card-panel hoverable z-depth-2 blue white-text">
				<center><h4><b><i>Register User</i></b></h4></center>
				<div class="divider"></div>
				<?php echo form_open('Register/simpan'); ?>
					<div class="container">
						<div class="row">
							<div class="input-field login col s4">
					          <input type="text" class="validate" name="usr" required autofocus>
					          <label>Username</label>
					        </div>
							<div class="input-field login col s4">
					          <input type="email" class="validate" name="eml" required>
					          <label>Email</label>
					        </div>
							<div class="input-field login col s4">
					          <input  type="password" class="validate" name="psd" required>
					          <label>Password</label>
					        </div>
					        <div class="input-field login col s12">
					          <button type="submit" class="btn btn-lg waves-light waves-effect green" style="width: 100%;"> Kirim </button>
					        </div>
						</div>
					</div>
				<?php echo form_close(); ?>
			</div>
			<div class="card-panel">
				<a href="<?php base_url() ?>Auth" class="btn orange waves-effect waves-light " style="width: 100%;">
					Kembali
				</a>
			</div>
		</div>
	</main>
	<footer class="page-footer grey lighten-4">
		<div class="footer-copyright blue">
            <div class="container">
            <center><b>©Zgramming 2018</b></center>
            </div>
          </div>
	</footer>
</body>
</html>