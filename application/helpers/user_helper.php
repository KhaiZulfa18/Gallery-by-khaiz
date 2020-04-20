<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Fungsi ubah format tanggal
if ( !function_exists('format_tanggal') ) {
	
	function format_tanggal($tgl){
		if (!empty($tgl)) {
			$pecah = explode('-', $tgl);
			$hasil = $pecah[2].'-'.$pecah[1].'-'.$pecah[0];

			return $hasil;
		}
	}

}

// Fungsi ambil nama paket member berdasar id paket
if ( !function_exists('nama_paket_member') ) {

	function nama_paket_member($idpaket){
		$CI =& get_instance();

		$where = array('id' => $idpaket);
		$table = 'paket_member';

		$cek = $CI->useradmin->get_data_where($where,$table);
		$jml = $cek->num_rows();
		if($jml==0) {
			$nama = '';
		}
		else {
			$rec = $cek->row();
			$nama = $rec->jenis;
		}
		return $nama;
	}

}

//Fungsi Mengecek id member
if ( !function_exists('cek_idmember') ) {

	function cek_idmember($idmember){
		$CI =& get_instance();

		$where = array('id_member' => $idmember);
		$table = 'send_email_tmp';

		$cek = $CI->useradmin->get_data_where($where,$table);
		$jml = $cek->num_rows();
		if($jml==0) {
			$id = 0;
		}
		else {
			$id = 1;
		}
		return $id;
	}

}

//cek pembayaran po buku
if ( !function_exists('cek_pembayaran') ) {

	function cek_pembayaran($id){
		$CI =& get_instance();

		$where = array('id' => $id);
		$table = 'pre_order_buku';

		$cek = $CI->useradmin->get_data_where($where,$table);
		$jml = $cek->num_rows();
		if($jml==0) {
			$id = 0;
		}
		else {
			$id = 1;
		}
		return $id;
	}

}

// Fungsi format angka ke rupiah
if ( !function_exists('format_rupiah') ) {

    function format_rupiah($angka){
        $rupiah = number_format($angka,0,',','.');
        return $rupiah;
    }

}

// Fungsi ubah format tanggal Indonesia
if ( !function_exists('format_tanggal_indo') ) {
	
	function format_tanggal_indo($tgllengkap){
		if (!empty($tgllengkap)) {
			$pecah = explode(' ', $tgllengkap);
			$tanggal = $pecah[0];
			$jam = $pecah[1];

			$BulanIndo = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
			$tahun = substr($tanggal, 0, 4);
			$bulan = substr($tanggal, 5, 2);
			$tgl   = substr($tanggal, 8, 2);
 
			$hasil = $tgl.' '.$BulanIndo[(int)$bulan].' '.$tahun.', '.$jam;

			return $hasil;
		}
	}

}
