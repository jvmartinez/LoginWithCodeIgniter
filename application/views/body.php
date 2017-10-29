<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );?>
<div class="col-md-12 col-lg-12" style="margin: 10% 0 0 0%;">
	<div class="row">
		<div class="col-md-3 col-lg-3"></div>
		<div class="panel col-md-6 col-lg-6">
			<h3 style="margin: 5%;">Inicio de sesion</h3>
			<form class="col-md-12 col-lg-12"
				action="<?php echo base_url();?>Login/checkLogin" method="post">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon"><img
							src="<?php echo base_url();?>Lib/img/user-3.png" width="24"
							height="24" /></i></span> <input type="text" class="form-control"
						style="height: 42px" id="correo" placeholder="Usuario" name="user">
				</div>
				<br />
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon"><img
							src="<?php echo base_url();?>Lib/img/pass.png" width="24"
							height="24" /></i></span> <input type="password"
						class="form-control" style="height: 42px" id="correo"
						placeholder="Contraseña" name="password">
				</div>
				<br />
				<button class="btn btn-primary col-md-3" style="margin: 0 0 0 35%">Entrar</button>
			</form>
		</div>
		<div class="col-md-3 col-lg-3"></div>
	</div>
<?php
if ($typeNotification != null) {
	$message ["type"] = $typeNotification;
	$message ["message"] = $typeMessage;
	$this->load->view ( 'messageNotification', $message );
} else {
	?>
 	</div>
<?php 
 }
?>