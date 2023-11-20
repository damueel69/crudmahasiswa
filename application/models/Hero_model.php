<?php
// Hero_model.php
defined('BASEPATH') or exit('No direct script access allowed');

class Hero_model extends CI_Model
{
    public function get_all_heroes() {
        $this->db->select('hero.*, role.nama_role, synergy.nama_synergy');
        $this->db->from('hero');
        $this->db->join('role', 'hero.role = role.id', 'left');
        $this->db->join('synergy', 'hero.synergy = synergy.id', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    

    public function get_hero_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('hero');
        
        if ($query !== false && $query->num_rows() > 0) {
            $row = $query->row();
            $hero = [
                'id' => $row->id,
                'nama_hero' => $row->nama_hero,
                'role' => $row->role,
                'synergy' => $row->synergy,
            ];
            return $hero;
        }
        return null;
    }
    



    public function insert_hero($data)
    {
        $this->db->insert('hero', $data);
    }

    public function update_hero($where, $data)
    {
        $this->db->update('hero', $data, $where);
    }

    public function delete_hero($id)
    {
        $this->db->delete('hero', array('id' => $id));
    }

    

}


