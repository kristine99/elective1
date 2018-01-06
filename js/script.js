$(document).ready(function(){
	$('.btnedit').click(function(event){
		$id = $(event.currentTarget).parent().parent().children().children().children("#id").val()
		$user = $(event.currentTarget).parent().parent().children().children().children("#user").val()
		$physician = $(event.currentTarget).parent().parent().children().children("#physician").text()
		$time = $(event.currentTarget).parent().parent().children().children("#time").text()
		$date = $(event.currentTarget).parent().parent().children().children("#date").text()
		$('#name').attr('value',$user)
		$('#clientid').attr('value',$id)
		$('#btnedit').hide()
		$('#btned').show()
		$("[id='Cedit']").hide()
	})
	$('.btndel').click(function(event){
		$(event.currentTarget).parent().parent().children().children().children("#id").attr('name','currentid')
	})
});