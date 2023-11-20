<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Synergy_model extends CI_Model
{
    public function get_all_synergies()
    {
        return $this->db->get('synergy')->result(); // Assumes your table is named 'synergy'
    }

    public function get_synergy_by_id($id)
    {
        return $this->db->get_where('synergy', array('id' => $id))->row(); // Assumes your table is named 'synergy'
    }

    public function insert_synergy($data)
    {
        $this->db->insert('synergy', $data); // Assumes your table is named 'synergy'
    }

    public function update_synergy($where, $data)
    {
        $this->db->update('synergy', $data, $where); // Assumes your table is named 'synergy'
    }

    public function delete_synergy($id)
    {
        $this->db->delete('synergy', array('id' => $id)); // Assumes your table is named 'synergy'
    }
}
