<?php
class M_jurusan extends CI_Model {
    public function tampil_data() {
       return $this->db->get('tb_jurusan');
    }
}