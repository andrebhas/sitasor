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

    public function read($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_tes', '/data_tes');
        $this->breadcrumbs->push('detail', '/data_tes/read');
        $row = $this->Data_tes_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Data_tes' ,
                'content'     => 'dashboard/dashboard', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,
                
				'id_data_tes' => $row->id_data_tes,
				'id_desa' => $row->id_desa,
				'id_user' => $row->id_user,
				'tanggal' => $row->tanggal,
				'kemiringan_lereng' => $row->kemiringan_lereng,
				'kondisi_tanah' => $row->kondisi_tanah,
				'batuan_penyusun_lereng' => $row->batuan_penyusun_lereng,
				'curah_hujan' => $row->curah_hujan,
				'tata_air_lereng' => $row->tata_air_lereng,
				'vegetasi' => $row->vegetasi,
				'pola_tanam' => $row->pola_tanam,
				'penggalian_dan_pemotongan_lereng' => $row->penggalian_dan_pemotongan_lereng,
				'pencetakan_kolam' => $row->pencetakan_kolam,
				'drainase' => $row->drainase,
				'pembangunan_konstruksi' => $row->pembangunan_konstruksi,
				'kepadatan_penduduk' => $row->kepadatan_penduduk,
				'usaha_mitigasi' => $row->usaha_mitigasi,
				'hasil' => $row->hasil,
			);
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Dashboard'));
        }
    }

    public function create() 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_tes', '/data_tes');
        $this->breadcrumbs->push('tambah', '/data_tes/create');
        $data = array(
            'title'       => 'Data_tes' ,
            'content'     => 'dashboard/dashboard', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,

            'button' => 'Tambah',
            'action' => site_url('data_tes/create_action'),
		    'id_data_tes' => set_value('id_data_tes'),
		    'id_desa' => set_value('id_desa'),
		    'id_user' => set_value('id_user'),
		    'tanggal' => set_value('tanggal'),
		    'kemiringan_lereng' => set_value('kemiringan_lereng'),
		    'kondisi_tanah' => set_value('kondisi_tanah'),
		    'batuan_penyusun_lereng' => set_value('batuan_penyusun_lereng'),
		    'curah_hujan' => set_value('curah_hujan'),
		    'tata_air_lereng' => set_value('tata_air_lereng'),
		    'vegetasi' => set_value('vegetasi'),
		    'pola_tanam' => set_value('pola_tanam'),
		    'penggalian_dan_pemotongan_lereng' => set_value('penggalian_dan_pemotongan_lereng'),
		    'pencetakan_kolam' => set_value('pencetakan_kolam'),
		    'drainase' => set_value('drainase'),
		    'pembangunan_konstruksi' => set_value('pembangunan_konstruksi'),
		    'kepadatan_penduduk' => set_value('kepadatan_penduduk'),
		    'usaha_mitigasi' => set_value('usaha_mitigasi'),
		    'hasil' => set_value('hasil'),
		);
        $this->load->view('layout/layout', $data);
    }
    

    public function _rules() 
    {
		$this->form_validation->set_rules('id_desa', 'id desa', 'trim|required');
		$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		$this->form_validation->set_rules('kemiringan_lereng', 'kemiringan lereng', 'trim|required');
		$this->form_validation->set_rules('kondisi_tanah', 'kondisi tanah', 'trim|required');
		$this->form_validation->set_rules('batuan_penyusun_lereng', 'batuan penyusun lereng', 'trim|required');
		$this->form_validation->set_rules('curah_hujan', 'curah hujan', 'trim|required');
		$this->form_validation->set_rules('tata_air_lereng', 'tata air lereng', 'trim|required');
		$this->form_validation->set_rules('vegetasi', 'vegetasi', 'trim|required');
		$this->form_validation->set_rules('pola_tanam', 'pola tanam', 'trim|required');
		$this->form_validation->set_rules('penggalian_dan_pemotongan_lereng', 'penggalian dan pemotongan lereng', 'trim|required');
		$this->form_validation->set_rules('pencetakan_kolam', 'pencetakan kolam', 'trim|required');
		$this->form_validation->set_rules('drainase', 'drainase', 'trim|required');
		$this->form_validation->set_rules('pembangunan_konstruksi', 'pembangunan konstruksi', 'trim|required');
		$this->form_validation->set_rules('kepadatan_penduduk', 'kepadatan penduduk', 'trim|required');
		$this->form_validation->set_rules('usaha_mitigasi', 'usaha mitigasi', 'trim|required');
		$this->form_validation->set_rules('hasil', 'hasil', 'trim|required');

		$this->form_validation->set_rules('id_data_tes', 'id_data_tes', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_tes.php */
/* Location: ./application/controllers/Data_tes.php */
/* Please DO NOT modify this information : */
/* This file generated by Andre Bhaskoro (+62 82 333 817 317) At : 2017-01-06 08:02:43 */
/* http://bhas.web.id */