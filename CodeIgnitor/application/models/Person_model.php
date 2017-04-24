<?php

/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 8:23
 */
class Person_model extends CI_Model
{
    public function  __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function getPerson($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('person');

        return $query;
    }

    public function getPersons()
    {
        $query = $this->db->get('person');
        return $query->result_array();
    }

    public function updatePerson($data)
    {
        $this->db->replace('person', $data);
    }


}