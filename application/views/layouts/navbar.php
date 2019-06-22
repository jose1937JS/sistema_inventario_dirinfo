
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

	<img src="<?= base_url('application/views/vendor/') ?>img/2.png" alt="UNERG" style="width: 5rem; height: 2.5rem;" class="mx-2">
	<a class="navbar-brand mr-1" href="#">Dir. Informatica | UNERG</a>

	<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
		<i class="fas fa-bars"></i>
	</button>

	<!-- Navbar Search -->
	<?=form_open('controller/filtrarSerial', 'class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"');?>
		<!-- d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 -->
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Buscar por serial" name="serial" aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</div>
		</div>
	</form>

	<!-- Navbar -->
	<ul class="navbar-nav ml-auto ml-md-0">
		<li class="nav-item dropdown no-arrow mx-1">
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Salir</a>
				</div>
			</li>
		</li>
	</ul>
</nav>

<div id="wrapper">

	<!-- Sidebar -->
	<ul class="sidebar navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="#registroModal" data-toggle="modal">
				<i class="fas fa-fw fa-star"></i>
				<span>Registrar equipo</span>
			</a>
		</li>

		<li class="nav-item">
			<?= anchor('inicio', '
				<i class="fas fa-fw fa-circle"></i>
				<span>Inicio</span>','class="nav-link"'
			)?>

			</a>
			</li>
		<li class="nav-item">
			<?= anchor('reparacion', '
				<i class="fas fa-fw fa-gavel"></i>
				<span>En reparacion</span>','class="nav-link"'
			)?>

			</a>
			</li>
		<li class="nav-item">
			<?= anchor('daniados', '
				<i class="fas fa-fw fa-bookmark"></i>
				<span>Dañados</span>','class="nav-link"'
			)?>

			</a>
			</li>
		</ul>



			<!-- Logout Modal-->
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">¿Seguro desea salir?</h5>
							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<!--         <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div> -->
						<div class="modal-footer">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
								<!-- <a class="" href="index.html"> 
									<i class="fas fa-fw fa-gavel"></i> -->
								<?= anchor('logout', '
									<span>Salir</span>','class="btn btn-primary"'
								)?>
							</a>
						</div>
					</div>
				</div>
			</div>


			<!-- Modal de regitro de un nuevo equipo -->
			<div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Registro de un nuevo equipo</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="form-registro" method="post">
								<div class="form-group">
									<div class="form-row">
									    <div class="form-group col-md-6">
									      	<select required id="inputState" name="tipoEquipo" style="height: 3rem;" class="form-control">
												<option selected="" disabled="Tipo de equipo">Tipo de equipo</option>
												<?php foreach ($tipo_equipo as $teq): ?>
													<option value="<?= $teq->id ?>"><?= $teq->nombre_eq ?></option>
												<?php endforeach ?>
									      	</select>
									    </div>
										<div class="col-md-6">
											<div class="form-label-group">
												<input type="text" id="lastName" minlength="5" maxlength="18" class="form-control" name="serialEquipo" style="height: 3rem;" placeholder="Last name" required>
												<label for="lastName">Serial del equipo</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-label-group">
										<input type="text" id="inputEmail" minlength="8" maxlength="70" class="form-control" name="descripcionEquipo" placeholder="Email address" required style="height: 7rem;">
										<label for="inputEmail">Descripcion del equipo</label>
									</div>
								</div>
								    <div class="form-group col-md-12" style="padding: 0 !important;">
										<input type="hidden" name="fallaid" id="fallaid">
								      	<select id="inputFalla" name="tipoFalla" style="height: 3rem; width: 100% !important; " class="form-control" required>
											<option selected disabled>Tipo de falla</option>	
											<?php foreach ($fallas as $f): ?>
												<option value="<?= $f->dpto_id ?>" data-id="<?= $f->id ?>"><?= $f->descripcion_falla  ?></option>
											<?php endforeach ?>
								      	</select>
								    </div>
								<div class="form-group">
									<div class="form-label-group">
										<button type="submit" id="inputPassword" class="p-3 text-center btn btn-primary btn-block" name="entrar" required="required">Registrar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
