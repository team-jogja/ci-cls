<?php

class Mahasiswa_model extends CI_model {

    public function getAllMahasiswa()
    {
        // $query = $this->db->get('mahasiswa');
        // return $query->result_array();

        return  $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan')
        ];
    
         $this->db->insert('mahasiswa', $data);
    }

    public function deleteMahasiswaById($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    public function detailById($id)
    {
       return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahDataMahasiswa($id)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan')
        ];
    
        // $this->db->where('id', $id);
        // $this->db->update('mahasiswa', $data);

        $this->db->update('mahasiswa', $data, ['id' => $id]);
    }

    public function cariMahasiswa()
    {
        $key = $this->input->post('keyword', true);
        $this->db->like('nama', $key);
        $this->db->or_like('jurusan', $key);
        return $this->db->get('mahasiswa')->result_array();
    }

}