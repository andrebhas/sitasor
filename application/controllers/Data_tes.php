<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_tes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_tes_model');
        $this->load->model('Data_set_model');
        $this->load->model('Users_model');
        $this->load->model('Desa_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $data_tes = $this->Data_tes_model->get_all();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data Sementara', '/data_tes');
        if($this->ion_auth->is_admin()){
            $data_tes = $this->Data_tes_model->get_all();
        } else {
            $data_tes = $this->Data_tes_model->get_by_desa($user->id_desa);
        }
        $data = array(
            'title'       => 'Data Sementara' ,
            'content'     => 'histori/data_tes_list', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            
            'data_tes_data' => $data_tes
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
                'content'     => 'histori/data_tes_read', 
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
            redirect(site_url('histori'));
        }
    }

    public function create() 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_tes', '/data_tes');
        $this->breadcrumbs->push('tambah', '/data_tes/create');
        $data = array(
            'title'       => 'Data_tes' ,
            'content'     => 'histori/data_tes_form', 
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
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'id_desa' => $this->input->post('id_desa',TRUE),
				'id_user' => $this->input->post('id_user',TRUE),
				'tanggal' => $this->input->post('tanggal',TRUE),
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

            $this->Data_tes_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('data_tes'));
        }
    }
    
    public function update($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Data_tes', '/data_tes');
        $this->breadcrumbs->push('update', '/data_tes/update');
        
        $row = $this->Data_tes_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Data_tes' ,
                'content'     => 'histori/data_tes_form', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,

                'button' => 'Update',
                'action' => site_url('data_tes/update_action'),
				'id_data_tes' => set_value('id_data_tes', $row->id_data_tes),
				'id_desa' => set_value('id_desa', $row->id_desa),
				'id_user' => set_value('id_user', $row->id_user),
				'tanggal' => set_value('tanggal', $row->tanggal),
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
            redirect(site_url('histori'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_data_tes', TRUE));
        } else {
            $data = array(
				'id_desa' => $this->input->post('id_desa',TRUE),
				'id_user' => $this->input->post('id_user',TRUE),
				'tanggal' => $this->input->post('tanggal',TRUE),
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

            $this->Data_tes_model->update($this->input->post('id_data_tes', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_tes'));
        }
    }

    public function approve()
    {
        $data_tes = $this->Data_tes_model->get_by_id($this->input->post('id',TRUE));
        $data = array(
                'kemiringan_lereng' => $data_tes->kemiringan_lereng,
				'kondisi_tanah' => $data_tes->kondisi_tanah,
				'batuan_penyusun_lereng' => $data_tes->batuan_penyusun_lereng,
				'curah_hujan' => $data_tes->curah_hujan,
				'tata_air_lereng' => $data_tes->tata_air_lereng,
				'vegetasi' => $data_tes->vegetasi,
				'pola_tanam' => $data_tes->pola_tanam,
				'penggalian_dan_pemotongan_lereng' => $data_tes->penggalian_dan_pemotongan_lereng,
				'pencetakan_kolam' => $data_tes->pencetakan_kolam,
				'drainase' => $data_tes->drainase,
				'pembangunan_konstruksi' => $data_tes->pembangunan_konstruksi,
				'kepadatan_penduduk' => $data_tes->kepadatan_penduduk,
				'usaha_mitigasi' => $data_tes->usaha_mitigasi,
				'hasil' => $this->input->post('hasil',TRUE),
        );
        $data_status = array(
            'status' => '1',
        );
        $tambah_dataset = $this->Data_set_model->insert($data);
        $ganti_status = $this->Data_tes_model->update($this->input->post('id',TRUE),$data_status);
        redirect('data_tes','refresh');
    }

    
    public function delete($id) 
    {
        $row = $this->Data_tes_model->get_by_id($id);

        if ($row) {
            $this->Data_tes_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_tes'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_tes'));
        }
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

