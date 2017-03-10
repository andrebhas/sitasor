<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_tes_model');
        $this->load->model('Users_model');
        $this->load->model('Desa_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $data_tes1 = $this->Data_tes_model->get_all();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Home', '/data_tes');

        $data = array(
            'title'       => 'Home' ,
            'content'     => 'dashboard/dashboard', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            
            'dashboard_data' => $data_tes1
        );

        $this->load->view('layout/layout', $data);
    }
    
    public function cetak_histori() 
    {
        $data_tes1 = $this->Data_tes_model->get_all();
        $data = array(
            'dashboard_data' => $data_tes1
        );
        $this->load->view('dashboard/cetak', $data);
    }
}
