<div id="content-wrapper">

	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">Bienvenido.</li>
		</ol>

		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-table"></i>
				Todos los equipos registrados hasta el momento
			</div>
			
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered"  width="100%" cellspacing="0" id="dataTable">
						<thead>
							<tr>
								<th>Tipo</th>
								<th>Serial</th>
								<th>Ingreso</th>
								<th>Falla</th>
								<th>Estatus</th>
								<th>Departamento</th>
								<th>Técnico</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($equipos as $eq): ?>
								
								<tr>
									<td><?= $eq->nombre_eq ?></td>
									<td><?= $eq->serial ?></td>
									<td><?= $eq->fecha_ingreso ?></td>
									<td><?= $eq->descripcion_falla ?></td>
									<td><?= $eq->status ?></td>
									<td><?= $eq->nombre_dpto?></td>
									<td><?= $eq->nombre ?> <?= $eq->apellido ?></td>
								</tr>

							<?php endforeach ?>
						</tbody>
					</table>
					</div>
						<div class="row">
							<div class="col-sm-10 col-md-10"></div>
								<div class="col-sm-2 col-md-2">
									<?= anchor('todospdf',
										'<i class="fas fa-fw fa-book-open"></i>
										<span>PDF</span>','class="btn btn-primary my-4" style="width: 7rem"'
									)?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

