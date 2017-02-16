<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Groups_model');
         $this->load->model('Desa_model');
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
    }

    public function index()
    {
        $users = $this->Users_model->get_by_group('2');
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Users', '/users');

        $data = array(
            'title'       => 'Users' ,
            'content'     => 'users/users_list', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            
            'users_data' => $users
        );

        $this->load->view('layout/layout', $data);
    }

    public function read($id) 
    {
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Users', '/users');
        $this->breadcrumbs->push('detail', '/users/read');
        $row = $this->Users_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Users' ,
                'content'     => 'users/users_read', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,
                
				'id' => $row->id,
				'name' => $row->name,
				'email' => $row->email,
				'username' => $row->username,
				'password' => $row->password,
				'phone' => $row->phone,
				'alamat' => $row->alamat,
				'user_img' => $row->user_img,
				'ip_address' => $row->ip_address,
				'last_login' => $row->last_login,
				'salt' => $row->salt,
				'activation_code' => $row->activation_code,
				'forgotten_password_code' => $row->forgotten_password_code,
				'forgotten_password_time' => $row->forgotten_password_time,
				'remember_code' => $row->remember_code,
				'active' => $row->active,
				'created_on' => $row->created_on,
			);
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function create() 
    {
        $desa = $this->Desa_model->get_all();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Users', '/users');
        $this->breadcrumbs->push('tambah', '/users/create');
        $data = array(
            'title'       => 'Users' ,
            'content'     => 'users/users_form', 
            'breadcrumbs' => $this->breadcrumbs->show(),
            'user'        => $user ,
            'desa'        => $desa ,

            'button' => 'Tambah',
            'action' => site_url('users/create_action'),
		    'id' => set_value('id'),
            'id_desa' => set_value('id_desa'),
		    'name' => set_value('name'),
		    'email' => set_value('email'),
		    'username' => set_value('username'),
		    'password' => set_value('password'),
		    'phone' => set_value('phone'),
		    'alamat' => set_value('alamat'),
		    'user_img' => set_value('user_img'),
		);
        $this->load->view('layout/layout', $data);
    }
    
    public function create_action() 
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_emails|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|matches[password]');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('id_desa', 'id_desa', 'trim|required');
        $this->form_validation->set_rules('user_img', 'User Image', 'callback_image_upload');
        //$this->form_validation->set_rules('group_id', 'Level User', 'trim|required');
        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $CI =& get_instance();
            $upload_data = $CI->upload->data();
            $img = $upload_data['file_name'];
            $data = array(
				'nama' => $this->input->post('name',TRUE),
				'phone' => $this->input->post('phone',TRUE),
				'alamat' => $this->input->post('alamat',TRUE),
				'user_img' => $img,
                'id_desa' => $this->input->post('id_desa',TRUE),
		    );

            $username = $this->input->post('username',TRUE);
            $password = $this->input->post('password',TRUE);
            $email = $this->input->post('email',TRUE);
            $group = array('2');

            $this->ion_auth->register($username, $password, $email, $data, $group);

            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(base_url('users')); 
        }
    }
    
    public function update($id) 
    {
        $desa = $this->Desa_model->get_all();
        $user = $this->ion_auth->user()->row();
        $this->breadcrumbs->push('Users', '/users');
        $this->breadcrumbs->push('update', '/users/update');
        
        $row = $this->Users_model->get_by_id($id);
        if ($row) {
            $data = array(
                'title'       => 'Users' ,
                'content'     => 'users/users_form', 
                'breadcrumbs' => $this->breadcrumbs->show(),
                'user'        => $user ,
                'desa'        => $desa ,

                'button' => 'Update',
                'action' => site_url('users/update_action'),
				'id' => set_value('id', $row->user_id),
                'id_desa' => set_value('id_desa', $row->id_desa),
				'name' => set_value('name', $row->nama),
				'email' => set_value('email', $row->email),
				'username' => set_value('username', $row->username),
				'password' => set_value('password', $row->password),
				'phone' => set_value('phone', $row->phone),
				'alamat' => set_value('alamat', $row->alamat),
                'user_img' => set_value('user_img', $row->user_img),
		    );
            $this->load->view('layout/layout', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }
    
    public function update_action() 
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
				'nama' => $this->input->post('name',TRUE),
				'email' => $this->input->post('email',TRUE),
				'username' => $this->input->post('username',TRUE),
				'phone' => $this->input->post('phone',TRUE),
				'alamat' => $this->input->post('alamat',TRUE),
                'id_desa' => $this->input->post('id_desa',TRUE),
		    );

            $this->Users_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            if ($this->ion_auth->is_admin()) {
                redirect(site_url('users'),'refresh'); 
            } else {
                redirect('users/update/'.$this->input->post('id', TRUE),'refresh');
            }
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Users_model->get_by_id($id);

        if ($row) {
            $this->Users_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('users'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function ubah_foto($id)
    {
        $this->form_validation->set_rules('user_img', 'User Image', 'callback_image_upload');
        if ($this->form_validation->run() == FALSE) {
            $this->update($id);
        } else {
            $CI =& get_instance();
            $upload_data = $CI->upload->data();
            $gambar = $upload_data['file_name'];
            $data = array(
                'user_img' => $gambar,
            );
            $row = $this->Users_model->get_by_id($id);
            unlink('./images/users/'.$row->user_img);
            $this->Users_model->update($id,$data);
            if ($this->ion_auth->is_admin()) {
                redirect(site_url('users/update/'.$id)); 
            } else {
                redirect('home/update_akun/'.$id,'refresh');
            }
           
        }
        
    }

    public function ubah_password($id)
    {
        $password = $this->input->post('password',TRUE);
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->update($id);
        } else {
            $data = array(
                'password' => $password,
            );
            $this->ion_auth->update($id,$data);
            $this->session->set_flashdata('message', 'Password Berhasil dirubah');
            if ($this->ion_auth->is_admin()) {
                redirect(site_url('users/update/'.$id)); 
            } else {
                redirect('Dashboard/','refresh');
            }
        }
    }
    public function image_upload(){
        if($_FILES['user_img']['size'] != 0){
            $upload_dir = './images/users/';
            if (!is_dir($upload_dir)) {
                 mkdir($upload_dir);
            }   
            $config['upload_path']   = $upload_dir;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name']     = 'usr_img_'.substr(md5(rand()),0,7);
            $config['overwrite']     = true;
            $config['max_size']      = '51200';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('user_img')){
                $this->form_validation->set_message('image_upload', $this->upload->display_errors());
                return false;
            }   
            else{
                $this->upload_data['file'] =  $this->upload->data();
                return true;
            }   
        }   
        else{
            $this->form_validation->set_message('image_upload', "No file selected");
            return false;
        }
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
/* Please DO NOT modify this information : */
/* This file generated by Andre Bhaskoro (+62 82 333 817 317) At : 2016-09-28 04:20:36 */
/* http://bhas.web.id */