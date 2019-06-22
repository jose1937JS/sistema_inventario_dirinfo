            <div id="content-wrapper">

                <div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
						<li class="breadcrumb-item active">Equipos en reparacion.</li>
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
                            <th>Fecha de ingreso</th>
                            <th>Descripcion de falla</th>
                            <th>Estatus</th>
                            <th>Departamento</th>
                            <th>Nombre</th>
                            <th>Apellido</th>                            
                        </tr>
                    </thead>
                <tbody>
					<?php foreach ($reparacion as $rep): ?>
						
						<tr>
							<td><?= $rep->nombre_eq ?></td>
							<td><?= $rep->serial ?></td>
							<td><?= $rep->fecha_ingreso ?></td>
							<td><?= $rep->descripcion_falla ?></td>
							<td><?= $rep->status ?></td>
							<td><?= $rep->nombre_dpto ?></td>
							<td><?= $rep->nombre ?></td>
							<td><?= $rep->apellido ?></td>

					<?php endforeach ?>
                </tbody>
            </table>
				</div>
					<div class="row">
						<div class="col-sm-10 col-md-10"></div>
						<div class="col-sm-2 col-md-2">
								<?= anchor('reparacionpdf', '
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

