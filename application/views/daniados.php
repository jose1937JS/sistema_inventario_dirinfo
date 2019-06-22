		   <div id="content-wrapper">

				<div class="container-fluid">
					<!-- Breadcrumbs-->
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">Equipos dañados.</li>
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
					<?php foreach ($daniados as $dan): ?>
						
						<tr>
							<td><?= $dan->nombre_eq ?></td>
							<td><?= $dan->serial ?></td>
							<td><?= $dan->fecha_ingreso ?></td>
							<td><?= $dan->descripcion_falla ?></td>
							<td><?= $dan->status ?></td>
							<td><?= $dan->nombre_dpto?></td>
							<td><?= $dan->nombre ?></td>
							<td><?= $dan->apellido ?></td>
						</tr>

					<?php endforeach ?>
                </tbody>
			</table>
				</div>
					<div class="row">
						<div class="col-sm-10 col-md-10"></div>
						<div class="col-sm-2 col-md-2">
								
								<?= anchor('daniadospdf', '
							 		<i class="fas fa-fw fa-book-open"></i>
							 		<span>PDF</span>','class="btn btn-primary active" style="width: 7rem !important;"'
								)?>
							 </a>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>



	<!-- Estilos del pdf -->

	
