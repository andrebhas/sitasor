<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Desa_model extends CI_Model
{

    public $table = 'desa';
    public $id = 'id_desa';
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
        $this->db->like('id_desa', $q);
	$this->db->or_like('nama_desa', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_desa', $q);
	$this->db->or_like('nama_desa', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function get_dusun_by_id($id)
    {
        $this->db->where('id_desa_detail', $id);
        return $this->db->get('detail_desa')->row();
    }

    function get_dusun_by_id_desa($id_desa)
    {
        $this->db->where('id_desa', $id_desa);
        return $this->db->get('detail_desa')->result();
    }

    function insert_dusun($data)
    {
        $this->db->insert('detail_desa', $data);
    }

    function delete_dusun($id)
    {
        $this->db->where('id_desa_detail', $id);
        $this->db->delete('detail_desa');
    }

    function update_dusun($id, $data)
    {
        $this->db->where('id_desa_detail', $id);
        $this->db->update('detail_desa', $data);
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

    function get_dusun($id)
    {
        $this->db->where('id_desa', $id);
        return $this->db->get('detail_desa')->result();
    }

}
