<?php
class Dosen extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

	public function index()
	{
        $data['dosen']= $this->m_dosen->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dosen', $data);
        $this->load->view('templates/footer');
        }
        
        public function tambah_dosen() {
        $nama   = $this->input->post('nama');
        $nip   = $this->input->post('nip');
        $tgl_lahir   = $this->input->post('tgl_lahir');
        $alamat   = $this->input->post('alamat');
        $email   = $this->input->post('email');
        $foto   = $_FILES['foto'];
        if($foto=''){}else{
                $configFoto['upload_path']      = './assets/img'; //menentukan tempat penyimpanan foto
                $configFoto['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload', $configFoto);
                if(!$this->upload->do_upload('foto')) {
                        echo "Upload Foto Gagal";
                }else{
                        $foto = $this->upload->data('file_name');
                }
        }

        //array untuk menampung data yang sudah kita deklerasikan diatas
        $data = array(
                'nama'          =>$nama,
                'nip'           =>$nip,
                'tgl_lahir'     =>$tgl_lahir,
                'alamat'        =>$alamat,
                'email'         =>$email,
                'foto'          =>$foto
        );
        //membuat perintah yang ditujukan pada model bertujuan untuk memasukan data kedalam database
        $this->m_dosen->input_data($data, 'tb_dosen');
        //alert untuk menampilkan pesan data berhasil ditambahkan
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible ml-1 mr-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Ditambahkan!
        </div>');
        redirect('dosen');
        }

        public function hapusDosen($id) {
        $where = array('id' => $id);
        $this->m_dosen->hapus_data($where, 'tb_dosen');
        //alert untuk menampilkan pesan data berhasil ditambahkan
        $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible ml-1 mr-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dihapus!
        </div>');
        redirect('dosen');
        }

        public function editDosen($id) {
        $edit = array('id' => $id);
        $data['dosen'] = $this->m_dosen->edit_data($edit, 'tb_dosen')->result(); //result digunakan untuk menggenerate menjadi nilai array

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('editDosen', $data);
        $this->load->view('templates/footer');

        }

        public function update() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat   = $this->input->post('alamat');
        $email   = $this->input->post('email');
        $foto   = $_FILES['foto'];
        if($foto=''){}else{
                $configFoto['upload_path']      = './assets/img'; //menentukan tempat penyimpanan foto
                $configFoto['allowed_types']    = 'jpg|png|gif';

                $this->load->library('upload', $configFoto);
                if(!$this->upload->do_upload('foto')) {
                        echo "Upload Foto Gagal";
                }else{
                        $foto = $this->upload->data('file_name');
                }
        }

        $data = array(
                'nama'          =>$nama,
                'nip'           =>$nip,
                'tgl_lahir'     =>$tgl_lahir,
                'alamat'        =>$alamat,
                'email'         =>$email,
                'foto'          =>$foto
        );

        $where = array('id' => $id);
        $this->m_dosen->update_data($where, $data, 'tb_dosen');
        //alert untuk menampilkan pesan data berhasil ditambahkan
        $this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible ml-1 mr-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Diubah!
        </div>');
        redirect('dosen');
        }

        public function detailDosen($id) {
                $this->load->model('m_dosen');
                $detail['detail'] = $this->m_dosen->detail_data($id);

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('detailDosen', $detail);
                $this->load->view('templates/footer');
        }

        public function print() {
                $data['dosen'] = $this->m_dosen->tampil_data("tb_dosen")->result();
                $this->load->view('printdosen', $data);
        }

        public function pdf() {
                $this->load->library('dompdf_gen');

                $data['dosen'] = $this->m_dosen->tampil_data("tb_dosen")->result();
                $this->load->view('pdfdosen', $data);

                $paperSize = 'A4';
                $orientation = 'landscape';
                $html = $this->output->get_output();
                $this->dompdf->set_paper($paperSize, $orientation);

                $this->dompdf->load_html($html); //untuk convert ke pdf
                $this->dompdf->render();
                $this->dompdf->stream("Dosen.pdf", array('Attachment' =>0)); //untuk menentukan nama file output
        }

        public function search() {
                $keyword = $this->input->post('keyword');
                $data['dosen'] = $this->m_dosen->get_keyword($keyword);

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('dosen', $data);
                $this->load->view('templates/footer');
        }

}