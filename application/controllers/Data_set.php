<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_set extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_set_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $data_set = $this->Data_set_model->get_all();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data Train', '/data_set');

        $data = array(
            'title'       => 'Data Train' ,
            'content'     => 'data_set/data_set_list', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            
            'data_set_data' => $data_set
        );

        $this->load->view('layout/layout', $data);
    }

    public function read($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_set', '/data_set');
        $this->breadcrumbs->push('detail', '/data_set/read');
        $row = $this->Data_set_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Data_set' ,
                'content'     => 'data_set/data_set_read', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,
                
				'id_data_set' => $row->id_data_set,
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
            redirect(site_url('data_set'));
        }
    }

    public function create() 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_set', '/data_set');
        $this->breadcrumbs->push('tambah', '/data_set/create');
        $data = array(
            'title'       => 'Data_set' ,
            'content'     => 'data_set/data_set_form', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,

            'button' => 'Tambah',
            'action' => site_url('data_set/create_action'),
		    'id_data_set' => set_value('id_data_set'),
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
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'kemiringan_lereng' => $this->input->post('kemiringan_lereng',TRUE),
				'kondisi_tanah' => $this->input->post('kondisi_tanah',TRUE),
				'batuan_penyusun_lereng' => $this->input->post('batuan_penyusun_lereng',TRUE),
				'curah_hujan' => $this->input->post('curah_hujan',TRUE),
				'tata_air_lereng' => $this->input->post('tata_air_lereng',TRUE),
				'vegetasi' => $this->input->post('vegetasi',TRUE),
				'pola_tanam' => $this->input->post('pola_tanam',TRUE),
				'penggalian_dan_pemotongan_lereng' => $this->input->post('penggalian_dan_pemotongan_lereng',TRUE),
				'pencetakan_kolam' => $this->input->post('pencetakan_kolam',TRUE),
				'drainase' => $this->input->post('drainase',TRUE),
				'pembangunan_konstruksi' => $this->input->post('pembangunan_konstruksi',TRUE),
				'kepadatan_penduduk' => $this->input->post('kepadatan_penduduk',TRUE),
				'usaha_mitigasi' => $this->input->post('usaha_mitigasi',TRUE),
				'hasil' => $this->input->post('hasil',TRUE),
		    );

            $this->Data_set_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_set'));
        }
    }
    
    public function update($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_set', '/data_set');
        $this->breadcrumbs->push('update', '/data_set/update');
        
        $row = $this->Data_set_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Data_set' ,
                'content'     => 'data_set/data_set_form', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,

                'button' => 'Update',
                'action' => site_url('data_set/update_action'),
				'id_data_set' => set_value('id_data_set', $row->id_data_set),
				'kemiringan_lereng' => set_value('kemiringan_lereng', $row->kemiringan_lereng),
				'kondisi_tanah' => set_value('kondisi_tanah', $row->kondisi_tanah),
				'batuan_penyusun_lereng' => set_value('batuan_penyusun_lereng', $row->batuan_penyusun_lereng),
				'curah_hujan' => set_value('curah_hujan', $row->curah_hujan),
				'tata_air_lereng' => set_value('tata_air_lereng', $row->tata_air_lereng),
				'vegetasi' => set_value('vegetasi', $row->vegetasi),
				'pola_tanam' => set_value('pola_tanam', $row->pola_tanam),
				'penggalian_dan_pemotongan_lereng' => set_value('penggalian_dan_pemotongan_lereng', $row->penggalian_dan_pemotongan_lereng),
				'pencetakan_kolam' => set_value('pencetakan_kolam', $row->pencetakan_kolam),
				'drainase' => set_value('drainase', $row->drainase),
				'pembangunan_konstruksi' => set_value('pembangunan_konstruksi', $row->pembangunan_konstruksi),
				'kepadatan_penduduk' => set_value('kepadatan_penduduk', $row->kepadatan_penduduk),
				'usaha_mitigasi' => set_value('usaha_mitigasi', $row->usaha_mitigasi),
				'hasil' => set_value('hasil', $row->hasil),
		    );
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_set'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_data_set', TRUE));
        } else {
            $data = array(
				'kemiringan_lereng' => $this->input->post('kemiringan_lereng',TRUE),
				'kondisi_tanah' => $this->input->post('kondisi_tanah',TRUE),
				'batuan_penyusun_lereng' => $this->input->post('batuan_penyusun_lereng',TRUE),
				'curah_hujan' => $this->input->post('curah_hujan',TRUE),
				'tata_air_lereng' => $this->input->post('tata_air_lereng',TRUE),
				'vegetasi' => $this->input->post('vegetasi',TRUE),
				'pola_tanam' => $this->input->post('pola_tanam',TRUE),
				'penggalian_dan_pemotongan_lereng' => $this->input->post('penggalian_dan_pemotongan_lereng',TRUE),
				'pencetakan_kolam' => $this->input->post('pencetakan_kolam',TRUE),
				'drainase' => $this->input->post('drainase',TRUE),
				'pembangunan_konstruksi' => $this->input->post('pembangunan_konstruksi',TRUE),
				'kepadatan_penduduk' => $this->input->post('kepadatan_penduduk',TRUE),
				'usaha_mitigasi' => $this->input->post('usaha_mitigasi',TRUE),
				'hasil' => $this->input->post('hasil',TRUE),
		    );

            $this->Data_set_model->update($this->input->post('id_data_set', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_set'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_set_model->get_by_id($id);

        if ($row) {
            $this->Data_set_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_set'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_set'));
        }
    }

    public function _rules() 
    {
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

		$this->form_validation->set_rules('id_data_set', 'id_data_set', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}