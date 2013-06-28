$ = jQuery

$('.delete')
	.on 'click', (e)->
		j = $(@)
		delete_id = j.data('id')
		if confirm 'Are you sure?'
			$.ajax
				url: delete_id
				type: 'POST'
				data: 
					_METHOD: 'DELETE'
					id: delete_id
				success: ()->
					j.parents('td')
						.addClass('remove')
							.siblings('td')
								.addClass('remove')
									.delay(1000)
										.parent()
											.fadeOut 1000, ()->
												$(this).remove()

		e.preventDefault()