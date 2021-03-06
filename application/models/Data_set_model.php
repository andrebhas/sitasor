<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_set_model extends CI_Model
{

    public $table = 'data_set';
    public $id = 'id_data_set';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_data_set', $q);
	$this->db->or_like('kemiringan_lereng', $q);
	$this->db->or_like('kondisi_tanah', $q);
	$this->db->or_like('batuan_penyusun_lereng', $q);
	$this->db->or_like('curah_hujan', $q);
	$this->db->or_like('tata_air_lereng', $q);
	$this->db->or_like('vegetasi', $q);
	$this->db->or_like('pola_tanam', $q);
	$this->db->or_like('penggalian_dan_pemotongan_lereng', $q);
	$this->db->or_like('pencetakan_kolam', $q);
	$this->db->or_like('drainase', $q);
	$this->db->or_like('pembangunan_konstruksi', $q);
	$this->db->or_like('kepadatan_penduduk', $q);
	$this->db->or_like('usaha_mitigasi', $q);
	$this->db->or_like('hasil', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_data_set', $q);
	$this->db->or_like('kemiringan_lereng', $q);
	$this->db->or_like('kondisi_tanah', $q);
	$this->db->or_like('batuan_penyusun_lereng', $q);
	$this->db->or_like('curah_hujan', $q);
	$this->db->or_like('tata_air_lereng', $q);
	$this->db->or_like('vegetasi', $q);
	$this->db->or_like('pola_tanam', $q);
	$this->db->or_like('penggalian_dan_pemotongan_lereng', $q);
	$this->db->or_like('pencetakan_kolam', $q);
	$this->db->or_like('drainase', $q);
	$this->db->or_like('pembangunan_konstruksi', $q);
	$this->db->or_like('kepadatan_penduduk', $q);
	$this->db->or_like('usaha_mitigasi', $q);
	$this->db->or_like('hasil', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}
