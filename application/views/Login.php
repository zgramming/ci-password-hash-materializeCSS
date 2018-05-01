<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
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

			<div class="card-panel blue hoverable z-depth-2">
				<?php if ($this->session->flashdata('error')) {?>
				<script type="text/javascript">
					var toastHTML = '<center ><h6><?php echo $this->session->flashdata("error"); ?></h6></center>';
					M.toast({html: toastHTML,classes:'white-text red'});
				</script>
				<?php } ?>
				<div class="row">
					<div class="col s12 m6 l6 border-right"> 
						<h4 class="white-text"><center><i><b> Simply Login </b> <p><small>With Password Hash</small></p></i></center></h4>
					</div>
					<div class="col s12 m6 l6">
						<?php echo form_open('Auth/proses_login'); ?>
							<div class="input-field login col s12">
					          <i class="material-icons prefix">email</i>
					          <input  type="text" class="validate" name="eml" autofocus required>
					          <label for="icon_prefix"> Email </label>
					        </div>
					        <div class="input-field login col s12">
					          <i class="material-icons prefix">lock</i>
					          <input  type="password" class="validate" name="psd" required>
					          <label for="icon_prefix"> Password </label>
					        </div>
					        <button type="submit" class="btn btn-lg waves-effect waves-light green right" name="submit">
					        	Login
					        </button>
						<?php echo form_close(); ?>
					</div>	
				</div>
				<div class="card-panel ">
					<center> Belum Punya Account ? <p>
						<a href="<?php echo base_url(); ?>Register" class="btn btn-lg waves-light waves-effect orange pulse">
							Daftar Disini
						</a>
					</center>
				</div>
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