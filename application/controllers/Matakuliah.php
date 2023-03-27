<?php

class Matakuliah extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {

        // Load The Input Library
        $this->load->library('input');

        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks'),
        ];

        $this->load->view('view-data-matakuliah', $data);
    }
}
