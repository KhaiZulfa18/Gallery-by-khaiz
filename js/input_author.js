$('#btnsimpan').click(function(){
	simpan_data();
});

function simpan_data(){

	$('#attention').html('');

	var base_url = $('#base_url').val();
	var nama = $('#nama').val();
	var account = $('#account').val();
	var link_acc = $('#link_acc').val();
	var wa = $('#wa').val();

	var lanjut = true;

	if(nama.length==0){
		$('#attention').html('Gagal Menyimpan! Nama Belum Diisi');
		return false;
	}

	if(lanjut==true){
		$.ajax({
			type : "POST", 
			url  : base_url+'admin/simpan_author',
        	data : {
        		nama:nama,
        		account:account,
        		link_acc:link_acc,
        		wa:wa
        	},
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

function clear_data(){
	$('#nama').val('');
	$('#wa').val('');
	$('#account').val('');
	$('#link_acc').val('');
}