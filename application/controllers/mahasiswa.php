<?php
class Mahasiswa extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

	public function index()
	{
        $data['mahasiswa']= $this->m_mahasiswa->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mahasiswa', $data);
        $this->load->view('templates/footer');
        }
        
        public function tambah_mahasiswa() {
        $nama   = $this->input->post('nama');
        $nim   = $this->input->post('nim');
        $tgl_lahir   = $this->input->post('tgl_lahir');
        $jurusan   = $this->input->post('jurusan');
        $alamat   = $this->input->post('alamat');
        $email   = $this->input->post('email');
        $telp   = $this->input->post('telp');
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
                'nim'           =>$nim,
                'tgl_lahir'     =>$tgl_lahir,
                'jurusan'       =>$jurusan,
                'alamat'        =>$alamat,
                'email'         =>$email,
                'telp'          =>$telp,
                'foto'          =>$foto
        );
        //membuat perintah yang ditujukan pada model bertujuan untuk memasukan data kedalam database
        $this->m_mahasiswa->input_data($data, 'tb_mahasiswa');
        //alert untuk menampilkan pesan data berhasil ditambahkan
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible ml-1 mr-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Ditambahkan!
        </div>');
        redirect('mahasiswa');
        }

        public function hapusMahasiswa($id) {
        $where = array('id' => $id);
        $this->m_mahasiswa->hapus_data($where, 'tb_mahasiswa');
        //alert untuk menampilkan pesan data berhasil ditambahkan
        $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible ml-1 mr-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Dihapus!
        </div>');
        redirect('mahasiswa');
        }

        public function editMahasiswa($id) {
        $edit = array('id' => $id);
        $data['mahasiswa'] = $this->m_mahasiswa->edit_data($edit, 'tb_mahasiswa')->result(); //result digunakan untuk menggenerate menjadi nilai array

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('editMahasiswa', $data);
        $this->load->view('templates/footer');

        }

        public function update() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jurusan = $this->input->post('jurusan');
        $alamat   = $this->input->post('alamat');
        $email   = $this->input->post('email');
        $telp   = $this->input->post('telp');
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
                'nim'           =>$nim,
                'tgl_lahir'     =>$tgl_lahir,
                'jurusan'       =>$jurusan,
                'alamat'        =>$alamat,
                'email'         =>$email,
                'telp'          =>$telp,
                'foto'          =>$foto
        );

        $where = array('id' => $id);
        $this->m_mahasiswa->update_data($where, $data, 'tb_mahasiswa');
        //alert untuk menampilkan pesan data berhasil ditambahkan
        $this->session->set_flashdata('message','<div class="alert alert-primary alert-dismissible ml-1 mr-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Diubah!
        </div>');
        redirect('mahasiswa');
        }

        public function detailMahasiswa($id) {
                $this->load->model('m_mahasiswa');
                $detail['detail'] = $this->m_mahasiswa->detail_data($id);

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('detailMahasiswa', $detail);
                $this->load->view('templates/footer');
        }

        public function print() {
                $data['mahasiswa'] = $this->m_mahasiswa->tampil_data("tb_mahasiswa")->result();
                $this->load->view('printMahasiswa', $data);
        }

        public function pdf() {
                $this->load->library('dompdf_gen');

                $data['mahasiswa'] = $this->m_mahasiswa->tampil_data("tb_mahasiswa")->result();
                $this->load->view('pdfMahasiswa', $data);

                $paperSize = 'A4';
                $orientation = 'landscape';
                $html = $this->output->get_output();
                $this->dompdf->set_paper($paperSize, $orientation);

                $this->dompdf->load_html($html); //untuk convert ke pdf
                $this->dompdf->render();
                $this->dompdf->stream("Mahasiswa.pdf", array('Attachment' =>0)); //untuk menentukan nama file output
        }

        public function search() {
                $keyword = $this->input->post('keyword');
                $data['mahasiswa'] = $this->m_mahasiswa->get_keyword($keyword);

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('mahasiswa', $data);
                $this->load->view('templates/footer');
        }
}