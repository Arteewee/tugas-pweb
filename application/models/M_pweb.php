<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pweb extends CI_Model {

	function read(){
		$this->db->order_by('jenis_mobil','desc');
		return $this->db->get('tbl_kendaraan')->result_array();
	}

	function create(){
		$nama_kendaraan = $this->input->post('nk');
		$nama_pemilik = $this->input->post('np');
		$plat_nomor = $this->input->post('pn');
		$km_awal = $this->input->post('ka');
		$km_akhir = ($km_awal + 10000);
		$tgl1 = $this->input->post('tgl1');
		$tgl2 = $this->input->post('tgl2');
		$gbr = $this->input->post('gbr');
		$rata = date('Y-m-d');
		if($rata >= $tgl2){
			$keterangan = "Harus ganti Oli";
		} 
		else{
			$keterangan = "Belum Saatnya Ganti Oli";
		}
		$data = [
			'jenis_mobil' => $this->input->post('jenis_mbl'),
			'nama_kendaraan' => $nama_kendaraan,
			'nama_pemilik' => $nama_pemilik,
			'plat_nomor' => $plat_nomor,
			'km_awal' => $km_awal,
			'km_akhir' => $km_akhir,
			'tgl1' => $tgl1,
			'tgl2' => $tgl2,
			'gbr' => $gbr,
			'rata' => $rata,
			'keterangan' => $keterangan,
		];

		$this->db->insert('tbl_kendaraan',$data);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Ditambah');
			redirect('pweb', 'refresh');
		}
	}

	function get_row($id){
		return $this->db->get_where('tbl_kendaraan', ['id_nilai' => $id])->row_array();
	}

	function update(){
		$nama_kendaraan = $this->input->post('nk');
		$nama_pemilik = $this->input->post('np');
		$plat_nomor = $this->input->post('pn');
		$km_awal = $this->input->post('ka');
		$km_akhir = ($km_awal + 10000);
		$tgl1 = $this->input->post('tgl1');
		$tgl2 = $this->input->post('tgl2');
		$gbr = $this->input->post('gbr');
		$rata = date('Y-m-d');
		if($rata >= $tgl2){
			$keterangan = "harus ganti oli";
		} 
		else{
			$keterangan ="belum saatnya ganti oli";
		}
		$data = [
			'jenis_mobil' => $this->input->post('jenis_mbl'),
			'nama_kendaraan' => $nama_kendaraan,
			'nama_pemilik' => $nama_pemilik,
			'plat_nomor' => $plat_nomor,
			'km_awal' => $km_awal,
			'km_akhir' => $km_akhir,
			'tgl1' => $tgl1,
			'tgl2' => $tgl2,
			'gbr' => $gbr,
			'rata' => $rata,
			'keterangan' => $keterangan,
		];

		$this->db->where('id_nilai', $this->input->post('id_nilai'));
		$this->db->update('tbl_kendaraan',$data);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Diubah');
			redirect('pweb', 'refresh');
		}
	}

	function hapus($id){
		$this->db->where('id_nilai', $id);
		$this->db->delete('tbl_kendaraan');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('pesan', 'Dihapus');
			redirect('pweb', 'refresh');
		}
	}

}