<?php
class download extends CI_Controller {

	function __contructs(){
		parent::__contructs();
	}
	public function downloadmonita($id=3)
	{
		$file = $this->db->get_where('download', array('id' => $id));
		if($file->num_rows() == 1)
		{
			$this->load->view('v_monita', array('file' => $file));
		} else {
			echo "tidak ditemukan";
		}
	}
}