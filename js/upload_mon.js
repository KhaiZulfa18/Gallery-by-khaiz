$('#btnsimpan').click(function(){
	simpan_data();
});

function simpan_data(){

	$('#attention').html('');

	var base_url = $('#base_url').val();
	var id_posted = $('#id_posted').val();
	var judul = $('#judul').val();
	var picture = $('#picture').prop('files')[0];
	var picture_name = $('input[name=picture]').val().split('\\').pop();
	var author = $('#author').val();
	//var account = $('#account').val();
	//var link_acc = $('#link_acc').val();

	var lanjut = true;

	if(judul.length==0){
		$('#attention').html('Gagal Menyimpan! Judul Belum Diisi');
		return false;
	}
	if(picture_name.length==0){
		$('#attention').html('Gagal Menyimpan! Gambar Belum Diisi');
		return false;
	}	

	if(lanjut==true){
		var form_data = new FormData();

		form_data.append('id_posted',id_posted);
		form_data.append('judul',judul);
		form_data.append('picture',picture);
		form_data.append('author',author);
		//form_data.append('account',account);
		//form_data.append('link_acc',link_acc);
	
		$.ajax({
			type : "POST", 
			url  : base_url+'admin/upload_mon',
        	data : form_data,
        	processData : false,
        	contentType : false,
        	dataType : "json", 
        	cache : false,
			success	: function(response){ 
				if(response.status=='gagal'){
					$('#attention').html(response.pesan);
				}
				else{
					$('#attention').html(response.pesan);
					clear_data();
            	}
			}
		});
	}
}

$('#btnclear').click(function(){
	clear_data();
	$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
    $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
});

function clear_data(){
	$('#id_posted').val('');
	$('#judul').val('');
	$('#author').val('');
	//$('#account').val('');
	//$('#link_acc').val('');
	$('#picture').ace_file_input('reset_input_ui');
}