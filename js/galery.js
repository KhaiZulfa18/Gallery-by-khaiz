$(document).ready(function(){
	tampil_data(1);
});

/*$('#status').change(function(){
	tampil_data(1);
});*/

$('#search').change(function(){
	tampil_data(1);
});

function tampil_data(){
	var base_url = $('#base_url').val();
	var search = $('#search').val();
	//var status = $('#status').val();

	$.ajax({
		type: 'POST',
		url: base_url+'galery/monsite',
		data: {
			search: search,
        },
		success: function(data) {
			reset('#search');
		}
	});
}