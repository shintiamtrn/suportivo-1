<?php

class produk extends CI_Controller {

	function __contructs(){
		parent::__contructs();
	}

	public function monita($id=1)
	{
		$data = $this->db->get_where('haliza', array('id_produk' => $id));
		if($data->num_rows() == 1)
		{
			$this->load->view('v_monita', array('data' => $data));
		} else {
			echo "tidak ditemukan";

		}

	}

	public function haliza($id=1)
	{
		$data = $this->db->get_where('haliza', array('id_produk' => $id));
		if($data->num_rows() == 1)
		{
			$this->load->view('v_haliza', array('data' => $data));
		} else {
			echo "tidak ditemukan";

		}
	}

		

	public function monita1()

	{
		$this->load->view('v_monita1');
	}

	public function monita2()

	{
		$this->load->view('v_monita2');
	}


	public function haliza1()

	{
		$this->load->view('v_haliza1');
	}

	public function haliza2()

	{

		$this->load->view('v_haliza2');
	}
}