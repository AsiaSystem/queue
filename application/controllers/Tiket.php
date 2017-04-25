<?php
class Tiket extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('tiket_model','tiket_model');
	}
	
	function index()
	{
		// print_r('masuk');exit();
		$data = array();
		$data['template']       ='tiket';
		$data['last_cs']        = $this->tiket_model->last_antrian(1);
		$data['last_teller']    = $this->tiket_model->last_antrian(2);
		$data = array_merge($data,basic_info());
		$this->parser->parse('index',$data);
	}	
    function add_tiket(){
		$id=$this->tiket_model->get_antrian($this->input->post('kode'));
		print_r($id);exit();
		
	}
    
    function get_antrian(){
		$id = $this->tiket_model->get_antrian($this->input->post('kode'));
		$this->output->set_output(json_encode($id));
		
	}
    
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */