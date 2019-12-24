<?php

class Mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        if ( $this->input->post('keyword') )
        {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariMahasiswa();
        } 
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/footer');

    }

    public function tambah(){
        $data['title'] = 'New Mahasiswa';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if ($this->form_validation->run() == FALSE)
         {
           $this->load->view('templates/header',$data);
           $this->load->view('mahasiswa/new-mahasiswa');
           $this->load->view('templates/footer');
         }
         else
         {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('mahasiswa');
        }
        
    }

    public function hapus($id){
        $this->Mahasiswa_model->deleteMahasiswaById($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('mahasiswa');
    }

    public function detail($id){
        $data['mahasiswa'] = $this->Mahasiswa_model->detailById($id);
        $data['title'] = 'Detail Mahasiswa';
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/detail-mahasiswa',$data);
        $this->load->view('templates/footer');
    }

    public function ubah($id){
        $data['title'] = 'Edit Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->detailById($id);
        $data['jurusan'] = ['Tehnik Informatika','Sistem Informasi','Management'];
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        
        if ($this->form_validation->run() == FALSE)
         {
           $this->load->view('templates/header',$data);
           $this->load->view('mahasiswa/ubah-mahasiswa',$data);
           $this->load->view('templates/footer');
         }
         else
         {
            $result = $this->Mahasiswa_model->ubahDataMahasiswa($id);
            $this->session->set_flashdata('flash','Diubah');
            redirect('mahasiswa');
        }
        
    }
}