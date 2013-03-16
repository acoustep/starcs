// Generated by CoffeeScript 1.4.0
var $;

$ = jQuery;

$('.delete').on('click', function(e) {
  var delete_id, j;
  j = $(this);
  delete_id = j.data('id');
  if (confirm('Are you sure?')) {
    $.ajax({
      url: delete_id,
      type: 'POST',
      data: {
        _METHOD: 'DELETE',
        id: delete_id
      },
      success: function() {
        return j.parents('td').addClass('remove').siblings('td').addClass('remove').delay(1000).parent().fadeOut(1000, function() {
          return $(this).remove();
        });
      }
    });
  }
  return e.preventDefault();
});
