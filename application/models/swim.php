<?php
class Swim extends CI_Model {
    public function get_data($table_name, $id_name = FALSE, $id = FALSE) {
        if ($id_name) {
            $query = $this->db->where($id_name, $id);
        }
        $query = $this->db->get($table_name);
        return $query->result_array();
    }
}