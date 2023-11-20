<?php
class Role_model extends CI_Model
{
    public function get_all_roles()
    {
        $query = $this->db->get('role'); // Assuming the table name is 'role'
        return $query->result();
    }

    public function insert_role($data)
    {
        $this->db->insert('role', $data); // Assuming the table name is 'role'
    }

    public function delete_role($id)
    {
        $this->db->where('id', $id); // Assuming 'id' is the primary key
        $this->db->delete('role'); // Assuming the table name is 'role'
    }

    public function get_role_by_id($id)
    {
        $query = $this->db->get_where('role', array('id' => $id)); // Assuming the table name is 'role'
        return $query->row();
    }

    public function update_role($where, $data)
    {
        $this->db->where($where);
        $this->db->update('role', $data); // Assuming the table name is 'role'
    }
}
