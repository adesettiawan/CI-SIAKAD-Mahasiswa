<?php
class Jurusan extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

	public function index()
	{
        $data['jurusan']= $this->m_jurusan->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jurusan', $data);
        $this->load->view('templates/footer');
    }
}