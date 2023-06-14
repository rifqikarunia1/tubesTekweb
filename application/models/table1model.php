<?php

class table1model extends CI_Model
{

    function gettable1()
    {
        return $this->db->get('table1');
    }


    function inserttable1()
    {
        $table1 = array(
            "nama" => $this->input->post('nama'),
            "penemuan" => $this->input->post('penemuan'),
            "tahun" => $this->input->post('tahun')
        );
        return $this->db->insert('table1', $table1);
    }

    function getTable1ById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('table1');
    }

    function updatetable1($id)
    {
        $table1 = array(
            "nama" => $this->input->post('nama'),
            "penemuan" => $this->input->post('penemuan'),
            "tahun" => $this->input->post('tahun')
        );
        $this->db->where("id", $id);
        return $this->db->update("table1", $table1);
    }

    function deleteTable1($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("table1");
    }
}