<div id="content-wrapper">
	<div class="container-fluid">
		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-table"></i>
			Todos los equipos registrados hasta el momento</div>
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
							</tr>
						</thead>
						<tbody>
							<?php foreach ($equipos as $eq): ?>
								
								<tr>
									<td><?= $eq->nombre ?></td>
									<td><?= $eq->serial ?></td>
									<td><?= $eq->fecha_ingreso ?></td>
									<td><?= $eq->descripcion ?></td>
									<td><?= $eq->status ?></td>
								</tr>

							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>

						<!-- date("l d F o H:i:s") -->
		</div>
	</div>

	<script type="text/javascript">
		print();
	</script>

