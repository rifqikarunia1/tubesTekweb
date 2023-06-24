<?php

class table2model extends CI_Model
{

    function gettable2()
    {
        return $this->db->get('table2');
    }


    function inserttable2()
    {
        $table2 = array(
            "nama" => $this->input->post('nama'),
            "jenis" => $this->input->post('jenis'),
            "tahun" => $this->input->post('tahun')
        );
        return $this->db->insert('table2', $table2);
    }

    function getTable2ById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('table2');
    }

    function updatetable1($id)
    {
        $table2 = array(
            "nama" => $this->input->post('nama'),
            "jenis" => $this->input->post('jenis'),
            "tahun" => $this->input->post('tahun')
        );
        $this->db->where("id", $id);
        return $this->db->update("table2", $table2);
    }

    function deletetable2($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("table2");
    }
}
