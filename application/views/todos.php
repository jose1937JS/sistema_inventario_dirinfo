
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dir. Informatica | UNERG</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('application/views/vendor/') ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?= base_url('application/views/vendor/') ?>datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('application/views/vendor/') ?>css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
<div id="content-wrapper">

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-md-4">
				<img src="<?= base_url('application/views/vendor/') ?>img/unerg.png" class="img" alt="UNERG"style="	width:15rem; ">
			</div>
			<div class="col-sm-8 col-md-8 text-center">
				<h4>Universidad Nacional Experimental de los Llanos Centrales Romulo Gallegos</h4>
				<h5>Direccion de Informatica</h5>
			</div>
		</div>
		<div class="card mb-3">
			<div class="card-header text-center">
				<i class="fas fa-table"></i>
			Listado de todos los equipos registrados hasta el momento</div>
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
<script src="<?= base_url('application/views/vendor/') ?>js/script.js"></script>
<script type="text/javascript">
	$(() => {
		setTimeout(() => {
			print()
			history.back()
		}, 400)

	})
</script>

</body>

</html>
