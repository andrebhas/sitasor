<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Histori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_tes_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $data_tes = $this->Data_tes_model->get_all();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_tes', '/data_tes');

        $data = array(
            'title'       => 'Data_tes' ,
            'content'     => 'histori/data_tes_list', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            
            'data_tes_data' => $data_tes
        );

        $this->load->view('layout/layout', $data);
    }

}