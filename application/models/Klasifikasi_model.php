<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasifikasi_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    /* Ambil data ---> P(kemiringan_lereng = ? | Y= ?) = hasil_bagi  */
    public function get_parameter($parameter,$val_param,$hasil)
    {
    	$sql = "
    		SELECT (
    			select count(hasil) 
    			from data_set 
    			where `$parameter`= '$val_param' AND hasil='$hasil'
    		) / COUNT($parameter) as hasil_bagi
			FROM `data_set`
			WHERE $parameter = '$val_param' ";
    	$query=$this->db->query($sql);
        return $query->row();
    }

}

/* End of file Klasifikasi_model.php */
/* Location: ./application/models/Klasifikasi_model.php */