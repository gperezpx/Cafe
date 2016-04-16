<?php include("header.php"); ?>
	<br>
	<section class="container-fluid">
		<form >
			<div class="col-xs-8 col-xs-offset-2">
				<div class="col-xs-8 col-xs-offset-2 form-group recuadro">
					<div class="col-xs-offset-5">
						<figure>
							<img class="user" src="images/user.png">
						</figure>
					</div>
					<div class="form-group">
						<label class="label-control col-xs-4 col-xs-offset-2 space">Usuario:</label>
						<div class="col-xs-6 space">
							<input id="User" class="form-control" type="text" placeholder="Usuario" required autofocus>
						</div>
					</div>
					<div class="form-group">
							<label class="label-control col-xs-4 col-xs-offset-2 space">Contraseña:</label>
						<div class="col-xs-6 space">
							<input id="Pass" class="form-control" type="password" required>
						</div>
					</div>	
					<div class="col-xs-offset-5 form-group">
							<button type="button" class="btn btn-primary">Ingresar</button>
					</div>		
				</div>
			</div>
		</form>
	</section>
<?php include("Footer.php"); ?>
	