<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabungController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('TabungCalculator');
	}

	public function hitung_tabung()
	{
		$jari_jari = 5;
		$tinggi = 3;

		$this->tabungcalculator->hitung($jari_jari, $tinggi);
	}
}
