$(() => {

Noty.overrideDefaults({
    layout   : 'topRight',
    theme    : 'mint',
    closeWith: ['click', 'button'],
    animation: {
        open : 'animated fadeInRight',
        close: 'animated fadeOutRight'
    }
});

	$('#form-registro').submit(function(e){
		e.preventDefault()

		$.ajax({
			method: 'post',
			data: $(this).serialize(),
			url : 'http://127.0.0.1/sistema_inventario/index.php/Controller/registro'
		})

		.done((d) => {

		})

		.fail((error) => {

		})
	})
})
