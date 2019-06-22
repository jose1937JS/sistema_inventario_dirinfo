
<body class="bg-dark"> 
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<?php if ($this->session->flashdata('usuario')): ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<i class="fas fa-bug mr-2"></i> <?= $this->session->flashdata('usuario') ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>	
			<?php endif ?>
			<div class="card-header text-center">Inicio de sesion</div>
			<div class="card-body">
				<?= validation_errors(); ?>
				<?= form_open('Controller/login')  ?>				
				<div class="form-group">
					<div class="form-label-group">
						<input type="text" id="inputEmail" name="usuario" class="form-control" placeholder="Usuario" required="required" autofocus="autofocus">
						<label for="inputEmail">Usuario</label>
					</div>
				</div>
				<div class="form-group">
					<div class="form-label-group">
						<input type="password" id="inputPassword" name="contrasenia" class="form-control" placeholder="Contraseña" required="required">
						<label for="inputPassword">Contaseña</label>
					</div>
				</div>
				<div class="form-group">
					<div class="form-label-group">
						<button type="submit" id="inputPassword" class="text-center btn btn-primary btn-block" name="entrar" required="required">Entrar</button>
					</div>
					<div class="form-group col-md-12 col-lg-12 text-center py-2">
						<a href="#registroPersona" data-toggle="modal">¿No tienes cuenta? ¡Registrate ahora!</a>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>


<!-- Modal de regitro de un nuevo usuario-->

			<div class="modal fade" id="registroPersona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header card-header text-center">
							Registro de un nuevo usuario
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body  card-body">
							<?= form_open('registrousuario');  ?>
								<div class="form-group">
									<div class="form-row">
									    <div class="form-group col-md-12">
											<div class="form-label-group">
												<input type="text" id="nombre" minlength="3" maxlength="20" class="form-control" name="nombreUsuario" placeholder="Nombre" required="required">
												<label for="nombre">Nombre</label>
											</div>
									    </div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-row">
									    <div class="form-group col-md-12">
											<div class="form-label-group">
												<input type="text" id="apelldo" minlength="3" maxlength="30" class="form-control" name="apellidoUsuario" placeholder="Apellido" required="required">
												<label for="apelldo">Apellido</label>
											</div>
									    </div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-row">
									    <div class="form-group col-md-12">
											<div class="form-label-group">
												<input type="text" id="email" minlength="5" maxlength="50" class="form-control" name="emailUsuario" placeholder="Correo electronico" required="required">
												<label for="email">Correo electronico</label>
											</div>
									    </div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-row">
									    <div class="form-group col-md-12">
											<div class="form-label-group">
												<input type="password" id="pass" minlength="5" maxlength="20" class="form-control" name="passUsuario" placeholder="Contraseña" required="required">
												<label for="pass">Contraseña</label>
											</div>
									    </div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-label-group">
										<button type="submit" id="inputRegistro" class="p-3 text-center btn btn-primary btn-block" name="registrar" required="required">Registrar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>




<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('application/views/vendor/') ?>jquery/jquery.min.js"></script>
<script src="<?= base_url('application/views/vendor/') ?>bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('application/views/vendor/') ?>jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->

<script src="<?= base_url('application/views/vendor/') ?>datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('application/views/vendor/') ?>datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('application/views/vendor/') ?>js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="<?= base_url('application/views/vendor/') ?>js/demo/datatables-demo.js"></script>

</body>

</html>

