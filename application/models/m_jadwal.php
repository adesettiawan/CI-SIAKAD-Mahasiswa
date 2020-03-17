<?php
class M_jadwal extends CI_Model {
    public function tampil_data() {
       return $this->db->get('tb_jadwal');
    }

    public function detail_data($id = NULL) {
        return $this->db->get_where('tb_jadwal', array('id' =>$id))->row();
    }
}