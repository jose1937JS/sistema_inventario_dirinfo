$(() => {


	$('#dataTable').dataTable()

	$('#pdf').click(function(){
		print()
	})
	
	$('#form-registro').submit(function(e){
		
		e.preventDefault()
		
		// let a = $('#fallaid').val()

		$.ajax({
			method: 'post',
			url: 'http://127.0.0.1/sistema_inventario/index.php/Controller/registro',
			data: {
				tipoEquipo 		  : $('#inputState').val(),
				serialEquipo 	  : $('#lastName').val(),
				descripcionEquipo : $('#inputEmail').val(),
				tipoFalla		  : $('#inputFalla').val(),
				fallaid			  : $('#inputFalla option:selected')[0].dataset.id
			},
		})

		.done((d) => {

			$('#inputState').val('')
			$('#lastName').val('')
			$('#inputEmail').val('')
			$('#inputFalla').val('')

			toastr.success('Se ha registrado el equipo correctamente', '¡Muy Bien!')

			setTimeout(function(){
				location.reload()
			}, 1500)
		})

		.fail((error) => {
			toastr.error('Ha ocurrido un error', 'Error')
			console.log(error.responseText)
		})
	})


})
