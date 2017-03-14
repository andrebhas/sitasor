<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Desa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Desa_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $desa = $this->Desa_model->get_all();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Desa', '/desa');

        $data = array(
            'title'       => 'Desa' ,
            'content'     => 'desa/desa_list', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            
            'desa_data' => $desa
        );

        $this->load->view('layout/layout', $data);
    }

    public function read($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Desa', '/desa');
        $this->breadcrumbs->push('detail', '/desa/read');
        $row = $this->Desa_model->get_by_id($id);
        $dusun = $this->Desa_model->get_dusun($id);
        if ($row) {
            $data = array(
                'title'       => 'Desa' ,
                'content'     => 'desa/desa_read', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,
                'dusun'       => $dusun ,
				'id_desa' => $row->id_desa,
				'nama_desa' => $row->nama_desa,
			);
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('desa'));
        }
    }

    public function create() 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Desa', '/desa');
        $this->breadcrumbs->push('tambah', '/desa/create');
        $data = array(
            'title'       => 'Desa' ,
            'content'     => 'desa/desa_form', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            'button' => 'Tambah',
            'action' => site_url('desa/create_action'),
		    'id_desa' => set_value('id_desa'),
		    'nama_desa' => set_value('nama_desa'),
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
				'nama_desa' => $this->input->post('nama_desa',TRUE),
		    );

            $this->Desa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('desa'));
        }
    }
    
    public function update($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Desa', '/desa');
        $this->breadcrumbs->push('update', '/desa/update');
        
        $row = $this->Desa_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Desa' ,
                'content'     => 'desa/desa_form', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,

                'button' => 'Update',
                'action' => site_url('desa/update_action'),
				'id_desa' => set_value('id_desa', $row->id_desa),
				'nama_desa' => set_value('nama_desa', $row->nama_desa),
		    );
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('desa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_desa', TRUE));
        } else {
            $data = array(
				'nama_desa' => $this->input->post('nama_desa',TRUE),
		    );

            $this->Desa_model->update($this->input->post('id_desa', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('desa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Desa_model->get_by_id($id);

        if ($row) {
            $this->Desa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('desa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('desa'));
        }
    }

    public function tambah_dusun()
    {
            $data = array(
				'dusun' => $this->input->post('dusun'),
                'luas_daerah' => $this->input->post('luas_daerah'),
                'id_desa' => $this->input->post('id_desa'),
		    );
            $this->Desa_model->insert_dusun($data);
            redirect(site_url('desa/read/'.$this->input->post('id_desa')));
    }

    public function delete_dusun($id)
    {
        $row = $this->Desa_model->get_dusun_by_id($id);
        if($row) {
            $this->Desa_model->delete_dusun($id);
            redirect(site_url('desa/read/'.$row->id_desa));
        }       
    }

    public function update_dusun()
    {
        $row = $this->Desa_model->get_dusun_by_id($this->input->post('id_desa_detail_up', TRUE));
        if($row){
            $data = array(
				'dusun' => $this->input->post('dusun_up',TRUE),
                'luas_daerah' => $this->input->post('luas_daerah_up',TRUE),
		    );
            $this->Desa_model->update_dusun($this->input->post('id_desa_detail_up', TRUE), $data);
            redirect(site_url('desa/read/'.$row->id_desa));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('nama_desa', 'nama desa', 'trim|required');

		$this->form_validation->set_rules('id_desa', 'id_desa', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}
