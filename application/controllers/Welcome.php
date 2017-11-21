<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('table');
                $this->template->load('template','table2');
	}
        
        	public function form()
	{
		//$this->load->view('table');
                $this->template->load('template','form');
	}
        
        function test(){
            $this->db->like('nama_lengkap',$_GET['term']);
            $this->db->select('nama_lengkap');
            $products = $this->db->get('pegawai')->result();
            foreach($products as $product){
                 $return_arr[] =  $product->nama_lengkap;
            }

            echo json_encode($return_arr);
        }
}
