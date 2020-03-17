<?php
class Jadwal extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

	public function index()
	{
        $data['jadwal']= $this->m_jadwal->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jadwal', $data);
        $this->load->view('templates/footer');
    }

    public function print() {
        $data['jadwal'] = $this->m_jadwal->tampil_data("tb_jadwal")->result();
        $this->load->view('printjadwal', $data);
    }

    public function detailjadwal($id) {
        $this->load->model('m_jadwal');
        $detail['detail'] = $this->m_jadwal->detail_data($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detailjadwal', $detail);
        $this->load->view('templates/footer');
    }
    
}