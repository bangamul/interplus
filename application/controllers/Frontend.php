<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('frontend/home/index');
	}

	// Tentang

	public function profil()
	{
		$this->load->view('frontend/tentang/head_tentang');
		$this->load->view('frontend/tentang/profil');
		$this->load->view('frontend/tentang/foot_tentang');
	}

	public function struktur()
	{
		$this->load->view('frontend/tentang/head_tentang');
		$this->load->view('frontend/tentang/struktur');
		$this->load->view('frontend/tentang/foot_tentang');
	}

	public function tatakelola()
	{
		$this->load->view('frontend/tentang/head_tentang');
		$this->load->view('frontend/tentang/tatakelola');
		$this->load->view('frontend/tentang/foot_tentang');
	}

	public function mutu()
	{
		$this->load->view('frontend/tentang/head_tentang');
		$this->load->view('frontend/tentang/mutu');
		$this->load->view('frontend/tentang/foot_tentang');
	}

	public function ketidakberpihakan()
	{
		$this->load->view('frontend/tentang/head_tentang');
		$this->load->view('frontend/tentang/ketidakberpihakan');
		$this->load->view('frontend/tentang/foot_tentang');
	}

	public function antisuap()
	{
		$this->load->view('frontend/tentang/head_tentang');
		$this->load->view('frontend/tentang/antisuap');
		$this->load->view('frontend/tentang/foot_tentang');
	}

	public function artilogo()
	{
		$this->load->view('frontend/tentang/head_tentang');
		$this->load->view('frontend/tentang/artilogo');
		$this->load->view('frontend/tentang/foot_tentang');
	}

	// end: Tentang

	public function galeri()
	{
		$this->load->view('frontend/galeri/index');
	}

	public function media()
	{
		$this->load->view('frontend/media/index');
	}

	// Layanan
	public function iso9001()
	{
		$this->load->view('frontend/layanan/head_layanan');
		$this->load->view('frontend/layanan/iso9001');
		$this->load->view('frontend/layanan/foot_layanan');
	}
	public function iso13485()
	{
		$this->load->view('frontend/layanan/head_layanan');
		$this->load->view('frontend/layanan/iso13485');
		$this->load->view('frontend/layanan/foot_layanan');
	}
	public function iso14001()
	{
		$this->load->view('frontend/layanan/head_layanan');
		$this->load->view('frontend/layanan/iso14001');
		$this->load->view('frontend/layanan/foot_layanan');
	}
	public function iso21001()
	{
		$this->load->view('frontend/layanan/head_layanan');
		$this->load->view('frontend/layanan/iso21001');
		$this->load->view('frontend/layanan/foot_layanan');
	}
	public function iso22000()
	{
		$this->load->view('frontend/layanan/head_layanan');
		$this->load->view('frontend/layanan/iso22000');
		$this->load->view('frontend/layanan/foot_layanan');
	}
	public function iso27001()
	{
		$this->load->view('frontend/layanan/head_layanan');
		$this->load->view('frontend/layanan/iso27001');
		$this->load->view('frontend/layanan/foot_layanan');
	}
	public function iso37001()
	{
		$this->load->view('frontend/layanan/head_layanan');
		$this->load->view('frontend/layanan/iso37001');
		$this->load->view('frontend/layanan/foot_layanan');
	}
	public function iso45001()
	{
		$this->load->view('frontend/layanan/head_layanan');
		$this->load->view('frontend/layanan/iso45001');
		$this->load->view('frontend/layanan/foot_layanan');
	}
	public function iso50001()
	{
		$this->load->view('frontend/layanan/head_layanan');
		$this->load->view('frontend/layanan/iso50001');
		$this->load->view('frontend/layanan/foot_layanan');
	}
	
	// end: Layanan

	// Sertifikasi
	public function konsultasi()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/konsultasi');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function sertifikasi_awal()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/sertifikasi_awal');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function sertifikasi_ulang()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/sertifikasi_ulang');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function persyaratan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/persyaratan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function permohonan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/permohonan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function penolakan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/penolakan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function pembekuan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/pembekuan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function kajian()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/kajian');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function audit_satu()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/audit_satu');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function audit_dua()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/audit_dua');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function surveillance()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/surveillance');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function perjanjian()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/perjanjian');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function keputusan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/keputusan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function penerbitan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/penerbitan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function pencabutan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/pencabutan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function pengaktifan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/pengaktifan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function perluasan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/perluasan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function pengurangan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/pengurangan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	
	// end: Sertifikasi

	
	public function keluhan()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/keluhan');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function ketentuan_logo()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/ketentuan_logo');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}
	public function hak_kewajiban()
	{
		$this->load->view('frontend/sertifikasi/head_sertifikasi');
		$this->load->view('frontend/sertifikasi/hak_kewajiban');
		$this->load->view('frontend/sertifikasi/foot_sertifikasi');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function profile()
	{
		$this->load->view('frontend/profile/index');
	}

	public function certificate()
	{
		$this->load->view('frontend/profile/certificate');
	}
	
}
