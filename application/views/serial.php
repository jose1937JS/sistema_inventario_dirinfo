<div id="content-wrapper">

	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">Filtrado por serial.</li>
		</ol>
		
		<!-- DataTables Example -->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-table"></i>
			Listado de equipos.</div>
			<div class="card-body">
				<div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0"> <!-- id="dataTable" -->
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Serial</th>
                            <th>Ingreso</th>
                            <th>Falla</th>
                            <th>Estatus</th>
                            <th>Departamento</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
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
									<td><?= $eq->nombre ?></td>
									<td><?= $eq->apellido ?></td>
								</tr>

							<?php endforeach ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>

	</div>
