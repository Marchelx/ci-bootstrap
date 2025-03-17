<?php
class Siswa_model extends CI_Model {

    public function get_all_siswa() {
        return $this->db->get('siswa')->result();
    }

    public function insert_siswa($data) {
        return $this->db->insert('siswa', $data);
    }

    public function get_siswa_by_id($id) {
        return $this->db->where('id', $id)->get('siswa')->row();
    }

    public function update_siswa($id, $data) {
        return $this->db->where('id', $id)->update('siswa', $data);
    }

    public function delete_siswa($id) {
        return $this->db->where('id', $id)->delete('siswa');
    }
}
?>
